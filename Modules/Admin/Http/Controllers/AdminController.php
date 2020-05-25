<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\ContactUs\Entities\Contact;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('admin::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);

        $contact=Contact::find($id) ;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->phone=$request->phone;
        $contact->message=$request->message;
        $contact->save();
        $contacts=Contact::all();
        return view('admin::admin.setting',['contacts'=>$contacts]);
       
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


    //list all contacts
    public function list(){
         $contacts= Contact::all();
        //  dd($contacts);
         return view('admin::admin.contacts',['contacts'=>$contacts]);
    }

    public function info(){
        $contacts= Contact::all();
        return view('admin::admin.setting',['contacts'=>$contacts]);
    }


}
