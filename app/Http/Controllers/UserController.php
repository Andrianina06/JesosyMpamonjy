<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonneFormRequest;
use App\Models\Eglise;
use App\Models\Evenement;
use Illuminate\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('pages.index', ['evenements'=>Evenement::limit(4)->get(), 'eglises'=>Eglise::limit(4)->get()]);
    }

    public function getAllEvenement(){
        return view('pages.evenement.index', ['evenements'=>Evenement::all()]);
    }
    
    public function getAllEglise(){
        return view('pages.eglise.index', ['eglises'=>Eglise::all()]);
    }

    public function showEvenement(Evenement $evenement) : View {
        return view('pages.evenement.show', ['evenement'=>$evenement, 'eglise'=> Eglise::where('lieu_id', $evenement->lieu->id)->first()]);
    }

    public function showEglise(Eglise $eglise) : View {
        return view('pages.eglise.show',['eglise'=>$eglise]);
    }

    public function inscription(Evenement $evenement, PersonneFormRequest $request){
        
    }
}
