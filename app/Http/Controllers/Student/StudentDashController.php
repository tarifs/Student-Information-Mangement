<?php

namespace App\Http\Controllers\Student;
use Session;
use PDF;
use Auth;
use Illuminate\Http\Request;
use App\Models\Admin\Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class StudentDashController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:student');
    }

    public function index(){
        return view('student.dash.index')
                ->with('student', Student::find(Auth::user()->id));
    }

    public function pdfViewDownload()
    {
        $student = Student::find(Auth::user()->id);

        // return view('admin.student.pdf_view')
        //         ->with('student', Student::find($id));

        $name = 'Student_Profile_' . time();
        $pdf = PDF::loadView('admin.student.pdf_view', ['student'=>$student])->setPaper('a4', 'portrait');
        return $pdf->download($name.'.pdf');

    }
    public function pass()
    {
        return view('student.dash.pass');
    }
    public function changePass(Request $request)
    {
        $this->validate($request,[
            'old_password' => 'required|min:6',
            'password' => 'required|min:6|confirmed',
        ]);
        $student = Student::find(Auth::user()->id);
        if (Hash::check($request->old_password, $student->password)) {
            $student->password = bcrypt($request->password);
            if ($student->save()) {
                Session::flash('success','Password changed successfully');
            }
        }else{
            Session::flash('info','Old password doesn\'t match');
        }
        return redirect()->route('student.dash');
    }
}
