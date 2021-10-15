<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts =  [
            [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Diva Amwal",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error laborum quisquam, aspernatur rerum deleniti veritatis pariatur odit optio, facere similique iure esse repellat quos aliquam at dolore suscipit quibusdam distinctio?"
            ],
            [
            "title" => "Judul Post Pak Doddy",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Ferdiansyah",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, modi? Nemo ex adipisci repellendus reiciendis enim laboriosam officia mollitia magnam molestiae dignissimos autem, nihil accusantium fugit minus quidem placeat quaerat unde debitis pariatur natus soluta illum eos esse vel! Et magni deleniti quis facere dolor eaque asperiores sit laudantium itaque doloremque corrupti nam, esse ipsum quidem animi neque reiciendis, sed minima illum unde sunt facilis! Accusamus saepe atque corporis suscipit eos autem, sint animi corrupti natus tempora voluptatibus maiores velit neque consequatur ipsam dolor adipisci quaerat ipsum aut repellat illum ex commodi consectetur alias. Repellat quos deleniti autem accusamus aliquam."
            ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
