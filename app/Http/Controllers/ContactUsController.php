<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{

    public function store(Request $request)
    {
  
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'tel' => 'required|string|max:20',
            'receiverType' => 'required|in:deanships,faculties',
            'deanship' => 'required_if:receiverType,عمادات|string|max:255',
            'faculty' => 'required_if:receiverType,كليات|string|max:255',
            'subject' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        // Create a new ContactUs instance and fill it with validated data
        $contactUs = new ContactUs();
        $contactUs->from_name = $validatedData['name'];
        $contactUs->from_email = $validatedData['email'];
        $contactUs->from_phone = $validatedData['tel'];
        $contactUs->receiver_type = $validatedData['receiverType'];
        $contactUs->to = $validatedData['deanship'] ?? null;
        $contactUs->to = $validatedData['faculty'] ?? null;
        $contactUs->subject = $validatedData['subject'];
        $contactUs->body = $validatedData['body'];
        $contactUs->status = ContactUs::STATUS_UNREAD;

        $contactUs->save();
               
        return redirect()->back()->with('success', 'تم إرسال الرسالة بنجاح');
}
}