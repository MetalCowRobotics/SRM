<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\SponsorDonation;

class SponsorDonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($organization_id, $sponsor_id)
    {
      $sponsor_donations = SponsorDonation::where('sponsor_id', $sponsor_id)
        ->get();
      return view ('sponsor_donations.index', [
        'sponsor_donations'=>$sponsor_donations,
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
      return view('sponsor_donations.create', [
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
        'item_type' => 'required',
        'monetary_value' => 'required'
      ]);

      $sponsor_donation = new SponsorDonation;
      $sponsor_donation->item_type = $request->item_type;
      $sponsor_donation->item_value = $request->monetary_value;
      $sponsor_donation->date_received = $request->date_received;
      $sponsor_donation->sponsor_id = $sponsor_id;
      $sponsor_donation->save();

      return redirect()->action('SponsorDonationController@create', ['organization_id'=>$organization_id, 'sponsor_id'=>$sponsor_id]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($organization_id, $sponsor_id, $sponsor_donation_id)
    {
      $sponsor_donation = SponsorDonation::find($sponsor_donation_id);
      return view('sponsor_donations.show', [
        'sponsor_id'=>$sponsor_id,
        'organization_id'=>$organization_id,
        'sponsor_donation'=>$sponsor_donation
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
    public function destroy($organization_id, $sponsor_id, $sponsor_donation_id)
    {
      SponsorDonation::find($sponsor_donation_id)->delete();
      return redirect()->action('SponsorDonationController@index', ['organization_id'=>$organization_id, 'sponsor_id'=>$sponsor_id]);
        //
    }
}
