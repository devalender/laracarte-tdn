<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    //
 
 protected $casts = [
    'datedebut' => 'datetime:d/m/Y H:i',
    'created_at' => 'datetime:Y-m-d',
    'updated_at' => 'datetime:Y-m-d'
    
];

 protected $fillable=[
'nom',
'description',
'localisation',
'datedebut',
'leprix'
	];

public function isFree()
{

	return $this->leprix==0;
}

}
