<?php

namespace App\Http\Controllers;

use App\Models\AccountLedger;
use Illuminate\Http\Request;
use Exception;

class AccountLedgerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AccountLedgers = AccountLedger::all();
        return view('accountLedger.index', compact('AccountLedgers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accountLedger.create');
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
            AccountLedger::create($request->all());
            return back()->with('Success', 'AccountLedger Add Successfull');
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
        $AccountLedger = AccountLedger::find($id);
        return view('accountLedger.show', compact('AccountLedger'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $AccountLedgers = AccountLedger::find($id);

        return view('accountLedger.edit', compact('AccountLedgers'));
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
        AccountLedger::find($id)->update($request->all());
        return back()->with('Update', 'Account Ledger Succesfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AccountLedger::find($id)->delete();

        return back()->with('Delete', 'Account Ledger Succesfull');
    }

    public function deleteAll()
    {
        AccountLedger::withTrashed()->delete();
        return back()->with('DeleteAll', 'Account Ledger Successfull');
    }
    public function trash()
    {
        $TrashAccounts = AccountLedger::onlyTrashed()->get();
        return view('accountLedger.trash', compact('TrashAccounts'));
    }
    public function forceDelete($id)
    {
        AccountLedger::withTrashed()->where('id', $id)->forceDelete();
        return back()->with('Parmanent_Delete', 'AccountLedger Parmanent Successfull');
    }
    public function restore($id)
    {
        AccountLedger::withTrashed()->where('id', $id)->restore();
        return back()->with('Restore', 'AccountLedger Restore Successfull');
    }
    public function restoreAll()
    {
        AccountLedger::withTrashed()->restore();
        return back()->with('Restore_All', 'AccountLedger Restore Successfull');
    }
    public function emtyTrash()
    {
        AccountLedger::onlyTrashed()->forceDelete();
        return back()->with('Parmanent_All_Delete', 'AccountLedger Parmanent Successfull');
    }
}
