<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //FUNCIÓN QUE RETORNA LA VISTA DE LOGIN
    public function index() {
        //SE RETORNA LA VISTA DE LOGIN
        return view('login');
    }

    //FUNCIÓN QUE ALMACENA LOS DATOS DE REGISTRO DE USUARIOS
    public function store(Request $request) {
        //SE REALIZA VALIDACIÓN
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);

        //VERIFICAR QUE LAS CREDENCIALES SEAN CORRECTAS
        if(!auth()->attempt($request->only('email','password'))){
            //Usar la directiva "with" para llenar los valores de la sesión
            return back()->with('mensaje','Credenciales incorrectas');
        }
        //SI LAS CREDENCIALES ESTAN CORRECTAS 
        return redirect()->route('post.index');
    }
}
