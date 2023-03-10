@include('layouts.header')

    <body class="antialiased">
        <section>
            <h1>Crear competición</h1>
            <br>

            @include('competitions.competitionsForm')
            
            <p>
                <a href="{{ url('/competiciones') }}">&lt;&lt; Volver</a>
            </p>
        </section>
    </body>

<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')