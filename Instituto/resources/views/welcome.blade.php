<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="autor/Jordan-Vera" content="Página Web parecido al instituto">
        <title>Instituo - ISFT38</title>
        <link rel="shorcut icon" href="{{asset('images/logo.png')}}">

        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
        {{-- JQuery, libreria de javascript --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        {{-- Framework tailwindcss --}}
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        
        {{-- Los estilos css --}}
        <style type="text/css" media="screen">
           main section h1{
              font-size: 2em;  
           }
            main section article div img{
              border: solid 10px #000;
              width: 500px;
              height: 200px;
            }
            main section article div  #iconos{
              width: 30px;
              height: 30px;
            }
            main section article div  #iconos:hover{
              width: 40px;
              height: 40px;
            }
            main section article h4{
              font-weight: bold;
              font-size: 1.5em;
              font-family: arial;
            }
            .card-body{
              background-color: lightblue;
            }
        </style>
        <script type="text/javascript">
          $(document).ready(function(){
            // Para todos los card-body en general
           $(".card-body").mouseenter(function(event){
            $(this).css({
              "background": "#69AABC",
              "font-size": "1.1em",
            });
            $(".card-body").mouseleave(function(event) {
              $(this).css({
                'background': 'lightblue',
                'font-size': '1em'
              });
            });
           });

           // Para la caja que está abajo del h1 p 
           $("#box").mouseenter(function(event){
            $(this).css({
              'background': '#69BC7D',
              'font-weight': 'bold',
              'font-style': 'italic'
            });
            $("#box").mouseleave(function(event) {
              $(this).css({
                'background': 'none',
                'font-weight': 'normal',
                'font-style': 'normal'
              });
            });
           });


           // Para la barra de navegacion
           $("header").mouseenter(function(event){
              $("ul li").css({
                'color': 'yellow',
                'font-size': '1.2em'
              });
              $("li > a").mouseenter(function(event){
                $(this).css({
                  'background': 'red',
                  'border-radius': '20px 1px 20px 1px'
                });
              });
              $("li > a").mouseleave(function(event){
                $(this).css({
                  'background': 'none',
                });
              });
           });
           $("header").mouseleave(function(event) {
             $("ul li").css({
                'color': 'none',
                'font-size': '1em'
             });
           });



          });
        </script>
    </head>
    <body>
        {{-- La cabecera --}}
      <header>
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand text-light" href="{{ url('/') }}">
                    <img src="{{asset('images/logo.png')}}" alt="Logo del instituo" class="inline w-5 h-8">
                    {{ __('Instituto Superior de Formación Técnica N38') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-light hover:text-underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
      </header>
      {{-- Todo el contenido --}}
      <main class="pt-4">
          <section class="container">
              <h1 class="uppercase text-center underline ">{{__('Instituto Superior de formación técnica n°38')}}</h1>
                <article class="px-5 mt-3">
                  <p class="md:text-md">{{__('En este Instituto podrás encontrar y anotarte a las diferentes carreras que ténemos cuya localidad se encuentra en la ciudad de San Nicolás de los Arroyos (provincia de Buenos Aires - Argentina). 
                    Es un instituo bastante moderno y avanzado. Las aulas son cuadradas y rectangulares donde todas ella están iliminadas con abundantes ventanas. Entre otras cosas todas tienen en común una pizarra. percheros, tablones de anuncios, armarios y como no mesas y sillas.')}}</p>
                  <wbr>
                  <p class="md:text-md border-2 border-black rounded-lg px-5 py-2" id="box">{{__('Cuando entres a la facultad te encontrarás con un hall donde se encuentra la secretaría y recepción, las escaleras y pasillos a la derecha e izquierda donde están las aulas. La primer sección y pasillo a la izquierda abrá aulas y estará la dirección y la sala de maestros y a la derecha te encontrarás con otras aulas y un kiosco y una biblioteca.')}}</p>
                </article>

                {{-- Otro articulo --}}
                <article class="px-5 py-3">
                 <div class="row pb-5">
                  <div class="col-md-4">{{-- Sistemas --}}
                    <div class="card" style="width: 23rem;">
                      <img src="{{asset('images/carreras/sistemas.jpg')}}" class="card-img-top" alt="Analis de Sistemas">
                      <div class="card-body">
                        <h3 class="text-green-700 font-weight-bold">{{__('Análisis de Sistemas')}}</h3>
                        <p class="card-text text-md mt-2">{{__('Para saber más sobre la carrera te invito a hacer click en el sigiente icono')}}<span class="ml-3">
                          <img src="{{asset('icons/carreras/sistamasico.ico')}}" alt="Icono Sistemas" class="border-0 d-inline" id="iconos" title="Te llevará a su descripción" data-toggle="modal" data-target="#exampleModal"></span></p>
                          {{-- El mensaje de descripción de esta carrera de Sistemas --}}
                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="exampleModalLabel">{{__('Técnicatura Superior en Análisis de Sistemas')}}</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                  <p class="text-sm">{{__('Es el profesional capacitado para diagnosticar necesidades, diseñar, desarrollar, poner en servicio y mantener productos, servicios o soluciones informáticas acorde a los requerimientos de las organizaciones.')}}</p>
                                  <p class="mt-2 text-sm">{{__('Tendrá la capacidad de diagnosticar el conflicto de una organización, podrá ordenar sus recursos y actividades además deiseñar y desarrollar sistemas informáticos.')}}</p>
                                </div>
                                <div class="modal-footer">
                                  <p class="text-danger text-sm bg-gray-300">{{__('Sede Central San Nicolás')}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">{{-- Enfermería --}}
                    <div class="card" style="width: 23rem;">
                      <img src="{{asset('images/carreras/enfermeria.jpg')}}" class="card-img-top" alt="Enfermería">
                      <div class="card-body">
                        <h3 class="text-green-700 font-weight-bold">{{__('Enfermería')}}</h3>
                        <p class="card-text text-md mt-2">{{__('Para saber más sobre la carrera te invito a hacer click en el siguiente icono')}}<span class="ml-3"><img src="{{asset('icons/carreras/enfermeriaico.ico')}}" alt="Icono Contable" class="border-0 d-inline" id="iconos" title="Te llevará a su descripción" data-toggle="modal" data-target="#exampleModalE"></span></p>
                         {{-- El mensaje de descripción de esta carrera de Enfermería --}}
                          <div class="modal fade" id="exampleModalE" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="exampleModalLabel">{{__('Técnicatura Superior en Enfermería')}}</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                  <p class="text-sm">{{__('Es el profesional con formación científica, técnica y humanística responsable de brindar cuidados de enfermería a las personas y enfermas a lo largo del ciclo vital, que reconoce a la salud como un derecho humano y social a la atención primaria como estratégica. Práctica en los procesos de gestión a fin de mejorar la calidad de la atención de la salud.')}}</p>
                                </div>
                                <div class="modal-footer">
                                  <p class="text-danger text-sm bg-gray-300">{{__('Sede Central San Nicolás')}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">{{-- Administración contable --}}
                    <div class="card" style="width: 23rem;">
                      <img src="{{asset('images/carreras/contable.jpg')}}" class="card-img-top" alt="Administración contable">
                      <div class="card-body">
                        <h3 class="text-green-700 font-weight-bold">{{__('Administración Contable')}}</h3>
                        <p class="card-text text-md mt-2">{{__('Para saber más sobre la carrera te invito a hacer click en el siguiente icono')}}<span class="ml-3"><img src="{{asset('icons/carreras/contableico.ico')}}" data-toggle="modal" data-target="#exampleModalC" alt="Icono Contable" class="border-0 d-inline" id="iconos" title="Te llevará a su descripción"></span></p>
                        {{-- El mensaje de descripción de esta carrera de Contable --}}
                          <div class="modal fade" id="exampleModalC" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="exampleModalLabel">{{__('Técnicatura Superior en Enfermería')}}</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                  <p class="text-sm">{{__('El Técnico Superior en Administración Contable es un profesional que estará capacitado para desarrollar las competencias para: organizar, programar, ejecutar y controlar las operaciones comerciales, financieras y administrativas de la organización; elaborar, controlar y registrar el flujo de información; organizar y planificar los recursos referidos para desarrollar sus actividades interactuando con el entorno y participando en la toma de decisiones relacionadas con sus actividades. Coordinando equipos de trabajo relacionado con su especialidad. Estas competencias serán desarrolladas según las incumbencias y las normas técnicas y legales que rigen su campo profesional.')}}</p>
                                </div>
                                <div class="modal-footer">
                                  <p class="text-danger text-sm bg-gray-300">{{__('Sede Central San Nicolás')}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                 </div>

                 {{-- Otra sección de carreras --}}
                 <div class="row pb-5">
                  <div class="col-md-4">{{--Logística--}}
                    <div class="card" style="width: 23rem;">
                      <img src="{{asset('images/carreras/logistica.jpg')}}" class="card-img-top" alt="Logística">
                      <div class="card-body">
                        <h3 class="text-green-700 font-weight-bold">{{__('Logística')}}</h3>
                        <p class="card-text text-md mt-2">{{__('Para saber más sobre la carrera te invito a hacer click en el siguiente icono')}}<span class="ml-3"><img src="{{asset('icons/carreras/logisticaico.ico')}}" data-toggle="modal" data-target="#exampleModalL" alt="Icono Logistica" class="border-0 d-inline" id="iconos" title="Te llevará a su descripción"></span></p>
                        {{-- El mensaje de descripción de esta carrera de Logística --}}
                          <div class="modal fade" id="exampleModalL" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="exampleModalLabel">{{__('Técnicatura Superior en Logística')}}</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                  <p class="text-sm">{{__('Es el profesional capacitado para gestionar, diseñar, implementar, evaluar y optimizar los procesos que componen la administración del flujo de materiales y servicios desde el proveedor hasta el cliente. Tendrá la capacidad de implementar técnicas que faciliten la toma de decisiones y procedimientos para la gestión en el área, de acuerdo a los marcos conceptuales que sustentan los principios y normas pertinente al campo de la logística.')}}</p>
                                </div>
                                <div class="modal-footer">
                                  <p class="text-danger text-sm bg-gray-300">{{__('Sede Central San Nicolás')}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">{{--Gestión ambiental--}}
                    <div class="card" style="width: 23rem;">
                      <img src="{{asset('images/carreras/gestion-ambiental.jpg')}}" class="card-img-top" alt="Genstión Ambiental">
                      <div class="card-body">
                        <h3 class="text-green-700 font-weight-bold">{{__('Gestión Ambiental')}}</h3>
                        <p class="card-text text-md mt-2">{{__('Para saber más sobre la carrera te invito a hacer click en el siguiente icono')}}<span class="ml-3"><img src="{{asset('icons/carreras/ambientalico.ico')}}" data-toggle="modal" data-target="#exampleModalG" alt="Icono Gestión Ambiental" class="border-0 d-inline" id="iconos" title="Te llevará a su descripción"></span></p>
                        {{-- El mensaje de descripción de esta carrera de Gestión Ambiental --}}
                          <div class="modal fade" id="exampleModalG" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="exampleModalLabel">{{__('Técnicatura Superior en Gestión Ambiental y Salud')}}</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                  <p class="text-sm">{{__('Es el profesional con formación científica, tecnológica y ética, competente para la intervención en los procesos técnicos y específicos del campo de la gestión ambiental. Diseñará y ejecutará planes y programas tendientes a la vigilancia ambiental y sanitaria, en ámbitos urbanos y rurales.')}}</p>
                                  <p class="mt-2">{{__('Tendrá la capacidad de coordinar actividades de protección y promoción de la salud ambiental e implementar estrategias de atención primaria.')}}</p>
                                </div>
                                <div class="modal-footer">
                                  <p class="text-danger text-sm bg-gray-300">{{__('Sede Central San Nicolás')}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">{{-- Recursos humanos --}}
                    <div class="card" style="width: 23rem;">
                      <img src="{{asset('images/carreras/RRHH.jpg')}}" class="card-img-top" alt="Recursos Humanos">
                      <div class="card-body">
                        <h3 class="text-green-700 font-weight-bold">{{__('Administración de Recursos Humanos')}}</h3>
                        <p class="card-text text-md mt-2">{{__('Para saber más sobre la carrera te invito a hacer click en el siguiente icono')}}<span class="ml-3"><img src="{{asset('icons/carreras/rrhhico.ico')}}" alt="Icono Recursos Humanos" data-toggle="modal" data-target="#exampleModalRH" class="border-0 d-inline" id="iconos" title="Te llevará a su descripción"></span></p>
                          {{-- El mensaje de descripción de esta carrera de Recursos Humanos --}}
                          <div class="modal fade" id="exampleModalRH" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="exampleModalLabel">{{__('Técnicatura Superior en Adminstracón de Recursos Humanos')}}</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                  <p class="text-sm">{{__('Es el profesional capacitado para organizar, programar, planificar y ejecutar diversas actividades del sector de Recursos Humanos de las organizaciones en las cuales se inserte. Tendrá la capacidad de organizar, programar, ejecutar y controlar en las áreas de desarrollo de dirección y planeamiento, producción, recursos humanos, financiamiento, contabilización, gestión integral dentro de los distintos tipos de organización.')}}</p>
                                </div>
                                <div class="modal-footer">
                                  <p class="text-danger text-sm bg-gray-300">{{__('Sede Central San Nicolás')}}</p>
                                  <p class="d-inline text-danger text-sm bg-gray-300">{{__('Extensión Ramallo (Villa Ramallo)')}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                 </div>

                 {{-- Otra sección de carreras --}}
                 <div class="row pb-5">
                  <div class="col-md-4">{{--Higiene y seguridad--}}
                    <div class="card" style="width: 23rem;">
                      <img src="{{asset('images/carreras/higieneSeguridad.jpg')}}" class="card-img-top" alt="Higiene y Seguridad">
                      <div class="card-body">
                        <h3 class="text-green-700 font-weight-bold">{{__('Seguridad e Higiene')}}</h3>
                        <p class="card-text text-md mt-2">{{__('Para saber más sobre la carrera te invito a hacer click en el siguiente icono')}}<span class="ml-3"><img src="{{asset('icons/carreras/higieneico.ico')}}" data-toggle="modal" data-target="#exampleModalHS" alt="Icono Seguridad e Higiene" class="border-0 d-inline" id="iconos" title="Te llevará a su descripción"></span></p>
                        {{-- El mensaje de descripción de esta carrera de Seguridad e Higiene --}}
                          <div class="modal fade" id="exampleModalHS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="exampleModalLabel">{{__('Técnicatura Superior en Higiene y Seguridad en el Trabajo')}}</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                  <p class="text-sm">{{__('Es el profesional capacitado para el asesoramiento a reparticiones, empresas y asociaciones profesionales en todo lo concerniente a su actividad. Estará habilitado para controlar el cumplimiento de las normas de seguridad e higiene en el trabajo en el área de su competencia, adoptando las medidas preventivas de acuerdo a cada tipo de industria o actividad. Tendrá la capacidad de elaborar normas manuales de higiene y seguridad en el trabajo, además de realizar tareas de investigación y desarrollo para el mejor desenvolvimiento de su labor.')}}</p>
                                  <p class="mt-2 text-sm">{{__('* Tentativa, sujeta a aprobación en Subsede Conesa.')}}</p>
                                </div>
                                <div class="modal-footer">
                                  <p class="text-danger text-sm bg-gray-300">{{__('Sede Central San Nicolás')}}</p>
                                  <p class="text-danger text-sm bg-gray-300 d-inline">{{__('Subsede Conesa')}}</p>
                                  <p class="d-inline text-danger text-sm bg-gray-300">{{__('Extensión Ramallo (Villa Ramallo)')}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">{{--Mantenimiento industrial--}}
                    <div class="card" style="width: 23rem;">
                      <img src="{{asset('images/carreras/mentenimiento.jpg')}}" class="card-img-top" alt="Enfermería">
                      <div class="card-body">
                        <h3 class="text-green-700 font-weight-bold">{{__('Mantenimiento Industrial')}}</h3>
                        <p class="card-text text-md mt-2">{{__('Para saber más sobre la carrera te invito a hacer click en el siguiente icono')}}<span class="ml-3"><img src="{{asset('icons/carreras/mantenimientoico.ico')}}" data-toggle="modal" data-target="#exampleModalM" alt="Icono Mantenimiento Industrial" class="border-0 d-inline" id="iconos" title="Te llevará a su descripción"></span></p>
                        {{-- El mensaje de descripción de esta carrera de Recursos Humanos --}}
                          <div class="modal fade" id="exampleModalM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="exampleModalLabel">{{__('Técnicatura Superior en Mantenimiento Industrial')}}</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                  <p class="text-sm">{{__('Es el profesional que tendrá como propósito identificar problemas, buscar alternativas y tomar decisiones ante la presencia de fallas. A su vez, estará habilitado para evaluar situaciones y diseñar propuestas de mejora en el mantenimiento. Tendrá la capacidad de la organización del trabajo propio y de los otros a su cargo. Podrá formular y ejecutar planes de mantenimiento preventivo y predictivo óptimos, en función de los mecanismos de deterioros detectados. Tendrá además la habilidad para inspeccionar e identificar el estado de deterioro de un equipo para lograr su restauración, mejorando la confiabilidad y mantenibilidad del mismo.')}}</p>
                                </div>
                                <div class="modal-footer">
                                  <p class="text-danger text-sm bg-gray-300">{{__('Sede Central San Nicolás')}}</p>
                                  <p class="d-inline text-danger text-sm bg-gray-300">{{__('Extensión Ramallo (Villa Ramallo)')}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">{{--Administración general--}}
                    <div class="card" style="width: 23rem;">
                      <img src="{{asset('images/carreras/administracion.jpg')}}" class="card-img-top" alt="Administración general">
                      <div class="card-body">
                        <h3 class="text-green-700 font-weight-bold">{{__('Administración general')}}</h3>
                        <p class="card-text text-md mt-2">{{__('Para saber más sobre la carrera te invito a hacer click en el siguiente icono')}}<span class="ml-3"><img src="{{asset('icons/carreras/generalico.jpg')}}" alt="Icono administración General" data-toggle="modal" data-target="#exampleModalAG" class="border-0 d-inline rounded-lg" id="iconos" title="Te llevará a su descripción"></span></p>
                        {{-- El mensaje de descripción de esta carrera de Recursos Humanos --}}
                          <div class="modal fade" id="exampleModalAG" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="exampleModalLabel">{{__('Técnicatura Superior en Administración General')}}</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                  <p class="text-sm">{{__('Es un profesional que estará capacitado para desarrollar las competencias para: organizar, programar, ejecutar y controlar las operaciones comerciales, financierras y adminstrativas de la organización, elaborar, controlar y registrar el flujo de información.')}}</p>
                                </div>
                                <div class="modal-footer">
                                  <p class="d-inline text-danger text-sm bg-gray-300">{{__('Extensión Ramallo (Villa Ramallo)')}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                 </div>
                </article>
          </section>
      </main>
      {{-- El pié de página --}}
      <footer class="bg-dark container-fluid">
        <div class="row">
          <div class="col-md-3 col-xs-12">
            <ul align="center">
              <li><strong class="text-red-500">{{__('Sede Central San Nicolás')}}</strong></li>
              <li class="text-gray-500 text-sm">{{__('Av. Central 1825')}}</li>
              <li class="text-gray-500 text-sm">{{__('0336-4461110 | 0336-4462857')}}</li>
            </ul>
          </div>
          <div class="col-md-3 col-xs-12">
            <ul align="center">
              <li><strong class="text-red-500">{{__('Extensión Ramallo (Villa Ramallo)')}}</strong></li>
              <li class="text-gray-500 text-sm">{{__('Dr. Bonfiglio 561')}}</li>
              <li class="text-gray-500 text-sm">{{__('03407-486443 | 0407-489152')}}</li>
            </ul>
          </div>
          <div class="col-md-3 col-xs-12">
            <ul align="center">
              <li><strong class="text-red-500">{{__('Subsede Conesa')}}</strong></li>
              <li class="text-gray-500 text-sm">{{__('Belgrano 480')}}</li>
              <li class="text-gray-500 text-sm">{{__('0336-4492188')}}</li>
            </ul>
          </div>
          <div class="col-md-3 col-xs-12">
            <ul align="center">
              <li class="d-flex justify-content-center">
                <a href="#"><img src="{{asset('icons/twitterico.ico')}}" alt="Twitter" title="Contactanos por twitter" width="30" height="30" class="mr-2"></a>
                <span class="text-light">|</span>
                <a href="#"><img src="{{asset('icons/msj.ico')}}" alt="Mensaje" title="Envíanos un mensaje" width="30" height="30" class="ml-2"></a>
              </li>
              <li class="text-gray-500 text-sm">{{__('Analisis de Sistemas - 3º año - 2020')}}</li>
            </ul>
          </div>
        </div>
      </footer>

      <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
    </body>
</html>
