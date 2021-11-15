<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="shorcut icon" href="{{asset('images/logo.png')}}">

    <!-- CSS libreria-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    {{-- JQuery, libreria de javascript --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    {{-- Framework tailwindcss --}}
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
{{-- Estilos cass --}}
<style type="text/css" media="screen">
    #navegacion li{
        color: #fff;
        border-radius: 3px 3px 3px 3px; 
        font-family: vagrant sans-serif;
    }
    #navegacion .fondo:hover{
        background-color: red;
    }
</style>
<body>
{{-- Cabecera de la página --}}
<header>
    <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand text-light" href="{{ route('home') }}">
                <img src="{{asset('images/logo.png')}}" alt="Logo del instituto" class="w-5 h-8 d-inline">
                {{__('Home')}}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Los link de navegación que está en la barra -->
                <ul class="navbar-nav mr-auto" id="navegacion">
                    <li class="nav-item mr-2 dropdown fondo">
                        <a href="{{route('ViewRace')}}" class="nav-link text-light">{{__('Carreras')}}</a>
                    </li>
                    <li class="nav-item mr-2 fondo">
                        <a href="{{route('ViewSede')}}" class="nav-link text-light">{{__('Sedes')}}</a>
                    </li>
                    <li class="nav-item dropdown fondo">
                        <a href="#" class="nav-link dropdown-toggle text-light" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopud="true" aria-expanded="false" v-pre>{{__('Otros+')}}</a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                            <a href="{{route('Objectives')}}" class="dropdown-item">{{__('Objetivos')}}</a>
                            <a href="{{route('History')}}" class="dropdown-item">{{__('Historia')}}</a>
                        </div>
                    </li>
                    <li class="nav-item fondo">
                        <a href="{{route('ViewProfesor')}}" class="nav-link text-light">{{__('Profesores')}}</a>
                    </li>
                    <li class="nav-item fondo">
                        <a href="{{route('ViewEnd')}}" class="nav-link text-light">{{__('Finales')}}</a>
                    </li>
                    <li class="nav-item dropdown fondo">
                        <a href="#" class="nav-link dropdown-toggle text-light" id="navbarDropdaown" role="button" data-toggle="dropdown" aria-haspopud="true" aria-expanded="false" v-pre>{{__('Formulario')}}</a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                            <a href="{{route('FormRace')}}" class="dropdown-item">{{__('Form Carreras')}}</a>
                            <a href="{{route('FormSede')}}" class="dropdown-item">{{__('Form Sedes')}}</a>
                            <a href="{{route('FormProfesor')}}" class="dropdown-item">{{__('Form Profesores')}}</a>
                            <a href="{{route('FormSubject')}}" class="dropdown-item">{{__('Form Materias')}}</a>
                            <a href="{{route('FormEnd')}}" class="dropdown-item">{{__('Form Finales')}}</a>
                        </div>
                    </li>
                </ul>

                <!-- La navegación que está a la derecha -->
                <ul class="navbar-nav ml-auto">
                    <!-- Digo que si está autenticado que me muestre esto -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} {{Auth::user()->lastname}}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                {{-- Esta es un dropdown de despiliegue para que el usuario haga opciones --}}
                                <a href="{{route('profile')}}" class="dropdown-item" >
                                    <img src="{{asset('images/avatarUser.png')}}" alt="Avatar" width="20" height="20" class="inline mr-2">{{__('Perfil')}}</a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <img src="{{asset('images/logout.png')}}" alt="Salir" width="20" height="20" class="inline mr-2">
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
{{-- Contenido de la página --}}
<main class="py-4 container">
    <section>
        @yield('content')
    </section>
</main>
{{-- El pié de página --}}
<footer class="bg-dark container-fluid">
    @yield('footer')
</footer>
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>