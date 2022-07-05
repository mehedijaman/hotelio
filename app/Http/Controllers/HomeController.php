<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Rooms = Room::all();

        $TotalRooms = $Rooms->count();
        $TotalFreeRooms = $Rooms->where('Status',0)->count();
        $TotalBookedRooms = $Rooms->where('Status',1)->count();

        return view('home',compact('Rooms','TotalRooms','TotalBookedRooms','TotalFreeRooms'));
    }
    
}
