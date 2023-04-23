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
            $loggedInUser = session('user');
            //get user detail
            $user = $this->dwtServices->getUserDetail($loggedInUser['id']);

            $proposal = $this->dwtServices->getProposalDetail($id);

            $form = $proposal->form;
            $view = 'DeXuat_XetDuyet.deXuatTheoMau';
            if ($form == 1) {
                $view = 'DeXuat_XetDuyet.mauDeXuat.mauYCMS';
            } else if ($form == 2) {
                $view = 'DeXuat_XetDuyet.mauDeXuat.mauDNTT';
            } else if ($form == 3) {
                $view = 'DeXuat_XetDuyet.mauDeXuat.mauDNTU';
            }
            $proposalData = json_decode($proposal->data);
            $proposalFiles = [];
            if (isset($proposalData->files) && strlen($proposalData->files) > 0) {
                $filesArr = explode(',', $proposalData->files);
                foreach ($filesArr as $file) {
                    if (strlen($file) > 0) {
                        array_push($proposalFiles, $file);
                    }
                }
            }

            return view($view)
                ->with('proposal', $proposal)
                ->with('proposalData', $proposalData)
                ->with('proposalFiles', $proposalFiles)
                ->with('user', $user);
        } catch (Exception $e) {
            $error = $e->getMessage();
            error_log($error);
            return view('DeXuat_XetDuyet.deXuatTheoMau')
                ->with('proposals', $blankData)
                ->with('user', []);
        }
    }

    public function updateBasic($id, Request $request)
    {
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
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }

    public function updateData($id, Request $request)
    {
        try {
            //remove _token and _method
            $data = $request->except(['_token', '_method']);
            $oldData = $this->dwtServices->getProposalDetail($id);

            if ($oldData->status == 0 && (!isset($data['senderSignature']) || $data['senderSignature'] == null)) {
                return back()->with('error', 'Chưa có chữ ký của người gửi');
            }
            if (isset($data['files'])) {
                $files = $request->file('files');
                $fileNames = [];
                foreach ($files as $file) {
                    //call uploadFileToRemoteHost function from DwtServices
                    $fileNames[] = $this->dwtServices->uploadFileToRemoteHost($file);
                }
                //comma separated file names
                $data['files'] = implode(',', $fileNames);
            }

            if (isset($data['isConfirm1'])) {
                if ($data['isConfirm1'] == 'destroyRadio') {
                    if (!isset($data['rejectReason1'])) {
                        return back()->with('error', 'Chưa có lý do từ chối');
                    }
                    $data['relatedSignature1'] = null;
                } else {
                    if (!isset($data['relatedSignature1'])) {
                        return back()->with('error', 'Chưa có chữ ký');
                    }
                    $data['rejectReason1'] = null;
                }
                //remove isConfirm1
                unset($data['isConfirm1']);
            }


            if (isset($data['isConfirm2'])) {
                if ($data['isConfirm2'] == 'destroyRadio') {
                    if (!isset($data['rejectReason2'])) {
                        return back()->with('error', 'Chưa có lý do từ chối');
                    }
                    $data['relatedSignature2'] = null;
                } else {
                    if (!isset($data['relatedSignature2'])) {
                        return back()->with('error', 'Chưa có chữ ký');
                    }
                    $data['rejectReason2'] = null;
                }
                //remove isConfirm1
                unset($data['isConfirm2']);
            }


            $newStatus = 1;
            if(isset($data['isReceiverConfirm'])) {
                if ($data['isReceiverConfirm'] == 'destroyRadio') {
                    if (!isset($data['receiverRejectReason'])) {
                        return back()->with('error', 'Chưa có lý do từ chối');
                    }
                    $data['receiverSignature'] = null;
                    $newStatus = 3;
                } else {
                    if (!isset($data['receiverSignature'])) {
                        return back()->with('error', 'Chưa có chữ ký');
                    }
                    $data['receiverRejectReason'] = null;
                    $newStatus = 2;
                }
                //remove isConfirm1
                unset($data['isReceiverConfirm']);
            }

       


            $oldDataArray = json_decode($oldData->data);
            //add key to old data if not exist if exist replace with new data
            foreach ($data as $key => $value) {
                $oldDataArray->$key = $value;
            }

            //json encode
            $newData = json_encode($oldDataArray);

            $newProposal = $this->dwtServices->updateProposal($id, [
                'data' => $newData,
                'status' => $newStatus //1 mean sent
            ]);
            return redirect()->back()->with('success', 'Cập nhật thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }

    public function delete($id)
    {
        try {
            $this->dwtServices->deleteProposal($id);
            return redirect()->back()->with('success', 'Xóa thành công');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return back()->with('error', $error);
        }
    }
}
