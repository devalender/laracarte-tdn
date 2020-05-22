<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\MailMessage;
use Illuminate\Support\Facades\Mail;
use MercurySeries\Flashy\Flashy;

use App\Mesmessages;



class ContactController extends Controller
{
       public function create()
    {
        
        return view('pages/contact');
       
    }

		public function store(ContactRequest $request) /*creer en base les donnees effectivement */
     		 {

         /* $message = new Mesmessages;

          $message->name=$request->name;
          $message->email=$request->email;
          $message->messages=$request->messages;
          $message->save();*/

         /*  $message = Mesmessages::create([
            'name'  => $request->nomagasin,
            'email'=> $request->localisation,
            'messages'=> $request->message
    ]);*/

          $message = Mesmessages::create($request->only('name','email','messages'));

          $mailable = new  MailMessage($message);

 	/*$mailable = new  MailMessage(
      		$request -> name,
      		$request -> email,
      		$request -> messages);*/

    /*   Mail::to(config('devalender@gmail'))->send($mailable);*/


       Mail::to(config('app.cheminmail'))->send($mailable);

      Flashy()->success('Nous vous repondrons dans les plus brefs délais !');

      return redirect()->route('home');

			}



}
