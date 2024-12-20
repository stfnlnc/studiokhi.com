<?php

namespace App\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ImageService extends Controller
{
    public static function uploadImage(UploadedFile $image, $path): array
    {
        $sizes = config('app.image_sizes');

        if ($image->getMimeType() === 'video/mp4') {
            Storage::disk('public')->put($path . '/mp4/' . $image->getClientOriginalName(), file_get_contents($image));
            return ['mp4' => $image->getClientOriginalName()];
        }

        $imageManager = new ImageManager(new Driver());
        $name = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
        foreach ($sizes as $size) {
            $img = $imageManager->read($image)->scale($size)->toWebp(80);
            Storage::disk('public')->put($path . '/' . $size . '/' . $name . '.webp', $img);
        }
        return ['webp' => $name . '.webp'];
    }

    public static function deleteImage($path, $name): void
    {
        $sizes = config('app.image_sizes');
        foreach ($sizes as $size) {
            Storage::disk('public')->delete($path . '/' . $size . '/' . $name);
        }
    }
}
