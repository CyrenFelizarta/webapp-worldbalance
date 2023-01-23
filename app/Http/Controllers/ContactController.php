<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;




class ContactController extends Controller
{
    public function index () {
        return view ('worldbalance.contact');
    }



    public function store (Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);


        Mail::to('hello@example.com')->send(new Contact($data));
        return redirect()->back()->with('status', 'Your message has been successfully sent!');
 
    }
}
