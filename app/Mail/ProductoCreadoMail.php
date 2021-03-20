<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProductoCreadoMail extends Mailable
{
    use Queueable, SerializesModels;

    private $producto;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($producto)
    {
        $this->producto = $producto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.producto_creado_email',['producto'=>$this->producto]);
    }
}
