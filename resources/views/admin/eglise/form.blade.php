@extends('base')
@section('title', $eglise->exists ? 'Editer une eglise' : 'Ajouter une église')
@section('content')
<h1>Ajouter une eglise</h1>
<form action="{{ $eglise->exists ? route('eglise.update', ['eglise' => $eglise]) : route('eglise.store') }}" method="post" enctype="multipart/form-data" class="vstack gap-2">
    @csrf
    @method($eglise->exists ? 'PATCH' : 'POST')
    <div class="row">
        @include('shared.select', [
            'name' => 'lieu_id',
            'label' => 'Lieu',
            'class' => 'col',
            'options' => $lieux,
            'value' => 'lieu',
            'valueId' => $eglise->lieu_id 
            ])
        <div class="col row">
            @include('shared.input', [
                'name' => 'longitude',
                'class' => 'col',
                'value' =>  $eglise->longitude
            ])
            @include('shared.input', [
                'name' => 'latitude',
                'class' => 'col',
                'value' =>  $eglise->latitude
            ])
        </div>
    </div>
    <div class="row">
        <div class="col row">
            @include('shared.input', [
                'name' => 'dimension',
                'class' => 'col',
                'value' =>  $eglise->dimension
                ])
            @include('shared.input', [
                'name' => 'capacite',
                'label' => 'Capacité',
                'class' => 'col',
                'value' =>  $eglise->capacite
                ])
            <div class="form-group col">
                <label for="image">Image</label>
                <input type="file" class="form-control col" id="image" name="image">
            </div>
        </div>
    </div>
    <div class="row">
        @include('shared.select', [
            'name' => 'personne_id',
            'label' => 'Pasteur',
            'class' => 'col',
            'options' => $pasteurs,'value' => 'prenom',
            'valueId' => $eglise->personne_id 
            ])
    </div>
    <button class="btn btn-primary mt-2">Ajouter</button>
</form>
@endsection