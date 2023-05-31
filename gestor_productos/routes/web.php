<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductosController;

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

//SE HACE RUTA PARA LA PRIMERA VISTA QUE APARECERA
Route::get('/', function () {
    return view('login');
});

//SE HACE RUTA PARA MOSTRAR LA VISTA DE REGISTRO
Route::get('/crear', [RegisterController::class, 'index'])->name('register');

//SE HACE RUTA PARA MANDAR DATOS DEL FORMULARIO DE REGISTRAR AL CONTROLADOR
Route::post('/crear', [RegisterController::class, 'store']);

//SE HACE RUTA PARA MOSTRAR LA VISTA DE DASHBOARD
Route::get('/dashboard', [PostController::class, 'index'])->name('post.index');

//SE HACE RUTA PARA MOSTRAR LA VISTA DE LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login');

//SE HACE RUTA PARA MANDAR DATOS DEL FORMULARIO DE LOGIN AL CONTROLADOR
Route::post('/login', [LoginController::class, 'store']);

//SE HACE RUTA PARA MOSTRAR LA VISTA DE PRODUCTOS
Route::get('/productos', [ProductosController::class, 'index'])->name('productos');

//SE HACE RUTA PARA MOSTRAR LA VISTA DE REGISTRAR PRODUCTO
Route::get('/registrarProducto', [ProductosController::class, 'registrarProducto'])->name('registrarProducto');

//SE HACE RUTA PARA MANDAR DATOS DEL FORMULARIO DE REGISTRAR PRODUCTO AL CONTROLADOR
Route::post('/registrarProducto', [ProductosController::class, 'store']);

//SE HACE RUTA PARA MANDAR DATOS DEL FORMULARIO DE REGISTRAR PRODUCTO AL CONTROLADOR
Route::post('/eliminar', [ProductosController::class, 'delete'])->name('delete');

//SE HACE RUTA PARA MANDAR DATOS DEL FORMULARIO DE CERRAR SESIÓN AL CONTROLADOR
Route::post('/logout', [LogOutController::class, 'store'])->name('logout');