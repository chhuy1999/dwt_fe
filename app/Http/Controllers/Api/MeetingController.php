<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DwtServices;
use Carbon\Carbon;
use DateTime;
use Exception;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

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
                return back()->with('error', 'Không tìm thấy cuộc họp');
            }
            $meeting = $meeting->data[0];
            $pwd = $request->get('pwd');
            if ($meeting->password && !$pwd) {
                return back()->with('error', 'Bạn cần nhập mật khẩu để tham gia cuộc họp');
            }
            if ($meeting->password && $pwd) {
                $decodedPwd = base64_decode($pwd);
                if ($decodedPwd != $meeting->password) {
                    return back()->with('error', 'Mật khẩu không đúng');
                }
            }
            $listUsers = $this->dwtService->searchUser("", 1, 200);
            $listReports = $this->dwtService->searchReports(null, null, null, 100);
            $kpiKeys = $this->dwtService->searchKpiKeys();
            $listReports = $listReports->data;
            // //get all reports with status == 'Sent'
            // $pendingReports = array_filter($listReports, function ($item) {
            //     return $item->status == 'Sent';
            // });

            $handledReports = array_filter($meeting->reports, function ($item) {
                return $item->status != 'Sent';
            });
            $unhandledReports = array_filter($meeting->reports, function ($item) {
                return $item->status == 'Sent';
            });
            //to pick report
            $pendingReports = array_filter($listReports, function ($item) {
                return $item->status == 'Sent';
            });

            return view('HopDonVi.giaoBan')
                ->with('listUsers', $listUsers)
                ->with('handledReports', $handledReports)
                ->with('kpiKeys', $kpiKeys)
                ->with('pendingReports', $pendingReports)
                ->with('unhandledReports', $unhandledReports)
                ->with('meeting', $meeting);

        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function join(Request $request)
    {
        $data = $request->validate([
            'code' => 'required',
            'password' => 'nullable',
        ]);

        $encodedPwd = "";
        if ($data['password']) {
            //encode
            $encodedPwd = base64_encode($data['password']);
        }
        return redirect('/giao-ban/' . $data["code"] . '?pwd=' . $encodedPwd);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        try {
            $data = $request->validate([
                'title' => 'required',
                'type' => 'required',
                'departement_id' => 'required',
                'leader_id' => 'required',
                'start_time' => 'required',
                'code' => 'required',
                'password' => 'nullable',

            ]);
            // dd($data['start_time']);
            $data['start_time'] = date('Y-m-d H:i', strtotime(str_replace("/", "-", $data['start_time'])));

            $res = $this->dwtService->createMeeting($data);
            $meetCode = $res->code;
            //encode
            $encodedPwd = "";
            if ($data['password']) {
                //encode
                $encodedPwd = base64_encode($data['password']);
            }

            return redirect('/giao-ban/' . $meetCode . '?pwd=' . $encodedPwd)->with('success', 'Tạo cuộc họp thành công voi mã: ' . $meetCode);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function update($id, Request $request)
    {
        // dd($request->all());
        try {
            $data = $request->validate([
                'participants' => 'nullable|array',
                'secretary_id' => 'nullable',
                'files' => "nullable|array",
                "uploadedFiles" => "nullable|array",
                'leader_id' => 'nullable',
                'status' => 'nullable',
                'daterange' => 'nullable',
                'reports' => 'nullable|array',
            ]);

            if (isset($data['leader_id']) && $data['leader_id'] == 0) {
                $data['leader_id'] = null;
            }

            if (isset($request['daterange'])) {
                $dateRange = $data['daterange'];

                $startDate = explode(" - ", $dateRange)[0];
                //replace / with -
                $startDate = str_replace("/", "-", $startDate);
                $startDate = str_replace(" ", "", $startDate);

                $endDate = explode(" - ", $dateRange)[1];
                //replace / with -
                $endDate = str_replace("/", "-", $endDate);
                $endDate = str_replace(" ", "", $endDate);

                $endDate = date('Y-m-d H:i', strtotime($endDate));


                $startDate = date('Y-m-d H:i', strtotime($startDate));
                $data['start_time'] = $startDate;
                $data['end_time'] = $endDate;

            }


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
            if (isset($data['status']) && $data['status'] == '1') {
                return redirect('/kho-luu-tru-bien-ban-hop')->with('success', 'Cập nhật thành công');
            }

            return back()->with('success', 'Cập nhật thành công');
        } catch (Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }

}
