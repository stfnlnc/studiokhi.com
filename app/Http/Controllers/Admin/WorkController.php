<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkRequest;
use App\Models\Work;
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
        Work::create($request->validated());

        return Redirect::route('admin.works.index')->with('status', 'success')->with('message', 'Projet créé');
    }

    public function show()
    {
    }

    public function edit()
    {
        return view('admin.work.edit');
    }

    public function update()
    {
    }

    public function destroy(Work $work)
    {
        // $work->delete();

        return Redirect::route('admin.works.index')->with('status', 'success')->with('message', 'Projet supprimé');
    }
}
