<!DOCTYPE html>
<html>
<head>
    <title>Artistes</title>
    <style>
        .badge {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 12px;
            color: #fff;
            font-size: 0.85em;
        }
        .badge-actiu { background-color: #28a745; }
        .badge-inactiu { background-color: #6c757d; }
        .badge-genere { background-color: #007bff; margin-right: 4px; }
    </style>
</head>
<body>
    <div >
        <h1 >Estadístiques</h1>

        <section>
            <h2 >1. Top 5 concerts amb més entrades</h2>
            <table >
                <thead><tr><th>Concert</th><th>Artista</th><th>Entrades</th></tr></thead>
                <tbody>
                @foreach($topConcerts as $c)
                    <tr><td>{{ $c->nom }}</td><td>{{ $c->artista->nom }}</td><td>{{ $c->entrades_count }}</td></tr>
                @endforeach
                </tbody>
            </table>
        </section>

        <section>
            <h2 >2. Top 5 artistes amb més concerts</h2>
            <table >
                <thead><tr><th>Artista</th><th>Concerts</th></tr></thead>
                <tbody>
                @foreach($topArtistes as $a)
                    <tr><td>{{ $a->nom }}</td><td>{{ $a->concerts_count }}</td></tr>
                @endforeach
                </tbody>
            </table>
        </section>

        <section>
            <h2 >3. Recaptació per escenari</h2>
            <table >
                <thead><tr><th>Escenari</th><th>Total</th></tr></thead>
                <tbody>
                @foreach($recaptacio as $e)
                    <tr><td>{{ $e->nom }}</td><td>{{ number_format($e->entrades_sum_preu_pagat ?? 0, 2) }} €</td></tr>
                @endforeach
                </tbody>
            </table>
        </section>

        <section>
            <h2 >4. Gèneres més populars</h2>
            <table >
                <thead><tr><th>Gènere</th><th>Entrades</th></tr></thead>
                <tbody>
                @foreach($generesPopulars as $g)
                    <tr><td>{{ $g->nom }}</td><td>{{ $g->total_entrades }}</td></tr>
                @endforeach
                </tbody>
            </table>
        </section>

        <section>
            <h2>5. Ocupació mitjana per escenari</h2>
            <table>
                <thead><tr><th>Escenari</th><th>Aforament</th><th>Concerts</th><th>Entrades</th><th>Ocupació</th></tr></thead>
                <tbody>
                @foreach($ocupacio as $o)
                    <tr>
                        <td>{{ $o->nom }}</td>
                        <td>{{ $o->aforament_maxim }}</td>
                        <td>{{ $o->total_concerts }}</td>
                        <td>{{ $o->total_entrades }}</td>
                        <td>{{ $o->ocupacio }} %</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>
