<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Comment;

use DB;
class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	function index()
	{
        $comm = DB::table('Comment')
        ->join('Transaction','Comment.TransId','=','Transaction.Id')
        ->join('UserAccount','Transaction.UserSrc', '=','UserAccount.UserId')
        ->select('Comment.*','Comment.Id as id','UserAccount.*')
        ->get();
        return view('comment.index',compact('comm'));
	}
    function del($id){
       
        $del = Comment::find($id);
        $del->delete();
        return redirect()->route('comm');

    }
}