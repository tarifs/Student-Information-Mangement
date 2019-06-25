@extends('layouts.admin')

@section('content')
    <div class="card">
        @include('includes.errors')
        <form action="{{ route('student.update', $student->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf @method('put')
            <div class="card-header">
                <strong>Update Student Information</strong>
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
                        <td><input type="text" name="name" class="form-control" value="{{ $student ? $student->name : '' }}"></td>
                    </tr>
                    <tr>
                        <td width="250px">Email</td>
                        <td><input type="email" name="email" class="form-control" value="{{ $student ? $student->email : '' }}"></td>
                    </tr>
                    <tr>
                        <td width="250px">Password</td>
                        <td><input type="text" name="password" value="gb123456" class="form-control" value="{{ $student ? $student->password : '' }}"></td>
                    </tr>
                    <tr>
                        <td width="250px">Old Avatar</td>
                        <td> <img src="{{ $student ? $student->avatar : '' }}" width="100px" alt=""> </td>
                    </tr>
                    <tr>
                        <td width="250px">Avatar</td>
                        <td><input type="file" name="avatar" class="form-control-file"></td>
                    </tr>
                    <tr>
                        <td width="250px">Batch</td>
                        <td><input type="text" name="batch" class="form-control" value="{{ $student ? $student->batch : '' }}"></td>
                    </tr>
                    <tr>
                        <td width="250px">Class Roll</td>
                        <td><input type="text" name="class_roll" class="form-control" value="{{ $student ? $student->class_roll : '' }}"></td>
                    </tr>
                    <tr>
                        <td width="250px">Exam Roll</td>
                        <td><input type="text" name="exam_roll" class="form-control" value="{{ $student ? $student->exam_roll : '' }}"></td>
                    </tr>
                    <tr>
                        <td width="250px">Registration No</td>
                        <td><input type="text" name="registration_no" class="form-control" value="{{ $student ? $student->registration_no : '' }}"></td>
                    </tr>
                    <tr>
                        <td width="250px">Gender</td>
                        <td>
                            <select class="form-control" value="" name="gender">
                                <option value="">Select Gender</option>
                                <option {{ $student->gender == '1'? 'selected' : '' }} value="1">Male</option>
                                <option {{ $student->gender == '2'? 'selected' : '' }} value="2">Female</option>
                                <option {{ $student->gender == '3'? 'selected' : '' }} value="3">Other's</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="250px">Phone No</td>
                        <td><input type="text" name="phone_no" class="form-control" value="{{ $student->phone_no }}"></td>
                    </tr>
                    <tr>
                        <td width="250px">Blood Group</td>
                        <td>
                            <select class="form-control" value="{{ $student->blood_group }}" name="blood_group">
                                <option value="">Select Blood Group</option>
                                <option  {{ $student->blood_group == '1' ? 'selected' : '' }} value="1">A+</option>
                                <option  {{ $student->blood_group == '2' ? 'selected' : '' }} value="2">A-</option>
                                <option  {{ $student->blood_group == '3' ? 'selected' : '' }} value="3">O+</option>
                                <option  {{ $student->blood_group == '4' ? 'selected' : '' }} value="4">O-</option>
                                <option  {{ $student->blood_group == '5' ? 'selected' : '' }} value="5">B+</option>
                                <option  {{ $student->blood_group == '6' ? 'selected' : '' }} value="6">B-</option>
                                <option  {{ $student->blood_group == '7' ? 'selected' : '' }} value="7">AB+</option>
                                <option  {{ $student->blood_group == '8' ? 'selected' : '' }} value="8">AB-</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="250px">Religion</td>
                        <td><input type="text" name="religion" class="form-control" value="{{ $student ? $student->religion : '' }}"></td>
                    </tr>
                    <tr>
                        <td width="250px">Date of Birth</td>
                        <td><input type="date" name="dob" class="form-control" value="{{ $student ? $student->dob : '' }}"></td>
                    </tr>
                    <tr>
                        <td width="250px">Nationality</td>
                        <td><input type="text" name="nationality" class="form-control" value="{{ $student ? $student->nationality : '' }}"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><h3>Guardian</h3></td>
                    </tr>
                    <tr>
                        <td>Guardian Name</td>
                        <td><input type="text" name="guardian_name" class="form-control" value="{{ $student->guardian ? $student->guardian->name : '' }}"></td>
                    </tr>
                    <tr>
                        <td>Guardian Contact</td>
                        <td><input type="text" name="guardian_contact" class="form-control" value="{{ $student->guardian ? $student->guardian->contact : '' }}"></td>
                    </tr>
                    <tr>
                        <td>Guardian Relationship</td>
                        <td><input type="text" name="relationship" class="form-control" value="{{ $student->guardian ? $student->guardian->relationship : '' }}"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><h3>Present Address</h3></td>
                    </tr>
                    <tr>
                        <td>Village</td>
                        <td><input type="text" name="present_village" class="form-control" value="{{  $student->address ? $student->address->present_village : '' }}"></td>
                    </tr>
                    <tr>
                        <td>Post Office</td>
                        <td><input type="text" name="present_post_office" class="form-control" value="{{  $student->address ? $student->address->present_post_office : '' }}"></td>
                    </tr>
                    <tr>
                        <td>Post Code</td>
                        <td><input type="text" name="present_post_code" class="form-control" value="{{  $student->address ? $student->address->present_post_code : '' }}"></td>
                    </tr>
                    <tr>
                        <td>Upazila</td>
                        <td><input type="text" name="present_upazila" class="form-control" value="{{  $student->address ? $student->address->present_upazila : '' }}"></td>
                    </tr>
                    <tr>
                        <td>District</td>
                        <td><input type="text" name="present_district" class="form-control" value="{{  $student->address ? $student->address->present_district : '' }}"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><h3>Permanet Address</h3></td>
                    </tr>
                    <tr>
                        <td>Village</td>
                        <td><input type="text" name="permanent_village" class="form-control" value="{{  $student->address ? $student->address->permanent_village : '' }}"></td>
                    </tr>
                    <tr>
                        <td>Post Office</td>
                        <td><input type="text" name="permanent_post_office" class="form-control" value="{{  $student->address ? $student->address->permanent_post_office : '' }}"></td>
                    </tr>
                    <tr>
                        <td>Post Code</td>
                        <td><input type="text" name="permanent_post_code" class="form-control" value="{{  $student->address ? $student->address->permanent_post_code : '' }}"></td>
                    </tr>
                    <tr>
                        <td>Upazila</td>
                        <td><input type="text" name="permanent_upazila" class="form-control" value="{{  $student->address ? $student->address->permanent_upazila : '' }}"></td>
                    </tr>
                    <tr>
                        <td>District</td>
                        <td><input type="text" name="permanent_district" class="form-control" value="{{  $student->address ? $student->address->permanent_district : '' }}"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><h3>Educational Qualification</h3></td>
                    </tr>
                    <tr>
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
                                    <td>
                                        <select name="ssc_board" class="form-control" id="board">
                                            <option value="{{  $student->educationalQualification ? $student->educationalQualification->ssc_board : '' }}">{{  $student->educationalQualification ? $student->educationalQualification->ssc_board : '' }}</option>
                                            <option value="">Select One</option>
                                            <option value="barisal">Barisal</option>
                                            <option value="chittagong">Chittagong</option>
                                            <option value="comilla">Comilla</option>
                                            <option value="dhaka">Dhaka</option>
                                            <option value="dinajpur">Dinajpur</option>
                                            <option value="jessore">Jessore</option>
                                            <option value="rajshahi">Rajshahi</option>
                                            <option value="sylhet">Sylhet</option>
                                            <option value="madrasah">Madrasah</option>
                                            <option value="technical">Technical</option>
                                            <option value="dibs">DIBS(Dhaka)</option>
                                        </select>
                                    </td>
                                    <td><input type="text" name="ssc_institute" class="form-control" value="{{  $student->educationalQualification ? $student->educationalQualification->ssc_institute : '' }}"></td>
                                    <td>
                                        <select  name="ssc_group" class="form-control">
                                            <option value="{{  $student->educationalQualification ? $student->educationalQualification->ssc_group : '' }}">{{  $student->educationalQualification ? $student->educationalQualification->ssc_group : '' }}</option>
                                            <option value="">Select One</option>
                                            <option value="Science">Science</option>
                                            <option value="Humanities">Humanities</option>
                                            <option value="Business Studies">Business Studies</option>
                                            <option value="Islamic Studies">Islamic Studies</option>
                                            <option value="Economics">Economics</option>
                                            <option value="Music">Music</option>
                                        </select>
                                    </td>
                                    <td><input type="text" name="ssc_year" class="form-control" value="{{  $student->educationalQualification ? $student->educationalQualification->ssc_year : '' }}"></td>
                                    <td><input type="text" name="ssc_roll" class="form-control" value="{{  $student->educationalQualification ? $student->educationalQualification->ssc_roll : '' }}"></td>
                                    <td><input type="text" name="ssc_result" class="form-control" value="{{  $student->educationalQualification ? $student->educationalQualification->ssc_result : '' }}"></td>
                                </tr>
                                <tr>
                                    <td>HSC</td>
                                    <td>
                                        <select name="hsc_board" class="form-control" id="board">
                                            <option value="{{  $student->educationalQualification ? $student->educationalQualification->hsc_board : '' }}">{{  $student->educationalQualification ? $student->educationalQualification->hsc_board : '' }}</option>
                                            <option value="">Select One</option>
                                            <option value="barisal">Barisal</option>
                                            <option value="chittagong">Chittagong</option>
                                            <option value="comilla">Comilla</option>
                                            <option value="dhaka">Dhaka</option>
                                            <option value="dinajpur">Dinajpur</option>
                                            <option value="jessore">Jessore</option>
                                            <option value="rajshahi">Rajshahi</option>
                                            <option value="sylhet">Sylhet</option>
                                            <option value="madrasah">Madrasah</option>
                                            <option value="technical">Technical</option>
                                            <option value="dibs">DIBS(Dhaka)</option>
                                        </select>

                                    </td>
                                    <td><input type="text" name="hsc_institute" class="form-control" value="{{  $student->educationalQualification ? $student->educationalQualification->hsc_institute : '' }}"></td>
                                    <td>
                                        <select  name="hsc_group" class="form-control">
                                            <option value="{{  $student->educationalQualification ? $student->educationalQualification->hsc_group : '' }}">{{  $student->educationalQualification ? $student->educationalQualification->hsc_group : '' }}</option>
                                            <option value="">Select One</option>
                                            <option value="Science">Science</option>
                                            <option value="Humanities">Humanities</option>
                                            <option value="Business Studies">Business Studies</option>
                                            <option value="Islamic Studies">Islamic Studies</option>
                                            <option value="Economics">Economics</option>
                                            <option value="Music">Music</option>
                                        </select>
                                    </td>
                                    <td><input type="text" name="hsc_year" class="form-control" value="{{  $student->educationalQualification ? $student->educationalQualification->hsc_year : '' }}"></td>
                                    <td><input type="text" name="hsc_roll" class="form-control" value="{{  $student->educationalQualification ? $student->educationalQualification->hsc_roll : '' }}"></td>
                                    <td><input type="text" name="hsc_result" class="form-control" value="{{  $student->educationalQualification ? $student->educationalQualification->hsc_result : '' }}"></td>
                                </tr>
                            </tbody>
                        </table>
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm pull-right">
                <i class="fa fa-dot-circle-o"></i> Update
            </button> <br>
        </div>
    </form>
</div>
@endsection
