<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts = [
        [
            "judul" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "alka",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ad eveniet minima in neque nesciunt? Illo quibusdam tempore optio assumenda facere!"
        ],
        [
            "judul" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Sinister",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla error consequuntur itaque, placeat ipsum natus ratione, illo quisquam minima corporis enim iste eius porro accusantium sit nisi consectetur libero nostrum laudantium ipsam reprehenderit perferendis ab. Facilis consectetur necessitatibus itaque doloribus."
        ]
        ];
        public static function all()
        {
            return collect(self::$blog_posts);
        }
        public static function find($slug)  
        {
            $postData = static::all();
            return $postData->firstWhere('slug', $slug);
        }
}
