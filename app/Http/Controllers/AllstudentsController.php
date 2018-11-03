<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class AllstudentsController extends Controller
{
   public function allstudent(){
		
   		$allstudents_info = DB::table('student_tbl')
   							    ->get();

        $manage_student = view('admin.allstudent') 							  			 	->with('allstudents_info',$allstudents_info);

        return view('layout')
        		->with('allstudent', $manage_student);


		//return view('admin.allstudent');
	}
	//student delete query method
	public function student_delete($student_id){
		DB::table('student_tbl')
				->where('student_id', $student_id)
				->delete();
		return Redirect::to('/allstudent');

		//return view('admin.allstudent');
	}

	//student view information method
	public function student_view($student_id){
		$student_description_view = DB::table('student_tbl')
								  ->select('*')
								  ->where('student_id', $student_id)
								  ->first();
		//echo "/<pre>";
		//print_r($student_description_view);
		//echo "/<pre>";
		//return view('admin.studentview');
		$manage_description_student = view('admin.studentview')
		        ->with('student_description_view',$student_description_view);

		return view('layout')
		        ->with('studentview', $manage_description_student);
	}

	//student edit method
	public function student_edit($student_id){
		$student_description_edit = DB::table('student_tbl')
								  ->select('*')
								  ->where('student_id', $student_id)
								  ->first();
		//echo "/<pre>";
		//print_r($student_description_edit);
		//echo "/<pre>";
		//return view('admin.student_edit');

		$manage_description_student = view('admin.student_edit')
		        ->with('student_description_edit',$student_description_edit);

		return view('layout')
		        ->with('student_edit', $manage_description_student);
	}

	//student update method
	public function update_student_info(Request $request, $student_id){
		//echo "</pre>";
		//print_r($student_id);
		$data = array();
		$data['student_name'] = $request->student_name;
		$data['student_roll'] = $request->student_roll;
		$data['student_fathername'] = $request->student_fathername;
		$data['student_mothername'] = $request->student_mothername;
		$data['student_email'] = $request->student_email;
		$data['student_phone'] = $request->student_phone;
		$data['student_address'] = $request->student_address;
		$data['student_password'] = md5($request->student_password);
		$data['student_admissionyear'] = $request->student_admissionyear;
		
		DB::table('student_tbl')
		     ->where('student_id', $student_id)
		     ->update($data);

		Session::put('update_message', 'student updated Successfully');
		return Redirect::to('/allstudent');     
	}

}
