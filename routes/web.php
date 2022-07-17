<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/', function () {
    $data = [
        "title" => "Home"
    ];
    return view('home',$data);
});

Route::get('/post', function () {

    $data = [
        "title" => "Blog",
        "posts" => $blog_posts
    ];
    return view('post', $data);

    
});


Route::get('/post/{slug}', function ($slug) {
    
    $the_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] == $slug){
            $the_post = $post;
        }
    }
   
    $data = [
        "title" => $the_post["judul"],
        "post" => $the_post
    ];
    return view('post_view', $data);
});

Route::get('/about', function () {
    $data = [
        "title" => "About",
        "nama" => "yafi",
        "asal" => "cianjur"
    ];
    return view('about', $data);
});







