@extends('base')
@section('title', 'Listes des équipes')
@section('content')
@php
    $i = 0;
    $j = 0;
    $k = 0;
@endphp
<div class="row">
    <div class="col-4">
        <h2 class="text-center">Liste des musiciens</h2>
        <table class="table table-striped">
            <thead>
                <th>#</th>
                <th>Equipe</th>
            </thead>
            <tbody>
                @forelse ($musiciens as $musicien)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $musicien->lieu->lieu }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="text-center">Aucun musicien</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="col-4">
        <h2 class="text-center">Liste des cuisiniers</h2>
        <table class="table table-striped">
            <thead>
                <th>#</th>
                <th>Equipe</th>
            </thead>
            <tbody>
                @forelse ($cuisiniers as $cuisinier)
                    <tr>
                        <td>{{ ++$j }}</td>
                        <td>{{ $cuisinier->lieu->lieu}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="text-center">Aucun cuisinier</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="col-4">
        <h2 class="text-center">Liste des vidéastes</h2>
        <table class="table table-striped">
            <thead>
                <th>#</th>
                <th>Equipe</th>
            </thead>
            <tbody>
                @forelse ($videastes as $videaste)
                    <tr>
                        <td>{{ ++$k }}</td>
                        <td>{{ $videaste->lieu->lieu}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="text-center">Aucun vidéaste</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<div class="container">
    <h2>Ajouter une équipe</h2>
    <form action="{{ route('equipe.store')}}" method="post" class="vstack gap-2">
        @csrf
        @include('shared.select', ['name'=>'lieu_id', 'label'=>'Lieu', 'options'=>$lieux,  'value'=>'lieu'])
        @include('shared.select', ['name'=>'equipe_fonction_id', 'label'=>"Fonction de l'équipe", 'options'=>$fonction,  'value'=>'libelle'])
        <button class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection