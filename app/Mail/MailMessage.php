<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Mesmessages;

/* on ajoute le implement ShouldQueue pour pouvoir envoyer et mettre en meme temps dans la file d'attente*/
class MailMessage extends Mailable /* implements ShouldQueue */
{
    use Queueable, SerializesModels;

    /*public $name;
    public $email;
    public $messages;*/

    public $msg;

    /*
     * Create a new message instance.
     *
     * @return void
     */

    /*public function __construct($name,$email,$messages)
    {
        $this -> name  =$name;
        $this -> email =$email;
        $this -> messages =$messages;
    }*/
    
    public function __construct(Mesmessages $msg)
    {
       /* $this -> name  =$name;
        $this -> email =$email;
        $this -> messages =$messages;*/

       $this -> msg  =$msg;
    }

    /*
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from ($this->msg->email, $this->msg->name)
                    ->markdown('pages.mailtemplate');
    }
}
