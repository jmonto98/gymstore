<?php

namespace App\Utils;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ImageHandler
{
    public static function storeImage(string $modelType, int $id, UploadedFile $image): string
    {
        $imageName = $modelType . '/' . $id . '.' . $image->extension();
        Storage::disk('public')->put(
            $imageName,
            file_get_contents($image->getRealPath())
        );

        return $imageName;
    }

    public static function deleteImage($image): void
    {
            Storage::disk('public')->delete($image);
    }
}
