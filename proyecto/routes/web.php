<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

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
Route::get('/crear', [RegisterController::class,'index'])->name('register');
// RUTA PARA ENVÍAR DATOS AL SERVIDOR
Route::post('/crear', [RegisterController::class,'store']);

// RUTA PARA MOSTRAR EL DASHBOARD DEL USUARIO AUTENTICADO
Route::get('/muro', [PostController::class,'index'])->name('post.index');

// RUTA PARA LOGIN
Route::get('/login', [LoginController::class,'index'])->name('login');
// RUTA DE VALIDACIÓN DE LOGIN
Route::post('/login', [LoginController::class,'store']);

// RUTA PARA LOGOUT
Route::post('/logout', [LogoutController::class,'store'])->name('logout');