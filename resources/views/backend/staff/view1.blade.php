@extends('backend.layouts.master')
@section('content')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Staff</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">staff </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="contfffent">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4>Staff Details
<a class="btn btn-success float-right" href=""> <i class="fa fa-plus-circle">Add Staff </i></a>
                </h4>

              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" >
                  <thead>
                  <tr>
                    
                        <th >No</th>
                        <th >Staff id</th>
                        <th >Name</th>
                        <th >Mail</th>
                        <th >Phone</th>
                        <th >Date of birth</th>
                        <th >Password</th>
                        <th >Question</th>
                        <th >Answer</th>
                        <th >Picture</th>
                        <th >Status</th>
                        <th >Creation date</th>
                        <th >Action</th>

      

                 </tr>
                  </thead>
                  <tbody>
                    @foreach($alldata as $key=> $staff)
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{$staff->staffid}}</td>
                    <td>{{$staff->staffname}}</td>
                    <td>{{$staff->email}}</td>
                    <td>{{$staff->phone}}</td>
                    <td>{{$staff->dateofbirth}}</td>
                    <td>{{$staff->password}}</td>
                    <td>{{$staff->security_question}}</td>
                    <td>{{$staff->answer}}</td>
                    <td>{{$staff->picture}}</td>
                    <td>{{$staff->status}}</td>
                    <td>{{$staff->creationdate}}</td>
                    <td><a title="view" class="btn btn-sm btn-success"href="">view</i></a>
                    <td><a title="edit" class="btn btn-sm btn-primary"href="">edit</i></a>
                    <td><a title="delete" class="btn btn-sm btn-danger"href="">delete</i></a>

                    </td>
                    
                  </tr>
              @endforeach
                  </tbody>
                  
                </table>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection