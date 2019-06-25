@extends('layouts.student')

@section('content')
    <div style="padding:15px" class="container">
        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <strong>{{ $semester_name }}</strong>
                </div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="text-align:center" rowspan="2">Subject</th>
                                <th style="text-align:center" colspan="3">Continuous Evaluation Marks</th>
                                <th style="text-align:center" rowspan="2">Total <br> 30/15</th>
                            </tr>
                            <tr>
                                <th style="text-align:center" >Attendence</th>
                                <th style="text-align:center" >Class Test/Assignment</th>
                                <th style="text-align:center" >Midterm</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($tpms->count())
                                @foreach ($tpms as $tpm)
                                    <tr>
                                        <td>{{ $tpm ? $tpm->course : '' }}</td>
                                        <td>{{ $tpm ? $tpm->attendence : '' }}</td>
                                        <td>{{ $tpm ? $tpm->tutorial : '' }}</td>
                                        <td>{{ $tpm ? $tpm->midterm : '' }}</td>
                                        <td>{{ $tpm ? $tpm->total : '' }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
