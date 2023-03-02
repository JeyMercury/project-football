@include('layouts.header')

    <body class="antialiased">
        <section>
            <!--for demo wrap-->
            <h1>Registrar Jugador</h1>
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

            
            <form method="POST" action="{{ url('jugadores') }}">
                {{ csrf_field() }}

                <label for="name">Nombre del jugador:</label>
                <input type="text" name="name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <label style='color:red;'>{{ $errors->first('name') }}</label>
                @endif
                <br><br>
                <label for="dorsal">Dorsal:</label>
                <input type="text" name="dorsal" value="{{ old('dorsal') }}">
                <br><br>
                <label for="nationality">Nacionalidad:</label>
                <input type="text" name="nationality">
                <br><br>
                <label for="team_id">Equipo perteneciente:</label>
                <select name="team_id" value="{{ old('team_id', $player->team_id) }}">
                    <option value="{{ old('team_id', $player->team_id) }}" disabled>Selecciona Equipo</option>
                    @foreach ($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                    @endforeach
                </select>
                <br><br>
                <label for='position'>Posición:</label>
                <input type="text" name="position"  value="{{ old('position') }}">
                <br><br>
            
                <button type="submit">Registrar Jugador</button>
            </form>
            <br>
            
            <p>
                <a href="{{ url('/jugadores') }}">&lt;&lt; Volver</a>
            </p>
        </section>
    </body>



<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')