<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\SponsorPresentation;

class SponsorPresentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($organization_id, $sponsor_id)
    {
      $sponsor_presentations = SponsorPresentation::where('sponsor_id', $sponsor_id)
        ->get();
      return view ('sponsor_presentations.index', [
        'sponsor_presentations'=>$sponsor_presentations,
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
      return view('sponsor_presentations.create', [
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
      $this->validate($request, [
        'item_type' => 'required',
        'monetary_value' => 'required'
      ]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
    public function destroy($id)
    {
        //
    }
}
