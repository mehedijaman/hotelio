<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class SMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sms.index');
    }

    /**
     * Send SMS 
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        

        if($request->Numbers == 'Employee')
        {
            $Employee_Numbers = Employee::all()->pluck('Phone')->toArray();
        }
        else
            return $request->all();

        $URL = "";

        $Post = array(
            'email' => '', 
            'password' => '',
            'method' => 'send_sms',            
            'mobile' => $Employee_Numbers,
            'mask' => '',
            'message' => $request->Message,
        );

        $CH = curl_init($URL);

        curl_setopt($CH, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($CH,CURLOPT_POST,1);
        curl_setopt($CH, CURLOPT_POSTFIELDS, http_build_query($Post));
        curl_setopt($CH, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($CH,CURLOPT_FAILONERROR,true);
        curl_setopt($CH,CURLOPT_SSL_VERIFYPEER,false);

        return curl_exec($CH);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
