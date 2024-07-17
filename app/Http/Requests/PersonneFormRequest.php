<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonneFormRequest extends FormRequest
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
            'nom' => ['required', 'min:5', 'string'],
            'prenom' => ['required', 'min:2', 'string'],
            'lieu_id' => ['required', 'numeric'],
            'fonction_id' => ['required', 'numeric'],
            'image'=>['image']
        ];
    }
}
