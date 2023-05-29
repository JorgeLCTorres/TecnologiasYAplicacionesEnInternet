<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //CONSTRUCTOR PARA PROTECCIÓN DE LA URL "dashboard"
    //EL CONSTRUCTOR ES LO QUE SE EJECUTA CUANDO INSTANCIAS UN CONTROLADOR
    public function __construct()
    {
        //PROTEGEMOS LA URL
        //AL MÉTODO INDEX CON EL CONSTRUCTOR LE PASAMOS EL PARAMETRO DE AUTENTICACIÓN
        $this->middleware('auth');
    }

    public function index() {
        //MUESTRE LA VISTA DE DASHBOARD
        return view('dashboard');
    }
}
