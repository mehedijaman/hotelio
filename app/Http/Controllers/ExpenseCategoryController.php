<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExpenseCategory;
use Yajra\Datatables\Datatables;
use Exception;

class ExpenseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()){
          return $ExpenseCategoris = Datatables::of(ExpenseCategory::all())
          ->addColumn('action','layouts.dt_buttons_2')
          ->make(true);
        }
        
        return view('expenseCategory.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenseCategory.create');
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
            ExpenseCategory::create($request->all());
            return "Data Successfully Addesd !";
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
        $Category = ExpenseCategory::find($id);
        // return view('expenseCategory.show',compact('Category'));
        return $Category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ExpenseCategoris = ExpenseCategory::find($id);
        return view('expenseCategory.edit', compact('ExpenseCategoris'));
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
        ExpenseCategory::find($id)->update($request->all());
        return "Update Successfully ! ";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ExpenseCategory::find($id)->delete();
        return $this->trash();
    }

    
    public function destroyAll()
    {
        ExpenseCategory::withTrashed()->delete();
        return $this->index();
    }

    
    public function trash()
    {
        $CategoryTrashed = ExpenseCategory::onlyTrashed()->get();
        return view('expenseCategory.trash', compact('CategoryTrashed'));
    }

    
    public function forceDelete($id)
    {
        ExpenseCategory::withTrashed()->where('id',$id)->forceDelete();
        return back();
    }

    
    public function restore($id)
    {
        ExpenseCategory::withTrashed()->where('id',$id)->restore();
        return back();
    }

    
    public function restoreAll()
    {
        ExpenseCategory::withTrashed()->restore();
        return $this->index();
    }

    
    public function emptyTrash()
    {
        ExpenseCategory::onlyTrashed()->forceDelete();
        return $this->index();
    }
}
