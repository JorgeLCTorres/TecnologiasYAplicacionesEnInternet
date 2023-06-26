<!--CREAR UNA DIRECTIVA PARA INCLUIR LA NAVEGACIÓN-->
@extends('layouts.app') <!--Esto es como un include-->

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR titulo (yield)-->
@section('titulo')
    Crear publicación
@endsection

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL STACK styles (stack)-->
<!--DIRECTIVA PARA INTEGRAR LOS ESTILOS DE DROPZONE-->
@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR style (yield)-->
@section('style')
    @vite('resources/css/app.css')
@endsection

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR style2 (yield)-->
<!--DIRECTIVA PARA INTEGRAR LAS FUNCIONALIDADES DE DROPZONE-->
@section('style2')
    @vite('resources/js/app.js')
@endsection

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR main (yield)-->
@section('main')
    Crea una nueva publicación
@endsection

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR contenido (yield)-->
@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form action="{{route('imagenes.store')}}" method="POST" enctype="multipart/form-data" id="dropzone" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
                @csrf
            </form>
        </div>

        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mr-0">
            <form action="{{route('posts.store')}}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">
                        Título
                    </label>
                    <input 
                        id="titulo" 
                        name="titulo" 
                        type="text" 
                        placeholder="Título de la publicación" 
                        class="border p-3 w-full rounded-lg
                        @error('titulo') border-red-500 @enderror"
                        value="{{old('titulo')}}"
                    >
                    <!-- DIRECTIVA PARA MOSTRAR MENSAJE DE ERROR -->
                    @error('titulo')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold">
                        Descripción
                    </label>
                    <textarea 
                        id="descripcion" 
                        name="descripcion" 
                        placeholder="Descripción de la publicación" 
                        class="border p-3 w-full rounded-lg
                        @error('descripcion') border-red-500 @enderror"
                    >{{old('descripcion')}}</textarea>
                    <!-- DIRECTIVA PARA MOSTRAR MENSAJE DE ERROR -->
                    @error('descripcion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <input
                    name="imagen"
                    type="hidden"
                    value="{{old('imagen')}}"
                    >
                    @error('imagen')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <input 
                    type="submit" 
                    value="Crear publicación"
                    class="bg-sky-600 hover:bg-sky-800 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection