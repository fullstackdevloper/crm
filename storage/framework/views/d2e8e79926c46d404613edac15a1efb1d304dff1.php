 <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full">
                <!-- Header Navigation Right -->
                <ul class="nav-header pull-right">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                                 
                            <?php if(Auth::user()->fileUpload1): ?>
                                 
									<img src="<?php echo e(URL::to(Auth::user()->fileUpload1)); ?>" width="40" alt="Avatar">
							
							<?php else: ?>
								
							<img src="<?php echo e(URL::asset('bidder_assets/img/avatars/avatar10.jpg')); ?>" alt="Avatar"  width="40"/>
							
							<?php endif; ?>
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-header">Profile</li>                                
                                <li>
                                    <a tabindex="-1" href="<?php echo e(URL::to('#')); ?>">
                                        <i class="si si-user pull-right"></i>
                                       Profile
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?php echo e(URL::to('bidder/settings')); ?>">
                                        <i class="si si-settings pull-right"></i>Settings
                                    </a>
                                </li>
                                 
                                <li>
                                    <a tabindex="-1" href="<?php echo e(URL::to('bidder/logout')); ?>">
                                        <i class="si si-logout pull-right"></i>Log out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                </ul>
                <!-- END Header Navigation Right -->

                <!-- Header Navigation Left -->
                <ul class="nav-header pull-left">
                    <li class="hidden-md hidden-lg">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </li>
                    <li class="hidden-xs hidden-sm">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                    </li>
                    <li>
                        <!-- Opens the Apps modal found at the bottom of the page, before including JS code -->
                        <button class="btn btn-default pull-right" data-toggle="modal" data-target="#apps-modal" type="button">
                            <i class="si si-grid"></i>
                        </button>
                    </li>
                     
                     
                </ul>
                <!-- END Header Navigation Left -->
            </header>
            <!-- END Header -->