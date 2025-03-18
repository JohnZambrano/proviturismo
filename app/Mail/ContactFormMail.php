<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData; // Propiedad pública para acceder a los datos en la vista del correo

    /**
     * Create a new message instance.
     */
    public function __construct(array $formData)
    {
        $this->formData = $formData; // Asigna los datos recibidos a la propiedad
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nuevo mensaje del formulario de contacto web', // Asunto del correo
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contacto', // Vista Blade para el cuerpo del correo (crear en el siguiente paso)
            with: [ // Datos que se pasarán a la vista del correo
                'nombre' => $this->formData['nombre'],
                'apellido' => $this->formData['apellido'],
                'email' => $this->formData['email'],
                'mensaje' => $this->formData['mensaje'],
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return []; // No adjuntos por ahora
    }
}