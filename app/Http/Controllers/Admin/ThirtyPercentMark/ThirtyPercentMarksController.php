<?php

namespace App\Http\Controllers\Admin\ThirtyPercentMark;

use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\ThirtyPercentMark as TPM;

class ThirtyPercentMarksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.result.thirty_percent_mark.create')
                ->with('student_id', $request->student_id)
                ->with('semester', $request->semester);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'subject' => 'required|min:2',
        ]);

        $tpm = new TPM();

        $tpm->student_id = $request->student_id;
        $tpm->semester = $request->semester;
        $tpm->course = $request->subject;
        $tpm->attendence = $request->attendence;
        $tpm->tutorial = $request->class_test;
        $tpm->midterm = $request->midterm;
        $tpm->total = $request->total;

        if ($tpm->save()) {
            Session::flash('success', 'Thirty percent mark create successfully');
        }

        return redirect()->route('thirty.percent.mark', ['student_id'=>$request->student_id, 'semester'=>$request->semester]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.result.thirty_percent_mark.edit')
                ->with('tpm', TPM::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'subject' => 'required|min:2',
        ]);

        $tpm = TPM::find($id);

        $tpm->course = $request->subject;
        $tpm->attendence = $request->attendence;
        $tpm->tutorial = $request->class_test;
        $tpm->midterm = $request->midterm;
        $tpm->total = $request->total;

        if ($tpm->save()) {
            Session::flash('success', 'Thirty percent mark update successfully');
        }

        return redirect()->route('thirty.percent.mark', ['student_id'=>$tpm->student_id, 'semester'=>$tpm->semester]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tpm = TPM::find($id);

        if ($tpm->delete()) {
            Session::flash('success', 'Thirty percent mark delete successfully');
        }

        return redirect()->back();
    }

    public function showSemester($student_id)
    {
        return view('admin.result.thirty_percent_mark.semester_view')
                ->with('student_id', $student_id)
                ->with('semesters', TPM::SEMESTER);
    }

    public function thirtyPercentMark($student_id, $semester)
    {
        return view('admin.result.thirty_percent_mark.thirty_percent_mark_view')
                ->with('student_id', $student_id)
                ->with('semester', $semester)
                ->with('semester_name', TPM::getSemester($semester))
                ->with('tpms', TPM::where(['student_id'=>$student_id, 'semester'=>$semester])->get());
    }
}
