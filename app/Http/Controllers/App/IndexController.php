<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Work;

class IndexController extends Controller
{
    public function index()
    {
        $works = Work::all();
        $posts = Post::all();

        return view('app.index', [
            'works' => $works,
            'posts' => $posts
        ]);
    }
}
