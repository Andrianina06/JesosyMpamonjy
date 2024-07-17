<?php

namespace App\Http\Controllers\Admin;

use App\Models\Fonction;
use App\Http\Controllers\Controller;
use App\Http\Requests\FonctionFormRequest;

class FonctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.fonction.index', ['fonctions'=>Fonction::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FonctionFormRequest $request)
    {
        Fonction::create($request->validated());
        return redirect(route('fonction.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fonction $fonction)
    {
        $fonction->destroy($fonction->id);
        return redirect(route('fonction.index'));
    }
}
