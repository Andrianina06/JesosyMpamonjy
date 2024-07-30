<?php

namespace App\Http\Controllers;

use App\Http\Requests\EvenementPartantRequest;
use App\Models\EvenementPartant;

class EvenementPartantController extends Controller
{
    public function inscription(EvenementPartantRequest $request)
    {
        $evenement = EvenementPartant::where('user_id', $request->validated()['user_id'])->first();
        if ($evenement == null) {
            EvenementPartant::create($request->validated());
        }
    }
}