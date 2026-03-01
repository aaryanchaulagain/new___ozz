<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminContactNotification; // ← import the mailable

class ContactController extends Controller
{


public function submit(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'whatsapp' => 'required|string|max:20',
        'subject' => 'required|in:Enquiry,Appointment,Other',
        'message' => 'required|string',
       'g-recaptcha-response' => 'required|captcha',
        ], [
            'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
            'g-recaptcha-response.captcha' => 'Captcha verification failed, please try again.'
        ]);

    // Save contact
    $contact = Contact::create([
    'name' => $request->name,
    'email' => $request->email,
    'whatsapp' => $request->whatsapp,
    'subject' => $request->subject,
    'message' => $request->message,
    'status' => 'pending',
]);

    //  Notify admin
    Mail::raw(
        "New contact form submitted:\n\nName: {$contact->name}\nEmail: {$contact->email}\nMessage: {$contact->message}",
        function ($message) {
            $message->to('powerlaw35@gmail.com') // replace with your admin email
                    ->subject('New Contact Form Submission');
        }
    );

    return back()->with('success', 'Your message has been submitted successfully!');
}
}
