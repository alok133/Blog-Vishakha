@extends('admin.layouts.master')
@section('content')
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Edit Blog</h1>
                  <small>Edit Blog</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="clist.html"> 
                              <i class="fa fa-list"></i>  Edit Blog </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6" method="post" action="{{url('/editblog/' .$data->id)}}" enctype="multipart/form-data">
                           	@csrf
                              <div class="form-group">
                                 <label>Blog heading</label>
                                 <textarea name="heading" class="form-control">
                                    {{$data->heading}}
                                 </textarea>
                              </div>
                              
                              <div class="form-group">
                                 <label>Image</label>
                                 <input type="file" name="image">
                                 <input type="hidden" name="current_image" value="{{$data->image}}">
                                 <img src="{{'/upload/' .$data->image}}" style="width: 100px;margin-top: 10px;">
                              </div>
                              
                              	 <div class="form-group">
                                 <label>content</label>
                                 <textarea name="content" class="form-control">
                                    {{$data->content}}
                                 </textarea>
                              </div>
                              
                               <div class="form-group">
                                 <label>Image2</label>
                                 <input type="file" name="image2">
                                 <input type="hidden" value="{{$data->image2}}" name="current_image2">

                                 <img src="{{'/upload/' .$data->image2}}" style="width: 100px;margin-top: 10px;">

                              </div>
                              
                              <div class="reset-button">
                                 
                                <input type="submit" class="btn btn-success" value="submit">
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
@endsection