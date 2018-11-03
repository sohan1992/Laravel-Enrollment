@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
  <div class="card">
    <div class="card-body">
     <h2 class="card-title">Add Teacher Information</h2>
     <p class="alert-success"> 
                  <?php 
                  $message = Session::get('message');

                  if($message){
                    Session::put('message', null);
                    echo $message;
                  }
                  ?>
                </p>
<form class="forms-sample" method="post" action="{{URL::to('/save_teacher')}}" enctype="multipart/form-data">

	{{csrf_field()}}

    <div class="form-group">
      <label for="exampleInputEmail1">Teacher Name</label>
      <input type="text" class="form-control p-input" name="teachers_name" aria-describedby="emailHelp" placeholder="Enter Teacher Name">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Teacher Phone</label>
      <input type="text" class="form-control p-input" name="teachers_phone" aria-describedby="emailHelp" placeholder="Enter Teacher Phone">
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Teacher Address</label>
      <input type="text" class="form-control p-input" name="teachers_address" aria-describedby="emailHelp" placeholder="Enter Teacher Address">
    </div>
    
    <div class="form-group">
    	<label for="exampleInputEmail1">Teacher Department</label>
      <select class="form-control p-input" name="teachers_department">
      	<option value="1">CSE</option>
      	<option value="2">BBA</option>
      	<option value="3">ECE</option>
      	<option value="4">EEE</option>
      	<option value="5">CIVIL</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Image Upload</label>
      <input type="file" class="btn btn-outline-info" name="teachers_image" aria-describedby="emailHelp">
      
    </div>
      <button type="submit" class="btn btn-success">Add Teacher</button>
  </form>
      </div>
  </div>
</div>

@endsection