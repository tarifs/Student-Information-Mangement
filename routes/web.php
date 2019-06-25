<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('layouts.frontend');
});

// Authentication Routes...
$this->get('u-login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('u-login', 'Auth\LoginController@login');
$this->post('u-logout', 'Auth\LoginController@logout')->name('logout');

// student login
$this->get('student/login', 'Auth\StudentLoginController@showLoginForm')->name('student.login');
$this->post('student/login', 'Auth\StudentLoginController@login')->name('student.login.submit');



Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin','middleware'=>'auth'], function () {
    Route::resource('student', 'Admin\Student\StudentsController');
    Route::get('pdf-view/{id}', 'Admin\Student\StudentsController@pdfView')->name('pdf.view');
    // student gpa
    Route::get('student-gpa/{student_id}', 'Admin\StudentGPA\StudentGPAController@create')->name('student-gpa.create');
    Route::post('student-gpa/store', 'Admin\StudentGPA\StudentGPAController@store')->name('student-gpa.store');
    // Thirty Percent Mark
    Route::resource('thirty-percent-mark', 'Admin\ThirtyPercentMark\ThirtyPercentMarksController');
    Route::get('thirty-percent-marks/{student_id}/semester', 'Admin\ThirtyPercentMark\ThirtyPercentMarksController@showSemester')->name('thirty-percent-mark.semester');
    Route::get('thirty-percent-marks/{student_id}/semester/{semester}', 'Admin\ThirtyPercentMark\ThirtyPercentMarksController@thirtyPercentMark')->name('thirty.percent.mark');

    // Admin
    Route::resource('user', 'Admin\User\UserController');
    Route::get('user/admin/{id}','Admin\User\UserController@admin')->name('user.admin');
    Route::get('user/not-admin/{id}','Admin\User\UserController@not_admin')->name('user.not.admin');

});


//.........STUDENT
Route::group(['prefix' => 'student'], function () {
    Route::get('/dash', 'Student\StudentDashController@index')->name('student.dash');
    Route::get('pdf-download', 'Student\StudentDashController@pdfViewDownload')->name('student.pdf.download');
    // GPA
    Route::get('gpa', 'Student\Result\ResultsController@gpa')->name('student.gpa');
    Route::get('thirty-percent/mark/semester', 'Student\Result\ResultsController@semesterShow')->name('student.tpm.semester');
    Route::get('thirty-percent/mark/{semester}/semester', 'Student\Result\ResultsController@thirtyPercentMark')->name('student.tpm');
    Route::get('student/pass','Student\StudentDashController@pass')->name('student.pass');
    Route::post('student/pass-change','Student\StudentDashController@changePass')->name('Pass.change');


});
