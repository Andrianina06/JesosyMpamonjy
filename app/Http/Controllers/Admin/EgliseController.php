<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lieu;
use App\Models\Eglise;
use App\Models\Personne;
use App\Http\Controllers\Controller;
use App\Http\Requests\EgliseFormController;

class EgliseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.eglise.index', ['eglises'=>Eglise::all(), 'pasteurs'=>Personne::select('prenom', 'id')->isPasteur()->get(), 'lieux'=>Lieu::all()]);
    }

    public function create(){
        return view('admin.eglise.form', ['pasteurs'=>Personne::select('prenom', 'id')->isPasteur()->get(), 'lieux'=>Lieu::all(), 'eglise'=>new Eglise()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EgliseFormController $request)
    {
        $data = $request->validated();
        $image = $request->validated()['image'];
        $imagePath = $image->store('images/eglise', 'public');
        $imagePath = $imagePath.'/'.$request->validated()['lieu_id'];
        $data['image'] = $imagePath;
        Eglise::create($data);
        return redirect(route('eglise.index'));
    }
    
    public function edit(Eglise $eglise){
        return view('admin.eglise.form', ['pasteurs'=>Personne::select('prenom', 'id')->isPasteur()->get(), 'lieux'=>Lieu::all(), 'eglise'=>$eglise]);
    }
        
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Admin\Eglise  $eglise
         * @return \Illuminate\Http\Response
         */
    public function update(EgliseFormController $request, Eglise $eglise)
    {
        $data = $request->validated();
        $image = $request->validated()['image'];
        $imagePath = $image->store('images/eglise', 'public');
        $data['image'] = $imagePath;
        $eglise->update($data);
        return redirect(route('eglise.index'));
    }
    
    public function destroy(Eglise $eglise)
    {
        $eglise->destroy($eglise->id);
        return redirect(route('eglise.index'));
    }
}
