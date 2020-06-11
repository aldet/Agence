<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiculeRequest extends FormRequest
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
            'nom'               => ['required', 'min:2', 'max:255'],
            'num_matriculation' => ['required', 'min:2', 'max:30'],
            'km_compteur'       => ['required', 'min:2', 'max:30'],
            'date_achat'        => ['nullable'],
            'photo_vehicule'    => ['nullable'],
            'carte_grise'       => ['nullable']
        ];
    }
}
