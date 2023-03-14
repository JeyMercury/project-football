@include('layouts.header')

    <body class="antialiased">
        <section>
            <h1>Detalles del País<br><b>{{ $country->name }}</b></h1>
            <br>
            
            <p>Diminutivo: 
                @if (isset($country->diminutive))
                <b>{{ $country->diminutive }}</b>
                @else
                <b>Sin asignar</b>
                @endif
            </p>
            <p>Continente perteneciente: 
                @if (isset($country->continent))
                <b>{{ $country->continent }}</b>
                @else
                <b>Desconocido</b>
                @endif
            </p>
            <p>Primer idioma: 
                @if (isset($country->first_language))
                <b>{{ $country->first_language }}</b>
                @else
                <b>Desconocido</b>
                @endif
            </p>
            <br>
                
            <p>
                <a href="{{ url('/paises') }}">&lt;&lt; Volver</a>
            </p>
        </section>
    </body>



<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')