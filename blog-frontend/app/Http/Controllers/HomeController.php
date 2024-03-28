<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function blog() {
        return view('blog');
    }

    public function post() {
        return view('post');
    }

    public function category() {
        $response = Http::get('http://host.docker.internal:81/api/allCategories');
        $categories = $response->json();

        return view('blog', ['categories' => $categories]);
    }

}
