@include('layouts.header')

    <body class="antialiased">
        <section>
            <!--for demo wrap-->
            <h1>Detalles del jugador<br><b>{{ $player->name }}</b></h1>
            
            <p>Dorsal: <b>{{ $player->dorsal }}</b></p>
            <p>Nacionalidad: <b>{{ $player->nationality }}</b></p>
            <p>Equipo perteneciente: <b>{{ $team->name }}</b></p>
            <p>Posición: <b>{{ $player->position }}</b></p>
                
            <p>
                <a href="{{ url('/jugadores') }}">&lt;&lt; Volver</a>
            </p>
        </section>
    </body>



<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')