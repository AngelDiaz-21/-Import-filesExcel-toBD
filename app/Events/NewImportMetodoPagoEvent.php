<?php

namespace App\Events;

// Importamos el modelo que vamos a ocupar
use App\Models\MetodoPago;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewImportMetodoPagoEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    // Vamos a estar trabajando con la informacion del Método de pago
    public $importar;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    // Colocamos una variable y el modelo a ocupar
    public function __construct(MetodoPago $importar)
    {
        //
        // Hacemos referencia al importar que tenemos como parametro
        $this->importar = $importar;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
