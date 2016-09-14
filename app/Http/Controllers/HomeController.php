<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $useraccount = DB::table('UserAccount')     
        ->select('*')                    
        ->count();        

    $trans = DB::table('Transaction')
        ->select('*')
        ->count();

    $cus = DB::table('Customer')
        ->select('*')
        ->count();

    $inter = DB::table('Interpreter')
        ->select('*')
        ->count();
    $com = DB::table('Comment')
        ->select('*')
        ->count();
        return view('index',compact('useraccount','trans','cus','inter','com'));
    }
    public function logout()
    {
        \Auth::logout();
        return view('auth.login');
    }
}
