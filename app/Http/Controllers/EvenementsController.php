<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evenement;

class EvenementsController extends Controller
{
 public function show() {
    	 /* CREATION ELOQUENT*/
	/*Evenement::create([
'nom'=>'Match de BASKET  SAO-ASEC MIMOSA',
'description'=>' Macth de Gala',
'localisation'=>'Au Palais des Sports de Treichville',
'datedebut'=> new dateTime('+5 days'),
'leprix'=>'0'

	]);*/
/* SUPPRESSION*/

/*Evenement::destroy('1');*/
/*Evenement::destroy(['1','2']);*/


/*SELECTION */

$evenements=Evenement::all();
	
return view('Pages/mesevenements')->withEvenements($evenements);

    }
}
