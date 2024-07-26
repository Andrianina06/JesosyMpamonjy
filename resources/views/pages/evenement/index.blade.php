@extends('template')
@section('title', 'Listes des évènements')
@section('content')
    <div class="container mt-7">
        <div class="row">
            @foreach ($evenements as $evenement)
                <div class="col-3 row ms-2 mt-2">
                    <div class="card rounded-3 shadow-sm m-auto">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal text-center">{{ $evenement->exemple->exemple }} </h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mt-3">
                                <li> {{ $evenement->lieu->lieu }}</li>
                                <li>Debut : {{ $evenement->date_debut }}</li>
                                <li>Fin : {{ $evenement->date_fin }}</li>
                                <li>Déjà passé : 
                                    @if ($evenement->passe == 1)
                                        Déjà passé
                                    @else    
                                        non
                                    @endif
                                </li>
                            </ul>
                            <a href="{{ route('userEvenement.show', ['evenement'=>$evenement])}}"><button type="button" class="w-100 btn btn-lg btn-outline-primary">Détails</button></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection