<h3 style='color:red;'>
    @if ($errors->any())
        <b>Hay errores en el formulario:</b>
    @endif
</h3>

@if (Route::current()->getName() == 'players.create')
    <form class="fillable" method="POST" action="{{ route('players') }}">
        {{ csrf_field() }}
@else
    <form class="fillable" method="POST" action="{{ route('players.update', $player) }}">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
@endif

        <label for="name">Nombre del jugador:</label>
        <input type="text" name="name" value="{{ old('name', $player->name) }}">
        @if ($errors->has('name'))
            <br>
            <label style='color:red;'>{{ $errors->first('name') }}</label>
        @endif
        <br><br>
        <label for="dorsal">Dorsal:</label>
        <input type="text" name="dorsal" value="{{ old('dorsal', $player->dorsal) }}">
        <br><br>
        <label for="nationality">Nacionalidad:</label>
        <input type="text" name="nationality" value="{{ old('nationality', $player->nationality) }}">
        <br><br>
        <label for="team_id">Equipo perteneciente:</label>
        @if($teams->isNotEmpty())
            <select name="team_id" value="{{ old('team_id', $player->team_id) }}">
                <option selected="true" value="" disabled>Selecciona Equipo</option>
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>
            @if ($errors->has('team_id'))
                <br>
                <label style='color:red;'>{{ $errors->first('team_id') }}</label>
            @endif
        @else
            <b>No hay equipos que asignar</b>
        @endif
        <br><br>
        <label for='position'>Posición:</label>
        <input type="text" name="position"  value="{{ old('position', $player->position) }}">
        <br><br>
    
        <button type="submit" class="button btn-primary">
            @if (Route::current()->getName()  == 'players.create')
                Registrar Jugador
            @else
                Actualizar Jugador
            @endif
        </button>
    </form>
<br>
    