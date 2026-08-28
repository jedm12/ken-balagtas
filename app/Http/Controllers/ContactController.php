<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        Mail::raw(
            "Name: {$validated['name']}\nEmail: {$validated['email']}\n\n{$validated['message']}",
            function ($mail) use ($validated) {
                $mail->to(config('portfolio.email'))
                    ->replyTo($validated['email'], $validated['name'])
                    ->subject('Portfolio contact from '.$validated['name']);
            }
        );

        return back()->with('success', 'Thanks for reaching out! I\'ll get back to you soon.');
    }
}
