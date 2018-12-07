<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title> Management</title>
      <!-- Bootstrap -->
      <link href="{{ URL::asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ URL::asset('front/css/custom.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
   </head>
   <body>
     
     
	  @yield("content")
	  <footer>
         <p class="copyr">©Management 2018 - All rights reserved</p>
      </footer>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="assets/js/bootstrap.min.js"></script>
   </body>
</html>