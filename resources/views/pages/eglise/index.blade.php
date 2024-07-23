@extends('template')
@section('title', 'Listes des eglises')
@section('content')
    <div class="container mt-7">
        <h1>@yield('title')</h1>
        <div class="row">
            @foreach ($eglises as $eglise)
                <div class="col-3">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal text-center">{{ $eglise->lieu->lieu }}</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mt-3 mb-4">
                                <li> {{ $eglise->lieu->lieu }}</li>
                                <li><img src="/storage/image/F0gcR3THE04dvk5jgKbs4NbxX8DF86gjChppg0PS.png" alt=""> Pst {{ $eglise->personne->prenom.' '.$eglise->personne->nom }}</li>
                            </ul>
                            <a href="{{ route('userEglise.show', ['eglise'=>$eglise])}}"><button type="button" class="w-100 btn btn-lg btn-outline-primary">Détails</button></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection