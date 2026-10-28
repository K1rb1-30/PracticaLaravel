<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Comprar entrada</title>
    <style>
        .error { color: red; font-size: 0.9em; }
    </style>
</head>
<body>
<h1>Comprar entrada</h1>

<a href="{{ route('concerts.show', $concert->id) }}">Tornar</a>

{{-- Informació del concert (no editable) --}}
<p><strong>Concert:</strong> {{ $concert->nom }}</p>
<p><strong>Artista:</strong> {{ $concert->artista->nom }}</p>
<p><strong>Data:</strong> {{ $concert->data_hora->format('d/m/Y H:i') }}</p>
<p><strong>Escenari:</strong> {{ $concert->escenari->nom }}</p>

<form action="{{ route('entradas.store', $concert->id) }}" method="POST">
    @csrf

    <p>
        <label for="preu_pagat">Preu (€):</label><br>
        <input type="number" id="preu_pagat" name="preu_pagat" step="0.01" min="0" value="{{ old('preu_pagat') }}">
        @error('preu_pagat')
        <br><span class="error">{{ $message }}</span>
        @enderror
    </p>

    <p>
        <button type="submit">Comprar</button>
    </p>
</form>
</body>
</html>
