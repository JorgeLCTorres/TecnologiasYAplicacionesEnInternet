<!--CREAR UNA DIRECTIVA PARA INCLUIR LA NAVEGACIÓN-->
@extends('layouts.app') <!--Esto es como un include-->

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR titulo (yield)-->
@section('titulo')
    {{$post->titulo}}
@endsection

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR style (yield)-->
@section('style')
    @vite('resources/css/app.css')
@endsection

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR main (yield)-->
@section('main')
    {{$post->titulo}}
@endsection

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR contenido (yield)-->
@section('contenido')
    <div class="container mx-auto md:flex mt-2">
        <div class="md:w-1/2">
            <img src="{{asset('uploads') . '/' . $post->imagen}}" alt="Imagen del post {{$post->titulo}}">

           <!-- ESTO SERA PARA PONER LO DE LOS LIKES MÁS ADELANTEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE 
            <div class="p-3">
                <p>0 Likes</p>
            </div>
           -->

            <div>
                <p class="mt-2">
                    {{$post->descripcion}}
                </p>
                <p class="font-bold mt-4"> {{$user->username}} </p>
                <p class="text-sm text-gray-500">
                    {{$post->created_at->diffForHumans()}}
                </p>
            </div>
        </div>

        <div class="md:w-1/2 p-1">
            <div class="shadow bg-white p-5 mb-5">
                <!-- SE COMPRUEBA QUE EL USUARIO ESTE AUTENTICADO PARA MOSTRARLE EL FORMULARIO DE COMENTAR PUBLICACIÓN -->
                @auth
                <p class="text-xl font-bold text-center mb-4">Agrega un comentario</p>

                @if (session('mensaje'))
                    <div class="bg-green-500 p-2 rounded-lg mb-6 text-white text-center uppercase font-bold">
                        {{session('mensaje')}}
                    </div>                    
                @endif

                <!-- FORMULARIO DE COMENTAR PUBLICACIÓN -->
                <form action="{{route('comentarios.store', ['user' => $user, 'post' => $post])}}" method="POST">
                    @csrf
                    <div class="mb-5">
                        <label for="comentario" class="mb-2 block uppercase text-gray-500 font-bold">
                            Añade un comentario
                        </label>
                        <textarea 
                            id="comentario" 
                            name="comentario" 
                            placeholder="Agrega un comentario" 
                            class="border p-3 w-full rounded-lg
                            @error('comentario') border-red-500 @enderror"
                        ></textarea>
                        <!-- DIRECTIVA PARA MOSTRAR MENSAJE DE ERROR -->
                        @error('comentario')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                                {{$message}}
                            </p>
                        @enderror
                    </div>

                    <input 
                    type="submit" 
                    value="Comentar"
                    class="bg-sky-600 hover:bg-sky-800 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
                </form>
                @endauth

                <!-- LISTA DE COMENTARIOS -->
                <div class="bg-white shadow mb-5 max-h-96 overflow-y-scroll mt-10">
                    @if ($post->comentarios->count())
                        @foreach ($post->comentarios as $comentario)
                            <div class="p-5 border-gray-300 border-b">
                                <!-- SE MUESTRA EL USERNAME DE LA PERSONA QUE REALIZÓ EL COMENTARIO -->
                                <a href="{{route('post.index', $comentario->user)}}" class="font-bold">
                                    {{$comentario->user->username}}
                                </a>
                                <!-- SE MUESTRA EL COMENTARIO -->
                                <p> {{$comentario->comentario}} </p>
                                <!-- SE MUESTRA LA FECHA DE PUBLICACIÓN -->
                                <p class="text-sm text-gray-500"> {{$comentario->created_at->diffForHumans()}} </p>
                                <!-- SE MUESTRA OPCIÓN DE ELIMINAR -->
                                @auth <!-- PRIMER FILTRO: SE COMPRUEBA QUE SE ESTE AUTENTICADO PARA PODER VER LA OPCIÓN. SI NO SE LLEGARA A COMPROBAR QUE EL USUARIO ESTE AUTENTICADO, LA SIGUIENTE CONDICIÓN FALLARIA -->
                                    @if ($comentario->user->id === auth()->user()->id) <!-- SEGUNDO FILTRO: SE COMPRUEBA QUE EL USUARIO QUE HIZO EL COMENTARIO SEA EL MISMO QUE ESTA AUTENTICADO -->
                                        <form method="POST" action="{{route('comentarios.destroy', $comentario)}}">
                                            @method('DELETE') <!-- MÉTODO SPOOFING: PERMITE AGREGAR OTRO TIPO DE MÉTODOS Y NO SOLO GET/POST -->
                                            @csrf
                                            <input type="submit" value="Eliminar" class="text-sm text-gray-500">
                                        </form>
                                    @endif
                                @endauth
                            </div>
                        @endforeach
                    @else
                        <!-- SI NO EXISTEN COMENTARIOS EN LA PUBLICACIÓN ENTONCES SE MUESTRA EL SIGUIENTE MENSAJE -->
                        <p class="p-10 text-center">No hay comentarios</p>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
@endsection