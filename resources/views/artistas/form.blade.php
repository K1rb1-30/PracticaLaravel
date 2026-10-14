<!DOCTYPE html>
<html>
<head>
    <title>{{ isset($artista) ? 'Editar artista' : 'Nou artista' }}</title>
    <style>
        .error { color: red; font-size: 0.9em; }
    </style>
</head>
<body>
<h1>{{ isset($artista) ? 'Editar artista' : 'Nou artista' }}</h1>

<a href="{{ route('artistas.index') }}">Tornar</a>

<form
    action="{{ isset($artista) ? route('artistas.update', $artista->id) : route('artistas.store') }}"
    method="POST">
    @csrf
    @isset($artista)
        @method('PUT')
    @endisset

    <p>
        <label>Nom:</label><br>
        <input type="text" name="nom" value="{{ old('nom', $artista->nom ?? '') }}">
        @error('nom')
        <br><span class="error">{{ $message }}</span>
        @enderror
    </p>

    <p>
        <label>País:</label><br>
        <input type="text" name="pais" value="{{ old('pais', $artista->pais ?? '') }}">
        @error('pais')
        <br><span class="error">{{ $message }}</span>
        @enderror
    </p>

    <p>
        <label>Bio:</label><br>
        <input type="text" name="bio" value="{{ old('bio', $artista->bio ?? '') }}">
        @error('bio')
        <br><span class="error">{{ $message }}</span>
        @enderror
    </p>

    <p>
        <label>URL de la imagen:</label><br>
        <input type="text" name="url" value="{{ old('url', $artista->url ?? '') }}">
        @error('url')
        <br><span class="error">{{ $message }}</span>
        @enderror
    </p>

    <p>
        <label>
            {{-- Si el checkbox no está marcado, se envía este 0 --}}
            <input type="hidden" name="actiu" value="0">
            <input type="checkbox" name="actiu" value="1"
                @checked(old('actiu', $artista->actiu ?? false))>
            Actiu
        </label>
        @error('actiu')
        <br><span class="error">{{ $message }}</span>
        @enderror
    </p>

    <p>
        <button type="submit">Guardar</button>
    </p>
</form>
</body>
</html>
