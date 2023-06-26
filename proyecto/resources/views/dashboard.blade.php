<!--CREAR UNA DIRECTIVA PARA INCLUIR LA NAVEGACIÓN-->
@extends('layouts.app') <!--Esto es como un include-->

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR titulo (yield)-->
@section('titulo')
    Dashboard
@endsection

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR style (yield)-->
@section('style')
    @vite('resources/css/app.css')
@endsection

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR main (yield)-->
@section('main')
    Perfil: {{$user->username}}
@endsection

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR contenido (yield)-->
@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="md:w8/12 lg:w-6/12 px-5">
                <img src="{{asset('img/usuario.svg')}}" alt="Imagen de usuario">
            </div>
            <div class="md:w8/12 lg:w-6/12 px-5 flex flex-col items-center md:justify-center md:items-start py-10 md:py-10">

                <p class="text-gray-700 text-2x1">{{$user->username}}</p>

                <!-- AGREGANDO ESTRUCTURA BASE PARA DASHBOARD DE PUBLICACIÓN -->
                <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                    0
                    <span class="font-normal">Seguidores</span>
                </p>

                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal">Siguiendo</span>
                </p>

                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal">Post</span>
                </p>
            </div>
        </div>
    </div>
    <!-- MOSTRAR LOS POST DE PUBLICACIÓN, OBTENIDOS DESDE EL PostController MÉTODO index -->
    <section class="container mx-auto mt-10">
        <h2 class="txt-4x1 text-center font-black my-10">Publicaciones</h2>
        @if ($posts->count())
            <!-- LISTAMOS PUBLICACIONES -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($posts as $post)
                    <div>
                        <!-- SE CREA UN ARREGLO EN LA RUTA PARA PASAR LOS PARAMETROS NECESARIOS -->
                        <a href="{{route('posts.show', ['user' => $user, 'post' => $post])}}">
                            <img src="{{asset('uploads') . '/' . $post->imagen}}" alt="Imagen del Post" {{$post->titulo}}>
                        </a>
                    </div>                
                @endforeach
            </div>

            <div class="my-10">
                <!-- SE COLOCAN LOS BOTONES DE NAVEGACIÓN PARA LA PAGINACIÓN DE LAS PUBLICACIONES -->
                {{ $posts->links() }}
            </div>
        @else
            <p class="text-gray-600 uppercase text-sm text-center font-bold">
                No hay publicaciones
            </p>
        @endif
    </section>
@endsection