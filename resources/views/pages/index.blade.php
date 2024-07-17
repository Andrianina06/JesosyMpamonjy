@extends('template')
@section('title', 'Acceuil')
@section('content')
    <h1>Les derniers évènements</h1>
    <div class="row">
        @foreach ($evenements as $evenement)
            <div class="col-3">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal text-center">{{ $evenement->exemple->exemple }}</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li> {{ $evenement->lieu->lieu }}</li>
                            <li>Debut : {{ $evenement->date_debut }}</li>
                            <li>Fin : {{ $evenement->date_fin }}</li>
                        </ul>
                        <a href="{{ route('userEvenement.show', ['evenement'=>$evenement])}}"><button type="button" class="w-100 btn btn-lg btn-outline-primary">Détails</button></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <h1>Quelques églises</h1>
    <div class="row">
        @foreach ($eglises as $eglise)
            <div class="col-3">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal text-center">{{ $eglise->lieu->lieu }}</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>{{ $eglise->lieu->lieu }}</li>
                            <li>Pst {{ $eglise->personne->prenom }}</li>
                        </ul>
                        <a href="{{ route('userEglise.show', ['eglise'=>$eglise])}}"><button type="button" class="w-100 btn btn-lg btn-outline-primary">Détails</button></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection