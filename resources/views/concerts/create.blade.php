<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Nou Concert</title>
    <style>
        .error { color: red; font-size: 0.9em; }
    </style>
</head>
<body>
<h1>Nou Concert</h1>

<a href="{{ route('concerts.index') }}">Tornar</a>

{{-- Resum d'errors (opcional) --}}
@if ($errors->any())
    <div class="error">
        <p>Hi ha errors al formulari:</p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('concerts.store') }}" method="POST">
    @csrf

    <p>
        <label for="nom">Nom Concert:</label><br>
        <input type="text" id="nom" name="nom" value="{{ old('nom') }}">
        @error('nom')
        <br><span class="error">{{ $message }}</span>
        @enderror
    </p>

    <p>
        <label for="artista_id">Artista:</label><br>
        <select id="artista_id" name="artista_id">
            <option value="">-- Selecciona un artista --</option>
            @foreach ($artistes as $artista)
                <option value="{{ $artista->id }}"
                    {{ old('artista_id') == $artista->id ? 'selected' : '' }}>
                    {{ $artista->nom }}
                </option>
            @endforeach
        </select>
        @error('artista_id')
        <br><span class="error">{{ $message }}</span>
        @enderror
    </p>

    <p>
        <label for="data_hora">Data i Hora:</label><br>
        <input type="datetime-local" id="data_hora" name="data_hora" value="{{ old('data_hora') }}">
        @error('data_hora')
        <br><span class="error">{{ $message }}</span>
        @enderror
    </p>

    <p>
        <label for="durada_minuts">Durada (Minuts):</label><br>
        <input type="number" id="durada_minuts" name="durada_minuts" min="1" step="1" value="{{ old('durada_minuts') }}">
        @error('durada_minuts')
        <br><span class="error">{{ $message }}</span>
        @enderror
    </p>

    <p>
        <label for="tipus">Tipus:</label><br>
        <select id="tipus" name="tipus">
            <option value="">-- Selecciona un tipus --</option>
            @foreach (['CONCERT', 'DJ_SET', 'SHOWCASE', 'ACUSTIC'] as $t)
                <option value="{{ $t }}" {{ old('tipus') === $t ? 'selected' : '' }}>
                    {{ $t }}
                </option>
            @endforeach
        </select>
        @error('tipus')
        <br><span class="error">{{ $message }}</span>
        @enderror
    </p>
    <p>
        <label for="escenari_id">Escenari:</label><br>
        <select id="escenari_id" name="escenari_id">
            <option value="">-- Selecciona un escenari --</option>
            @foreach ($escenaris as $escenari)
                <option value="{{ $escenari->id}}"
                    {{ old('escenari_id') == $escenari->id ? 'selected' : '' }}>
                    {{ $escenari->nom }}
                </option>
            @endforeach
        </select>
        @error('escenari_id')
        <br><span class="error">{{ $message }}</span>
        @enderror
    </p>

    <p>
        <button type="submit">Crear</button>
    </p>
</form>
</body>
</html>
