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
//logout...
Route::get('/logout', 'AdminController@logout');
Route::get('/student_logout', 'AdminController@student_logout');



Route::get('/', function () {
    return view('student_login');
});

Route::get('/admin', function () {
    return view('admin.admin_login');
});

//admin login...
Route::post('/adminlogin', 'AdminController@login_dashboard');
Route::post('/studentlogin', 'AdminController@student_login_dashboard');
Route::get('/student_dashboard', 'AdminController@student_dashboard');


Route::get('/admin_dashboard', 'AdminController@admin_dashboard');

Route::get('/viewprofile', 'AdminController@viewprofile');
Route::get('/setting', 'AdminController@setting');
Route::get('/student_setting', 'StudentController@student_setting');


Route::get('/student_profile', 'StudentController@studentprofile');

//student...
Route::get('/addstudent', 'AddstudentsController@addstudent');
Route::post('/save_student_info', 'AddstudentsController@save_student_info');
Route::get('/student_delete/{student_id}', 'AllstudentsController@student_delete');
Route::get('/student_view/{student_id}', 'AllstudentsController@student_view');
Route::get('/student_edit/{student_id}', 'AllstudentsController@student_edit');
Route::post('/update_student_info/{student_id}', 'AllstudentsController@update_student_info');

Route::post('/student_own_setting_update', 'StudentController@student_own_setting_update');



Route::get('/allstudent', 'AllstudentsController@allstudent');
Route::get('/tutionfee', 'TutionController@tution');
Route::get('/cse', 'CSEController@cse');
Route::get('/ece', 'ECEController@ece');
Route::get('/bba', 'BBAController@bba');
Route::get('/eee', 'EEEController@eee');
Route::get('/civil', 'CIVILController@civil');
Route::get('/allteacher', 'TeacherController@allteacher');
Route::get('/addteacher', 'TeacherController@addteacher');
Route::post('/save_teacher', 'TeacherController@save_teacher');





