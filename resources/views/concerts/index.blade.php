<!DOCTYPE html>
<html>
<head>
    <title>Concerts</title>
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
    </style>
</head>
<body>
<h1>Concerts</h1>

<p>
    <a href="{{ route('concerts.create') }}">
        <button type="button">Nou Concert</button>
    </a>
</p>

<table border="1">
    <tr>
        <th>Nom</th>
        <th>Artista</th>
        <th>Data i hora</th>
        <th>Tipus</th>
        <th>Durada</th>
        <th>Escenari</th>
    </tr>
    @foreach($concerts as $concert)
        <tr>
            <td>{{ $concert->nom }}</td>
            <td><a href="{{ route('concerts.show', $concert->id) }}">{{ $concert->artista->nom }}</a></td>
            <td>{{$concert->data_hora}}</td>
            <td>{{$concert->tipus}}</td>
            <td>{{$concert->durada_minuts }}</td>
            <td>{{$concert->escenari->nom}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
