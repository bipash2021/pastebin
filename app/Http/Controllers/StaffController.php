<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use App\Models\Stuff;

class StaffController extends Controller
{
    
    public function view()
    {
        $data['alldata']=Staff::all();
        
        return view('backend.staff.view',$data);
    }

    
    public function add()
    {
        return view('backend.staff.add');
    }

    
    public function store(Request $request)
    {
        $request->validate([
          'staffid' => 'required',
           'staffname' => 'required',
           'email' => 'required',
           'phone' => 'required | numeric',
           'dateofbirth' => 'required',
           'password' => 'required',
           'security_question' => 'required',
           'answer' => 'required',
           'status' => 'required',
           'status' => 'required',
           'picture' => 'mimes:jpg,bmp,png',
        ]);

        $staff = new Staff;
        $staff->staffid=$request->staffid;
        $staff->staffname=$request->staffname;
        $staff->email=$request->email;
        $staff->phone=$request->phone;
        $staff->dateofbirth=$request->dateofbirth;
        $staff->password=$request->password;
        $staff->security_question=$request->security_question;
        $staff->answer=$request->answer;
        
        $staff->status=$request->status;

        if ($request->hasfile('picture')){

            $file=$request->file('picture');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('uploads/staffs',$filename);
            $staff->picture=$filename;
        }

        $staff->save();
     
        return redirect()->route('staff.view')
                        ->with('success','Info added successfully.');
    }

    public function show(Staff $staff)
    {
        //
    }

    
    public function edit($id)
    {
        $editdata=Staff::find($id);
        
        return view('backend.staff.edit',compact('editdata'));
    }

    
    public function update(Request $request, Staff $staff,$id)
    {
          $request->validate([
          'staffid' => 'required',
           'staffname' => 'required',
           'email' => 'required',
           'phone' => 'required | numeric',
           'dateofbirth' => 'required',
           'password' => 'required',
           'security_question' => 'required',
           'answer' => 'required',
           'status' => 'required',
           'picture' => 'mimes:jpg,bmp,png',
        ]);

         

        $staff=Staff::find($id);
        $staff->staffid=$request->staffid;
        $staff->staffname=$request->staffname;
        $staff->email=$request->email;
        $staff->phone=$request->phone;
        $staff->dateofbirth=$request->dateofbirth;
        $staff->password=$request->password;
        $staff->security_question=$request->security_question;
        $staff->answer=$request->answer;
        $staff->status=$request->status;

        if ($request->hasfile('picture')){

            $file=$request->file('picture');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('uploads/staffs',$filename);
            $staff->picture=$filename;
        }


        $staff->save();
    
        
    
        return redirect()->route('staff.view')
                        ->with('success','Staff Info updated successfully');
    }

    

    public function delete(Staff $staff,$id)
    {

        $staff=Staff::find($id);
        $staff->delete();
    
        return redirect()->route('staff.view')
                        ->with('success','Staff Info deleted successfully');
    }
}
