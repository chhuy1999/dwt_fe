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
            $listUsers = $this->dwtService->listUsers();
            $listReports = $this->dwtService->searchReports();
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
                ->with('meeting', $meeting);
        } catch (Exception $e) {
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
            $data['start_date'] = date('Y-m-d H:i:s', strtotime($data['start_date']));
            $this->dwtService->createMeeting($data);
            return back()->with('success', 'Tạo cuộc họp thành công voi mã: ' . $data['code']);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
