<?php

namespace App\Notifications;

// Importamos el modelo que vamos a ocupar
use App\Models\MetodoPago;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewImportMetodoPagoNotification extends Notification
{
    use Queueable;

    private $importar;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(MetodoPago $importar)
    {
        //
        // Hacemos referencia al importar que tenemos como parametro
        $this->importar = $importar;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Hola, nuevos datos a la tabla "Método pago" se han importado.')
                    // Este action es un botón
                    ->action('Puedes visualizar los nuevos datos dando clic acá.', route('metodoPago.index', $this->importar))
                    ->line('Thank you for using our application!');
    }


    
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
