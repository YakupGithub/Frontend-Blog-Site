<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class UserController extends Controller
{
    public function signin() {
        return view('login');
    }

    public function register(Request $request) {
        $response = Http::post('http://host.docker.internal:81/api/register', [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'password_confirmation' =>$request->password_confirmation,
        ]);

        $responseData = $response->json();

        if($responseData['status'] == 0) {
            return redirect()->route('user.register')->with('error', $responseData['error']);
        } else {
            return redirect()->route('user.login')->with('success', $responseData['message']);
        }
    }

    public function signup() {
        return view('register');
    }

    public function login(Request $request) {
        $response = Http::post('http://host.docker.internal:81/api/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $jsonData = $response->json();

        if ($jsonData['status'] == 1) {
            session(['token' => $jsonData['token']]);
            return redirect()->route('user.post')->with('success', $jsonData['message']);
        } else {
            return redirect('login')->with(['status' => $jsonData['status'], 'error' => $jsonData['message']]);
        }
    }
}
