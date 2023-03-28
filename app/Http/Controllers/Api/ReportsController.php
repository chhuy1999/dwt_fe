<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DwtServices;
use Exception;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class ReportsController extends Controller
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
            $data = $this->dwtService->searchReports($q, $page, $limit);
            $listDepartments = $this->dwtService->listReports();

            return view('HopDonVi.giaoBan')
                 ->with('data', $data)
                ->with('listReports', $listReports);
        } catch (Exception $e) {
            $error = $e->getMessage();
            return view('HopDonVi.giaoBan')->with('listReports', []);
        }
    }



    public function store(Request $request)
    {
        try {

            $data = $request->validate([
                'name' => 'required',
            ]);
            $this->dwtService->createReports($data);
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
            $this->dwtService->updateReports($id, $data);
            return back()->with('success', 'Cập nhật thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }

    public function delete($id)
    {
        try {
            $this->dwtService->deleteReports($id);
            return back()->with('success', 'Xóa thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }
}
