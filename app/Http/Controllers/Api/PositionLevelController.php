<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DwtServices;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class PositionLevelController extends Controller
{
    //
    private $dwtService;
    //constructor
    public function __construct()
    {
        // $this->middleware('auth');
        $this->dwtService = new DwtServices();
    }

    public function index(Request $request)

    {
        

        try {

            $q = $request->get('q');
            $page = $request->get('page');
            $limit = $request->get('limit');
            $data = $this->dwtService->searchPositionLevel($q, $page, $limit);
            $listPositionLevel = $this->dwtService->listPositionLevel();
            return view('CauHinh.danhSachCapNhanSu')
                 ->with('data', $data)
                ->with('listPositionLevel', $listPositionLevel);
        } catch (Exception $e) {
            $error = $e->getMessage();
            return view('CauHinh.danhSachCapNhanSu')->with('listPositionLevel', []);
        }
    }

    public function store(Request $request)
    {
        try {

            $data = $request->validate([
                'name' => 'required',
            ]);
            $this->dwtService->createPositionLevel($data);
            return back()->with('success', 'Thêm mới thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }

    public function update($id, Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'nullable',
            ]);
            $this->dwtService->updatePositionLevel($id, $data);
            return back()->with('success', 'Cập nhật thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }

    public function delete($id)
    {
        try {
            $this->dwtService->deletePositionLevel($id);
            return back()->with('success', 'Xóa thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }
}
