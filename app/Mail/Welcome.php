<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User ;

class Welcome extends Mailable
{
    use Queueable, SerializesModels;

    Public $user ;

    public function __construct(User $user)
    {
        $this->user =$user ;
    }




    public function build()
    {
    return $this->view('mails.welcome');
    }
}
