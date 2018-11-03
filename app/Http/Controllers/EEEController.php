<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EEEController extends Controller
{
     public function eee(){
     	$eee_students_info = DB::table('student_tbl')
								->where(['student_department'=>4])
   							    ->get();

        $manage_student = view('admin.eee') 							  			 	->with('eee_students_info',$eee_students_info);

        return view('layout')
        		->with('eee', $manage_student);
		return view('admin.eee');
	}
}
