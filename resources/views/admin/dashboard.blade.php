@extends('layout')
@section('content')
<div class="col-sm-6 col-md-3 grid-margin">
      <div class="card">
        <div class="card-body">
          @php
            $student = DB::table('student_tbl')
                     ->count('student_id')
          @endphp
          <h2 class="card-title">All Student</h2>
          <p style="font-family: cursive;font-size: 30px;font-weight: bold;text-align: center;">{{$student}}</p>
        </div>
        <div class="dashboard-chart-card-container">
          <div id="dashboard-card-chart-1" class="card-float-chart"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3 grid-margin">
      <div class="card">
        <div class="card-body">
          @php
            $teacher = DB::table('teachers')
                     ->count('teachers_id')
          @endphp
          <h2 class="card-title">All Teacher</h2>
          <p style="font-family: cursive;font-size: 30px;font-weight: bold;text-align: center;">{{$teacher}}</p>
        </div>
        <div class="dashboard-chart-card-container">
          <div id="dashboard-card-chart-2" class="card-float-chart"></div>
        </div>
      </div>
            </div>
    <div class="col-sm-6 col-md-3 grid-margin">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Tution Fee</h2>
          <p style="font-family: cursive;font-size: 30px;font-weight: bold;text-align: center;">Monthly:2500</p>
        </div>
        <div class="dashboard-chart-card-container">
          <div id="dashboard-card-chart-3" class="card-float-chart"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3 grid-margin">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Revenue</h2>
          <p style="font-family: cursive;font-size: 30px;font-weight: bold;text-align: center;">Revenue</p>
        </div>
        <div class="dashboard-chart-card-container">
          <div id="dashboard-card-chart-4" class="card-float-chart"></div>
        </div>
      </div>
    </div>
  </div>
      
        


<div class="row">
  <div class="col-md-4 grid-margin d-flex align-items-stretch">
    <div class="row">
      <div class="col-12 grid-margin d-flex align-items-stretch">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-12 mb-3">
            <div class="social-panel bg-facebook"><i class="mdi mdi-facebook"></i><p class="mb-0">CSE</p></div>
          </div>
          <div class="col-12 col-sm-6 col-md-12 mb-3">
            <div class="social-panel bg-twitter"><i class="mdi mdi-twitter"></i><p class="mb-0">BBA</p></div>
          </div>
          <div class="col-12 col-sm-6 col-md-12 mb-3">
            <div class="social-panel bg-google"><i class="mdi mdi-google"></i><p class="mb-0">ECE</p></div>
          </div>
          <div class="col-12 col-sm-6 col-md-12">
            <div class="social-panel bg-linkedin"><i class="mdi mdi-linkedin"></i><p class="mb-0">EEE</p></div>
          </div>
                    
  </div>
</div>
<div class="col-12 d-flex align-items-stretch">
  <div class="col-12 col-sm-6 col-md-12 mb-3">
      <div class="social-panel bg-facebook"><i class="mdi mdi-facebook"></i><p class="mb-0">CIVIL</p></div>
    </div>
    
                  
    </div>
  </div>
</div>
<div class="col-md-4 grid-margin d-flex align-items-stretch">
  <div class="card task-list w-100">
    <div class="card-body">
      <h2 class="card-title">Task List</h2>
      <div class="task-cards selected">
        <div class="wrapper d-flex flex-row align-items-center">
          <div class="wrapper">
            <p class="title">Shiply Order</p>
            <p class="reference-url">URL<a href="#">goo.gl/tp.ttt</a></p>
          </div>
          <p class="ticket-number ml-auto">#1698</p>
        </div>
        <hr>
        <div class="wrapper d-flex flex-row align-items-end justify-content-between">
          <div class="amount d-flex flex-column">
            <small>AMOUNT</small>
            <small class="value">$2599</small>
          </div>
          <div class="status d-flex flex-column">
            <small>STATUS</small>
            <small class="value">Monday, 12pm</small>
          </div>
          <i class="mdi mdi-delete-empty"></i>
        </div>
      </div>
      
      
    </div>
  </div>
</div>
<div class="col-md-4 grid-margin d-flex align-items-stretch">
</div>
</div>


</div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Enrollment System</a> &copy; 2018
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
@endsection