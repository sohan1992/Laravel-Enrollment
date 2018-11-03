@extends('student_layout')
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