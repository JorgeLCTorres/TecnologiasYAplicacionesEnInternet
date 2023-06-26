<!-- ESTA PLANTILLA ES PARA LA ACTIVIDAD DE DEVSTAGRAM -->

<!--ESTE ARCHIVO FUNCIONA COMO UNA PLANTILLA PARA REUTILIZAR LA MISMA BASE EN DIFERENTES ARCHIVOS-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--CREAR UN CONTENEDOR DINÁMICO PARA EL TITULO DE LA PÁGINA-->
        <title>@yield('titulo')</title>  <!--EL CONTENEDOR SE LLAMA titulo Y ESTE RECIBIRA PARAMETROS-->

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!--Font Awesom-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        
        <!--DROPZONE-->
        @stack('styles')
        
        <!--Styles-->
        @yield('style')
        @yield('style2')
        @yield('stylesheet')
        <!--ICONOS-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="antialiased">

        {{-- header --}}
        <header class="p-1 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">

                <!-- APLICAR Helper DE AUTENTICACIÓN auth PARA VERIFICAR SI ESTA AUTENTICADO -->
                @auth
                    <a href="{{route('post.index', auth()->user()->username)}}" class="text gap-1 item-center">Devstagram</a>

                    <!-- VINCULO PARA BOTÓN DE PUBLICAR POST -->
                    <a class="flex items-center gap-2 bg-white border p-2 text-gray-600 rounded text-sm uppercase font-font-bold cursor-pointer" href="{{route('post.create')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                        </svg>                          

                        Crear
                    </a>

                    <nav class="flex gap-2 items-center">
                        Hola:
                            <span class="font-normal">
                                {{auth()->user()->username}}
                            </span>
                        <!-- AGREGAR SEGURIDAD AL LOGOUT -->
                        <form method="POST" action="{{route('logout')}}">
                            @csrf
                            <button type="submit" class="font-bold uppercase text-gray-600 text-sm">
                                Cerrar sesión
                            </button>
                        </form>
                    </nav>  
                @endauth

                <!-- DETERMINAR A USUARIO NO AUTENTICADO -->
                @guest
                    <a href="#" class="text gap-1 item-center">Devstagram</a>
                    <nav class="flex gap-2 items-center">
                        <a href="{{route('login')}}" class="font bold uppercase text-gray-600 text-sm">Login</a>
                        <a href="{{route('register')}}" class="font bold uppercase text-gray-600 text-sm">Crear cuenta</a>
                    </nav>
                @endguest
            </div>
        </header>
        {{-- / header --}}

        <main class="container mx-auto mt-10">
            <!--CREAR UN CONTENEDOR DINÁMICO PARA EL TITULO (ENCABEZADO) DE LA PÁGINA-->
            <h2 class="font-black text-center text-3xl">@yield('main')</h2>  <!--EL CONTENEDOR SE LLAMA main Y ESTE RECIBIRA PARAMETROS-->
            <!--CREAR UN CONTENEDOR DINÁMICO PARA TODO EL CONTENIDO DE LA PÁGINA-->
            @yield('contenido') <!--EL CONTENEDOR SE LLAMA contenido Y ESTE RECIBIRA PARAMETROS-->
        </main>

        <footer class="text-center p-5 text-gray-500 font-bold uppercase">
            Devstagram UPV - Todos los derechos reservados {{now()->year}}
        </footer>
    </body>
</html>