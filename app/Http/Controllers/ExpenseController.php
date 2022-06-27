<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\ExpenseCategory;
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
        $Expenses = Expense::select('expenses.*','expenses_categories.Name as CategoryName')
        ->leftJoin('expenses_categories','expenses.CategoryID','=','expenses_categories.id')
        ->get();
        return view('expense.index', compact('Expenses'));
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
            return back();
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
        $Expense = Expense::find($id);
        return view('expense.show',compact('Expense'));
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
        Expense::find($id)->delete();
        return $this->index();
    }

    //destroyAll
    public function destroyAll()
    {
        Expense::withTrashed()->delete();
        return $this->index();
    }

    //trash
    public function trash()
    {
        $ExpenseTrashed = Expense::onlyTrashed()->get();
        return view('expense.trash',compact('ExpenseTrashed'));
    }

    //restore
    public function forceDelete($id)
    {
        Expense::withTrashed()->where('id',$id)->forceDelete();
        return back();
    }

    //restore
    public function restore($id)
    {
        Expense::withTrashed()->where('id',$id)->restore();
        return back();
    }

    //restoreAll
    public function restoreAll()
    {
        Expense::withTrashed()->restore();
        return $this->index();
    }

    //emptyTrash
    public function emptyTrash()
    {
        Expense::onlyTrashed()->forceDelete();
        return $this->index();
    }
}
