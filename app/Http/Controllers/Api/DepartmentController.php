<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DwtServices;
use Exception;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class DepartmentController extends Controller
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
            $data = $this->dwtService->searchKpiTargets($q, $page, $limit);
            $listDepartments = $this->dwtService->listDepartments();

            return view('Cauhinh.hoSoDonVi')
                ->with('listDepartments', $listDepartments);
        } catch (Exception $e) {
            $error = $e->getMessage();
            return view('Cauhinh.hoSoDonVi')->with('listDepartments', []);
        }
    }



    public function store(Request $request)
    {
        try {

            $data = $request->validate([
                'name' => 'required',
            ]);
            $this->dwtService->createDepartment($data);
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
            ]);
            $this->dwtService->updateDepartment($id, $data);
            return back()->with('success', 'Cập nhật thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }

    public function delete($id)
    {
        try {
            $this->dwtService->deleteDepartment($id);
            return back()->with('success', 'Xóa thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }
}
