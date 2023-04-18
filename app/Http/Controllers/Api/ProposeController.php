<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DwtServices;
use Exception;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class ProposeController extends Controller
{
    private $dwtService;
    //contructor
    public function __construct()
    {
        // $this->middleware('auth');
        $this->dwtService = new DwtServices();
    }
    

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)

    {
        try {

            $q = $request->get('q');
            $page = $request->get('page');
            $limit = $request->get('limit');
            // $data = $this->dwtService->searchPosition($q, $page, $limit);
            
            $listUsers = $this->dwtService->listUsers();
            // dd($listUsers);
            // $listPositions = $this->dwtService->listPositions();
            // $listDepartments = $this->dwtService->listDepartments();
            // $listEquimentPack = $this->dwtService->listEquimentPack();
            // $listPositionLevel = $this->dwtService->listPositionLevel();
            return view('DeXuat_XetDuyet.deXuatMo')
                // ->with('data', $data)
                // ->with('listDepartments', $listDepartments)
                // ->with('listEquimentPack', $listEquimentPack)
                // ->with('listPositionLevel', $listPositionLevel)
                // ->with('listPositions', $listPositions)
                ->with('listUsers', $listUsers);
        } catch (Exception $e) {
            $error = $e->getMessage();
            return view('DeXuat_XetDuyet.deXuatMo')->with('listPositions', []);
        }
    }

    public function store(Request $request)
    {
        try {

            $data = $request->validate([
                'name' => 'required',
                'description' => 'nullable',
                'parent' => 'required|numeric',
                'position_level' => 'required|numeric',
                'salary_fund' => 'required|numeric',
                'max_employees' => 'nullable|numeric',
            ]);
            // $this->dwtService->createPosition($data);
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
                'name' => 'nullable',
                'description' => 'nullable',
                'parent' => 'nullable|numeric',
                'position_level' => 'nullable|numeric',
                'salary_fund' => 'nullable|numeric',
                'max_employees' => 'nullable|numeric',
            ]);
            // $this->dwtService->updatePosition($id, $data);
            return back()->with('success', 'Cập nhật thành công');
        } catch (Exception $e) {
            dd($e);
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }

    public function delete($id)
    {
        try {
            $this->dwtService->deletePosition($id);
            return back()->with('success', 'Xóa thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }
}
