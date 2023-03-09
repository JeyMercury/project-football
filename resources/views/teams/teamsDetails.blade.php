@include('layouts.header')

    <body class="antialiased">
        <section class="content">
            <!--for demo wrap-->
            <h1>Detalles del equipo<br><b>{{ $team->name }}</b></h1>
            <br>
            
            <p>Diminutivo: 
                @if (isset($team->diminutive))
                <b>{{ $team->diminutive }}</b>
                @else
                <b>Sin asignar</b>
                @endif
            </p>
            <p>Entrenador: 
                @if (isset($team->coach))
                <b>{{ $team->coach }}</b>
                @else
                <b>Sin asignar</b>
                @endif
            </p>
            <p>País perteneciente: 
                @if (isset($country->name))
                <b>{{ $country->name }}</b>
                @else
                <b>Desconocido</b>
                @endif
            </p>
            <p>Competiciones en las que participa: 
                @if ($competitions->isNotEmpty())
                <b>{{ $competitions->pluck('name')->implode(', ') }}</b>
                @else
                <b>No hay competiciones asignadas</b>
                @endif
            </p>
            <p>Jugadores: 
                @if ($players->isNotEmpty())
                <b>{{ $players->pluck('name')->implode(', ') }}</b>
                @else
                <b>No hay jugadores asignados</b>
                @endif
            </p>
            <br>
                
            <p>
                <a href="{{ url('/equipos') }}">&lt;&lt; Volver</a>
            </p>
        </section>
    </body>



<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')