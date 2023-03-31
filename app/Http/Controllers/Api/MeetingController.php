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
            $listUsers = $this->dwtService->listUsers();
            $listReports = $this->dwtService->searchReports();
            $listReports = $listReports->data;
            //get all reports with status == 'Sent'
            $pendingReports = array_filter($listReports,function ($item) {
                return $item->status == 'Sent';
            });

            $handledReports = array_filter($listReports,function ($item) {
                return $item->status != 'Sent';
            });



            return view('HopDonVi.giaoBan')
                ->with('listUsers', $listUsers)
                ->with('pendingReports', $pendingReports)
                ->with('handledReports', $handledReports);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
