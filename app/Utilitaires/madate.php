<?php 

namespace App\Utilitaires;

use DateTime;

class madate {
	
public function IsWeekend()
{

/*return date('N') >= 6;*/
return (new DateTime)->format('N') >=6;

}

}













