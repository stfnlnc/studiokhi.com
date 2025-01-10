<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Images;

class StudioController extends Controller
{
    public function index()
    {
        $images = Images::pluck('image_path', 'name');

        return view('app.studio', [
            'images' => $images
        ]);
    }
}
