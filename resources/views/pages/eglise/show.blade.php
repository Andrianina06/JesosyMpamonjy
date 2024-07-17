@extends('template')
@section('title', 'Details')
@section('content')
    <h1></h1>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h1>{{ $eglise->lieu->lieu }}</h1>    
                </div>
                <div class="card-body">
                    <img src="" alt="eglise">
                </div>
                <div class="card-footer">
                    <p>Pst {{ $eglise->personne->nom.' '.$eglise->personne->prenom }}</p>
                </div>
            </div>
        </div>
        <div class="col-8">
            <h1 class="text-center">Details de l'eglise</h1>
            <div class="row">
                <div class="col-6">
                    <p> <em class="text-decoration-underline">Pasteur</em> : {{ $eglise->personne->nom.' '.$eglise->personne->prenom }}</p>
                    <p> <em class="text-decoration-underline">Lieu</em> : {{ $eglise->lieu->lieu }}</p>
                    <p> <em class="text-decoration-underline">Dimension</em> : {{ $eglise->dimension }}m²</p>
                    <p> <em class="text-decoration-underline">Capacité</em> : {{ $eglise->capacite }} personnes</p>
                    <p> <em class="text-decoration-underline">Latitude</em> : {{ $eglise->latitude }}°</p>
                    <p> <em class="text-decoration-underline">Longitude</em> : {{ $eglise->longitude }}°</p>
                </div>
            </div>
        </div>
    </div>
@endsection