<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use Yajra\Datatables\Datatables;
use App\Models\IncomeCategory;
use PHPUnit\Framework\Exception;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $IncomeCategoris = IncomeCategory::all();
        if(request()->ajax()){
            return $Income = Datatables::of($this->dtQuerys())
            ->addColumn('action' , 'layouts.dt_buttons')
            ->make(true);
        }
        return view('income.index',compact('IncomeCategoris'));
    }

    public function dtQuerys(){
        return $Incomes = Income::select('incomes.*','income_categories.Name as CategoryName')
        ->leftJoin('income_categories','incomes.CategoryID','=','income_categories.id')
        ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $IncomeCategoris = IncomeCategory::all();
        return view('income.create', compact('IncomeCategoris'));
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
            Income::create($request->all());
            return "Data Added Successfully ";
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
        $Income = Income::select('incomes.*','income_categories.Name as CategoryName')
        ->where('incomes.id',$id)
        ->leftJoin('income_categories','incomes.CategoryID','=','income_categories.id')
        ->first();
        return $Income;
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $IncomeCategoris = IncomeCategory::all();
        $Incomes = Income::find($id);
        return view('income.edit', compact('Incomes','IncomeCategoris'));
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
        Income::find($id)->update($request->all());
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
        Income::find($id)->delete();
        return $this->index();
    }

    
    public function destroyAll()
    {
        Income::withTrashed()->delete();
        return back();
    }

    
    public function trash()
    {
        $IncomeTrashed = Income::onlyTrashed()->get();
        return view('income.trash',compact('IncomeTrashed'));
    }

    
    public function forceDelete($id)
    {
        Income::withTrashed()->where('id',$id)->forceDelete();
        return back();
    }

    
    public function restore($id)
    {
        Income::withTrashed()->where('id',$id)->restore();
        return back();
    }

   
    public function restoreAll()
    {
        Income::withTrashed()->restore();
        return $this->index();
    }

   
    public function emptyTrash()
    {
        Income::onlyTrashed()->forceDelete();
        return $this->index();
    }
}
