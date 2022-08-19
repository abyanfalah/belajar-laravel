<?php

namespace App;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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



Route::get('/', function () {
    $data = ["title" => "Home"];
    return view('home', $data);
});

Route::get('/post', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'find']);
// Route:: get('/post/author/{user:username}', [PostController::class, 'find_by_author']);
// Route:: get('/post/category/{category:slug}', [PostController::class, 'find_by_category']);


Route::get('/categories', function () {
    $data = [
        "title"      => "Categories",
        "categories" => Category::all()
    ];
    return view('category_list', $data);
});

Route::get('/authors', function () {
    $data = [
        "title"   => "Authors",
        "authors" => User::all()
    ];

    return view('author_list', $data);
});


Route::get('/about', function () {
    $data = [
        "title" => "About",
        "nama"  => "yafi",
        "asal"  => "cianjur"
    ];
    return view('about', $data);
});

// Route::get('/test', [TestController::class, 'index']);
