<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DwtServices;
use Exception;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    //
    private $dwtService;
    //contructor
    public function __construct()
    {
        // $this->middleware('auth');
        $this->dwtService = new DwtServices();
    }
    public function index($code, Request $request)
    {
        try {
            $meeting = $this->dwtService->searchMeetingByCode($code);
            if (!$meeting || count($meeting->data) == 0) {
                return redirect('/')->with('error', 'Không tìm thấy cuộc họp');
            }
            $meeting = $meeting->data[0];
            $listUsers = $this->dwtService->searchUser("", 1, 200);
            $listReports = $this->dwtService->searchReports();
            $kpiKeys = $this->dwtService->searchKpiKeys();
            $listReports = $listReports->data;
            //get all reports with status == 'Sent'
            $pendingReports = array_filter($listReports, function ($item) {
                return $item->status == 'Sent';
            });

            $handledReports = array_filter($listReports, function ($item) {
                return $item->status != 'Sent';
            });

            return view('HopDonVi.giaoBan')
                ->with('listUsers', $listUsers)
                ->with('pendingReports', $pendingReports)
                ->with('handledReports', $handledReports)
                ->with('kpiKeys', $kpiKeys)
                ->with('meeting', $meeting);
        } catch (Exception $e) {
            dd($e);
            return back()->with('error', $e->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'title' => 'required',
                'type' => 'required',
                'departement_id' => 'required',
                'leader_id' => 'required',
                'start_date' => 'required',
                'code' => 'required',
            ]);
            $data['start_date'] = date('Y-m-d', strtotime(str_replace("/", "-", $data['start_date'])));
            $res = $this->dwtService->createMeeting($data);
            $meetCode = $res->code;
            return route('/giao-ban/' . $meetCode)->with('success', 'Tạo cuộc họp thành công voi mã: ' . $meetCode);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
    public function update($id, Request $request) {
        try {
            $data = $request->validate([

                'files' => "nullable|array",
                "uploadedFiles" => "nullable|array",
            ]);

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

            $this->dwtService->updateMeeting($id, $data);

            return back()->with('success', 'Cập nhật thành công');

        }catch(Exception $e) {


            return back()->with('error', $e->getMessage());
        }
    }
}
