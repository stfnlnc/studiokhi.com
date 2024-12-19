<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class PolicyController extends Controller
{
    public function term_of_use()
    {
        return view('app.policy.term-of-use');
    }

    public function privacy_policy()
    {
        return view('app.policy.privacy-policy');
    }

    public function cookies()
    {
        return view('app.policy.cookies');
    }
}
