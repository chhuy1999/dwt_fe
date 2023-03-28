<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DwtServices;
use Exception;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class UsersController extends Controller
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
        // dd( $request);
        try {

            $q = $request->get('q');
        
            $page = $request->get('page');
            $limit = $request->get('limit');
            $data = $this->dwtService->searchUser($q, $page, $limit);
            // dd($data);
            $listDepartments = $this->dwtService->listDepartments();
            $listPositions = $this->dwtService->listPositions();
            $listUsers = $this->dwtService->listUsers(); // lay cai bien nay de render view trong khi search result thi o dong 35 ???

            return view('CauHinh.danhSachThanhVien')
                ->with('data', $data)
                ->with('listDepartments', $listDepartments)
                ->with('listPositions', $listPositions)
                ->with('listUsers', $listUsers);
        } catch (Exception $e) {
            $error = $e->getMessage();
            return view('CauHinh.danhSachThanhVien')->with('listUsers', []);
        }
    }

    public function store(Request $request)
    {
        try {
            

            $data = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required|numeric',
                'code' => 'required',
                'phone' => 'required|numeric',
                'sex' => 'required',
                'address' => 'required',
                'dob' => 'required',
                'departement_id' => 'required|numeric',
                'position_id' => 'required|numeric',               
               
            ]);
            //format fe date to api required date dd/mm/yyyy to yyyy-MM-DD
            //replace / to -
            $dob = str_replace("/", "-", $data['dob']);
            $dob = date('Y-m-d', strtotime($data['dob']));
         
            //update the dob to send to api
            $data['dob'] = $dob;
            //set date of join is current day
            $data['doj'] = date('Y-m-d');
            //set role  defaut is user TODO: need to pick from fe
            $data['role'] = 'user';
            //department ? position ? positionLevel ? fe cura may cai nay dau >
         
            $this->dwtService->createUser($data);
            return back()->with('success', 'Thêm mới thành công');
        } catch (Exception $e) {
            dd($e);
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }

    

    public function update($id, Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'nullable',
                'salary_fund' => 'nullable|numeric',
                'max_employees' => 'nullable|numeric',
            ]);
            $this->dwtService->updateUser($id, $data);
            return back()->with('success', 'Cập nhật thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }

    public function delete($id)
    {
        try {
            $this->dwtService->deleteUser($id);
            return back()->with('success', 'Xóa thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }
}
