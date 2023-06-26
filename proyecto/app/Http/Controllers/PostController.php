<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //CONSTRUCTOR PARA PROTECCIÓN DE LA URL "dashboard"
    //EL CONSTRUCTOR ES LO QUE SE EJECUTA CUANDO INSTANCIAS UN CONTROLADOR
    public function __construct()
    {
        //PROTEGEMOS LA URL
        //AL MÉTODO INDEX CON EL CONSTRUCTOR LE PASAMOS EL PARAMETRO DE AUTENTICACIÓN
        $this->middleware('auth')->except(['show', 'index']); //EL EXCEPT AYUDA A NO RESTRINGIR EL ACCESO A LOS MÉTODOS QUE SE LE INDIQUEN
    }

    public function index(User $user) {
        //OBTENEMOS LOS POST DE PUBLICACION DEL USUARIO
        $posts=Post::where('user_id', $user->id)->paginate(8); //paginate AYUDA A ORDENAR LAS PUBLICACIONES EN UNA PAGINACIÓN
        //MOSTRAR LOS POST
        //dd($post);

        //RETORNAME A LA VISTA CON USERNAME
        return view('dashboard', [
            'user' => $user,
            //PASAMOS LOS VALORES DE LOS POST DE PUBLICACIÓN HACIA LA VISTA
            'posts'=> $posts
        ]);
    }

    //CREANDO MÉTODO create PARA FORMULARIOS DE PUBLICACIONES
    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        //VALIDACIÓN DEL FORMULARIO DE REGISTRO
        $this->validate($request, [
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'imagen' => 'required'
        ]);

        //Post::create([
        //   'titulo' => $request->titulo,
        //    'descripcion' => $request->descripcion,
        //   'imagen' => $request->imagen,
        //    'user_id' => auth()->user()->id
        //]);

        //OTRA FORMA
        //$post = new Post;
        //$post->titulo = $request->titulo;
        //$post->descripcion = $request->descripcion;
        //$post->imagen = $request->imagen;
        //$post->user_id = auth()->user()->id;
        //$post->save();

        //GUARDAR REGISTRO CON RELACIONES (E-R)
        $request->user()->post()->create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'imagen' => $request->imagen,
            //IDENTIFICACIÓN DEL USUARIO QUE ESTA AUTENTICADO EN ESE MOMENTO
            'user_id' => auth()->user()->id
        ]);

        //REDIRECCIONAMOS AL MURO PRINCIPAL
        return redirect()->route('post.index', auth()->user()->username);
    }

    //MÉTODO QUE MUESTRA LA VISTA PARA VER UN POST
    public function show(User $user, Post $post){
        //SE RETORNA LA VISTA CON EL POST (SELECCIONADO) COMO VARIABLE
        return view('posts.show', [
            'post' => $post,
            'user' => $user
        ]);
    }
}
