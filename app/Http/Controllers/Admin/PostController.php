<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Tag;
use App\Service\ImageService;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('admin.post.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        $tags = Tag::all();

        return view('admin.post.create', [
            'post' => new Post(),
            'tags' => $tags
        ]);
    }

    public function store(PostRequest $request)
    {
        $validated = $request->validated();
        $slug = Str::slug($validated['title'], '-');
        $validated['slug'] = $slug;
        if ($request->hasFile('image')) {
            $image = ImageService::uploadImage($request->validated('image'), '/posts/' . $slug, $slug);
            $validated['image_format'] = key($image);
            $validated['image_path'] = current($image);
        }
        $post = Post::create($validated);
        $post->tags()->sync($request->tags);

        return Redirect::route('admin.posts.index')->with('status', 'success')->with('message', 'Article créé avec succès');
    }

    public function show()
    {
    }

    public function edit(Post $post)
    {
        $tags = Tag::all();

        return view('admin.post.edit', [
            'post' => $post,
            'tags' => $tags
        ]);
    }

    public function update(PostRequest $request, Post $post)
    {
        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $image = ImageService::uploadImage($request->validated('image'), '/posts/' . $post->slug, $post->slug);
            $validated['image_format'] = key($image);
            $validated['image_path'] = current($image);
        }
        $post->update($validated);
        $post->tags()->sync($request->tags);

        return Redirect::route('admin.posts.edit', $post)->with('status', 'success')->with('message', 'Article édité avec succès');
    }

    public function destroyImage(Post $post)
    {
        ImageService::deleteImage('/posts/' . $post->slug, $post->image_format, $post->image_path);
        $post->update([
            'image_format' => null,
            'image_path' => null
        ]);
        return Redirect::route('admin.posts.edit', $post)->with('status', 'success')->with('message', 'Image supprimée avec succès');
    }

    public function destroy(Post $post)
    {
        ImageService::deleteDirectory('/posts/' . $post->slug);
        $post->delete();

        return Redirect::route('admin.posts.index')->with('status', 'success')->with('message', 'Article supprimé avec succès');
    }
}
