<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Blogpost;


class Blogpostcontroller extends Controller
{
    public function blogPost($id=null)
    {
    	$view=Blogpost::find($id);
    	$blog=Profile::all();
    	return view('blog.blogpost',compact('blog','view'));
    }


    public function addblog(Request $request)
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

    		if($request->hasfile('image2')){

    			$file=$request->file('image2');
    			$filename='image2'.time().'.'.$request->image2->extension();
    			$destination=storage_path('../public/upload');
    			$file->move($destination,$filename);
    			$imagepaths="/".$filename;
    		}

    		$blog = new Blogpost;
    		$blog->heading=$data['heading'];
    		$blog->content=$data['content'];
    		$blog->image=$path;
    		$blog->image2=$imagepaths;
    		//upload image
    		
    		$blog->save();
    	}
    	return view('admin.blogpost.addblog');
    }


     public function viewblog(){

        $show=Blogpost::all();

        return view('admin.blogpost.viewblog',compact('show'));
    }

    public function editblog(Request $request,$id=null){

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

            if($request->hasfile('image2')){

                $file=$request->file('image2');
                $filename='image2'.time().'.'.$request->image2->extension();
                $destination=storage_path('../public/upload/');
                $file->move($destination,$filename);
                $imagepath="/".$filename;
            }

            else{
                $imagepath=$data['current_image2'];
            }

            $edit=Blogpost::find($id);

            $edit->heading=$data['heading'];
            $edit->content=$data['content'];
            $edit->image=$path;
            $edit->image2=$imagepath;

            $edit->update();

            return redirect('/viewblog');

        }

        $data=Blogpost::where('id',$id)->first();

        return view('admin.blogpost.editblog',compact('data'));

    }

    public function delete($id=null)
    {
        $delete= Blogpost::find($id)->delete();
        return redirect()->back()->with('flash_message_error','deleted successfully');
    }


}
