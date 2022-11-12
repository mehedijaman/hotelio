<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Guest;
use App\Models\Bank;
use App\Models\BankLedger;
use App\Models\User;

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
        $Rooms      = Room::all();
        $Users      = User::all();
        $Employes   = Employee::all();
        $Guests     = Guest::all();
        $Banks      = Bank::all();
        $BankLedger = BankLedger::all();

        $TotalRooms       = $Rooms->count();
        $TotalFreeRooms   = $Rooms->where('Status',0)->count();
        $TotalBookedRooms = $Rooms->where('Status',1)->count();
        $TotalFloor       = $Rooms->where('Floor')->count();
        $TotalUser        = $Users->count();
        $TotalEmployee    = $Employes->count();
        $TotalGuest       = $Guests->count();
        $TotalBank        = $Banks->count();
        $TotalAccountNo   = $Banks->where('AccountNo')->count();
        $TotalWithdraw    = $BankLedger->where('Withdraw')->count();
        $TotalDeposit     = $BankLedger->where('Deposit')->count();

        return view('home',compact('Rooms','TotalRooms','TotalBookedRooms','TotalFreeRooms', 'TotalUser', 'TotalEmployee', 'TotalFloor', 'TotalGuest', 'TotalBank', 'TotalAccountNo', 'TotalWithdraw', 'TotalDeposit'));
    }
    
}
