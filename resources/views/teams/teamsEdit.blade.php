@include('layouts.header')

    <body class="antialiased">
        <section>
            <h1>Editar Equipo</h1>
            <br>

            @include('teams.teamsForm')
            
            <p>
                <a href="{{ url('/equipos') }}">&lt;&lt; Volver</a>
            </p>
        </section>
    </body>

<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')