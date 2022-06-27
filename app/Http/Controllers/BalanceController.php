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
        $Balances = Balance::all();
        return view('balance.index', compact('Balances'));
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
        $Balances = Balance::find($id);

        return view('balance.edit', compact('Balances'));
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
        Balance::find($id)->delete();
        return back();
    }
    public function deleteAll()
    {
        Balance::withTrashed()->delete();
        return back();
    }
    public function trash()
    {
        $TrasedBalances = Balance::onlyTrashed()->get();
        return view('balance.trash', compact('TrasedBalances'));
    }
    public function forceDelete($id)
    {
        Balance::withTrashed()->where('id', $id)->forceDelete();
        return back();
    }
    public function restore($id)
    {
        Balance::withTrashed()->where('id', $id)->restore();
        return back();
    }
    public function restoreAll()
    {
        Balance::withTrashed()->restore();
        return back();
    }
    public function emtyTrash()
    {
        Balance::withTrashed()->forceDelete();
        return back();
    }
}
