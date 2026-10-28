<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Assistents - {{ $concert->nom }}</title>
</head>
<body>
<h1>{{ $concert->nom }}</h1>
<p><strong>Escenari:</strong> {{ $concert->escenari->nom }}</p>

<a href="{{ route('concerts.show', $concert->id) }}">← Tornar al concert</a>
<br><br>

{{-- Comptador: entrades venudes / aforament de l'escenari --}}
<p><strong>{{ $concert->entradas->count() }} / {{ $concert->escenari->aforament_maxim }} entrades venudes</strong></p>

@if ($concert->entradas->isEmpty())
    <p>Encara no hi ha assistents.</p>
@else
    <table border="1">
        <tr>
            <th>Nom d'usuari</th>
            <th>Data de compra</th>
            <th>Codi d'entrada</th>
        </tr>
        @foreach ($concert->entradas as $entrada)
            <tr>
                <td>{{ $entrada->user->name }}</td>
                <td>{{ $entrada->created_at->format('d/m/Y H:i') }}</td>
                <td>{{ $entrada->codi_entrada }}</td>
            </tr>
        @endforeach
    </table>
@endif
</body>
</html>
