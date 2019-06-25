<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
   
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head><body>
    <style media="screen">
        .table-pad tr td {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
            border: 0 !important;
        }

        .table-only-pad tr td {
            padding-top: 5px !important;
            padding-bottom: 5px !important;
        }
    </style>
    <div class="">
        <div class="">
            <table class="table table-pad table-bordered">
                <tr><td colspan="3"><h4>Student Profile</h4></td></tr>
                <tr>
                    <td width="300px">
                        <img width="200px" src="{{ $student->avatar }}" alt="">
                    </td>
                    <td>
                        <table class="table table-bordered">
                            <tr>
                                <td>Name</td>
                                <td>{{ $student->name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $student->email }}</td>
                            </tr>
                            <tr>
                                <td>Batch</td>
                                 <td>{{ $student->batch }}</td>
                            </tr>
                            <tr>
                                <td>Class Roll</td>
                                <td>{{ $student->class_roll }}</td>
                            </tr>
                            <tr>
                                <td>Exam Roll</td>
                                <td>{{ $student->exam_roll }}</td>
                            </tr>
                            <tr>
                                <td>Registration No</td>
                                <td>{{ $student->registration_no }}</td>
                            </tr>
                            <tr>
                                <td>Phone No</td>
                                <td>{{ $student->phone_no }}</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>{{ $student->getGender() }}</td>
                            </tr>
                            <tr>
                                <td>Blood Group</td>
                                <td>{{ $student->getBloodGroup() }}</td>
                            </tr>
                            <tr>
                                <td>Religion</td>
                                <td>{{ $student->religion }}</td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td>{{ $student->dob }}</td>
                            </tr>
                            <tr>
                                <td>Nationality</td>
                                <td>{{ $student->nationality }}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="">
            <table class="table table-bordered">
                <tr>
                    <td colspan="3"><h4>Guardian Info</h4></td>
                </tr>
                <tr>
                    <td width="250px">Name</td>
                    <td>{{ $student->guardian->name }}</td>
                </tr>
                <tr>
                    <td width="250px">Contact</td>
                    <td>{{ $student->guardian->contact }}</td>
                </tr>
                <tr>
                    <td width="250px">Relationship</td>
                    <td>{{ $student->guardian->relationship }}</td>
                </tr>
            </table>
    </div>
    <div class="">
        
        <div class="">
            <table class="table table-only-pad">
                    <tr><td colspan="3" style="border-top:0"><h4>Guardian Address</h4></td></tr>
                <tr>
                    <td style="border:0">
                        <table class="table table-bordered">
                            <tr>
                                <td colspan="3"><b>Present Address</b></td>
                            </tr>
                            <tr>
                                <td>Village</td>
                                <td>{{ $student->address->present_village }}</td>
                            </tr>
                            <tr>
                                <td>Post Office</td>
                                <td>{{ $student->address->present_post_office }}</td>
                            </tr>
                            <tr>
                                <td>Post Code</td>
                                <td>{{ $student->address->present_post_code }}</td>
                            </tr>
                            <tr>
                                <td>Upazila</td>
                                <td>{{ $student->address->present_upazila }}</td>
                            </tr>
                            <tr>
                                <td>District</td>
                                <td>{{ $student->address->present_district }}</td>
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
                                <td>{{ $student->address->permanent_village }}</td>
                            </tr>
                            <tr>
                                <td>Post Office</td>
                                <td>{{ $student->address->permanent_post_office }}</td>
                            </tr>
                            <tr>
                                <td>Post Code</td>
                                <td>{{ $student->address->permanent_post_code }}</td>
                            </tr>
                            <tr>
                                <td>Upazila</td>
                                <td>{{ $student->address->permanent_upazila }}</td>
                            </tr>
                            <tr>
                                <td>District</td>
                                <td>{{ $student->address->permanent_district }}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="">
        <div class="">
            <table>
                    <tr><td colspan="3"><h4>Educational Qualification</h4></td></tr>
            </table>
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
                        <td>{{ $student->educationalQualification->ssc_board }}</td>
                        <td>{{ $student->educationalQualification->ssc_institute }}</td>
                        <td>{{ $student->educationalQualification->ssc_group }}</td>
                        <td>{{ $student->educationalQualification->ssc_year }}</td>
                        <td>{{ $student->educationalQualification->ssc_roll }}</td>
                        <td>{{ $student->educationalQualification->ssc_result }}</td>
                    </tr>
                    <tr>
                        <td>HSC</td>
                        <td>{{ $student->educationalQualification->hsc_board }}</td>
                        <td>{{ $student->educationalQualification->hsc_institute }}</td>
                        <td>{{ $student->educationalQualification->hsc_group }}</td>
                        <td>{{ $student->educationalQualification->hsc_year }}</td>
                        <td>{{ $student->educationalQualification->hsc_roll }}</td>
                        <td>{{ $student->educationalQualification->hsc_result }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body></html>