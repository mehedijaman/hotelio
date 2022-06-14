<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Hotel;
use Exception;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Employees = Employee::all();
        return view('employee.index' ,compact('Employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Hotels = Hotel::all();
        return view('employee.create',compact('Hotels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        try{
            Employee::create($request->all());
            return back();
        }
        catch(Exception $error){
            return $error->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Hotels = Hotel::all();
        $Employees = Employee::find($id);
        return view('employee.edit',compact('Hotels','Employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $Employees  = new Employee();
        $Employees  = Employee::find($request->id);
        
        $Employees->HotelID     = $request->HotelID;
        $Employees->Name        = $request->Name;
        $Employees->Designation = $request->Designation;
        $Employees->DateOfBirth = $request->DateOfBirth;
        $Employees->NIDNo       = $request->NIDNo;
        $Employees->NID         = $request->NID;
        $Employees->Phone       = $request->Phone;
        $Employees->Email       = $request->Email;
        $Employees->Address     = $request->Address;
        $Employees->DateOfJoin  = $request->DateOfJoin;
        $Employees->Status      = $request->Status;

        $Employees->save();
        
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::find($id)->delete();
        return back();
    }
}
