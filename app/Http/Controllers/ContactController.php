<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'company' => 'required|string|max:100',
            'email'   => 'required|email|max:150',
            'phone'   => 'required|string|max:20',
            'message' => 'required|string|max:2000',
        ]);

        Mail::to(config('mail.contact_recipient'))->send(new ContactMail($validated));

        return response()->json(['message' => 'Mensaje enviado correctamente.']);
    }
}