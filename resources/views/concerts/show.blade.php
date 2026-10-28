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

<h1>Concert</h1>
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

<br><br>
<h1>Escenari</h1>
<p><strong>Nom:</strong> {{ $concert->escenari->nom }}</p>
<p><strong>Aforament maxim:</strong> {{ $concert->escenari->aforament_maxim }}</p>
<p><strong>Ubicacio:</strong>{{ $concert->escenari->ubicacio }}</p>
<p><strong>Cobert:</strong>
    @if($concert->escenari->cobert)
        <span class="badge badge-actiu">Cobert</span>
    @else
        <span class="badge badge-inactiu">No cobert</span>
    @endif
</p>

<br><br>
<h1>Entrades</h1>
<p><strong>Entrades venudes:</strong> {{ $concert->entradas->count() }}</p>
<p>
    <a href="{{ route('entradas.create', $concert->id) }}">
        <button type="button" @disabled($concert->entradas->count() >= $concert->escenari->aforament_maxim)>
            Comprar entrada
        </button>
    </a>
</p>
<p><a href="{{ route('entradas.assistents', $concert->id) }}">Veure assistents</a></p>

</body>
</html>
