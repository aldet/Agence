<?php

namespace App\Http\Requests;

use App\Client;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ClientRequest extends FormRequest
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
        $client = $this->route()->parameter('client');

        return [
            'nom_client'  => ['required', 'min:2', 'max:255'],
            'prenom'      => ['required', 'min:2', 'max:255'],
            'email'       => [
                'email:rfc',
                Rule::unique('App\Client', 'email')->ignore($client),
            ],
            'num_permis'  => ['nullable', 'min:6', 'max:30'],
            'telephone'   => ['nullable', 'min:10', 'max:50'],
            'code_postal' => ['nullable', 'min:4', 'max:50'],
            'pays'        => ['required', 'min:3', 'max:255'],
        ];
    }
}
