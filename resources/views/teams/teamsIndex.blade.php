@include('layouts.header')

    <body class="antialiased">
        <section>

            <div class="d-flex justify-content-between align-items-end mb-3">
                <h1 class="pb-1">{{ $title }}</h1>
                <p class="createSection">
                    <a href="{{ route('teams.create') }}" class="btn btn-link">
                        <button class="button btn-primary btn-lg">Crear Equipo</button>
                    </a>
                </p>
            </div>

            @if ($teams->isNotEmpty())
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th>Equipo</th>
                            <th>Competiciones en las que participa</th>
                            <th>Jugadores pertenecientes</th>
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
                            <td><b>{{ $team->name }}</b></td>
                            <td>{{ $team->competitions()->get()->pluck('name')->implode(', ') }}</td>
                            <td>{{ $team->players()->get()->pluck('name')->implode(', ') }}</td>
                            <td>
                                <form action="{{ route('teams.destroy', $team) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <a href="{{ route('teams.details', $team) }}" class="btn btn-link">
                                        <i class="fas fa-eye"></i>
                                    </a>   
                                    <a href="{{ route('teams.edit', $team) }}" class="btn btn-link">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#teamDelete{{ $team->id }}">
                                        <i class="fas fa-trash" title="Eliminar"></i>
                                    </button>
                                    @include('teams.teamsDelete')
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