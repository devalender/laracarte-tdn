<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesmessages extends Model
{
/*	protected $casts = [
    'created_at' => 'datetime:Y-m-d',
    'updated_at' => 'datetime:Y-m-d'
  ];*/

  public $timestamps = false;
    
 
 protected $fillable=[
'nom',
'email',
'messages'
	];


/*utliser pour faire une navigation a partir du slug*/
/*public function getRouteKeyName()
    {
        return 'slug';
    }*/


/*utliser pour capter les evenements eleoquent exemples: creating - created*/
/*protected static function boot()
    {
        parent::boot();
        static::creating(function($magasin){
        	$magasin->slug = str::slug($magasin->nomagasin);

        });
    }*/
}
