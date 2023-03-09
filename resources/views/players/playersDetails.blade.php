@include('layouts.header')

    <body class="antialiased">
        <section>
            <!--for demo wrap-->
            <h1>Detalles del jugador<br><b>{{ $player->name }}</b></h1>
            <br>
            
            <p>Dorsal: 
                @if (isset($player->dorsal))
                <b>{{ $player->dorsal }}</b>
                @else
                <b>Sin asignar</b>
                @endif
            </p>
            <p>Nacionalidad: 
                @if (isset($player->nationality))
                <b>{{ $player->nationality }}</b>
                @else
                <b>Desconocida</b>
                @endif
            </p>
            <p>Equipo perteneciente: 
                @if (isset($team->name))
                <b>{{ $team->name }}</b>
                @else
                <b>Sin asignar</b>
                @endif
            </p>
            <p>Posición: 
                @if (isset($player->position))
                <b>{{ $player->position }}</b>
                @else
                <b>Sin asignar</b>
                @endif
            </p>
            <br>
                
            <p>
                <a href="{{ url('/jugadores') }}">&lt;&lt; Volver</a>
            </p>
        </section>
    </body>



<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')