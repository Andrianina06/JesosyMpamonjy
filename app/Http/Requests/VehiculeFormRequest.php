<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiculeFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'marque' => ['required', 'string'],
            'description' => ['required', 'string'],
            'etat_id' => ['required', 'numeric'],
            'matricule' => ['required', 'string'],
            'contact' => ['required', 'string'],
            'nombre_de_place' => ['required', 'numeric']
        ];
    }
}
