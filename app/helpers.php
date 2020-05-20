<?php

if (! function_exists('format_price')) {

function format_price ($event){
if($event->isFree() ){
	return '<strong>GRATUIT</strong>';
}else {
	return $event->leprix . ' CFA';}
}}


if (! function_exists('flash')){

	function flash ($message, $type='success'){

		session()->flash('notification.message',$message);/*creation de message flash*/
        session()->flash('notification.type',$type);


	}	
}
/*fonction qui met le titre de la page passer lors de lappel du layaout*/
if (! function_exists('page_title')){

	function page_title ($title){

		$titrepage='Corwinci Application -Test';

		if($title===''){

			return $titrepage;

		}else{

		 return $title.' |'. $titrepage;

		}

	}	


}

/*fonction qui met d'activer le menu en cours dans la navbar*/
if (! function_exists('set_active_route')){

	function set_active_route ($route){

	return Route::is($route) ? 'active' : '';/*si c'est la route en question alors retourne active*/

	}	


}

	
