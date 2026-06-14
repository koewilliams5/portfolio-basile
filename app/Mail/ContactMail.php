<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Les données du formulaire de contact.
     * On déclare la propriété public pour qu'elle soit
     * automatiquement disponible dans la vue email.
     */
    public array $contactData;

    /**
     * Constructeur : reçoit les données validées du formulaire.
     */
    public function __construct(array $contactData)
    {
        $this->contactData = $contactData;
    }

    /**
     * L'objet de l'email (ce qui apparaît dans la boîte de réception).
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            // L'email vient de la personne qui a rempli le formulaire
            replyTo: [
                new \Illuminate\Mail\Mailables\Address(
                    $this->contactData['email'],
                    $this->contactData['name']
                ),
            ],
            subject: '[Portfolio] ' . $this->contactData['subject'],
        );
    }

    /**
     * Le contenu de l'email — pointe vers la vue Blade.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
        );
    }
}
