<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class StudentController extends Controller
{
   public function studentprofile(){
   	$student_id = Session::get('student_id');
   	$student_profile = DB::table('student_tbl')
   	                  ->select('*')
   	                  ->where('student_id', $student_id)
   	                  ->first();

   	//echo"</pre>";
   	//print_r($student_profile);
   	$manage_student = view('student.student_view')
   	                 ->with('student_profile', $student_profile);
   	return view('student_layout')
   	        ->with('student_view', $manage_student);                  
		//return view('student.student_view');
	}

//student setting are here
	 public function student_setting(){
	 	$student_id = Session::get('student_id');
		$student_description_edit = DB::table('student_tbl')
								  ->select('*')
								  ->where('student_id', $student_id)
								  ->first();
		//echo "/<pre>";
		//print_r($student_description_edit);
		//echo "/<pre>";
		//return view('admin.student_edit');

		$manage_description_student = view('student.student_setting')
		        ->with('student_description_edit',$student_description_edit);

		return view('student_layout')
		        ->with('student_setting', $manage_description_student);
	}

	//setting update are here
	public function student_own_setting_update(Request $request){
		$student_id = Session::get('student_id');
		//echo "</pre>";
		//print_r($student_id);
		$data = array();
		$data['student_phone'] = $request->student_phone;
		$data['student_address'] = $request->student_address;
		$data['student_password'] = md5($request->student_password);
		
		DB::table('student_tbl')
		     ->where('student_id', $student_id)
		     ->update($data);

		Session::put('update_message', 'student updated Successfully');
		return Redirect::to('/student_setting');     
	}

}
