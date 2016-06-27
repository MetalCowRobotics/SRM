
@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Add Organization
    </div>
    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
    @include('common.errors')
        <!-- New Task Form -->
        <form action="{{ url('organizations') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Organization Name -->
            <div class="form-group">
                <label for="organization-name" class="col-sm-3 control-label">Organization Name</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="organization-name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="organization-email" class="col-sm-3 control-label">Email</label>

                <div class="col-sm-6">
                    <input type="text" name="email" id="organization-email" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="organization-password" class="col-sm-3 control-label">Password</label>

                <div class="col-sm-6">
                    <input type="text" name="password" id="organization-password" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="organization-verification" class="col-sm-3 control-label">Verification Number</label>

                <div class="col-sm-6">
                    <input type="text" name="verification_num" id="organization-verification" class="form-control">
                </div>
            </div>

            <!-- Add Organization Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Organization
                    </button>
                </div>
            </div>
        </form>
    </div>
  </div>

@endsection
