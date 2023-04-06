<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DwtServices;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    //
    private $dwtServices;
    //constructor
    public function __construct()
    {
        $this->dwtServices = new DwtServices();
    }

    public function login(Request $request)
    {
        //validate request
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            $response = $this->dwtServices->login($request->email, $request->password);
            $token = $response['token'];
       
            $request->session()->put('token', $token);
            $user = $response['user'];
            $request->session()->put('user', $user);
            // //regenerate session id $response['user']['departement_id']
            if($user['departement_id']){
                $idDept = ($response['user']['departement_id'])-1;
                $listDepartments = $this->dwtServices->listDepartments()->data;
                $nameDepartment =$listDepartments[$idDept]->name;
                $request->session()->put('department_name',$nameDepartment);
            }else{
                $request->session()->put('department_name','Trống');
            }
            $request->session()->regenerate();
            return redirect('/');
        } catch (Exception $e) {
            $error = $e->getMessage();
            // parse json to array
            //return back with login error
            return back()->with('loginError', $error);
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        //unvalidate session
        $request->session()->regenerate();
        return redirect('/login');
    }
}
