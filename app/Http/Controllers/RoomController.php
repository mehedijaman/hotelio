<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\SoftDeletes;
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
        $Rooms = Room::select('rooms.*','hotels.Name as HotelName')
        ->leftJoin('hotels','rooms.HotelID','=','hotels.id')
        ->get();
        return view('room.index',compact('Rooms'));
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
        $Room = Room::find($id);
        return view('room.show',compact('Room'));
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
        Room::find($id)->delete();
        return back();
    }

    public function destroyAll()
    {
        Room::withTrashed()->delete();
        return back();
    }
    public function trash()
    {
        $Rooms = Room::onlyTrashed()->get();
        return view('room.trash',compact('Rooms'));
    }
    public function restore($id)
    {
        Room::withTrashed()->where('id',$id)->restore();
        return back();
    }
    public function restoreAll()
    {
        Room::withTrashed()->restore();
        return back();
    }
    public function forceDeleted($id)
    {
        Room::withTrashed()->where('id',$id)->forceDelete();
        return back();
    }
    public function emptyTrash()
    {

        Room::onlyTrashed()->forceDelete();
        return back();
    }
}
