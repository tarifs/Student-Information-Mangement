<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pdf_style.css') }}">
    </head>
    <body>
        <div class="text-center">
            <h3>Gono Bishwabidyalay</h3>
            <small>Student Information</small>
        </div>
        <br>
        <table>
            <tr>
                <td style="padding-left: 50px; padding-top: 10px" valign="top" align="right" style="padding-top: 0" width="40%">
                    <img width="200px" src="{{ $student ? $student->avatar : '' }}" alt="">
                </td>
                <td width="63px"></td>
                <td width="30%">
                    <table class="table-padding">
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>{{ $student ? $student->name : '' }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{ $student ? $student->email : '' }}</td>
                        </tr>
                        <tr>
                            <td>Batch</td>
                            <td>:</td>
                             <td>{{ $student ? $student->batch : '' }}</td>
                        </tr>
                        <tr>
                            <td>Class Roll</td>
                            <td>:</td>
                            <td>{{ $student ? $student->class_roll : '' }}</td>
                        </tr>
                        <tr>
                            <td>Exam Roll</td>
                            <td>:</td>
                            <td>{{ $student ? $student->exam_roll : '' }}</td>
                        </tr>
                        <tr>
                            <td>Registration No</td>
                            <td>:</td>
                            <td>{{ $student ? $student->registration_no : '' }}</td>
                        </tr>
                        <tr>
                            <td>Phone No</td>
                            <td>:</td>
                            <td>{{ $student ? $student->phone_no : '' }}</td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td>{{ $student ? $student->getGender() : '' }}</td>
                        </tr>
                        <tr>
                            <td>Blood Group</td>
                            <td>:</td>
                            <td>{{ $student ? $student->getBloodGroup() : '' }}</td>
                        </tr>
                        <tr>
                            <td>Religion</td>
                            <td>:</td>
                            <td>{{ $student ? $student->religion : '' }}</td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td>:</td>
                            <td>{{ $student ? $student->dob : '' }}</td>
                        </tr>
                        <tr>
                            <td>Nationality</td>
                            <td>:</td>
                            <td>{{ $student ? $student->nationality : '' }}</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <br>
        <table class="table">
            <tr>
                <td style="border:0 !important; padding-bottom: 2px"> <b>Address</b> </td>
            </tr>
            <tr>
                <td style="border:0 !important">
                    <table class="table" class="table-padding" border="1">
                        <tr>
                            <td style="border:1px solid black; padding: 3px 3px 3px 5px" colspan="2">Present Address</td>
                            <td style="border:1px solid black; padding: 3px 3px 3px 5px" colspan="2">Present Address</td>
                        </tr>
                        <tr>
                            <td style="border:1px solid black; padding: 3px 3px 3px 5px">village</td>
                            <td style="border:1px solid black; padding: 3px 3px 3px 5px">{{ $student->address ? $student->address->present_village : '' }}</td>
                            <td style="border:1px solid black; padding: 3px 3px 3px 5px">village</td>
                            <td style="border:1px solid black; padding: 3px 3px 3px 5px">{{ $student->address ? $student->address->permanent_village : '' }}</td>
                        </tr>
                        <tr>
                            <td style="border:1px solid black; padding: 3px 3px 3px 5px">Post Office</td>
                            <td style="border:1px solid black; padding: 3px 3px 3px 5px">{{ $student->address ? $student->address->present_post_office : '' }}</td>
                            <td style="border:1px solid black; padding: 3px 3px 3px 5px">Post Office</td>
                            <td style="border:1px solid black; padding: 3px 3px 3px 5px">{{ $student->address ? $student->address->permanent_post_office : '' }}</td>
                        </tr>
                        <tr>
                            <td style="border:1px solid black; padding: 3px 3px 3px 5px">Post Code</td>
                            <td style="border:1px solid black; padding: 3px 3px 3px 5px">{{ $student->address ? $student->address->present_post_code : '' }}</td>
                            <td style="border:1px solid black; padding: 3px 3px 3px 5px">Post Code</td>
                            <td style="border:1px solid black; padding: 3px 3px 3px 5px">{{ $student->address ? $student->address->permanent_post_code : '' }}</td>
                        </tr>
                        <tr>
                            <td style="border:1px solid black; padding: 3px 3px 3px 5px">Upazila</td>
                            <td style="border:1px solid black; padding: 3px 3px 3px 5px">{{ $student->address ? $student->address->present_upazila : '' }}</td>
                            <td style="border:1px solid black; padding: 3px 3px 3px 5px">Upazila</td>
                            <td style="border:1px solid black; padding: 3px 3px 3px 5px">{{ $student->address ? $student->address->permanent_upazila : '' }}</td>
                        </tr>
                        <tr>
                            <td style="border:1px solid black; padding: 3px 3px 3px 5px">District</td>
                            <td style="border:1px solid black; padding: 3px 3px 3px 5px">{{ $student->address ? $student->address->present_district : '' }}</td>
                            <td style="border:1px solid black; padding: 3px 3px 3px 5px">District</td>
                            <td style="border:1px solid black; padding: 3px 3px 3px 5px">{{ $student->address ? $student->address->permanent_district : '' }}</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <table class="table">
            <tr>
                <td style="border:0 !important; padding-bottom: 2px"> <b>Guardian</b> </td>
            </tr>
            <tr>
                <td style="border:0 !important; padding-bottom: 2px">
                    <table class="table">
                        <tr>
                            <td style="border:1px solid black; padding: 3px 3px 3px 15px" width="300px" >Name</td>
                            <td style="border:1px solid black; padding: 3px 3px 3px 15px" >{{ $student->guardian ? $student->guardian->name : '' }}</td>
                        </tr>
                        <tr>
                            <td style="border:1px solid black; padding: 3px 3px 3px 15px" width="300px" >Contact</td>
                            <td style="border:1px solid black; padding: 3px 3px 3px 15px" >{{ $student->guardian ? $student->guardian->contact : '' }}</td>
                        </tr>
                        <tr>
                            <td style="border:1px solid black; padding: 3px 3px 3px 15px" width="300px" >Relationship</td>
                            <td style="border:1px solid black; padding: 3px 3px 3px 15px" >{{ $student->guardian ? $student->guardian->relationship : '' }}</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <table class="table">
            <tr>
                <td style="border:0 !important; padding-bottom: 2px"> <b>Educational Qualification</b> </td>
            </tr>
            <tr>
                <td style="border:0 !important; padding-bottom: 2px">
                    <table class="table">
                        <thead>
                            <tr>
                                <th valign="top" width="" style="border:1px solid black; padding: 3px 3px 3px 15px" >Examination</th>
                                <th valign="top" width="" style="border:1px solid black; padding: 3px 3px 3px 15px" >Board</th>
                                <th valign="top" width="" style="border:1px solid black; padding: 3px 3px 3px 15px" >Institute</th>
                                <th valign="top" width="" style="border:1px solid black; padding: 3px 3px 3px 15px" >Group</th>
                                <th valign="top" width="110px" style="border:1px solid black; padding: 3px 3px 3px 15px" >Passing Year</th>
                                <th valign="top" width="60px" style="border:1px solid black; padding: 3px 3px 3px 15px" >Roll</th>
                                <th valign="top" width="50px" style="border:1px solid black; padding: 3px 3px 3px 15px" >Result</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid black; padding: 3px 3px 3px 15px">SSC</td>
                                <td style="border:1px solid black; padding: 3px 3px 3px 15px">{{ $student->educationalQualification ? $student->educationalQualification->ssc_board : '' }}</td>
                                <td style="border:1px solid black; padding: 3px 3px 3px 15px">{{ $student->educationalQualification ? $student->educationalQualification->ssc_institute : '' }}</td>
                                <td style="border:1px solid black; padding: 3px 3px 3px 15px">{{ $student->educationalQualification ? $student->educationalQualification->ssc_group : '' }}</td>
                                <td style="border:1px solid black; padding: 3px 3px 3px 15px">{{ $student->educationalQualification ? $student->educationalQualification->ssc_year : '' }}</td>
                                <td style="border:1px solid black; padding: 3px 3px 3px 15px">{{ $student->educationalQualification ? $student->educationalQualification->ssc_roll : '' }}</td>
                                <td style="border:1px solid black; padding: 3px 3px 3px 15px">{{ $student->educationalQualification ? $student->educationalQualification->ssc_result : '' }}</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid black; padding: 3px 3px 3px 15px">HSC</td>
                                <td style="border:1px solid black; padding: 3px 3px 3px 15px">{{ $student->educationalQualification ? $student->educationalQualification->hsc_board : '' }}</td>
                                <td style="border:1px solid black; padding: 3px 3px 3px 15px">{{ $student->educationalQualification ? $student->educationalQualification->hsc_institute : '' }}</td>
                                <td style="border:1px solid black; padding: 3px 3px 3px 15px">{{ $student->educationalQualification ? $student->educationalQualification->hsc_group : '' }}</td>
                                <td style="border:1px solid black; padding: 3px 3px 3px 15px">{{ $student->educationalQualification ? $student->educationalQualification->hsc_year : '' }}</td>
                                <td style="border:1px solid black; padding: 3px 3px 3px 15px">{{ $student->educationalQualification ? $student->educationalQualification->hsc_roll : '' }}</td>
                                <td style="border:1px solid black; padding: 3px 3px 3px 15px">{{ $student->educationalQualification ? $student->educationalQualification->hsc_result : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
