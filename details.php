<?php
session_start(); 
include("functions/functions.php"); 
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title></title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		 <!-- start-smoth-scrolling-->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <!-- start-smoth-scrolling-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!--webfonts->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<!-//webfonts->
		<!-start-top-nav-script-->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!--//End-top-nav-script-->
	</head>
<body>
<!--container-->
<div class="container">
	<!--top-header-->
		<div class="top-header">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" title="barndlogo" /></a>
			</div>
			<div class="top-header-info">
				<div class="top-contact-info">
					<ul class="unstyled-list list-inline">
						<li><span class="phone"> </span>0822 2625 1635</li>
						<li><span class="mail"> </span><a href="#">muhammadrifkii11@gmail.com</a></li>
						<div class="clearfix"> </div>
					</ul>
				</div>
				<div class="cart-details">
					<div class="add-to-cart">
						<ul class="cart-sub">
						</ul>
					</div>
					<div class="login-rigister">
						<ul class="unstyled-list list-inline">
							<li><a class="rigister" href="#">REGISTER <span> </span></a></li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="shopping_cart">
				<span style="float:right; font-size:16px; width: 55%; padding-top: 5px;">
					Selamat Datang</br><b style="color:red;"> Keranjang Belanja - </b> Total Belanjaan: <?php total_items(); ?> Total Harga: <?php total_price(); ?>
					<a href="cart.php" style="color: red;"> Lihat Keranjang</a>
				</span>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!--//top-header-->
		<!---top-header-nav-->
		<div class="top-header-nav"> 
		<!--start-top-nav-->
			<nav class="top-nav main-menu">
				<ul class="top-nav">
					<li><a href="index.php">HOME </a><span> </span></li>
					<li><a href="products.php">ABOUT US</a></li>
					<div class="clearfix"> </div>
				</ul>
				<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
			</nav>
			<!--End-top-nav-->
			<!---top-header-search-box-->
			<div class="top-header-search-box">
			  	<form>
			  		<input type="text" placeholder="Search" required / maxlength="22">
			  		<input type="submit" value=" " >
			  	</form>
			</div>
			<!---top-header-search-box-->
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//top-header-nav-->
	<!--start-slider-script-->
	<script src="js/responsiveslides.min.js"></script>
	<script>
	    // You can also use "$(window).load(function() {"
	    $(function () {
		    // Slideshow 4
	    	$("#slider4").responsiveSlides({
	    		auto: true,
			    pager: true,
			    nav: true,
			    speed: 500,
			    namespace: "callbacks",
			    before: function () {
			    	$('.events').append("<li>before event fired.</li>");
			    },
			    after: function () {
			        $('.events').append("<li>after event fired.</li>");
			    }
			});
	    })1;
	</script>
	<!--End-top-nav-->
	<!---top-row-->
	<div class="container">				
	<!--speical-products-->
		<div class="special-products">
			<div class="s-products-head">
				<div class="">
                    <span><h3>Detail Produk</h3></span></br>
				</div>
				<?php cart(); ?>
				<div class=''>
					<?php getDetails(); ?>
        		</div>

				<!--<div class='container'>
					<div class='row'>
						<div class='col-lg-6'>
							<div class='card-block text-justify'>
								<img src='admin_area/product_images/gambarbrgs/$pro_brg' title='product-name' class='img-responsive' style='width: 100%; height:100%;'/>
							</div>
						</div>
						<div class='col-lg-6'>
							<div class='card-block text-justify'>
								<h4 class='h4-responsive'>$pro_title</h4>
								<a href='details.php?pro_id=$pro_id '>Details</a>
								<a class='product-btn' href='index.php?pro_id=$pro_id '><h4><span><small>Rp. $money</small></span><small>GET NOW</small></h4></a>
							</div>
						</div>
					</div>
				</div>-->

				<div class="clearfix"> </div>
			</div>
		</div>
		<!---//speical-products-->
	</div>
				
	<!--content-->
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 footer-logo">
			</div>
			<div class="col-md-7 footer-links">
				<ul class="unstyled-list list-inline">
					<li><a href="#"> Faq</a> <span> </span></li>
					<li><a href="#"> Terms and Conditions</a> <span> </span></li>
					<li><a href="#"> Secure Payments</a> <span> </span></li>
					<li><a href="#"> Shipping</a> <span> </span></li>
					<li><a href="contact.php"> Contact</a> </li>
					<div class="clearfix"> </div>
				</ul>
			</div>
			<div class="col-md-2 footer-social">
				<ul class="unstyled-list list-inline">
					<li><a class="pin" href="#"><span> </span></a></li>
					<li><a class="twitter" href="#"><span> </span></a></li>
					<li><a class="facebook" href="#"><span> </span></a></li>
					<div class="clearfix"> </div>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	 </div>
	 <div class="clearfix"> </div>
	<!---//footer-->
	<!---copy-right-->
	<div class="copy-right">
		<div class="container">
			<p>Copyright &copy 2016 | <a href="http://www.srirezekigorden.com/">Muhammad Rifqi</a> by Muhammad Rifqi<br>All Rights Reserved</p>
			<script type="text/javascript">
				$(document).ready(function() {
				/*
				var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
				};
				*/
										
				$().UItoTop({ easingType: 'easeOutQuart' });
								
				});
			</script>
			<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		</div>
	</div>
	<!--//copy-right-->
<!--container-->
</body>
</html>