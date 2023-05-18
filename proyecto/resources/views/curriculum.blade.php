<!--CREAR UNA DIRECTIVA PARA INCLUIR LA NAVEGACIÓN-->
@extends('layouts.app2') <!--Esto es como un include-->

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR titulo (yield)-->
@section('titulo')
    Curriculum
@endsection

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR style (yield)-->
@section('style')
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}">
@endsection

<!--CREAR EL CONTENIDO (PARAMETROS) QUE SE ENVÍA AL CONTENEDOR contenido (yield)-->
@section('contenido')
    <header id="inicio">
        <!--Navbar-->
        <nav id="nav">
            <div class="nav-center">
                <!--nav header-->
                <div class="nav-header">
                    <!-- LOGO -->
                    <img src="{!! asset('img/logo.png') !!}" class="logo" alt="logo">
                    <button class="nav-toggle">
                        <i class="fas-fa-bars"></i>
                    </button>
                </div>
                <!-- LINKS -->
                <div class="links-container">
                    <ul class="links">
                        <li>
                            <a href="/">Página Principal</a>
                        </li>
                        <li>
                            <a href="/alumnos">Alumnos</a>
                        </li>
                        <li>
                            <a href="/curriculum">Curriculum</a>
                        </li>
                        <li>
                            <a href="/curriculum2">Curriculum 2</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Banner-->
        <div class="banner">
            <div class="container">
                <h1>Jorge Luis Charles Torres</h1>
                <p>Estudiante de Ingeniería en Tecnologías de la Información</p>
            </div>
        </div>
    </header>
    <!-- SECCIÓN 2 -->
    <section id="acerca" class="section">
        <div class="title">
            <!--CREAR UN CONTENEDOR DINÁMICO PARA EL TÍTULO DE LA SEGUNDA SECCIÓN-->
            <h2>ACERCA DE MI</h2> <!--EL CONTENEDOR SE LLAMA seccion2 Y ESTE RECIBIRA PARAMETROS-->
        </div>
        <div class="fila">
            <!--FOTO-->
            <div class="columna">
                <!--CREAR UN CONTENEDOR DINÁMICO PARA LA IMAGEN DE LA SEGUNDA SECCIÓN-->
                <img class="imgAcercaDeMi" src="{!! asset('img/acercaDeMi.jpeg') !!}"> <!--EL CONTENEDOR SE LLAMA seccion2_img Y ESTE RECIBIRA PARAMETROS-->
            </div>
            <!--INFORMACIÓN-->
            <div class="columna">
                <!--CREAR UN CONTENEDOR DINÁMICO PARA LA INFORMACIÓN DE LA SEGUNDA SECCIÓN-->
                Hola soy Jorge Luis Charles Torres, estudiante de la Universidad Politécnica de Victoria, en la cual actualmente me encuentro cursando el cuatrimestre 7 la carrera de Ingeniería en Tecnologías de la Información. <br>
                <br> Soy una persona totalmente apasionada y entregada en todo lo que hace con el fin de obtener siempre los mejores resultados y además adquirir conocimientos nuevos, así como también práctica para mejorar cada vez más. <br>
                <br> Cuento con diversas habilidades útiles tanto en el ámbito estudiantil como en el laboral, por ejemplo trabajar bajo presión, liderar algún equipo de trabajo, organizar los tiempos de las actividades, motivar a los demás y a mí mismo, puntualidad, entre otras.
            </div>
        </div>
        <div class="fila espacioEntreFila">
            <!--DATOS PERSONALES-->
            <div class="columna">
                <!--CREAR UN CONTENEDOR DINÁMICO PARA LOS DATOS DE LA SEGUNDA SECCIÓN-->
                <h3>Datos personales</h3> <!--EL CONTENEDOR SE LLAMA seccion2_datos Y ESTE RECIBIRA PARAMETROS-->
                <ul>
                    <li>
                        <!--CREAR UN CONTENEDOR DINÁMICO PARA LA FECHA DE NACIMIENTO DE LA SEGUNDA SECCIÓN-->
                        <strong>Fecha de nacimiento:</strong> 18 de Agosto de 2002
                    </li>
                    <li>
                        <!--CREAR UN CONTENEDOR DINÁMICO PARA EL LUGAR DE NACIMIENTO DE LA SEGUNDA SECCIÓN-->
                        <strong>Lugar de nacimiento:</strong> Ciudad Victoria, Tamaulipas
                    </li>
                    <li>
                        <!--CREAR UN CONTENEDOR DINÁMICO PARA EL GENERO DE LA SEGUNDA SECCIÓN-->
                        <strong>Género:</strong> Masculino
                    </li>
                    <li>
                        <!--CREAR UN CONTENEDOR DINÁMICO PARA EL ESTADO CIVIL DE LA SEGUNDA SECCIÓN-->
                        <strong>Estado civil:</strong> Soltero
                    </li>
                </ul>
            </div>
            <!--INTERESES-->
            <div class="columna">
                <!--CREAR UN CONTENEDOR DINÁMICO PARA LOS INTERESES DE LA SEGUNDA SECCIÓN-->
                <h3>Intereses</h3> <!--EL CONTENEDOR SE LLAMA seccion2_intereses Y ESTE RECIBIRA PARAMETROS-->
                <div class="contenedor-intereses">
                    <!--CREAR UN CONTENEDOR DINÁMICO PARA LOS INTERESES DE LA SEGUNDA SECCIÓN-->
                    <div class="interes">
                        <i class="fa-solid fa-network-wired iconoInteres fa-fade"></i>
                        <h4 class="nombreInteres">REDES</h4>
                    </div>
                
                    <!--CREAR UN CONTENEDOR DINÁMICO PARA LOS INTERESES DE LA SEGUNDA SECCIÓN-->
                    <div class="interes">
                        <i class="fa-solid fa-database iconoInteres fa-fade"></i>
                        <h4 class="nombreInteres">DB</h4>
                    </div>

                    <!--CREAR UN CONTENEDOR DINÁMICO PARA LOS INTERESES DE LA SEGUNDA SECCIÓN-->
                    <div class="interes">
                        <i class="fa-solid fa-film iconoInteres fa-fade"></i>
                        <h4 class="nombreInteres">PELÍCULAS</h4>
                    </div>

                    <!--CREAR UN CONTENEDOR DINÁMICO PARA LOS INTERESES DE LA SEGUNDA SECCIÓN-->
                    <div class="interes">
                        <i class="fa-solid fa-headphones iconoInteres fa-fade"></i>
                        <h4 class="nombreInteres">MÚSICA</h4>
                    </div>

                    <!--CREAR UN CONTENEDOR DINÁMICO PARA LOS INTERESES DE LA SEGUNDA SECCIÓN-->
                    <div class="interes">
                        <i class="fa-solid fa-guitar iconoInteres fa-fade"></i>
                        <h4 class="nombreInteres">GUITARRA</h4>
                    </div>

                    <!--CREAR UN CONTENEDOR DINÁMICO PARA LOS INTERESES DE LA SEGUNDA SECCIÓN-->
                    <div class="interes">
                        <i class="fa-solid fa-futbol iconoInteres fa-fade"></i>
                        <h4 class="nombreInteres">FÚTBOL</h4>
                    </div>

                    <!--CREAR UN CONTENEDOR DINÁMICO PARA LOS INTERESES DE LA SEGUNDA SECCIÓN-->
                    <div class="interes">
                        <i class="fa-solid fa-person-running iconoInteres fa-fade"></i>
                        <h4 class="nombreInteres">CORRER</h4>
                    </div>

                    <!--CREAR UN CONTENEDOR DINÁMICO PARA LOS INTERESES DE LA SEGUNDA SECCIÓN-->
                    <div class="interes">
                        <i class="fa-solid fa-gamepad iconoInteres fa-fade"></i>
                        <h4 class="nombreInteres">JUEGOS</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 3 -->
    <section id="curriculum" class="section">
        <div class="title">
            <!--CREAR UN CONTENEDOR DINÁMICO PARA EL TÍTULO DE LA TERCERA SECCIÓN-->
            <h2>CURRICULUM</h2> <!--EL CONTENEDOR SE LLAMA seccion3 Y ESTE RECIBIRA PARAMETROS-->
        </div>
        <div class="fila">
            <!-- CONTACTO -->
            <div class="columnaDe3">
                <!--CREAR UN CONTENEDOR DINÁMICO PARA EL TELEFONO DE LA TERCERA SECCIÓN-->
                <i class="fa-solid fa-phone fa-beat" style="color: #102a42;"></i>  8341100900
            </div>
            <div class="columnaDe3">
                <!--CREAR UN CONTENEDOR DINÁMICO PARA EL CORREO DE LA TERCERA SECCIÓN-->
                <i class="fa-solid fa-envelope fa-beat" style="color: #102a42;"></i>   jorgeluischarlestorres@gmail.com
            </div>
            <div class="columnaDe3">
                <!--CREAR UN CONTENEDOR DINÁMICO PARA EL CELULAR DE LA TERCERA SECCIÓN-->
                <i class="fa-solid fa-mobile-button fa-beat" style="color: #102a42;"></i>  8341381302
            </div>
        </div>
        <div class="fila espacioEntreFila">
            <!-- PRESENTACIÓN -->
            <div class="columna">
                <!--CREAR UN CONTENEDOR DINÁMICO PARA EL TITULO DE PRESENTACIÓN DE LA TERCERA SECCIÓN-->
                <h3>Presentación</h3> <!--EL CONTENEDOR SE LLAMA seccion3_presentacion Y ESTE RECIBIRA PARAMETROS-->
            </div>
            <div class="columna">
                <!--CREAR UN CONTENEDOR DINÁMICO PARA LA PRESENTACIÓN DE LA TERCERA SECCIÓN-->
                Estudiante universitario de Ingenieria en Tecnologias de la Información, responsable, autocritico, autoexigente, persistente, entre otras competencias. Además, mentalidad de trabajar y aprender cada dia mas en la práctica, con la finalidad de ayudar en la misión y objetivo de la empresa.
            </div>
        </div>
        <div class="fila espacioEntreFila">
            <!-- EDUCACIÓN -->
            <div class="columna">
                <!--CREAR UN CONTENEDOR DINÁMICO PARA EL TITULO DE EDUCACIÓN DE LA TERCERA SECCIÓN-->
                <h3>Educación Formal</h3> <!--EL CONTENEDOR SE LLAMA seccion3_educacion Y ESTE RECIBIRA PARAMETROS-->
            </div>
            <div class="columna">
                <!--CREAR UN CONTENEDOR DINÁMICO PARA LA EDUCACIÓN DE LA TERCERA SECCIÓN-->
                <strong> UNIVERSIDAD POLITÉCNICA DE VICTORIA (2020 - PRESENTE) </strong> <br>
                <br> - Ingeniería en Tecnologías de la Información <br>
                <br> - Actualmente cursando octavo cuatrimestre <br>
                <br> <strong> CENTRO DE BACHILLERATO TECNOLÓGICO INDUSTRIAL Y DE SERVICIOS 119 (2017 - 2020) </strong> <br>
                <br> - Técnico en programación <br>
                <br> - Egresado con promedio 9.5 <br>
                <br> <strong> ESCUELA SECUNDARIA TÉCNICA N°1 ÁLVARO OBREGÓN (2014 - 2017) </strong> <br>
                <br> - Especialidad de Informática <br>
                <br> - Egresado con promedio 9.4
            </div>
        </div>
        <div class="fila espacioEntreFila">
            <!-- CERTIFICADOS -->
            <div class="columna">
                <!--CREAR UN CONTENEDOR DINÁMICO PARA EL TITULO DE CERTIFICADOS DE LA TERCERA SECCIÓN-->
                <h3>Certificados</h3> <!--EL CONTENEDOR SE LLAMA seccion3_certificados Y ESTE RECIBIRA PARAMETROS-->
            </div>
            <div class="columna">
                <!--CREAR UN CONTENEDOR DINÁMICO PARA LAS CERTIFICACIONES DE LA TERCERA SECCIÓN-->
                <strong> CISCO NETWORKING ACADEMY </strong> <br>
                <br> - CCNA: Interconexion de redes  <br>
                <br> - CCNA: Introducción a las redes <br>
                <br> - Introducción a IoT <br>
                <br> <strong> CAPACITATE PARA EL EMPLEO </strong> <br>
                <br> - Técnico en reparación de laptops <br>
                <br> - Técnico en instalación y reparación de equipo de cómputo
            </div>
        </div>
        <div class="fila espacioEntreFila">
            <!-- EXPERIENCIA -->
            <div class="columna">
                <!--CREAR UN CONTENEDOR DINÁMICO PARA EL TITULO DE EXPERIENCIA DE LA TERCERA SECCIÓN-->
                <h3>Experiencia Laboral</h3> <!--EL CONTENEDOR SE LLAMA seccion3_experiencia Y ESTE RECIBIRA PARAMETROS-->
            </div>
            <div class="columna">
                <!--CREAR UN CONTENEDOR DINÁMICO PARA LA EXPERIENCIA DE LA TERCERA SECCIÓN-->
                <strong> UNIVERSIDAD POLITÉCNICA DE VICTORIA </strong> <br>
                <br> - Estancias universitarias  <br>
                <br> - Desarrollo de aplicación móvil <br>
                <br> <strong> INSTITUTO NACIONAL DE ESTADÍSTICA Y GEOGRAFÍA </strong> <br>
                <br> - Departamento de Gestión de Tecnologías de Información y Comunicaciones
            </div>
        </div>
    </section>
    
    <!--Footer-->
    <footer class="sectionFooter">
        <p>
            copyright &copy; UPV - Jorge Luis Charles Torres
            <span id="date"></span>, all rigths reserved
        </p>
    </footer>
@endsection