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

{{-- Filtres (GET: només consultem, no guardem res) --}}
<form action="{{ route('concerts.index') }}" method="GET">
    <label>Escenari:</label>
    <select name="escenari_id">
        <option value="">Tots</option>
        @foreach ($escenaris as $escenari)
            <option value="{{ $escenari->id }}" @selected(request('escenari_id') == $escenari->id)>
                {{ $escenari->nom }}
            </option>
        @endforeach
    </select>

    <label>Gènere:</label>
    <select name="genere_id">
        <option value="">Tots</option>
        @foreach ($generes as $genere)
            <option value="{{ $genere->id }}" @selected(request('genere_id') == $genere->id)>
                {{ $genere->nom }}
            </option>
        @endforeach
    </select>

    <label>Des de:</label>
    <input type="date" name="data_inici" value="{{ request('data_inici') }}">

    <label>Fins a:</label>
    <input type="date" name="data_fi" value="{{ request('data_fi') }}">

    <button type="submit">Filtrar</button>
</form>
<br>

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
