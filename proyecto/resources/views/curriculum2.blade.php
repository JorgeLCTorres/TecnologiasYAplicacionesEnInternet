<!--CREAR UNA DIRECTIVA PARA INCLUIR LA NAVEGACIÓN-->
@extends('layouts.app2') <!--Esto es como un include-->

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR titulo (yield)-->
@section('titulo')
    Curriculum 2
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
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-14" src="{!! asset('img/logo.png') !!}" alt="Your Company">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- LINKS -->
                                <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Página Principal</a>
                                <a href="/alumnos" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Alumnos</a>
                                <a href="/curriculum" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Curriculum</a>
                                <a href="/curriculum2" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Curriculum 2</a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <button type="button" class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                <span class="sr-only">View notifications</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                </svg>
                            </button>
  
                            <!-- Profile dropdown -->
                            <div class="relative ml-3">
                                <div>
                                    <button type="button" class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full" src="{!! asset('img/acercaDeMi.jpeg') !!}" alt="">
                                    </button>
                                </div>

                                <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Reports</a>
                </div>
                <div class="border-t border-gray-700 pb-3 pt-4">
                    <div class="flex items-center px-5">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                            <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                        </div>
                        <button type="button" class="ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="sr-only">View notifications</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-3 space-y-1 px-2">
                        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>
                        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
                        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</a>
                    </div>
                </div>
            </div>
        </nav>
  
        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Curriculum</h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <!-- Your content -->
                <div class="bg-white">
                    <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
                        <div>
                            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">ACERCA DE MI</h2>
                            <p class="mt-4 text-gray-500">Hola soy Jorge Luis Charles Torres, estudiante de la Universidad Politécnica de Victoria, en la cual actualmente me encuentro cursando el cuatrimestre 7 la carrera de Ingeniería en Tecnologías de la Información.</p>
                            <p class="mt-4 text-gray-500">Soy una persona totalmente apasionada y entregada en todo lo que hace con el fin de obtener siempre los mejores resultados y además adquirir conocimientos nuevos, así como también práctica para mejorar cada vez más.</p>
                            <p class="mt-4 text-gray-500">Cuento con diversas habilidades útiles tanto en el ámbito estudiantil como en el laboral, por ejemplo trabajar bajo presión, liderar algún equipo de trabajo, organizar los tiempos de las actividades, motivar a los demás y a mí mismo, puntualidad, entre otras.</p>
                            <br>
                            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Datos Personales</h2>
                            <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                                <div class="border-t border-gray-200 pt-4">
                                    <dt class="font-medium text-gray-900">Fecha de nacimiento</dt>
                                    <dd class="mt-2 text-sm text-gray-500">18 de Agosto de 2002</dd>
                                </div>
                                <div class="border-t border-gray-200 pt-4">
                                    <dt class="font-medium text-gray-900">Lugar de nacimiento</dt>
                                    <dd class="mt-2 text-sm text-gray-500">Ciudad Victoria, Tamaulipas</dd>
                                </div>
                                <div class="border-t border-gray-200 pt-4">
                                    <dt class="font-medium text-gray-900">Género</dt>
                                    <dd class="mt-2 text-sm text-gray-500">Masculino</dd>
                                </div>
                                <div class="border-t border-gray-200 pt-4">
                                    <dt class="font-medium text-gray-900">Estado civil</dt>
                                    <dd class="mt-2 text-sm text-gray-500">Soltero</dd>
                                </div>
                                <div class="border-t border-gray-200 pt-4">
                                </div>
                                <div class="border-t border-gray-200 pt-4">
                                </div>
                            </dl>
                        </div>
                        <div class="grid grid-cols-2 grid-rows-1 gap-4 sm:gap-6 lg:gap-8">
                            <img>
                            <img src="{!! asset('img/acercaDeMi.jpeg') !!}" alt="Top down view of walnut card tray with embedded magnets and card groove." class="rounded-lg bg-gray-100">
                        </div>
                    </div>
                </div>

                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">INTERESES</h2>
                <br>
                <div class="grid grid-cols-4 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                    <img src="{!! asset('img/redes.png') !!}" alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="rounded-lg bg-gray-100">
                    <img src="{!! asset('img/db.png') !!}" alt="Top down view of walnut card tray with embedded magnets and card groove." class="rounded-lg bg-gray-100">
                    <img src="{!! asset('img/peliculas.png') !!}" alt="Side of walnut card tray with card groove and recessed card area." class="rounded-lg bg-gray-100">
                    <img src="{!! asset('img/musica.png') !!}" alt="Walnut card tray filled with cards and card angled in dedicated groove." class="rounded-lg bg-gray-100">
                    <img src="{!! asset('img/guitarra.png') !!}" alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="rounded-lg bg-gray-100">
                    <img src="{!! asset('img/futbol.png') !!}" alt="Top down view of walnut card tray with embedded magnets and card groove." class="rounded-lg bg-gray-100">
                    <img src="{!! asset('img/correr.png') !!}" alt="Side of walnut card tray with card groove and recessed card area." class="rounded-lg bg-gray-100">
                    <img src="{!! asset('img/juegos.png') !!}" alt="Walnut card tray filled with cards and card angled in dedicated groove." class="rounded-lg bg-gray-100">
                </div>

                <div>
                    <div class="px-4 sm:px-0">
                        <br> <br> <br> <br>
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">CURRICULUM</h2>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <div>
                                <i class="fa-solid fa-phone fa-beat" style="color: #102a42;"></i>  8341100900 <br>
                            </div>
                            <div>
                                <i class="fa-solid fa-envelope fa-beat" style="color: #102a42;"></i>   jorgeluischarlestorres@gmail.com <br>
                            </div>
                            <div>
                                <i class="fa-solid fa-mobile-button fa-beat" style="color: #102a42;"></i>  8341381302
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 border-t border-gray-100">
                        <dl class="divide-y divide-gray-100">
                            <div class="px-4 py-6 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Presentación</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Estudiante universitario de Ingenieria en Tecnologias de la Información, responsable, autocritico, autoexigente, persistente, entre otras competencias. Además, mentalidad de trabajar y aprender cada dia mas en la práctica, con la finalidad de ayudar en la misión y objetivo de la empresa.</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Educación Formal</dt>
                                <div>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"> UNIVERSIDAD POLITÉCNICA DE VICTORIA (2020 - PRESENTE) </dd> <br>
                                    <br> <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"> - Ingeniería en Tecnologías de la Información </dd> <br>
                                    <br> <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"> - Actualmente cursando octavo cuatrimestre </dd> <br>

                                    <br> <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"> CENTRO DE BACHILLERATO TECNOLÓGICO INDUSTRIAL Y DE SERVICIOS 119 (2017 - 2020) </dd> <br>
                                    <br> <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"> - Técnico en programación </dd> <br>
                                    <br> <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"> - Egresado con promedio 9.5 </dd> <br>

                                    <br> <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"> ESCUELA SECUNDARIA TÉCNICA N°1 ÁLVARO OBREGÓN (2014 - 2017) </dd> <br>
                                    <br> <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"> - Especialidad de Informática </dd> <br>
                                    <br> <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"> - Egresado con promedio 9.4</dd> <br>
                                </div>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Certificados</dt>
                                <div>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"> CISCO NETWORKING ACADEMY </dd> <br>
                                    <br> <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"> - CCNA: Interconexion de redes  </dd> <br>
                                    <br> <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"> - CCNA: Introducción a las redes </dd> <br>
                                    <br> <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"> - Introducción a IoT </dd> <br>

                                    <br> <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"> CAPACITATE PARA EL EMPLEO </dd> <br>
                                    <br> <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"> - Técnico en reparación de laptops </dd> <br>
                                    <br> <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"> - Técnico en instalación y reparación de equipo de cómputo</dd> <br>
                                </div>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Experiencia Laboral</dt>
                                <div>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"> UNIVERSIDAD POLITÉCNICA DE VICTORIA </dd> <br>
                                    <br> <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"> - Estancias universitarias  </dd> <br>
                                    <br> <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"> - Desarrollo de aplicación móvil </dd> <br>

                                    <br> <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"> INSTITUTO NACIONAL DE ESTADÍSTICA Y GEOGRAFÍA </dd> <br>
                                    <br> <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"> - Departamento de Gestión de Tecnologías de Información y Comunicaciones</dd> <br>
                                </div>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </main>
    </div>  
@endsection