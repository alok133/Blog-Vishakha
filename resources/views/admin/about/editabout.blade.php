@extends('admin.layouts.master')
@section('content')
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Edit About</h1>
                  <small>Edit About</small>
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
                              <i class="fa fa-list"></i>  Edit About </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6" method="post" action="{{url('/editabout/' .$data->id)}}" enctype="multipart/form-data">
                           	@csrf
                              <div class="form-group">
                                 <label>About Me</label>
                                 <textarea name="aboutme" class="form-control">
                                    {{$data->aboutme}}
                                 </textarea>
                              </div>
                              
                              <div class="form-group">
                                 <label>Image1</label>
                                 <input type="file" name="image">
                                 <input type="hidden" name="current_image" value="{{$data->image}}">
                                 <img src="{{'/upload/' .$data->image}}" style="width: 100px;margin-top: 10px;">
                              </div>
                              
                              	
                              
                              <div class="form-group">
                                 <label>About Blog</label>
                                 <textarea name="aboutblog" class="form-control">
                                    {{$data->aboutblog}}
                                 </textarea>
                              </div>

                              <div class="form-group">
                                 <label>Skill and Experience</label>
                                 <textarea name="skillexperience" class="form-control">
                                     {{$data->skillexperience}}
                                 </textarea>
                              </div>

                              <div class="form-group">
                                 <label>Side Projects</label>
                                 <textarea name="sideprojects" class="form-control">
                                    {{$data->sideprojects}}
                                 </textarea>
                              </div>

                               <div class="form-group">
                                 <label>Image2</label>
                                 <input type="file" name="projectimage">
                                 <input type="hidden" value="{{$data->projectimage}}" name="current_projectimage">

                                 <img src="{{'/upload/' .$data->projectimage}}" style="width: 100px;margin-top: 10px;">

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