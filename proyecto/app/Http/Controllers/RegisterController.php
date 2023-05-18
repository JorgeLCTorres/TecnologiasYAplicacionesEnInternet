<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //CREAR NUESTRO PRIMER MÉTODO DEL CONTROLADOR
    public function index() {
        return view("auth.register");
    }
}
