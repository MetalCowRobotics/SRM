@extends('layouts.app')

@section('content')

    <!-- Current Contacts -->

        <div class="panel panel-default">
            <div class="panel-heading">
                Current Donation
            </div>

            <div class="panel-body">
                @include('common.errors')
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Item Type</th>
                        <th>Item Value</th>
                        <th>Date Received</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>

                            <tr>

                                <td class="table-text">
                                    <div>{{ $sponsor_donation->item_type }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $sponsor_donation->item_value }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $sponsor_donation->date_received }}</div>
                                </td>
                                <td>
                                  <form action="{{ action('SponsorDonationController@destroy', ['organization_id'=> $organization_id, 'sponsor_id'=> $sponsor_id, 'sponsor_donation_id'=> $sponsor_donation->id]) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" id="delete-sponsor-donation-{{ $sponsor_donation->id }}" class="btn btn-danger">
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
