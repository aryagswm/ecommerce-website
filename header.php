<!DOCTYPE html>
<html>
<head>
<title> Udaipur Bikers</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bike-shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
<!--webfont-->
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/scripts.js" type="text/javascript"></script>
<!--js-->
<!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
<!---- start-smoth-scrolling---->

<style>
.background
{
	background-image:url(images/back.jpg)
}
</style>
</head>
<body>
<!--banner-->
<script src="js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
	<div class="background">
	  <div class="container">
			 <div class="header">
			       <div class="logo"><a href="index.php"><a href="index.php"><img src="images/logo.png" alt="" width="258" height="49"/></a></div>							 
				  <div class="top-nav">										 
						<label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<input id="mobile_menu" type="checkbox">
					   <ul class="nav">
						  <li class="dropdown1"><a href="product.php">HOME</a>
							  <ul class="dropdown2">
									<li><a href="index.php">Start Renting !! </a></li>
																					
							  </ul>
						  </li>
						  <li class="dropdown1"><a href="index.php">About Us</a>
                          <ul class="dropdown2">
									<li><a href="gallery.php">Gallery</a></li>
                          </ul>
							
						 </li>      
						 <li class="dropdown1"><a href="contact.php">CONACT US</a>
							 
						 </li>               
						 <li class="dropdown1"><a href="register.php">Register</a>
							 <ul class="dropdown2">
									<li><a href="register.php">Login</a></li>
									<li><a href="register.php">Sign Up</a></li>
									
							  </ul>
						 </li>
                         
						  <a class="shop" href="cart.php"><img src="images/cart.png" alt="" width="16"/></a>
			          </ul>
				 </div>
				 <div class="clearfix"></div>
			 </div>
	  </div>	 
 </div>     
	 