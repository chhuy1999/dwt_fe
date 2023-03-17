<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    //

    public function login(Request $request)
    {
        //validate request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $url = 'https://sdwtbe.sweetsica.com/api/v1/auth/login';

        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->post($url, [
            'email' => $request->email,
            'password' => $request->password
        ]);

        if (!$response->successful()) {
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
        $data = $response->json();
        $token = $data['data']['token'];
        $request->session()->put('token', $token);
        $user = $data['data']['user'];
        $request->session()->put('user', $user);
        //regenerate session id
        $request->session()->regenerate();
        return redirect('/');
    }
}
