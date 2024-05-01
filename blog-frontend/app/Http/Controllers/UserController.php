<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class UserController extends Controller
{
    // public function user()
    // {
    //     $token = session('token');

    //     if($token) {
    //         $response = Http::withToken($token)->get("http://host.docker.internal:81/api/getUser");
    //         $data = $response->json();

    //         $user = session()->get('name');
    //         $user_id = session()->get('id');
    //         $user_mail = session()->get('email');

    //         session()->keep('name');

    //         return view('user', ['user' => $user, 'id' => $user_id, 'email' =>  $user_mail]);
    //     } else {
    //         return redirect()->route('user.login')->with('error', 'Giriş yap');
    //     }
    // }

    public function user()
    {
        $user = Auth::user();
        dd($user);
        return view('user', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $token = session('token');

        if ($token) {
            $response = Http::put('http://host.docker.internal:81/api/updateUser', [
                'name' => $request->input('name'),
                'email' => $request->input('email')
            ]);

            if ($response->successful()) {
                return redirect()->back()->with('success', 'Profil güncellendi!');
            } else {
                return redirect()->back()->with('error', 'Profil güncellenirken bir hata oluştu. Lütfen tekrar deneyin.');
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
