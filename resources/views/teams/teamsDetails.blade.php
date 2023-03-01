@include('layouts.header')

    <body class="antialiased">
        <section>
            <!--for demo wrap-->
            <h1>Detalles del equipo<br><b>{{ $team->name }}</b></h1>
            
            <p>Diminutivo: <b>{{ $team->diminutive }}</b></p>
            <p>Entrenador: <b>{{ $team->coach }}</b></p>
            <p>País perteneciente: <b>{{ $country->name }}</b></p>
            <p>Competiciones en las que participa:
                @foreach ($competitions as $competition)
                    <b>{{ $competition->name }}</b>
                @endforeach
            </p>
                
            <p>
                <a href="{{ url('/equipos') }}">&lt;&lt; Volver</a>
            </p>
        </section>
    </body>



<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')