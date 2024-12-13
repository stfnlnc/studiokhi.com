<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class WorkController extends Controller
{
    public function index()
    {
        return view('app.work');
    }
}
