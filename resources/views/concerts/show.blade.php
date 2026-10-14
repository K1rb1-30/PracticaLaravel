<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>{{ $concert->nom }}</title>
</head>
<body>
<h1>{{ $concert->nom }}</h1>

<a href="{{ route('concerts.index') }}">← Tornar a la llista</a>
<br><br>


<p><strong>ID:</strong> {{ $concert->id }}</p>
<p><strong>Nom:</strong> {{ $concert->nom }}</p>
<p><strong>Artista:</strong> {{ $concert->artista->nom }}</p>
<p><strong>Data:</strong> {{ $concert->data_hora}}</p>
<p><strong>Tipus:</strong> {{ $concert->tipus }}</p>
<p><strong>Durada:</strong> {{ $concert->durada_minuts }}</p>

<br><br>
<h1>Artista</h1>
<p><strong>Nom:</strong> {{ $concert->artista->nom }}</p>
<p><strong>País:</strong> {{ $concert->artista->pais }}</p>
<p><strong>Biografia:</strong><br>{{ $concert->artista->bio }}</p>



</body>
</html>
