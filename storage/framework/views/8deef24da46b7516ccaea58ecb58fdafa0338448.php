<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $__env->yieldContent('head_title', getcong('site_name')); ?></title>
        <meta name="description" content="<?php echo $__env->yieldContent('head_description', getcong('site_description')); ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?php echo $__env->yieldContent('head_title',  getcong('site_name')); ?>" />
        <meta property="og:description" content="<?php echo $__env->yieldContent('head_description', getcong('site_description')); ?>" />
        <meta property="og:keywords" content="<?php echo $__env->yieldContent('head_keywords', getcong('site_description')); ?>" />
        <meta property="og:image" content="<?php echo $__env->yieldContent('head_image', url('/upload/logo.png')); ?>" />
        <meta property="og:url" content="<?php echo $__env->yieldContent('head_url', url('/')); ?>" />
        <!-- Web fonts -->
        <link rel="shortcut icon" href="<?php echo e(URL::asset('upload/'.getcong('site_favicon'))); ?>">
		 <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        
        <link href="<?php echo e(URL::asset('site_assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(URL::asset('site_assets/css/animate.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(URL::asset('site_assets/css/font-awesome.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(URL::asset('site_assets/css/daterangepicker.css')); ?>" rel="stylesheet" type="text/css" media="all">
		<link href="<?php echo e(URL::asset('site_assets/css/style.css')); ?>" rel="stylesheet"> 
    </head>
    <body>
	
        <?php echo $__env->make("includes.header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent("content"); ?>
        <?php echo $__env->make("includes.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
        <!-------- Scripts ---------->
       
        <script src="<?php echo e(URL::asset('site_assets/js/jquery.1.11.1.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('site_assets/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('site_assets/js/moment.js')); ?>" type="text/javascript" charset="utf-8"></script>            
        <script src="<?php echo e(URL::asset('site_assets/js/daterangepicker.js')); ?>"></script> 
        <script src="<?php echo e(URL::asset('site_assets/js/custom.js')); ?>"></script>

	</body>
        
</html>
    