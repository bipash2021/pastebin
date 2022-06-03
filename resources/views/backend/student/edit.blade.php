@extends('backend.layouts.master')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Manage Student</h1>
          </div><!-- /.col -->
          <div class="col-sm-12">
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
                      <form method="post" action="{{ route('student.update',$editdata->id) }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            
                            @if ($errors->any())
                            <div class="alert alert-primary">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                              </ul>
                            </div>
                            @endif
                            
                          </div>
                          
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <strong>Student id:</strong>
                              <input type="text" name="studentid" class="form-control" value="{{$editdata->studentid}}">
                            </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <strong>Student name:</strong>
                              <input type="text" name="studentname" class="form-control" value="{{$editdata->studentname}}">
                            </div>
                          </div><div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <strong>Email:</strong>
                            <input type="email" name="email" class="form-control" value="{{$editdata->email}}">
                          </div>
                        </div><div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                          <strong>Phone:</strong>
                          <input type="text" name="phone" class="form-control" value="{{$editdata->phone}}">
                        </div>
                      </div><div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                        <strong>Date of birth:</strong>
                        <input type="text" name="dateofbirth" class="form-control" value="{{$editdata->dateofbirth}}" placeholder="dd-mm-yyyy">
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                        <strong>Password:</strong>
                        <input type="password" name="password" class="form-control" value="{{$editdata->password}}">
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                        <strong>Security Question:</strong>
                        <select class="form-select form-control" name="security_question" aria-label=" ">
                          <option selected>{{$editdata->security_question}}</option>
                          <option value="What Is your Childhood Name?">What Is your Childhood Name?</option>
                          <option value="What Is your School Name?">What Is your School Name?</option>
                          <option value="What Is your Birth Place?">What Is your Birth Place?</option>
                          
                        </select>
                      </div>
                      
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                        <strong>Answer:</strong>
                        <input type="text" name="answer" class="form-control" value="{{$editdata->answer}}">
                      </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                      Previous Picture
                      @if(empty($editdata->picture))
                      <img  style="width: 25%"src="{{asset('../uploads/students/images.png')}}" width="25px">
                      @else
                    <img  style="width: 25%"src="{{asset('uploads/students')}}/{{($editdata->picture)}}" width="25px">
                      @endif
                    </div>
                    
                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                        <strong>New Upload:</strong>
                        <input type="file" name="picture" class="form-control" >
                      </div>
                    </div>
                    
                    
                    
                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                        <strong>Status:&nbsp{{($editdata->status=='1')?'Active':'Inactive'}}</strong>
                        <select name="status" class="form-control">
                            <option  value="1">  Active </option>
                            <option  value="0">  Inactive </option>
                        </select>
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