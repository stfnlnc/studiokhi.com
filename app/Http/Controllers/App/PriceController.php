<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class PriceController extends Controller
{
    public function index()
    {
        return view('app.price');
    }
}
