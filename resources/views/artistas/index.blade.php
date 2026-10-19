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
    </style>
</head>
<body>
<h1>Artistes</h1>

<p>
    <a href="{{ route('artistas.create') }}">
        <button type="button">Nou artista</button>
    </a>
</p>

<table border="1">
    <tr>
        <th>Nom</th>
        <th>País</th>
        <th>Actiu</th>
        <th>Accions</th>
    </tr>
    @foreach($artistas as $artista)
        <tr>
            <td>{{ $artista->nom }}</td>
            <td>{{ $artista->pais }}</td>
            <td>
                @if($artista->actiu)
                    <span class="badge badge-actiu">Actiu</span>
                @else
                    <span class="badge badge-inactiu">Inactiu</span>
                @endif
            </td>
            <td>
                <a href="{{ route('artistas.show', $artista->id) }}">Show</a> |
                <a href="{{ route('artistas.edit', $artista->id) }}">Edit</a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
