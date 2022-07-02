<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\SoftDeletes;
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
        // $invoices = Invoice::all();
        return view('invoice.index');
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
       
    }

}
