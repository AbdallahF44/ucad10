<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsEmail;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'tel' => 'required|string|digits:10',
            'receiverType' => 'required',
            'deanship' => 'required_if:receiverType,عمادات',
            'faculty' => 'required_if:receiverType,كليات',
            'subject' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        // Create a new ContactUs instance and fill it with validated data
        $contactUs = new ContactUs();
        $contactUs->from_name = $validatedData['name'];
        $contactUs->from_email = $validatedData['email'];
        $contactUs->from_phone = $validatedData['tel'];
        $contactUs->receiver_type = $validatedData['receiverType'];
        $contactUs->to = $validatedData['deanship'] ?? $validatedData['faculty'] ?? null;
        $contactUs->subject = $validatedData['subject'];
        $contactUs->body = $validatedData['body'];
        $contactUs->status = ContactUs::STATUS_UNREAD;

        $contactUs->save();
      
        try {
            Config::set('mail.mailer', 'sendmail'); // Use the sendmail mailer
            Mail::to('ba.abuzubaida@std.alaqsa.edu.ps')->send(new ContactUsEmail($validatedData));
            Log::info('Email sent successfully');
            return redirect()->back()->with('success', 'تم إرسال الرسالة بنجاح');

        } catch (\Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());
            return response('حدث خطأ أثناء إرسال الرسالة');  
              }

    }
 
}
