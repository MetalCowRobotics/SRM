@extends('layouts.app')

@section('content')

    <!-- Current Contacts -->

        <div class="panel panel-default">
            <div class="panel-heading">
                Current Contact
            </div>

            <div class="panel-body">
                @include('common.errors')
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Name</th>
                        <th>Email 1</th>
                        <th>Email 2</th>
                        <th>Email 3</th>
                        <th>Email 4</th>
                        <th>Email 5</th>
                        <th>Phone 1</th>
                        <th>Phone 2</th>
                        <th>Phone 3</th>
                        <th>Phone 4</th>
                        <th>Phone 5</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>

                            <tr>

                                <td class="table-text">
                                    <div>{{ $sponsor_contact->name }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $sponsor_contact->email1 }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $sponsor_contact->email2 }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $sponsor_contact->email3 }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $sponsor_contact->email4 }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $sponsor_contact->email4 }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $sponsor_contact->email5 }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $sponsor_contact->phone1 }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $sponsor_contact->phone2 }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $sponsor_contact->phone3 }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $sponsor_contact->phone4 }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $sponsor_contact->phone5 }}</div>
                                </td>
                                <td>
                                  <form action="{{ action('SponsorContactController@destroy', ['organization_id'=> $organization_id, 'sponsor_id'=> $sponsor_id, 'sponsor_contact_id'=> $sponsor_contact->id]) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" id="delete-sponsor-contact-{{ $sponsor_contact->id }}" class="btn btn-danger">
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
