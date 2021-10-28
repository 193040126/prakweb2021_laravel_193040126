<?php


use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Models\Category;
use App\Models\User;



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
    return view('Home',[
        "title" => "Home",
        'active' => 'categories'

    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'categories',
        "name" => "Diva Amwal",
        "email" => "193040126.diva@mail.unpas.ac.id",
        "image" => "profil lingkaran.jpeg"
    ]);
});



Route::get('/blog', [PostController::class, 'index']);

//halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

