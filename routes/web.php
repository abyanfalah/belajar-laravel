<?php

namespace App;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'auth']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/registration', [AuthController::class, 'registration'])->middleware('guest');
Route::post('/registration', [AuthController::class, 'save_registration']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        "title" => "dashboard"
    ]);
})->middleware('auth');

// RESOURCE ================================================
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');


// ================================================
Route::get('/test', [TestController::class, 'index']);
