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
        <!--Styles-->
        @yield('style')
        @yield('stylesheet')
        <!--ICONOS-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="antialiased">

        {{-- header --}}
        <header class="p-1 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text gap-1 item-center">Devstagram</h1>

                <!-- APLICAR Helper DE AUTENTICACIÓN auth PARA VERIFICAR SI ESTA AUTENTICADO -->
                @auth
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
                    <nav class="flex gap-2 items-center">
                        <a href="#" class="font bold uppercase text-gray-600 text-sm">Login</a>
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