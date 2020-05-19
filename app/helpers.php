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

	
