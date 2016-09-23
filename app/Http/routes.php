<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/',['as'=>'home', 'uses'=>'Mycontroller@home' ]);
Route::get('justlist',['as'=>'justlist','uses' => 'Mycontroller@justlist']);
Route::get('login',['as'=>'login', function(){
	return view('admin.login');
}]);
Route::post('into',['as'=>'logging','uses'=>'Mycontroller@login']);
Route::get('test',function(){
$product = App\Type::find(2)->product;
echo "<pre>";

   print_r($product);

});	
Route::get('list/{id}',['as'=>'list','uses' => 'Mycontroller@lists']);
Route::get('details/{id}',['as'=>'details','uses'=>'Mycontroller@details']);
Route::get('about',['as'=>'about', 'uses'=>'Mycontroller@about' ]);
Route::get('contact',['as'=>'contact', 'uses'=>'Mycontroller@contact' ]);
Route::post('complain',['as'=>'complain','uses'=>'Mycontroller@complain']);

Route::group([ 'middleware' => 'auth'], function() {

	Route::get('logout', ['as' => 'logout', function(){
	Auth::logout();
	return view('admin.login');
	}]);
	Route::get('dashboard',['as'=>'dashboard', function(){
		return view('admin.dashboard');
	}]);
	Route::get('addproduct',['as'=>'addproduct', 'uses' => 'Mycontroller@addproduct']);
	Route::post('productadd',['as'=>'productadd', 'uses' => 'Mycontroller@productadd']);
	Route::get('productlist',['as'=>'productlist','uses' => 'Mycontroller@productlist']);
	Route::get('getlist/{id}',['as'=>'getlist','uses' => 'Mycontroller@getlist']);
	Route::get('edit/{id}',['as'=>'edit','uses'=>'Mycontroller@edit']);
	Route::post('editing',['as'=>'editing','uses'=>'Mycontroller@editing']);
	Route::get('deleteproduct/{id}',['as'=>'deleteproduct','uses'=>'Mycontroller@deleteproduct']);
	Route::get('admindetails/{id}',['as'=>'admindetails','uses'=>'Mycontroller@admindetails']);
	
});