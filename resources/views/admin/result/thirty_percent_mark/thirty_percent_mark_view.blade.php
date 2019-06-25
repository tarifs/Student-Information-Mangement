@extends('layouts.admin')

@section('content')
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <strong>{{ $semester_name }}</strong>
                <a style="border-radius: 5px;" class="btn btn-sm btn-secondary pull-right" href="{{ route('thirty-percent-mark.semester', $student_id) }}">Back</a>
            </div>
            <div class="card-body">

                <table style="text-align:center" class="table table-bordered">
                    <thead>
                        <tr>
                            <th rowspan="2">Subject</th>
                            <th colspan="3">Continuous Evaluation Marks</th>
                            <th rowspan="2">Total <br> 30/15</th>
                            <th rowspan="2">Action</th>
                        </tr>
                        <tr>
                            <th>Attendence</th>
                            <th>Class Test/Assignment</th>
                            <th>Midterm</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($tpms->count())
                            @foreach ($tpms as $tpm)
                                <tr>
                                    <td>{{ $tpm->course }}</td>
                                    <td>{{ $tpm->attendence }}</td>
                                    <td>{{ $tpm->tutorial }}</td>
                                    <td>{{ $tpm->midterm }}</td>
                                    <td>{{ $tpm->total }}</td>
                                    <td>
                                        <a href="{!! route('thirty-percent-mark.edit', $tpm->id) !!}">Edit</a> |
                                        <a class="" onclick="$('#my_form').submit()" href="#">Delete</a>
                                        <form id="my_form" class="" action="{{ route('thirty-percent-mark.destroy', $tpm->id) }}" method="post">
                                            @csrf @method('delete')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        <tr>
                            <td colspan="6">
                                <a style="border-radius: 5px" class="btn btn-sm btn-primary btn-block" href="{!! route('thirty-percent-mark.create', ['student_id'=>$student_id, 'semester'=>$semester]) !!}">Add</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
