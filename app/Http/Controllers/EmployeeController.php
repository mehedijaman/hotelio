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
        $Employees = Employee::select('employees.*','hotels.Name as Hotel')
        ->leftJoin('hotels','employees.HotelID','=','hotels.id')
        ->get();
        // $Employees = Employee::all();
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
        $Employees = Employee::find($id);
        return view('employee.show' , compact('Employees'));
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
    public function update(Request $request , $id)
    {
        Employee::find($id)->update($request->all());
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
        return $this->index();
    }

    //destroyAll
    public function destroyAll()
    {
        Employee::withTrashed()->delete();
        return back();
    }
    
    //trash
    public function trash()
    {
        $EmployeesTrashed = Employee::onlyTrashed()->get();
        return view('employee.trash' , compact('EmployeesTrashed'));
    }

    //forceDelete
    public function forceDelete($id)
    {
        Employee::withTrashed()->where('id',$id)->forceDelete();
        return back();
    }

    //restore 
    public function restore($id)
    {
        Employee::withTrashed()->where('id',$id)->restore();
        return back();
    }

    //restoreAll
    public function restoreAll()
    {
        Employee::withTrashed()->restore();
        return $this->index();
    }

    //emptyTrash
    public function emptyTrash()
    {
        Employee::onlyTrashed()->forceDelete();
        return back();
    }
}
