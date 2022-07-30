<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\ExpenseCategory;
use Yajra\Datatables\Datatables;
use Exception;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ExpenseCategoris = ExpenseCategory::all();
        if(request()->ajax()){
            return $Expense = Datatables::of($this->dt_Querys())
            ->addColumn('action' , 'layouts.dt_buttons')
            ->make(true);
        }
        return view('expense.index', compact('ExpenseCategoris'));
    }

    public function dt_Querys()
    {
        return $Expenses = Expense::select('expenses.*','expenses_categories.Name as CategoryName')
        ->leftJoin('expenses_categories','expenses.CategoryID','=','expenses_categories.id')
        ->get();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $ExpenseCategoris = ExpenseCategory::all();
        return view('expense.create',compact('ExpenseCategoris'));
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
            Expense::create($request->all());
            return "Successfully Add New Expense Item";
        }
        catch (Exception $error){
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
        // return Expense::all();
        // $Expense = Expense::find($id);
        $Expense = Expense::select('expenses.*','expenses_categories.Name as CategoryName')
        ->where('expenses.id',$id)
        ->leftJoin('expenses_categories','expenses.CategoryID','=','expenses_categories.id')
        ->first();
        return $Expense ;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ExpenseCategoris = ExpenseCategory::all();
        $Expenses = Expense::find($id);
        return view('expense.edit' , compact('ExpenseCategoris', 'Expenses'));
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
        Expense::find($id)->update($request->all());
        return "data update successfully !";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Expense::find($id)->delete();
        return $this->index();
    }

  
    public function destroyAll()
    {
        Expense::withTrashed()->delete();
        return $this->index();
    }

    public function trash()
    {
        $ExpenseTrashed = Expense::onlyTrashed()->get();
        return view('expense.trash',compact('ExpenseTrashed'));
    }

  
    public function forceDelete($id)
    {
        Expense::withTrashed()->where('id',$id)->forceDelete();
        return back();
    }

   
    public function restore($id)
    {
        Expense::withTrashed()->where('id',$id)->restore();
        return back();
    }

    
    public function restoreAll()
    {
        Expense::withTrashed()->restore();
        return $this->index();
    }

    
    public function emptyTrash()
    {
        Expense::onlyTrashed()->forceDelete();
        return $this->index();
    }
}
