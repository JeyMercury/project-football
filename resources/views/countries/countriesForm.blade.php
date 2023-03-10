<h3 style='color:red;'>
    @if ($errors->any())
        <b>Hay errores en el formulario:</b>
    @endif
</h3>

@if (Route::current()->getName() == 'countries.create')
    <form class="fillable" method="POST" action="{{ route('countries') }}">
        {{ csrf_field() }}
@else
<form class="fillable" method="POST" action="{{ route('countries.update', $country) }}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
@endif

        <label for="name">Nombre del país:</label>
        <input type="text" name="name" value="{{ old('name', $country->name) }}">
        @if ($errors->has('name'))
            <br>
            <label style='color:red;'>{{ $errors->first('name') }}</label>
        @endif
        <br><br>
        <label for="diminutive">Diminutivo:</label>
        <input type="text" name="diminutive" value="{{ old('diminutive', $country->diminutive) }}">
        <br><br>
        <label for="continent">Continente perteneciente:</label>
        <input type="text" name="continent">
        <br><br>
        <label for="first_language">Primer idioma:</label>
        <input type="text" name="first_language">
        <br><br>

        <button type="submit" class="button btn-primary">
            @if (Route::current()->getName() == 'countries.create')
                Registrar País
            @else
                Actualizar País
            @endif
        </button>
    </form>
<br>