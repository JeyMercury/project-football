@include('layouts.header')

    <body class="antialiased home">
        <section>

            <div class="d-flex justify-content-between align-items-end mb-3">
                <h1 class="pb-1">Project Football</h1>
            </div>

            <div class="home-menu">
                <a href="/competiciones" class="main-nav-link">
                    <button class="button btn-primary btn-lg">
                        <span>Competiciones</span>
                    </button>
                </a>

                <a href="/paises" class="main-nav-link">
                    <button class="button btn-primary btn-lg">
                        <span>Países</span>
                    </button>
                </a>
            </div>

            <div calss="home-menu">
                <a href="/equipos" class="main-nav-link">
                    <button class="button btn-primary btn-lg">
                        <span>Equipos</span>
                    </button>
                </a>

                <a href="/jugadores" class="main-nav-link">
                    <button class="button btn-primary btn-lg">
                        <span>Jugadores</span>
                    </button>
                </a>
            </div>
                
            {{-- <div>
                <img src="{{url('/images/ball-project-football.jpg')}}" alt="home-blue-ball" width="100%" height="100%">
            </div> --}}
        </section>
    </body>



<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')