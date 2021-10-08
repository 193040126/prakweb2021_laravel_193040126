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

Route::get('/', function () {
    return view('Home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Diva Amwal",
        "email" => "193040126.diva@mail.unpas.ac.id",
        "image" => "profil lingkaran.jpeg"
    ]);
});

Route::get('/blog', function () {
    return view('posts');
});
