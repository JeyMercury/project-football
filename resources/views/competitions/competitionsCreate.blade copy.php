@include('layouts.header')

    <body class="antialiased">
        <section>
            <!--for demo wrap-->
            <h1>Crear competición</h1>
            
            <form method="POST" action="{{ url('competitiones/crear') }}">
                <button type="submit">Crear competición</button>
            </form>
            
            <p>
                <a href="{{ url('/competiciones') }}">&lt;&lt; Volver</a>
            </p>
        </section>
    </body>



<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')