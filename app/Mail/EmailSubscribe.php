<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailSubscribe extends Mailable implements ShouldQueue
{



    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */


    public $name;
    public $picture;
    public $text;

    public function __construct($name,$picture,$text)
    {
      $this->name=$name;
      $this->picture=$picture;
      $this->text=$text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */



    public function build()
    {
        $name2= $this->name;
        $picture2= $this->picture;
        $text= $this->text;
        return $this->view('emails.email',compact('name2','picture2','text'));
    }
}
