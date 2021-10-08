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
    return view('Home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Diva Amwal",
        "email" => "193040126.diva@mail.unpas.ac.id",
        "image" => "profil lingkaran.jpeg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Diva Amwal",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error laborum quisquam, aspernatur rerum deleniti veritatis pariatur odit optio, facere similique iure esse repellat quos aliquam at dolore suscipit quibusdam distinctio?"
        ],
        [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Doddy Ferdiansyah",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, modi? Nemo ex adipisci repellendus reiciendis enim laboriosam officia mollitia magnam molestiae dignissimos autem, nihil accusantium fugit minus quidem placeat quaerat unde debitis pariatur natus soluta illum eos esse vel! Et magni deleniti quis facere dolor eaque asperiores sit laudantium itaque doloremque corrupti nam, esse ipsum quidem animi neque reiciendis, sed minima illum unde sunt facilis! Accusamus saepe atque corporis suscipit eos autem, sint animi corrupti natus tempora voluptatibus maiores velit neque consequatur ipsam dolor adipisci quaerat ipsum aut repellat illum ex commodi consectetur alias. Repellat quos deleniti autem accusamus aliquam."
        ]
    ];
    
    
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Diva Amwal",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error laborum quisquam, aspernatur rerum deleniti veritatis pariatur odit optio, facere similique iure esse repellat quos aliquam at dolore suscipit quibusdam distinctio?"
        ],
        [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Doddy Ferdiansyah",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, modi? Nemo ex adipisci repellendus reiciendis enim laboriosam officia mollitia magnam molestiae dignissimos autem, nihil accusantium fugit minus quidem placeat quaerat unde debitis pariatur natus soluta illum eos esse vel! Et magni deleniti quis facere dolor eaque asperiores sit laudantium itaque doloremque corrupti nam, esse ipsum quidem animi neque reiciendis, sed minima illum unde sunt facilis! Accusamus saepe atque corporis suscipit eos autem, sint animi corrupti natus tempora voluptatibus maiores velit neque consequatur ipsam dolor adipisci quaerat ipsum aut repellat illum ex commodi consectetur alias. Repellat quos deleniti autem accusamus aliquam."
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] ===  $slug){
            $new_post = $post;
        }
    }

    return view('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});