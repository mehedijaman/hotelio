<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use Exception;
use Ramsey\Uuid\Guid\Guid;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        return view('guest.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Guest = Guest::all();
        return view('guest.create',compact('Guest'));
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
            Guest::create($request->all());
            return back();
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
        $Guest = Guest::find($id);
        return view('guest.show',compact('Guest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Guests = Guest::find($id);
        return view('guest.edit' ,compact('Guests'));
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
        Guest::find($id)->update($request->all());
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
        Guest::find($id)->delete();
        return $this->index();
    }

    //destroyAll 
    public function destroyAll()
    {
        Guest::withTrashed()->delete();
        return $this->index();
    } 

    //trash
    public function trash()
    {
        $GuestTrashed = Guest::onlyTrashed()->get();
        return view('guest.trash',compact('GuestTrashed'));
    }    

    //restore
    public function restore($id)
    {
        Guest::withTrashed()->where('id',$id)->restore();
        return back();
    }

    public function restoreAll()
    {
        Guest::withTrashed()->restore();
        return $this->index();
    }

    public function forceDelete($id)
    {
        Guest::withTrashed()->where('id',$id)->forceDelete();
    }

    public function emptyTrash()
    {
        Guest::onlyTrashed()->forceDelete();
        return $this->index();
    }

}
