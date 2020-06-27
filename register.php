<?php 
include "header.php"
?>
<!DOCTYPE html>
<html>

<head>
<link href="css/formstyle.css" rel='stylesheet' type='text/css' />
<style>
body
{
	background:url(images/backdrop.jpg);
}
</style>
</head>
<body >
<!--banner-->


<h1>CREATE ACCOUNT</h1>
	<!-- main -->
	<div class="main">
		<!--login-profile-->
		
		<!--login-profile-->
		<!--signin-form-->
		<div class="w3">
			<div class="signin-form profile">
				<h3>Login</h3>
				
				<div class="login-form">
					<form action="checklogin.php" method="post" name="login">
						<input type="text" name="email" placeholder="E-mail" required>
						<input type="password" name="password" placeholder="Password" required>
						<div class="tp">
							<input type="submit" value="LOGIN NOW">
						</div>
					</form>
				</div>
				<div class="header-social wthree">
							<a href="#" class="face"><h5>Facebook</h5></a>
							<a href="#" class="goog"><h5>Google+</h5></a>
							<div class="clear"></div>
						</div>
				<p><a href="#"> Dont have an account?</a></p>
			</div>
		</div>
		<div class="agile">
			<div class="signin-form profile">




<?php
	include "connection.php";
	if(isset($_POST['Register']))
	{

	$qry="insert into signup(name,email,username,password)values('".$_POST['name']."','".$_POST['email']."','".$_POST['username']."','".$_POST['password']."')";

	mysql_query($qry);
	
	echo 	'<script >
		alert("Thanks for Registration");
		window location="home.html";

	</script>';
	}
?>





				<h3>Register</h3>
				
				<div class="login-form">
					<form action="" method="post" name="reg">
                    	<input type="text" name="name" placeholder="Name" required>
						<input type="text" name="email" placeholder="E-mail" required>
						<input type="text" name="username" placeholder="Username" required >
						<input type="password" name="password" placeholder="Password" required >
						<input type="submit" value="Register" name="Register">
					</form>
				</div>
				<p><a href="#"> By clicking register, I agree to your terms</a></p>
			</div>
		</div>
		<div class="clear"></div>
		<!--//signin-form-->	
	</div>
										 
			


</body>
</html>

