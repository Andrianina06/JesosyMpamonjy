@extends('template')
@section('title', $evenement->exemple->exemple)
@section('content')
    <div class="container mt-7">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h1>{{ $evenement->lieu->lieu }}</h1>    
                    </div>
                    <div class="card-body m-auto">
                        <div class="justify-content-center">
                            <img src="/storage/{{ $eglise->image }}" alt="eglise" style="width: 60vh;">
                        </div>
                    </div>
                    <div class="card-footer">
                        <p>Durée du trajet : {{ $evenement->duree_du_trajet }}h</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h1 class="text-center">Details de l'évènement</h1>
                <div class="row">
                    <div class="col-6">
                        <p> <em>Evènement</em> : {{ $evenement->exemple->exemple }}</p>
                        <p> <em>Lieu</em> : {{ $evenement->lieu->lieu }}</p>
                        <p> <em>Pasteur</em> : {{ $evenement->personne->prenom }}</p>
                        <p> <em>Debut</em> : {{ $evenement->date_debut }}</p>
                        <p> <em>Fin</em> : {{ $evenement->date_fin }}</p>
                    </div>
                    <div class="col-6">
                        <p> Equipe musicien : {{ $evenement->musicien->lieu->lieu }}</p>
                        <p> Equipe cuisinier : {{ $evenement->cuisinier->lieu->lieu }}</p>
                        <p> Equipe vidéaste : {{ $evenement->cuisinier->lieu->lieu }}</p>
                        <p> Programme : {{ $evenement->programme }}</p>
                        <p> Vehicules partant : @forelse ($evenement->vehicules as $vehicule) {{ $vehicule->marque }} @empty Aucun vehicule disponible! @endforelse</p>
                    </div>
                </div>
                <form action="{{ route('userEvenement.participate', ["evenement"=>$evenement]) }}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" id="user">
                    <input type="hidden" name="evenement_id" value="{{ $evenement->id }}" id="evenement">
                    <button class="btn btn-danger">Participer</button>
                </form>
            </div>
        </div>
        </div>
    </div>
    <script src="/js/jquery-3.7.1.min.js"></script>
    <script src="/js/main.js"></script>
@endsection