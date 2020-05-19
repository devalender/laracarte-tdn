<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMagasinFormRequest extends FormRequest
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

              'nomagasin'=>'required|min:3',
              'localisation'=>'required|min:5',
              'slug'=>'required',
            //
        ];
    }

        public function messages()
    {
        return [

              'nomagasin.required'=>'Le Nom du magasin est obligatoire',
              'nomagasin.min'=>'Le nombre minimun de caratères est de :min pour le Nom du magasin',
              'localisation.required'=>'Le Zone géographique est obligatoire',
              'localisation.min'=>'Le nombre minimun de caratères est de :min pour la zone géographique',
              'slug.required'=>'Le Slug du magasin est obligatoire',
           //
        ];
    }
}
