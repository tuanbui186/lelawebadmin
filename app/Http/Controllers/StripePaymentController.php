<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\StripeRequest;

use App\StripePayment;

use App\PaymentManage;

use DB;
class StripePaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	function index()
	{

	}
    public function update(StripeRequest $request, $id)
    {
         $update1 =  StripePayment::find(1); 
         $update1->secret_key = $request->txtSecret;
         $update1->publishable_key = $request->txtPublish;  
         $update1->save();

         $update2 =  PaymentManage::find(2); 
         $update2->status = $request->txtStatus;      
         $update2->capture_amount = $request->txtAmount; 
         $update2->save();                
         
         $update3 = PaymentManage::find(1);
         if($request->txtStatus == 0)
            {
                $update3->status = 1;
            }
            else{
                $update3->status = 0;
            }
         $update3->save();
         return redirect()->route('paymanager.index');
    }
    public function edit($id)
    {
      /*  $edit1 = StripePayment::find(1);
        $edit2 = PaymentManage::find(2);*/
        $edit = DB::table('stripepayment')
        ->join('payment_manage','stripepayment.payID','=','payment_manage.id')
        ->select('*')
        ->where('stripepayment.id','=','1')
        ->first();
        return view('Payment.StripePayment',compact('edit'));
    }

}
