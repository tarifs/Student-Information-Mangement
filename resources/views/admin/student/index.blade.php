@extends('layouts.admin')

@section('content')
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <strong>Student List</strong>
            </div>
            <div class="card-body">

                <table class="table table-border" id="bootstrap-data-table">
                    <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Batch</th>
                        <th>Exam Roll</th>
                        <th>Registration No</th>
                        <th>Phone No</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @php
                            $i=1;
                        @endphp
                        @if ($students)
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->batch }}</td>
                                    <td>{{ $student->exam_roll }}</td>
                                    <td>{{ $student->registration_no }}</td>
                                    <td>{{ $student->phone_no }}</td>
                                    <td>
                                        <div class="dropdown float-right">
                                            <button class="btn dropdown-toggle theme-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <div class="dropdown-menu-content">
                                                <a class="dropdown-item" href="{{ route('student-gpa.create',$student->id) }}">GPA</a>
                                                <a class="dropdown-item" href="{{ route('thirty-percent-mark.semester',$student->id) }}">30% Mark</a>
                                                <a class="dropdown-item" href="{{ route('student.show', $student->id) }}">Show</a>
                                                <a class="dropdown-item" href="{{ route('student.edit', $student->id) }}">Edit</a>
                                                <a class="dropdown-item" onclick="$('#my_form').submit()" href="#">Delete</a>

                                                <form id="my_form" class="" action="{{ route('student.destroy', $student->id) }}" method="post">
                                                    @csrf @method('delete')
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
