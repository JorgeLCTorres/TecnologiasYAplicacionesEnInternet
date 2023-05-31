<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    //Constructor para la protección de la url dashboard
    //El constructor es lo que se ejecuta cuando haces una instacia al contructor
    public function __construct(){
        //Protegemos la URL
        //Al método index con el constructor le pasamos el parámetro de autentificación
        $this->middleware('auth');
    }

    //FUNCIÓN QUE RETORNA LA VISTA DE PRODUCTOS
    public function index() {
        //SE REALIZA UNA CONSULTA A LA TABLA PRODUCTS Y EL RESULTADO SE GUARDA EN LA VARIABLE $PRODUCTOS
        $productos = DB::table('products')->get();
        //SE RETORNA LA VISTA DE PRODUCTOS
        return view('productos',['productos'=>$productos]);
    }

    //FUNCIÓN QUE RETORNA LA VISTA DE REGISTRAR PRODUCTO
    public function registrarProducto() {
        //SE RETORNA LA VISTA DE REGISTRAR PRODUCTO
        return view('registrarProducto');
    }

    //FUNCIÓN QUE ALMACENA LOS DATOS DE REGISTRO DE PRODUCTO
    public function store(Request $request) {
        //SE VALIDA CADA CAMPO DEL FORMULARIO
        $this->validate($request, [
            'descripcion_corta' =>'required',
            'descripcion_larga'=>'required',
            'precio_venta'=>'required',
            'precio_compra'=>'required',
            'stock'=>'required',
            'peso'=>'required',
        ]);

        //SE MANDA LLAMAR EL MODELO USERS PARA CREAR REGISTRO
        Productos::create([
            'descripcion_corta'=>$request->descripcion_corta,
            'descripcion_larga'=>$request->descripcion_larga,
            'precio_venta'=>$request->precio_venta,
            'precio_compra'=>$request->precio_compra,
            'stock'=>$request->stock,
            'peso'=>$request->peso
        ]);

        //SE REDIRECCIONA CUANDO SE REGISTRE EL PRODUCTO
        return redirect()->route('productos');
    }

    //FUNCIÓN QUE BORRA UN REGISTRO DE PRODUCTO
    public function delete(Request $request) {
        //SE REALIZA UNA CONSULTA DE ELIMINACIÓN A LA BASE DE DATOS
        //SI SE REALIZA LA ELIMINACION RETORNA TRUE, DE LO CONTRARIO RETORNA FALSE
        $delete = DB::table('products')->where('id','=',$request->id)->delete();
        if ($delete){
            //SE REDIRECCIONA CUANDO SE ELIMINE EL PRODUCTO
            return redirect()->route('productos');
        }
    }
}
