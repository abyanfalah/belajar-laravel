<?php
namespace App;

use App\Http\Controllers\PostController;
use App\Models\Category;
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
Route::get('/post/{post:slug}', [PostController::class, 'find']);
Route::get('/post/author/{user:name}', [PostController::class, 'find_by_author']);


Route::get('/categories', function(){
    $data= [
        "title" => "Categories",
        "categories" => Category::all()
    ];   
    return view('category_list', $data);
});

Route::get('/categories/{category:slug}', function(Category $category){
    $data=[
        "title" => $category->name,
        "category" => $category,
        "posts" => $category->post
    ];
    return view('category_posts', $data);
});

Route::get('/about', function () {
    $data = [
        "title" => "About",
        "nama"  => "yafi",
        "asal"  => "cianjur"
    ];
    return view('about', $data);
});








