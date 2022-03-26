<?php
namespace App\Traits;
use Illuminate\Support\Facades\File;

Trait MediaTraits{

    function createMedia($media){
        $imageName = time().'.'. $media->extension();  
        $media->move(public_path('assets/images'), $imageName);    
        // return media name
        return $imageName;  
    }


}
