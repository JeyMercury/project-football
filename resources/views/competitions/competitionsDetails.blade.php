@include('layouts.header')

    <body class="antialiased">
        <section>
            <!--for demo wrap-->
            <h1>Detalles de la competición<br><b>{{ $competition->name }}</b></h1>
            <br>
            
            <p>País anfitrión: <b>{{ $competition->host_country }}</b></p>
            <p>Número de equipos participantes: <b>{{ $competition->n_participants_teams }}</b></p>
            <br>
                
            <p>
                <a href="{{ url('/competiciones') }}">&lt;&lt; Volver</a>
            </p>
        </section>
    </body>



<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')