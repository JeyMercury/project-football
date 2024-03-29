@include('layouts.header')

    <body class="antialiased">
        <section>

            <div class="d-flex justify-content-between align-items-end mb-3">
                <h1 class="pb-1">{{ $title }}</h1>
                <p class="createSection">
                    <a href="{{ route('players.create') }}" class="btn btn-link">
                        <button class="button btn-primary btn-lg">Registrar Jugador</button>
                    </a>
                </p>
            </div>

            @if ($players->isNotEmpty())
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th>Jugador</th>
                            <th>Equipo perteneciente</th>
                            <th>Posición</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                    @foreach ($players as $player)
                        <tr>
                            <td><b>{{ $player->name }}</b></td>
                            <td>{{ $team->where('id', $player->team_id)->value('name') }}</td>
                            <td>{{ $player->position }}</td>
                            <td>
                                <form action="{{ route('players.destroy', $player) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <a href="{{ route('players.details', $player) }}" class="btn btn-link">
                                        <i class="fas fa-eye"></i>
                                    </a>   
                                    <a href="{{ route('players.edit', $player) }}" class="btn btn-link">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#playerDelete{{ $player->id }}">
                                        <i class="fas fa-trash" title="Eliminar"></i>
                                    </button>
                                    @include('players.playersDelete')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                <p>No hay Jugadores registrados.</p>
                @endif
            </div>
        </section>
    </body>

<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')