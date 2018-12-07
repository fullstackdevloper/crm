 <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full">
                <!-- Header Navigation Right -->
                <ul class="nav-header pull-right">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                                 
                            @if(Auth::user()->fileUpload1)
                                 
									<img src="{{URL::to(Auth::user()->fileUpload1)}}" width="40" alt="Avatar">
							
							@else
								
							<img src="{{ URL::asset('manager_assets/img/avatars/avatar10.jpg') }}" alt="Avatar"  width="40"/>
							
							@endif
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-header">Profile</li>                                
                                <li>
                                    <a tabindex="-1" href="{{ URL::to('manager/profile') }}">
                                        <i class="si si-user pull-right"></i>
                                       Profile
                                    </a>
                                </li>
                               
                                 
                                <li>
                                    <a tabindex="-1" href="{{ URL::to('manager/logout') }}">
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
                   
                     
                     
                </ul>
                <!-- END Header Navigation Left -->
            </header>
            <!-- END Header -->