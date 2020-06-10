<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Blogpost;

class Indexcontroller extends Controller
{
    public function index()
    {
    	$get=Profile::get();
    	$post=Blogpost::all();
    	
    	return view('blog.layouts.body',compact('get','post'));
    }
}
