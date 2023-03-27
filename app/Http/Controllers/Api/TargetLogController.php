<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DwtServices;
use Exception;
use Illuminate\Http\Request;

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
            // $targetDetailId = $id;
            // $validate = $request->validate([
            //     'note' => 'required',
            //     'kpiKeys' => 'nullable|array',

            // ]);
            return back();
        } catch (Exception $e) {
            $error = $e->getMessage();
            error_log($error);
            return back()->with('error', $error);
        }
    }
}
