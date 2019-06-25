@extends('layouts.admin')

@section('content')
    <div class="card">
        @include('includes.errors')
        <form action="{{ route('user.store') }}" method="post"  class="form-horizontal">
            @csrf
            <div class="card-header">
                <strong>Create Admin Information</strong>
            </div>
            <div class="card-body card-block">
                <style>
                .no_border tr td{
                    border: 0 !important;
                }
                </style>
                <table class="table no_border">
                    <tbody>
                        <tr>
                            <td width="250px">Name</td>
                            <td><input type="text" name="name" class="form-control" value="{{ old('name') }}"></td>
                        </tr>
                        <tr>
                            <td width="250px">Email</td>
                            <td><input type="email" name="email" class="form-control" value="{{ old('email') }}"></td>
                        </tr>
                        <tr>
                            <td width="250px">Password</td>
                            <td><input type="password" name="password" class="form-control"></td>
                        </tr>
                        <tr>
                            <td width="250px">Confirm Password</td>
                            <td><input type="password" name="password_confirmation" class="form-control"></td>
                        </tr>

                                </tbody>
                            </table>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm pull-right">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
                <button type="reset" class="btn btn-danger btn-sm pull-left">
                    <i class="fa fa-ban"></i> Reset
                </button> <br>
            </div>
        </form>
    </div>

@endsection
