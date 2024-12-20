<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkRequest;
use App\Models\Work;
use App\Service\ImageService;
use Illuminate\Support\Facades\Redirect;

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
        $image = ImageService::uploadImage($request->validated('image'), 'works');
        $validated['image'] = $image['webp'];
        Work::create($validated);

        return Redirect::route('admin.works.index')->with('status', 'success')->with('message', 'Projet créé');
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
        $work->update($request->validated());

        return Redirect::route('admin.works.index')->with('status', 'success')->with('message', 'Projet édité');
    }

    public function destroy(Work $work)
    {

        $work->delete();

        return Redirect::route('admin.works.index')->with('status', 'success')->with('message', 'Projet supprimé');
    }
}
