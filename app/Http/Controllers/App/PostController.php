<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('app.posts');
    }
}
