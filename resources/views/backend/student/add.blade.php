@extends('backend.layouts.master')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Manage Student</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student </li>
            </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3>Student Details
                      <a class="btn btn-primary btn-sm float-right" href="{{route('student.view')}}"> <i class="fa fa-back-circle">back</i></a>
                      </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <form action="{{ route('student.store') }}" method="POST">
                        @csrf
                        
                        <div class="row">
                          
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                              <strong>student id:</strong>
                              <input type="text" name="studentid" class="form-control" placeholder="id">
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                              <strong>student name:</strong>
                              <input type="text" name="studentname" class="form-control" placeholder="Name">
                            </div>
                          </div><div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                            <strong>Email:</strong>
                            <input type="email" name="email" class="form-control" placeholder="email">
                          </div>
                        </div><div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                          <strong>Phone:</strong>
                          <input type="text" name="phone" class="form-control" placeholder="Phone">
                        </div>
                      </div><div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                        <strong>Date of birth:</strong>
                        <input type="date" name="dateofbirth" class="form-control" placeholder="Date of birth">
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                        <strong>Password:</strong>
                        <input type="password" name="password" class="form-control" placeholder="password">
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                        <strong>Security question:</strong>
                        <input type="text" name="security_question" class="form-control" placeholder="security question">
                      </div>
                    </div><div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <strong>Answer:</strong>
                      <input type="text" name="answer" class="form-control" placeholder="Answer">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <strong>Picture:</strong>
                      <input type="file" name="picture" class="form-control" placeholder="Picture">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <strong>Status:</strong>
                      <input type="text" name="status" class="form-control" placeholder="Status">
                    </div>
                  </div>
                  
                  <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                    <button type="submit" class="btn btn-primary ">Submit</button>
                  </div>
                </div>
                
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection