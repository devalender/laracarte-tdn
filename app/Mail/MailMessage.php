<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Mesmessages;

class MailMessage extends Mailable
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
        return $this->markdown('pages.mailtemplate');
    }
}
