<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DwtServices;
use Exception;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class ReportController extends Controller
{
    //
    private $dwtService;
    //contructor
    public function __construct()
    {
        // $this->middleware('auth');
        $this->dwtService = new DwtServices();
    }

    public function store(Request $request)
    {
        try {

            $data = $request->validate([
                'problem' => 'required',
                'deadline' => 'required',
                'departement_id' => 'nullable',
            ]);
            $data['user_id'] = session('user')['id'];
            $data['status'] = 0;
            $data['deadline'] = date('Y-m-d', strtotime($data['deadline']));
            $result = $this->dwtService->createReport($data);
            return back()->with('success', 'Thêm mới thành công');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function update($id, Request $request)
    {
        try {
         
            $data = $request->validate([
                'problem' => 'nullable',
                'deadline' => 'required',
                'departement_id' => 'nullable',
                'pics' => 'required|array',
                'solution' => 'required',
                'reason' => 'required',
                'status' => 'required',
            ]);
            $data['user_id'] = session('user')['id'];
            $data['deadline'] = date('Y-m-d', strtotime($data['deadline']));

            $result = $this->dwtService->updateReports($id, $data);
            return back()->with('success', 'Thêm mới thành công');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
