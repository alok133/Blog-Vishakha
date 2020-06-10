@extends('admin.layouts.master')
@section('content')
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Add Blog</h1>
                  <small>Add Blog</small>
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
                              <a class="btn btn-add " href="{{url('/viewblog')}}"> 
                              <i class="fa fa-list"></i>  View blog </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6" method="post" action="{{url('/addblog')}}" enctype="multipart/form-data">
                           	@csrf
                              <div class="form-group">
                                 <label>Blog heading</label>
                                <input type="text" name="heading" class="form-control">
                              </div>
                              
                              <div class="form-group">
                                 <label>Image1</label>
                                 <input type="file" name="image">
                              </div>
                              
                              	
                              
                              <div class="form-group">
                                 <label>content</label>
                                 <textarea name="content" class="form-control"></textarea>
                              </div>

                              <!--<div class="form-group">
                                 <label>Skills and Experience</label>
                                 <textarea name="skillexperience" class="form-control"></textarea>
                              </div>

                              <div class="form-group">
                                 <label>Side Projects</label>
                                 <textarea name="sideprojects" class="form-control"></textarea>
                              </div>-->

                               <div class="form-group">
                                 <label>Image2</label>
                                 <input type="file" name="image2">
                              </div>
                              
                              <div class="reset-button">
                                 
                                <input type="submit" class="btn btn-success" value="Add blog">
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