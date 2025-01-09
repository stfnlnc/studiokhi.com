<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;

class PostController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        $posts = Post::where('is_published', '=', 1)->orderBy('created_at', 'desc')->get();
        return view('app.posts', [
            'posts' => $posts,
            'tags' => $tags
        ]);
    }

    public function show(string $slug)
    {
        $posts = Post::whereNotIn('slug', [$slug])->inRandomOrder()->take(2)->get();
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('app.post.show', [
            'post' => $post,
            'posts' => $posts,
            'slug' => $post->slug,
        ]);
    }
}
