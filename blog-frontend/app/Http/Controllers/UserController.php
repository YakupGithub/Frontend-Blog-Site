<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signin() {
        return view('login');
    }

    public function signup() {
        return view('register');
    }
}
