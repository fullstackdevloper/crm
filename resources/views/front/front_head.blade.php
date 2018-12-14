<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title> Management</title>
      <!-- Bootstrap -->
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link href="{{ URL::asset('front/css/custom.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
   </head>
   <body>
     
     
	  @yield("content")
	<footer id="footer">	
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<span class="management"> ©Management 2018 - All rights reserved</span>
				</div>
			</div>
		</div>
    </footer> 
      <script src="{{ URL::asset('front/js/bootstrap.min.js') }}"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  

   </body>
</html>