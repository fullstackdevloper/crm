<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Netpeo</title>
      <!-- Bootstrap -->
      <link href="<?php echo e(URL::asset('front/css/bootstrap.min.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(URL::asset('front/css/custom.css')); ?>" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
   </head>
   <body>
      <nav class="navbar navbar-default">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               <span class="user_img"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
               </span>
               </button>
               <a class="navbar-brand" href="<?php echo e(URL::to('/')); ?>"><img src="<?php echo e(URL::asset('front/img/logo.png')); ?>" alt="NetPeo" title="netpeo"></a> 
            </div>
            <div id="navbar" class="navbar-collapse collapse">
               <ul class="nav navbar-nav navbar-right">
                  <li class="user_details"><span class="user_img"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                     </span><span class="u_details">NetPEO.com RFP Web Application V3.01<br>
                     User : NotLoggedIn:*Unknown* / Invalid </span>
                  </li>
               </ul>
            </div>
            <!--/.nav-collapse -->
         </div>
      </nav>
      
	  <?php echo $__env->yieldContent("content"); ?>
	   <footer>
         <p class="copyr">©NetPEO 2013 - All rights reserved | design iwebtechnology.org</p>
      </footer>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="assets/js/bootstrap.min.js"></script>
	  
	  <script>
	  $(document).ready(function(){
		  $("#chkformval").click(function(){
			    if($('input[name="company"]:checked', '#signup').val()!==undefined){
					return true;
					}
					else{
					  $("#err").css("display","block");
					  $("#err").css("color","red");
					  $("#err").css("text-align","centre");
					  
					  return false;
					}
		  });
	  });
	  </script>
   </body>
</html>