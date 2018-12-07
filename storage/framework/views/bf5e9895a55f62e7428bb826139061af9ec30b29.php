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
                            
                            
							
							<a class="h5 text-white" href="<?php echo e(URL::to('manager/dashboard')); ?>">
							<img src="<?php echo e(URL::asset('upload/logo.png')); ?>" alt="Management" title="management" style="margin-top:6px;">
                                <!--<span class="h4 font-w600 sidebar-mini-hide"><?php echo e(getcong('site_name')); ?></span> -->
                            </a>
                        </div>
                        <!-- END Side Header -->
                        <!-- Side Content -->
                        <div class="side-content">
                            <ul class="nav-main">
                                <li class="hov-cl">
                                    <a class="<?php echo e(classActivePath('dashboard')); ?>" href="<?php echo e(URL::to('manager/dashboard')); ?>">
                                        <span class="side-add"><i class="si si-speedometer"></i>
                                        </span>
                                        <span class="sidebar-mini-hide side-add2">Dashboard</span></a>
                                </li>
								
								 
								 <li class="hov-cl">
                                    <a class="<?php echo e(classActivePath('dashboard')); ?>" href="<?php echo e(URL::to('manager/customers')); ?>">
                                        <span class="side-add"><i class="fa fa-users"></i>
                                        </span>
                                        <span class="sidebar-mini-hide side-add2">Customers</span></a>
                                </li>
								 
								 <li class="hov-cl">
                                     <a class="<?php echo e(classActivePath('manage-company')); ?> nav-submenu" href="javascript:void(0);" data-toggle="nav-submenu" >
                                         <span class="side-add"><i class="fa fa-list-alt"></i></span>
                                         <span class="sidebar-mini-hide side-add2">Leads</span>
                                     </a>
                                     <ul class="sub-menu-de">
									  <li><a class="<?php echo e(classActivePath('adduser')); ?>" href="<?php echo e(URL::to('manager/leads/addnew')); ?>" ><i class="fa fa-list-alt"></i>Add New</a></li>
										<li><a  href="<?php echo e(URL::to('manager/leads')); ?>" ><i class="fa fa-list-alt"></i>All  Leads</a></li>
                                       
                                         
                                         
                                     </ul>
                                 </li>
								 
								 
								 
								  <li class="hov-cl">
                                     <a class="<?php echo e(classActivePath('manage-company')); ?> nav-submenu" href="javascript:void(0);" data-toggle="nav-submenu" >
                                         <span class="side-add"><i class="fa fa-list"></i></span>
                                         <span class="sidebar-mini-hide side-add2">Upbm</span>
                                     </a>
                                     <ul class="sub-menu-de">
									  <li><a class="<?php echo e(classActivePath('adduser')); ?>" href="<?php echo e(URL::to('manager/upbms/addnew')); ?>" ><i class="fa fa-list"></i>Add New</a></li>
										<li><a  href="<?php echo e(URL::to('manager/upbms')); ?>" ><i class="fa fa-list"></i>All  Upbm</a></li>
                                       
                                         
                                         
                                     </ul>
                                 </li>
								
								
								 
								 <li class="hov-cl">
                                     <a class="<?php echo e(classActivePath('manage-company')); ?> nav-submenu" href="javascript:void(0);" data-toggle="nav-submenu" >
                                         <span class="side-add"><i class="fa fa-gear fa-spin"></i></span>
                                         <span class="sidebar-mini-hide side-add2">Settings</span>
                                     </a>
                                     <ul class="sub-menu-de">
									
									  <li><a class="<?php echo e(classActivePath('adduser')); ?>" href="<?php echo e(URL::to('manager/profile')); ?>" ><i class="fa fa-user-md"></i>Profile</a></li>
									  <li><a class="<?php echo e(classActivePath('adduser')); ?>" href="<?php echo e(URL::to('manager/upworks')); ?>" ><i class="fa fa-underline"></i>Upworks</a></li>
										<li><a  href="<?php echo e(URL::to('manager/bidders')); ?>" ><i class="fa fa-male"></i>Manage BDE</a></li>
                                       
                                         
                                          
                                     </ul>
                                 </li>
								 
								
								<li class="hov-cl">
                                     <a class="<?php echo e(classActivePath('logout')); ?>" href="<?php echo e(URL::to('manager/logout')); ?>">
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