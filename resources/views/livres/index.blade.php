@extends('layout.app')

@section('content')
<div class="container">
    <h1>Liste des Livres</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($livres as $livre)
                <tr>
                    <td>{{ $livre->titre }}</td>
                    <td>{{ $livre->auteur->nom }}</td>
                    <td>
                        <a href="{{ route('livres.show', $livre->id) }}" class="btn btn-info btn-sm">Voir</a>
                        <a href="{{ route('livres.edit', $livre->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                        <form action="{{ route('livres.destroy', $livre->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $livres->links('pagination::bootstrap-4') }}
</div>
@endsection
