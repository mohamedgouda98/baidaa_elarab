<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;

trait Upload
{
    private function uploadFile($file, $fileName, $path)
    {
        $file->storeAs($path, $fileName, 'public');
    }

    private function deleteFile($path)
    {
        Storage::delete($path);
    }


}
