@extends('student_layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
  <div class="card">
    <div class="card-body">
     <h2 class="card-title">Update Your Profile</h2>
     <p class="alert-success"> 
                  <?php 
                  $update_message = Session::get('update_message');

                  if($update_message){
                    Session::put('update_message', null);
                    echo $update_message;
                  }
                  ?>
                </p>
     
<form class="forms-sample" method="post" action="{{URL::to('/student_own_setting_update')}}">

	{{csrf_field()}}

    
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
    
      <button type="submit" class="btn btn-success">Update</button>
  </form>
      </div>
  </div>
</div>

@endsection