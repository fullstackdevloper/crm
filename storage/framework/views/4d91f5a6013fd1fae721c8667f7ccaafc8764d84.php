<?php $__env->startSection('content'); ?>
<section class="banner_head">
         <div class="container">
            <div class="banner_text">
               <h1>Welcome to School Management School Management</h1>
               <p>We match your needs with the services offered by our providers to find the best HR Solution for your company.</p>
               <div class="view_more">
                  <a href="#">View more</a>
               </div>
            </div>
         </div>
         <img  class="banner_image"src="<?php echo e(URL::asset('front/img/banner_1.jpg')); ?>">
      </section>
 <section class="content_holder">
         <div class="container">
            <div class="col-md-8 main_sec">
               <h1 class="site_h">Welcome to School Management School Management</h1>
               <p class="site_p">School Management is a comprehensive Professional Employer Outsourcing & HR Outsourcing Industry Consulting, Training anad Brokerage firm based in Atlanta, GA.
                  <br>
                  <br>
                  We match your needs with the services offered by our providers to find the best HR Solution for your company.
                  </br>
                  </br>
                  School Management Advisory & Brokerage Services will help you to handle the complexity and costs of employment administration. To edit one of your existing RFPs, simply click on the RFP number. 
               </p>
               <div class="infographic">
                  <figure>
                   <!--  <img src="<?php echo e(URL::asset('front/img/infog.jpg')); ?>" class="img-responsive"> -->
                  </figure>
               </div>
            </div>
            <div class="col-md-3 col-md-offset-1 side_bar">
               <ul class=" widgeter important_links">
                  <li><a href="<?php echo e(URL::to('#')); ?>">Apply today</a></li>
                  <li><a href="#">Change your passowrd</a></li>
                  <li><a href="#">Go to School Management website</a></li>
                  <li><a href="#">Log a support ticket</a></li>
                  <li><a href="#">Frequently asked questions</a></li>
               </ul>
               <section class="widgeter login_form">
                  <h1>Login form</h1>
                                <?php echo Form::open(array('url' => 'login','id'=>'loginform','role'=>'form')); ?>

                     <input type="text" placeholder="Email" name="email">	
                     <input type="password" placeholder="password" name="password">
                     <div class="conrols">
                        <div class="f_group"><input type="checkbox" >Remember</div>
                        <div class="f_group text-right"><input type="submit" value="submit"></div>
                     </div>
                <?php echo Form::close(); ?> 
               </section>
            </div>
         </div>
      </section>
      

 <?php $__env->stopSection(); ?>       
<?php echo $__env->make('front.front_head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>