@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
  <div class="card">
    <div class="card-body">
     <h2 class="card-title">Add Student Information</h2>
     <p class="alert-success"> 
                  <?php 
                  $message = Session::get('message');

                  if($message){
                    Session::put('message', null);
                    echo $message;
                  }
                  ?>
                </p>
<form class="forms-sample" method="post" action="{{URL::to('/save_student_info')}}" enctype="multipart/form-data">

	{{csrf_field()}}

    <div class="form-group">
      <label for="exampleInputEmail1">Student Name</label>
      <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" placeholder="Enter Student Name">
    </div>
    <div class="form-group">
          <label for="exampleInputEmail1">Student Roll</label>
          <input type="text" class="form-control p-input" name="student_roll" aria-describedby="emailHelp" placeholder="Enter Student Roll">
        </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Student Father's Name</label>
      <input type="text" class="form-control p-input" name="student_fathername" aria-describedby="emailHelp" placeholder="Enter Student Father Name">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Student Mother's Name</label>
      <input type="text" class="form-control p-input" name="student_mothername" aria-describedby="emailHelp" placeholder="Enter Student Mother Name">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Student Email</label>
      <input type="email" class="form-control p-input" name="student_email" aria-describedby="emailHelp" placeholder="Enter Student Email">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Student Password</label>
      <input type="password" class="form-control p-input" name="student_password" aria-describedby="emailHelp" placeholder="Enter Student Password">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Student Phone</label>
      <input type="text" class="form-control p-input" name="student_phone" aria-describedby="emailHelp" placeholder="Enter Student Phone">
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Student Address</label>
      <textarea class="form-control p-input" name="student_address" rows="3"></textarea>
    </div>
	<div class="form-group">
      <label for="exampleInputEmail1">Image Upload</label>
      <input type="file" class="btn btn-outline-info" name="student_image" aria-describedby="emailHelp">
      
    </div>
    
    <div class="form-group">
      <label for="exampleInputEmail1">Student Admission Year</label>
      <input type="date" class="form-control p-input" name="student_admissionyear" aria-describedby="emailHelp" placeholder="Enter Student Admission Year">
    </div>
    <div class="form-group">
    	<label for="exampleInputEmail1">Student Department</label>
      <select class="form-control p-input" name="student_department">
      	<option value="1">CSE</option>
      	<option value="2">BBA</option>
      	<option value="3">ECE</option>
      	<option value="4">EEE</option>
      	<option value="5">CIVIL</option>
      </select>
    </div>
      <button type="submit" class="btn btn-success">Submit</button>
  </form>
      </div>
  </div>
</div>

@endsection