<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
class PayManagerController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

	function index()
	{
        $paymana = DB::table('payment_manage')   
        ->select('*')
        ->orderBy('id', 'ASC')        
        ->get(); 
        return view('Payment.ManagePayment',compact('paymana'));
	}
	function edit()
	{
/*		$edit = DB::table('stripepayment')
        ->join('payment_manage','stripepayment.payID','=','payment_manage.id')
        ->select('stripepayment.id as ID','stripepayment.name as Name','stripepayment.status as Status','stripepayment.capture_amount as Amount','payment_manage.*')
        ->get();
        return view('Payment.StripePayment',compact('edit'));*/
	}
}