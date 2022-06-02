<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    
     public function view()
    {
        $data['alldata']=Student::all();
        
        return view('backend.student.view',$data);
    }

    
    public function add()
    {
        return view('backend.student.add');
    }

    
    public function store(Request $request)
    {
        
     $request->validate([
          'studentid' => 'required',
           'studentname' => 'required',
           'email' => 'required',
           'phone' => 'required | numeric',
           'dateofbirth' => 'required',
           'password' => 'required',
           'security_question' => 'required',
           'answer' => 'required',
           'status' => 'required',
           'status' => 'required',
           // 'picture' => 'mimes:jpg,bmp,png',
        ]);
       
        $student = new Student;
        $student->studentid=$request->studentid;
        $student->studentname=$request->studentname;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->dateofbirth=$request->dateofbirth;
        $student->password=$request->password;
        $student->security_question=$request->security_question;
        $student->answer=$request->answer;
        
        $student->status=$request->status;

        if ($request->hasfile('picture')){

            $file=$request->file('picture');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('uploads/students',$filename);
            $student->picture=$filename;
        }

        $student->save();
     
        return redirect()->route('student.view')
                        ->with('success','Info added successfully.');
    }

    
    
    public function edit($id)
    {
        $editdata=Student::find($id);
        
        return view('backend.student.edit',compact('editdata'));
    }

    
    public function update(Request $request, student $student,$id)
    {
             $request->validate([
          'studentid' => 'required',
           'studentname' => 'required',
           'email' => 'required',
           'phone' => 'required | numeric',
           'dateofbirth' => 'required',
           'password' => 'required',
           'security_question' => 'required',
           'answer' => 'required',
           'status' => 'required',
           'status' => 'required',
           // 'picture' => 'mimes:JPG,jpg,bmp,png',
        ]);
        
        $student=Student::find($id);
        $student->studentid=$request->studentid;
        $student->studentname=$request->studentname;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->dateofbirth=$request->dateofbirth;
        $student->password=$request->password;
        $student->security_question=$request->security_question;
        $student->answer=$request->answer;
        
        $student->status=$request->status;

        if ($request->hasfile('picture')){

            $file=$request->file('picture');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('uploads/students',$filename);
            $student->picture=$filename;
        }

        $student->save();
       
    
        
    
        return redirect()->route('student.view')->with('success','Student Info Updated successfully');
                        
}
    
    public function delete(student $student,$id)
    {

        $student=Student::find($id);
        $student->delete();
    
        return redirect()->route('student.view')
                        ->with('success','student Info deleted successfully');
    }
}
