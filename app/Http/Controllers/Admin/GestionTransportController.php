<?php

namespace App\Http\Controllers\Admin;

use App\Models\GestionTransport;
use App\Http\Controllers\Controller;
use App\Http\Requests\GestionTransportFormRequest;
use App\Models\Evenement;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class GestionTransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Evenement $evenement)
    {
        return view('admin.gestionTransport.index', ['evenement'=>$evenement, 'gestions'=>GestionTransport::where('evenement_id', $evenement->id)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Evenement $evenement)
    {
        return view('admin.gestionTransport.form',['evenement'=>$evenement, 'gestion'=>new GestionTransport()] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GestionTransportFormRequest $request, Evenement $evenement)
    {
        GestionTransport::create($request->validated());
        return redirect(route('gestion.index', $evenement));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GestionTransport  $gestionTransport
     * @return \Illuminate\Http\Response
     */
    public function edit(Evenement $evenement, GestionTransport $gestion)
    {
        return view('admin.gestionTransport.form',['evenement'=>$evenement, 'gestion'=>$gestion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GestionTransport  $gestionTransport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GestionTransport $gestionTransport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GestionTransport  $gestionTransport
     * @return \Illuminate\Http\Response
     */
    public function destroy(GestionTransport $gestionTransport)
    {
        //
    }
}
