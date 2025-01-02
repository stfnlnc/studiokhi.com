<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class TagController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate(['name' => 'required', 'color' => 'required']);
        $slug = Str::slug($validated['name'], '-');
        $validated['slug'] = $slug;
        Tag::create($validated);

        return Redirect::route('admin.works.index')->with('status', 'success')->with('message', 'Tag créé avec succès');
    }
}
