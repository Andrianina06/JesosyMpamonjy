@extends('base')
@section('title', $personne->exists ? 'Editez votre information' : 'S\'inscrire')
@section('content')
    <h1>@yield('title')</h1>
    <form action="{{ $personne->exists ? route('personne.update', ['personne'=>$personne]) : route('personne.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method($personne->exists ? 'patch' : 'post')
        <div class="row">
            <div class="col row">
                @include('shared.input', ['name'=>'nom', 'class'=>'col', 'value'=>$personne->nom])
                @include('shared.input', ['name'=>'prenom', 'class'=>'col', 'value'=>$personne->prenom])
            </div>
        </div>
        <div class="row">
            <div class="col row">
                @include('shared.select', ['name'=>'lieu_id','label'=>'Lieu','class'=>'col', 'options'=>$lieux,  'value'=>'lieu', 'valueId'=>$personne->lieu_id])
                @include('shared.select', ['name'=>'fonction_id','label'=>'Fonction','class'=>'col', 'options'=>$fonctions,'value'=>'libelle', 'valueId'=>$personne->fonction_id])
            </div>
        </div>
        <div class="row">
            @include('shared.input', ['name'=>'image', 'class'=>'col', 'label'=>'profil', 'type'=>'file'])
        </div>
        <button class="btn btn-primary mt-2">
            @if ($personne->exist)
                Modifier
            @else
                S'inscrire
            @endif
        </button>
    </form>
@endsection