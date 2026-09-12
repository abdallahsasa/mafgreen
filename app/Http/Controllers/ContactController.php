<?php

namespace App\Http\Controllers;

use App\Models\ContactInquiry;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:100',
            'message' => 'required|string',
            'locale' => 'nullable|string|in:en,ar',
        ]);

        ContactInquiry::create([
            'full_name' => $validated['full_name'],
            'company' => $validated['company'] ?? null,
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'message' => $validated['message'],
            'locale' => $validated['locale'] ?? 'en',
            'status' => 'new',
        ]);

        $successMsg = ($request->input('locale') === 'ar')
            ? 'شكرًا لتواصلك معنا! تم استلام رسالتك بنجاح وسيقوم فريقنا بالرد عليك قريبًا.'
            : 'Thank you for contacting us! Your inquiry has been received and our team will get back to you shortly.';

        return redirect()->to(url()->previous() . '#contact')->with('contact_success', $successMsg);
    }
}
