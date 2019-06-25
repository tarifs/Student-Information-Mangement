@extends('layouts.admin')

@section('content')
    <div class="card">
        @include('includes.errors')
        <form action="{{ route('thirty-percent-mark.update', $tpm->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf @method('put')
            <div class="card-header">
                <strong>Update Thirty Percent mark</strong>
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
                            <td width="20%">Subject</td>
                            <td width="80%"><input class="form-control" type="text" placeholder="Enter Subject" name="subject" value="{{ $tpm->course }}"></td>
                        </tr>
                        <tr>
                            <td width="20%">Attendence</td>
                            <td width="80%"><input class="form-control" type="text" placeholder="Enter Attendence" name="attendence" value="{{ $tpm->attendence }}"></td>
                        </tr>
                        <tr>
                            <td width="20%">Class Test</td>
                            <td width="80%"><input class="form-control" type="text" placeholder="Enter Class Test/Assignment" name="class_test" value="{{ $tpm->tutorial }}"></td>
                        </tr>
                        <tr>
                            <td width="20%">Midterm</td>
                            <td width="80%"><input class="form-control" type="text" placeholder="Enter Midterm" name="midterm" value="{{ $tpm->midterm }}"></td>
                        </tr>
                        <tr>
                            <td width="20%">Total</td>
                            <td width="80%"><input class="form-control" type="text" placeholder="Enter Total" name="total" value="{{ $tpm->total }}"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm pull-right">
                    <i class="fa fa-dot-circle-o"></i> Update
                </button>
                <button type="reset" class="btn btn-danger btn-sm pull-left">
                    <i class="fa fa-ban"></i> Reset
                </button> <br>
            </div>
        </form>
    </div>
@endsection
