<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DwtServices;
use Exception;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class TargetLogController extends Controller
{
    private $dwtService;
    //constructor
    public function __construct()
    {
        // $this->middleware('auth');
        $this->dwtService = new DwtServices();
    }

    public function store($id, Request $request)
    {
        try {

            $targetDetailId = $id;
            $data = $request->validate([
                'note' => 'nullable',
                'kpiKeys' => 'nullable|array',
                'files' => 'nullable|array',
                'reportedDate' => 'required|date',
                'uploadedFiles' => 'nullable|array',
            ]);

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

            //create target log
            $newTargetLog = [
                "target_detail_id" => $targetDetailId,
                "status" => "inProgress",
                "reportedDate" => $data['reportedDate'],
            ];
            //search target log by target detail id and reported date
            $targetLogs = $this->dwtService->searchTargetLogs($targetDetailId, $data['reportedDate']);
            $targetLogs = $targetLogs->data;
            $isNewTargetLog = false;
            if (count($targetLogs) > 0) {
                $targetLog = $targetLogs[0];
                $isNewTargetLog = false;
            } else {
                $targetLog = $this->dwtService->createTargetLog($newTargetLog);
                $isNewTargetLog = true;
            }

            $targetLogId = $targetLog->id;

            //current user
            $loggedInUserId = session('user')['id'];
            //if target detail exist and belong to current user
            if (!$isNewTargetLog && count($targetLog->targetLogDetails) > 0) {
                //find target log detail by user id
                $existTargetLogDetail = null;
                for ($i = 0; $i < count($targetLog->targetLogDetails); $i++) {
                    $targetLogDetail = $targetLog->targetLogDetails[$i];
                    if ($targetLogDetail->user->id == $loggedInUserId) {
                        $existTargetLogDetail = $targetLogDetail;
                        break;
                    }
                }
                if ($existTargetLogDetail) {

                    $update = [
                        "note" => $data['note'] ?? null,
                        "files" => $data['files'] ?? null,
                        "kpiKeys" => $data['kpiKeys'] ?? null
                    ];

                    //update target log detail
                    $this->dwtService->updateTargetLogDetail($existTargetLogDetail->id, $update);

                    return back()->with('success', 'Cập nhật thành công');
                }
            }


            //create target log detail


            $newTargetLogDetail = [
                "target_log_id" => $targetLogId,
                "note" => $data['note'] ?? null,
                "files" => $data['files'] ?? null,
                "kpiKeys" => $data['kpiKeys'] ?? null
            ];

            $this->dwtService->createTargetLogDetail($newTargetLogDetail);
            return back()->with('success', 'Thêm mới thành công');
        } catch (Exception $e) {
            dd($e);
            $error = $e->getMessage();
            error_log($error);
            return back()->with('error', $error);
        }
    }

    public function delete($id, Request $request)
    {
        try {
            $targetLogDetailId = $id;
            $this->dwtService->deleteTargetLogDetail($targetLogDetailId);
            return back()->with('success', 'Xóa thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            error_log($error);
            return back()->with('error', $error);
        }
    }
}
