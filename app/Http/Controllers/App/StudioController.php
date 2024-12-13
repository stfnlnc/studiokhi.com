<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class StudioController extends Controller
{
    public function index()
    {
        return view('app.studio');
    }
}
