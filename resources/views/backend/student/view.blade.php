@extends('backend.layouts.master')
@section('content')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage student</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">student </li>
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
                      <a class="btn btn-primary btn-sm float-right" href="{{route('student.add')}}"> <i class="fa fa-plus-circle">Add Student </i></a>
                      </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <tr>
                            
                            <th >No</th>
                            <th >student id</th>
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
                  </tr>
                  </thead>
                   <tbody>
                          @foreach($alldata as $key=> $student)
                          <tr>
                            <td>{{++$key}}</td>
                            <td>{{$student->studentid}}</td>
                            <td>{{$student->studentname}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->phone}}</td>
                            <td>{{$student->dateofbirth}}</td>
                            <td>{{$student->password}}</td>
                            <td>{{$student->security_question}}</td>
                            <td>{{$student->answer}}</td>
                            <td>{{$student->picture}}</td>
                           <td>{{($student->status=='1')?'Active':'Inactive'}}</td>
                            <td>{{$student->creationdate}}</td>
                            
        <td><a title="edit" class="btn btn-sm btn-primary"href="{{route('student.edit',$student->id)}}">edit</i></a>
        <td><a title="delete" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModal{{$student->id}}">delete</i></a>
                          <!-- Button to Open the Modal -->
                          <!-- The Modal -->
                          <div class="modal" id="myModal{{$student->id}}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                  <h4 class="modal-title"></h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                  Are You Sure Want to delete {{$student->studentname}}?
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                            <a class="btn btn-md btn-danger" href="{{route('student.delete',$student->id)}}">Delete</a>
                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                          </td>
                          
                        </tr>
                        @endforeach
                      </tbody>
                  <tfoot>
                  
                  </tfoot>
                </table>
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