 <!-- Sidebar -->
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
                    <div class="sidingbbr sidebar-content">
                        <!-- Side Header -->
                        <div class="side-header side-content bg-white-op">
                            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                            <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times"></i>
                            </button>
                            
                            <a class="h5 text-white" href="{{ URL::to('admin/dashboard') }}">
							<img src="{{ URL::asset('upload/logo.png') }}" alt="Management" title="management" style="margin-top:6px;">
                                <!--<span class="h4 font-w600 sidebar-mini-hide">{{getcong('site_name')}}</span> -->
                            </a>
                        </div>
                        <!-- END Side Header -->
                        <!-- Side Content -->
                        <div class="side-content">
                            <ul class="nav-main">
                                <li class="hov-cl">
                                    <a class="{{classActivePath('dashboard')}}" href="{{ URL::to('admin/dashboard') }}">
                                        <span class="side-add"><i class="si si-speedometer"></i>
                                        </span>
                                        <span class="sidebar-mini-hide side-add2">Dashboard</span></a>
                                </li>
								
								
								  <li class="hov-cl">
                                    <a class="{{classActivePath('dashboard')}}" href="{{ URL::to('admin/customers') }}">
                                        <span class="side-add"><i class="fa fa-users"></i>
                                        </span>
                                        <span class="sidebar-mini-hide side-add2">Customers</span></a>
                                </li>
								  <li class="hov-cl">
                                     <a class="{{classActivePath('manage-company')}} nav-submenu" href="javascript:void(0);" data-toggle="nav-submenu" >
                                         <span class="side-add"><i class="fa fa-list-alt"></i></span>
                                         <span class="sidebar-mini-hide side-add2">Leads</span>
                                     </a>
                                     <ul class="sub-menu-de">
									  <li><a class="{{classActivePath('adduser')}}" href="{{ URL::to('admin/leads/addnew') }}" ><i class="fa fa-list-alt"></i>Add New</a></li>
										<li><a  href="{{ URL::to('admin/leads') }}" ><i class="fa fa-list-alt"></i>All  Leads</a></li>
                                       
                                         
                                         
                                     </ul>
                                 </li>
								  
								<li class="hov-cl">
                                     <a class="{{classActivePath('manage-company')}} nav-submenu" href="javascript:void(0);" data-toggle="nav-submenu" >
                                         <span class="side-add"><i class="fa fa-list"></i></span>
                                         <span class="sidebar-mini-hide side-add2">UPBM</span>
                                     </a>
                                     <ul class="sub-menu-de">
									 <li><a  href="{{ URL::to('admin/upbms/addnew') }}" ><i class="fa fa-list"></i>Add New</a></li>
										<li><a  href="{{ URL::to('admin/upbms') }}" ><i class="fa fa-list"></i>All UPBM</a></li>
                                       
                                         
                                         
                                     </ul>
                                 </li>
								
								 
								 
								
								 
								 <li class="hov-cl">
                                     <a class="{{classActivePath('manage-company')}} nav-submenu" href="javascript:void(0);" data-toggle="nav-submenu" >
                                         <span class="side-add"><i class="fa fa-gear fa-spin"></i></span>
                                         <span class="sidebar-mini-hide side-add2">Settings</span>
                                     </a>
                                     <ul class="sub-menu-de">
									
									  <li><a class="{{classActivePath('adduser')}}" href="{{ URL::to('admin/profile') }}" ><i class="fa fa-user-md"></i>Profile</a></li>
									  <li><a class="{{classActivePath('adduser')}}" href="{{ URL::to('admin/upworks') }}" ><i class="fa fa-underline"></i>Upwork</a></li>
									   <li><a class="{{classActivePath('adduser')}}" href="{{ URL::to('admin/managers') }}" ><i class="fa fa-user"></i>Manage Managers</a></li>
										<li><a  href="{{ URL::to('admin/bidders') }}" ><i class="fa fa-male"></i>Manage BDE</a></li>
										<li><a class="{{classActivePath('adduser')}}" href="{{ URL::to('admin/employees') }}" ><i class="fa fa-users"></i>All Employees</a></li>
                                       
                                         
                                          
                                     </ul>
                                 </li>
								
								<li class="hov-cl">
                                     <a class="{{classActivePath('logout')}}" href="{{ URL::to('admin/logout') }}">
                                         <span class="side-add">   <i class="fa fa-sign-out "></i></span>
                                         <span class="sidebar-mini-hide side-add2">Logout</span>
                                </a></li> 
                            </ul>
                        </div>
                        <!-- END Side Content -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->