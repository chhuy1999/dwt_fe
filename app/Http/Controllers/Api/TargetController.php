<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DwtServices;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class TargetController extends Controller
{
    //
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
            $data = $this->dwtService->searchKpiTargets("", 1, 999);
            $listUnits = $this->dwtService->listUnits();
            $listPositions = $this->dwtService->listPositions();
            $listDepartments = $this->dwtService->listDepartments();
            //get list KPI Key
            $listKpi = $this->dwtService->searchKpiKeys($q, $page, $limit);
            // dd($listKPI);

            return view('CauHinh.danhMucDinhMuc')
                ->with('listTargets', $data)
                ->with('listUnits', $listUnits)
                ->with('listPositions', $listPositions)
                ->with('listDepartments', $listDepartments)
                ->with('listKpi', $listKpi);
        } catch (Exception $e) {
            // dd($e);
            $error = $e->getMessage();
            return view('CauHinh.danhMucDinhMuc')->with('listTargets', []);
        }
    }

    public function store(Request $request)
    {
        try {

            $data = $request->validate([
                'name' => 'required',
                'manday' => 'required|numeric',
                'description' => 'nullable',
                'departement_id' => 'required|numeric',
                'position_id' => 'required|numeric',
                // 'unit_id' => 'required|numeric',
                // 'quantity' => 'required|numeric',
            ]);
            $this->dwtService->createKpiTarget($data);
            return back()->with('success', 'Thêm mới thành công');
        } catch (Exception $e) {
            error_log($e->getMessage());
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }

    public function update($id, Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'nullable',
                'manday' => 'nullable|numeric',
                'description' => 'nullable',
                'departement_id' => 'nullable|numeric',
                'position_id' => 'nullable|numeric',
                // 'unit_id' => 'nullable|numeric',
                // 'quantity' => 'nullable|numeric',
            ]);
            $this->dwtService->updateKpiTarget($id, $data);
            return back()->with('success', 'Cập nhật thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }

    public function delete($id)
    {
        try {
            $this->dwtService->deleteKpiTarget($id);
            return back()->with('success', 'Xóa thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }
}
