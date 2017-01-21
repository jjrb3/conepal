<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Message;

class EnvioContacto extends Mailable
{
    public $total = 30;

    use Queueable, SerializesModels;

    public function __construct()
    {

    }

    public function build()
    {
        $address = 'info@conipal.com.co';
        $name = 'CONIPAL - Info';
        $subject = 'Consulta';

        return $this->view('email.contacto')
            ->from($address, $name)
            ->cc($address, $name)
            ->bcc($address, $name)
            ->replyTo($address, $name)
            ->subject($subject);
    }
}
