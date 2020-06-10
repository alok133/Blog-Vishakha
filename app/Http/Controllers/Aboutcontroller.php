<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\About;

class Aboutcontroller extends Controller
{
    public function about()
    {
    	$post = Profile::all();
    	$get = About::get();
    	return view('blog.about',compact('post','get'));
    }

    public function addabout(Request $request)
    {
        if($request->isMethod('post')){

        	$data = $request->all();
//1st iamge
        	if($request->hasfile('image')){

    			$file=$request->file('image');
    			$filename='image'.time().'.'.$request->image->extension();
    			$destination=storage_path('../public/upload');
    			$file->move($destination,$filename);
    			$path="/".$filename;
    		}
//2nd image
            if($request->hasfile('projectimage')){

    			$file=$request->file('projectimage');
    			$filename='projectimage'.time().'.'.$request->projectimage->extension();
    			$destination=storage_path('../public/upload');
    			$file->move($destination,$filename);
    			$imagepath="/".$filename;
    		}

    		$about=new About;

    		$about->aboutme=$data['aboutme'];
    		$about->aboutblog=$data['aboutblog'];
    		$about->skillexperience=$data['skillexperience'];
    		$about->sideprojects=$data['sideprojects'];
    		$about->image=$path;
    		$about->projectimage=$imagepath;
    		
    		$about->save();
    	}
    	return view('admin.about.addabout');
    }

     public function viewabout()
    {
    	$views = About::all();
    	 return view('admin.about.viewabout',compact('views'));
    }

     public function editabout(Request $request,$id=null){

        if($request->isMethod('post')){

            $data=$request->all();

            if($request->hasfile('image')){

                $file=$request->file('image');
                $filename='image'.time().'.'.$request->image->extension();
                $destination=storage_path('../public/upload/');
                $file->move($destination,$filename);
                $path="/".$filename;
            }
            else{

                $path=$data['current_image'];
            }

            if($request->hasfile('projectimage')){

                $file=$request->file('projectimage');
                $filename='projectimage'.time().'.'.$request->projectimage->extension();
                $destination=storage_path('../public/upload/');
                $file->move($destination,$filename);
                $imagepath="/".$filename;
            }

            else{
                $imagepath=$data['current_projectimage'];
            }

            $edit=About::find($id);

            $edit->aboutme=$data['aboutme'];
            $edit->aboutblog=$data['aboutblog'];
            $edit->skillexperience=$data['skillexperience'];
            $edit->sideprojects=$data['sideprojects'];
            $edit->image=$path;
            $edit->projectimage=$imagepath;

            $edit->update();

            return redirect('/viewabout');

        }

        $data=About::where('id',$id)->first();

        return view('admin.about.editabout',compact('data'));

    }

     public function delete($id=null)
    {
    	$delete= About::find($id)->delete();
    	return redirect()->back()->with('flash_message_error','deleted successfully');
    }
}
