<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        $data = [
            "title" => "Blog",
            "posts" => Post::all()
        ];
        return view('post', $data);
    }

    public function find($slug){
        $post = Post::find($slug);
        $data = [
            "title" => $post['judul'],
            "post" => $post
        ];
        return view('post_view', $data);
    }
}
