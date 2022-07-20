<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        $data = [
            "title" => "Blog",
            "posts" => Post::latest()->get()
        ];
        return view('post', $data);
    }

    public function find(Post $post){
        $data = [
            "title" => $post->title,
            "post" => $post
        ];
        return view('post_view', $data);
    }

    public function find_by_author(User $user)
    {
        $data = [
            "title" => "Author: ".$user->name,
            "user"  => $user,
            "posts" => $user->post
        ];

        return view('author_post', $data);
    }
}
