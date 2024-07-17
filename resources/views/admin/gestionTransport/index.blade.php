@extends('base')
@section('title', 'Gestion des vehicules')
@section('content')
@php
$i = 0;
@endphp
    <h2>@yield('title')</h2>
    <table class="table table-striped">

        <a href="{{ route('gestion.create',$evenement) }}" class="btn btn-primary justify-content-end">Ajouter un vehicule</a>
        <thead>
            <th class="text-center">#</th>
            <th class="text-center">Vehicule</th>
            <th class="text-center">Frais</th>
            <th class="text-center">Date de départ</th>
            <th class="text-center">Heure de départ</th>
            <th class="text-center" colspan="2">Action</th>
        </thead>
        <tbody>
            @forelse ($gestions as $gestion)
                <tr>
                    <td class="text-center">{{ ++$i }}</td>
                    <td class="text-center">{{ $gestion->vehicule->marque }}</td>
                    <td class="text-center">{{ $gestion->frais }} Ar</td>
                    <td class="text-center">{{ $gestion->date_depart }}</td>
                    <td class="text-center">{{ $gestion->heure_depart }}</td>
                    <td class="text-center">
                        <a href="{{ route('gestion.edit', ['evenement'=>$evenement, 'gestion'=>$gestion]) }}" class="btn btn-primary">Modifier</a>
                    </td>
                    <td>
                        <form action="{{ route('gestion.destroy', $evenement) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>none</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection