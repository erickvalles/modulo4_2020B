<?php

namespace App\Listeners;

use App\Events\ProductoCreado;
use App\Mail\ProductoCreadoMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendMailProductoCreado
{
   
    /**
     * Handle the event.
     *
     * @param  ProductoCreado  $event
     * @return void
     */
    public function handle(ProductoCreado $event)
    {
        Mail::to(auth()->user())->send(new ProductoCreadoMail($event->producto));
    }
}
