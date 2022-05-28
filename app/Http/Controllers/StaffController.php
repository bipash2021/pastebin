<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use App\Models\Stuff;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $data['alldata']=Staff::all();
        
        return view('backend.staff.view',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('backend.staff.add');
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
    
        Staff::create($request->all());
     
        return redirect()->route('staff.view')
                        ->with('success','Info added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editdata=Staff::find($id);
        
        return view('backend.staff.edit',compact('editdata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff,$id)
    {
        //  $request->validate([
        //     'name' => 'required',
        //     'detail' => 'required',
        // ]);

        $data=Staff::find($id);
        $data->staffid=$request->staffid;
        $data->staffname=$request->staffname;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->dateofbirth=$request->dateofbirth;
        $data->password=$request->password;
        $data->security_question=$request->security_question;
        $data->answer=$request->answer;
        $data->picture=$request->picture;
        $data->status=$request->status;
        $data->save();
    
        
    
        return redirect()->route('staff.view')
                        ->with('success','Staff Info updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function delete(Staff $staff,$id)
    {

        $staff=Staff::find($id);
        $staff->delete();
    
        return redirect()->route('staff.view')
                        ->with('success','Staff Info deleted successfully');
    }
}
