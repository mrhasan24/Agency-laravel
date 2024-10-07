<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function contact(Request $request)
    {
        $this->validate($request, [

            'name'=>'required|min:6|max:255',
            'email'=>'required|email',
            'phone'=>'required|numeric|digits:11|regex:/^([0-9\s\-\+\(\)]*)$/',
            'subject'=>'required',
            'message'=>'required'
        ]);
       
        $contact = new Contact();
        $contact->name= $request->name;
        $contact->email= $request->email;
        $contact->phone= $request->phone;
        $contact->subject= $request->subject;
        $contact->message= $request->message;
       
      
        $contact->save();
        return back()->with('success', 'Thank you for your message!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
