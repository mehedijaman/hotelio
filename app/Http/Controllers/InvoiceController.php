<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Guest;
use App\Models\TaxSetting;
use Exception;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::all();
        return view('invoice.index',compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Guests = Guest::all();
        $Taxs   = TaxSetting::all();
        return view('invoice.create',compact('Guests','Taxs'));
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
            $invoices = Invoice::create($request->all());
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
        $Taxs   = TaxSetting::all();
        $invoice= Invoice::find($id);
        return view('invoice.edit',compact('Guests','Taxs', 'invoice'));
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
        Invoice::find($id)->update($request->all());
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
        Invoice::find($id)->delete();
        return back();
    }

    public function destroyAll()
    {
        Invoice::withTrashed()->delete();
        return back();
    }
    public function trash()
    {
        $invoices = Invoice::onlyTrashed()->get();
        return view('invoice.trash',compact('invoices'));
    }
    public function restore($id)
    {
        Invoice::withTrashed()->where('id',$id)->restore();
        return back();
    }
    public function restoreAll()
    {
        Invoice::withTrashed()->restore();
        return back();
    }
    public function forceDeleted($id)
    {
        Invoice::withTrashed()->where('id',$id)->forceDelete();
        return back();
    }
    public function emptyTrash()
    {
        Invoice::onlyTrashed()->forceDelete();
        return back();
    }
}
