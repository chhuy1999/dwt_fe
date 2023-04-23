<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DwtServices;
use Exception;
use Illuminate\Http\Request;

class ProposalController extends Controller
{

    private $dwtServices;
    //contructor
    public function __construct()
    {
        // $this->middleware('auth');
        $this->dwtServices = new DwtServices();
    }

    public function index(Request $request)
    {
        $blankDataStr = json_encode([
            'data' => []
        ]);
        $blankData = json_decode($blankDataStr);
        try {
            $proposals = $this->dwtServices->getProposals();
            return view('DeXuat_XetDuyet.deXuatTheoMau')->with('proposals', $proposals);
        } catch (Exception $e) {
            return view('DeXuat_XetDuyet.deXuatTheoMau')->with('proposals', $blankData);
        }
    }

    public function create(Request $request)
    {
        try {
            $data = $request->validate([
                'title' => 'required',
                'description' => 'nullable',
                'receiver_id' => 'required|numeric',
                'code' => 'required',
                'related_people' => 'required|array',
                'form' => 'required|numeric',
            ]);
            $data['data'] = json_encode([
                'relatedPeople' => $data['related_people'],
            ]);
            $data['status'] = 0;
            $user = session('user');
            $data['sender_id'] = $user['id'];

            $proposal = $this->dwtServices->createProposal($data);
            return redirect()->route('proposal.show', $proposal->id);
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }

    public function show($id, Request $request)
    {
        $blankDataStr = json_encode([
            'data' => []
        ]);
        $blankData = json_decode($blankDataStr);
        try {
            $proposal = $this->dwtServices->getProposalDetail($id);
            $form = $proposal->form;
            if ($form == 1) {
                return view('DeXuat_XetDuyet.mauDeXuat.mauYCMS')->with('proposal', $proposal);
            } else if ($form == 2) {
                return view('DeXuat_XetDuyet.mauDeXuat.mauDNTT')->with('proposal', $proposal);
            } else if ($form == 3) {
                return view('DeXuat_XetDuyet.mauDeXuat.mauDNTU')->with('proposal', $proposal);
            }

            return view('DeXuat_XetDuyet.deXuatTheoMau')->with('proposals', $blankData);
        } catch (Exception $e) {
            $error = $e->getMessage();
            error_log($error);
            return view('DeXuat_XetDuyet.deXuatTheoMau')->with('proposals', $blankData);
        }
    }

    public function updateBasic($id, Request $request) {
        try {
            $data = $request->validate([
                'title' => 'nullable',
                'description' => 'nullable',
                'receiver_id' => 'nullable|numeric',
                'related_people' => 'nullable|array',
                'form' => 'nullable|numeric',
            ]);
            //get old data
            $oldData = $this->dwtServices->getProposalDetail($id);
            $oldData = json_decode($oldData->data);
            //replace old data with new data
            if (isset($data['related_people'])) {
                $oldData->relatedPeople = $data['related_people'];
            }
            $data['data'] = json_encode($oldData);

            $proposal = $this->dwtServices->updateProposal($id, $data);
            return redirect()->back()->with('success', 'Cập nhật thành công');
        }catch(Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }

    public function delete($id) {
        try {
            $this->dwtServices->deleteProposal($id);
            return redirect()->back()->with('success', 'Xóa thành công');
        }catch(Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }
}
