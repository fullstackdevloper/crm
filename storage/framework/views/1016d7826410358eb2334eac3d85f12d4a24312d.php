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
                                            <input class="form-control" type="text" id="address" name="address" placeholder="Enter Address Line 1">
											<input class="form-control" type="text" id="address" name="address2" placeholder="Enter Address Line 2">
                                </div>
								<div class="form-group">
                                            <label for="address">Country</label>
											<Select class="form-control" id="country" name="country">											
												<option value=""> -- Select Country-- </option>	
												<option value="USA">USA</option>
											</select>
                                </div>
								<div class="form-group">
                                            <label for="address">State </label>
											<Select class="form-control" id="state" name="state">												
												<option value=""> -- Select State-- </option>
												<option value="AL">Alabama</option>
												<option value="AK">Alaska</option>
												<option value="AZ">Arizona</option>
												<option value="AR">Arkansas</option>
												<option value="CA">California</option>
												<option value="CO">Colorado</option>
												<option value="CT">Connecticut</option>
												<option value="DE">Delaware</option>
												<option value="DC">District Of Columbia</option>
												<option value="FL">Florida</option>
												<option value="GA">Georgia</option>
												<option value="HI">Hawaii</option>
												<option value="ID">Idaho</option>
												<option value="IL">Illinois</option>
												<option value="IN">Indiana</option>
												<option value="IA">Iowa</option>
												<option value="KS">Kansas</option>
												<option value="KY">Kentucky</option>
												<option value="LA">Louisiana</option>
												<option value="ME">Maine</option>
												<option value="MD">Maryland</option>
												<option value="MA">Massachusetts</option>
												<option value="MI">Michigan</option>
												<option value="MN">Minnesota</option>
												<option value="MS">Mississippi</option>
												<option value="MO">Missouri</option>
												<option value="MT">Montana</option>
												<option value="NE">Nebraska</option>
												<option value="NV">Nevada</option>
												<option value="NH">New Hampshire</option>
												<option value="NJ">New Jersey</option>
												<option value="NM">New Mexico</option>
												<option value="NY">New York</option>
												<option value="NC">North Carolina</option>
												<option value="ND">North Dakota</option>
												<option value="OH">Ohio</option>
												<option value="OK">Oklahoma</option>
												<option value="OR">Oregon</option>
												<option value="PA">Pennsylvania</option>
												<option value="RI">Rhode Island</option>
												<option value="SC">South Carolina</option>
												<option value="SD">South Dakota</option>
												<option value="TN">Tennessee</option>
												<option value="TX">Texas</option>
												<option value="UT">Utah</option>
												<option value="VT">Vermont</option>
												<option value="VA">Virginia</option>
												<option value="WA">Washington</option>
												<option value="WV">West Virginia</option>
												<option value="WI">Wisconsin</option>
												<option value="WY">Wyoming</option>
											</select>
                                </div>
								<div class="form-group">
                                            <label for="address">City </label>
											<Select class="form-control" id="city" name="city">
												<option value=""> -- Select City-- </option>		
												<option value="city 1">City One</option>
											</select>
                                </div>
								<div class="form-group">
                                            <label for="address">Number Of Employees</label>
											 <input class="form-control" type="text" id="number_of_employee" name="number_of_employee" placeholder="Enter number of Employees..">        											
                                </div>
								<div class="form-group">
                                            <label for="address">Response Time</label>
											<Select class="form-control" id="response_time" name="response_time">
												<option value=""> -- Select-- </option>		
												<option value="1 Day">1 Day</option>
												<option value="2 Days">2 Days</option>
												<option value="3 Days">3 Days</option>
												<option value="1 Week">1 Week</option>
											</select>
                                </div>
								<div class="form-group">
                                            <label for="address">Contact Number</label> 
											<input class="form-control" type="text" id="contact_number" name="contact_number" placeholder="Enter contact number..">       											
                                </div>
								<div class="form-group">
                                            <label for="address">Website URL</label>	<input class="form-control" type="url" id="website_url" name="website_url" placeholder="website_url">      											
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