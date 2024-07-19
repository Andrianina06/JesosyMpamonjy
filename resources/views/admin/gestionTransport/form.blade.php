@extends('template')
@section('title', 'Gerer les transports')
@section('content')
@foreach ($evenement->vehicules as $vehicule)
    <form action="{{ route('gestion.store', $evenement)}}" class="vstack gap-2" method="post">
        <input type="hidden" name="evenement_id" value="{{ $evenement->id }}">
            @csrf
        <fieldset>
            <legend>{{$vehicule->marque}}</legend>
            <input type="hidden" name="vehicule_id" value="{{ $vehicule->id}}">
            <div class="row">
                @include('shared.input', [
                    'name' => 'frais',
                    'class' => 'col',
                    'value' =>  $gestion->exists ? $gestion->frais : ''
                ])
                @include('shared.input', [
                    'name' => 'heure_depart',
                    'type' => 'time',
                    'label' => 'Heure de départ',
                    'class' => 'col',
                    'value'  =>  $gestion->exists ? $gestion->heure_depart : ''])
                @include('shared.input', [
                    'name' => 'date_depart',
                    'type' => 'date',
                    'label' => 'Date de départ',
                    'class' => 'col', 
                    'value'  =>  $gestion->exists ? $gestion->date_depart : ''])
                <button class="btn btn-primary col">Valider</button>
            </div>
        </fieldset>
    </form>
    @endforeach
@endsection