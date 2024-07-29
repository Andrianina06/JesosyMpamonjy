<?php

namespace App\Http\Controllers;

use App\Http\Requests\EvenementPartantRequest;
use App\Models\EvenementPartant;

class EvenementPartantController extends Controller
{
    public function inscription(EvenementPartantRequest $request)
    {
        EvenementPartant::create($request->validated());
    }
}