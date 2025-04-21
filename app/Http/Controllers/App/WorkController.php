<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\Work;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::where('is_published', '=', 1)->orderBy('created_at', 'desc')->get();
        $tags = Tag::all();
        return view('app.work', [
            'works' => $works,
            'tags' => $tags
        ]);
    }

    public function show(string $slug)
    {
        $works = Work::whereNotIn('slug', [$slug])->inRandomOrder()->take(2)->get();
        $work = Work::where('slug', $slug)->firstOrFail();
        return view('app.work.show', [
            'work' => $work,
            'works' => $works,
            'slug' => $work->slug,
        ]);
    }
}
