<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactMail;

class PortfolioController extends Controller
{
    /**
     * Affiche la page principale du portfolio.
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Traite l'envoi du formulaire de contact.
     * Valide les données, envoie l'email et redirige avec un message.
     */
    public function sendContact(Request $request)
    {
        // 1. Validation des champs du formulaire
        $validated = $request->validate([
            'name'    => 'required|string|min:2|max:100',
            'email'   => 'required|email|max:150',
            'subject' => 'required|string|min:3|max:200',
            'message' => 'required|string|min:10|max:5000',
        ], [
            // Messages d'erreur en français
            'name.required'    => 'Le nom est obligatoire.',
            'name.min'         => 'Le nom doit contenir au moins 2 caractères.',
            'email.required'   => 'L\'adresse email est obligatoire.',
            'email.email'      => 'Veuillez entrer une adresse email valide.',
            'subject.required' => 'Le sujet est obligatoire.',
            'subject.min'      => 'Le sujet doit contenir au moins 3 caractères.',
            'message.required' => 'Le message est obligatoire.',
            'message.min'      => 'Le message doit contenir au moins 10 caractères.',
        ]);

        try {
            // 2. Envoi de l'email via la classe Mail
            Mail::to('koebibasile5@gmail.com')
                ->send(new ContactMail($validated));

            // 3. Redirection avec message de succès
            return redirect()
                ->route('home')
                ->with('success', 'Votre message a bien été envoyé ! Je vous réponds sous 24 heures.')
                ->withFragment('contact'); // revient sur #contact

        } catch (\Exception $e) {
            // 4. En cas d'erreur, on log et on redirige avec erreur
            Log::error('Erreur envoi email contact : ' . $e->getMessage());

            return redirect()
                ->route('home')
                ->with('error', 'Une erreur est survenue lors de l\'envoi. Essayez via WhatsApp.')
                ->withFragment('contact')
                ->withInput();
        }
    }
}
