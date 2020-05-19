<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Utilisateur extends Model {

	public $timestamps = false;
	protected $fillable=[
'codecaides',
'paliercaides',
'nom',
'prenoms',
'adresse',
'monemail',
'telephone',
'uti_login',
'uti_password',
'statut_compte',
'fkgroups_id',
'fkpalier'
	];


};