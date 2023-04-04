<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DwtServices;
use Exception;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    //
    private $dwtServices;
    //contructor
    public function __construct()
    {
        // $this->middleware('auth');
        $this->dwtServices = new DwtServices();
    }


    public function index(Request $request)
    {
        try {
            $currentMonth = date('m');
            $currentYear = date('Y');
            $startDate = $currentYear . '-' . $currentMonth . '-01';
            $endDate = $currentYear . '-' . $currentMonth . '-31';
            //get list assigned task
            $user = session('user');
            $listAssignedTasks = $this->dwtServices
                ->searchKpiTargetDetails("", 1, 100, "assigned", null, $startDate, $endDate);
            $myAssignedTasks = $this->dwtServices
                ->searchKpiTargetDetails("", 1, 100, "assigned", $user['id'], $startDate, $endDate);

            $kpiKeys = $this->dwtServices->searchKpiKeys("", 1, 100);
            $kpiKeys = $kpiKeys->data;

            $reportTasks = $this->dwtServices->searchReportTasks($user['id']);

            $listReports = $this->dwtServices->searchReports("", $user['departement_id'], 1, 100);
            $listReports = $listReports->data;

            $listUsers = $this->dwtServices->listUsers();

            return view('dashboard')
                ->with('searchMonth', $currentMonth)
                ->with('searchYear', $currentYear)
                ->with('listAssignedTasks', $listAssignedTasks)
                ->with('myAssignedTasks', $myAssignedTasks)
                ->with('reportTasks', $reportTasks)
                ->with('listReports', $listReports)
                ->with('listUsers', $listUsers)
                ->with('kpiKeys', $kpiKeys);
        } catch (Exception $e) {
            dd($e);
            $error = $e->getMessage();
            return view('dashboard')->with('error', $error);
        }
    }
}
