<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Balance;
use App\Models\AccountLedger;
use Exception;

class BalanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Balance::all()->first();
        $Balance = Balance::all()->first();
        return view('balance.index', compact('Balance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $AcountLeagers = AccountLedger::all();
        return view('balance.create', compact('AcountLeagers'));
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
            Balance::create($request->all());
            return back()->with('Success', 'Balance Add Successfull');
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
        // return Balance::all();
        $Balances = Balance::find($id);
        return view('balance.show', compact('Balances'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $AccountLedgers = AccountLedger::all();
        $Balances = Balance::find($id);

        return view('balance.edit', compact('Balances', 'AccountLedgers'));
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
        Balance::find($id)->update($request->all());

        return back()->with('Update', 'Blance Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Balance::find($id)->delete();
        return back()->with('Delete', 'Balance Successfull');
    }
    public function deleteAll()
    {
        Balance::withTrashed()->delete();
        return back()->with('DeleteAll', 'Balance Delete Successfull');
    }
    public function trash()
    {
        $TrasedBalances = Balance::onlyTrashed()->get();
        return view('balance.trash', compact('TrasedBalances'));
    }
    public function forceDelete($id)
    {
        Balance::withTrashed()->where('id', $id)->forceDelete();
        return back()->with('PermanentDelete', 'Balance Delete Successfull');
    }
    public function restore($id)
    {
        Balance::withTrashed()->where('id', $id)->restore();
        return back()->with('Restore', 'Balance Restore Successfull');
    }
    public function restoreAll()
    {
        Balance::withTrashed()->restore();
        return back()->with('RestoreAll', ' Restore All Balance Successfull');
    }
    public function emtyTrash()
    {
        Balance::withTrashed()->forceDelete();
        return back()->with('PermanentAllDelete', 'Permanent All Balance  Successfull');
    }
}
