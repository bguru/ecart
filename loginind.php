
<?php
        require 'config.php';
        require 'dbconfig.php';
        //isset():used to chk whether the variable is set or not
				if(isset($_POST['register']))
			{
				$name=$_POST['name'];
				$email = $_POST['email'];
				$password = $_POST['pass'];
				$c_password = $_POST['c_pass'];
				$mobile = $_POST['mob'];
				
				$sql = "INSERT INTO signup (name,email,pass,c_pass,mob) VALUES ('$name','$email','$password','$c_password','$mobile');";

				$result = mysqli_query($con, $sql);
				if ($result)
				{
					echo " Registration successful !!!"; 
				}
				else
				{
					echo " ERROR ";
				}
			}
			
			if (isset($_POST['login']))
		
			{
				$username=$_POST['lemail'];
				$password=$_POST['lpass'];
			
				$res=mysqli_query($con,"select * from signup where email='".$username."' and  pass='".$password."'");
			
				$row = mysqli_fetch_array($res);
				if(is_array($row))
				{
					echo "<br> Login successfully.";	
					header("location:login_success.php");
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
    <title>Login | E-CART</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<script type="text/javascript">
	function validateForm() 
	{
		var ck_name = /^[A-Za-z]{3,20}$/;
		var ck_password =  /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
		var ck_mobile = /^[0-9]{10}$/;
		
		var user_name = document.forms["myForm"]["name"].value;
		var email = document.forms["myForm"]["email"].value;
		var password = document.forms["myForm"]["pass"].value;
		var c_password = document.forms["myForm"]["c_pass"].value;
		var mobile = document.forms["myForm"]["mob"].value;
		if (!user_name == "")
		{
			if(!ck_name.test(user_name))
			{
				alert("Username should contain Alphabets only and limit is 3 to 20!");
				return false;
			}
			if(!email=="")
			{
				if(!password=="")
				{
					if(!ck_password.test(password))
					{
						alert(" Password should be Alphabets, digits ,!@#$%^&*()_ and size limit is 6 to 20!");
						return false;
					}
					if(!c_password=="")
					{
						if(c_password!=password)
						{
							alert(" Password and Confirm Password shoud be same!");
							return false;
						}
						if(!mobile=="")
						{
							if(!ck_mobile.test(mobile))
							{
								alert("Mobile Number should contain 10 Digits only!");
								return false;
							}
						}
						else
						{
							alert(" Mobile number must be filled out!");
							return false;
						}
					}
					else
					{
						alert(" Confirm Password must be filled out!");
						return false;
					}
				}
				else
				{
					alert(" Password must be filled out!");
					return false;
				}
			}
			else
			{
				alert("Email must be filled out!");
				return false;
			}
		}
		else
		{
			alert("Name must be filled out!");
			return false;
		}
	}
	</script>
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
<!-- php session script-->

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form  method="post">
							<input type="email" name="lemail" placeholder="Email Address" />
							<input type="password" name="lpass" placeholder="Password" />
							<button type="submit" class="btn btn-default" name="login">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
					
						<h2>New User Signup!</h2>
						<form name="myForm" onsubmit="return validateForm()" action="loginind.php" method="post">
							<input type="text" name="name" placeholder="Name"/>
							<input type="email" name="email" placeholder="Email Address"/>
							<input type="password" name="pass" placeholder="Password"/>
							<input type="password" name="c_pass" placeholder="Confirm Password"/>
							<input type="text" name="mob" placeholder="Mobile No."/>
							<button type="submit" class="btn btn-default" name="register">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

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
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
