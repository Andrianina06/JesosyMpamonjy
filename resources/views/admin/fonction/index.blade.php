@extends('base')
@section('title', 'Liste des fonctions')
@section('content')
@php
    $i = 0;
@endphp
    <div class="row">
        <div class="col-8">
            <h2>@yield('title')</h2>
            <table class="table table-striped">
                <thead>
                    <th class="text-center">#</th>
                    <th class="text-center">Fonction</th>
                    <th class="text-center">Action</th>
                </thead>
                <tbody>
                    @forelse ($fonctions as $fonction)
                        <tr>
                            <td class="text-center">{{ ++$i }}</td>
                            <td class="text-center">{{ $fonction->libelle }}</td>
                            <td class="text-center">
                                <form action="{{ route('fonction.destroy', $fonction) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Aucun membre</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="col-4">
            <h1>Ajouter une fonction</h1>
            <form action="{{  route('fonction.store') }}" method="post">
                @csrf
                <div class="row">
                    @include('shared.input', ['name'=>'libelle','label'=>'Fonction','class'=>'col'])    
                </div>
                <button class="btn btn-primary mt-2">Ajouter</button>
            </form>
        </div>
    </div>
@endsection