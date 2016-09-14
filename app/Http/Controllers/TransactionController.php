<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class TransactionController extends Controller
{
	function index()
	{
		$trans = DB::table('Transaction')
        ->select('*')
        ->get();
        $user = DB::table('UserAccount')
        ->select('*')
        ->get();
		return view('Transaction.transaction',compact('trans','user'));
	}
	function transdash()
	{
		$trans = DB::table('Transaction')
        ->select('*')
        ->orderby('Id','DESC')
        ->take(5)
        ->get();
        $user = DB::table('UserAccount')
        ->select('*')
        ->get();
		return view('dashboard.transdash',compact('trans','user'));
	}
}
