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
		</div>	
	</div>
	<div class="loginForm row">
		<div class="col-md-9 col-xs-12 center">
		<form method="get" action="project.php">
  			<div class="form-group">
    			<label for="exampleInputEmail1" style="color: white;">Email address</label>
    			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  			</div>
  			<div class="form-group">
    			<label for="exampleInputPassword1" style="color: white;">Password</label>
    			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  			</div>
  			<div class="form-check">
    			<input type="checkbox" class="form-check-input" id="exampleCheck1">
    			<label class="form-check-label" for="exampleCheck1" style="color: white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Remember me</label>
  			</div><br/>
  			<input type="submit" value="Login" class="btn btn-primary mt-10">
		</form>
		</div>
	</div>
<br/><br/><br/>
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
</body>
</html>
