@extends('layout.app')

@section('content')
<div class="container">
    <h1>Ajouter un Nouveau Livre</h1>
    <form method="POST" action="{{ route('livres.store') }}">
        @csrf

        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" required>
        </div>

        <div class="form-group">
            <label for="auteur_id">Auteur</label>
            <select class="form-control" id="auteur_id" name="auteur_id">
                @foreach ($auteurs as $auteur)
                    <option value="{{ $auteur->id }}">{{ $auteur->nom }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="année_de_publication">Année de Publication</label>
            <input type="number" class="form-control" id="année_de_publication" name="année_de_publication">
        </div>

        <div class="form-group">
            <label for="nombre_de_pages">Nombre de Pages</label>
            <input type="number" class="form-control" id="nombre_de_pages" name="nombre_de_pages">
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
