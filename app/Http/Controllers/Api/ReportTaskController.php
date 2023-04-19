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
                "report_id" => 'nullable|numeric',
                'involvedPeople' => 'nullable|array',
            ]);

            if(isset($data['deadline'])) {
                $dateRange = $data['deadline'];
                $startDate = explode(" - ", $dateRange)[0];
                //remove space
                $startDate = str_replace(" ", "", $startDate);
                //replace / to -
                $startDate = str_replace("/", "-", $startDate);
                $endDate = explode(" - ", $dateRange)[1];
                //remove space
                $endDate = str_replace(" ", "", $endDate);
                //replace / to -
                $endDate = str_replace("/", "-", $endDate);

                $data['startDate'] = date('Y-m-d', strtotime($startDate));
                $data['deadline'] = date('Y-m-d', strtotime($endDate));

            }
            $result = $this->dwtService->createReportTask($data);
            //update report status
            if (isset($data['report_id'])) {
                $this->dwtService->updateReports($data['report_id'], ['status' => 4]); //4 mean 'Converted'
            }
            return back()->with('success', 'Tạo nhiệm vụ thành công');
        } catch (Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }

    public function evaluate($id, Request $request)
    {
        try {
            $data = $request->validate([
                'managerManDay' => 'nullable|numeric',
                'managerComment' => 'nullable',
            ]);

            $result = $this->dwtService->updateReportTask($id, $data);
            return back()->with('success', 'Danh gia thành công');
        } catch (Exception $e) {
            dump($e->getMessage());
            return back()->with('error', $e->getMessage());
        }
    }

    public function update($id, Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'nullable',
                'deadline' => 'nullable',
                'description' => 'nullable',
                'manDay' => 'nullable',
                'user_id' => 'required',
                'kpiKeys' => 'nullable|array',
                "report_id" => 'nullable|numeric',
                'involvedPeople' => 'nullable|array',
            ]);

            if(isset($data['deadline'])) {
                $dateRange = $data['deadline'];
                $startDate = explode(" - ", $dateRange)[0];
                //remove space
                $startDate = str_replace(" ", "", $startDate);
                //replace / to -
                $startDate = str_replace("/", "-", $startDate);
                $endDate = explode(" - ", $dateRange)[1];
                //remove space
                $endDate = str_replace(" ", "", $endDate);
                //replace / to -
                $endDate = str_replace("/", "-", $endDate);

                $data['startDate'] = date('Y-m-d', strtotime($startDate));
                $data['deadline'] = date('Y-m-d', strtotime($endDate));

            }
            $result = $this->dwtService->updateReportTask($id, $data);
            //return
            return back()->with('success', 'Cập nhật thành công');

        } catch (Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }


    public function reportTask($id, Request $request)
    {
        try {
            $taskId = $id;
            $data = $request->validate([
                'note' => 'nullable',
                'kpiKeys' => 'nullable|array',
                'files' => 'nullable|array',
                'report_date' => 'required|date',
                'id' => 'nullable|numeric',
                'uploadedFiles' => 'nullable|array',
            ]);
            $data['report_task_id'] = $taskId;
            //validate kpikeys
            $validKpis = [];
            if (isset($data['kpiKeys'])) {
                $kpiKeys = $data['kpiKeys'];

                foreach ($kpiKeys as $kpiKey) {
                    // dd($kpiKey);
                    if (!$id || !is_numeric($id)) {
                        continue;
                    }

                    $quantity = $kpiKey['quantity'];
                    if (!$quantity || !is_numeric($quantity)) {
                        continue;
                    }

                    $validKpis[] = $kpiKey;
                }
            }
            $data['kpiKeys'] = $validKpis;
            $uniqueKpiKeys = [];
            //merge kpi keys
            foreach ($data['kpiKeys'] as $kpiKey) {
                $id = $kpiKey['id'];
                $quantity = $kpiKey['quantity'];
                //if kpi key exist in uniqueKpiKeys
                if (isset($uniqueKpiKeys[$id])) {
                    $uniqueKpiKeys[$id]['quantity'] += $quantity;
                } else {
                    $uniqueKpiKeys[$id] = $kpiKey;
                }
            }
            $data['kpiKeys'] = array_values($uniqueKpiKeys);

            if (isset($data['files'])) {
                $files = $request->file('files');
                $fileNames = [];
                foreach ($files as $file) {
                    //call uploadFileToRemoteHost function from DwtServices
                    $fileNames[] = $this->dwtService->uploadFileToRemoteHost($file);
                }
                //comma separated file names
                $data['files'] = implode(',', $fileNames);
            }
            if (isset($data['uploadedFiles'])) {

                $data['files'] = $data['files'] ?? '';
                $uploadedFilesStr = implode(',', $data['uploadedFiles']);
                $data['files'] = $data['files'] . ',' . $uploadedFilesStr;
            }

            // dd($data['files']);


            //if id is set, update
            if (isset($data['id'])) {
                $this->dwtService->updateReportTaskLog($data['id'], $data);
            } else {
                //call createArisingTask function from DwtServices
                $this->dwtService->createReportTaskLog($data);
            }

            return back()->withSuccess('Report task successfully');
        } catch (Exception $e) {
            return back()->withError($e->getMessage())->withInput();
        }
    }

    public function delete($id)
    {
        try {
            $this->dwtService->deleteReportTask($id);
            return back()->with('success', 'Xóa thành công');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
