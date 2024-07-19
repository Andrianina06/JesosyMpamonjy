@extends('template')
@section('title', 'Acceuil')
@section('content')
<<<<<<< HEAD
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
=======
<header class="header-2">
    <div class="page-header min-vh-75 relative" style="background-image: url('../assets/img/jmp/cross.jpg'); opacity: 0.5">
      <span class="mask bg-gradient-faded-dark opacity-2"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 text-center mx-auto">
            <h1 class="text-center text-white pt-3 mt-n5">FIANGONANA JESOSY MPAMONJY</h1>
          </div>
        </div>
      </div>
    </div>
</header>
<div class="card card-body blur  shadow-blur mt-7">
    <section class="pt-3 pb-4" id="count-stats">
        <div class="container">
            <h1>Les derniers évènements</h1>
            <div class="row">
                @foreach ($evenements as $evenement)
                    <div class="col-lg-9 py-3">
                        <div class="row">
                            <div class="card col-md-4 position-relative">
                                <div class="p-3 text-center">
                                    <h5 class="text-gradient text-primary">{{ $evenement->exemple->exemple }}</h5>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li> {{ $evenement->lieu->lieu }}</li>
                                        <li>Debut : {{ $evenement->date_debut }}</li>
                                        <li>Fin : {{ $evenement->date_fin }}</li>
                                    </ul>
                                    <a href="{{ route('userEvenement.show', ['evenement'=>$evenement])}}"><button type="button" class="w-100 btn btn-lg btn-outline-primary">Détails</button></a>
                                </div>
                                <hr class="vertical dark">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <h1>Quelques églises</h1>
            <div class="row">
                <div class="col-lg-9 py-3">
                    <div class="row">
                        @foreach ($eglises as $eglise)
                            <div class="card col-md-4 position-relative">
                                <div class="p-3 text-center">
                                    <h5 class="text-gradient text-primary">{{ $eglise->lieu->lieu }}</h5>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>{{ $eglise->lieu->lieu }}</li>
                                        <li>Pst {{ $eglise->personne->prenom }}</li>
                                    </ul>
                                    <a href="{{ route('userEglise.show', ['eglise'=>$eglise])}}"><button type="button" class="w-100 btn btn-lg btn-outline-primary">Détails</button></a>
                                </div>
                                <hr class="vertical dark">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    
>>>>>>> 74c9c38 (commit all)
@endsection