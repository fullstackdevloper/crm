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
					<h3>Edit Lead</h3>
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
		<?php echo Form::model($leadData, array('url' => 'admin/updateLeadData','class'=>'js-validation-login form-horizontal push-30-t push-50','id'=>'loginform','role'=>'form')); ?>

			
			
			<div class="form-group">
					<strong>What type of services are you interested in? (Select any one)</strong><br />
					<?php echo e(Form::label('service_type', 'PEO (Professional Employer Organization)')); ?>

					
					<?php if($leadData['service_type'] == 'PEO'): ?>
						<?php echo e(Form::radio('service_type', 'PEO' ,['checked' => 'checked'])); ?><br />
					<?php else: ?>
						<?php echo e(Form::radio('service_type', 'PEO' ,'false')); ?><br />
					<?php endif; ?>		
					
					<?php echo e(Form::label('service_type', 'HR Outsourcing')); ?>

					
					<?php if($leadData['service_type'] == 'HR'): ?>
						<?php echo e(Form::radio('service_type', 'HR' ,['checked' => 'checked'])); ?><br />
					<?php else: ?>
						<?php echo e(Form::radio('service_type', 'HR' ,'false')); ?><br />
					<?php endif; ?>
					
		</div>
		 <div class="form-group">	 
					<?php echo e(Form::label('total_employee', ' Number Of Employees')); ?>				<?php echo e(Form::select('total_employee',$numbersOfEmployees, $leadData['total_employee'], ['class' => 'form-control', 'required' => 'required'])); ?>

		</div>   
		
		<div class="form-group">
				<strong>What is the main reason for your interest in services?</strong><br />
				
				<?php if(in_array(1, $leadData['reason'])): ?>	
				<?php echo e(Form::checkbox('reason[]',1, true)); ?>

				<?php else: ?>
				<?php echo e(Form::checkbox('reason[]',1, false)); ?>

				<?php endif; ?>
				<?php echo e(Form::label('reason', 'Workers Compensation Coverage')); ?>	<br />
				
				<?php if(in_array(2, $leadData['reason'])): ?>
					<?php echo e(Form::checkbox('reason[]',2, true)); ?>

				<?php else: ?>
					<?php echo e(Form::checkbox('reason[]',2, false)); ?>

				<?php endif; ?>
				<?php echo e(Form::label('reason', ' Payroll/Technology')); ?>	<br />
				
				<?php if(in_array(3, $leadData['reason'])): ?>
					<?php echo e(Form::checkbox('reason[]',3, true)); ?>

				<?php else: ?>
					<?php echo e(Form::checkbox('reason[]',3, false)); ?>

				<?php endif; ?>			
				<?php echo e(Form::label('reason', ' Multi-state')); ?>	<br />
				
				<?php if(in_array(4, $leadData['reason'])): ?>
					<?php echo e(Form::checkbox('reason[]',4, true)); ?>

				<?php else: ?>
					<?php echo e(Form::checkbox('reason[]',4, false)); ?>

				<?php endif; ?>				
				<?php echo e(Form::label('reason', 'Currently with a Peo and Shopping')); ?>	<br />
				
				<?php if(in_array(5, $leadData['reason'])): ?>
					<?php echo e(Form::checkbox('reason[]',5, true)); ?>

				<?php else: ?>
					<?php echo e(Form::checkbox('reason[]',5, false)); ?>

				<?php endif; ?>
				<?php echo e(Form::label('reason', 'HR/Compliance')); ?>	<br />
				
				<?php if(in_array(6, $leadData['reason'])): ?>
					<?php echo e(Form::checkbox('reason[]',6, true)); ?>

				<?php else: ?>
					<?php echo e(Form::checkbox('reason[]',6, false)); ?>

				<?php endif; ?>
				<?php echo e(Form::label('reason', 'Time and Attendance')); ?>	<br />	
				
				<?php if(in_array(7, $leadData['reason'])): ?>
					<?php echo e(Form::checkbox('reason[]',7, true)); ?>

				<?php else: ?>
					<?php echo e(Form::checkbox('reason[]',7, false)); ?>

				<?php endif; ?>
				<?php echo e(Form::label('reason', ' Other')); ?>	<br />
					
		</div>
		<div class="form-group">
					<strong>When do you expect to make a decision?</strong><br />
					<?php echo e(Form::label('expected_decision_time', 'ASAP')); ?>

					<?php if($leadData['expected_decision_time'] == 'ASAP'): ?>
						<?php echo e(Form::radio('expected_decision_time', 'ASAP' , true)); ?><br />
					<?php else: ?>
						<?php echo e(Form::radio('expected_decision_time', 'ASAP' ,false)); ?><br />
					<?php endif; ?>
					
					<?php echo e(Form::label('expected_decision_time', 'In one month')); ?>

					<?php if($leadData['expected_decision_time'] == 'In one month'): ?>
						<?php echo e(Form::radio('expected_decision_time', 'In one month', true)); ?><br />
					<?php else: ?>
						<?php echo e(Form::radio('expected_decision_time', 'In one month', false)); ?><br />
					<?php endif; ?>
					
					<?php echo e(Form::label('expected_decision_time', 'In two months or more')); ?>

					<?php if($leadData['expected_decision_time'] == 'In two months or more'): ?>
						<?php echo e(Form::radio('expected_decision_time', 'In two months or more', true)); ?><br />
					<?php else: ?>
						<?php echo e(Form::radio('expected_decision_time', 'In two months or more', false)); ?><br />
					<?php endif; ?>
					
		</div>
		<div class="form-group">
				<strong>What additional benefits (if any) would you like to provide through the PEO?</strong><br />
				<?php if(in_array('Group medical/ dental/ vision insurance', $leadData['additional_benfefits'])): ?>
					<?php echo e(Form::checkbox('additional_benfefits[]','Group medical/ dental/ vision insurance', true)); ?>

				<?php else: ?>
					<?php echo e(Form::checkbox('additional_benfefits[]','Group medical/ dental/ vision insurance', false)); ?>

				<?php endif; ?>
				
				<?php echo e(Form::label('additional_benfefits', 'Group medical/ dental/ vision insurance')); ?>	<br />
				
				<?php if(in_array('Group life insurance', $leadData['additional_benfefits'])): ?>
					<?php echo e(Form::checkbox('additional_benfefits[]','Group life insurance', true)); ?>

				<?php else: ?>
					<?php echo e(Form::checkbox('additional_benfefits[]','Group life insurance', false)); ?>

				<?php endif; ?>			
				<?php echo e(Form::label('additional_benfefits', 'Group life insurance')); ?>	<br />
				<?php if(in_array('Short and long-term disability', $leadData['additional_benfefits'])): ?>
					<?php echo e(Form::checkbox('additional_benfefits[]','Short and long-term disability', true)); ?>

				<?php else: ?>
					<?php echo e(Form::checkbox('additional_benfefits[]','Short and long-term disability', false)); ?>

				<?php endif; ?>
				<?php echo e(Form::label('additional_benfefits', 'Short and long-term disability')); ?>	<br />
				
				<?php if(in_array('Flexible Spending Account (FSA) or Health Savings Account (HSA)', $leadData['additional_benfefits'])): ?>
					<?php echo e(Form::checkbox('additional_benfefits[]','Flexible Spending Account (FSA) or Health Savings Account (HSA)', true)); ?>

				<?php else: ?>
					<?php echo e(Form::checkbox('additional_benfefits[]','Flexible Spending Account (FSA) or Health Savings Account (HSA)', false)); ?>

				<?php endif; ?>
				
				<?php echo e(Form::label('additional_benfefits', 'Flexible Spending Account (FSA) or Health Savings Account (HSA)')); ?>	<br />
				
				<?php if(in_array('401(k) programs', $leadData['additional_benfefits'])): ?>
					<?php echo e(Form::checkbox('additional_benfefits[]','401(k) programs', true)); ?>

				<?php else: ?>
					<?php echo e(Form::checkbox('additional_benfefits[]','401(k) programs', false)); ?>

				<?php endif; ?>
				<?php echo e(Form::label('additional_benfefits', '401(k) programs')); ?>	<br />
				
				<?php if(in_array('Currently not offering Benefits but interested', $leadData['additional_benfefits'])): ?>
					<?php echo e(Form::checkbox('additional_benfefits[]','Currently not offering Benefits but interested', true)); ?>

				<?php else: ?>
					<?php echo e(Form::checkbox('additional_benfefits[]','Currently not offering Benefits but interested', false)); ?>

				<?php endif; ?>
				<?php echo e(Form::label('additional_benfefits', 'Currently not offering Benefits but interested')); ?>	<br />	
				
				<?php if(in_array('Do not wish to offer Benefits', $leadData['additional_benfefits'])): ?>
					<?php echo e(Form::checkbox('additional_benfefits[]','Do not wish to offer Benefits', true)); ?>

				<?php else: ?>
					<?php echo e(Form::checkbox('additional_benfefits[]','Do not wish to offer Benefits', false)); ?>

				<?php endif; ?>
				<?php echo e(Form::label('additional_benfefits', 'Do not wish to offer Benefits')); ?>	<br />
				
				
					
		</div>
		
		<div class="form-group">	 
				<?php echo e(Form::label('first_name', 'First Name')); ?>				
				<?php echo e(Form::text('first_name',$leadData['first_name'],['class' => 'form-control', 'required' => 'required'])); ?>

		</div>
		
		<div class="form-group">	 
				<?php echo e(Form::label('last_name', 'Last Name')); ?>			
				<?php echo e(Form::text('last_name',$leadData['last_name'],['class' => 'form-control', 'required' => 'required'])); ?>

		</div>
		
		<div class="form-group">	 
				<?php echo e(Form::label('email', 'Email')); ?>

				<?php echo e(Form::email('email', $leadData['email_address'],['class' => 'form-control', 'required' => 'required'])); ?>

			</div>
		
		<div class="form-group">	 
				<?php echo e(Form::label('company_name', 'Company Name')); ?>			
				<?php echo e(Form::text('company_name',$leadData['company_name'],['class' => 'form-control', 'required' => 'required'])); ?>

		</div>
		
		<div class="form-group">	 
				<?php echo e(Form::label('phone_number', 'Phone Number')); ?>			
				<?php echo e(Form::text('phone_number',$leadData['phone_number'],['class' => 'form-control', 'required' => 'required'])); ?>

		</div>
		
		<div class="form-group">
				<strong>Preferred method of contact?</strong><br />
				<?php if(in_array('Phone', $leadData['preferred_method_contact'])): ?>
					<?php echo e(Form::checkbox('preferred_method_contact[]','Phone', true)); ?>

				<?php else: ?>
					<?php echo e(Form::checkbox('preferred_method_contact[]','Phone', false)); ?>

				<?php endif; ?>
				<?php echo e(Form::label('preferred_method_contact', 'Phone')); ?>	<br />
				
				<?php if(in_array('Email', $leadData['preferred_method_contact'])): ?>
					<?php echo e(Form::checkbox('preferred_method_contact[]','Email', true)); ?>

				<?php else: ?>
					<?php echo e(Form::checkbox('preferred_method_contact[]','Email', false)); ?>

				<?php endif; ?>
				
				<?php echo e(Form::label('preferred_method_contact', 'Email')); ?>	<br />
					
		</div>
		
		<div class="form-group">
				   <?php echo e(Form::label('job_title', 'Job Title :')); ?>				
				   <?php echo e(Form::select('job_title',$jobTittle, $leadData['job_title'], ['class' => 'form-control', 'required' => 'required'])); ?>

		</div>
		
		<div class="form-group">
				   <?php echo e(Form::label('work_indstry', 'Industry you work in:')); ?>				
				   <?php echo e(Form::select('work_indstry',$workIN, $leadData['work_indstry'], ['class' => 'form-control', 'required' => 'required'])); ?>

		</div>
		
		<div class="form-group">
				   <?php echo e(Form::label('country', 'Country')); ?>				
				   <?php echo e(Form::select('country', $country, $leadData['country'], ['class' => 'form-control', 'required' => 'required'])); ?>

		</div>
		<div class="form-group">
				   <?php echo e(Form::label('state', 'State')); ?>		
					<?php echo e(Form::select('state', $state, $leadData['state'], ['class' => 'form-control', 'required' => 'required'])); ?>

		</div>
		<div class="form-group">
				   <?php echo e(Form::label('city', 'City')); ?>		
					<?php echo e(Form::select('city', $city,$leadData['city'], ['class' => 'form-control', 'required' => 'required'])); ?>

		</div>
		<div class="form-group">
			<?php echo e(Form::label('status', 'status Time')); ?>				
			<?php echo e(Form::select('status',$status, $leadData['status'], ['class' => 'form-control'])); ?>

			<?php echo e(Form::hidden('id',$leadData['id'])); ?>

		</div>

			<div class="form-group">
				<button class="btn btn-block btn-primary" type="submit"><i class="si si-login pull-right"></i> Update</button>
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