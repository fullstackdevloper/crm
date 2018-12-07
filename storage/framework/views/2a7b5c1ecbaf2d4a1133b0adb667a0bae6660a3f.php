<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title><?php echo e(getcong('site_name')); ?> Company<</title>      
         
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo e(URL::asset('upload/'.getcong('site_favicon'))); ?>">


        <link rel="icon" type="image/png" href="<?php echo e(URL::asset('company_assets/img/favicons/favicon-16x16.png')); ?>" sizes="16x16">
        <link rel="icon" type="image/png" href="<?php echo e(URL::asset('company_assets/img/favicons/favicon-32x32.png')); ?>" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php echo e(URL::asset('company_assets/img/favicons/favicon-96x96.png')); ?>" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php echo e(URL::asset('company_assets/img/favicons/favicon-160x160.png')); ?>" sizes="160x160">
        <link rel="icon" type="image/png" href="<?php echo e(URL::asset('company_assets/img/favicons/favicon-192x192.png')); ?>" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo e(URL::asset('company_assets/img/favicons/apple-touch-icon-57x57.png')); ?>">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo e(URL::asset('company_assets/img/favicons/apple-touch-icon-60x60.png')); ?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(URL::asset('company_assets/img/favicons/apple-touch-icon-72x72.png')); ?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(URL::asset('company_assets/img/favicons/apple-touch-icon-76x76.png')); ?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(URL::asset('company_assets/img/favicons/apple-touch-icon-114x114.png')); ?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(URL::asset('company_assets/img/favicons/apple-touch-icon-120x120.png')); ?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo e(URL::asset('company_assets/img/favicons/apple-touch-icon-144x144.png')); ?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(URL::asset('company_assets/img/favicons/apple-touch-icon-152x152.png')); ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(URL::asset('company_assets/img/favicons/apple-touch-icon-180x180.png')); ?>">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- OneUI CSS framework -->
        <link rel="stylesheet" id="css-main" href="<?php echo e(URL::asset('company_assets/css/oneui.css')); ?>">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body style="background:url(<?php echo e(URL::asset('upload/mcloud-awards.jpg')); ?>) no-repeat">
        <!-- Login Content -->
        <div class="content overflow-hidden" style="padding-top: 50px!important; ">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                    <!-- Login Block -->
                    <div class="block block-themed animated fadeIn">
                        <div class="block-header bg-primary">
                           
                            <h3 class="block-title"> Company Sign up</h3>
                        </div>
                        <div class="block-content block-content-full block-content-narrow">
                            
                            <div class="message">
                                                <!--<?php echo Html::ul($errors->all(), array('class'=>'alert alert-danger errors')); ?>-->
                                                    <?php if(count($errors) > 0): ?>
                                                <div class="alert alert-danger">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                                                    <ul>
                                                        <?php foreach($errors->all() as $error): ?>
                                                            <li><?php echo e($error); ?></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                            <?php endif; ?>
                                                    
                                                </div>
                            <!-- Login Form -->
                            <!-- jQuery Validation (.js-validation-login class is initialized in js/pages/base_pages_login.js) -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                          
                                <?php echo Form::open(array('url' => 'company/register','class'=>'js-validation-login form-horizontal push-30-t push-50','id'=>'loginform','role'=>'form')); ?>

                                <div class="form-group">
                                            <label for="email">Email</label>
                                            <input class="form-control" type="email" id="email" name="email" placeholder="Enter Email..">
                                </div>
								<div class="form-group">
                                            <label for="company_name">Company Name</label>
                                            <input class="form-control" type="text" id="company_name" name="company_name" placeholder="Enter Company Name..">
                                </div>
								<div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input class="form-control" type="text" id="first_name" name="first_name" placeholder="Enter First Name..">
                                </div>
								<div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input class="form-control" type="text" id="last_name" name="last_name" placeholder="Enter Last Name..">
                                </div>
								<div class="form-group">
                                            <label for="address">Address</label>
                                            <input class="form-control" type="text" id="address" name="address" placeholder="Enter Address..">
                                </div>
                                <div class="form-group">

                                            <label for="password">Password</label>
                                            <input class="form-control" type="password" id="login-password" name="password" placeholder="Enter Password..">
                                </div>
                                
                                <div class="form-group">
                                            <button class="btn btn-block btn-primary" type="submit"><i class="si si-login pull-right"></i> Register</button>
                                </div>

                                 
                                 
                            <?php echo Form::close(); ?> 
                            <!-- END Login Form -->
							<a class="btn btn-block" href="<?php echo e(URL::to('company')); ?>" type="button">Login</a>
                        </div>
                    </div>
                    <!-- END Login Block -->
                </div>
            </div>
        </div>
        <!-- END Login Content -->

        <!-- Login Footer -->
        <div class="push-10-t text-center animated fadeInUp">
           
        </div>
        <!-- END Login Footer -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="<?php echo e(URL::asset('company_assets/js/core/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('company_assets/js/core/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('company_assets/js/core/jquery.slimscroll.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('company_assets/js/core/jquery.scrollLock.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('company_assets/js/core/jquery.appear.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('company_assets/js/core/jquery.countTo.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('company_assets/js/core/jquery.placeholder.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('company_assets/js/core/js.cookie.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('company_assets/js/app.js')); ?>"></script>

        <!-- Page JS Plugins -->
        <script src="<?php echo e(URL::asset('company_assets/js/plugins/jquery-validation/jquery.validate.min.js')); ?>"></script>
 
         
    </body>
</html>