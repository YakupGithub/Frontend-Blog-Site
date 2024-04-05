<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function post($id)
    {
        $dataPosts = Http::get("http://host.docker.internal:81/api/getPost/{$id}");
        $dataComments = Http::get('http://host.docker.internal:81/api/allComments');
        $dataCategories = Http::get('http://host.docker.internal:81/api/allCategories');

        $posts = $dataPosts->json();
        $comments = $dataComments->json();
        $categories = $dataCategories->json();

        $data = [
            'posts' => $posts,
            'comments' => $comments,
            'categories' => $categories
        ];

        // dd($data);

        return view('post', [
            'categories' => $data['categories'],
            'comments' => $data['comments'],
            'posts' => $data['posts']
        ]);
    }

    public function createComment(Request $request)
    {
        $response = Http::post('http://host.docker.internal:81/api/createComment', [
            'content' => $request->content,
        ]);

        $responseData = $response->json();

        if($responseData['status'] == 0) {
            return redirect()->route('user.signup')->with('error', $responseData['error']);
        } else {
            return redirect()->route('post')->with('success', $responseData['message']);
        }
    }

    public function CategoriesAndPosts()
    {
        $response = Http::get('http://host.docker.internal:81/api/allCategoriesAndBlogs');
        $data = $response->json();

        return view('blog', ['categories' => $data['categories'], 'posts' => $data['posts']]);
    }
}
