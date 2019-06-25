@extends('layouts.admin')
@section('content')
    <div class="card">

        @include('includes.errors')
        <form action="{{ route('thirty-percent-mark.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            <input type="hidden" name="student_id" value="{{ $student_id }}">
            <input type="hidden" name="semester" value="{{ $semester }}">
            <div class="card-header">
                <strong>Create Thirty Percent mark</strong>
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
                            <td width="80%"><input class="form-control" type="text" placeholder="Enter Subject" name="subject" value="{{ old('subject') }}"></td>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td width="20%">Attendence</td>
                            <td width="80%"><input class="form-control prc" id="attendence" type="text" placeholder="Enter Attendence" name="attendence" min="0" value="{{ old('attendence')??"0" }}"></td>
                                
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td width="20%">Class Test</td>
                            <td width="80%"><input class="form-control prc" id="class_test" type="text" placeholder="Enter Class Test/Assignment" name="class_test" min="0" value="{{ old('class_test')??"0" }}"></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td width="20%">Midterm</td>
                            <td width="80%"><input class="form-control prc"  id="midterm" type="text" placeholder="Enter Midterm" name="midterm" min="0" value="{{ old('midterm')??"0" }}"></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td width="20%">Total</td>
                            <td width="80%"><input class="form-control" id="result" type="text"  name="total" value="{{ old('total') }}" readonly style="background-color: white"></td>
                            </div>
                        </tr>
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
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
        $('.prc').keyup(function () {
            var attendence = parseFloat($('#attendence').val());
            var class_test = parseFloat($('#class_test').val());
            var midterm = parseFloat($('#midterm').val());

            $('#result').val(attendence+class_test+midterm);
        });
    </script>
</script>
@endsection

