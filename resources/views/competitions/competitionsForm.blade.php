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

@if (Route::current()->getName() == 'competitions.create')
    <form class="fillable" method="POST" action="{{ url('competiciones') }}">
        {{ csrf_field() }}
@else
    <form class="fillable" method="POST" action="{{ route('competitions.update', $competition) }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
@endif

        <label for="name">Nombre de la Competición:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @if ($errors->has('name'))
            <br>
            <label style='color:red;'>{{ $errors->first('name') }}</label>
        @endif
        <br><br>
        <label for="host_country">País anfitrión:</label>
        <input type="text" name="host_country" value="{{ old('host_country') }}">
        <br><br>
        <label for="teams">Equipos participantes:</label>
        @if($teams->isNotEmpty())
            <select name="teams" value="{{ old('teams', $competition->team_id) }}" multiple="multiple">
                <option selected="true" value="" disabled>Selecciona Equipos</option>
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>                        
                @endforeach
            </select>
        @else
            <b>No hay equipos que asignar</b>
        @endif
        <br><br>

        <button type="submit" class="button btn-primary">
            @if (Route::current()->getName() == 'competitions.create')
                Crear competición
            @else
                Actualizar competición
            @endif
        </button>
    </form>
<br>