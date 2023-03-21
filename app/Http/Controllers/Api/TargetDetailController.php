<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DwtServices;
use Exception;
use Illuminate\Http\Request;

class TargetDetailController extends Controller
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
            $data = $request->validate([
                'target_id' => 'required|numeric',
                'unit_id' => 'required|numeric',
                'position_id' => 'required|numeric',
                'departement_id' => 'required|numeric',
                'name' => 'required',
                'description' => 'required',
                'quantity' => 'required|numeric',
                'manday' => 'required|numeric',
                
                'target_status' => 'required',

            ]);

        }catch (Exception $e){
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
