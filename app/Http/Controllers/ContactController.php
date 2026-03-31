<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'lastName' => ['required', 'string', 'max:100'],
            'firstName' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:30'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:120'],
            'surface' => ['required', 'integer', 'min:5', 'max:20000'],
            'propertyType' => ['nullable', 'string', 'max:50'],
            'bedrooms' => ['required', 'string', 'max:10'],
            'bathrooms' => ['required', 'string', 'max:10'],
            'capacity' => ['required', 'integer', 'min:1', 'max:200'],
            'message' => ['nullable', 'string', 'max:2000'],
        ]);

        // Ici tu pourras plus tard: email, DB, CRM, etc.
        // Pour l’instant on confirme juste la réception.
        return back()
            ->withInput([])
            ->with('success', 'Merci ! Votre demande a bien été envoyée. Nous vous répondrons sous 24h.');
    }
}

