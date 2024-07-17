<?php

namespace App\Http\Controllers\Admin;

use App\Models\Etats;
use App\Models\Vehicule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\VehiculeFormRequest;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.vehicule.index', ['vehicules'=>Vehicule::all()]);
    }

    public function create(){        
        return view("admin.vehicule.form",['vehicule'=>new Vehicule(), 'etats'=>Etats::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehiculeFormRequest $request)
    {
        Vehicule::create($request->validated());
        return redirect(route('vehicule.index'));
    }
    
    public function edit(Vehicule $vehicule) {
        return view("admin.vehicule.form",['vehicule'=> $vehicule, 'etats'=>Etats::all()]);
    }
       
    public function update(VehiculeFormRequest $request, Vehicule $vehicule)
    {
        $vehicule->update($request->validated());
        return redirect(route('vehicule.index'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicule $Vehicule)
    {
        $Vehicule->destroy($Vehicule->id);
        return redirect(route('vehicule.index'));
    }
}
