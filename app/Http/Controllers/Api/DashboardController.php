<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DwtServices;
use Exception;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    private $dwtServices;
    //constructor
    public function __construct()
    {
        $this->dwtServices = new DwtServices();
    }

    public function index(Request $request)
    {
        try {
            $currentMonth = date('m');
            $currentYear = date('Y');
            //get list assigned task
            $listAssignedTasks = $this->dwtServices->searchKpiTargetDetails("", 1, 100, "assigned");

            return view('dashboard')
                ->with('searchMonth', $currentMonth)
                ->with('searchYear', $currentYear)
                ->with('listAssignedTasks', $listAssignedTasks);
        } catch (Exception $e) {
            $error = $e->getMessage();
            return view('dashboard')->with('error', $error);
        }
    }
}
