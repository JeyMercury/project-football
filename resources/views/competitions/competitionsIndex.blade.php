@include('layouts.header')

    <body class="antialiased">
        <section>

            <div class="d-flex justify-content-between align-items-end mb-3">
                <h1 class="pb-1">{{ $title }}</h1>
                <p>
                    <a href="{{ route('competitions.create') }}" class="btn btn-link"><button class="button createButton">Crear Competición</button></a>
                </p>
            </div>

            @if ($competitions->isNotEmpty())
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th>Competición</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                    @foreach ($competitions as $competition)
                        <tr>
                            <td>{{ $competition->name }}</td>
                            <td>
                                <form action="{{ route('competitions.destroy', $competition) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <a href="{{ route('competitions.details', $competition) }}" class="btn btn-link"><i class="fas fa-eye"></i></a>   
                                    <a href="{{ route('competitions.edit', $competition) }}" class="btn btn-link"><i class="fas fa-pen"></i></a>
                                    <a href="{{ route('competitions.destroy', $competition) }}" class="btn btn-link"><button type="submit" class="btn btn-link"><i class="fas fa-trash"></i></button></a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                    <p>No hay Competiciones registradas.</p>
                @endif
            </div>
        </section>
    </body>



<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')