@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
  <div class="card">
    <div class="card-body">
     <h2 class="card-title">Add Student Information</h2>
     
<form class="forms-sample" method="post" action="{{URL::to('/update_student_info', $student_description_edit->student_id)}}">

	{{csrf_field()}}

    <div class="form-group">
      <label for="exampleInputEmail1">Student Name</label>
      <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" 
      value="{{($student_description_edit->student_name)}}">
    </div>
    <div class="form-group">
          <label for="exampleInputEmail1">Student Roll</label>
          <input type="text" class="form-control p-input" name="student_roll" aria-describedby="emailHelp" 
          value="{{($student_description_edit->student_roll)}}">
        </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Student Father's Name</label>
      <input type="text" class="form-control p-input" name="student_fathername" aria-describedby="emailHelp" 
      value="{{($student_description_edit->student_fathername)}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Student Mother's Name</label>
      <input type="text" class="form-control p-input" name="student_mothername" aria-describedby="emailHelp" 
      value="{{($student_description_edit->student_mothername)}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Student Email</label>
      <input type="email" class="form-control p-input" name="student_email" aria-describedby="emailHelp" 
      value="{{($student_description_edit->student_email)}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Student Password</label>
      <input type="password" class="form-control p-input" name="student_password" aria-describedby="emailHelp" 
      value="{{($student_description_edit->student_password)}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Student Phone</label>
      <input type="text" class="form-control p-input" name="student_phone" aria-describedby="emailHelp" 
      value="{{($student_description_edit->student_phone)}}">
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Student Address</label>
      <input type="text" class="form-control p-input" name="student_address" aria-describedby="emailHelp" 
      value="{{($student_description_edit->student_address)}}">
        
      </textarea>
    </div>
    
    <div class="form-group">
      <label for="exampleInputEmail1">Student Admission Year</label>
      <input type="date" class="form-control p-input" name="student_admissionyear" aria-describedby="emailHelp" 
      value="{{($student_description_edit->student_admissionyear)}}">
    </div>
      <button type="submit" class="btn btn-success">Update</button>
  </form>
      </div>
  </div>
</div>

@endsection