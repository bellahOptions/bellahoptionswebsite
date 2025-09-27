<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactController extends Controller
{
        public function StoreContact(Request $request)
    {
    	$request->validate([
            'full_name' => 'required|String',
            'phone' => 'required|String',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'message' => 'required|String',
        ]);

        $user = ContactForm::create([
    'full_name' => $request->full_name,
    'phone' => $request->phone,
    'email' => $request->email,
    'message' => $request->message,
]);


        return back()->with('success', 'Thanks for Reaching out! you will be contacted by our representative in few minutes');
    }
}
