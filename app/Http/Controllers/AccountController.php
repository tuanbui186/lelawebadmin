<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\UserAccount;

use DB;
class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	function index()
	{
		$user = DB::table('UserAccount')
        ->select('*')
        ->get();
		return view('user.useraccount',compact('user'));
	}
    function userdash()
    {
        $userd = DB::table('UserAccount')
        ->select('*')
        ->orderBy('UserId', 'desc')    
        ->take(5)
        ->get();
        return view('dashboard.userdash',compact('userd'));
    }
    function useredit($id)
    {
        $edit = DB::table('UserAccount')
        ->select('*')
        ->where('UserId','=', $id)
        ->first();
        return view('user.edituser',compact('edit'));
    }
    function userupdate(Request $request, $id)
    {
        $up = UserAccount::find($id);
        $up->Email = $request->txtEmail;
        $up->Password = md5($request->txtPass);
        $up->DisplayName = $request->txtName;
        $up->IsLogin = $request->txtLogin;   
        $up->save();

        return redirect()->route('users');
    }
    function userdestroy($id){
       
        $del = UserAccount::find($id);
        $del->delete();
        return redirect()->route('users');
 
    }
}