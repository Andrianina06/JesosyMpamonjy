@extends('base')
@section('title', 'Listes des évènements')
@section('content')
@php
$i = 0;
@endphp
    <h2>@yield('title')</h2>
    <table class="table table-striped">
        <a href="{{ route('evenement.create') }}" class="btn btn-primary justify-content-end">Ajouter un évènement</a>
        <thead>
            <th class="text-center">#</th>
            <th class="text-center">Evènement</th>
            <th class="text-center">Début</th>
            <th class="text-center">Fin</th>
            <th class="text-center">Lieu</th>
            <th class="text-center">Durée du trajet</th>
            <th class="text-center">Pasteur</th>
            <th class="text-center" colspan="3">Action</th>
        </thead>
        <tbody>
            @forelse ($evenements as $evenement)
                <tr>
                    <td class="text-center">{{ ++$i }}</td>
                    <td class="text-center">{{ $evenement->exemple->exemple }}</td>
                    <td class="text-center">{{ date('d-m-Y', strtotime($evenement->date_debut)) }}</td>
                    <td class="text-center">{{ date('d-m-Y', strtotime($evenement->date_fin)) }}</td>
                    <td class="text-center">{{ $evenement->lieu->lieu }}</td>
                    <td class="text-center">{{ $evenement->duree_du_trajet }}</td>
                    <td class="text-center">{{ $evenement->personne->prenom }}</td>
                    <td class="text-center">
                        <a href="{{ route('evenement.edit', ['evenement'=>$evenement]) }}" class="btn btn-primary">Modifier</a>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('gestion.index', ['evenement'=>$evenement]) }}" class="btn btn-primary">Gestion</a>
                    </td>
                    <td>
                        <form action="{{ route('evenement.destroy', $evenement) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">Aucun évènement</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection