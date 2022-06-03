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
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3>Staff Details
                      <a class="btn btn-primary btn-sm float-right" href="{{route('staff.add')}}"> <i class="fa fa-plus-circle">Add Staff </i></a>
                      </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped display nowrap" style="width:100%">
                        <thead>
                          <tr>
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
                            <td>{{($staff->status=='1')?'Active':'Inactive'}}</td>
                            <td>{{$staff->creationdate}}</td>
                            
                            <td><a title="edit" class="btn btn-sm btn-primary"href="{{route('staff.edit',$staff->id)}}">edit</i></a>
                          </td>
                          <td><a title="delete" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModal{{$staff->id}}">delete</i></a>
                          <!-- Button to Open the Modal -->
                          <!-- The Modal -->
                          <div class="modal" id="myModal{{$staff->id}}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                  <h4 class="modal-title"></h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                  Are You Sure Want to delete {{$staff->staffname}}?
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                            <a class="btn btn-md btn-danger" href="{{route('staff.delete',$staff->id)}}">Delete</a>
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