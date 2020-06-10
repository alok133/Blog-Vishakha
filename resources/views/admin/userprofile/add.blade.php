@extends('admin.layouts.master')
@section('content')

 <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Edit profile</h1>
                  <small>Edit profile</small>
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
                              <a class="btn btn-add " href="{{url('/viewprofile')}}"> 
                              <i class="fa fa-list"></i>  view profile </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6" action="{{url('/addprofile')}}"method="post" enctype="multipart/form-data">
                           	@csrf
                              <div class="form-group">
                                 <label>Name</label>
                                 <input type="text" name="name" class="form-control" placeholder="Enter  Name" required >
                              </div>
                              <div class="form-group">
                                 <label>description</label>
                                 <textarea name="description" class="form-control"></textarea>
                              </div>
                              
                              <div class="form-group">
                                 <label>Picture upload</label>
                                 <input type="file" name="image">
                                 
                              </div>
                              
                              <div class="reset-button">
                                 <input type="submit" class="btn btn-success" value="Save" class="btn btn-success">
                                 
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->

@endsection