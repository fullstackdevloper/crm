<?php $__env->startSection('content'); ?>

 <section class="content_holder">
         <div class="container">
            <div class="col-md-8 main_sec">
               <h1 class="site_h">Welcome to NetPEOo NetPEO</h1>
               <p class="site_p">NetPEO is a comprehensive Professional Employer Outsourcing & HR Outsourcing Industry Consulting, Training anad Brokerage firm based in Atlanta, GA.
                  <br>
                  <br>
                  We match your needs with the services offered by our providers to find the best HR Solution for your company.
                  </br>
                  </br>
                  NetPEO Advisory & Brokerage Services will help you to handle the complexity and costs of employment administration. To edit one of your existing RFPs, simply click on the RFP number. 
               </p>
               <div class="infographic">
                  <figure>
                     <img src="<?php echo e(URL::asset('front/img/infog.jpg')); ?>" class="img-responsive">
                  </figure>
               </div>
            </div>
            <div class="col-md-3 col-md-offset-1 side_bar">
               <ul class=" widgeter important_links">
                  <li><a href="signin.html">Apply today</a></li>
                  <li><a href="#">Change your passowrd</a></li>
                  <li><a href="#">Go to netpeo website</a></li>
                  <li><a href="#">Log a support ticket</a></li>
                  <li><a href="#">Frequently asked questions</a></li>
               </ul>
               <section class="widgeter login_form">
                  <h1>Login form</h1>
                  <form>
                     <input type="text" placeholder="Name">	
                     <input type="password" placeholder="password">
                     <div class="conrols">
                        <div class="f_group"><input type="checkbox" >Remember</div>
                        <div class="f_group text-right"><input type="submit" value="submit"></div>
                     </div>
                  </form>
               </section>
            </div>
         </div>
      </section>
      <footer>
         <p class="copyr">©NetPEO 2013 - All rights reserved | design iwebtechnology.org</p>
      </footer>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="assets/js/bootstrap.min.js"></script>
   </body>
</html>




 <?php $__env->stopSection(); ?>       
<?php echo $__env->make('front.front_head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>