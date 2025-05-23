<?php

namespace App\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ImageService extends Controller
{

    public static function uploadImage(UploadedFile $image, $path, $name): array
    {
        ini_set('max_execution_time', 300);
        $sizes = config('app.image_sizes');
        if ($image->getMimeType() === 'video/mp4') {
            Storage::disk('uploads')->put($path . '/mp4/' . $name . '.mp4', file_get_contents($image));
            return ['mp4' => $name . '.mp4'];
        }

        $imageManager = new ImageManager(new Driver());
        $img = $imageManager->read($image)->toWebp(100);
        Storage::disk('uploads')->put($path . '/full/' . $name . '.webp', $img);
        foreach ($sizes as $size) {
            $img = $imageManager->read($image)->scale($size)->toWebp(100);
            Storage::disk('uploads')->put($path . '/' . $size . '/' . $name . '.webp', $img);
        }
        ini_set('max_execution_time', 30);

        return ['webp' => $name . '.webp'];
    }

    public static function deleteImage($path, $format, $name): void
    {
        $sizes = config('app.image_sizes');
        if ($format === 'mp4') {
            Storage::disk('uploads')->delete($path . '/mp4/' . $name);
            return;
        }
        Storage::disk('uploads')->delete($path . '/full/' . $name);
        foreach ($sizes as $size) {
            Storage::disk('uploads')->delete($path . '/' . $size . '/' . $name);
        }
    }

    public static function deleteDirectory($directory): void
    {
        Storage::disk('uploads')->deleteDirectory($directory);
    }
}
