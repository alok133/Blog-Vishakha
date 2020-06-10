@extends('admin.layouts.master')

@section('content')
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-eye"></i>
               </div>
               <div class="header-title">
                  <h1>View blog</h1>
                  <small>View blog</small>
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
                                 <h4>View blog</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="btn-group">
                              <div class="buttonexport" id="buttonlist"> 
                                 <a class="btn btn-add" href="{{url('/addblog')}}"> <i class="fa fa-plus"></i> add blog
                                 </a>  
                              </div>
                             
                           </div>
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              <table id="table_id" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>ID</th>
                                       <th>heading</th>
                                       <th>Image</th>
                                       <th>content</th>
                                       <th>Image2</th>
                                       
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 	@foreach($show as $shows)
                                    <tr>
                                       <td>{{$shows->id}}</td>
                                       <td>{{$shows->heading}}</td>
                                       <td>
                                          <img src="{{asset('/upload' .$shows->image)}}" style="width: 100px;">
                                       </td>
                                       <td>{{$shows->content}}</td>
                                       
                                      <td>
                                          <img src="{{asset('/upload' .$shows->image2)}}" style="width: 100px;">
                                       </td>
                                       
                                       
                                       
                                       
                                       
                                       <td>
                                          <a href="{{url('/editblog/' .$shows->id)}}" class="btn btn-add btn-sm" ><i class="fa fa-pencil"></i></a>
                                          <a href="{{url('/deleteblog/' .$shows->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> </a>
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