<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::post('/contact', function (\Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    // Pour l'instant on log, on branchera Mailable ensuite si tu veux
    \Log::info('Nouveau message contact', $validated);

    return back()->with('success', 'Message envoyé avec succès !');
})->name('contact.send');