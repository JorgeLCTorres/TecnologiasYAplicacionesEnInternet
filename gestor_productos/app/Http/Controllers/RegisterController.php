<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //FUNCIÓN QUE RETORNA LA VISTA DE REGISTRAR
    public function index() {
        //SE RETORNA LA VISTA DE REGISTRAR
        return view('register');
    }

    //FUNCIÓN QUE ALMACENA LOS DATOS DE REGISTRO DE USUARIOS
    public function store(Request $request) {
        //SE VALIDA CADA CAMPO DEL FORMULARIO
        $this->validate($request, [
            'nombre' =>'required',
            'username'=>'required',
            'email'=>'required',
            'password'=>'required',
            'password2'=>'',
        ]);

        //SE MANDA LLAMAR EL MODELO USERS PARA CREAR REGISTRO
        User::create([
            'name'=>$request->nombre,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        //SE AUTENTIFICA AL USUARIO
        auth()->attempt($request->only('email','password'));

        //SE REDIRECCIONA CUANDO SE REGISTRE EL USUARIO
        return redirect()->route('post.index');
    }
}
