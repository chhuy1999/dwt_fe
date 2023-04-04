<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DwtServices;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class AssignTaskController extends Controller
{
    //
    private $dwtService;

    public function __construct()
    {
        // $this->middleware('auth');
        $this->dwtService = new DwtServices();
    }

    public function index(Request $request)
    {
        try {
            //get list target
            $listTargets = $this->dwtService->searchKpiTargets("", 1, 9999);
            //get list assigned task
            $listAssignTasks = $this->dwtService->searchKpiTargetDetails("", 1, 100, "assigned");
            // dd($listAssignTasks);
            $listUsers = $this->dwtService->listUsers();
            $listUsers = $listUsers->data;
            $kpiKeys = $this->dwtService->searchKpiKeys("", 1, 100);
            $kpiKeys = $kpiKeys->data;
            $listPositions = $this->dwtService->listPositions();


            return view('KeHoach_GiaoViec.giaoViec')
                ->with('listTargets', $listTargets)
                ->with('listAssignTasks', $listAssignTasks)
                ->with('listUsers', $listUsers)
                ->with('kpiKeys', $kpiKeys)
                ->with('listPositions', $listPositions);
        } catch (Exception $e) {
            error_log($e->getMessage());
            $error = $e->getMessage();
            return view('KeHoach_GiaoViec.giaoViec')
                ->with('error', $error)
                ->with('listTargets', ["data" => []])
                ->with('listAssignTasks', ["data" => []])
                ->with('listUsers', [])
                ->with('kpiKeys', []);
        }
    }

    public function assignTask(Request $request)
    {
        try {
            //create new target detail with users
            $data = $request->validate([
                'name' => 'required',
                'description' => 'nullable',
                'daterange' => 'required',
                'manday' => 'required|numeric',
                'executionPlan' => 'nullable',
                'users' => 'required|array',
                'involvedPeople' => 'nullable|array',
                'kpiKeys' => 'nullable|array',
                "target_id" => "required|numeric",

            ]);

            $dateRange = $data['daterange'];
            $startDate = explode(" - ", $dateRange)[0];
            //remove space
            $startDate = str_replace(" ", "", $startDate);
            //replace / to -
            $startDate = str_replace("/", "-", $startDate);
            $endDate = explode(" - ", $dateRange)[1];
            //remove space
            $endDate = str_replace(" ", "", $endDate);
            //replace / to -
            $endDate = str_replace("/", "-", $endDate);

            $data['startDate'] = date('Y-m-d', strtotime($startDate));
            $data['deadline'] = date('Y-m-d', strtotime($endDate));


            $this->dwtService->createKpiTargetDetail($data);

            return back()->with('success', 'Giao viec thành công');
        } catch (Exception $e) {
            error_log($e->getMessage());
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }

    public function unAssignTask($id, Request $request) {
        try {
            $this->dwtService->unAssignTask($id);
            return back()->with('success', 'Hủy giao việc thành công');
        } catch (Exception $e) {
            error_log($e->getMessage());
            $error = $e->getMessage();
            return back()->with('error', $error);
        }

    }
}
