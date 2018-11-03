<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CIVILController extends Controller
{
     public function civil(){
     	$civil_students_info = DB::table('student_tbl')
								->where(['student_department'=>5])
   							    ->get();

        $manage_student = view('admin.civil') 							  			 	->with('civil_students_info',$civil_students_info);

        return view('layout')
        		->with('civil', $manage_student);
		return view('admin.civil');
	}
}
