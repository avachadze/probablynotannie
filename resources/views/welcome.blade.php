<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Annie</title>

    <!-- Fonts -->
    <script src="https://unpkg.com/css-doodle@0.25.1/css-doodle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="logo/flor.png">

    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name', 'Annie') }}</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/estilos/jeje.css')}}">
    </head>
    <!-- Styles -->


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">

    <!--
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif
        <div class="col-4">dd</div>
    </div>
     -->


    <div class="cajaLogo d-flex justify-content-center align-items-center flex-column ">

        <img class="logoLanding" src="logo/frente/logo_frente_trazo_blanco.png" alt="Annie">

        <div class="cajita">
            <a href="annie" class="personal text-white d-flex justify-content-center align-items-center ">


                <h1 class="tituloPersonal">{{__('messages.personal')}}</h1>

            </a>
            <a href="cv" class="professional text-white d-flex justify-content-center align-items-center ">



                <h1 class="tituloProfesional">{{__('messages.professional')}}</h1>


            </a>
        </div>
    </div>

</body>

</html>