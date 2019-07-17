<?php

use Illuminate\Http\UploadedFile;

if (!function_exists('uploading')) {
    function uploading(&$file, $path, Closure $func = null)
    {
        if ($file instanceof UploadedFile) {
            resolve('matrix.image')
                ->upload($file, $path, $func);
        }

    }
}
if (!function_exists('showImage')) {
    function showImage($image)
    {
        if (!is_null($image)) {
            $link = asset('images/' . $image);
            $thumb = asset('images/thumbs/' . $image);
            return '<a href="' . $link . '"><img src="' . $thumb . '"></a>';
        }
        return '<span>لا يوجد</span>';
    }
}