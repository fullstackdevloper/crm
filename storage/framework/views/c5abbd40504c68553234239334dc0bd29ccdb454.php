	<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
		
        <title><?php echo e(getcong('site_name')); ?> Parents</title>      
		
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
		
        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo e(URL::asset('upload/'.getcong('site_favicon'))); ?>">
		
		
        <link rel="icon" type="image/png" href="<?php echo e(URL::asset('parents_assets/img/favicons/favicon-16x16.png')); ?>" sizes="16x16">
        <link rel="icon" type="image/png" href="<?php echo e(URL::asset('parents_assets/img/favicons/favicon-32x32.png')); ?>" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php echo e(URL::asset('parents_assets/img/favicons/favicon-96x96.png')); ?>" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php echo e(URL::asset('parents_assets/img/favicons/favicon-160x160.png')); ?>" sizes="160x160">
        <link rel="icon" type="image/png" href="<?php echo e(URL::asset('parents_assets/img/favicons/favicon-192x192.png')); ?>" sizes="192x192">
		
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo e(URL::asset('parents_assets/img/favicons/apple-touch-icon-57x57.png')); ?>">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo e(URL::asset('parents_assets/img/favicons/apple-touch-icon-60x60.png')); ?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(URL::asset('parents_assets/img/favicons/apple-touch-icon-72x72.png')); ?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(URL::asset('parents_assets/img/favicons/apple-touch-icon-76x76.png')); ?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(URL::asset('parents_assets/img/favicons/apple-touch-icon-114x114.png')); ?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(URL::asset('parents_assets/img/favicons/apple-touch-icon-120x120.png')); ?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo e(URL::asset('parents_assets/img/favicons/apple-touch-icon-144x144.png')); ?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(URL::asset('parents_assets/img/favicons/apple-touch-icon-152x152.png')); ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(URL::asset('parents_assets/img/favicons/apple-touch-icon-180x180.png')); ?>">
        <!-- END Icons -->
		
        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
		
		<!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="<?php echo e(URL::asset('parents_assets/js/plugins/slick/slick.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::asset('parents_assets/js/plugins/slick/slick-theme.min.css')); ?>">
		
        <link rel="stylesheet" href="<?php echo e(URL::asset('parents_assets/js/plugins/datatables/jquery.dataTables.min.css')); ?>">
		
        <link rel="stylesheet" href="<?php echo e(URL::asset('parents_assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css')); ?>">       
        <link rel="stylesheet" href="<?php echo e(URL::asset('parents_assets/js/plugins/select2/select2.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::asset('parents_assets/js/plugins/select2/select2-bootstrap.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::asset('parents_assets/js/plugins/dropzonejs/dropzone.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::asset('parents_assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css')); ?>">
		
        <link rel="stylesheet" href="<?php echo e(URL::asset('parents_assets/js/plugins/summernote/summernote.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::asset('parents_assets/js/plugins/summernote/summernote-bs3.min.css')); ?>">
		
		
        <!-- OneUI CSS framework -->
        <link rel="stylesheet" id="css-main" href="<?php echo e(URL::asset('parents_assets/css/oneui.css')); ?>">
		
        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
	</head>
    <body>
		
     	<div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
            
            <!-- Sidebar -->
            <?php echo $__env->make("parents.sidebar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- END Sidebar -->
			
            <!-- Header -->
			<?php echo $__env->make("parents.topbar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- END Header -->
			
            <!-- Main Container -->
            <main id="main-container" >
				
				<?php echo $__env->yieldContent("content"); ?>
				
			</main>
            <!-- END Main Container -->
			
            <!-- Footer -->
            <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
                <div class="pull-right">
					
				</div>
                <div class="pull-left">
                    <a class="font-w600" href="javascript:void(0)" target="_blank"><?php echo e(getcong('site_name')); ?></a> &copy; <span class="js-year-copy"></span>. All rights are reserved
				</div>
			</footer>
            <!-- END Footer -->
		</div>
        <!-- END Page Container -->
		
        <!-- Apps Modal -->
        <!-- Opens from the button in the header -->
        <div class="modal fade" id="apps-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-sm modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <!-- Apps Block -->
                    <div class="block block-themed block-transparent">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
								</li>
							</ul>
                            <h3 class="block-title">Apps</h3>
						</div>
                        <div class="block-content">
                            <div class="row text-center">
                                <div class="col-xs-6">
                                    <a class="block block-rounded" href="<?php echo e(URL::to('parents/dashboard')); ?>">
                                        <div class="block-content text-white bg-default">
                                            <i class="si si-speedometer fa-2x"></i>
                                            <div class="font-w600 push-15-t push-15">Backend</div>
										</div>
									</a>
								</div>
                                <div class="col-xs-6">
                                    <a class="block block-rounded" href="<?php echo e(URL::to('/')); ?>" target="_blank">
                                        <div class="block-content text-white bg-modern">
                                            <i class="si si-rocket fa-2x"></i>
                                            <div class="font-w600 push-15-t push-15">Frontend</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
                    <!-- END Apps Block -->
				</div>
			</div>			<?php echo e(csrf_field()); ?>

		</div>
        <!-- END Apps Modal -->
		
        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="<?php echo e(URL::asset('parents_assets/js/core/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('parents_assets/js/core/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('parents_assets/js/core/jquery.slimscroll.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('parents_assets/js/core/jquery.scrollLock.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('parents_assets/js/core/jquery.appear.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('parents_assets/js/core/jquery.countTo.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('parents_assets/js/core/jquery.placeholder.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('parents_assets/js/core/js.cookie.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('parents_assets/js/app.js')); ?>"></script>
		
        <?php if(classActivePath('dashboard')): ?><!-- Page Plugins -->
        <script src="<?php echo e(URL::asset('parents_assets/js/plugins/slick/slick.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('parents_assets/js/plugins/chartjs/Chart.min.js')); ?>"></script>
		
		
        <?php endif; ?>
        <!-- Page JS Code -->
        <?php if(classActivePath('dashboard')): ?>
		<script src="<?php echo e(URL::asset('parents_assets/js/pages/base_pages_dashboard.js')); ?>"></script>
        <?php endif; ?>
		
        
        <script src="<?php echo e(URL::asset('parents_assets/js/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('parents_assets/js/pages/base_tables_datatables.js')); ?>"></script>
        
		
        <script src="<?php echo e(URL::asset('parents_assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>  
        <script src="<?php echo e(URL::asset('parents_assets/js/plugins/select2/select2.full.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('parents_assets/js/plugins/masked-inputs/jquery.maskedinput.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('parents_assets/js/plugins/dropzonejs/dropzone.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('parents_assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('parents_assets/js/plugins/summernote/summernote.min.js')); ?>"></script>
		
        <script>
            $(function () {
                // Init page helpers (BS Datepicker + BS Colorpicker + Select2 + Masked Input + Tags Inputs plugins)
                App.initHelpers(['summernote','datepicker', 'select2', 'masked-inputs', 'tags-inputs']);
			});
		</script>
		
        <script>			var _token = $('input[name="_token"]').val();
            $(function () {
                // Init page helpers (Slick Slider plugin)
                App.initHelpers('slick');
			});
            function copyToClipboard(element) {
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val($(element).text()).select();
                document.execCommand("copy");
                $temp.remove();
			}			 			
			function getAssignLeadCom(leadID){				
				$.ajax({					
						url: "<?php echo e(url('/admin/GetCompamyForLeadAssign')); ?>",					
						type:'POST',					
						data: { _token : _token,						
						leadID: leadID					
					},											
				success: function (resp) {						
						$('#loadingImage').hide();						
						$('#str_rat_html').html(resp);	
						$('#loadingImage').show();	
					}				
				});
			}
			
			function saveAssignedLead(){
					var leadID = $('#lead_id').val();
					var chkArray = [];
					$(".company_check_list:checked").each(function() {
						chkArray.push($(this).val());
					});
				
				$.ajax({					
						url: "<?php echo e(url('/admin/SaveAssignedLead')); ?>",					
						type:'POST',					
						data: { _token : _token,						
						leadID: leadID,
						chkedArr: JSON.stringify(chkArray),
					},											
				success: function (resp) {
						location.reload(true);
						console.log(resp);
						//$('#loadingImage').hide();						
						//$('#str_rat_html').html(resp);	
						//$('#loadingImage').show();	
					}				
				});
			}
			
			$(function () {
				$('#example').DataTable({
					"pageLength": 5
				});				
			});
		</script>
	</body>
</html>