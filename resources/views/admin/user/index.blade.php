@extends('layouts.admin')

@section('content')
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <strong>Admin List</strong>
                <a href="{{ route('user.create') }}" class="btn btn-primary pull-right">Add User</a>
            </div>
            <div class="card-body">

                <table class="table table-border" id="bootstrap-data-table">
                    <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Permission</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @php
                        $i=1;
                        @endphp
                        @if ($users)
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ( $user->admin)
                                                <p class="text-success">Admin</p>
                                                @else
                                                    <p class="text-primary">General</p>
                                            @endif
                                    </td>
                                    <td>
                                        @if($user->admin)
                                            <a href="{{ route('user.not.admin', ['id' => $user->id]) }}" class="btn btn-xs btn-danger">Remove permissions</a>
                                        @else
                                            <a href="{{ route('user.admin', ['id' => $user->id]) }}" class="btn btn-xs btn-success">Make admin</a>
                                        @endif
                                    </td>
                                    <td>
                                        @if (Auth::id() != $user->id)
                                            <a class="btn btn-sm btn-danger" onclick="$('#my_form').submit()" href="#">Delete</a>

                                            <form id="my_form" class="" action="{{ route('user.destroy', $user->id) }}" method="post">
                                                @csrf @method('delete')
                                            </form>
                                        @endif

                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
