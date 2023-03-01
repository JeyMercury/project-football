@include('layouts.header')

    <body class="antialiased">
        <section>
            <!--for demo wrap-->
            <h1>Crear equipo</h1>

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

            
            <form method="POST" action="{{ url('equipos') }}">
                {{ csrf_field() }}

                <label for="name">Nombre del equipo:</label>
                <input type="text" name="name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <label style='color:red;'>{{ $errors->first('name') }}</label>
                @endif
                <br><br>
                <label for="diminutive">Diminutivo:</label>
                <input type="text" name="diminutive" value="{{ old('diminutive') }}">
                <br><br>
                <label for="coach">Entrenador:</label>
                <input type="text" name="coach">
                <br><br>
                <label for="country_id">País perteneciente:</label>
                <select name="country_id" value="{{ old('country_id', $team->country_id) }}">
                    <option value="" disabled>Selecciona País</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                <br><br>
                <label for='competition_id'>Competiciones en las que participa:</label>
                <select name="competition_id" value="{{ old('competition_id', $team->competition_id) }}" multiple>
                    <option value="" disabled>Selecciona Competición</option>
                    @foreach ($competitions as $competition)
                        <option value="{{ $competition->id }}">{{ $competition->name }}</option>                        
                    @endforeach
                </select>
                <br><br>
            
                <button type="submit">Crear equipo</button>
            </form>
            
            <p>
                <a href="{{ url('/equipos') }}">&lt;&lt; Volver</a>
            </p>
        </section>
    </body>



<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')