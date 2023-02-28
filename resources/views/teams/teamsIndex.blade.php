@include('layouts.header')

    <body class="antialiased">
        <section>

            <div class="d-flex justify-content-between align-items-end mb-3">
                <h1 class="pb-1">{{ $title }}</h1>
                <p>
                    <a href="{{ route('teams.create') }}" class="btn btn-link"><button class="button createButton">Crear Equipo</button></a>
                </p>
            </div>

            @if ($teams->isNotEmpty())
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th>Equipo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                    @foreach ($teams as $team)
                        <tr>
                            <td>{{ $team->name }}</td>
                            <td>
                                <form action="{{ route('teams.destroy', $team) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <a href="{{ route('teams.details', $team) }}" class="btn btn-link"><i class="fas fa-eye"></i></a>   
                                    <a href="{{ route('teams.edit', $team) }}" class="btn btn-link"><i class="fas fa-pen"></i></a>
                                    <a href="{{ route('teams.destroy', $team) }}" class="btn btn-link"><button type="submit" class="btn btn-link"><i class="fas fa-trash"></i></button></a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                    <p>No hay Equipos registrados.</p>
                @endif
            </div>
        </section>
    </body>



<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')