@include('layouts.header')

    <body class="antialiased">
        <section>
            <!--for demo wrap-->
            <h1>Editar país</h1>
            <br>

            @if ($errors->any())
            <div class="alert alert-danger">
                <h3 style='color:red;'>Hay errores en el formulario:</h3>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style='color:red;'>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <br><br>
            @endif

            
            <form method="POST" action="{{ route('countries.update', $country) }}">
                {{ method_field('PUT') }}
                {{ csrf_field() }}

                <label for="name">Nombre del País:</label>
                <input type="text" name="name" value="{{ old('name', $country->name) }}">
                <br><br>
                <label for="diminutive">Diminutivo:</label>
                <input type="text" name="diminutive" value="{{ old('diminutive', $country->diminutive) }}">
                <br><br>
                <label for="continent">Continente perteneciente:</label>
                <input type="text" name="continent" value="{{ old('continent', $country->continent) }}">
                <br><br>
                <label for="first_language">Primer idioma:</label>
                <input type="text" name="first_language" value="{{ old('first_language', $country->first_language) }}">
                <br><br>
            
                <button type="submit">Actualizar país</button>
            </form>
            <br>
            
            <p>
                <a href="{{ url('/paises') }}">&lt;&lt; Volver</a>
            </p>
        </section>
    </body>



<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')