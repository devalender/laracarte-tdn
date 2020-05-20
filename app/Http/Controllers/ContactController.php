<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
       public function create()
    {
        
        return view('pages/contact');
       
    }

    public function store(CreateMagasinFormRequest $request) /*creer en base les donnees effectivement */
      {
       
      /*  magasin::create([
            'nomagasin'  => $request->nomagasin,
            'localisation'=> $request->localisation
            /*'slug'=> str::slug($request->nomagasin*/ /*utilisation des evenements pour creer les slugs*/
   /* ]);*/
}

}
