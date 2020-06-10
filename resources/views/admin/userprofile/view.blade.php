@extends('admin.layouts.master')

@section('content')
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-eye"></i>
               </div>
               <div class="header-title">
                  <h1>View profile</h1>
                  <small>View profile</small>
               </div>
            </section>
           
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>View profile</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="btn-group">
                              <div class="buttonexport" id="buttonlist"> 
                                 <a class="btn btn-add" href="{{url('/addprofile')}}"> <i class="fa fa-plus"></i> add user
                                 </a>  
                              </div>
                             
                           </div>
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              <table id="table_id" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>ID</th>
                                       <th>Name</th>
                                       <th>Description</th>
                                       <th>image</th>
                                       
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 	@foreach($views as $view)
                                    <tr>
                                       <td>{{$view->id}}</td>
                                       <td>{{$view->name}}</td>
                                       <td>{{$view->description}}</td>
                                       <td>
                                          @if(!empty($view->image))
                                          <img src="{{asset('/upload'.$view->image)}}" alt="" style="width: 100px;">
                                       </td>
                                       @endif
                                       
                                       
                                       
                                       
                                       <td>
                                          <a href="{{url('/editprofile/' .$view->id)}}" class="btn btn-add btn-sm" ><i class="fa fa-pencil"></i></a>
                                          <a href="{{url('/deleteprofile/' .$view->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> </a>
                                       </td>
                                    </tr>
                                    @endforeach
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->

@endsection