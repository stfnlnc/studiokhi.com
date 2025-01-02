<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Work;

class WorkController extends Controller
{
    public function index()
    {
        return view('app.work');
    }

    public function show(string $slug)
    {
        $work = Work::where('slug', $slug)->firstOrFail();
        return view('app.show', [
            'work' => $work,
            'slug' => $work->slug,
        ]);
    }
}
