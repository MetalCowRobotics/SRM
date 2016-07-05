@extends('layouts.app')
​
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Add Sponsors
    </div>
    <!-- Bootstrap Boilerplate... -->
​
    <div class="panel-body">
        <!-- Display Validation Errors -->
@include('common.errors')
        <!-- New Task Form -->
        <form action="{{ action('SponsorController@store', ["id"=>$organization_id])}}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
​
            <!-- Organization Name -->
            <div class="form-group">
                <label for="sponsor-name" class="col-sm-3 control-label">Sponsor Name</label>
​
                <div class="col-sm-6">
                    <input type="text" name="name" id="sponsor-name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="sponsor-zip" class="col-sm-3 control-label">Zip Code</label>
​
                <div class="col-sm-6">
                    <input type="text" name="zipcode" id="sponsor-zip" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="sponsor-state" class="col-sm-3 control-label">State</label>
​
                <div class="col-sm-6">
                    <input type="text" name="state" id="sponsor-state" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="sponsor-city" class="col-sm-3 control-label">City</label>
​
                <div class="col-sm-6">
                    <input type="text" name="city" id="sponsor-city" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="sponsor-address" class="col-sm-3 control-label">Address 1</label>
​
                <div class="col-sm-6">
                    <input type="text" name="address_1" id="sponsor-address-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="sponsor-address2" class="col-sm-3 control-label">Address 2</label>
​
                <div class="col-sm-6">
                    <input type="text" name="address_2" id="sponsor-address-2" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="sponsor-address-type" class="col-sm-3 control-label">Address Type (apt, suite, etc.)</label>
​
                <div class="col-sm-6">
                    <input type="text" name="address_type" id="sponsor-address-type" class="form-control">
                </div>
            </div>
​
            <!-- Add Organization Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Sponsor
                    </button>
                </div>
            </div>
        </form>
    </div>
  </div>
​
@endsection
