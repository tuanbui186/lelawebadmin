<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Interpreter;

use DB;

use App\Language;

class InterpreterController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }

	function index()
	{
/*		$inter = DB::table('Interpreter')    
        ->join('UserAccount','Interpreter.UserId','=','UserAccount.UserId')    
        ->select('Interpreter.*')
        ->get();*/

        $lang =DB::table('Language')
        ->select('*')
        ->get();

        $inter = DB::table('Interpreter') 
        ->join('UserAccount','Interpreter.UserId','=','UserAccount.UserId')
        ->select('Interpreter.*','UserAccount.Email as email','UserAccount.DisplayName as name')
        ->get();
        return view('user.interpreter',compact('inter','lang'));
	}
    function getedit($id)
    {
        $edit = DB::table('Interpreter')
        ->join('UserAccount','Interpreter.UserId','=','UserAccount.UserId')
        ->select('Interpreter.*','Interpreter.id as uID','UserAccount.Email as email', 'UserAccount.Password as pass', 'UserAccount.DisplayName as name', 'UserAccount.IsLogin as Login')
        ->where('Interpreter.id','=',$id)
        ->first();
        $lang =DB::table('Language')
        ->select('*')
        ->get();

        return view('user.editinterpreter',compact('edit','lang'));
    }
    function postedit(Request $request, $id)
    {        
            $in = Interpreter::find($id);
            $in->IsActive = $request->txtActive;
            $in->StatusId = $request->txtStatus;        
            $in->LanguageId = $request->txtLang;
            $in->save();
            
           /* $c = DB::table('Interpreter')
            ->select('*')
            ->where('id','=',$id)
            ->first();*/

            return redirect()->route('inter');
    }
    function del($id)
    {
        $in = Interpreter::findOrFail($id);
        $in->delete();
        return redirect()->route('inter');
    }
}