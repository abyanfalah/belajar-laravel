<?php
namespace App;

use App\Http\Controllers\PostController;
use App\Models\Post;
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



Route::get('/', function () {
    $data = [
        "title" => "Home"
    ];
    return view('home',$data);
});

Route::get('/post', [PostController::class, 'index']);

Route::get('/post/{slug}', [PostController::class, 'find']);

Route::get('/about', function () {
    $data = [
        "title" => "About",
        "nama"  => "yafi",
        "asal"  => "cianjur"
    ];
    return view('about', $data);
});







