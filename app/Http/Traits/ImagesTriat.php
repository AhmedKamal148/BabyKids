<?php

namespace App\Http\Traits;


trait ImagesTriat
{
    /**
     * @param $file The Image U Wanna Upload IT.
     * @param $fileName We Make A Name To File .
     * @param $path The Path U Wanna Save An Image There .
     * @param $fileExists To Check If Image Was Found -> Delete It, We Will Use This In Update Method.
     * @return void
     *
     */
    private function UploadImage($file,$fileName,$path,$fileExist = null): void
    {
        $file->move(public_path('images/' . $path),$fileName);

        if(!is_null($fileExist))
        {
            unlink(public_path($fileExist));
        }


    }
}
