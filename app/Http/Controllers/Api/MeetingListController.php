<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DwtServices;
use Exception;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class MeetingListController extends Controller
{
    private $dwtService;
    //constructor
    public function __construct()
    {
        // $this->middleware('auth');
        $this->dwtService = new DwtServices();
    }
    //
    public function index(Request $request)
    {
        try {
            $q = $request->get('q');
            $page = $request->get('page');
            $limit = $request->get('limit');
            $data = $this->dwtService->searchMeetingByCode($q, $page, $limit);
            $listMeeting = $this->dwtService->listMeeting();
            // $listMeeting = $listMeeting->data;
            $listDepartments = $this->dwtService->listDepartments();
            $listUnits = $this->dwtService->listUnits();
            $listUsers = $this->dwtService->listUsers();

            return view('HopDonVi.danhSachCuocHop')
                ->with('data', $data)
                ->with('listMeeting', $listMeeting)
                ->with('listDepartments', $listDepartments)
                ->with('listUsers', $listUsers);
        } catch (Exception $e) {
            $error = $e->getMessage();
            return view('HopDonVi.danhSachCuocHop');
        }
    }
    public function meetingOpen(Request $request)
    {

        
        try {
            $q = $request->get('q');
            $page = $request->get('page');
            $limit = $request->get('limit');
            $data = $this->dwtService->searchMeetingByCode($q, $page, $limit);
            $listMeeting = $this->dwtService->listMeeting();
            // $listMeeting = $listMeeting->data;
            $listDepartments = $this->dwtService->listDepartments();
            $listUnits = $this->dwtService->listUnits();
            $listUsers = $this->dwtService->listUsers();

            return view('HopDonVi.danhSachCuocHopDangDienRa')
                ->with('data', $data)
                ->with('listMeeting', $listMeeting)
                ->with('listDepartments', $listDepartments)
                ->with('listUsers', $listUsers);
        } catch (Exception $e) {
            $error = $e->getMessage();
            return view('HopDonVi.danhSachCuocHopDangDienRa');
        }
    }


    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required',
                'description' => 'required',
                'unit_id' => 'required|numeric',
                "title"=> 'required',
                "start_time"=> 'numeric',
                "end_time"=> 'numeric',
                "secretary_id"=> 'numeric',
                "leader_id"=> 'numeric',
                "type"=> 'required',
                "code"=> "numeric",
                // "participants"=> [1,2,3,4],
                // "departement_id"=> 1
            ]);
            $this->dwtService->createKpiKey($data);
            return back()->with('success', 'Thêm mới thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $data = $request->validate([
                'name' => 'nullable',
                'description' => 'nullable',
                'unit_id' => 'nullable|numeric',
            ]);

            $this->dwtService->updateKpiKey($id, $data);
            return back()->with('success', 'Cập nhật thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }

    public function delete($id)
    {
        try {
            $this->dwtService->deleteKpiKey($id);
            return back()->with('success', 'Xóa thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }
}
