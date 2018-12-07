<?php $__env->startSection("content"); ?>

 <!-- Page Header -->
                <div class="content bg-image" style="background-image: url('<?php echo e(URL::asset('admin_assets/img/photos/bg.jpg')); ?>');">
                    <div class="push-50-t push-15 clearfix">
                        <div class="push-15-r pull-left animated fadeIn">
                            
                            <?php if(Auth::user()->fileUpload1): ?>
                                 
                                    <img src="<?php echo e(URL::to(Auth::user()->fileUpload1)); ?>" alt="Avatar" class="img-avatar img-avatar-thumb">
                            
                            <?php else: ?>
                                
                            <img src="<?php echo e(URL::asset('admin_assets/img/avatars/avatar10.jpg')); ?>" alt="Avatar"  class="img-avatar img-avatar-thumb"/>
                            
                            <?php endif; ?>
                        </div>
                        <h1 class="h2 text-white push-5-t animated zoomIn"><?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?></h1>
                        <h2 class="h5 text-white-op animated zoomIn"><?php echo e(Auth::user()->usertype); ?></h2>
                    </div>
                </div>
                <!-- END Page Header -->

                

                <!-- Page Content -->
                <div class="content content-boxed">
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">

                             <!-- Block Tabs Alternative Style -->
                            <div class="block">
                                <div class="block-content tab-content">
 

                                    <div class="col-lg-8 tab-pane active" id="btabs-alt-static-profile">

                                        <?php if(count($errors) > 0): ?>
                                        <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <ul>
                                                <?php foreach($errors->all() as $error): ?>
                                                    <li><?php echo e($error); ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>
                                 <?php if(Session::has('flash_message')): ?>
                                        <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <?php echo e(Session::get('flash_message')); ?>

                                        </div>
                                    <?php endif; ?>
	<div class="row" >
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
                                           <?php echo e(Form::label('country', 'Country')); ?>				<?php echo e(Form::select('country',$country, null, ['class' => 'form-control'])); ?>

                                </div>
								<div class="form-group">
                                           <?php echo e(Form::label('state', 'State')); ?>		
				<?php echo e(Form::select('state',$state, null, ['class' => 'form-control'])); ?>

                                </div>
								<div class="form-group">
                                           <?php echo e(Form::label('city', 'City')); ?>		
				<?php echo e(Form::select('city',$city,null, ['class' => 'form-control'])); ?>

                                </div>
								<div class="form-group">
                                            <div class="form-group">	 
												<?php echo e(Form::label('number_of_employee', ' Number Of Employees')); ?>				<?php echo e(Form::select('number_of_employee',$numbersOfEmployees, null, ['class' => 'form-control'])); ?>

											</div>        											
                                </div>
								<div class="form-group">
                                           <?php echo e(Form::label('response_time', 'Response Time')); ?>				<?php echo e(Form::select('response_time',$responseTime, null, ['class' => 'form-control'])); ?>

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
							</div>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- END Block Tabs Alternative Style -->
                        </div>
                        
                    </div>
                </div>
                <!-- END Page Content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>