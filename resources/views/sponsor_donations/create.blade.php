@extends('layouts.app')

@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
        Add Donation
  </div>
    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
    @include('common.errors')
        <!-- New Task Form -->
        <form action="{{ action('SponsorDonationController@store', ["organization_id"=>$organization_id, "sponsor_id"=>$sponsor_id])}}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- contact Name -->
            <div class="form-group">
                <label for="donation-item-type" class="col-sm-3 control-label">Item Type</label>

                <div class="col-sm-6">
                    <input type="text" name="item_type" id="item-type" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="donation-monetary-value" class="col-sm-3 control-label">Monetary Value</label>

                <div class="col-sm-6">
                    <input type="number" min="0" name="monetary_value" id="monetary_value" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="donation-received-date" class="col-sm-3 control-label">Date Received</label>

                <div class="col-sm-6">
                    <input type="date" name="date_received" id="date-received" class="form-control">
                </div>
            </div>


            <!-- Add contact Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Donation
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection('content')
