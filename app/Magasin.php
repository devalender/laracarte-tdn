<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Magasin extends Model
{
    //

    public $timestamps = false;
    
    protected $fillable=[
'nomagasin',
'localisation',
'slug'
	];

/*utliser pour faire une navigation a partir du slug*/
/*public function getRouteKeyName()
    {
        return 'slug';
    }*/


/*utliser pour capter les evenements eleoquent exemples: creating - created*/
protected static function boot()
    {
        parent::boot();
        static::creating(function($magasin){
        	$magasin->slug = str::slug($magasin->nomagasin);

        });
    }

}
