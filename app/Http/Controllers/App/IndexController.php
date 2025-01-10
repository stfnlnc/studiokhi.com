<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Images;
use App\Models\Post;
use App\Models\Work;

class IndexController extends Controller
{
    public function index()
    {
        $works = Work::where([['is_online', '=', true], ['is_published', '=', true]])->orderBy('created_at', 'desc')->get();
        $posts = Post::latest()->take(2)->get();
        $images = Images::pluck('image_path', 'name');

        return view('app.index', [
            'works' => $works,
            'posts' => $posts,
            'images' => $images,
        ]);
    }
}
