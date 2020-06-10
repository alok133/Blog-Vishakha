<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
class AdminController extends Controller
{
    public function dashboard(){

    	return view('admin.dashboard');
    }

    public function login(Request $request){
       if($request->isMethod('post')){
       	$data = $request->input();
       	if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
       		return redirect('/dashboard');
       	}else{
       		return redirect('/admin')->with('flash_message_error','invalid username or password');
       	}
       }


    	return view('admin.login');
    }

    public function logout()
    {
    	Session::flush();
    	return redirect('/admin')->with('flash_message_success','logged out successfully');
    }
}
