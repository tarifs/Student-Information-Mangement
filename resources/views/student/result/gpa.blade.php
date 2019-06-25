@extends('layouts.student')

@section('content')
    <div style="padding:15px" class="container">
        <div class="card">
            <div class="card-header">
                <strong>Student GPA</strong>
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
                            <td>:</td>
                            <td width="80%">
                                {{ $gpa ? $gpa->semester_1_gpa : '' }}
                            </td>
                        </tr>
                        <tr>
                            <td width="20%">2nd Semester</td>
                            <td>:</td>
                            <td width="80%">
                                {{ $gpa ? $gpa->semester_2_gpa : '' }}
                            </td>
                        </tr>
                        <tr>
                            <td width="20%">3rd Semester</td>
                            <td>:</td>
                            <td width="80%">
                                {{ $gpa ? $gpa->semester_3_gpa : '' }}
                            </td>
                        </tr>
                        <tr>
                            <td width="20%">4th Semester</td>
                            <td>:</td>
                            <td width="80%">
                                {{ $gpa ? $gpa->semester_4_gpa : '' }}
                            </td>
                        </tr>
                        <tr>
                            <td width="20%">5th Semester</td>
                            <td>:</td>
                            <td width="80%">
                                {{ $gpa ? $gpa->semester_5_gpa : '' }}
                            </td>
                        </tr>
                        <tr>
                            <td width="20%">6th Semester</td>
                            <td>:</td>
                            <td width="80%">
                                {{ $gpa ? $gpa->semester_6_gpa : '' }}
                            </td>
                        </tr>
                        <tr>
                            <td width="20%">7th Semester</td>
                            <td>:</td>
                            <td width="80%">
                                {{ $gpa ? $gpa->semester_7_gpa : '' }}
                            </td>
                        </tr>
                        <tr>
                            <td width="20%">8th Semester</td>
                            <td>:</td>
                            <td width="80%">
                                {{ $gpa ? $gpa->semester_8_gpa : '' }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
