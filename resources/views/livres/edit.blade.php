@extends('layout.app')

@section('content')
<div class="container">
    <h1>Modifier le Livre: {{ $livre->titre }}</h1>
    <form method="POST" action="{{ route('livres.update', $livre->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" value="{{ $livre->titre }}" required>
        </div>

        <div class="form-group">
            <label for="auteur_id">Auteur</label>
            <select class="form-control" id="auteur_id" name="auteur_id">
                @foreach ($auteurs as $auteur)
                    <option value="{{ $auteur->id }}" {{ $livre->auteur_id == $auteur->id ? 'selected' : '' }}>{{ $auteur->nom }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="année_de_publication">Année de Publication</label>
            <input type="number" class="form-control" id="année_de_publication" name="année_de_publication" value="{{ $livre->année_de_publication }}">
        </div>

        <div class="form-group">
            <label for="nombre_de_pages">Nombre de Pages</label>
            <input type="number" class="form-control" id="nombre_de_pages" name="nombre_de_pages" value="{{ $livre->nombre_de_pages }}">
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
