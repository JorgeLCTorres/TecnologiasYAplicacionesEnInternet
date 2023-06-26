<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        //MUESTRE LA VISTA DE LOGIN DE USUARIOS
        return view('auth.login');
    }

    //VALIDAR FORMULARIO DE LOGIN
    public function store(Request $request) {
        $this->validate($request, [
            //REGLAS DE VALIDACIÓN
            'email'=>'required|email',
            'password'=>'required'
        ]);
        //VERIFICAR QUE LAS CREDENCIALES SEAN CORRECTAS
        if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
            //USAR LA DIRECTIVA "with" PARA LLENAR LOS VALORES DE LA SESIÓN
            return back()->with('mensaje', 'Credenciales incorrectas');
        }
        //CREDENCIALES CORRECTAMENTE
        return redirect()->route('post.index', auth()->user()->username);
    }
}
