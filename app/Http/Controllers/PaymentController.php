<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PaypalRequest;
use App\Payment;
use App\PaymentManage;
use DB;
class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	function index()
	{

	}
    public function update(PaypalRequest $request, $id)
    {
         $pay = Payment::find(1);
         $pay->clientId = $request->txtClientId;
         $pay->clientSecret = $request->txtclientSecret;
         $pay->mode = $request->txtMode;
         $pay->loglevel = $request->txtLogLevel;
         $pay->cache = $request->txtCache;
         $pay->logenable = $request->txtLogEnable;
         $pay->save();             

         $pay2 =  PaymentManage::find(1); 
         $pay2->status = $request->txtStatus;      
         $pay2->capture_amount = $request->txtAmount; 
         $pay2->save();    
         

         $pay3 = PaymentManage::find(2);
         if($request->txtStatus == 0)
            {
                $pay3->status = 1;
            }
            else{
                $pay3->status = 0;
            }
         $pay3->save();
         return redirect()->route('paymanager.index');
    }
    public function edit($id)
    {

        $edit = DB::table('payment_manage')
        ->join('payment','payment.payID','=','payment_manage.id')
        ->select('*')
        ->where('payment.id','=','1')
        ->first();
        return view('Payment.PaypalPayment',compact('edit'));
    }
}