<?php
        require 'config.php';
        require 'dbconfig.php';
			if (isset($_POST['login']))
		
			{
				$username=$_POST['lemail'];
				$password=$_POST['lpass'];
			
				$res=mysqli_query($con,"select * from signup where email='".$username."' and  pass='".$password."'");
			
				$row = mysqli_fetch_array($res);
				if(is_array($row))
				{
					echo "<br> Login successfully.";
					header("location:checkout1.html");
					exit();					
				}
				else
				{
					echo "<br> Invalid username or password";
				}
			}
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-CART</title>
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

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index1.php">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>

			<div class="register-req">
				<p>Proceed if You Already Have an Account or else <a href = "loginind.php">  Register  </a></p>
			</div><!--/register-req-->
			<div class="step-one">
				<h2 class="heading">Step 1 Enter Delivery Details</h2>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/home/product2.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Sony C3</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>Rs.10560</p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">Rs.10560</p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="row">
			<div class="row">
					<div class="col-sm-8 ">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
							<form id="main-contact-form" class="contact-form row" onsubmit="return validateForm()" name="contact-form" method="post" action="cart.php">
								<div class="form-group col-md-6">
									<input type="text" name="userid" class="form-control" required="required" placeholder="UserID">
								</div>
								<div class="form-group col-md-6">
									<input type="text" name="username" class="form-control" required="required" placeholder="Username">
								</div>
								<div class="form-group col-md-6">
									<input type="email" name="email" class="form-control" required="required" placeholder="Email">
								</div>
								<div class="form-group col-md-6">
									<input type="text" name="fname" class="form-control" required="required" placeholder="First Name">
								</div>
								<div class="form-group col-md-6">
									<input type="text" name="mname" class="form-control" required="required" placeholder="Middle Name">
								</div>
								<div class="form-group col-md-6">
									<input type="text" name="lname" class="form-control" required="required" placeholder="Last Name">
								</div>
								<div class="form-group col-md-6">
									<textarea name="address" type="text" required="required" class="form-control" rows="8" placeholder="Your Address Here"></textarea>
								</div>                        
								<div class="form-group col-md-6">
									<input type="int" name="mob" class="form-control" maxlength="10" required="required" placeholder="Mobile No.">
								</div>
								<div class="form-group col-md-6">
									<input type="int" name="zip" class="form-control" maxlength="6" required="required" placeholder="Zip/Postal Code">
								</div>
								<div class="form-group col-md-6">
									<input type="submit" name="sub" class="btn btn-primary pull-right" value="Submit">
								</div>
							</form>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="total_area">
							<ul>
								<li>Cart Sub Total <span>Rs.10,560</span></li>
								<li>Eco Tax <span>Rs.100</span></li>
								<li>Shipping Cost <span>Free</span></li>
								<li>Total <span>Rs.10,660</span></li>
						</div>
					</div>
			</div>
			<div class="step-one">
				<h2 class="heading">Step 2 Login Verification</h2>
			</div>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Enter Login Details</h2>
						<form  method="post">
							<input type="email" name="lemail" placeholder="Email Address" />
							<input type="password" name="lpass" placeholder="Password" />
							<button type="submit" class="btn btn-default" name="login">Proceed</button>
						</form>
					</div><!--/login form-->
				</div>
			</div><br><br>
			</div>
		</div>
	</section><!--/#do_action-->
	
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
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>


<?php
        require 'config.php';
        require 'dbconfig.php';

				if(isset($_POST['sub']))
				{
						$user_id=$_POST['userid'];
						$name=$_POST['username'];
						$email = $_POST['email'];
						$fname=$_POST['fname'];
						$mname=$_POST['mname'];
						$lname=$_POST['lname'];
						$address=$_POST['address'];	
						$mobile = $_POST['mob'];						
						$zip_code = $_POST['zip'];
						
						
						$sql = "INSERT INTO cust_info (userid,username,email,fname,mname,lname,address,mob,zip_code) VALUES ('$user_id','$name','$email','$fname','$mname','$lname','$address','$mobile','$zip_code');";

						$result = mysqli_query($con, $sql);
						if ($result)
						{
							echo " Data entered successfully !!!"; 
						}
						else
						{
							echo " ERROR ";
						}
				}
 ?>

