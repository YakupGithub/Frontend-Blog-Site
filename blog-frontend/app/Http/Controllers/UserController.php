<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class UserController extends Controller
{
    public function user($id)
    {
        $token = session('token');
        $userId = session('userId');

        if($token && $userId) {
            $response = Http::withToken($token)->get("http://host.docker.internal:81/api/getUser/{$userId}");

            $user = $response->json();

            return view('user', ['user' => $user, 'userId' => $userId]);
        } else {
            return redirect()->route('user.login')->with('error', 'Giriş yap');
        }
    }

    public function update($id, Request $request)
    {
        $token = session('token');

        if ($token) {
            $response = Http::withToken($token)->put("http://host.docker.internal:81/api/updateUser/{$id}", [
                'name' => $request->name,
                'email' => $request->email,
            ]);

            if ($response->successful()) {
                return redirect()->route('home')->with('success', $response->json('message'));
            } else {
                $errorMessage = $response->json()['error'] ?? 'HATA!';
                return redirect()->route('home')->with('error', $errorMessage);
            }
        } else {
            return redirect()->route('user.login');
        }
    }


    public function signin()
    {
        return view('login');
    }

    public function register(Request $request)
    {
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

    public function signup()
    {
        return view('register');
    }

    public function login(Request $request)
    {
        $response = Http::post('http://host.docker.internal:81/api/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($response->successful()) {
            $jsonData = $response->json();

            if ($jsonData['status'] == 1) {
                session(['token' => $jsonData['token']]);
                session(['userId' => $jsonData['id']]);
                return redirect()->route('home')->with('success', $jsonData['message'])
                    ->with('name', $jsonData['name'])
                    ->with('email', $jsonData['email'])
                    ->with('id', $jsonData['id']);
            } else {
                return redirect('login')->with(['status' => $jsonData['status'], 'error' => $jsonData['message']]);
            }
        } else {
            return redirect('login')->with('error', 'Sunucuyla bağlantı kurulurken bir hata oluştu.');
        }
    }

    public function logout(Request $request)
    {
        $response = Http::withToken(session('token'))->post('http://host.docker.internal:81/api/logout');

        session(['token' => '']);

        if ($response->successful()) {
            $successMessage = $response->json('message');
            return redirect()->route('user.signin')->with('success', $successMessage);
        } else {
            $errorMessage = $response->json('message');
            return redirect()->route('user.signin')->with('error', $errorMessage);
        }
    }
}
