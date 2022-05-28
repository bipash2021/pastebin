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
                      <h3>student Details
                      <a class="btn btn-primary btn-sm float-right" href="{{route('student.view')}}"> <i class="fa fa-back-circle">back</i></a>
                      </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
              <form method="post" action="{{ route('student.update',$editdata->id) }}" >
                        @csrf
                        
                        <div class="row">
                          
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                              <strong>Student id:</strong>
                              <input type="text" name="studentid" class="form-control" value="{{$editdata->studentid}}">
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                              <strong>Student name:</strong>
                              <input type="text" name="studentname" class="form-control" value="{{$editdata->studentname}}">
                            </div>
                          </div><div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                            <strong>Email:</strong>
                            <input type="email" name="email" class="form-control" value="{{$editdata->email}}">
                          </div>
                        </div><div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                          <strong>Phone:</strong>
                          <input type="text" name="phone" class="form-control" value="{{$editdata->phone}}">
                        </div>
                      </div><div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                        <strong>Date of birth:</strong>
                        <input type="date" name="dateofbirth" class="form-control" value="{{$editdata->dateofbirth}}">
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                        <strong>Password:</strong>
                        <input type="password" name="password" class="form-control" value="{{$editdata->password}}">
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                        <strong>Security question:</strong>
                        <input type="text" name="security_question" class="form-control" value="{{$editdata->security_question}}">
                      </div>
                    </div><div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <strong>Answer:</strong>
                      <input type="text" name="answer" class="form-control" value="{{$editdata->answer}}">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <strong>Picture:</strong>
                      <input type="file" name="picture" class="form-control" value="{{$editdata->picture}}">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <strong>Status:</strong>
                      <input type="text" name="status" class="form-control" value="{{$editdata->status}}">
                    </div>
                  </div>
                  
                  <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                    <button type="submit" class="btn btn-primary ">Update</button>
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