<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Sponsor;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($organization_id)
    {
      $sponsors = Sponsor::where('organization_id', $organization_id)
          ->get();
      return view('sponsors.index',[
        'sponsors'=>$sponsors,
        'organization_id'=>$organization_id
      ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($organization_id)
    {
      return view('sponsors.create', [
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
    public function store($organization_id ,Request $request)
    {
      $this->validate($request, [
      'name' => 'required|max:50',
      'zipcode' => 'required|max:5',
      'state' => 'required|max:50',
      'city' => 'required'
    ]);


      $sponsor = new Sponsor;
      $sponsor->name = $request->name;
      $sponsor->zipcode = $request->zipcode;
      $sponsor->organization_id = $organization_id;
      $sponsor->state = $request->state;
      $sponsor->city = $request->city;
      $sponsor->address_1 = $request->address_1;
      $sponsor->address_2 = $request->address_2;
      $sponsor->address_type = $request->address_type;
      $sponsor->save();

      return redirect()->action('SponsorController@create', ['id'=>$organization_id]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($organization_id, $sponsor_id)
    {
      $sponsor = Sponsor::find($sponsor_id);
      return view('sponsors.show', [
        'sponsor'=>$sponsor,
        'organization_id'=>$organization_id
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
    public function destroy($organization_id, $sponsor_id)
    {
      Sponsor::find($sponsor_id)->delete();
      return redirect()->action('SponsorController@index', ['id'=>$organization_id]);
        //
    }
}
