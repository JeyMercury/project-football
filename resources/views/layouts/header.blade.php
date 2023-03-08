<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project Football</title>
        
        {{-- Bootstrap core CSS --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        {{-- <script type="text/javascript" src="script/bootbox.min.js"></script> --}}
        {{-- <script type="text/javascript" src="script/deleteRecords.js"></script> --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        
        {{-- Font Awesome Icons --}}
        <script src="https://kit.fontawesome.com/bb6156e2fe.js" crossorigin="anonymous"></script>

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