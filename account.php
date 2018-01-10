
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Account | E-CART</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">   
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +91 9898989898 </a></li>
								<li><a href=""><i class="fa fa-envelope"></i> ecart@ymail.com </a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index1.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="index1.php"><i class="fa fa-star"></i> Home</a></li>
								<li><a href="account.php"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="contact-us.php"><i class="fa fa-user"></i> Contact-us</a></li>
								<li><a href="loginind.php"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	</header><!--/header-->
	 
	 <div id="contact-page" class="container">
	 	<div class="breadcrumbs">
			<ol class="breadcrumb">
				  <li><a href="index1.php">Home</a></li>
				  <li class="active">Account</li>
			</ol>
		</div><!--/breadcrums-->
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center"><strong>Account</strong></h2>    			    				    				
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-6">
	    			<div class="contact-info">
	    				<br><h2 class="title text-center">For User details</h2>
						<div class="form-one">
								<form method="post">    			   		
										<input name="userid" type="text" placeholder="Enter Userid">
										<input type="submit" name="submit" class="btn btn-primary pull-right" value="Get Details"><br>
								</form><br>
						</div>	
						<div class="col-sm-8">
							<?php
									require 'config.php';
									require 'dbconfig.php';
									//isset():used to chk whether the variable is set or not
									if (isset($_POST['submit']))
									{
										
										$user_id = $_POST['userid']; 
										$sql = "select* from cust_info where userid = '".$user_id."'";
										$result=mysqli_query($con, $sql);
										if($result)
										{
												// output data of each row
											while($row = $result->fetch_assoc()) 
											{
												echo "<table border='5' cellpadding='10' cellspacing='15' readonly>
														<tr>
															<td>Username : </td><td>".$row["username"]."</td>
														</tr>
														<tr>
															<td>Email-ID : </td><td>".$row["email"]."</td>
														</tr>
														<tr>
															<td>First Name : </td><td>".$row["fname"]."</td>
														</tr>
														<tr>
															<td>Middle Name : </td><td>".$row["mname"]."</td>
														</tr>
														<tr>
															<td>Last Name : </td><td>".$row["lname"]."</td>
														</tr>
														<tr>
															<td>Address : </td><td>".$row["address"]."</td>
														</tr>
														<tr>
															<td>Zip code : </td><td>".$row["zip_code"]."</td>
														</tr>
														<tr>
															<td>Mobile No. : </td><td>".$row["mob"]."</td>
														</tr>";
											}
											echo "</table>";
										}
										else
										{
											echo " <br> No data in database present";
										}										
									}
								
							?>
						</div>
					</div>
				</div>    			
	
				<div class="col-sm-6">
					<br><h2 class="title text-center">To Delete account</h2>
						<div class="form-one">
								<form method="post">    			   					    				    				
										<input name="userid" type="text" placeholder="Enter Userid">
										<input type="submit" name="sub" class="btn btn-primary pull-right" value="Delete"><br>
								</form><br>
						</div>	
				<div class="col-sm-8">		
					<?php
						require 'config.php';
						require 'dbconfig.php';
						//isset():used to chk whether the variable is set or not
						if (isset($_POST['sub']))
						{
							$user_id1 = $_POST['userid']; 
							$sql = "delete from cust_info where userid = '".$user_id1."'";
							$result=mysqli_query($con, $sql);
							if($result)
								{
									echo "<br>";
									echo " Data deleted successfully";
								}
							else
								{
									echo "<br>";
									echo " Fail";
								}
						}
				
					?>
				</div>
				</div>
			</div>
		</div>
	
		<br><br><br>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<div class="companyinfo">
							<h2><span>e</span>-CART</h2>
							<p>E-CART is an E-commerce site in which we sell mobile phones at much cheaper price.</p>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>Shop 10,Lane 8,Koregaon Park,Pune,Maharashtra</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2015 E-CART Inc. All rights reserved.</p>
				</div>
			</div>
		</div>

	</footer><!--/Footer-->
  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>