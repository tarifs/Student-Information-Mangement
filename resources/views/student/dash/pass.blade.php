@extends('layouts.student')

@section('content')

    <div style="padding:15px" class="container">
    <style media="screen">
    .table-pad tr td{
        padding-top: 0 !important;
        padding-bottom: 0 !important;
        border: 0 !important;
    }
    .table-only-pad tr td{
        padding-top: 5px !important;
        padding-bottom: 5px !important;
    }
    </style>

    <div class="card">
        <div class="card-header">
            <strong>Change Password</strong>
        </div>
        <div class="card-body">

            @include('includes.errors')


            <form class="" action="{{ route('Pass.change') }}" method="post">
                @csrf
                <div class="form-group">
                    <label class="col-sm-3 control-label"></label>
                    <div class="col-sm-8">
                        <p>The password must be at least 6 characters.</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Old Password</label>
                    <div class="col-sm-8">
                        <input type="password" name="old_password" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">New Password</label>
                    <div class="col-sm-8">
                        <input type="password" name="password" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Confirm Password</label>
                    <div class="col-sm-8">
                        <input type="password" name="password_confirmation">

                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-3 control-label"></label>
                    <div class="col-sm-8"><br>
                        <div class="">
                            <input class="btn btn-primary" type="submit" name="" value="Enter">
                        </div>
                    </div>
                </div>
            </form>


        </div>
    </div>
</div>
@endsection
