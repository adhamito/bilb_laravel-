@extends('layout.app')

@section('content')
<div class="container">
    <h1>Détails du Livre</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $livre->titre }}</h5>
            <p class="card-text"><strong>Auteur :</strong> {{ $livre->auteur->nom }}</p>
            <p class="card-text"><strong>Année de publication :</strong> {{ $livre->année_de_publication }}</p>
            <p class="card-text"><strong>Nombre de pages :</strong> {{ $livre->nombre_de_pages }}</p>
        </div>
    </div>
    <a href="{{ route('livres.index') }}" class="btn btn-primary mt-3">Retour à la liste</a>
</div>
@endsection
