<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lieu;
use App\Models\Exemple;
use App\Models\Evenement;
use App\Http\Controllers\Controller;
use App\Http\Requests\EvenementFormRequest;
use App\Models\Eglise;
use App\Models\Equipe;
use App\Models\Personne;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.evenement.index', ['evenements'=>Evenement::all()]);
    }
    
    public function create(){
        return view("admin.evenement.form",[
            'exemples' => Exemple::all(),
            'evenement' => new Evenement(),
            'lieux' => Eglise::all(), 
            'pasteurs'=> Personne::select('prenom', 'id')->isPasteur()->get(), 
            'musiciens' => Equipe::select('id','lieu_id')->where('equipe_fonction_id', '1')->get(),
            'cuisiniers' => Equipe::where('equipe_fonction_id', '1')->get(), 
            'videastes' => Equipe::where('equipe_fonction_id', '3')->get(), 
            'vehicules' => Vehicule::pluck('marque', 'id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EvenementFormRequest $request)
    {
        $evenement = Evenement::create($request->validated());
        $evenement->vehicules()->sync($request->validated()["vehicules"]);
        return redirect(route('evenement.index'));
    }

    public function edit(Evenement $evenement) {
        return view("admin.evenement.form",[
            'exemples' => Exemple::all(), 
            'evenement' => $evenement, 
            'lieux' => Eglise::all(),
            'pasteurs' => Personne::select('prenom', 'id')->isPasteur()->get(), 
            'musiciens' => Equipe::select('id','lieu_id')->where('equipe_fonction_id', '1')->get(), 
            'cuisiniers' => Equipe::where('equipe_fonction_id', '1')->get(), 
            'videastes' => Equipe::where('equipe_fonction_id', '3')->get(), 
            'vehicules' => Vehicule::pluck('marque', 'id'),

        ]);
    }

    public function update(EvenementFormRequest $request,Evenement $evenement){
        $evenement->update($request->validated());
        $evenement->vehicules()->sync($request->validated()["vehicules"]);
        return redirect(route('evenement.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evenement $evenement)
    {
        $evenement->destroy($evenement->id);
        return redirect(route('evenement.index'));
    }
}
