@extends('layouts.app')

@section('content')

    <!-- Current Sponsor -->

        <div class="panel panel-default">
            <div class="panel-heading">
                Current Sponsor
            </div>

            <div class="panel-body">
              <!--  @include('common.errors')  -->
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Name</th>
                        <th>ZIP Code</th>
                        <th>State</th>
                        <th>City</th>
                        <th>Address 1</th>
                        <th>Address 2</th>
                        <th>Address Type</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>

                            <tr>

                                <td class="table-text">
                                    <div>{{ $sponsor->name }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $sponsor->zipcode }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $sponsor->state }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $sponsor->city }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $sponsor->address_1 }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $sponsor->address_2 }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $sponsor->address_type }}</div>
                                </td>
                                <td>
                                  <form action="{{ action('SponsorController@destroy', ['organization_id'=> $organization_id, 'sponsor_id'=> $sponsor->id]) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" id="delete-sponsor-{{ $sponsor->id }}" class="btn btn-danger">
                                      <i class="fa fa-btn fa-trash"></i>Delete
                                    </button>
                                  </form>
                                </td>
                            </tr>

                    </tbody>
                </table>
            </div>
        </div>
@endsection
