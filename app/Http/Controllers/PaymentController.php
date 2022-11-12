<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DGvai\SSLCommerz\SSLCommerz;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('payment.index');
    }

    public function order(Request $request)
    {

        // return $request->all();

        $sslc = new SSLCommerz();
        $sslc->amount($request->Amount)
            ->trxid($request->TrxID)
            ->product($request->Product)
            ->customer($request->CustomerName,$request->CustomerEmail);
        return $sslc->make_payment();

        /**
         * 
         *  USE:  $sslc->make_payment(true) FOR CHECKOUT INTEGRATION
         * 
         * */
    }


   public function success(Request $request)
    {
        return $request->all();
        
        $validate = SSLCommerz::validate_payment($request);
        if($validate)
        {
            // $bankID = $request->bank_tran_id;   //  KEEP THIS bank_tran_id FOR REFUNDING ISSUE

            return 'Payment Successfull !';
         
        }
    }

    public function failure(Request $request)
    {
        return "Txn Failed !";
    }
}
