@php
    use App\Models\Personne;
@endphp
@extends('base')
@section('title', 'Liste des membres')
@section('content')
    <h2>@yield('title')</h2>
    <table class="table table-striped">
        <a class="text-end btn btn-primary" href="{{ route('personne.create', ['personne'=>new Personne()])}}">S'inscrire</a>
        <thead>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Lieu</th>
            <th>Fonction</th>
            <th class="text-end">Action</th>
        </thead>
        <tbody>
            @forelse ($personnes as $personne)
                <tr>
                    <td>{{ $personne->nom }}</td>
                    <td>{{ $personne->prenom }}</td>
                    <td>{{ $personne->lieu->lieu }}</td>
                    <td>{{ $personne->fonction->libelle }}</td>
                    <td class="text-end">
                        <a class="btn btn-secondary" href="{{ route('personne.edit', ['personne'=>$personne])}}">Modifier</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Aucun membre</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection