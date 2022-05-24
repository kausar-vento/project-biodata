<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public static function postData()
    {
        $posts = Post::latest();
        
        if (request('judul', 'pembuat')) {
            $posts->where('tittle', 'like', '%'. request('judul') . '%')
            ->where('creator', 'like', "%" . request('pembuat') . "%");
        }

            return view('post_data', [
                "tittle" => "Blog",
                "posts" => $posts->get()
            ]);    
    }
    public static function readData(Post $post)
    {
            return view('read_data', [
                "tittle" => "Baca Selengkapnya",
                "selengkapnya" => $post
            ]);
    }
    
}
