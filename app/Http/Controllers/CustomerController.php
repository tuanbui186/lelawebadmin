<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Customer;

use App\UserAccount;

use DB;
class CustomerController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }

	function index()
	{
		$cus = DB::table('Customer')
        ->join('UserAccount','Customer.UserId','=','UserAccount.UserId')
        ->select('Customer.*','UserAccount.Email as email', 'UserAccount.DisplayName as name')
        ->get();
        $lang =DB::table('Language')
        ->select('*')
        ->get();
		return view('user.customer',compact('cus','lang'));
	}
    function getedit($id)
    {
        $edit = DB::table('Customer')
        ->join('UserAccount','Customer.UserId','=','UserAccount.UserId')
        ->select('Customer.*','Customer.id as uID','UserAccount.Email as email', 'UserAccount.Password as pass', 'UserAccount.DisplayName as name', 'UserAccount.IsLogin as Login')
        ->where('Customer.id','=',$id)
        ->first();
        $lang =DB::table('Language')
        ->select('*')
        ->get();

        return view('user.editcustomer',compact('edit','lang'));
    }
    function postedit(Request $request, $id)
    {        
            $cus = Customer::find($id);
            $cus->IsActive = $request->txtActive;
            $cus->StatusId = $request->txtStatus;        
            $cus->LanguageId = $request->txtLang;
            $cus->save();
            $c = DB::table('Customer')
            ->select('*')
            ->where('id','=',$id)
            ->first();
            return redirect()->route('cus');
    }
    function del($id)
    {
        $cus = Customer::findOrFail($id);
        $cus->delete();
        return redirect()->route('cus');
    }

}