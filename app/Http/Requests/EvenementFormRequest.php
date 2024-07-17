<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvenementFormRequest extends FormRequest
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
            'exemple_evenement_id' => ['required', 'integer'],
            'lieu_id' => ['required', 'integer'],
            'duree_du_trajet' => ['required', 'integer'],
            'personne_resp_id' => ['required', 'integer'],
            'date_debut' => ['required', 'date'],
            'date_fin' => ['required', 'date'],
            'equipe_musicien_id' => ['required', 'integer'],
            'equipe_cuisine_id' => ['required', 'integer'],
            'equipe_videaste_id' => ['required', 'integer'],
            'programme' => ['required', 'string', 'min:10'],
            'approvisionnement' => ['required', 'string', 'min:10'],
            'vehicules' => ['required', 'array'],
            'passe' => ['required', 'boolean']
        ];
    }
}
