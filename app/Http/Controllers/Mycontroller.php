<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AdminRequest;
use Session;
use DB;
use Input;
use Auth;
use Validator;
use Redirect;

class Mycontroller extends Controller
{
   
   public function login(AdminRequest $request){
   	if (Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')])) {
           $user = Auth::user();
           $a=$user->username;
           return  redirect()->intended('dashboard');
        }  else {
        return Redirect::to('login')->withErrors(array('need' => 'Invalid Username or Password'))->withInput(Input::except('password'));
        }
   }
}
