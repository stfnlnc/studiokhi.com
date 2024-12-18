<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function branding()
    {
        return view('app.branding');
    }

    public function webdesign()
    {
        return view('app.webdesign');
    }

    public function website()
    {
        return view('app.website');
    }
}
