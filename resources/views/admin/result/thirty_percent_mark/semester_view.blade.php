@extends('layouts.admin')

@section('content')
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
                                    <a href="{!! route('thirty.percent.mark', ['student_id'=>$student_id, 'semester'=>$key]) !!}">{{ $value }}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>

            </div>
        </div>
    </div>
@endsection
