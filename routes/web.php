<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\mail\MailMessage;

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
/*****************************************************************************/
/*Route::get('/', [

		'as'=>'home', nom de la route
		'uses'=>'PagesController@home'action a utliser
	]);
*/



Route::view('/acceuil','pages.acceuil')->name('acceuil');
/*on peux donc supprimer le controler pagecontroller
/******************************************************************************/

/**********************************************************************/
/*Route::get('/about', [

		'as'=>'about',nom de la route
		'uses'=>'PagesController@about'action a utliser
	]);
*/
Route::view('/about','pages.about')->name('about');
/*on peux donc supprimer le controler pagecontroller

/***********************************************************************/

/***********************************************************************/
/*route pour l'appel du formulaire contact*/
/*Route::get('/contact', [

		'as'=>'contact',
		'uses'=>'ContactController@create'
	]);
*/
Route::get('/contact','ContactController@create')->name('contact');
/***********************************************************************/

/**************************************************************************/
/*pour la validation zt l'envoi des données du formulaires*/
/*Route::post('/contact', [

		'as'=>'contact',
		'uses'=>'ContactController@store'
	]);
*/
Route::post('/contact','ContactController@store')->name('contact');
/***************************************************************************/
/* route pour tester le retour du mail avec markdows*/
Route::get('/monemail',function(){

	return new MailMessage(
		'devalender',
		'devalender@gmail.com',
		'Soyez les Bienvenues' );
});

/*activer la verification de Emails*/

Route::get('/', 'HomeController@index')->name('acceuil');

Auth::routes([
  'register' => true,
  'verify' => true,
  'reset' => false
]);