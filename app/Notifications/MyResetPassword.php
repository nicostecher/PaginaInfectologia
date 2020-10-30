<?php

namespace App\Notifications;

/*use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;*/
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\ResetPassword;

class MyResetPassword extends ResetPassword
{


    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject("recuperar Contraseña")
                    ->greeting("hola")
                    ->line('Estas recibiendo este Correo porque hiciste una solicitud de recuperación de Contraseña')
                    ->action('Recuperar contraseña', route('password.reset', $this->token))
                    ->line('Si no realizaste est solicitud, no se requiere ninguna otra acción.')
                    ->salutation("Enfermedades Infecciosas Hospital de Clínicas José de San Martín Facultad de Medicina - Universidad de Buenos Aires.");
    }

    
}
