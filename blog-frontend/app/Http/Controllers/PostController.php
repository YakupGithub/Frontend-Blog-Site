<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PostController extends Controller
{
    public function category($slug)
    {
        $data = Http::get("http://host.docker.internal:81/api/getCategory/{$slug}");
        $content = $data->json();

        return view('category', ['category' => $content['category'], 'posts' => $content['posts']]);
    }

    public function post($id)
    {
        $token = session('token');

        if($token)
        {
            $dataPosts = Http::withToken($token)->get("http://host.docker.internal:81/api/getPost/{$id}");
            $dataComments = Http::withToken($token)->get('http://host.docker.internal:81/api/allComments');
            $dataCategories = Http::withToken($token)->get('http://host.docker.internal:81/api/allCategories');

            $posts = $dataPosts->json();
            $comments = $dataComments->json();
            $categories = $dataCategories->json();

            $user = session()->get('name');
            session()->keep('name');

            $data = [
                'posts' => $posts,
                'comments' => $comments,
                'categories' => $categories
            ];

            return view('post', [
                'user' => $user,
                'categories' => $data['categories'],
                'comments' => $data['comments'],
                'posts' => $data['posts']
            ]);
        } else {
            $dataCategories = Http::get('http://host.docker.internal:81/api/allCategories');
            $categories = $dataCategories->json();

            return view('post', ['categories' => $categories,]);
        }
    }

    public function createComment(Request $request, $id)
    {
        $token = session('token');
        $user = session()->get('user_id');

        $response = Http::withToken($token)->post('http://host.docker.internal:81/api/createComment', [
            'post_id' => $id,
            'user_id' => $user,
            'content' => $request->content,
        ]);

        if ($response->ok()) {
            $responseData = $response->json();

            if ($responseData !== null && isset($responseData['status']) && $responseData['status'] == 1) {
                return redirect()->back()->with('success', $responseData['message']);
            }
        }

        return redirect()->back()->with('error', 'An error occurred while creating the comment.');
    }

}
