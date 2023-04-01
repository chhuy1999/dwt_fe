<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DwtServices;
use Exception;
use Illuminate\Http\Request;

class ReportTaskController extends Controller
{

    private $dwtService;
    public function __construct()
    {

        $this->dwtService = new DwtServices();
    }

    public function store(Request $request)
    {

        try {
            $data = $request->validate([
                'name' => 'required',
                'deadline' => 'required',
                'description' => 'nullable',
                'manDay' => 'required',
                'user_id' => 'required',
                'kpiKeys' => 'nullable|array',
            ]);

            $data['deadline'] = date('Y-m-d', strtotime($data['deadline']));
            $result = $this->dwtService->createReportTask($data);
            return back()->with('success', 'Tạo nhiệm vụ thành công');
        } catch (Exception $e) {
            dump($e->getMessage());
            return back()->with('error', $e->getMessage());
        }
    }

    public function reportTask(Request $request) {
        try {
            dd($request->all());

        }catch(Exception $e) {
            dump($e->getMessage());
            return back()->with('error', $e->getMessage());
        }
    }
}
