@extends('base')
@section('title', 'Liste des affectations')
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
                    <th class="text-center">Pasteur</th>
                    <th class="text-center">Eglise de départ</th>
                    <th class="text-center">Eglise d'arriveé</th>
                    <th class="text-center">Date d'affectation</th>
                    <th class="text-center">Action</th>
                </thead>
                <tbody>
                    @forelse ($affectations as $affectation)
                        <tr>
                            <td class="text-center">{{ ++$i }}</td>
                            <td class="text-center">{{ $affectation->personne->prenom }}</td>
                            <td class="text-center">{{ $affectation->egliseDepart->lieu->lieu }}</td>
                            <td class="text-center">{{ $affectation->egliseArrivee->lieu->lieu }}</td>
                            <td class="text-center">{{ $affectation->affected_at }}</td>
                            <td class="text-center">
                                <form action="{{ route('affectation.destroy', $affectation) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Aucune affectation</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="col-4">
            <h1>Effectuer une affectation</h1>
            <form action="{{  route('affectation.store') }}" method="post">
                @csrf
                @include('shared.select', ['name'=>'personne_id','label'=>'Pasteur', 'class'=>'col', 'options'=>$pasteurs,  'value'=>'prenom'])
                <div class="row">
                    <div class="col row">
                        @include('shared.select', ['name'=>'eglise_depart_id','label'=>'Eglise de départ','class'=>'col', 'options'=>$eglises, 'value'=>'lieu', 'secValue'=>'lieu'])
                        @include('shared.select', ['name'=>'eglise_arrivee_id', 'class'=>'col', 'label'=>"Eglise d'arrive",'options'=>$eglises, 'value'=>'lieu','secValue'=>'lieu'])
                    </div>
                </div>
                @include('shared.input', ['name'=>'affected_at','label'=>"Date d'affectation",'type'=>'date','class'=>'col'])
                <button class="btn btn-primary mt-2">Ajouter</button>
            </form>
        </div>
    </div>
@endsection