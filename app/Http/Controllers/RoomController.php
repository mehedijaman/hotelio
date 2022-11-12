<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\SoftDeletes;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Hotel;
use Exception;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Hotels = Hotel::all();
        // $Rooms  = Room::all();
        if (request()->ajax()) {
            return $Rooms = Datatables::of($this->dtQuery())->addColumn('action','layouts.dt_buttons')->make(true);
        }
        return view('room.index',compact('Hotels'));        
    }

    public function dtQuery()
    {
        return $Rooms = Room::select('rooms.*','hotels.Name as HotelName')
        ->leftJoin('hotels','rooms.HotelID','=','hotels.id')
        ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Hotels= Hotel::all();
        return view('room.create',compact('Hotels'));
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
            Room::create($request->all());
            return 'Room Added SuccessFully !';
            // return back()->with('Success','Room Added SuccessFully !');
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
        // $Room = Room::find($id);
        $Room = Room::select('rooms.*','hotels.Name as HotelName')
        ->where('rooms.id',$id)
        ->leftJoin('hotels','rooms.HotelID','=','hotels.id')
        ->first();
        return $Room;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Hotels= Hotel::all();
        $Room = Room::find($id);
        return view('room.edit' , compact('Room','Hotels'));
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
        
        Room::find($id)->update($request->all());
        return back()->with('Success','Hotel Update SuccessFully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Room::find($id)->delete();
        return back()->with('Destroy','Delete Completed !');
    }

    /**
     * Delete all table list
    */
    public function destroyAll()
    {
        Room::withTrashed()->delete();
        return back()->with('DestroyAll', 'সমস্ত ডাটাকে খালি করা হলো');
    }
    /**
     * View Trash page 
    */
    public function trash()
    {
        $Rooms = Room::onlyTrashed()->get();
        // $Rooms = Room::onlyTrashed()->get();
        return view('room.trash',compact('Rooms'));
    }
    /**
     * table column restore
    */
    public function restore($id)
    {
        Room::withTrashed()->where('id',$id)->restore();
        return back()->with('Restore','Restore SuccessFully !');
    }
    /**
     * Table  all Column list restore
    */
    public function restoreAll()
    {
        Room::withTrashed()->restore();
        return back()->with('RestoreAll','সমস্ত ডাটাকে পুনরুদ্ধার করা হয়েছে');
    }
    /**
     * table remove delete
    */
    public function forceDeleted($id)
    {
        Room::withTrashed()->where('id',$id)->forceDelete();
        return back()->with('PermanentlyDelete', 'Permanently Delete Completed !');
    }
    /**
     * All table list remove
    */
    public function emptyTrash()
    {

        Room::onlyTrashed()->forceDelete();
        return back()->with('EmptyTrash', 'ট্রাস সম্পূর্ণরূপে খালি করা হলো');
    }
}
