<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use Exception;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return "hello";
        $Hotels = Hotel::all();
        return view('hotel.index',compact('Hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return  $request->all();
        try{
            Hotel::create($request->all());

            // if($request->file('image')){
            //     $file= $request->file('image');
            //     $filename= date('YmdHi').$file->getClientOriginalName();
            //     $file-> move(public_path('public/HotelImage'), $filename);
            //     $data['image']= $filename;
            // }
            return back()->with('Success','Hotel Added Successfully!');
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
        $Hotels = Hotel::find($id);
        return view('hotel.show',compact('Hotels'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Hotels = Hotel::find($id);
        return view('hotel.edit' ,compact('Hotels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Hotel::find($id)->update($request->all());
        return $this->index()->with('Success','Update Successfull!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hotel::find($id)->delete();
        return back()->with('delete','Deleted data is stored in the trash');
    }


    //destroyAll 
    public function destroyAll()
    {
        Hotel::withTrashed()->delete();
        return back()->with('destroyAll','Deleted All data is stored in the trash');
    }
    
    /**
     * View Trash Page
     * @return \Illumindate\Http\Response
     * 
     */
    public function trash()
    {
        $HotelTrashed = Hotel::onlyTrashed()->get();
        return view('hotel.trash', compact('HotelTrashed'));

    }

    //forceDelete
    public function forceDeleted($id)
    {
        Hotel::withTrashed()->where('id',$id)->forceDelete();
        return back()->with('Delete','Deleted completed !');
    }

    //restore
    public function restore($id)
    {
        Hotel::withTrashed()->where('id',$id)->restore();
        return back()->with('Restore','Restore Successfull !');
    }

    //restoreAll
    public function restoreAll()
    {
        Hotel::withTrashed()->restore();
        return back()->with('RestoreAll','সমস্ত ডাটাকে পুনরুদ্ধার করা হয়েছে ');
    }

    //emptyTrash
    public function emptyTrash()
    {
        Hotel::onlyTrashed()->forceDelete();
        return back()->with('emptyTrash','ট্রাস সম্পূর্ণরূপে খালি করা হলো ');
    }
}
