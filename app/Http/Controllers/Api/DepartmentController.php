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
    public function search(Request $request)
    {
        try {
            $data_search = $request['data_search'];
            $listDepartmentPaginated = $this->dwtService->searchDepartment($data_search);
            return view('page.department.profileDepartment')->with('data', $listDepartmentPaginated);
        } catch (Exception $e) {
            $error = $e->getMessage();
            return view('page.department.profileDepartment')->with('data', []);
        }
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $url = 'https://sdwtbe.sweetsica.com/api/v1/departments';
        $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vc2R3dGJlLnN3ZWV0c2ljYS5jb20vYXBpL3YxL2F1dGgvbG9naW4iLCJpYXQiOjE2Nzg4NTg0NDYsImV4cCI6MTY4MTQ1MDQ0NiwibmJmIjoxNjc4ODU4NDQ2LCJqdGkiOiJSbjJ6UjBhejRIWUlJdW5QIiwic3ViIjoiMSIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.55jMT4e2MU1WsWQ2yckw3Ulekl-xIXSOjzkdl0E6RO4';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer $token"
        ));
        $response = curl_exec($ch);
        curl_close($ch);
        $datas = json_decode($response);
        return view('page.department.profileDepartment')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $url = 'https://sdwtbe.sweetsica.com/api/v1/departments/1';
        $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vc2R3dGJlLnN3ZWV0c2ljYS5jb20vYXBpL3YxL2F1dGgvbG9naW4iLCJpYXQiOjE2Nzg4NTg0NDYsImV4cCI6MTY4MTQ1MDQ0NiwibmJmIjoxNjc4ODU4NDQ2LCJqdGkiOiJSbjJ6UjBhejRIWUlJdW5QIiwic3ViIjoiMSIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.55jMT4e2MU1WsWQ2yckw3Ulekl-xIXSOjzkdl0E6RO4';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer $token"
        ));
        $response = curl_exec($ch);
        curl_close($ch);
        $datas = json_decode($response);
        return view('page.department.profileDepartment')->with('updatedata', $datas);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
