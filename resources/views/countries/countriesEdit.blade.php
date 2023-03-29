@include('layouts.header')

    <body class="antialiased">
        <section>
            <h1>Editar país</h1>
            <br>

            @include('countries.countriesForm')
            
            <p>
                <a href="{{ url('/paises') }}">&lt;&lt; Volver</a>
            </p>
        </section>
    </body>

<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')