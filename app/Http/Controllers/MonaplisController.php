<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Utilisateur;
use App\Evenement;
use App\Chemin;

class MonaplisController extends Controller
{
    //
     public function create() {
    	  return view('Pages/monapli');
    }
    	/* Validation des données*/

     /*public function store() ligne 18 et 20 sont pareille{*/

     	public function store(Request $request) {

     	/*$madonne=request('url_name'); ligne 22 et 24 sont pareilles*/
     	/*$madonne=$request->get('url_name'); ligne 24 et 26 sont pareilles*/

     	$madonne=$request->url_name;
        $data=['url_name' => $madonne];

        /*facade validator et sa methode make*/
        /*Validator::make($data,['url_name' => 'required|url'])->validate(); ligne 30 et 33 sont pareilles*/
        /*cette methode et presente dans les controleur elle permet de valider des données*/

         $this->validate($request, ['url_name' => 'required|url']);
         /*si la validation ne passe pas on rediriger vers la page precedente*/

        /*on verifie dans la base si le raccourci exixte et on l'affiche*/
        /*$chemin=Chemin::whereUrlnormale(request('url_name'))->first();*/
        $chemin=Chemin::where('urlnormale',$madonne)->first();
         if($chemin) {
         /*return view('Pages/resultat')->with('urlmodifier',$chemin->urlmodifier);*/
         return view('Pages/resultat')->withUrlmodifier($chemin->urlmodifier);
         }
        /* si cette url ne fonctionne pas alors on la créer*/
         $newcreation=Chemin::create([
         'urlnormale'=> $madonne,
         'urlmodifier'=>chemin::getUniqueShortUrl()
	      ]);
         /* si l'url à été créer on la retourne*/
        if($newcreation){
        return view('Pages/resultat')->withUrlmodifier($newcreation->urlmodifier);
        }else{
	    return redirect('/Pages/uneattention');
        }
      }


    public function show($racc) {

    	/*$chemin=Chemin::whereUrlmodifier($racc)->first();*/
    	/* fail leve une exception de type modelnotfoundexeception*/
    	$chemin=Chemin::whereUrlmodifier($racc)->firstOrFail();
    	return redirect($chemin->urlnormale);
    	

  /*  if($chemin) {ou encore redirect::to
    return redirect($chemin->urlnormale);
     }else{
	return redirect('/monapli');
    }
*/

      }

 }
