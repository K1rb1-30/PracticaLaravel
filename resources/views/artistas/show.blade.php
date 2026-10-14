<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>{{ $artista->nom }}</title>
</head>
<body>
<h1>{{ $artista->nom }}</h1>

<a href="{{ route('artistas.index') }}">← Tornar a la llista</a>
|
<a href="{{ route('artistas.edit', $artista) }}">Editar</a>
<br><br>

@if ($artista->imatge_url)
    <img src="{{ $artista->imatge_url }}" alt="{{ $artista->nom }}" width="200">
@endif

<p><strong>ID:</strong> {{ $artista->id }}</p>
<p><strong>Nom:</strong> {{ $artista->nom }}</p>
<p><strong>País:</strong> {{ $artista->pais }}</p>
<p><strong>Actiu:</strong> {{ $artista->actiu ? 'Actiu' : 'Inactiu' }}</p>
<p><strong>Biografia:</strong><br>{{ $artista->bio }}</p>
<p><strong>Imatge URL:</strong> {{ $artista->imatge_url }}</p>
<br><br>
@if ($artista->concerts->count() > 0)
    <h3>Concerts programats</h3>
    <ul>
        @foreach ($artista->concerts as $concert)
            <li>{{ $concert->nom }} — {{ $concert->data_hora->format('d/m/Y H:i') }}</li>
        @endforeach
    </ul>
@else
    <p>Encara no té concerts programats.</p>
@endif
</body>
</html>
