<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMagasinFormRequest;
use App\Http\Requests\UpdateMagasinFormRequest;
use MercurySeries\Flashy\Flashy;
use App\Magasin;
use Illuminate\Support\Str;


class MagasinsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        /* $magasins=Magasin::all();*//*affiche une collection avec toutes les elements*/
         $magasins=Magasin::paginate(10);/*affiche trois elements par pages*/

         return view('magasins.index', compact('magasins'));/*compact permet de passer la variables $magasins a la vue*/
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('magasins.create');/* cette route permet d'appeler le formulaire de creation*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMagasinFormRequest $request) /*creer en base les donnees effectivement */
      {
       
        magasin::create([
            'nomagasin'  => $request->nomagasin,
            'localisation'=> $request->localisation
            /*'slug'=> str::slug($request->nomagasin*/ /*utilisation des evenements pour creer les slugs*/
    ]);
        /* Avec le package Flashy*/
        /* Flashy::message('Welcome Aboard!', 'http://your-awesome-link.com');*/

       Flashy()->success('Magasin Créer avec succes!');

      /*creation de message flash*/
      /*  session()->flash('notification.message','Magasin Créer avec succes!');
        session()->flash('notification.type','success');*/
    /* on pouvait utiiser aussi les facades session::flash*/

        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $magasins=Magasin::findOrFail($id);

         return view('magasins.show', compact('magasins'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    
    $magasins=Magasin::findOrFail($id);    
    return view('magasins.edit', compact('magasins'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMagasinFormRequest $request, $id)
    {
        
         $magasins=Magasin::findOrFail($id); /*Recherche lélément a modifier*/   

         $magasins->update([
            'nomagasin'  => $request->nomagasin,
            'localisation'=> $request->localisation,
             'slug'=> str::slug($request->nomagasin)
        ]);

         Flashy()->success(sprintf("Magasin : %s modifier avec succes !", $magasins->nomagasin));

      /*  session()->flash('notification.message',sprintf("Magasin : %s modifier avec succes !", $magasins->nomagasin));
        session()->flash('notification.type','success');*/

        return redirect(route('magasins.show', $magasins->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function destroy($id)
    {
         magasin::destroy($id);
        return redirect(route('home'));
    }*/

      public function destroy(Magasin $magasin)/*Mettre le modèle suivit du paramère au niveau des routes*/
    { 

       $magasin->delete();
       Flashy()->error(sprintf("Magasin : %s supprimer avec succes !", $magasin->nomagasin));

       /*  session()->flash('notification.message',sprintf("Magasin : %s supprimer avec succes !", $magasin->nomagasin));
         session()->flash('notification.type','danger');*/

        return redirect(route('home'));
    }
}
