<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRequest;
use App\Models\Images;
use App\Service\ImageService;
use Illuminate\Support\Facades\Redirect;

class ImageController extends Controller
{
    public function index()
    {
        $images = Images::pluck('image_path', 'name')->all();

        return view('admin.image.index', [
            'images' => $images
        ]);
    }

    public function updateOrCreate(ImageRequest $request)
    {
        $this->updateOrCreateImage($request, 'image-index-left');
        $this->updateOrCreateImage($request, 'image-index-right');
        $this->updateOrCreateImage($request, 'image-studio-top');
        $this->updateOrCreateImage($request, 'image-studio-bottom');
        $this->updateOrCreateImage($request, 'image-studio-stefan');
        $this->updateOrCreateImage($request, 'image-studio-cynthia');

        return Redirect::route('admin.images.index')->with('status', 'success')->with('message', 'Image créée avec succès');
    }

    public function updateOrCreateImage($request, $name): void
    {
        $validated = $request->validated();
        if ($request->hasFile($name)) {
            $image = ImageService::uploadImage($request->validated($name), '/images/' . $name, $name);
            $validated['name'] = $name;
            $validated['image_format'] = key($image);
            $validated['image_path'] = current($image);
            Images::updateOrCreate(['name' => $name], $validated);
        }
    }
}
