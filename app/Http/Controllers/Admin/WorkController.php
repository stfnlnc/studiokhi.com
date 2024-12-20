<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkRequest;
use App\Models\Work;
use App\Service\ImageService;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::all();

        return view('admin.work.index', [
            'works' => $works
        ]);
    }

    public function create()
    {
        return view('admin.work.create', [
            'work' => new Work()
        ]);
    }

    public function store(WorkRequest $request)
    {
        $validated = $request->validated();
        $slug = Str::slug($validated['title'], '-');
        $image = ImageService::uploadImage($request->validated('image'), $slug, $slug);
        $validated['slug'] = $slug;
        $validated['image_format'] = key($image);
        $validated['image_path'] = current($image);
        Work::create($validated);
        return Redirect::route('admin.works.index')->with('status', 'success')->with('message', 'Projet créé avec succès');
    }

    public function show()
    {
    }

    public function edit(Work $work)
    {
        return view('admin.work.edit', [
            'work' => $work
        ]);
    }

    public function update(WorkRequest $request, Work $work)
    {
        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $image = ImageService::uploadImage($request->validated('image'), $work->slug, $work->slug);
            $validated['image_format'] = key($image);
            $validated['image_path'] = current($image);
        }
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $data = ImageService::uploadImage($img, $work->slug, $work->slug . '-' . uniqid());
                $work->images()->create([
                    'image_format' => key($data),
                    'image_path' => current($data)
                ]);
            }
        }
        $work->update($validated);
        return Redirect::route('admin.works.edit', $work)->with('status', 'success')->with('message', 'Projet édité avec succès');
    }

    public function destroyImage(Work $work)
    {
        ImageService::deleteImage($work->slug, $work->image_path);
        $work->update([
            'image_format' => null,
            'image_path' => null
        ]);
        return Redirect::route('admin.works.edit', $work)->with('status', 'success')->with('message', 'Image supprimée avec succès');
    }

    public function destroy(Work $work)
    {
        ImageService::deleteDirectory($work->slug);
        $work->delete();

        return Redirect::route('admin.works.index')->with('status', 'success')->with('message', 'Projet supprimé avec succès');
    }
}
