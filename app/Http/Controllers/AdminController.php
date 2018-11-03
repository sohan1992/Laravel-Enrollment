<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class AdminController extends Controller
{

    //viewprofile part are here
    public function viewprofile(){
        return view('admin.viewprofile');
    }

    //setting part are here
    public function setting(){
        return view('admin.setting');
    }

    //logout....
    public function logout(){
        Session::put('name', null);
        Session::put('id', null);

        return Redirect::to('/admin');
    }

    //student logout....
    public function student_logout(){
        Session::put('student_name', null);
        Session::put('student_id', null);

        return Redirect::to('/');
    }

//student login part are here
    public function student_dashboard(){
        return view('student.dashboard');
    }

    public function student_login_dashboard(Request $request){
        //echo"hello";
        //return view('admin.dashboard');
        $email = $request->student_email;
        $password = md5($request->student_password);
        $result = DB::table('student_tbl')
        ->where('student_email', $email)
        ->where('student_password', $password)
        ->first();

        //echo "</pre>";
       // print_r($result);
    

        if($result){
            Session::put('student_email', $result->student_email);
            Session::put('student_id', $result->student_id);
            return Redirect::to('/student_dashboard');
            //echo "welcome dashboard";

        }else{
            Session::put('exception', 'Email or Password Invalid');
            return Redirect::to('/');
        }

    }


    //login_dashboard for admin....
	public function admin_dashboard(){
		return view('admin.dashboard');
	}

    public function login_dashboard(Request $request){
    	//echo"hello";
    	//return view('admin.dashboard');
    	$email = $request->email;
    	$password = md5($request->password);
    	$result = DB::table('admin_tbl')
    	->where('email', $email)
    	->where('password', $password)
    	->first();

    	//echo "</pre>";
    	//print_r($result);

    	if($result){
    		Session::put('email', $result->email);
    		Session::put('id', $result->id);
    		return Redirect::to('/admin_dashboard');
    		//echo "welcome dashboard";

    	}else{
    		Session::put('exception', 'Email or Password Invalid');
    		return Redirect::to('/admin');
    	}

    }

}
