<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
       
        $this->validate($request,
        [
            'name' => 'required',
            'phone' => 'required'
        ]);
        
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('about')->with('success', 'Okey');


    }
}
