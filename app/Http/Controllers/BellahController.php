<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BellahController extends Controller
{
    public function ShowAbout()
    {
    	return view('about');
    }
    public function ShowServices()
    {
    	return view('services');
    }
    public function ShowCareers()
    {
    	return view('careers');
    }
    public function ShowContact()
    {
    	return view('contact');
    }
}
