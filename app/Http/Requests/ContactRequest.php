<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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

         'name' => 'required|min:3',
         'email' => 'required|email',
         'messages' => 'required|min:10'
        ];
    }

        public function messages()
    {
        return [

              'name.required'=>'Le nom complet est obligatoire',
              'name.min'=>'Le nombre minimun de caratères pour le nom complet et de 3',
              'email.required'=>'Adresse email est obligatoire',
              'messages.min'=>'Le nombre minimun de caratères pour le message et de 10',
              'messages.required'=>'Le message est obligatoire',
           //
        ];
    }
}
