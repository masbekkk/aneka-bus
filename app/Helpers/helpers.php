<?php 

if (!function_exists('include_svg')) {
    function include_svg($path)
    {
        $file_path = public_path($path);
        if (file_exists($file_path)) {
            return file_get_contents($file_path);
        }
        return '';
    }
}
