<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //Constructor para la protección de la url dashboard
    //El constructor es lo que se ejecuta cuando haces una instacia al contructor
    public function __construct(){
        //Protegemos la URL
        //Al método index con el constructor le pasamos el parámetro de autentificación
        $this->middleware('auth');
    }

    //FUNCIÓN QUE RETORNA LA VISTA DE DASHBOARD
    public function index() {
        //SE RETORNA LA VISTA DE DASHBOARD
        return view('dashboard');
    }
}
