@include('layouts.header')

    <body class="antialiased">
        <section>
            <!--for demo wrap-->
            <h1>Detalles del País<br><b>{{ $country->name }}</b></h1>
            
            <p>Diminutivo: <b>{{ $country->diminutive }}</b></p>
            <p>Continente perteneciente: <b>{{ $country->continent }}</b></p>
            <p>Primer idioma: <b>{{ $country->first_language }}</b></p>
                
            <p>
                <a href="{{ url('/paises') }}">&lt;&lt; Volver</a>
            </p>
        </section>
    </body>



<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')