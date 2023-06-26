<!--CREAR UNA DIRECTIVA PARA INCLUIR LA NAVEGACIÓN-->
@extends('layouts.app') <!--Esto es como un include-->

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR titulo (yield)-->
@section('titulo')
    Devstagram
@endsection

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR style (yield)-->
@section('style')
    @vite('resources/css/app.css')
@endsection

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR stylesheet (yield)-->
@section('stylesheet')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
@endsection

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR contenido (yield)-->
@section('contenido')
    <!-- BANNER -->
    <div class="relative overflow-hidden bg-white">
      <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
        <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
          <div class="sm:max-w-lg">
            <!-- TITULO (ENCABEZADO) -->
            <h1 class="font text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">D e v s t a g r a m</h1>
            <!-- PARRAFO DE INTRODUCCIÓN -->
            <p class="mt-4 text-xl text-gray-500">¡Bienvenido a la mejor plataforma de fotografía, donde cada imagen cuenta una historia!</p>
          </div>
          <div>
            <div class="mt-10">
              <!-- GRID DE IMAGENES -->
              <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                  <div class="flex items-center space-x-6 lg:space-x-8">
                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                      <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                        <img src="{!! asset('img/Devstagram2.png') !!}" alt="" class="h-full w-full object-cover object-center">
                      </div>
                      <div class="h-64 w-44 overflow-hidden rounded-lg">
                        <img src="{!! asset('img/Devstagram5.png') !!}" alt="" class="h-full w-full object-cover object-center">
                      </div>
                    </div>
                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                      <div class="h-64 w-44 overflow-hidden rounded-lg">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-03.jpg" alt="" class="h-full w-full object-cover object-center">
                      </div>
                      <div class="h-64 w-44 overflow-hidden rounded-lg">
                        <img src="{!! asset('img/Devstagram0.png') !!}" alt="" class="h-full w-full object-cover object-center">
                      </div>
                      <div class="h-64 w-44 overflow-hidden rounded-lg">
                        <img src="{!! asset('img/Devstagram4.png') !!}" alt="" class="h-full w-full object-cover object-center">
                      </div>
                    </div>
                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                      <div class="h-64 w-44 overflow-hidden rounded-lg">
                        <img src="{!! asset('img/Devstagram1.png') !!}" alt="" class="h-full w-full object-cover object-center">
                      </div>
                      <div class="h-64 w-44 overflow-hidden rounded-lg">
                        <img src="{!! asset('img/Devstagram3.png') !!}" alt="" class="h-full w-full object-cover object-center">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- BOTÓN DE LOGIN -->
              <a href="{{route('login')}}" class="inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700">Login</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- ACERCA DE LA PÁGINA -->
    <section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
      <div class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20"></div>
      <div class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center"></div>
      <div class="mx-auto max-w-2xl lg:max-w-4xl">
        <!-- LOGO DE DEVSTAGRAM -->
        <img class="mx-auto h-12" src="{!! asset('img/DevstagramLogo.png') !!}" alt="">
        <figure class="mt-10">
          <blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
            <!-- CITA TEXTUAL -->
            <p>“En esta plataforma encontrarás un mundo lleno de coloridos recuerdos, paisajes asombrosos, retratos únicos y momentos inolvidables capturados por personas apasionadas como tú.”</p>
          </blockquote>
          <figcaption class="mt-10">
            <!-- MI FOTO DE PERFIL -->
            <img class="mx-auto h-10 w-10 rounded-full" src="{!! asset('img/acercaDeMi.jpeg') !!}" alt="">
            <div class="mt-4 flex items-center justify-center space-x-3 text-base">
              <!-- MI NOMBRE -->
              <div class="font-semibold text-gray-900">Jorge Luis Charles Torres</div>
              <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
                <circle cx="1" cy="1" r="1" />
              </svg>
              <div class="text-gray-600">Creador</div>
            </div>
          </figcaption>
        </figure>
      </div>
    </section>
    
    <!-- COMENTARIOS -->
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        <!-- COMENTARIO 1 -->
        <article class="flex max-w-xl flex-col items-start justify-between">
          <div class="flex items-center gap-x-4 text-xs">
            <!-- FECHA DE PUBLICACIÓN -->
            <time datetime="2020-03-16" class="text-gray-500">Lun 11, 2023</time>
          </div>
          <div class="group relative">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
              <a href="#">
                <span class="absolute inset-0"></span>
                <!-- TITULO DEL COMENTARIO -->
                La mejor plataforma
              </a>
            </h3>
            <!-- COMENTARIO -->
            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Es una plataforma unica ya que es diferente a las demás que ya existen actualmente.</p>
          </div>
          <div class="relative mt-8 flex items-center gap-x-4">
            <!-- IMAGEN DE LA PERSONA -->
            <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
            <div class="text-sm leading-6">
              <p class="font-semibold text-gray-900">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  <!-- NOMBRE DE LA PERSONA -->
                  Andre Hamilton
                </a>
              </p>
              <p class="text-gray-600">Usuario</p>
            </div>
          </div>
        </article>
        <!-- COMENTARIO 2 -->
        <article class="flex max-w-xl flex-col items-start justify-between">
          <div class="flex items-center gap-x-4 text-xs">
            <!-- FECHA DE PUBLICACIÓN -->
            <time datetime="2020-03-16" class="text-gray-500">Mie 13, 2023</time>
          </div>
          <div class="group relative">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
              <a href="#">
                <span class="absolute inset-0"></span>
                <!-- TITULO DEL COMENTARIO -->
                Una comunidad increible
              </a>
            </h3>
            <!-- COMENTARIO -->
            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Gracias a esta impresionante plataforma pude integrarme a una bonita comunidad de aficionados a la fotografia, espero encontrar otras que me gusten igual o más.</p>
          </div>
          <div class="relative mt-8 flex items-center gap-x-4">
            <!-- IMAGEN DE LA PERSONA -->
            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
            <div class="text-sm leading-6">
              <p class="font-semibold text-gray-900">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  <!-- NOMBRE DE LA PERSONA -->
                  Alejandra Perales
                </a>
              </p>
              <p class="text-gray-600">Usuario</p>
            </div>
          </div>
        </article>
        <!-- COMENTARIO 3 -->
        <article class="flex max-w-xl flex-col items-start justify-between">
          <div class="flex items-center gap-x-4 text-xs">
            <!-- FECHA DE PUBLICACIÓN -->
            <time datetime="2020-03-16" class="text-gray-500">Vie 15, 2023</time>
          </div>
          <div class="group relative">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
              <a href="#">
                <span class="absolute inset-0"></span>
                <!-- TITULO DEL COMENTARIO -->
                Plataforma simple pero muy completa
              </a>
            </h3>
            <!-- COMENTARIO -->
            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Esta es una plataforma fácil de entender y por ende de utilizar, desde la primera vez que ingrese supe como realizar diferentes acciones.</p>
          </div>
          <div class="relative mt-8 flex items-center gap-x-4">
            <!-- IMAGEN DE LA PERSONA -->
            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
            <div class="text-sm leading-6">
              <p class="font-semibold text-gray-900">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  <!-- NOMBRE DE LA PERSONA -->
                  Alexa Jackson
                </a>
              </p>
              <p class="text-gray-600">Usuario</p>
            </div>
          </div>
        </article>
      </div>
    </div>
@endsection