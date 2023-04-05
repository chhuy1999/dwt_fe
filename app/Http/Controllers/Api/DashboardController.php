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
            $searchDepartment_id = null;
            if($user['role'] == 'manager'){
                $searchDepartment_id = $user['departement_id'];
            }
            $listAssignedTasks = $this->dwtServices
                ->searchKpiTargetDetails([
                    "page" => 1,
                    "limit" => 100,
                    "startDate" => $startDate,
                    "endDate" => $endDate,
                    "status" => "assigned",
                    "departement_id" => $searchDepartment_id
                ]);

            $myAssignedTasks = $this->dwtServices
                ->searchKpiTargetDetails(
                    [
                        "page" => 1,
                        "limit" => 100,
                        "startDate" => $startDate,
                        "endDate" => $endDate,
                        "status" => "assigned",
                        "user_id" => $user['id'],
                    ]
                );

            $myTotalKpi = 0;
            for ($i = 0; $i < count($myAssignedTasks->data); $i++) {
                $myTotalKpi += $myAssignedTasks->data[$i]->kpiValue;
            }


            $totalKpi = 0;
            for ($i = 0; $i < count($listAssignedTasks->data); $i++) {
                $totalKpi += $listAssignedTasks->data[$i]->kpiValue;
            }

            $kpiKeys = $this->dwtServices->searchKpiKeys("", 1, 100);
            $kpiKeys = $kpiKeys->data;

            $reportTasks = $this->dwtServices->searchReportTasks([
                "page" => 1,
                "limit" => 100,
                "user_id" => $user['id']
            ]);
            $reportTaskAdmin = $this->dwtServices->searchReportTasks([
                "page" => 1,
                "limit" => 100,
                "departement_id" => $searchDepartment_id
            ]);

            $listReports = $this->dwtServices->searchReports("", $user['departement_id'], 1, 100);
            $listReports = $listReports->data;

            $listUsers = $this->dwtServices->listUsers();

            return view('dashboard')
                ->with('searchMonth', $currentMonth)
                ->with('searchYear', $currentYear)
                ->with('listAssignedTasks', $listAssignedTasks)
                ->with('myAssignedTasks', $myAssignedTasks)
                ->with('reportTasks', $reportTasks)
                ->with('reportTaskAdmin', $reportTaskAdmin)
                ->with('listReports', $listReports)
                ->with('listUsers', $listUsers)
                ->with('myTotalKpi', $myTotalKpi)
                ->with('totalKpi', $totalKpi)
                ->with('kpiKeys', $kpiKeys);
        } catch (Exception $e) {
            dd($e);
            $error = $e->getMessage();
            return view('dashboard')->with('error', $error);
        }
    }
}
