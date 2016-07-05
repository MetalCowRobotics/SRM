@extends('layouts.app')

@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
        Add Contact
  </div>
    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
    @include('common.errors')
        <!-- New Task Form -->
        <form action="{{ action('SponsorContactController@store', ["organization_id"=>$organization_id, "sponsor_id"=>$sponsor_id])}}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- contact Name -->
            <div class="form-group">
                <label for="contact-name" class="col-sm-3 control-label">Contact Name</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="contact-name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="contact-email-1" class="col-sm-3 control-label">Email 1</label>

                <div class="col-sm-6">
                    <input type="text" name="email_1" id="contact-email-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="contact-email-2" class="col-sm-3 control-label">Email 2</label>

                <div class="col-sm-6">
                    <input type="text" name="email_2" id="contact-email-2" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="contact-email-3" class="col-sm-3 control-label">Email 3</label>

                <div class="col-sm-6">
                    <input type="text" name="email_3" id="contact-email-3" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="contact-email-4" class="col-sm-3 control-label">Email 4</label>

                <div class="col-sm-6">
                    <input type="text" name="email_4" id="contact-email-4" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="contact-email-5" class="col-sm-3 control-label">Email 5</label>

                <div class="col-sm-6">
                    <input type="text" name="email_5" id="contact-email-5" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="contact-phone-1" class="col-sm-3 control-label">Phone 1</label>

                <div class="col-sm-6">
                    <input type="text" name="phone_1" id="contact-phone-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="contact-phone-2" class="col-sm-3 control-label">Phone 2</label>

                <div class="col-sm-6">
                    <input type="text" name="phone_2" id="contact-phone-2" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="contact-phone-3" class="col-sm-3 control-label">Phone 3</label>

                <div class="col-sm-6">
                    <input type="text" name="phone_3" id="contact-phone-3" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="contact-phone-4" class="col-sm-3 control-label">Phone 4</label>

                <div class="col-sm-6">
                    <input type="text" name="phone_4" id="contact-phone-4" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="contact-phone-5" class="col-sm-3 control-label">Phone 5</label>

                <div class="col-sm-6">
                    <input type="text" name="phone_5" id="contact-phone-5" class="form-control">
                </div>
            </div>


            <!-- Add contact Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Contact
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection('content')
