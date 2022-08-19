<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        // dd(request("search"));

        $data = [
            "title" => "Blog",
            "posts" => Post::latest()
                ->filter(request([
                    'search',
                    'category',
                    'author'
                ]))
                ->get()
        ];
        return view('post', $data);
    }

    public function find(Post $post)
    {
        $data = [
            "title" => $post->title,
            "post"  => $post
        ];
        return view('post_view', $data);
    }

    public function find_by_category(Category $category)
    {
        $data = [
            "title"    => "Category: " . $category->name,
            "category" => $category,
            "posts"    => $category->post->load('user', 'category')
        ];
        return view('post', $data);
    }

    public function find_by_author(User $user)
    {
        $data = [
            "title" => "Author: " . $user->name,
            "user"  => $user,
            "posts" => $user->post->load('user', 'category')
        ];

        return view('post', $data);
    }
}
