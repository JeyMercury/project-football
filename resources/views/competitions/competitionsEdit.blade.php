@include('layouts.header')

    <body class="antialiased">
        <section>
            <!--for demo wrap-->
            <h1>Editar competición</h1>

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

            
            <form method="POST" action="{{ route('competitions.update', $competition) }}">
                {{ method_field('PUT') }}
                {{ csrf_field() }}

                <label for="name">Nombre de la Competición:</label>
                <input type="text" name="name" value="{{ old('name', $competition->name) }}">
                <br><br>
                <label for="host_country">País anfitrión:</label>
                <input type="text" name="host_country" value="{{ old('host_country', $competition->host_country) }}">
                <br><br>
                <label for="n_participants_teams">Número de equipos participantes:</label>
                <input type="number" name="n_participants_teams" value="{{ old('n_participants_teams', $competition->n_participants_teams) }}">
                <br><br>
            
                <button type="submit">Actualizar competición</button>
            </form>
            
            <p>
                <a href="{{ url('/competiciones') }}">&lt;&lt; Volver</a>
            </p>
        </section>
    </body>



<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')