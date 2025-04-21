<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkRequest;
use App\Models\ImagesWork;
use App\Models\Tag;
use App\Models\Work;
use App\Service\ImageService;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::orderBy('order', 'ASC')->get();
        $tags = Tag::all();

        return view('admin.work.index', [
            'works' => $works,
            'tags' => $tags
        ]);
    }

    public function create()
    {
        $tags = Tag::all();

        return view('admin.work.create', [
            'work' => new Work(),
            'tags' => $tags
        ]);
    }

    public function store(WorkRequest $request)
    {
        $validated = $request->validated();
        $slug = Str::slug($validated['title'], '-');
        $validated['slug'] = $slug;
        $validated['order'] = Work::max('order') + 1;
        if ($request->hasFile('image')) {
            $image = ImageService::uploadImage($request->validated('image'), '/works/' . $slug, $slug);
            $validated['image_format'] = key($image);
            $validated['image_path'] = current($image);
        }
        $work = Work::create($validated);
        $work->tags()->sync($request->tags);
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $img) {
                $data = ImageService::uploadImage($img, '/works/' . $slug, $slug . '-' . uniqid());
                $work->images()->create([
                    'image_format' => key($data),
                    'image_path' => current($data),
                    'order' => $key + 1,
                ]);
            }
        }
        return Redirect::route('admin.works.index')->with('status', 'success')->with('message', 'Projet créé avec succès');
    }

    public function show()
    {
    }

    public function edit(Work $work)
    {
        $tags = Tag::all();

        return view('admin.work.edit', [
            'work' => $work,
            'tags' => $tags
        ]);
    }

    public function update(WorkRequest $request, Work $work)
    {
        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $image = ImageService::uploadImage($request->validated('image'), '/works/' . $work->slug, $work->slug);
            $validated['image_format'] = key($image);
            $validated['image_path'] = current($image);
        }
        if ($request->hasFile('images')) {
            $lastImageOrder = ImagesWork::where('work_id', $work->id)->max('order');
            foreach ($request->file('images') as $key => $img) {
                $data = ImageService::uploadImage($img, '/works/' . $work->slug, $work->slug . '-' . uniqid());
                $work->images()->create([
                    'image_format' => key($data),
                    'image_path' => current($data),
                    'order' => $lastImageOrder + $key + 1,
                ]);
            }
        }
        $work->tags()->sync($request->tags);
        $work->update($validated);
        return Redirect::route('admin.works.edit', $work)->with('status', 'success')->with('message', 'Projet édité avec succès');
    }

    public function destroyImage(Work $work)
    {
        ImageService::deleteImage('/works/' . $work->slug, $work->image_format, $work->image_path);
        $work->update([
            'image_format' => null,
            'image_path' => null
        ]);
        return Redirect::route('admin.works.edit', $work)->with('status', 'success')->with('message', 'Image supprimée avec succès');
    }

    public function destroyImages(ImagesWork $image)
    {
        $images = ImagesWork::where([['work_id', $image->work_id], ['order', '>', $image->order]])->orderBy('order', 'ASC')->get();
        foreach ($images as $img) {
            $img->update(['order' => $img->order - 1]);
        }
        ImageService::deleteImage('/works/' . $image->work->slug, $image->image_format, $image->image_path);
        $image->delete();
        return Redirect::route('admin.works.edit', $image->work)->with('status', 'success')->with('message', 'Image supprimée avec succès');
    }

    public function destroy(Work $work)
    {
        $works = Work::where('order', '>', $work->order)->orderBy('order', 'ASC')->get();
        foreach ($works as $work) {
            $work->update(['order' => $work->order - 1]);
        }
        ImageService::deleteDirectory('/works/' . $work->slug);
        $work->delete();

        return Redirect::route('admin.works.index')->with('status', 'success')->with('message', 'Projet supprimé avec succès');
    }

    public function up(Work $work)
    {
        $after = Work::where('order', '=', $work->order - 1)->first();
        $after->update(['order' => $work->order]);
        $work->update(['order' => $work->order - 1]);
        return Redirect::route('admin.works.index')->with('status', 'success')->with('message', 'L\'ordre a été changé');
    }

    public function down(Work $work)
    {
        $before = Work::where('order', '=', $work->order + 1)->first();
        $before->update(['order' => $work->order]);
        $work->update(['order' => $work->order + 1]);
        return Redirect::route('admin.works.index')->with('status', 'success')->with('message', 'L\'ordre a été changé');
    }

    public function upImage(ImagesWork $image)
    {
        $after = ImagesWork::where('order', '=', $image->order + 1)->first();
        $after->update(['order' => $image->order]);
        $image->update(['order' => $image->order + 1]);
        return Redirect::route('admin.works.edit', $image->work)->with('status', 'success')->with('message', 'Image déplacée avec succès');
    }

    public function downImage(ImagesWork $image)
    {
        $after = ImagesWork::where('order', '=', $image->order - 1)->first();
        $after->update(['order' => $image->order]);
        $image->update(['order' => $image->order - 1]);
        return Redirect::route('admin.works.edit', $image->work)->with('status', 'success')->with('message', 'Image déplacée avec succès');

    }
}
