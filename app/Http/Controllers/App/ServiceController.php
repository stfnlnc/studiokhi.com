<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        return view('app.index');
    }
}
