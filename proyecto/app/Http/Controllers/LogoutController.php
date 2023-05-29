<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //
    public function store() {
        //CERRAR SESIÓN CON EL helper auth IMPLEMENTANDO EL MÉTODO LOGOUT
        auth()->logout();
        //ENVIAR A LA VISTA DE LOGIN
        return redirect()->route('login');
    }
}
