<?php
session_start(); 
include("functions/functions.php");
// include("action/koneksi.php"); 
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>SRI REZEKI GORDEN</title>
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
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<!---//webfonts->
		<!start-top-nav-script-->
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
					<a href="index.php"><img src="images/logo.png" title="SRI REZEKI GORDEN" /></a>
				</div>
				<div class="top-header-info">
					<div class="top-contact-info">
						<ul class="unstyled-list list-inline">
							<li><span class="phone"> </span>0822 - 2625 1635</li>
							<li><span class="mail"> </span><a href="muhammadrifkii11@gmail.com">muhammadrifkii11@gmail.com</a></li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="cart-details">
						<div class="add-to-cart">
							<ul class="unstyled-list list-inline">
								<li><span class="cart"> </span>
									<ul class="cart-sub">
										<li>
											<?php
											$val1 = 0;
												if (isset($_SESSION['produk'])) {
												foreach ($_SESSION['produk'] as $key => $val) {
											$query = mysqli_query($connect, "SELECT * FROM produk WHERE idbarang = '$key'");
											$data = mysqli_fetch_array($query);


											$val1 += $val;
											?>
            								<p>
												<?php
													echo number_format($val1);
												?>
        									</p>
											<?php
											}
											}?>
						
										</li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="login-rigister">
							<ul class="unstyled-list list-inline">
								<li><a class="rigister" href="register.php">Kontak Us <span> </span></a></li>
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
						<li><a href="aboutus.php">ABOUT US</a></li>
						<div class="clearfix"> </div>
					</ul>
					<a href="index.php" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
			  	</nav>
			  	<!--End-top-nav-->
			  	<!--<top-header-search-box->-->
			  	<div class="clearfix"> </div>
			</div>
		</div>
			<!--top-header-nav-->
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
			
			    });
			  </script>
			<!--//End-slider-script-->
			<!-- Slideshow 4 -->
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider4">
				<li>
			    	<img src="images/12.png" alt="1">
			        <div class="caption">
			        	<div class="slide-text-info">
			          		<h1>Brown Gorden</h1>
			          		<label>NEW</label>
			          		<a class="slide-btn" href="#"><span>666$</span> <small>GET NOW</small><label> </label></a>
			          	</div>
			        </div>
			    </li>
			    <li>
			    	<img src="images/5.png" alt="">
			        <div class="caption">
			        	<div class="slide-text-info">
			          		<h1>Tom Delonge</h1>
			          		<label>Blink182</label>
			          		<a class="slide-btn" href="#"><span>666$</span> <small>GET NOW</small><label> </label></a>
			          	</div>
			        </div>
			    </li>
			    <li>
			    	<img src="images/12.png" alt="">
			        <div class="caption">
			        	<div class="slide-text-info">
			          		<h1>Brown Gorden</h1>
			          		<label>New</label>
			          		<a class="slide-btn" href="#"><span>99.90$</span> <small>GET NOW</small><label> </label></a>
			          	</div>
			        </div>
			    </li>
			</ul>
		</div>

		<div class="clearfix"> </div>
		<!--- //End-slider-->

		<!--content-->
		<div class="content">
			<div class="container-fluid">
			<!---top-row-->
				<div class="top-row">
					<?php getNamaKategori(); ?>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>

		<!---top-row-->
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
							<p>Copyright &copy 2017 | <a href="http://www.srirezekigorden.com/">Muhammad Rifqi</a> by Muhammad Rifqi 
							<br>All Rights Reserved</p>
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
		</div>
		<!--container-->
	</body>
</html>