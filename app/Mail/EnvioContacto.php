<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Message;

use Illuminate\Http\Request;

class EnvioContacto extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {

    }

    public function build(Request $request)
    {
        $address = 'info@conipal.com.co';
        $name = 'CONIPAL - Info';
        $subject = 'Consulta';


        return $this->view('email.contacto',['nombre'=>$request->get('nombre'),
                                             'email'=>$request->get('email'),
                                             'telefono'=>$request->get('telefono'),
                                             'mensaje'=>$request->get('mensaje')])
            ->from($address, $name)
            ->cc($address, $name)
            ->bcc($address, $name)
            ->replyTo($address, $name)
            ->subject($subject);
    }
}
