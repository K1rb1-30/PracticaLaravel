<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Les meves entrades</title>
    <style>
        .success { color: green; }
    </style>
</head>
<body>
<h1>Les meves entrades</h1>

<a href="{{ route('concerts.index') }}">← Tornar als concerts</a>
<br><br>

{{-- Missatge que ve del store després de comprar --}}
@if (session('success'))
    <p class="success">{{ session('success') }}</p>
@endif

@if ($entradas->isEmpty())
    <p>Encara no has comprat cap entrada.</p>
@else
    <table border="1">
        <tr>
            <th>Concert</th>
            <th>Artista</th>
            <th>Data</th>
            <th>Preu pagat</th>
            <th>Codi d'entrada</th>
        </tr>
        @foreach ($entradas as $entrada)
            <tr>
                <td><a href="{{ route('concerts.show', $entrada->concert->id) }}">{{ $entrada->concert->nom }}</a></td>
                <td>{{ $entrada->concert->artista->nom }}</td>
                <td>{{ $entrada->concert->data_hora->format('d/m/Y H:i') }}</td>
                <td>{{ $entrada->preu_pagat }} €</td>
                <td>{{ $entrada->codi_entrada }}</td>
            </tr>
        @endforeach
    </table>
@endif
</body>
</html>
