<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>School Management</title>
      <!-- Bootstrap -->
      <link href="<?php echo e(URL::asset('front/css/bootstrap.min.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(URL::asset('front/css/custom.css')); ?>" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <nav class="navbar navbar-default">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               <span class="user_img"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
               </span>
               </button>
               <a class="navbar-brand" href="<?php echo e(URL::to('/')); ?>"><img src="<?php echo e(URL::asset('#')); ?>" alt="School Management" title="School Management"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
               <ul class="nav navbar-nav navbar-right">
                  <li class="user_details"><span class="user_img"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                     </span><span class="u_details">schoolmanagement.com RFP Web Application V3.01<br>
                     User : NotLoggedIn:*Unknown* / Invalid </span>
                  </li>
               </ul>
            </div>
            <!--/.nav-collapse -->
         </div>
      </nav>
     
	  <?php echo $__env->yieldContent("content"); ?>
	  <footer>
         <p class="copyr">©School Management 2018 - All rights reserved</p>
      </footer>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="assets/js/bootstrap.min.js"></script>
   </body>
</html>