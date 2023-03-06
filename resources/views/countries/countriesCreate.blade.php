@include('layouts.header')

    <body class="antialiased">
        <section>
            <!--for demo wrap-->
            <h1>Crear país</h1>
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

            
            <form class="fillable" method="POST" action="{{ url('paises') }}">
                {{ csrf_field() }}

                <label for="name">Nombre del país:</label>
                <input type="text" name="name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <label style='color:red;'>{{ $errors->first('name') }}</label>
                @endif
                <br><br>
                <label for="diminutive">Diminutivo:</label>
                <input type="text" name="diminutive" value="{{ old('diminutive') }}">
                <br><br>
                <label for="continent">Continente perteneciente:</label>
                <input type="text" name="continent">
                <br><br>
                <label for="first_language">Primer idioma:</label>
                <input type="text" name="first_language">
                <br><br>
            
                <button type="submit">Registrar País</button>
            </form>
            <br>
            
            <p>
                <a href="{{ url('/paises') }}">&lt;&lt; Volver</a>
            </p>
        </section>
    </body>



<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')