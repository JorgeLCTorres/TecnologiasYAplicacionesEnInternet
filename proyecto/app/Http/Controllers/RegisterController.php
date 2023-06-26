<?php

namespace App\Http\Controllers;
use auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //CREAR NUESTRO PRIMER MÉTODO DEL CONTROLADOR
    public function index() {
        return view('auth.register');
    }

    //dd ES DUMP AND DIE E IMPRIME: IMPRIME LO QUE SE TIENE DEL PROYECTO Y LO IMPRIME
    public function store(Request $request) {
        #SE MODIFICA EL REQUEST PARA QUE NO SE REPITAN LOS username
        $request->request->add(['username'=>Str::slug($request->username)]);

        //dd ES DUMP AND DIE E IMPRIME: IMPRIME LO QUE SE TIENE DEL PROYECTO Y LO IMPRIME
        //dd("Post...");
        //dd ($request->get('username'));

        //VALIDACIONES DEL FORMULARIO DE REGISTRO
        $this->validate($request, [
            'name'=>'required|min:5',
            'username'=>'required|unique:users|min:3|max:20',
            'email'=>'required|unique:users|email|max:60',
            'password'=>'required|confirmed|min:5',
            'password_confirmation'=>'',
        ]);
        //dd('Mensaje: Creando cuenta');

        //INVOCAR EL MODELO USER PARA CREAR EL REGISTRO
        User::create([
            'name'=>$request->name,
            //INSERTAR USERNAME EN MINUSCULAS Y SIN ESPACIOS
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        //AUTENTICAR UN USUARIO CON EL MÉTODO "attemp"
        //OPCIÓN 1
        /*auth()->attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ]);*/
        //OPCIÓN 2
        auth()->attempt($request->only('email', 'password'));

        //REDIRECCIONANDO
        return redirect()->route('post.index', auth()->user()->username);
    }
}
