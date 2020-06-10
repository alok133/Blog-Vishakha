<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Profile;

class Profilecontroller extends Controller
{
    public function addprofile(Request $request)
    {
    	if($request->isMethod('post')){

    		$data = $request->all();

    		if($request->hasfile('image')){

    			$file=$request->file('image');
    			$filename='image'.time().'.'.$request->image->extension();
    			$destination=storage_path('../public/upload');
    			$file->move($destination,$filename);
    			$path="/".$filename;
    		}
    		$profile = new Profile;
    		$profile->name=$data['name'];
    		$profile->description=$data['description'];
    		$profile->image=$path;
    		//upload image
    		
    		$profile->save();
    	}
    	return view('admin.userprofile.add');
    }

    public function viewprofile()
    {
    	$views = Profile::all();
    	 return view('admin.userprofile.view',compact('views'));
    }

    public function editprofile(Request $request, $id=null)
    {
    	if($request->isMethod('post')){

            $data=$request->all();

            if($request->hasfile('image')){

                $file=$request->file('image');
                $filename='image'.time().'.'.$request->image->extension();
                $destination=storage_path('../public/upload');
                $file->move($destination,$filename);
                $path="/".$filename;
            }
            else{

                $path=$data['current_image'];
            }

            $edit=Profile::find($id);

            $edit->name=$data['name'];
            $edit->description=$data['description'];
            $edit->image=$path;

            $edit->update();

            return redirect('/viewprofile');
        }
    	$userdetails = Profile::where(['id'=>$id])->first();
       return view('admin.userprofile.edit')->with(compact('userdetails'));
    }

    public function delete($id=null)
    {
    	$delete= Profile::find($id)->delete();
    	return redirect()->back()->with('flash_message_error','profile deleted');
    }
}
