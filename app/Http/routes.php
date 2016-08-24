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

Route::get('login',['as'=>'login', function(){
	return view('admin.login');
}]);
Route::post('into',['as'=>'loging','uses'=>'Mycontroller@login']);

Route::group([ 'middleware' => 'auth'], function() {
 
Route::get('dashboard',['as'=>'dashboard', function(){
	return view('admin.dashboard');
}]);

});