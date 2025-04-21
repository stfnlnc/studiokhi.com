<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('app.contact');
    }
}
