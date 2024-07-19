@extends('base')
@section('title', $vehicule->exists ? 'Editer un vehicule' : 'Ajouter un vehicule')
@section('content')
<h1>@yield('title')</h1>
<form action="{{  $vehicule->exists ? route('vehicule.update',['vehicule' => $vehicule]) : route('vehicule.store') }}" method="post">
    @csrf
    @method($vehicule->exists ? 'patch' : 'post')
    <div class="row">
        @include('shared.input', [
            'name' => 'marque', 
            'class' => 'col', 
            'value' => $vehicule->marque])
        @include('shared.input', [
            'name' => 'description', 
            'class' => 'col', 
            'value' => $vehicule->description])
        @include('shared.select', [
            'name' => 'etat_id',
            'label' => 'Etat',
            'class' => 'col', 
            'options' => $etats, 
            'optionValue' => 'id', 
            'value' => 'etat', 
            'valueId' => $vehicule->etat_id])
        @include('shared.input', [
            'name' => 'matricule',
            'class' => 'col',
            'value' => $vehicule->matricule])
    </div>
    <div class="row">
        @include('shared.input', [
            'name' => 'contact',
            'type' => 'tel', 
            'class' => 'col', 
            'value' => $vehicule->contact])
        @include('shared.input', [
            'name' => 'nombre_de_place',
            'label' => 'Nombre de place', 
            'class' => 'col', 
            'value' => $vehicule->nombre_de_place])
    </div>
    <button class="btn btn-primary mt-2">Ajouter</button>
</form>    
@endsection

