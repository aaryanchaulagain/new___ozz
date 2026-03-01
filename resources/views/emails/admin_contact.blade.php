<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: sans-serif; line-height: 1.6; color: #333; }
        .container { width: 80%; margin: 20px auto; border: 1px solid #eee; padding: 20px; border-radius: 10px; }
        .header { border-bottom: 2px solid #3490dc; padding-bottom: 10px; margin-bottom: 20px; }
        .field { margin-bottom: 10px; }
        .label { font-weight: bold; color: #555; }
        .message-box { background: #f9f9f9; padding: 15px; border-left: 4px solid #3490dc; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Contact Submission</h2>
        </div>

        <div class="field"><span class="label">Name:</span> {{ $contact->name }}</div>
        <div class="field"><span class="label">Email:</span> {{ $contact->email }}</div>
        <div class="field"><span class="label">WhatsApp:</span> {{ $contact->whatsapp }}</div>
        <div class="field"><span class="label">Subject:</span> {{ $contact->subject }}</div>

        <div class="message-box">
            <div class="label">Message:</div>
            <p>{{ $contact->message }}</p>
        </div>

        <hr>
        <p style="font-size: 12px; color: #999;">Sent from {{ config('app.name') }} Contact Form</p>
    </div>
</body>
</html>
