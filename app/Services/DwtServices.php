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
        return $data['data'];
    }

    public function searchDepartment()
    {
        $url = $this->url . '/departments';
        $response = $this->client->get($url);
        //throw exception if response is not successful
        $response->throw()->json()['message'];
        //get data from response
        $data = $response->json();
        return $data['data'];
    }
}
