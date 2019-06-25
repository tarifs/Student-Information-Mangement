<?php

namespace App\Http\Controllers\Admin\Student;

use PDF;
use Session;
use Illuminate\Http\Request;
use App\Models\Admin\Student;
use App\Models\Admin\Address;
use App\Models\Admin\Guardian;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentCreateRequest;
use App\Http\Requests\StudentUpdateRequest;
use App\Models\Admin\EducationalQualification;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.student.index')
                ->with('students', Student::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentCreateRequest $request)
    {
        $input = $request->all();
        // student
        $input['avatar'] = $this->imageUpload($request->avatar,'avatar');
        $input['password'] = bcrypt($request->password);
        $student = Student::create($input);

        // Educational Qualification
        $input['student_id'] = $student->id;
        EducationalQualification::create($input);

        // Guardian
        $guardian = new Guardian;
        $guardian->student_id = $student->id;
        $guardian->name = $request->guardian_name;
        $guardian->contact = $request->guardian_contact;
        $guardian->relationship = $request->relationship;
        $guardian->save();

        // Address
        Address::create($input);

        if ($student) {
            Session::flash('success','Student create successfully');
        }

        return redirect()->back();
    }

    public function imageUpload($image,$path)
    {
        $new_name = '';
        if ($image) {
            $new_name = time().'.'.$image->getClientOriginalExtension();
            $image->move('public/uploads/'.$path.'/',$new_name);
        }
        return $new_name;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.student.show')
                ->with('student', Student::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.student.edit')
                ->with('student', Student::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentUpdateRequest $request, $id)
    {
        $student = Student::find($id);
        $this->validate($request, [
            'email' => 'required|email|unique:students,email,' . $id,
            'registration_no' => 'required|min:2|unique:students,registration_no,' . $id,
        ]);

        $input = $request->all();

        // student
        if ($image = $request->avatar) {
            $image->move('public/uploads/avatar/',$student->avatar);
        }
        $input['avatar'] = $student->getOriginal('avatar');
        $input['password'] = bcrypt($request->password);
        $student->update($input);

        // Educational Qualification
        $input['student_id'] = $student->id;
        $edu = EducationalQualification::where('student_id',$id)->first();
        $edu->update($input);

        // Guardian
        $guardian = Guardian::where('student_id', $id)->first();
        if (!$guardian) {
            $guardian = new Guardian;
        }
        $guardian->student_id = $student->id;
        $guardian->name = $request->guardian_name;
        $guardian->contact = $request->guardian_contact;
        $guardian->relationship = $request->relationship;
        $guardian->save();

        // Address
        $address = Address::where('student_id', $id)->first();
        $address->update($input);

        if ($student) {
            Session::flash('success','Student update successfully');
        }

        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);

        if ($student->delete()) {
            unlink('public/uploads/avatar/' . $student->getOriginal('avatar'));
            // $path =  public_path(). '/uploads/avatar/' . $student->getOriginal('avatar');
            // unlink($path);
            Session::flash('success', 'Student delete successfull');
        }

        return redirect()->back();
    }

    public function pdfView($id)
    {
        $student = Student::find($id);

        // return view('admin.student.pdf_view')
        //         ->with('student', Student::find($id));

        $name = 'Student_Profile_' . time();
        $pdf = PDF::loadView('admin.student.pdf_view', ['student'=>$student])->setPaper('a4', 'portrait');
        return $pdf->download($name.'.pdf');

    }
}
