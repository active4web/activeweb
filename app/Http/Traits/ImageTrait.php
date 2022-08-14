<?php

namespace App\Http\Traits;

trait ImageTrait{


    public function uploadImage($file,$filename,$folder,$oldfile=null){

        $file->move('images/'.$folder,$filename);


        if( !is_null($oldfile)){
            unlink(public_path($oldfile));
        }
       return $filename;
    }
}