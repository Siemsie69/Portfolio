<?php

use Illuminate\Support\Facades\Route;
use App\Mail\Email;

// Import the correct Mailable class
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/send-contact-email', function (Illuminate\Http\Request $request) {
    // Validate form data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    // Send the email
    Mail::to('siemvanbree2006@gmail.com')->send(new Email($validatedData));

    // Redirect back to the contact section with success message
    return redirect('/#contact')->with('success', 'Your message has been sent successfully!');
});
