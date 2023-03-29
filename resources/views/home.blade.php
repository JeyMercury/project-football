@include('layouts.header')

    <body class="antialiased home">
        <section>

            <div class="d-flex justify-content-between align-items-end mb-3">
                <h1 class="pb-1" style="background: whitesmoke">Project Football</h1>
            </div>

            <div class="home-menu">
                <a href="/competiciones" class="main-nav-link">
                    <button class="button btn-primary btn-lg" style="width:200px;">
                        <span>Competiciones</span>
                    </button>
                </a>

                <a href="/paises" class="main-nav-link">
                    <button class="button btn-primary btn-lg" style="width:200px;">
                        <span>Países</span>
                    </button>

                <a href="/equipos" class="main-nav-link">
                    <button class="button btn-primary btn-lg" style="width:200px;">
                        <span>Equipos</span>
                    </button>
                </a>

                <a href="/jugadores" class="main-nav-link">
                    <button class="button btn-primary btn-lg" style="width:200px;">
                        <span>Jugadores</span>
                    </button>
                </a>
            </div>
        </section>
    </body>

<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')