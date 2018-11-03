<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CSEController extends Controller
{
    public function cse(){
		$cse_students_info = DB::table('student_tbl')
								->where(['student_department'=>1])
   							    ->get();

        $manage_student = view('admin.cse') 							  			 	->with('cse_students_info',$cse_students_info);

        return view('layout')
        		->with('cse', $manage_student);
        return view('admin.cse');

	}
}
