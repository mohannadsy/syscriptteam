<?php


namespace App\Traits;


trait TraitImages
{
    public function saveImage($image , $folder){
        $file_ext = $image->getClientOriginalExtension();
        $file_name = time() . '.' . $file_ext;
        $path = $folder;
        $image->move($path , $file_name);
        return $file_name;
    }

    public function HEXTORGB($color){
        list($r , $g , $b) = sscanf($color , '#%02x%02x%02x');
        return "rgba(" . $r . " , " . $g . " , " . $b . "  , 0.4)";
    }

}
