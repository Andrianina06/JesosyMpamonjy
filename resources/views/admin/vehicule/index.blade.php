@extends('base')
@section('title', 'Listes des vehicules')
@section('content')
@php
$i = 0;
@endphp
    <h2>@yield('title')</h2>
    <table class="table table-striped">
        <a href="{{ route('vehicule.create') }}" class="btn btn-primary justify-content-end">Ajouter un vehicule</a>
        <thead>
            <th class="text-center">#</th>
            <th class="text-center">Marque</th>
            <th class="text-center">Description</th>
            <th class="text-center">Etat</th>
            <th class="text-center">Matricule</th>
            <th class="text-center">Contact</th>
            <th class="text-center">Nombre de place</th>
            <th class="text-center" colspan="2">Action</th>
        </thead>
        <tbody>
            @forelse ($vehicules as $vehicule)
                <tr>
                    <td class="text-center">{{ ++$i }}</td>
                    <td class="text-center">{{ $vehicule->marque }}</td>
                    <td class="text-center">{{ $vehicule->description }}</td>
                    <td class="text-center">{{ $vehicule->etat->etat }}</td>
                    <td class="text-center">{{ $vehicule->matricule }}</td>
                    <td class="text-center">+261 {{ $vehicule->contact }}</td>
                    <td class="text-center">{{ $vehicule->nombre_de_place }}</td>
                    <td class="text-center">
                        <a href="{{ route('vehicule.edit', ['vehicule'=>$vehicule]) }}" class="btn btn-primary">Modifier</a>
                    </td>
                    <td>
                        <form action="{{ route('vehicule.destroy', $vehicule) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">Aucun vehicule</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection