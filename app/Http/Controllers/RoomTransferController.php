<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomTransfer;
use App\Models\Guest;
use App\Models\Room;
use Illuminate\Database\Eloquent\SoftDeletes;
use Yajra\Datatables\Datatables;
use Exception;


class RoomTransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Guests = Guest::all();
        $Rooms  = Room::all();
        // return $RoomTransfers = Datatables::of(RoomTransfer::all())->make(true);
        if (request()->ajax()) {
            return $RoomTransfers = Datatables::of($this->dtQuery())->addColumn('action','layouts.dt_buttons_2')->make(true);
        }
        return view('roomTransfer.index',compact('Guests','Rooms'));
    }
    public function dtQuery()
    {
        return $RoomTransfers = RoomTransfer::select('room_transfers.*','guests.Name as Guest','rooms.RoomNo as Room')
        ->leftJoin('guests','room_transfers.GuestID','=','guests.id')
        ->leftJoin('rooms','room_transfers.ToRoomID','=','rooms.id')
        ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Guests = Guest::all();
        $Rooms  = Room::all();
        return view('roomTransfer.create', compact('Rooms','Guests'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
           RoomTransfer::create($request->all());
           return 'Room Transfer Added Successfully !';
            // return back()->with('Success','Room Transfer Added Successfully !');
        } catch (Exception $error) {
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
        return RoomTransfer::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Guests = Guest::all();
        $Rooms = Room::all();
        $RoomTransfers = RoomTransfer::find($id);
        return view('roomTransfer.edit',compact('RoomTransfers','Guests','Rooms'));
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
        RoomTransfer::find($id)->update($request->all());
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
        RoomTransfer::find($id)->delete();
        return back()->with('Destroy', 'Delete Completed !');
    }
    /**
     * Delete all table list
    */
    public function destroyAll()
    {
        RoomTransfer::withTrashed()->delete();
        return back()->with('DestroyAll', 'সমস্ত ডাটাকে খালি করা হলো');
    }
    /**
     * View Trash page 
    */
    public  function trash()
    {
        $RoomTransfers = RoomTransfer::onlyTrashed()->get();
        return view('roomTransfer.trash',compact('RoomTransfers'));
    }
    /**
     * table column restore
    */
    public function restore($id)
    {
        RoomTransfer::withTrashed()->where('id',$id)->restore();
        return back()->with('Restore', 'Restore SuccessFully !');
    }
    /**
     * Table  all Column list restore
    */
    public function restoreAll()
    {
        RoomTransfer::withTrashed()->restore();
        return back()->with('RestoreAll', 'সমস্ত ডাটাকে পুনরুদ্ধার করা হয়েছে');
    }
    /**
     * table remove delete
    */
    public function forceDeleted($id)
    {
        RoomTransfer::withTrashed()->where('id',$id)->forceDelete();
        return back()->with('PermanentlyDelete', 'Permanently Delete Completed !');
    }
    /**
     * All table list remove
    */
    public function emptyTrash()
    {
        RoomTransfer::onlyTrashed()->forceDelete();
        return back()->with('EmptyTrash', 'ট্রাস সম্পূর্ণরূপে খালি করা হলো');
    }

}
