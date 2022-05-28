<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function view()
    {
        $data['alldata']=Student::all();
        
        return view('backend.student.view',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('backend.student.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  $request->validate([
        //     'name' => 'required',
        //     'detail' => 'required',
        // ]);
    
        Student::create($request->all());
     
        return redirect()->route('student.view')
                        ->with('success','Info added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editdata=Student::find($id);
        
        return view('backend.student.edit',compact('editdata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student,$id)
    {
        //  $request->validate([
        //     'name' => 'required',
        //     'detail' => 'required',
        // ]);

        $data=Student::find($id);
        $data->studentid=$request->studentid;
        $data->studentname=$request->studentname;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->dateofbirth=$request->dateofbirth;
        $data->password=$request->password;
        $data->security_question=$request->security_question;
        $data->answer=$request->answer;
        $data->picture=$request->picture;
        $data->status=$request->status;
        $data->save();
    
        
    
        return redirect()->route('student.view')
                        ->with('success','student Info updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function delete(student $student,$id)
    {

        $student=Student::find($id);
        $student->delete();
    
        return redirect()->route('student.view')
                        ->with('success','student Info deleted successfully');
    }
}
