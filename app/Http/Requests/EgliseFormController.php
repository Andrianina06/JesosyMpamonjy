<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EgliseFormController extends FormRequest
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
            'lieu_id'=>['required', 'numeric'],
            'longitude'=>['required', 'numeric'],
            'latitude'=>['required', 'numeric'],
            'dimension'=>['required', 'numeric'],
            'capacite'=>['required', 'numeric'],
            'personne_id'=>['required', 'numeric'],
            'image'=>['image', 'max:5000']
        ];
    }
}
