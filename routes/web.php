<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*Route::name('test2')->get('/monapli', 'MonaplisController@create');
Route::name('test3')->post('/monapli', 'MonaplisController@store');
Route::name('test4')->get('/monapli/{racc}','MonaplisController@show');

Route::name('test5')->get('/mesevenements', 'EvenementsController@show');*/


/*Route::get('/welcome', function () {
    return view('welcome');
});*/

/*Route::resource('magasins', 'MagasinsController');*/

/* route qui permet d'afficher la pge d'acceuil en utlisant la methode index*/
/*Route::get('/', [

		'as'=>'home',/*nom de la route*/
	/*	'uses'=>'MagasinsController@index'/*action a utliser*/
/*	]);*/

Route::get('/', [

		'as'=>'home',/*nom de la route*/
		'uses'=>'PagesController@home'/*action a utliser*/
	]);


Route::get('/about', [

		'as'=>'about',/*nom de la route*/
		'uses'=>'PagesController@about'/*action a utliser*/
	]);

Route::get('/contact', [

		'as'=>'contact',/*nom de la route*/
		'uses'=>'ContactController@create'/*action a utliser*/
	]);


/* ON PEUT RESTREINDRE LES ACTIONS*/
/*Route::resource('magasins', 'MagasinsController', ['only' => [
'index','show'
]]);

Route::resource('magasins', 'MagasinsController', ['except' => [
'create','store','upadte','destroy'
]]);*/

/* ON PEUT AUSSI NOMMES LES ACTIONS et LE NOM DES PARAMETRES*/
/*Route::resource('magasins', 'MagasinsController', [

'names' => [
'index' => 'mesmagasin' ,
'show' => 'unmagasin'
],
'parameters' => [
'magasins' => 'mag'

]

]);*/

