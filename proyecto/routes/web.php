<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
 //RUTA PARA VISTA PÁGINA PRINCIPAL (MÉTODO 1)
Route::get('/', function () {
    return view('principal');
});

//RUTA PARA VISTA ALUMNOS (MÉTODO 2)
Route::view('/alumnos', 'alumnos');

//RUTA PARA VISTA CURRICULUM (MÉTODO 2)
Route::view('/curriculum', 'curriculum');

//RUTA PARA VISTA CURRICULUM 2 (MÉTODO 2)
Route::view('/curriculum2', 'curriculum2');

// RUTA PARA VISTA REGISTRO DE USUARIOS
Route::get('/crear-cuenta', [RegisterController::class,'index']);