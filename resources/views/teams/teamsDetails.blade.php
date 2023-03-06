@include('layouts.header')

    <body class="antialiased">
        <section class="content">
            <!--for demo wrap-->
            <h1>Detalles del equipo<br><b>{{ $team->name }}</b></h1>
            <br>
            
            <p>Diminutivo: <b>{{ $team->diminutive }}</b></p>
            <p>Entrenador: <b>{{ $team->coach }}</b></p>
            <p>País perteneciente: <b>{{ $country->name }}</b></p>
            <p>Competiciones en las que participa: <b>{{ $competitions->pluck('name')->implode(', ') }}</b></p>
            <p>Jugadores: <b>{{ $players->pluck('name')->implode(', ') }}</b></p>
            <br>
                
            <p>
                <a href="{{ url('/equipos') }}">&lt;&lt; Volver</a>
            </p>
        </section>
    </body>



<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')