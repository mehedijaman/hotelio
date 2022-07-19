<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BankLedger;
use App\Models\Bank;
use Exception;

class BankLedgerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return BankLedger::all();
        $BankNames = Bank::all();
        $BankLedgers = BankLedger::select('bank_ledgers.*', 'banks.Name as Bank')
            ->leftJoin('banks', 'bank_ledgers.BankID', '=', 'banks.id')
            ->get();
        return view('bankLedger.index', compact('BankLedgers','BankNames'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Banks = Bank::all();
        return view('bankLedger.create', compact('Banks'));
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
            BankLedger::create($request->all());
            return 'Bank Ledger added Succussfuly';
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
        return BankLedger::find($id);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $Banks = Bank::all();
        $BankLedgers = BankLedger::find($id);
        return view('bankLedger.edit', compact('BankLedgers', 'Banks'));
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
        BankLedger::find($id)->update($request->all());
        return back()->with('Update', 'Bank Ledger Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BankLedger::find($id)->delete();
        return back()->with('Delete', 'Delete Bank Ledger Successfull');
    }

    public function trash()
    {
        // return BankLedger::all();
        $BankLedgers = BankLedger::onlyTrashed('bank_ledgers.*', 'banks.Name as Bank')
            ->leftJoin('banks', 'bank_ledgers.BankID', '=', 'banks.id')
            ->get();
        return view('bankLedger.trash', compact('BankLedgers'));
    }
}
