<!--CREAR UNA DIRECTIVA PARA INCLUIR LA NAVEGACIÓN-->
@extends('layouts.app') <!--Esto es como un include-->

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR titulo (yield)-->
@section('titulo')
    Login
@endsection

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR style (yield)-->
@section('style')
    @vite('resources/css/app.css')
@endsection

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR main (yield)-->
@section('main')
    Inicia sesión en Devstagram
@endsection

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR contenido (yield)-->
@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            {{-- insertar imagen utilizando assert (acceder a carpeta public) --}}
            <img src="{{asset('img/login.jpg')}}" alt="Imagen login de usuario">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded lg shadow-xl">
            <!-- FORMULARIO DE REGISTROS -->
            <form method="POST" action="{{route('login')}}" novalidate>
                @csrf

                @if (session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                        {{session('mensaje')}}
                    </p>
                @endif

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input 
                        id="email" 
                        name="email" 
                        type="email" 
                        placeholder="Tu email" 
                        class="border p-3 w-full rounded-lg"
                        value="{{old('email')}}"
                    >
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input 
                        id="password" 
                        name="password" 
                        type="password" 
                        placeholder="Tu password" 
                        class="border p-3 w-full rounded-lg">
                </div>

                <!-- CHECK DE MANTENER SESIÓN ABIERTA -->
                <div class="mb-5">
                    <input type="checkbox" name="remember">
                        <label class="text-gray-500 text-sm">Mantener mi sesión abierta</label>
                </div>

                <input 
                    type="submit" 
                    value="Iniciar sesión" 
                    class="bg-sky-600 hover:bg-sky-800 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection