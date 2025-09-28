<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    public function storeNw(Request $request)
    {
    	$request->validate([
            'name' => 'nullable',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
        ]);

        $user = Newsletter::create([
    'name' => $request->name,
    'email' => $request->email,
]);


        return redirect('/')->with('success', 'Thanks for Joining our waitlist! We will keep ypu informed on ofers and Updates from #yourBestOption');
    }
}
