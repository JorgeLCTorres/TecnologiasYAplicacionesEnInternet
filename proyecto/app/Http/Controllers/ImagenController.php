<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImagenController extends Controller
{
    //ALMACENAMIENTO DE IMAGENES
    public function store(Request $request){
        //IDENTIFICAR EL ARCHIVO QUE SE SUBE EN DROPZONE
        $imagen=$request->file('file');
        //CONVERTIMOS EL ARREGLO INPUT A FORMATO JSON
        //return response()->json(['imagen'=>$imagen]);

        //GENERAR UN ID ÚNICO PARA CADA UNA DE LAS IMAGENES QUE SE CARGAN AL SERVER
        $nombreImagen = Str::uuid() . "." . $imagen->extension();

        //IMPLEMENTAR INTERVENTION IMAGE
        $imagenServidor = Image::make($imagen);

        //AGREGAMOS EFECTOS DE INTERVENTION IMAGE: INDICAMOS LA MEDIDA DE CADA IMAGEN
        $imagenServidor->fit(1000, 1000);

        //MOVEMOS LA IMAGEN A UN LUGAR FISICO DEL SERVER
        $imagenPath = public_path('uploads') . '/' . $nombreImagen;

        //PASAMOS LA IMAGEN DE MEMORIA AL SERVER
        $imagenServidor->save($imagenPath);

        //VERIFICAMOS QUE EL NOMBRE DEL ARCHIVO SE PONGA COMO ÚNICO
        return response()->json(['imagen'=>$nombreImagen]);
    }
}