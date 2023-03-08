@include('layouts.header')

    <body class="antialiased">
        <section>
            <!--for demo wrap-->
            <h1>Crear competición</h1>
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

            
            <form class="fillable" method="POST" action="{{ url('competiciones') }}">
                {{ csrf_field() }}

                <label for="name">Nombre de la Competición:</label>
                <input type="text" name="name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <label style='color:red;'>{{ $errors->first('name') }}</label>
                @endif
                <br><br>
                <label for="host_country">País anfitrión:</label>
                <input type="text" name="host_country" value="{{ old('host_country') }}">
                <br><br>
                {{-- <label for="teams">Equipos participantes:</label>
                <select name="teams" value="{{ old('teams', $competition->team_id) }}" multiple>
                    <option selected="true" value="" disabled>Selecciona Equipos</option>
                    @foreach ($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->name }}</option>                        
                    @endforeach
                </select>
                <br><br> --}}
            
                <button type="submit">Crear competición</button>
            </form>
            <br>
            
            <p>
                <a href="{{ url('/competiciones') }}">&lt;&lt; Volver</a>
            </p>
        </section>
    </body>



<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')