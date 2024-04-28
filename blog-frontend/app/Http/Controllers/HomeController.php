<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function CategoriesAndPosts()
    {
        $token = session('token');

        $response = Http::withToken($token)->get('http://host.docker.internal:81/api/allCategoriesAndBlogs');
        $data = $response->json();

        $user = session()->get('name');
        $user_id = session()->get('id');
        session()->keep('name');

        return view('blog', [
            'categories' => $data['categories'],
            'posts' => $data['posts'],
            'user' => $user,
            'id' => $user_id,
        ]);
    }
}
