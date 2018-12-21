	<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{getcong('site_name')}} Manager</title>      
		
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
		
        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{ URL::asset('upload/'.getcong('site_favicon')) }}">
		
        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
		
		<!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="{{ URL::asset('manager_assets/js/plugins/slick/slick.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('manager_assets/js/plugins/slick/slick-theme.min.css') }}">
		
        <link rel="stylesheet" href="{{ URL::asset('manager_assets/js/plugins/datatables/jquery.dataTables.min.css') }}">
		
        <link rel="stylesheet" href="{{ URL::asset('manager_assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css') }}">       
        <link rel="stylesheet" href="{{ URL::asset('manager_assets/js/plugins/select2/select2.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('manager_assets/js/plugins/select2/select2-bootstrap.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('manager_assets/js/plugins/dropzonejs/dropzone.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('manager_assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}">
		
        <link rel="stylesheet" href="{{ URL::asset('manager_assets/js/plugins/summernote/summernote.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('manager_assets/js/plugins/summernote/summernote-bs3.min.css') }}">
		
		
        <!-- OneUI CSS framework -->
        <link rel="stylesheet" id="css-main" href="{{ URL::asset('manager_assets/css/oneui.css') }}">
		<link rel="stylesheet" id="css-ulternate" href="{{ URL::asset('front/css/style.css') }}">
        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
	</head>
    <body>
		
     	<div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
            
            <!-- Sidebar -->
            @include("manager.sidebar")
            <!-- END Sidebar -->
			
            <!-- Header -->
			@include("manager.topbar")
            <!-- END Header -->
			
            <!-- Main Container -->
            <main id="main-container" >
				
				@yield("content")
				
			</main>
            <!-- END Main Container -->
			
            <!-- Footer -->
            <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
                <div class="pull-right">
					
				</div>
                <div class="pull-left">
                    &copy; <span class="">2018 Glocify Technologies - All rights reserved</span>.
				</div>
			</footer>
            <!-- END Footer -->
		</div>
        <!-- END Page Container -->
		
        <script src="{{ URL::asset('manager_assets/js/core/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('manager_assets/js/core/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('manager_assets/js/core/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ URL::asset('manager_assets/js/core/jquery.scrollLock.min.js') }}"></script>
        <script src="{{ URL::asset('manager_assets/js/core/jquery.appear.min.js') }}"></script>
        <script src="{{ URL::asset('manager_assets/js/core/jquery.countTo.min.js') }}"></script>
        <script src="{{ URL::asset('manager_assets/js/core/jquery.placeholder.min.js') }}"></script>
        <script src="{{ URL::asset('manager_assets/js/core/js.cookie.min.js') }}"></script>
        <script src="{{ URL::asset('manager_assets/js/app.js') }}"></script>
		
        @if(classActivePath('dashboard'))<!-- Page Plugins -->
        <script src="{{ URL::asset('manager_assets/js/plugins/slick/slick.min.js') }}"></script>
        <script src="{{ URL::asset('manager_assets/js/plugins/chartjs/Chart.min.js') }}"></script>
		
		
        @endif
        <!-- Page JS Code -->
        @if(classActivePath('dashboard'))
		<script src="{{ URL::asset('manager_assets/js/pages/base_pages_dashboard.js') }}"></script>
        @endif
		
        
        <script src="{{ URL::asset('manager_assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('manager_assets/js/pages/base_tables_datatables.js') }}"></script>
        
		
        <script src="{{ URL::asset('manager_assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>  
        <script src="{{ URL::asset('manager_assets/js/plugins/select2/select2.full.min.js') }}"></script>
        <script src="{{ URL::asset('manager_assets/js/plugins/masked-inputs/jquery.maskedinput.min.js') }}"></script>
        <script src="{{ URL::asset('manager_assets/js/plugins/dropzonejs/dropzone.min.js') }}"></script>
        <script src="{{ URL::asset('manager_assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
		<script src="{{ URL::asset('manager_assets/js/plugins/summernote/summernote.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

		
   
	</body>
</html>