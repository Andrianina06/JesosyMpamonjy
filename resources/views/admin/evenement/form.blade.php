@extends('base')
@section('title', $evenement->exists ? 'Editer l\'évènement' : 'Ajouter un évènement')
@section('content')
<h1>@yield('title')</h1>
<form action="{{  $evenement->exists ? route('evenement.update', ['evenement'=>$evenement]) : route('evenement.store') }}" method="post">
    @csrf
    @method($evenement->exists ? 'patch' : 'post')
    <div class="row">
        @include('shared.select', ['name'=>'exemple_evenement_id','label'=>'Evènement','class'=>'col', 'options'=>$exemples,'valueId'=>$evenement->exemple_evenement_id, 'value'=>'exemple'])
        @include('shared.select', ['name'=>'lieu_id','label'=>'Lieu','class'=>'col', 'options'=>$lieux,  'value'=>'lieu', 'valueId'=>$evenement->lieu_id, 'secValue'=>'lieu'])
        @include('shared.input', ['name'=>'duree_du_trajet','label'=>'Durée du trajet','class'=>'col', 'value'=>$evenement->duree_du_trajet])
        @include('shared.select', ['name'=>'personne_resp_id','label'=>'Pasteur','class'=>'col', 'options'=>$pasteurs,'valueId'=>$evenement->personne_resp_id, 'value'=>'prenom'])
    </div>
    <div class="row">
        @include('shared.input', ['name'=>'date_debut','label'=>"Debut de l'évènement",'type'=>'date','class'=>'col', 'value'=>$evenement->date_debut])
        @include('shared.input', ['name'=>'date_fin','label'=>"Fin de l'évènement",'type'=>'date','class'=>'col', 'value'=>$evenement->date_debut])
    </div>
    <div class="row">
        @include('shared.select', ['name'=>'equipe_musicien_id','label'=>"Equipe musicien",'type'=>'date','class'=>'col','options'=>$musiciens,'value'=>'lieu','valueId'=>$evenement->equipe_musicien_id,'secValue'=>'lieu'])
        @include('shared.select', ['name'=>'equipe_cuisine_id','label'=>"Equipe cuisine",'type'=>'date','class'=>'col','options'=>$cuisiniers,'value'=>'lieu','secValue'=>'lieu','valueId'=>$evenement->equipe_cuisine_id])
        @include('shared.select', ['name'=>'equipe_videaste_id','label'=>"Equipe videaste",'type'=>'date','class'=>'col','options'=>$videastes,'value'=>'lieu','secValue'=>'lieu','valueId'=>$evenement->equipe_videaste_id])
    </div>
    <div class="row">
        @include('shared.input', ['name'=>'programme','type'=>'textarea','class'=>'col', 'value'=>$evenement->programme])    
        @include('shared.input', ['name'=>'approvisionnement','type'=>'textarea','class'=>'col', 'value'=>$evenement->approvisionnement])    
    </div>
    <div class="row">
        @include('shared.select', ['name'=>'vehicules','label'=>'Vehicules', 'options'=> $vehicules, 'multiple'=>true, 'valueId' => $evenement->vehicules()->pluck('id')])
    </div>
    @if ($evenement->exists)
        @include('shared.checkbox', ['name'=>'passe', 'label'=>'Passé'])
    @endif
    <button class="btn btn-primary mt-2">Ajouter</button>
</form>    
@endsection

