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

        // Appliquer les permissions au dossier principal
        chmod('uploads', 0755);

        // Parcourir récursivement les fichiers et dossiers
        $files = File::allFiles('uploads');
        $directories = File::directories('uploads');

        // Appliquer les permissions aux fichiers
        foreach ($files as $file) {
            chmod($file->getRealPath(), 0644);
        }

        // Appliquer les permissions aux sous-dossiers
        foreach ($directories as $dir) {
            chmod($dir, 0755);
        }

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
