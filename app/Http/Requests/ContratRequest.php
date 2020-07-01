<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContratRequest extends FormRequest
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
          
            'date_depart'        => ['nullable'],
            'date_retour_prevu'        => ['nullable'],
            'date_retour'        => ['nullable'],
            'km_depart'        => ['nullable'],
            'montant_accompte'        => ['nullable'],
            'montant_journalier'        => ['required','min:2','max:30'],
            
        ];
    }
}
