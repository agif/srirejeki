<?php
include "action/koneksi.php";
    if (!isset($_SESSION)) {
        session_start();
    } 

$query = "SELECT * FROM produk" where katego;
$sql = mysqli_query($connect, $query);
$row = mysqli_num_rows($sql);


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
   		 <!---- start-smoth-scrolling---->
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
		 <!---- start-smoth-scrolling---->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
		<!----start-top-nav-script---->
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
		<!----//End-top-nav-script---->
	</head>
	<body>
		<!----container---->
		<div class="container">
			<!----top-header---->
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
										<li><p>0 Products</p></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="login-rigister">
							<ul class="unstyled-list list-inline">
								<li><a class="rigister" href="#">Kontak Us <span> </span></a></li>
								<div class="clearfix"> </div>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<!----//top-header---->
			<!---top-header-nav---->
			<div class="top-header-nav"> 
			<!----start-top-nav---->
			 <nav class="top-nav main-menu">
					<ul class="top-nav">
						<li><a href="index.php">HOME </a><span> </span></li>
						<li><a href="aboutus.php">ABOUT US</a></li>
						<div class="clearfix"> </div>
					</ul>
					<a href="index.php" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
			  </nav>
			  <!----End-top-nav---->
			  <!---top-header-search-box--->
			  <div class="top-header-search-box">
			  	<form>
			  		<input type="text" placeholder="Search" required / maxlength="22">
			  		<input type="submit" value=" " >
			  	</form>
			  </div>
			  <!---top-header-search-box--->
						<div class="clearfix"> </div>
			</div>
		</div>
			<!--//top-header-nav---->
			<!----content---->
				<div class="content">
					<div class="container">
				<!--- products ---->
				<div>
				<div class="products">
					<br><div class="product-filter">
							<div class="col-md-6 product-filter-grid1-brands-col2">
									<div class="producst-cate-grids">
										<div class="col-md-4 producst-cate-grid text-center">
											<h2>GORDEN</h2>
											<img class="r-img text-center img-responsive" src="images/1.jpg" width="1000" title="GORDEN">>
											<a href="viewallgorden.php"><span><img src="images/1.png" title="GORDEN"></span></a>
											<h4>TOTAL</h4>
											<label>8 PRODUCTS</label>
											<a class="r-list-w" href="viewallgorden.php"><img src="images/list-icon.png" title="list"></a>
										</div>
										<div class="col-md-4 producst-cate-grid text-center">
											<h2>BANTAL</h2>
											<img class="r-img text-center img-responsive" src="images/4.jpg" title="BANTAL">
											<a href="viewallbantal.php"><span><img src="images/4.png" title="BANTAL"></span></a>
											<h4>TOTAL</h4>
											<label>8 PRODUCTS</label>
											<a class="r-list-w" href="viewallbantal.php"><img src="images/list-icon.png" title="list"></a>
										</div>
										<div class="col-md-4 producst-cate-grid text-center">
											<h2>SPRAI</h2>
											<img class="r-img text-center img-responsive" src="images/6.jpg" title="SPRAI">
											<a href="viewallsprai.php"><span><img src="images/6.png" title="SPRAI"></span></a>
											<h4>TOTAL</h4>
											<label>8 PRODUCTS</label>
											<a class="r-list-w" href="viewallsprai.php"><img src="images/list-icon.png" title="list"></a>
										</div>
									</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
				<!-- //products ---->
				<!----speical-products---->
				<div class="special-products all-poroducts">
					<div class="s-products-head">
						<div class="s-products-head-left">
							<h3>NEW <span>ARRIVAL</span></h3>
						</div>
						<div class="s-products-head-right">
							<a href="#"><span> </span>view all products</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<!----special-products-grids---->
					<div class="special-products-grids">
					<?php if($row>0){
							while($data = mysqli_fetch_array($sql)){ ?>
							<div class="col-md-3 special-products-grid text-center"><a href="single-page.php?id=<?php echo $data['idbarang'];?>">
					<h4><?php echo "<img src='images/".$data['gambarbrg']."'class='img-responsive'>";?></h4>
					<h4><a href="single-page.php"><?php echo $data['namabarang'];?></a></h4>
					<a class="product-btn" href="single-page.php?id=<?php echo $data['idbarang'];?>">
					<span>Rp.<?php echo number_format($data ['harga'],0,",",".");?></span><small>GET NOW</small><label> </label></a>
					</div>
					<?php
						}
						}
						?>
						<div class="clearfix"> </div>
					</div>
					<!---//special-products-grids---->
				</div>
				<!----->
				<div class="special-products all-poroducts latest-products">
					<div class="s-products-head">
						<div class="s-products-head-left">
							<h3>LATEST <span>PRODUCTS</span></h3>
						</div>
						<div class="s-products-head-right">
							<a href="#"><span> </span>view all products</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<!----special-products-grids---->
					<div class="special-products-grids">
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="single-page.php"><img src="images/b1.jpg" title="name" /></a>
							<a class="product-here" href="single-page.php"><img src="images/p1.jpg" title="product-name" /></a>
							<h4><a href="#">Nike Roshe Run</a></h4>
							<a class="product-btn" href="single-page.php"><span>109.90$</span><small>GET NOW</small><label> </label></a>
						</div>
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="single-page.php"><img src="images/b2.jpg" title="name" /></a>
							<a class="product-here" href="single-page.php"><img src="images/p2.jpg" title="product-name" /></a>
							<h4><a href="#">Line Link 67009</a></h4>
							<a class="product-btn" href="single-page.php"><span>109.90$</span><small>GET NOW</small><label> </label></a>
						</div>
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="single-page.php"><img src="images/b3.jpg" title="name" /></a>
							<a class="product-here" href="single-page.php"><img src="images/p3.jpg" title="product-name" /></a>
							<h4><a href="single-page.php">Minimus Zero </a></h4>
							<a class="product-btn" href="single-page.php"><span>109.90$</span><small>GET NOW</small><label> </label></a>
						</div>
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="single-page.php"><img src="images/b4.jpg" title="name" /></a>
							<a class="product-here" href="single-page.php"><img src="images/p4.jpg" title="product-name" /></a>
							<h4><a href="single-page.php"> Athletic Shoe </a></h4>
							<a class="product-btn" href="single-page.php"><span>109.90$</span><small>GET NOW</small><label> </label></a>
						</div>
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="single-page.php"><img src="images/b5.jpg" title="name" /></a>
							<a class="product-here" href="single-page.php"><img src="images/p2.jpg" title="product-name" /></a>
							<h4><a href="single-page.php">Veronique </a></h4>
							<a class="product-btn" href="single-page.php"><span>109.90$</span><small>GET NOW</small><label> </label></a>
						</div>
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="single-page.php"><img src="images/b6.jpg" title="name" /></a>
							<a class="product-here" href="single-page.php"><img src="images/p6.jpg" title="product-name" /></a>
							<h4><a href="single-page.php">Suede Boots </a></h4>
							<a class="product-btn" href="single-page.php"><span>109.90$</span><small>GET NOW</small><label> </label></a>
						</div>
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="single-page.php"><img src="images/b7.jpg" title="name" /></a>
							<a class="product-here" href="single-page.php"><img src="images/p7.jpg" title="product-name" /></a>
							<h4><a href="single-page.php">Barricade 6.0  </a></h4>
							<a class="product-btn" href="single-page.php"><span>109.90$</span><small>GET NOW</small><label> </label></a>
						</div>
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="single-page.php"><img src="images/b1.jpg" title="name" /></a>
							<a class="product-here" href="single-page.php"><img src="images/p8.jpg" title="product-name" /></a>
							<h4><a href="single-page.php">Cotu Classic </a></h4>
							<a class="product-btn" href="single-page.php"><span>109.90$</span><small>GET NOW</small><label> </label></a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<!---//special-products-grids---->
				</div>
				<!---//speical-products---->
				</div>
			<!----content---->
			<!----footer--->
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
			<!---//footer--->
			<!---copy-right--->
					<div class="copy-right">
						<div class="container">
							<p>Copyright &copy 2016 | <a href="http://www.srirezekigorden.com/">Muhammad Rifqi</a> by Muhammad Rifqi
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
			<!--//copy-right--->
		</div>
		<!----container---->
	</body>
</html>

