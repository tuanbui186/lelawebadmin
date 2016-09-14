<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\CateRequest;

use App\Http\Requests\EditCateRequest;

use App\Category;

use DB;
class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	function index()
	{
        $cate = DB::table('Category')   
        ->select('Category.*')
        ->orderBy('id', 'ASC')        
        ->get(); 
        return view('category.manage',compact('cate'));
	}
    public function update(EditCateRequest $request, $id)
    {
         $cate = Category::where('id','=', $id)->first();
         // $cate = Category::find();
         //$cate->CatId = $request->txtCatId;
         //$cate->Name = preg_replace('/[^a-zA-Z0-9]/','',$request->txtName);
         $cate->Name = trim(preg_replace('/ +/', ' ', preg_replace('/[^A-Za-z0-9 ]/', ' ', urldecode(html_entity_decode(strip_tags($request->txtName))))));
         $cate->Price = $request->txtPrice;
         $cate->Minute = $request->txtMin;
         $cate->ImagePath = $request->txtImg;
         $cate->Percent = $request->txtPer;
         $cate->Amount = $request->txtAmo ;
         $cate->Check = $request->txtSta;
         
         $cate->save();  

         return redirect()->route('cate.index');
    }
    public function edit($id)
    {
        $edit = DB::table('Category')
        ->select('*')
        ->where('id','=', $id)
        ->first();
        return view('category.edit',compact('edit'));
    }
    public function create()
    {
        return view('category.add');
    }
    public function store(CateRequest $request)
    {
     $add = new Category;
     $add->Name = trim(preg_replace('/ +/', ' ', preg_replace('/[^A-Za-z0-9 ]/', ' ', urldecode(html_entity_decode(strip_tags($request->txtName))))));
     $add->Price = $request->txtPrice;
     $add->Minute = $request->txtMin;
     $add->ImagePath = $request->txtImg;
     $add->Percent = $request->txtPer;
     $add->Amount = $request->txtAmo;
     $add->Check = $request->txtSta;
     $add->save();  

    return redirect()->route('cate.index');
    }
    public function show($id)
    {
        $view = DB::table('Category')
        ->select('*')
        ->where('id','=', $id)
        ->first();
        return view('category.view',compact('view'));
    }
    public function destroy($id)
    {
        $cate = Category::findOrFail($id);
        $cate->delete();
        return redirect()->route('cate.index');
    }
}
