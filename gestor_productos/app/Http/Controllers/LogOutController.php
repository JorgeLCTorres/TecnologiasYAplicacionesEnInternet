<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogOutController extends Controller
{
    //FUNCIÓN QUE CIERRA LA SESIÓN DEL USUARIO
    public function store(){
        //SE USA EL AUTH JUNTO AL MÉTODO LOGOUT PARA CERRAR SESIÓN
        auth()->logout();
        //SE REDIRECCIONA CUANDO SE CIERRA LA SESIÓN
        return redirect()->route('login');
    }
}
