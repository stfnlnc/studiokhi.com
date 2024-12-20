<?php

namespace App\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ImageService extends Controller
{
    public static function uploadImage(UploadedFile $image, $path, $name): array
    {
        $sizes = config('app.image_sizes');

        if ($image->getMimeType() === 'video/mp4') {
            Storage::disk('public')->put($path . '/mp4/' . $name, file_get_contents($image));
            return ['mp4' => $image->getClientOriginalName()];
        }

        $imageManager = new ImageManager(new Driver());
        foreach ($sizes as $size) {
            $img = $imageManager->read($image)->scale($size)->toWebp(95);
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

    public static function deleteDirectory($directory): void
    {
        Storage::disk('public')->deleteDirectory($directory);
    }
}
