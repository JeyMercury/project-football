@include('layouts.header')

    <body class="antialiased">
        <section>
            <!--for demo wrap-->
            <h1>Crear competición</h1>

            <!-- @if ($errors->any())
            <div class="alert alert-danger">
                <h3 style='color:red;'>Hay errores en el formulario:</h3>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style='color:red;'>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <br><br>
            @endif -->

            
            <form method="POST" action="{{ url('competiciones') }}">
                {!! csrf_field() !!}

                <label for="name">Nombre de la Competición:</label>
                <input type="text" name="name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <label style='color:red;'>{{ $errors->first('name') }}</label>
                @endif
                <br><br>
                <label for="host_country">País anfitrión:</label>
                <input type="text" name="host_country" value="{{ old('host_country') }}">
                <br><br>
                <label for="n_participants_teams">Número de equipos participantes:</label>
                <input type="number" name="n_participants_teams">
                <br><br>
            
                <button type="submit">Crear competición</button>
            </form>
            
            <p>
                <a href="{{ url('/competiciones') }}">&lt;&lt; Volver</a>
            </p>
        </section>
    </body>



<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')