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
                <strong>Student Profile</strong>

                <a href="{!! route('student.pdf.download') !!}" class="btn btn-sm btn-primary pull-right">Download</a>
            </div>
            <div class="card-body">
                <table class="table table-pad">
                    <tr>
                        <td width="300px">
                            <img width="200px" src="{{ $student ? $student->avatar : '' }}" alt="">
                        </td>
                        <td>
                            <table class="table-pad">
                                <tr>
                                    <td>Name</td>
                                    <td>:</td>
                                    <td>{{ $student? $student->name : '' }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{ $student? $student->email : '' }}</td>
                                </tr>
                                <tr>
                                    <td>Batch</td>
                                    <td>:</td>
                                    <td>{{ $student? $student->batch : '' }}</td>
                                </tr>
                                <tr>
                                    <td>Class Roll</td>
                                    <td>:</td>
                                    <td>{{ $student? $student->class_roll : '' }}</td>
                                </tr>
                                <tr>
                                    <td>Exam Roll</td>
                                    <td>:</td>
                                    <td>{{ $student? $student->exam_roll : '' }}</td>
                                </tr>
                                <tr>
                                    <td>Registration No</td>
                                    <td>:</td>
                                    <td>{{ $student? $student->registration_no : '' }}</td>
                                </tr>
                                <tr>
                                    <td>Phone No</td>
                                    <td>:</td>
                                    <td>{{ $student? $student->phone_no : '' }}</td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>:</td>
                                    <td>{{ $student? $student->getGender() : '' }}</td>
                                </tr>
                                <tr>
                                    <td>Blood Group</td>
                                    <td>:</td>
                                    <td>{{ $student? $student->getBloodGroup() : '' }}</td>
                                </tr>
                                <tr>
                                    <td>Religion</td>
                                    <td>:</td>
                                    <td>{{ $student? $student->religion : '' }}</td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>:</td>
                                    <td>{{ $student? $student->dob : '' }}</td>
                                </tr>
                                <tr>
                                    <td>Nationality</td>
                                    <td>:</td>
                                    <td>{{ $student? $student->nationality : '' }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <strong>Guardian</strong>
            </div>
            <div class="card-body">
                <table class="table table-pad">
                    <tr>
                        <td width="250px">Name</td>
                        <td width="70px">:</td>
                        <td>{{ $student->guardian ? $student->guardian->name : '' }}</td>
                    </tr>
                    <tr>
                        <td width="250px">Contact</td>
                        <td width="70px">:</td>
                        <td>{{ $student->guardian ? $student->guardian->contact : '' }}</td>
                    </tr>
                    <tr>
                        <td width="250px">Relationship</td>
                        <td width="70px">:</td>
                        <td>{{ $student->guardian ? $student->guardian->relationship : '' }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <strong>Guardian</strong>
            </div>
            <div class="card-body">
                <table class="table table-only-pad">
                    <tr>
                        <td style="border:0">
                            <table class="table table-bordered">
                                <tr>
                                    <td colspan="3"><b>Present Address</b></td>
                                </tr>
                                <tr>
                                    <td>Village</td>
                                    <td>{{ $student->address ? $student->address->present_village : '' }}</td>
                                </tr>
                                <tr>
                                    <td>Post Office</td>
                                    <td>{{ $student->address ? $student->address->present_post_office : '' }}</td>
                                </tr>
                                <tr>
                                    <td>Post Code</td>
                                    <td>{{ $student->address ? $student->address->present_post_code : '' }}</td>
                                </tr>
                                <tr>
                                    <td>Upazila</td>
                                    <td>{{ $student->address ? $student->address->present_upazila : '' }}</td>
                                </tr>
                                <tr>
                                    <td>District</td>
                                    <td>{{ $student->address ? $student->address->present_district : '' }}</td>
                                </tr>
                            </table>
                        </td>
                        <td style="border:0">
                            <table class="table table-bordered">
                                <tr>
                                    <td colspan="3"><b>Permanent Address</b></td>
                                </tr>
                                <tr>
                                    <td>Village</td>
                                    <td>{{ $student->address ? $student->address->permanent_village : '' }}</td>
                                </tr>
                                <tr>
                                    <td>Post Office</td>
                                    <td>{{ $student->address ? $student->address->permanent_post_office : '' }}</td>
                                </tr>
                                <tr>
                                    <td>Post Code</td>
                                    <td>{{ $student->address ? $student->address->permanent_post_code : '' }}</td>
                                </tr>
                                <tr>
                                    <td>Upazila</td>
                                    <td>{{ $student->address ? $student->address->permanent_upazila : '' }}</td>
                                </tr>
                                <tr>
                                    <td>District</td>
                                    <td>{{ $student->address ? $student->address->permanent_district : '' }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <strong>Educational Qualification</strong>
            </div>
            <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <th>Examination</th>
                            <th>Board</th>
                            <th>Institute</th>
                            <th>Group</th>
                            <th>Passing Year</th>
                            <th>Roll</th>
                            <th>Result</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>SSC</td>
                                <td>{{ $student->educationalQualification ? $student->educationalQualification->ssc_board : '' }}</td>
                                <td>{{ $student->educationalQualification ? $student->educationalQualification->ssc_institute : '' }}</td>
                                <td>{{ $student->educationalQualification ? $student->educationalQualification->ssc_group : '' }}</td>
                                <td>{{ $student->educationalQualification ? $student->educationalQualification->ssc_year : '' }}</td>
                                <td>{{ $student->educationalQualification ? $student->educationalQualification->ssc_roll : '' }}</td>
                                <td>{{ $student->educationalQualification ? $student->educationalQualification->ssc_result : '' }}</td>
                            </tr>
                            <tr>
                                <td>HSC</td>
                                <td>{{ $student->educationalQualification ? $student->educationalQualification->hsc_board : '' }}</td>
                                <td>{{ $student->educationalQualification ? $student->educationalQualification->hsc_institute : '' }}</td>
                                <td>{{ $student->educationalQualification ? $student->educationalQualification->hsc_group : '' }}</td>
                                <td>{{ $student->educationalQualification ? $student->educationalQualification->hsc_year : '' }}</td>
                                <td>{{ $student->educationalQualification ? $student->educationalQualification->hsc_roll : '' }}</td>
                                <td>{{ $student->educationalQualification ? $student->educationalQualification->hsc_result : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection
