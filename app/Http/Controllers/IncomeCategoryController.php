<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncomeCategory;
use Yajra\Datatables\Datatables;
use Exception;
use PhpParser\Node\Expr\FuncCall;

class IncomeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()){
            return $IncomeCategoris = Datatables::of(IncomeCategory::all())
            ->addColumn('action','layouts.dt_buttons_2')
            ->make(true);
        }
        
        return view('incomeCategory.index'); 
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('incomeCategory.create');
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
            IncomeCategory::create($request->all());
            return "Data Added Successfully !" ;
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
        $Category = IncomeCategory::find($id);
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
        $IncomeCategoris = IncomeCategory::find($id);
        return view('incomeCategory.edit',compact('IncomeCategoris'));
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
        IncomeCategory::find($id)->update($request->all());
        return "Category Update Successfully !";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        IncomeCategory::find($id);
        return back();
    }

    public function destroyAll()
    {
        IncomeCategory::withTrashed()->delete();
        return $this->trash();
    }


    public function trash()
    {
        $CategoryTrashed = IncomeCategory::onlyTrashed()->get();
        return view('incomeCategory.trash',compact("CategoryTrashed"));
    }


    public function forceDelete($id)
    {
        IncomeCategory::withTrashed()->where('id',$id)->forceDelete();
        return back();
    }

 
    public function restore($id)
    {
        IncomeCategory::withTrashed()->where('id',$id)->restore();
        return $this->index();
    }


    public function restoreAll()
    {
        IncomeCategory::withTrashed()->restore();
        return $this->index();
    }

 
    public function emptyTrsh()
    {
        IncomeCategory::onlyTrashed()->forceDelete();
        return $this->index();
    }

}
