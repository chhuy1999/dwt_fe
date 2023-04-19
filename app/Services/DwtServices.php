<?php

namespace App\Services;

use Exception;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Http;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Termwind\Components\Dd;

class DwtServices
{

    private mixed $client;
    protected string $url;

    public function __construct()
    {
        $this->url = env('API_URL', '');
        //add middleware to attach token to request
        $this->client = Http::withMiddleware(
            Middleware::mapRequest(
                function (RequestInterface $request) {
                    $token = session()->get('token');
                    $request = $request
                        ->withHeader('Accept', 'application/json')
                        ->withHeader('Content-Type', 'application/json');
                    //attach token to request if it exists
                    if ($token) {
                        $request = $request
                            ->withHeader('Authorization', 'Bearer ' . $token);
                    }
                    return $request;
                },
            )
        );
    }
    //private helper function to transform response array to object
    private function _toObject($array)
    {
        $objectStr = json_encode($array);
        $object = json_decode($objectStr);
        return $object;
    }

    public function login($email, $password)
    {
        $url = $this->url . '/auth/login';
        $response = $this->client->post($url, [
            'email' => $email,
            'password' => $password
        ]);
        //throw exception if response is not successful
        $response->throw();
        //get data from response
        $response->throw()->json()['message'];

        $data = $response->json();
        return $data['data'];
    }

    public function searchKpiKeys($q = "", $page = 1, $limit = 30)
    {
        $url = $this->url . '/kpi-keys';
        $response = $this->client->get($url, [
            'q' => $q,
            'page' => $page,
            'limit' => $limit
        ]);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        return $this->_toObject($data)->data;
    }

    public function createKpiKey($data)
    {
        $url = $this->url . '/kpi-keys';
        $response = $this->client->post($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        return $data['data'];
    }

    public function listUnits()
    {
        $url = $this->url . '/units';
        $response = $this->client->get($url);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function updateKpiKey($id, $data)
    {
        $url = $this->url . '/kpi-keys/' . $id;
        $response = $this->client->put($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function deleteKpiKey($id)
    {
        $url = $this->url . '/kpi-keys/' . $id;
        $response = $this->client->delete($url);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function searchKpiTargets($q = "", $page = 1, $limit = 30)
    {
        $url = $this->url . '/targets';
        $response = $this->client->get($url, [
            'q' => $q,
            'page' => $page,
            'limit' => $limit
        ]);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function createKpiTarget($data)
    {
        $url = $this->url . '/targets';
        $response = $this->client->post($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    // public function listPositions()
    // {
    //     $url = $this->url . '/positions';
    //     $response = $this->client->get($url);
    //     //throw exception if response is not successful
    //     $response->throw()->json()['message'];
    //     //get data from response
    //     $data = $response->json();
    //     $dataObj = $this->_toObject($data);
    //     return $dataObj->data;
    // }

    // public function listDepartments()
    // {
    //     $url = $this->url . '/departments';
    //     $response = $this->client->get($url);
    //     //throw exception if response is not successful
    //     $response->throw()->json()['message'];
    //     //get data from response
    //     $data = $response->json();
    //     $dataObj = $this->_toObject($data);
    //     return $dataObj->data;
    // }

    public function updateKpiTarget($id, $data)
    {
        $url = $this->url . '/targets/' . $id;
        $response = $this->client->put($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function deleteKpiTarget($id)
    {
        $url = $this->url . '/targets/' . $id;
        $response = $this->client->delete($url);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    // public function searchKpiTargetDetails(array $params = [])
    // {
    //     $url = $this->url . '/target-details';
    //     //        dd($url);
    //     $response = $this->client->get($url, $params);
    //     //throw exception if response is not successful
    //     $response->throw()->json()['message'];
    //     //get data from response
    //     $data = $response->json();
    //     $dataObj = $this->_toObject($data);
    //     return $dataObj->data;
    // }

    public function searchKpiTargetDetails(array $params = null)
{
    $url = $this->url . '/target-details';
    //        dd($url);
    $response = $this->client->get($url, $params);
    //throw exception if response is not successful
    $response->throw()->json()['message'];
    //get data from response
    $data = $response->json();
    $dataObj = $this->_toObject($data);
    return $dataObj->data;
}

    public function updateKpiTargetDetail($id, $data)
    {
        $url = $this->url . '/target-details/' . $id;
        $response = $this->client->put($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function deleteKpiTargetDetail($id)
    {
        $url = $this->url . '/target-details/' . $id;
        $response = $this->client->delete($url);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }


    // màn hồ sơ đơn vị
    public function listDepartments()
    {
        $url = $this->url . '/departments';
        $response = $this->client->get($url);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function searchDepartment($q = "", $page = 1, $limit = 30)
    {
        $url = $this->url . '/departments';
        $response = $this->client->get($url, [
            'q' => $q,
            'page' => $page,
            'limit' => $limit
        ]);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function createDepartment($data)
    {
        $url = $this->url . '/departments';
        $response = $this->client->post($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function updateDepartment($id, $data)
    {
        $url = $this->url . '/departments/' . $id;
        $response = $this->client->put($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function deleteDepartment($id)
    {
        $url = $this->url . '/departments/' . $id;
        $response = $this->client->delete($url);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }


    // màn danh sách vị trí
    public function listPositions()
    {
        $url = $this->url . '/positions';
        $response = $this->client->get($url);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function searchPosition($q = "", $page = 1, $limit = 30)
    {
        $url = $this->url . '/positions';
        $response = $this->client->get($url, [
            'q' => $q,
            'page' => $page,
            'limit' => $limit
        ]);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function createPosition($data)
    {
        $url = $this->url . '/positions';
        $response = $this->client->post($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }



    public function updatePosition($id, $data)
    {
        $url = $this->url . '/positions/' . $id;
        $response = $this->client->put($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function deletePosition($id)
    {
        $url = $this->url . '/positions/' . $id;
        $response = $this->client->delete($url);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }


    // màn danh sách thành viên
    public function listUsers()
    {
        $url = $this->url . '/users';
        $response = $this->client->get($url, [
            'page' => 1,
            'limit' => 1000
        ]);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function createUser($data)
    {
        $url = $this->url . '/users';
        $response = $this->client->post($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function searchUser($q = "", $page = 1, $limit = 30)
    {
        $url = $this->url . '/users';
        $response = $this->client->get($url, [
            'q' => $q,
            'page' => $page,
            'limit' => $limit
        ]);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    // public function updateUser($id, $data)
    // {
    //     $url = $this->url . '/users/' . $id;
    //     $response = $this->client->put($url, $data);
    //     //throw exception if response is not successful
    //     $response->throw()->json()['message'];
    //     //get data from response
    //     $data = $response->json();
    //     $dataObj = $this->_toObject($data);
    //     return $dataObj->data;
    // }

    public function updateUser($id, $data)
    {
        $url = $this->url . '/users/' . $id;
        $response = $this->client->put($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function deleteUser($id)
    {
        $url = $this->url . '/users/' . $id;
        $response = $this->client->delete($url);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }



    // màn giao ban
    public function listReports()
    {
        $url = $this->url . '/reports';
        $response = $this->client->get($url);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function createReports($data)
    {
        $url = $this->url . '/reports';
        $response = $this->client->post($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function searchReports($q = "", $department_id = null, $page = 1, $limit = 30, $received = null)
    {
        $url = $this->url . '/reports';
        $response = $this->client->get($url, [
            'q' => $q,
            'page' => $page,
            'limit' => $limit,
            'department_id' => $department_id,
            'received' => $received
        ]);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function updateReports($id, $data)
    {
        $url = $this->url . '/reports/' . $id;
        $response = $this->client->put($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function deleteReports($id)
    {
        $url = $this->url . '/reports/' . $id;
        $response = $this->client->delete($url);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }





    public function createKpiTargetDetail($data)
    {
        $url = $this->url . '/target-details';
        $response = $this->client->post($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function uploadFileToRemoteHost($file)
    {
        $fileStream = fopen($file, 'r');
        $url = "https://report.sweetsica.com/api/report/upload";
        //send form data
        $response = Http::attach(
            'files',
            file_get_contents($file),
            $file->getClientOriginalName()
        )->post($url);

        //throw exception if response is not successful
        $response->throw()->json();
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->downloadLink;
    }

    public function createTargetLog($data)
    {
        $url = $this->url . '/target-logs';
        $response = $this->client->post($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }


    public function createTargetLogDetail($data)
    {
        $url = $this->url . '/target-log-details';
        $response = $this->client->post($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function searchTargetLogs($targetDetailId, $reportedDate)
    {
        $url = $this->url . '/target-logs/';
        $response = $this->client->get($url, [
            'target_detail_id' => $targetDetailId,
            'report_date' => $reportedDate
        ]);

        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function updateTargetLogDetail($id, $data)
    {
        $url = $this->url . '/target-log-details/' . $id;
        $response = $this->client->put($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }



    // màn danh sách cấp nhân sự
    public function listPositionLevel()
    {
        $url = $this->url . '/position-levels';
        $response = $this->client->get($url);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function createPositionLevel($data)
    {
        $url = $this->url . '/position-levels';
        $response = $this->client->post($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function searchPositionLevel($q = "", $page = 1, $limit = 30)
    {
        $url = $this->url . '/position-levels';
        $response = $this->client->get($url, [
            'q' => $q,
            'page' => $page,
            'limit' => $limit
        ]);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function searchUnits($q = "", $page = 1, $limit = 30)
    {
        $url = $this->url . '/units';
        $response = $this->client->get($url, [
            'q' => $q,
            'page' => $page,
            'limit' => $limit
        ]);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function updatePositionLevel($id, $data)
    {
        $url = $this->url . '/position-levels/' . $id;
        $response = $this->client->put($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function deletePositionLevel($id)
    {
        $url = $this->url . '/position-levels/' . $id;
        $response = $this->client->delete($url);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function unAssignTask($id)
    {
        try {
            $url = $this->url . '/target-details/' . $id;
            $response = $this->client->put($url, [
                'users' => []
            ]);
            //throw exception if response is not successful
            $response->throw()->json()['message'];
            //get data from response
            $data = $response->json();
            $dataObj = $this->_toObject($data);
            return $dataObj->data;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    // màn danh mục gói trang bị
    public function listEquimentPack()
    {
        $url = $this->url . '/equipment-packs';
        $response = $this->client->get($url);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function searchEquimentPack($q = "", $page = 1, $limit = 30)
    {
        $url = $this->url . '/equipment-packs';
        $response = $this->client->get($url, [
            'q' => $q,
            'page' => $page,
            'limit' => $limit
        ]);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function createEquimentPack($data)
    {
        $url = $this->url . '/equipment-packs';
        $response = $this->client->post($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function updateEquimentPack($id, $data)
    {
        $url = $this->url . '/equipment-packs/' . $id;
        $response = $this->client->put($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function deleteEquimentPack($id)
    {
        $url = $this->url . '/equipment-packs/' . $id;
        $response = $this->client->delete($url);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function createReport($data)
    {
        $url = $this->url . '/reports';
        $response = $this->client->post($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function searchMeetingByCode($code)
    {
        $url = $this->url . '/meetings';
        $response = $this->client->get($url, [
            'code' => $code
        ]);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function listMeeting($status = null)
    {

        $url = $this->url . '/meetings';
        $response = $this->client->get($url, [
            'status' => $status
        ]);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function createMeeting($data)
    {
        $url = $this->url . '/meetings';
        $response = $this->client->post($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function updateMeeting($id, $data)
    {
        $url = $this->url . '/meetings/' . $id;
        $response = $this->client->put($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function createReportTask($data)
    {
        $url = $this->url . '/report-tasks';
        $response = $this->client->post($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function searchReportTasks(array $params = [])
    {
        $url = $this->url . '/report-tasks';
        $response = $this->client->get($url, $params);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function createReportTaskLog($data)
    {
        $url = $this->url . '/report-tasks-logs';
        $response = $this->client->post($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function updateReportTaskLog($id, $data)
    {
        $url = $this->url . '/report-tasks-logs/' . $id;
        $response = $this->client->put($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function updateReportTask($id, $data)
    {
        $url = $this->url . '/report-tasks/' . $id;
        $response = $this->client->put($url, $data);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function getDepartmentDetail($id) {
        $url = $this->url . '/departments/' . $id;
        $response = $this->client->get($url);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function deleteReportTask($id) {
        $url = $this->url . '/report-tasks/' . $id;
        $response = $this->client->delete($url);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function deleteTargetLogDetail($id) {
        $url = $this->url . '/target-log-details/' . $id;
        $response = $this->client->delete($url);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

    public function getUserDetail($id) {
        $url = $this->url . '/users/' . $id;
        $response = $this->client->get($url);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }
}
