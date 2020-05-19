<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Chemin extends Model
{
    //
    protected $fillable=['urlnormale','urlmodifier'	];

    public static function getUniqueShortUrl(){

		$urlmodifier = Str::random(5);

		/*verifier dans la table kon na pas de racourcis retourner*/
		if(static::whereUrlmodifier($urlmodifier)->count() != 0){

			return static::getUniqueShortUrl();

		}
		return $urlmodifier;
	}

}
