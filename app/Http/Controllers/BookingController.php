<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Guest;
use App\Models\Room;
use Exception;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Bookings = Booking::select('bookings.*','rooms.RoomNo','guests.Name as Guest')
        ->leftJoin('rooms','bookings.RoomID','=','rooms.id')
        ->leftJoin('guests','bookings.GuestID','=','guests.id')
        ->get();

        return view('booking.index',compact('Bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Rooms = Room::all();
        $Guests = Guest::all();
        return view('booking.create',compact('Rooms', 'Guests'));
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
            Booking::create($request->all());
            return back();
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
        $Booking = Booking::find($id);
        return view('booking.show', compact('Booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Rooms    = Room::all();
        $Guests   = Guest::all();
        $Booking = Booking::find($id);
        return view('booking.edit',compact('Rooms','Guests','Booking'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // $Booking = new Booking();
        // $Booking = Booking::find($request->id);
        // $Booking->CheckInDate   = $request->CheckInDate;
        // $Booking->CheckOutDate  = $request->CheckOutDate;
        // $Booking->update();
        // return $this->index();
        Booking::find($id)->update($request->all());
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
        Booking::find($id)->delete();
        return back();
    }
    public function destroyAll()
    {
        Booking::withTrashed()->delete();
        return back();
    }
    public function trash()
    {
        $Bookings = Booking::onlyTrashed()->get();
        return view('booking.trash',compact('Bookings'));
    }
    public function restore($id)
    {
        Booking::withTrashed()->where('id',$id)->restore();
        return back();
    }
    public function restoreAll()
    {
        Booking::withTrashed()->restore();
        return back();
    }
    public function forceDeleted($id)
    {
        Booking::withTrashed()->where('id',$id)->forceDelete();
        return back();
    }
    public function emptyTrash()
    {
        Booking::onlyTrashed()->forceDelete();
        return back();
    }
}
