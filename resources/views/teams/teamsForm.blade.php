
<h3 style='color:red;'>
    @if ($errors->any())
        <b>Hay errores en el formulario:</b>
    @endif
</h3>

@if (Route::current()->getName() == 'teams.create')
    <form class="fillable" method="POST" action="{{ route('teams') }}">
        {{ csrf_field() }}
@else
    <form class="fillable" method="POST" action="{{ route('teams.update', $team) }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
@endif

        <label for="name">Nombre del equipo:</label>
        <input type="text" name="name" value="{{ old('name', $team->name) }}">
        @if ($errors->has('name'))
            <br>
            <label style='color:red;'>{{ $errors->first('name') }}</label>
        @endif
        <br><br>
        <label for="diminutive">Diminutivo:</label>
        <input type="text" name="diminutive" value="{{ old('diminutive', $team->diminutive) }}">
        <br><br>
        <label for="coach">Entrenador:</label>
        <input type="text" name="coach" value="{{ old('coach', $team->coach) }}">
        <br><br>
        <label for="country_id">País perteneciente:</label>
        @if($countries->isNotEmpty())
            <select name="country_id" value="{{ old('country_id', $team->country_id) }}">
                <option selected="true" value="" disabled>Selecciona País</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
            @if ($errors->has('country_id'))
                <br>
                <label style='color:red;'>{{ $errors->first('country_id') }}</label>
            @endif
        @else
            <b>No hay países que asignar</b>
        @endif
        <br><br>
        <label for='competitions'>Competiciones en las que participa:</label>
        @if($competitions->isNotEmpty())
            <select name="competitions[]" value="{{ old('competition_id', $team->competition_id) }}" multiple="multiple">
                <option selected="true" value="" disabled>Selecciona Competiciones</option>
                @foreach ($competitions as $competition)
                    <option value="{{ $competition->id }}">{{ $competition->name }}</option>                        
                @endforeach
            </select>
        @else
            <b>No hay competiciones que asignar</b>
        @endif
        <br><br>
    
        <button type="submit" class="button btn-primary">
            @if (Route::current()->getName() == 'teams.create')
                Crear Equipo
            @else
                Actualizar Equipo
            @endif
        </button>
    </form>
<br>
        