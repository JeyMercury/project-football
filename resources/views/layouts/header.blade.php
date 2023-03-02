<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project Football</title>

        {{-- Bootstrap core CSS --}}
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> --}}

        {{-- Font Awesome Icons --}}
        <script src="https://kit.fontawesome.com/bb6156e2fe.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>

<body>
    <div class="wrap">
        <header class="head">
            <a href="#" class="logo"></a>

            <nav class="nav">
                <ul class="main-nav">

                    {{-- <li class="main-nav-item active">
                        <a href="/inicio" class="main-nav-link">
                            <i class="icon icon-pen"></i>
                            <span>Inicio</span>
                        </a>
                    </li> --}}

                    <li class="main-nav-item">
                        <a href="/competiciones" class="main-nav-link">
                            <i class="icon icon-th-list"></i>
                            <span>Competiciones</span>
                        </a>
                    </li>

                    <li class="main-nav-item active">
                        <a href="/paises" class="main-nav-link">
                            <i class="icon icon-pen"></i>
                            <span>Países</span>
                        </a>
                    </li>

                    <li class="main-nav-item active">
                        <a href="/equipos" class="main-nav-link">
                            <i class="icon icon-pen"></i>
                            <span>Equipos</span>
                        </a>
                    </li>

                    <li class="main-nav-item active">
                        <a href="/jugadores" class="main-nav-link">
                            <i class="icon icon-pen"></i>
                            <span>Jugadores</span>
                        </a>
                    </li>

                </ul>
            </nav>
        </header>