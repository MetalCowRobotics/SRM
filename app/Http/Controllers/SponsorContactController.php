<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\SponsorContact;

class SponsorContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($organization_id, $sponsor_id)
    {
      $sponsor_contacts = SponsorContact::where('sponsor_id', $sponsor_id)
          ->get();
      return view ('sponsor_contacts.index', [
        'sponsor_contacts'=>$sponsor_contacts,
        'sponsor_id'=>$sponsor_id,
        'organization_id'=>$organization_id
      ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($organization_id, $sponsor_id)
    {
      return view('sponsor_contacts.create', [
        'sponsor_id'=>$sponsor_id,
        'organization_id'=>$organization_id
      ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($organization_id, $sponsor_id, Request $request)
    {
      $this->validate($request,[
        'email_1' => 'required',
        'phone_1' => 'required|min:10'
      ]);

      $sponsor_contact = new SponsorContact;
      $sponsor_contact->contact_name = $request->name;
      $sponsor_contact->email1 = $request->email_1;
      $sponsor_contact->email2 = $request->email_2;
      $sponsor_contact->email3 = $request->email_3;
      $sponsor_contact->email4 = $request->email_4;
      $sponsor_contact->email5 = $request->email_5;
      $sponsor_contact->phone1 = $request->phone_1;
      $sponsor_contact->phone2 = $request->phone_2;
      $sponsor_contact->phone3 = $request->phone_3;
      $sponsor_contact->phone4 = $request->phone_4;
      $sponsor_contact->phone5 = $request->phone_5;
      $sponsor_contact->sponsor_id = $sponsor_id;
      $sponsor_contact->save();

      return redirect()->action('SponsorContactController@create', ['organization_id'=>$organization_id, 'sponsor_id'=>$sponsor_id]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($organization_id, $sponsor_id, $sponsor_contact_id)
    {
      $sponsor_contact = SponsorContact::find($sponsor_contact_id);
      return view('sponsor_contacts.show', [
        'sponsor_id'=>$sponsor_id,
        'organization_id'=>$organization_id,
        'sponsor_contact'=>$sponsor_contact
      ]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($organization_id, $sponsor_id, $sponsor_contact_id)
    {
      SponsorContact::find($sponsor_contact_id)->delete();
      return redirect()->action('SponsorContactController@index', ['organization_id'=>$organization_id, 'sponsor_id'=>$sponsor_id]);
        //
    }
}
