<aside class="main-sidebar">
            <!-- sidebar -->
            <div class="sidebar">
               <!-- sidebar menu -->
               <ul class="sidebar-menu">
                  <li class="active">
                     <a href="index.html"><i class="fa fa-tachometer"></i><span>Dashboard</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-users"></i><span>your profile</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{url('/addprofile')}}">Edit profile</a></li>
                        <li><a href="{{url('/viewprofile')}}">view</a></li>
                        
                     </ul>
                  </li>

                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-users"></i><span>About</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{url('/addabout')}}">Add about</a></li>
                        <li><a href="{{url('/viewabout')}}">view about</a></li>
                        
                     </ul>
                  </li>

                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-users"></i><span>Blogpost</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{url('/addblog')}}">Add blog</a></li>
                        <li><a href="{{url('/viewblog')}}">view blog</a></li>
                        
                     </ul>
                  </li>
                 
               </ul>
            </div>
            <!-- /.sidebar -->
         </aside>