@extends('base')
@section('title', 'Liste des eglises')
@section('content')
@php
    $i = 0;
@endphp
<h2>@yield('title')</h2>
<a href="{{ route('eglise.create') }}" class="btn btn-primary">Ajouter une église</a>
<table class="table table-striped">
    <thead>
        <th class="text-center">#</th>
        <th class="text-center">Pasteur</th>
        <th class="text-center">Lieu</th>
        <th class="text-center">Capacité</th>
        <th class="text-center">Dimension</th>
        <th class="text-center">Latitude</th>
        <th class="text-center">Longitude</th>
        <th class="text-center" colspan="2">Action</th>
    </thead>
    <tbody>
        @forelse ($eglises as $eglise)
            <tr>
                <td class="text-center">{{ ++$i }}</td>
                <td class="text-center">{{ $eglise->personne->prenom }}</td>
                <td class="text-center">{{ $eglise->lieu->lieu }}</td>
                <td class="text-center">{{ $eglise->capacite }}</td>
                <td class="text-center">{{ $eglise->dimension }}</td>
                <td class="text-center">{{ $eglise->latitude }}</td>
                <td class="text-center">{{ $eglise->longitude }}</td>
                <td>
                    <a href="{{ route('eglise.edit', ['eglise'=>$eglise]) }}"><button class="btn btn-primary">Modifier</button></a>
                </td>
                <td class="text-center">
                    <form action="{{ route('eglise.destroy', $eglise) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8" class="text-center">Aucun membre</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection