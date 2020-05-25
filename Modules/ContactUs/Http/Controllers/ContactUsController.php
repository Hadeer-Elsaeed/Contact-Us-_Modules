<?php

namespace Modules\ContactUs\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Mail;
use Modules\ContactUs\Emails\ContactFormMail;
use Modules\ContactUs\Entities\Contact;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        
        return view('contactus::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('contactus::contact.contact');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $data = request()->validate([
            'name' => 'required|max:120',
            'email' => 'required|email',
            'phone' => 'required|regex:/(01)[0-9]{9}/',
            'message' => 'required',
        ]);
        $contact = new Contact;
        $contact->id=$request->id;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->phone=$request->phone;
        $contact->message=$request->message;
        $contact->save();

        Mail::to('test@test.com')->send(new ContactFormMail($data));
        return \redirect('contactus/contact');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('contactus::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('contactus::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
