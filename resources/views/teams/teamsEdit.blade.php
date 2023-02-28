@include('layouts.header')

    <body class="antialiased">
        <section>
            <!--for demo wrap-->
            <h1>Editar Equipo</h1>

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

            
            <form method="POST" action="{{ route('teams.update', $team) }}">
                {{ method_field('PUT') }}
                {{ csrf_field() }}

                <label for="name">Nombre del Equipo:</label>
                <input type="text" name="name" value="{{ old('name', $team->name) }}">
                <br><br>
                <label for="diminutive">Diminutivo:</label>
                <input type="text" name="diminutive" value="{{ old('diminutive', $team->diminutive) }}">
                <br><br>
                <label for="coach">Entrenador:</label>
                <input type="text" name="coach" value="{{ old('coach', $team->coach) }}">
                <br><br>
                <label for="country_id">País perteneciente:</label>
                <select name="contry_id" value="{{ old('contry_id', $team->country_id) }}">
                    <option value="" disabled>Selecciona País</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                <br><br>
            
                <button type="submit">Actualizar equipo</button>
            </form>
            
            <p>
                <a href="{{ url('/equipos') }}">&lt;&lt; Volver</a>
            </p>
        </section>
    </body>



<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')