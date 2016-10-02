<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\ProductRequest;
use Mail;
use Session;
use DB;
use Input;
use Auth;
use Validator;
use Redirect;
use Storage;
use File;

class Mycontroller extends Controller
{
   
   function home(){
   	$get=DB::table('types')->get();

   	return view('home')->with(compact('get'));
   }
   function lists($id){
   	$all=DB::table('products')->where('type_id','=',$id)->paginate(3);
   	return view('list')->with(compact('all'));
   }
   function login(AdminRequest $request){
	if (Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')])) {
	$user = Auth::user();
	return Redirect::to('dashboard');
	}  else {
	return Redirect::to('login')->withErrors(array('need' => 'Invalid Username or Password'))->withInput(Input::except('password'));
	}
	}
   function search(){
      $all=Input::all();
      
      if($all['look']==NULL){
         Session::flash('status', 'Please enter something');
      }else{
      $f='%'.$all['look'].'%';
      $get=DB::table('products')->where('name','LIKE',$f)->paginate(1);
      if($get->isEmpty()){
         Session::flash('status', 'No such thing exist');
                   } 
       return view('result')->with(compact('get'));
         } 
       return view('result')->with(compact('get'));
        
   }
   function addproduct(){
   	$get=DB::table('types')->get();
   	return view('admin.addproduct')->with(compact('get'));
   }
   function details($id){
   	$just=DB::table('products')->where('id','=',$id)->get();
   	return view('details')->with(compact('just'));
   }
   function productadd(ProductRequest $request){
   	$all=Input::all();
   	print_r($all['details']);
   	$imageName = $all['name'] . '.' .$request->file('image')->getClientOriginalExtension();
   	
   	$request->file('image')->move(base_path() . '/public/images', $imageName  );
	$in=DB::table('products')
	->insert(['name' => $all['name'] ,'type_id'=>$all['type'],'details'=>$all['details'],'image'=>$imageName]);
	if($in==true){
	Session::flash('status', 'Data added successfully!');
	} else {
	Session::flash('status', 'Date addition unsuccessful!'); 
	} 
	return Redirect::to('addproduct');
   }
   function productlist(){
   	$lists=DB::table('types')->get();
   	return view('admin.productlist')->with(compact('lists'));
   }
   function getlist($id){
   	//echo $id;

   	$get=DB::table('products')->where('type_id','=',$id)->get();
   	foreach ($get as $gets) {
   		
   		echo "<a href=".route('list',$gets->id).">".$gets->name."</a><br/>";
         
         
   	}
    }
    function justlist(){
      
      $get=DB::table('types')->get();
      foreach ($get as $get) {
      
      echo "<a href=".route('list',$get->id)."><li class='ex' style='padding-left:10px;'>".$get->name."</li></a>";
      
      }
    }
    
    function listnojs(){
      $lists=DB::table('types')->get();
      $all=input::all();
       $id=$all['id'];
       $get=DB::table('products')->where('type_id','=',$id)->paginate(1);
       return view('admin.productlist')->with(compact('get','lists'));

    }
   function deleteproduct($id){
   	$name=DB::table('products')->where('id','=',$id)->get();
   	if($name==false) echo "string";
   	$del=DB::table('products')->where('id','=',$id)->delete();
   	foreach ($name as $img ) {	$image=$img->image;   	}
   	
   	File::Delete(base_path() . '/public/images',$image);
   	
   	if($del==true){
	Session::flash('status', 'Data deletation successful');
	} else {
	Session::flash('status', 'Something went wrong'); 
	} 
	return Redirect::to('productlist');
   }
   function admindetails($id){
   	$just=DB::table('products')->where('id','=',$id)->get();
   	return view('admin.admindetails')->with(compact('just'));
   }
   
   function edit($id){
      $get=DB::table('products')->where('id','=',$id)->get();
      return view('admin.edit')->with(compact('get'));
   }
   function editing(){
      $all=Input::all();
      $into=DB::table('products')->where('id', $all['id'])->update(['name' => $all['name'],'details'=>$all['details']]);
      if($into==true){
      Session::flash('status', 'Data editing successful');
      } else {
      Session::flash('status', 'Something went wrong'); 
      } 
      return redirect()->route('admindetails', ['id' =>$all['id'] ]);
     
   }
   function contact(){
      return view('contact');
   }

   function complain(){
      $all=Input::all();
      $into=DB::table('feedback')->insert(['name' => $all['name'] ,'email'=>$all['email'],'phone'=>$all['phone'],'message'=>$all['message']]);
   
      if($into==true){
      Session::flash('status', 'Thank you for your time we will get back to you as soon as possible');
      } else {
      Session::flash('status', 'Something went wrong'); 
      } 
      return redirect()->route('contact');
     
   }

   function showfeedback(){
      $get=DB::table('feedback')->orderby('f_time','desc')->paginate(1);
      return view('admin.showfeedback')->with(compact('get'));
   }

   function feedback($id){
      $get=DB::table('feedback')->where('id','=',$id)->get();
      return view('admin.feedback')->with(compact('get'));
   }
}
