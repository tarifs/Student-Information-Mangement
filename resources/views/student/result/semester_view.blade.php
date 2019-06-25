@extends('layouts.student')

@section('content')
    <div style="padding:15px" class="container">
        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <strong>Semester List</strong>
                </div>
                <div class="card-body">

                    <div class="col-md-5">
                        <ul class="list-group">
                            @if ($semesters)
                                @foreach ($semesters as $key => $value)
                                    <li class="list-group-item">
                                        <a style="color: black" href="{!! route('student.tpm', $key) !!}">{{ $value }}</a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
