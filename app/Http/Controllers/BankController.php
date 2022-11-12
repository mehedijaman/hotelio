<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;
use Exception;
use Yajra\Datatables\Datatables;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            return $Banks = Datatables::of(Bank::all())
            ->addColumn('action','layouts.dt_buttons')
            ->make(true);
        }
        
        return view('bank.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bank.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            Bank::create($request->all());
            return 'Bank Add Succeessfully !';
        }
        catch(Exception $error){
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
        $Bank = Bank::find($id);
        return $Bank;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Banks = Bank::find($id);
        return view('bank.edit',compact('Banks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        Bank::find($id)->update($request->all());
        return "Update Successfully !";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bank::find($id)->delete();
        return back()->with('delete','Deleted data is stored in the trash'); 
    }
 
    public function destroyAll()
    {
        Bank::withTrashed()->delete();
        return back()->with('destroyAll','Deleted All data is stored in the trash');
    }

    public function trash()
    {
        $BankTrashed =  Bank::onlyTrashed()->get();
        return view('bank.trash',compact('BankTrashed'));

    }

    public function forceDeleted($id){
        Bank::withTrashed()->where('id',$id)->forceDelete();
        return back()->with('Parmanentlly','Parmanentlly Delete');
    }

    public function restore($id){
        Bank::withTrashed()->where('id',$id)->restore();
        return back()->with('Restore','Restore Successfull !');
    }

    public function restoreAll()
    {
        Bank::withTrashed()->restore();
        return back()->with('RestoreAll','সমস্ত ডাটাকে পুনরুদ্ধার করা হয়েছে ');

    }

    public function emptyTrash()
    {
        Bank::onlyTrashed()->forceDelete();
        return back()->with('emptyTrash','ট্রাস সম্পূর্ণরূপে খালি করা হলো ');
    }

}
