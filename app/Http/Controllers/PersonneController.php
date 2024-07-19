<?php

namespace App\Http\Controllers;

use App\Models\Lieu;
use App\Models\Fonction;
use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PersonneFormRequest;

class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('personne.index', ['personnes'=>Personne::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personne.form', ['personne'=>new Personne(), 'fonctions'=>Fonction::all(), 'lieux'=>Lieu::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonneFormRequest $request)
    {   
        $data = $request->validated();
        /** @var UploadedFile|null $image */
        $image = $request->file('image');
        $imagePath = $image->store('image');
        $data["image"] = $imagePath;
        Personne::create($data);
        return Redirect::route('personne.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personne  $personne
     * @return \Illuminate\Http\Response
     */
    public function edit(Personne $personne)
    {
        return view('personne.form', ['personne'=>$personne, 'lieux'=>Lieu::all(), 'fonctions'=>Fonction::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personne  $personne
     * @return \Illuminate\Http\Response
     */
    public function update(PersonneFormRequest $request, Personne $personne)
    {
        $personne->update($request->validated());
        return Redirect::route('personne.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personne  $personne
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personne $personne)
    {
        $personne->destroy($personne->id);
        return Redirect::route('personne.index');
    }
}
