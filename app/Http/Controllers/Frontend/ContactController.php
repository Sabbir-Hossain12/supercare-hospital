<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.pages.static_pages.contact');
    }

    public function store(Request $request)
    {
        $contact = new Contact();

        $contact->name                  = $request->name;
        $contact->email                 = $request->email;
        $contact->mobile                = $request->mobile;
        $contact->subject               = $request->subject;
        $contact->message               = $request->message;
        $contact->status                = 1;

        $contact->save();

        return redirect()->back();
    }
}
