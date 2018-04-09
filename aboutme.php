<!DOCTYPE html>
<html lang="en">
<head>
	<title>www.malavtreasurerblog.com</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width; initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="icon" type="image/x-icon" href="logo.ico">
</head>
<body style="background-color: #454040">
	<div class="container-fluid mb-5">
		<div class="row">
			<div class="col-sm-4">
				<img src="logo.jpg" alt="logo" height="100px" width="150px" class="pt-10">
			</div>
			<div class="col-sm-4">
				<h1 class="text-uppercase text-center"><strong>Malav Treasurer Blog</strong></h1>
			</div>
			<div class="col-sm-4 text-right">
				<a href="login.php" target="_blank" class="btn btn-success">Login</a>
				<a href="signup.php" target="_blank" class="btn btn-danger">Sign up</a>
			</div>
		</div>	
	</div>
	<div class="container-fluid">
  		<div class="row content">
    		<div class="col-sm-3 sidenav">
      			<ul class="nav nav-pills flex-column">
        			<li class="nav-item"><a class="nav-link" href="project.php">Home</a></li>
        			<li class="nav-item"><a class="nav-link active" href="aboutme.php">About Me</a></li>
        			<li class="nav-item"><a class="nav-link" href="contactme.php">Contact Me</a></li>
        			<li class="nav-item"><a class="nav-link" href="resume.php">Resume</a></li>
        			<li class="nav-item"><a class="nav-link" href="https://www.youtube.com/channel/UCtKymBnoOXHq7JSAlKG82Sw" target="_blank">My YouTube Channel</a>
      			</ul><br/>
      			<div class="input-group">
        			<input type="text" class="form-control" placeholder="Search Blog..">
        			<span class="input-group-btn">
          				<button class="btn btn-default" type="button">
            				<span class="glyphicon glyphicon-search"></span>
          				</button>
        			</span>
      			</div>
    		</div>
    	<div class="col-sm-9 background"><br/><br/>
    		<div id="myCarousel" class="carousel slide" data-ride="carousel">
 				 <!-- Indicators -->
 				 <ol class="carousel-indicators">
   					 <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
   					 <li data-target="#myCarousel" data-slide-to="1"></li>
 				 </ol>

 				 <!-- Wrapper for slides -->
 				 <div class="carousel-inner">
  					 <div class="item active">
     					<img src="pi.png" alt="Personal Information">
   					 </div>

   					 <div class="item">
     					<img src="ei.png" alt="Educatinal Information">
    				</div>
 				 </div>

  			<!-- Left and right controls -->
 			 	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
   					<span class="glyphicon glyphicon-chevron-left"></span>
    				<span class="sr-only">Previous</span>
		 	 	</a>
  				<a class="right carousel-control" href="#myCarousel" data-slide="next">
    				<span class="glyphicon glyphicon-chevron-right"></span>
    				<span class="sr-only">Next</span>
  				</a>
			</div>
   		</div>
    </div>
</div>
	<footer>
		<p>All rights reserved &copy; 2018<br/>
		<?php
			$http_client_ip = getenv('HTTP_CLIENT_IP');  //$http_client_ip = $_SERVER['HTTP_CLIENT_IP']
			$http_x_forwarded_for = getenv('HTTP_X_FORWARDED_FOR'); //same as above
			$remote_addr = getenv('REMOTE_ADDR');

			if(!empty($http_client_ip))
			{
				$ip_address = $http_client_ip;
				echo "You are not using proxy.";
			}
			else if(!empty($http_x_forwarded_for))
			{
				$ip_address = $http_x_forwarded_for;
				echo "You are using proxy.";
			}
			else
			{
				$ip_address = $remote_addr;
				echo "You are not using proxy";
			}

			echo "<br/>Your ip address is:" . $ip_address;
		?>			
		</p>
	</footer>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>  

