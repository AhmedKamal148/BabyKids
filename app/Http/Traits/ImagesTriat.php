<?php

namespace App\Http\Traits;


trait ImagesTriat
{
    private function UploadImage($file,$fileName,$path,$fileExists = null): void
    {
        $file->move(public_path('images/' . $path),$fileName);
        if(!is_null($fileExists))
        {
            unlink(public_path($fileExists));
        }
//        return true;
    }
}
