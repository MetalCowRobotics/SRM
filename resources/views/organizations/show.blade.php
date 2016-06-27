@extends('layouts.app')

@section('content')

    <!-- Current Organization -->

        <div class="panel panel-default">
            <div class="panel-heading">
                Current Organization
            </div>

            <div class="panel-body">
                @include('common.errors')
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>

                            <tr>

                                <td class="table-text">
                                    <div>{{ $organization->name }}</div>
                                </td>

                                <td class="table-text">
                                    <div>{{ $organization->email }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $organization->password }}</div>
                                </td>
                                <td>
                                  <form action="{{ url('organizations/'.$organization->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" id="delete-organization-{{ $organization->id }}" class="btn btn-danger">
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
