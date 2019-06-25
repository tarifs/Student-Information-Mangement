<?php

namespace App\Http\Controllers\Student\Result;

use Auth;
use Illuminate\Http\Request;
use App\Models\Admin\Student;
use App\Models\Admin\StudentGPA;
use App\Http\Controllers\Controller;
use App\Models\Admin\ThirtyPercentMark as TPM;

class ResultsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:student');
    }

    public function gpa()
    {
        return view('student.result.gpa')
                ->with('gpa', StudentGPA::where('student_id', Auth::user()->id)->first());
    }

    public function semesterShow()
    {
        return view('student.result.semester_view')
                ->with('semesters', TPM::SEMESTER);
    }

    public function thirtyPercentMark($semester)
    {
        return view('student.result.thirty_percent_mark_view')
                ->with('semester_name', TPM::getSemester($semester))
                ->with('tpms', TPM::where(['student_id'=>Auth::user()->id, 'semester'=>$semester])->get());
    }
}
