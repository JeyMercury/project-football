@include('layouts.header')

    <body class="antialiased">
        <section>
        <!--for demo wrap-->
        <h1>{{ $title }}</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>Campeonato</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                @forelse ($competitions as $competition)
            <tbody>
                <tr>
                    <td>{{ $competition->name }}</td>
                    <td>-   -   -<td>
                @empty
                    <td>No hay competiciones registradas.</td>
                </tr>
            </tbody>
            @endforelse
        </table>
    </div>
        </section>
    </body>



<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')