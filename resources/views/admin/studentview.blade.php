@extends('layout')

@php
	function convert_deparment($value){
		$values = [
			1=>'CSE',
			2=>'BBA',
			3=>'ECE',
			4=>'EEE',
			5=>'CIVIL'
		];
		return $values[$value];
	}
@endphp

@section('content')

<div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-12">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="{{URL::to($student_description_view->student_image)}}" alt="">
                  <p class="name">{{$student_description_view->student_name}}</p>
                  <p class="designation">{{$student_description_view->student_roll}}</p>
                  <a class="email" href="#">{{$student_description_view->student_email}}</a>
                  <a class="number">{{$student_description_view->student_phone}}</a>
                </div>
              </div>
              <div class="card mb-12">
                <div class="card-body overview">
                  <ul class="achivements">
                    <h2 style="color: maroon; font-family: cursive; font-weight: bolder;">Institute of Science And Technology</h2>
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>The total student information are given below.</p>
                  </div>
                  <div class="info-links">
                    <a class="website">Father Name:</i>
                      <span style="font-family: verdana">{{$student_description_view->student_fathername}}</span>
                    </a>
                    <a class="website">Mother Name:</i>
                      <span style="font-family: verdana">{{$student_description_view->student_mothername}}</span>
                    </a>
                    <a class="website">Address:</i>
                      <span style="font-family: verdana">{{$student_description_view->student_address}}</span>
                    </a>
                    <a class="website">Department:</i>
                      <span style="font-family: verdana">
                      	{{convert_deparment($student_description_view->student_department)}}
                      </span>
                    </a>
                    <a class="website">Admission Year:</i>
                      <span style="font-family: verdana">{{$student_description_view->student_admissionyear}}</span>
                    </a>
                    
                    </a>
                  </div>
                </div>
              </div>
            </div>
 
          </div>
        </div>


@endsection