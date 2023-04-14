<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $contact = Contact::paginate(5);
        return view('backend.contact.index',compact('contact'));
    }

    public function store(Request $request){

        $validated = $request->validate([

            'name'       =>  'required',
            'email'      => 'required|email|unique:users',
            'message'    =>  'required',
            'project'    =>  'required'

        ]);

        $contact          = new Contact();
        $contact->name    = $request->name;
        $contact->email   = $request->email;
        $contact->url     = $request->url;
        $contact->message = $request->message;
        $contact->project = $request->project;
        $contact->save();
       return redirect()->route('backend.contact.index');
    }
}
