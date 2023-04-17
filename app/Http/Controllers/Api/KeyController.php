<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DwtServices;
use Exception;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class KeyController extends Controller
{
    private $dwtService;
    //constructor
    public function __construct()
    {
        // $this->middleware('auth');
        $this->dwtService = new DwtServices();
    }
    //
    public function index(Request $request)
    {
        try {
            $q = $request->get('q');
            $page = $request->get('page');
            $limit = $request->get('limit');
            $data = $this->dwtService->searchKpiKeys($q, $page, $limit);
            $listUnits = $this->dwtService->listUnits();
            $listUnits = $this->dwtService->searchUnits("", 1, 100);

            return view('CauHinh.danhMucChiSoKey')
                ->with('data', $data)
                ->with('listUnits', $listUnits);
        } catch (Exception $e) {
            $error = $e->getMessage();
            return view('CauHinh.danhMucChiSoKey')->with('data', []);
        }
    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required',
                'description' => 'required',
                'unit_id' => 'required|numeric',
            ]);
            $this->dwtService->createKpiKey($data);
            return back()->with('success', 'Thêm mới thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $data = $request->validate([
                'name' => 'nullable',
                'description' => 'nullable',
                'unit_id' => 'nullable|numeric',
            ]);

            $this->dwtService->updateKpiKey($id, $data);
            return back()->with('success', 'Cập nhật thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }

    public function delete($id)
    {
        try {
            $this->dwtService->deleteKpiKey($id);
            return back()->with('success', 'Xóa thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }
}
