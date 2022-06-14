<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use Exception;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return "hello";
        $Hotels = Hotel::all();
        return view('hotel.index',compact('Hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotel.create');
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
            Hotel::create($request->all());
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
        $Hotels = Hotel::find($id);
        return view('hotel.edit' ,compact('Hotels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $Hotels = new Hotel();
        $Hotels = Hotel::find($request->id);
        $Hotels->Name = $request->Name;
        $Hotels->Title      = $request->Title;
        $Hotels->Email      = $request->Email;
        $Hotels->Address    = $request->Address;
        $Hotels->Phone      = $request->Phone;
        $Hotels->RegNo      = $request->RegNo;
        $Hotels->Logo       = $request->Logo;
        $Hotels->Photo      = $request->Photo;

        $Hotels->save();

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
        Hotel::find($id)->delete();
        return back();
    }
}
