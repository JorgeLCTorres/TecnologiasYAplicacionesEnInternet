<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function store(Request $request, User $user, Post $post){
        //VALIDAR LOS COMENTARIOS
        $this->validate($request, [
            'comentario' => 'required|max:255'
        ]);

        //ALMACENAR LOS COMENTARIOS
        Comentario::create([
            'user_id' => auth()->user()->id, //SE REGISTRA EL ID DEL USUARIO (AUTENTICADO) QUE COMENTA
            'post_id' => $post->id,
            'comentario' => $request->comentario
        ]);

        //IMPRIMIR UN MENSAJE DE EXITO
        return back()->with('mensaje', 'Comentario realizado con exito');
    }

    //MÉTODO PARA ELIMINAR COMENTARIO
    public function destroy(Comentario $comentario){
        $comentario->delete();

        //IMPRIMIR UN MENSAJE DE EXITO
        return back()->with('mensaje', 'Comentario eliminado con exito');
    }
}
