<?php

namespace App\Services;

use Exception;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Http;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class DwtServices
{

    private mixed $client;
    protected string $url = 'https://sdwtbe.sweetsica.com/api/v1';

    public function __construct()
    {

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

    public function searchKpiKeys($q = "", $page = 1, $limit = 10)
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

    public function searchKpiTargets($q = "", $page = 1, $limit = 10)
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

    public function searchKpiTargetDetails($q = "", $page = 1, $limit = 10, $status="")
    {
        $url = $this->url . '/target-details';
        $response = $this->client->get($url, [
            'q' => $q,
            'page' => $page,
            'limit' => $limit,
            'status' => $status
        ]);
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

        public function searchDepartment($q = "", $page = 1, $limit = 10)
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

        public function searchPosition($q = "", $page = 1, $limit = 10)
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
            $url = $this->url . '/positions/'. $id;
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
        $response = $this->client->get($url);
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

        public function searchUser($q = "", $page = 1, $limit = 10)
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
        $url = $this->url . '/users/'. $id;
        $response = $this->client->delete($url);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }
}
