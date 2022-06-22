<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomTransfer;
use App\Models\Guest;
use App\Models\Room;
use Illuminate\Database\Eloquent\SoftDeletes;
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
        $RoomTransfers = RoomTransfer::all();
        return view('roomTransfer.index',compact('RoomTransfers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Guests = Guest::all();
        return view('roomTransfer.create', compact('Guests'));
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
            $RoomTransfers = RoomTransfer::create($request->all());
            return back();
        } catch (Exception $error) {
            $error->getMessage();
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
        $Guests = Guest::all();
        $RoomTransfer = RoomTransfer::find($id); 
        return view('roomTransfer.edit',compact('Guests', 'RoomTransfer'));
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
        return back();
    }
    public function destroyAll()
    {
        RoomTransfer::withTrashed()->delete();
        return back();
    }

    public  function trash()
    {
        $RoomTransfers = RoomTransfer::onlyTrashed()->get();
        return view('roomTransfer.trash',compact('RoomTransfers'));
    }
    public function restore($id)
    {
        RoomTransfer::withTrashed()->where('id',$id)->restore();
        return back();
    }
    public function restoreAll()
    {
        RoomTransfer::withTrashed()->restore();
        return back();
    }
    public function forceDeleted($id)
    {
        RoomTransfer::withTrashed()->where('id',$id)->forceDelete();
        return back();
    }
    public function emptyTrash()
    {
        RoomTransfer::onlyTrashed()->forceDelete();
        return back();
    }

}
