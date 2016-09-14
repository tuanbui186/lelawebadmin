<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('index');
//});

//Route::get('/login',['as'=>'getLogin','uses'=>'Auth\AuthController@getLogin']);
//Route::post('authen/post',['as'=>'postLogin','uses'=>'Auth\AuthController@postLogin']);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');
Route::get('/logout', 'HomeController@logout');

Route::get('/transaction',['as'=>'trans','uses'=>'TransactionController@index']);
Route::resource('/paymanager','PayManagerController');
Route::resource('/paypal','PaymentController');
Route::resource('/stripe','StripePaymentController');
Route::resource('/cate','CategoryController');
//user management
Route::get('/usersmana',['as'=>'users','uses'=>'AccountController@index']);
Route::get('/usersdash',['as'=>'usersdash','uses'=>'AccountController@userdash']);
Route::get('/usersedit/{id}',['as'=>'usersedit','uses'=>'AccountController@useredit']);
Route::put('/usersedit/{id}',['as'=>'usersupdate','uses'=>'AccountController@userupdate']);
Route::post('/usersdestroy/{id}',['as'=>'usersdestroy','uses'=>'AccountController@userdestroy']);


// transaction management
Route::get('/transdash',['as'=>'transdash','uses'=>'TransactionController@transdash']);


// customer management
Route::get('/customer',['as'=>'cus','uses'=>'CustomerController@index']);
Route::get('/customer/{id}',['as'=>'getcus','uses'=>'CustomerController@getedit']);
Route::put('/customer/{id}',['as'=>'postcus','uses'=>'CustomerController@postedit']);
Route::delete('/customer/{id}/del',['as'=>'delcus','uses'=>'CustomerController@del']);
//interpreter management
Route::get('/interpreter',['as'=>'inter','uses'=>'InterpreterController@index']);
Route::get('/interpreter/{id}',['as'=>'getinter','uses'=>'InterpreterController@getedit']);
Route::put('/interpreter/{id}',['as'=>'postinter','uses'=>'InterpreterController@postedit']);
Route::delete('/interpreter/{id}/del',['as'=>'delinter','uses'=>'InterpreterController@del']);
//comment management
Route::get('/comment',['as'=>'comm','uses'=>'CommentController@index']);
Route::get('/comment/{id}',['as'=>'showcomm','uses'=>'CommentController@show']);
Route::delete('/interpreter/{id}/del',['as'=>'delcomm','uses'=>'CommentController@del']);

//calendar
Route::get('/calendar', function(){
    return view('calendar');
	});
});