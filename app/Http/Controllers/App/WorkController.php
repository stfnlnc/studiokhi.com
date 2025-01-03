<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\Work;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::all();
        $tags = Tag::all();
        return view('app.work', [
            'works' => $works,
            'tags' => $tags
        ]);
    }

    public function show(string $slug)
    {
        $work = Work::where('slug', $slug)->firstOrFail();
        return view('app.work.show', [
            'work' => $work,
            'slug' => $work->slug,
        ]);
    }
}
