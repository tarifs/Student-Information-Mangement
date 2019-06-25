@extends('layouts.admin')

@section('content')
    <div class="card">
        @include('includes.errors')
        <form action="{{ route('student-gpa.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            <input type="hidden" name="student_id" value="{{ $student_id }}">
            <div class="card-header">
                <strong>Create Student GPA</strong>
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
                            <td width="20%">1st Semester</td>
                            <td width="80%"><input class="form-control" type="text" placeholder="Enter GPA" name="semester_1_gpa" value="{{ $student_gpa ? $student_gpa->semester_1_gpa : old('semester_1_gpa') }}"></td>
                        </tr>
                        <tr>
                            <td width="20%">2nd Semester</td>
                            <td width="80%"><input class="form-control" type="text" placeholder="Enter GPA" name="semester_2_gpa" value="{{ $student_gpa ? $student_gpa->semester_2_gpa : old('semester_2_gpa') }}"></td>
                        </tr>
                        <tr>
                            <td width="20%">3rd Semester</td>
                            <td width="80%"><input class="form-control" type="text" placeholder="Enter GPA" name="semester_3_gpa" value="{{ $student_gpa ? $student_gpa->semester_3_gpa : old('semester_3_gpa') }}"></td>
                        </tr>
                        <tr>
                            <td width="20%">4th Semester</td>
                            <td width="80%"><input class="form-control" type="text" placeholder="Enter GPA" name="semester_4_gpa" value="{{ $student_gpa ? $student_gpa->semester_4_gpa : old('semester_4_gpa') }}"></td>
                        </tr>
                        <tr>
                            <td width="20%">5th Semester</td>
                            <td width="80%"><input class="form-control" type="text" placeholder="Enter GPA" name="semester_5_gpa" value="{{ $student_gpa ? $student_gpa->semester_5_gpa : old('semester_5_gpa') }}"></td>
                        </tr>
                        <tr>
                            <td width="20%">6th Semester</td>
                            <td width="80%"><input class="form-control" type="text" placeholder="Enter GPA" name="semester_6_gpa" value="{{ $student_gpa ? $student_gpa->semester_6_gpa : old('semester_6_gpa') }}"></td>
                        </tr>
                        <tr>
                            <td width="20%">7th Semester</td>
                            <td width="80%"><input class="form-control" type="text" placeholder="Enter GPA" name="semester_7_gpa" value="{{ $student_gpa ? $student_gpa->semester_7_gpa : old('semester_7_gpa') }}"></td>
                        </tr>
                        <tr>
                            <td width="20%">8th Semester</td>
                            <td width="80%"><input class="form-control" type="text" placeholder="Enter GPA" name="semester_8_gpa" value="{{ $student_gpa ? $student_gpa->semester_8_gpa : old('semester_8_gpa') }}"></td>
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
@endsection
