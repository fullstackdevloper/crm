<?php $__env->startSection('content'); ?> 
<section class="banner_head inner_banner">
         <div class="container">
            <div class="banner_text">
               <h1>Sign Up For a NetPEO Account</h1>
            </div>
         </div>
         </div>
         <img  class="banner_image"src="<?php echo e(URL::asset('front/img/banner_1.jpg')); ?>">
      </section>
 <section class="signup_options">
         <div class="container sign_holder">
            <h1 class="site_h">Welcome to NetPEOo NetPEO</h1>
            <p class="site_p"><b>Choose Your Application Type</b> - Choose the application type that will describe your relationship with NetPEO. The application process will require you to enter some personal and business related information. Please complete all mandatory fields in order to get your application processed as soon as possible. Brokers will have to electronically sign a Brokers Agreement before applications will be submitted to NetPEO. Providers will have to confirm a valid email address before applications will be submitted to NetPEO.</p>
            <?php echo Form::open(['url' => 'signup', 'method' => 'post' ,'id'=>'signup']); ?>

			<?php echo e(csrf_field()); ?>

			   <?php if($errors->any()): ?>
				<div class="alert alert-danger">
					<ul>
					<li>Please choose one.</li>
						<?php foreach($errors->all() as $error): ?>
							<!--<li><?php echo e($error); ?></li>-->
							
						<?php endforeach; ?>
					</ul>
				</div>
                <?php endif; ?> 
				
				
               <div class="f_group1">
			      <div id="err" style="display:none;">Please choose one.</div>
                  <span><input type="radio" value="company" name="company" id="j1"><label for="j1">Sign Up as a NetPEO Company</label></span>
                  <span><input type="radio" value="broker" name="company" id="j2"><label for="j2">Sign Up as a NetPEO Broker</label></span>
                  <span><input type="submit" id="chkformval" value="Sign me up"></span>
				    
               </div>
			  
            <?php echo Form::close(); ?>

            <p class="site_p">If you already completed the first part of the Provider Application, and you have a Confirmation Code, please <a href="#">click here</a></p>
         </div>
      </section>
	   <?php $__env->stopSection(); ?> 
	  
<?php echo $__env->make('front.signin_head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>