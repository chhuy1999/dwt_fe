<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DwtServices;
use Exception;
use Illuminate\Http\Request;
use Termwind\Components\Dd;
use Illuminate\Support\Carbon;

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
            $listPositionLevel = $this->dwtService->listPositionLevel();
            $listUsers = $this->dwtService->listUsers();
            $listEquimentPack = $this->dwtService->listEquimentPack();
            return view('CauHinh.danhSachThanhVien')
                ->with('data', $data)
                ->with('listDepartments', $listDepartments)
                ->with('listPositions', $listPositions)
                ->with('listPositionLevel', $listPositionLevel)
                ->with('listUsers', $listUsers)
                ->with('listEquimentPack', $listEquimentPack);
        } catch (Exception $e) {
            $error = $e->getMessage();
            return view('CauHinh.danhSachThanhVien')->with('listUsers', []);
        }
    }

    public function store(Request $request)
    {
        try {
         
            // dd($request);
            $data = $request->validate([
                'name' => 'required',
                'email' => 'nullable',
                'company_email' => 'required',
                'password' => 'required|numeric',
                'code' => 'required',
                'phone' => 'nullable|numeric',
                'company_phone' => 'required|numeric',
                'sex' => 'required',
                'address' => 'required',
                'dob' => 'required',
                'departement_id' => 'required',
                'position_id' => 'required',  
                'position_level_id' => 'required',            
                'position_level_id' => 'required',            
                'manager_id' => 'nullable',            
                'equipment_pack_id' => 'nullable',            
                'working_form' => 'nullable',            
                'status' => 'nullable',            
               
            ]);
            //format fe date to api required date dd/mm/yyyy to yyyy-MM-DD
            //replace / to -
            
            // $dob = Carbon::parse($request['dob'])->format('d/m/Y H:i:s');

            $data['dob'] = date('Y-m-d', strtotime($data['dob']));
    

            //update the dob to send to api

            // $data['dob'] = '30/03/2023 00:00:00';

            //set date of join is current day
         
            $data['doj'] = date('Y-m-d');

            // dd($data['doj']);
            
            //set role  defaut is user TODO: need to pick from fe
            $data['role'] = 'user';
            $data['salary_fund'] = '10000';

            // dd($data);
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
        // dd($request);
        try {
            // dd($request);
            $data = $request->validate([
                // 'name' => 'nullable',
                // 'email' => 'nullable',
                // 'company_email' => 'nullable',
                // 'password' => 'nullable|numeric',
                // 'code' => 'nullable',
                // 'phone' => 'nullable|numeric',
                // 'company_phone' => 'nullable|numeric',
                // 'sex' => 'nullable',
                // 'address' => 'nullable',
                // 'dob' => 'nullable',
                // 'departement_id' => 'nullable',
                // 'position_id' => 'nullable',  
                // 'position_level_id' => 'nullable',            
                // 'manager_id' => 'nullable',            
                // 'equipment_pack_id' => 'nullable',            
                // 'working_form' => 'nullable',            
                // 'status' => 'nullable',   
                
                
                // 'name' => 'nullable',
                // 'code' => 'nullable|unique:users',
                // 'phone' => 'nullable',
                // 'sex' => 'nullable',
                // 'address' => 'nullable',
                // 'dob' => 'nullable|date',
                // 'departement_id' => 'nullable',
                // 'position_id' => 'nullable',
                // 'position_level_id' => 'nullable',
                // 'manager_id' => 'nullable',
                // 'company_phone' => 'nullable',
                // 'company_email' => 'nullable',
                // 'equipment_pack_id' => 'nullable',
                // 'working_form' => 'nullable',
                // 'status' => 'nullable'
            ]);
            
            if($request['sex']==null)
            {
                $request['sex']='male';
            }

            // dd($data);

            $request['dob'] = Carbon::parse($request['dob']);

         
            $request['doj'] =  Carbon::parse($request['doj']);;
            
            $request['role'] = 'user';
            $request['salary_fund'] = '10000';
            dd($request);
            $this->dwtService->updateUser($id, $request);
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
            $this->dwtService->deleteUser($id);
            return back()->with('success', 'Xóa thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }
}
