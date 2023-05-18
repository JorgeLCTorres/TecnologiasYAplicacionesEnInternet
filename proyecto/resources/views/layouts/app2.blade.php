<!-- ESTA PLANTILLA ES PARA LA ACTIVIDAD DEL CURRICULUM -->

<!--ESTE ARCHIVO FUNCIONA COMO UNA PLANTILLA PARA REUTILIZAR LA MISMA BASE EN DIFERENTES ARCHIVOS-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titulo')</title>

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
    <body>
        <!--CREAR UN CONTENEDOR DINÁMICO PARA TODO EL CONTENIDO DE LA PÁGINA-->
        @yield('contenido') <!--EL CONTENEDOR SE LLAMA contenido Y ESTE RECIBIRA PARAMETROS-->
    </body>
</html>