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

        /*  $message = new Mesmessages;
          $message->name=$request->name;
          $message->email=$request->email;
          $message->messages=$request->messages;
          $message->save();*/

      /*   $message = Mesmessages::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'messages'=> $request->messages
    ]);*/

          $message = Mesmessages::create($request->only('name','email','messages'));

          $mailable = new MailMessage($message); /*Creation du mailable*/

          /*$when = now()->addMinutes(0);*/

 	/*$mailable = new  MailMessage(
      		$request -> name,
      		$request -> email,
      		$request -> messages);*/

    /*   1-Mail::to(config('devalender@gmail'))->send($mailable);*/

    /* 2-   Mail::to(config('app.cheminmail'))->send($mailable);*/

      /* mettre dans une file d'attente avant d'envoyer si implements ShouldQueue n'est pas activé dans la mailable */

      /*Mail::to(config('app.cheminmail'))
            ->queue($mailable);*/

/* mettre dans une file d'attente et envoyer dans 1 mn si implements ShouldQueue est activé dans la mailable */

             Mail::to(config('app.cheminmail'))
            ->send($mailable);
            /*->later($when, $mailable);*/

      Flashy()->success('Nous vous repondrons dans les plus brefs délais !');

      return redirect()->route('acceuil');

			}



}
