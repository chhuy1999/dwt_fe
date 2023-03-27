<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DwtServices;
use Exception;
use Illuminate\Http\Request;

class TargetDetailController extends Controller
{
    //init serviceS
    private $dwtService;
    //constructor
    public function __construct()
    {
        // $this->middleware('auth');
        $this->dwtService = new DwtServices();
    }

    public function index(Request $request)
    {
        try {
            $q = $request->get('q');
            $page = $request->get('page');
            $limit = $request->get('limit');
            $data = $this->dwtService->searchKpiTargetDetails($q, $page, $limit);
            $listTargets = $this->dwtService->searchKpiTargets("", 1, 100);
            $listUnits = $this->dwtService->listUnits();
            $listPositions = $this->dwtService->listPositions();
            $listDepartments = $this->dwtService->listDepartments();
            return view('CauHinh.danhMucNhiemVu')
                ->with('listTargetDetails', $data)
                ->with('listUnits', $listUnits)
                ->with('listPositions', $listPositions)
                ->with('listDepartments', $listDepartments)
                ->with('listTargets', $listTargets);
        } catch (Exception $e) {
            $error = $e->getMessage();
            return view('CauHinh.danhMucNhiemVu')->with('listTargetDetails', []);
        }
    }

    public function store(Request $request)
    {
        try {
            // $data = $request->validate([
            //     'target_id' => 'required|numeric',
            //     'unit_id' => 'required|numeric',
            //     'position_id' => 'required|numeric',
            //     'departement_id' => 'required|numeric',
            //     'name' => 'required',
            //     'description' => 'required',
            //     'quantity' => 'required|numeric',
            //     'manday' => 'required|numeric',

            //     'target_status' => 'required',

            // ]);
            return back()->with('success', 'Thêm mới thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }

    public function update($id, Request $request)
    {
        try {

            $data = $request->validate([
                'target_id' => 'nullable|numeric',
                'position_id' => 'nullable|numeric',
                'departement_id' => 'nullable|numeric',
                'name' => 'nullable',
                'executionPlan' => 'nullable',
                'description' => 'nullable',
                'manday' => 'nullable|numeric',
                "daterange" => "nullable",
            ]);
            $data['users'] = [];
            if (isset($request['user1'])) {
                array_push($data['users'], $request['user1']);
            }
            if (isset($request['user2'])) {
                array_push($data['users'], $request['user2']);
            }
            if (isset($request['daterange'])) {
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
            }

            $this->dwtService->updateKpiTargetDetail($id, $data);
            return back()->with('success', 'Cập nhật thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }

    public function delete($id)
    {
        try {
            $this->dwtService->deleteKpiTargetDetail($id);
            return back()->with('success', 'Xóa thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }
}
