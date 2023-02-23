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
            <tbody>
                <tr>
                    @forelse ($competitions as $competition)
                        <td>{{ $competition->name }}</td>
                    @empty
                        <td>No hay competiciones registradas.</td>
                    @endforelse
                        <td>-   -   -</td>
                </tr>
                <tr>
                    <td>UEFA</td>
                    <td>-   -   -</td>
                </tr>
            </tbody>
            </table>
        </div>
        </section>
    </body>



<script src="{{ asset('js/app.js') }}" defer></script>

@include('layouts.footer')