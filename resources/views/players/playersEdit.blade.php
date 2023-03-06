@include('layouts.header')

    <body class="antialiased">
        <section>
            <!--for demo wrap-->
            <h1>Editar Equipo</h1>
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

            
            <form class="fillable" method="POST" action="{{ route('players.update', $player) }}">
                {{ method_field('PUT') }}
                {{ csrf_field() }}

                <label for="name">Nombre del Jugador:</label>
                <input type="text" name="name" value="{{ old('name', $player->name) }}">
                <br><br>
                <label for="dorsal">Dorsal:</label>
                <input type="text" name="dorsal" value="{{ old('dorsal', $player->dorsal) }}">
                <br><br>
                <label for="nationality">Nacionalidad:</label>
                <input type="text" name="nationality" value="{{ old('nationality', $player->nationality) }}">
                <br><br>
                <label for="team_id">Equipo perteneciente:</label>
                <select name="team_id" value="{{ old('team_id', $player->team_id) }}">
                    <option value="" disabled>Selecciona Equipo</option>
                    @foreach ($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                    @endforeach
                </select>
                <br><br>
                <label for="position">Posición:</label>
                <input type="text" name="position" value="{{ old('position', $player->position) }}">
                <br><br>
            
                <button type="submit">Actualizar jugador</button>
            </form>
            <br>
            
            <p>
                <a href="{{ url('/jugadores') }}">&lt;&lt; Volver</a>
            </p>
        </section>
    </body>



<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')