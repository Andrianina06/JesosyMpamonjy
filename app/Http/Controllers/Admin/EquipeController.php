<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lieu;
use App\Models\Equipe;
use Illuminate\Http\Request;
use App\Models\EquipeFonction;
use App\Http\Controllers\Controller;
use App\Http\Requests\EquipeFormRequest;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.equipe.acceuil', ['musiciens'=>Equipe::where('equipe_fonction_id', '1')->get(),'videastes'=>Equipe::where('equipe_fonction_id', '3')->get(),'cuisiniers'=>Equipe::where('equipe_fonction_id', '2')->get(),'fonction'=>EquipeFonction::all(), 'lieux'=>Lieu::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EquipeFormRequest $request)
    {
        Equipe::create($request->validated());
        return redirect(route('equipe.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipe $equipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipe $equipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipe $equipe)
    {
        //
    }
}
