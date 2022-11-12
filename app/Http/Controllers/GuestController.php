<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use Exception;
use Ramsey\Uuid\Guid\Guid;
use Yajra\Datatables\Datatables;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // return Guest::all();
        if(request()->ajax())
        {
            return  $Guests = Datatables::of(Guest::all())
            ->addColumn('action','layouts.dt_buttons')
            ->make(true);
        }
      
        return view('guest.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('guest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        try{
            Guest::create($request->all());
            return 'Guest Add Succeessfull!';
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
        $Guest = Guest::find($id);
        return $Guest;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Guests = Guest::find($id);
        return view('guest.edit' ,compact('Guests'));
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
        Guest::find($id)->update($request->all());
        return "Data Successfully Updated ! ";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Guest::find($id)->delete();
        return back()->with('delete','Deleted data is stored in the trash');
    }

 
    public function destroyAll()
    {
        Guest::withTrashed()->delete();
        return back()->with('destroyAll','Deleted All data is stored in the trash');
    } 

    
    public function trash()
    {
        $GuestTrashed = Guest::onlyTrashed()->get();
        return view('guest.trash',compact('GuestTrashed'));
    }    

    
    public function restore($id)
    {
        Guest::withTrashed()->where('id',$id)->restore();
        return back()->with('Restore','Restore Successfull !');
    }

    public function restoreAll()
    {
        Guest::withTrashed()->restore();
        return back()->with('RestoreAll','সমস্ত ডাটাকে পুনরুদ্ধার করা হয়েছে ');
    }

    public function forceDelete($id)
    {
        Guest::withTrashed()->where('id',$id)->forceDelete();
        return back()->with('Parmanentlly','Parmanentlly Delete');
    }

    public function emptyTrash()
    {
        Guest::onlyTrashed()->forceDelete();
        return $this->index()->with('emptyTrash','ট্রাস সম্পূর্ণরূপে খালি করা হলো ');
    }

}
