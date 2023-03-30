<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DwtServices;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class EquimentPackController extends Controller
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
            $data = $this->dwtService->searchEquimentPack($q, $page, $limit);
            $listEquimentPack = $this->dwtService->listEquimentPack();
            $listUnits = $this->dwtService->listUnits();
            return view('CauHinh.danhMucGoiTrangBi')
                 ->with('data', $data)
                ->with('listUnits', $listUnits)
                ->with('listEquimentPack', $listEquimentPack);
        } catch (Exception $e) {
            $error = $e->getMessage();
            return view('CauHinh.danhMucGoiTrangBi')->with('listEquimentPack', []);
        }
    }

    public function store(Request $request)
    {
        try {

            $data = $request->validate([
                'name' => 'required',
                'unit_id' => 'required',
            ]);
            $this->dwtService->createEquimentPack($data);
            return back()->with('success', 'Thêm mới thành công');
        } catch (Exception $e) {
            dd($e);
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }

    public function update($id, Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'nullable',
                'unit_id' => 'nullable',

            ]);
            $this->dwtService->updateEquimentPack($id, $data);
            return back()->with('success', 'Cập nhật thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }

    public function delete($id)
    {
        try {
            $this->dwtService->deleteEquimentPack($id);
            return back()->with('success', 'Xóa thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }
}
