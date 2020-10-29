<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileManagerController extends Controller
{

    public function show()
    {
        return view('fileupload');
    }

    public function onUpload(){

        $path = env("IMG_PATH");
        $file = $path.'/'.basename($_FILES["file"]["name"]);


        if (strpos($_FILES["file"]["type"], "image") !== false){
            $file = str_replace('/\s+/', '_', $file);
            $file = str_replace(' ', '_', $file);

            $i = 1;
            while (file_exists($file)){
                $i += 1;
                $file = $file.(string)$i;
            }

            if(move_uploaded_file($_FILES["file"]["tmp_name"], $file)){
                return redirect('/admin/')->with('status','Se subio con exito');
            }
            else{
                return redirect('/admin/')->with('status','Hubo un error al subir el archivo.');
            }
        }
    }
}
