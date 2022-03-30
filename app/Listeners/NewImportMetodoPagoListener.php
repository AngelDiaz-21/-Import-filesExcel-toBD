<?php

namespace App\Listeners;

// Importamos el evento
use App\Models\User;

// Importamos el modelo de User para ocuparlo en la consulta
use App\Events\NewImportMetodoPagoEvent;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewImportMetodoPagoNotification;

class NewImportMetodoPagoListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    // Colocamos el evento
    // O sea, el $event va a estar recibiendo el NewImportMetodoPagoEvent
    public function handle(NewImportMetodoPagoEvent $event)
    {
        //Hacemos una consulta para los administradores y que se les envie un correo cuando se registren los nuevos datos
        // Ejemplo: Este ejemplo se hace una consulta en donde se seleccionan todos los usuarios que tengan como rol el id 1, que en este caso son administradores
        // $admins = User::whereHas('roles', function ($query){
        //     $query->where('id', 1);
        // });

        // Seleccionamos solo a un usuario
        $admin = User::whereHas('name', function ($query){
            $query->where('id', 2);
        })->get();

        // Ejecutamos la notificacion que hemos creado previamente
        // Como primer parametro recibe la consulta que hicimos anteriormente y como segundo parametro recibe el nombre de la notificacion y este estaba recibiendo un parametro
        Notification::send($admin, new NewImportMetodoPagoNotification($event->importar));


    }
}
