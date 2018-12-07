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
						<h3>Add New Lead</h3>
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
		<?php echo Form::open(array('url' => 'admin/leadRegister','class'=>'js-validation-login form-horizontal push-30-t push-50','id'=>'leadform','role'=>'form')); ?>

		
		
		<div class="form-group">
					<strong>What type of services are you interested in? (Select any one)</strong><br />
					<?php echo e(Form::label('service_type', 'PEO (Professional Employer Organization)')); ?>

					<?php echo e(Form::radio('service_type', 'PEO' ,'false')); ?><br />
					<?php echo e(Form::label('service_type', 'HR Outsourcing')); ?>

					<?php echo e(Form::radio('service_type', 'HR', 'false')); ?>

		</div>
		 <div class="form-group">	 
					<?php echo e(Form::label('total_employee', ' Number Of Employees')); ?>				<?php echo e(Form::select('total_employee',$numbersOfEmployees, null, ['class' => 'form-control', 'required' => 'required'])); ?>

		</div>   
		
		<div class="form-group">
				<strong>What is the main reason for your interest in services?</strong><br />
				<?php echo e(Form::checkbox('reason[]',1, false)); ?>

				<?php echo e(Form::label('reason', 'Workers Compensation Coverage')); ?>	<br />
				
				<?php echo e(Form::checkbox('reason[]',2, false)); ?>

				<?php echo e(Form::label('reason', 'Payroll/Technology')); ?>	<br />
				
				<?php echo e(Form::checkbox('reason[]',3, false)); ?>

				<?php echo e(Form::label('reason', 'Multi-state')); ?>	<br />
				
				<?php echo e(Form::checkbox('reason[]',4, false)); ?>

				<?php echo e(Form::label('reason', 'Currently with a Peo and Shopping')); ?>	<br />
				
				<?php echo e(Form::checkbox('reason[]',5, false)); ?>

				<?php echo e(Form::label('reason', 'HR/Compliance')); ?>	<br />
				
				<?php echo e(Form::checkbox('reason[]',6, false)); ?>

				<?php echo e(Form::label('reason', 'Time and Attendance')); ?>	<br />	
				
				<?php echo e(Form::checkbox('reason[]',7, false)); ?>

				<?php echo e(Form::label('reason', ' Other')); ?>	<br />
					
		</div>
		<div class="form-group">
					<strong>When do you expect to make a decision?</strong><br />
					<?php echo e(Form::label('expected_decision_time', 'ASAP')); ?>

					<?php echo e(Form::radio('expected_decision_time', 'ASAP' ,'false')); ?><br />
					<?php echo e(Form::label('expected_decision_time', 'In one month')); ?>

					<?php echo e(Form::radio('expected_decision_time', 'In one month', 'false')); ?><br />
					<?php echo e(Form::label('expected_decision_time', 'In two months or more')); ?>

					<?php echo e(Form::radio('expected_decision_time', 'In two months or more', 'false')); ?><br />
		</div>
		<div class="form-group">
				<strong>What additional benefits (if any) would you like to provide through the PEO?</strong><br />
				<?php echo e(Form::checkbox('additional_benfefits[]','Group medical/ dental/ vision insurance', false)); ?>

				<?php echo e(Form::label('additional_benfefits', 'Group medical/ dental/ vision insurance')); ?>	<br />
				
				<?php echo e(Form::checkbox('additional_benfefits[]','Group life insurance', false)); ?>

				<?php echo e(Form::label('additional_benfefits', 'Group life insurance')); ?>	<br />
				
				<?php echo e(Form::checkbox('additional_benfefits[]','Short and long-term disability', false)); ?>

				<?php echo e(Form::label('additional_benfefits', 'Short and long-term disability')); ?>	<br />
				
				<?php echo e(Form::checkbox('additional_benfefits[]','Flexible Spending Account (FSA) or Health Savings Account (HSA)', false)); ?>

				<?php echo e(Form::label('additional_benfefits', 'Flexible Spending Account (FSA) or Health Savings Account (HSA)')); ?>	<br />
				
				<?php echo e(Form::checkbox('additional_benfefits[]','401(k) programs', false)); ?>

				<?php echo e(Form::label('additional_benfefits', '401(k) programs')); ?>	<br />
				
				<?php echo e(Form::checkbox('additional_benfefits[]','Currently not offering Benefits but interested', false)); ?>

				<?php echo e(Form::label('additional_benfefits', 'Currently not offering Benefits but interested')); ?>	<br />	
				
				<?php echo e(Form::checkbox('additional_benfefits[]','Do not wish to offer Benefits', false)); ?>

				<?php echo e(Form::label('additional_benfefits', 'Do not wish to offer Benefits')); ?>	<br />
					
		</div>
		
		<div class="form-group">	 
				<?php echo e(Form::label('first_name', 'First Name')); ?>				
				<?php echo e(Form::text('first_name','',['class' => 'form-control', 'required' => 'required'])); ?>

		</div>
		
		<div class="form-group">	 
				<?php echo e(Form::label('last_name', 'Last Name')); ?>			
				<?php echo e(Form::text('last_name','',['class' => 'form-control', 'required' => 'required'])); ?>

		</div>
		
		<div class="form-group">	 
				<?php echo e(Form::label('email', 'Email')); ?>

				<?php echo e(Form::email('email', '',['class' => 'form-control', 'required' => 'required'])); ?>

			</div>
		
		<div class="form-group">	 
				<?php echo e(Form::label('company_name', 'Company Name')); ?>			
				<?php echo e(Form::text('company_name','',['class' => 'form-control', 'required' => 'required'])); ?>

		</div>
		
		<div class="form-group">	 
				<?php echo e(Form::label('phone_number', 'Phone Number')); ?>			
				<?php echo e(Form::text('phone_number','',['class' => 'form-control', 'required' => 'required'])); ?>

		</div>
		
		<div class="form-group">
				<strong>Preferred method of contact?</strong><br />
				<?php echo e(Form::checkbox('preferred_method_contact[]','Phone', false)); ?>

				<?php echo e(Form::label('preferred_method_contact', 'Phone')); ?>	<br />
				
				<?php echo e(Form::checkbox('preferred_method_contact[]','Email', false)); ?>

				<?php echo e(Form::label('preferred_method_contact', 'Email')); ?>	<br />
					
		</div>
		
		<div class="form-group">
				   <?php echo e(Form::label('job_title', 'Job Title :')); ?>				
				   <?php echo e(Form::select('job_title',$jobTittle, null, ['class' => 'form-control', 'required' => 'required'])); ?>

		</div>
		
		<div class="form-group">
				   <?php echo e(Form::label('work_indstry', 'Industry you work in:')); ?>				
				   <?php echo e(Form::select('work_indstry',$workIN, null, ['class' => 'form-control', 'required' => 'required'])); ?>

		</div>
		
		<div class="form-group">
				   <?php echo e(Form::label('country', 'Country')); ?>				
				   <?php echo e(Form::select('country',$country, null, ['class' => 'form-control', 'required' => 'required'])); ?>

		</div>
		<div class="form-group">
				   <?php echo e(Form::label('state', 'State')); ?>		
					<?php echo e(Form::select('state',$state, null, ['class' => 'form-control', 'required' => 'required'])); ?>

		</div>
		<div class="form-group">
				   <?php echo e(Form::label('city', 'City')); ?>		
					<?php echo e(Form::select('city',$city,null, ['class' => 'form-control', 'required' => 'required'])); ?>

		</div>
		
		
		<div class="form-group">
					<button class="btn btn-block btn-primary" type="submit"><i class="si si-login pull-right"></i> Submit</button>
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