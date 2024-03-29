@include('layouts.header')

    <body class="antialiased">
        <section>

            <div class="d-flex justify-content-between align-items-end mb-3">
                <h1 class="pb-1">{{ $title }}</h1>
                <p class="createSection">
                    <a href="{{ route('countries.create') }}" class="btn btn-link">
                        <button class="button btn-primary btn-lg">Registrar País</button>
                    </a>
                </p>
            </div>

            @if ($countries->isNotEmpty())
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th>País</th>
                            <th>Diminutivo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                    @foreach ($countries as $country)
                        <tr>
                            <td><b>{{ $country->name }}</b></td>
                            <td>{{ $country->diminutive }}</td>
                            <td>
                                <form action="{{ route('countries.destroy', $country) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <a href="{{ route('countries.details', $country) }}" class="btn btn-link">
                                        <i class="fas fa-eye"></i>
                                    </a>   
                                    <a href="{{ route('countries.edit', $country) }}" class="btn btn-link">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#countryDelete{{ $country->id }}">
                                        <i class="fas fa-trash" title="Eliminar"></i>
                                    </button>
                                    @include('countries.countriesDelete')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                    <p>No hay países registrados.</p>
                @endif
            </div>
        </section>
    </body>

<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')