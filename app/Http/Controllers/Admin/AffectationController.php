<?php

namespace App\Http\Controllers\Admin;

use App\Models\Personne;
use App\Models\Eglise;
use Illuminate\Http\Request;
use App\Models\Affectation;
use App\Http\Controllers\Controller;

class AffectationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasteurs = new Personne();
        return view('admin.affectation.index', ['affectations'=>Affectation::orderBy('created_at', 'desc')->get(), 'pasteurs'=>$pasteurs->isPasteur()->get(), 'eglises'=>Eglise::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Affectation::create($request->input())->eglise;
        $eglise = Eglise::find($request->input('eglise_arrivee_id'));
        $eglise->personne_id = ($request->input('personne_id'));
        $eglise->save();
        return redirect(route('affectation.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Affectation  $affectation
     * @return \Illuminate\Http\Response
     */
    public function show(Affectation $affectation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Affectation  $affectation
     * @return \Illuminate\Http\Response
     */
    public function edit(Affectation $affectation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Affectation  $affectation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Affectation $affectation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Affectation  $affectation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Affectation $affectation)
    {
        $affectation->destroy($affectation->id);
        return redirect(route('affectation.index'));
    }
}
