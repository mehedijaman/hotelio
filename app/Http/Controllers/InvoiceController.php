<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\SoftDeletes;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Guest;
use App\Models\Hotel;
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
        $Hotels = Hotel::all();
        $Guests = Guest::all();
        $Taxs   = TaxSetting::all();
        if(request()->ajax()){
            return Datatables::of($this->dtQuery())->addColumn('action','layouts.dt_buttons_2')->make(true);
        }
        return view('invoice.index',compact('Hotels','Guests','Taxs'));
    }
    public function dtQuery()
    {
        return $invoices = Invoice::select('invoices.*', 'tax_settings.Name as Tax', 'guests.Name as Guest')
        ->leftJoin('tax_settings', 'invoices.TaxID', '=', 'tax_settings.id')
        ->leftJoin('guests', 'invoices.GuestID', '=', 'guests.id')
        ->get();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Hotels = Hotel::all();
        $Guests = Guest::all();
        $Taxs   = TaxSetting::all();
        return view('invoice.create',compact('Hotels','Guests','Taxs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $Invoice = Invoice::create($request->all());

       $TotalItems = sizeof($request->ItemName);

       for($i = 0; $i < $TotalItems; $i++)
       {
            $InvoiceItem = new InvoiceItem();

            $InvoiceItem->InvoiceID = $Invoice->id;
            $InvoiceItem->Name = $request->ItemName[$i];
            $InvoiceItem->Description = $request->ItemDescription[$i];
            $InvoiceItem->Qty = $request->ItemQty[$i];
            $InvoiceItem->UnitPrice = $request->ItemUnitPrice[$i];
            $InvoiceItem->Price = $request->ItemPrice[$i];

            $InvoiceItem->save();
       }
       return'Invoice Added SuccessFully !';
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
        // return $request->all();
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
       return back()->with('Destroy', 'Delete Completed !');
    }
    /**
     * Delete all table list
    */
    public function destroyAll()
    {
       Invoice::withTrashed()->delete();
       return back()->with('DestroyAll', 'সমস্ত ডাটাকে খালি করা হলো');
    }
    /**
     * View Trash page 
    */
    public function trash()
    {
        $Invoices = Invoice::onlyTrashed()->get();
        
        return view('invoice.trash',compact('Invoices'));
    }
    /**
     * table column restore
    */
    public function restore($id)
    {
        Invoice::withTrashed()->where('id',$id)->restore();
        return back()->with('Restore', 'Restore SuccessFully !');
    }
    /**
     * Table  all Column list restore
    */
    public function restoreAll()
    {
        Invoice::withTrashed()->restore();
        return back()->with('RestoreAll', 'সমস্ত ডাটাকে পুনরুদ্ধার করা হয়েছে');
    }
    /**
     * table remove delete
    */
    public function forceDeleted($id)
    {
        Invoice::withTrashed()->where('id',$id)->forceDelete();
        return back()->with('PermanentlyDelete', 'Permanently Delete Completed !');
    }
    /**
     * All table list remove
    */
    public function emptyTrash()
    {
        Invoice::onlyTrashed()->forceDelete();
        return back()->with('EmptyTrash', 'ট্রাস সম্পূর্ণরূপে খালি করা হলো');
    }


}
