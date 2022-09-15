<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
	<head>
	<title>OnlineShop</title>
		<!--meta tags -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
			Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script>
			addEventListener("load", function () {
				setTimeout(hideURLbar, 0);
			}, false);

			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		</script>
		<!--//meta tags ends here-->
		<!--booststrap-->
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
		<!--//booststrap end-->
		<!-- font-awesome icons -->
		<link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
		<!-- //font-awesome icons -->
		<!-- For Clients slider -->
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
		<!--flexs slider-->
		<link href="css/JiSlider.css" rel="stylesheet">
		<!--Shoping cart-->
		<link rel="stylesheet" href="css/shop.css" type="text/css" />
		<!--//Shoping cart-->
		<!--stylesheets-->
		<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
		<!--//stylesheets-->
		<link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/mystyle.css"/>
	</head>

	<body>
		<div class="header-outs" id="home">
			<div class="header-bar">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
						<ul class="navbar-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Products
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="nav-link " href="smartphones.php">Smartphones</a>
 									<a class="nav-link " href="laptops.php">Laptops</a>
 									<a class="nav-link " href="components.php">Components</a>
 									<a class="nav-link " href="network.php">Network</a>
 									<a class="nav-link " href="consoles.php">Consoles</a>
									<a class="nav-link " href="toys.php">Toys</a>
								</div>
							</li>
							<li class="nav-item">
								<a href="cart.php" class="nav-link">Cart</a>
							</li>
							<li class="nav-item">
								<a href="contact.php" class="nav-link">Contact</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<!-- Slideshow 4 -->
			<div class="slider text-center">
				<div class="callbacks_container">
					<ul class="rslides" id="slider4">
						<li>
							<div class="slider-img one-img">
								<div class="container">
									<div class="slider-info ">
										<h5>ForIT<br>wannabe</h5>

									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
			<div class="container py-lg-5 py-md-5 py-sm-4 py-4">
				<h3 class="title text-center mb-lg-5 mb-md-4  mb-sm-4 mb-3">Categories</h3>
				<div class="row banner-below-w3l">
					<div class="col-lg-4 col-md-6 col-sm-6 text-center banner-agile-flowers">
						<a href="smartphones.php"><img src="images2/smartphone.png" class="img-thumbnail" alt="" height="237" width="260"></a>
						<div class="banner-right-icon">
							<a href="smartphones.php"><h4 class="pt-3">Smartphones</h4></a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 text-center banner-agile-flowers">
						<a href="laptops.php"><img src="images2/laptop.jpg" class="img-thumbnail" alt="" height="237" width="260"></a>
						<div class="banner-right-icon">
							<a href="laptops.php"><h4 class="pt-3">Laptops</h4></a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 text-center banner-agile-flowers">
						<a href="components.php"><img src="images2/component.jpg" class="img-thumbnail" alt="" height="237" width="260"></a>
						<div class="banner-right-icon">
							<h4 class="pt-3">Components</h4>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 mt-3 text-center banner-agile-flowers">
						<a href="network.php"><img src="images2/network.jpg" class="img-thumbnail" alt="" height="237" width="260"></a>
						<div class="banner-right-icon">
							<h4 class="pt-3">Network</h4>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 mt-3 text-center banner-agile-flowers">
						<a href="consoles.php"><img src="images2/consolaPS4.jpg" class="img-thumbnail" alt="" height="237" width="260"></a>
						<div class="banner-right-icon">
							<h4 class="pt-3">Consoles</h4>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 mt-3 text-center banner-agile-flowers">
						<a href="toys.php"><img src="images2/toy.jpg" class="img-thumbnail" alt="" height="237" width="260"></a>
						<div class="banner-right-icon">
							<h4 class="pt-3">Toys</h4>
						</div>
					</div>

				</div>
			</div>
		</section>


		<footer class="py-lg-4 py-md-3 py-sm-3 py-3 text-center">
			<div class="copy-agile-right">
				<p>
					© Copyright ABD 2021 
				</p>
			</div>
		</footer>

		<!--js working-->
		<script src='js/jquery-2.2.3.min.js'></script>
		<!--//js working-->
		<!-- cart-js -->
		<script src="js/minicart.js"></script>
		<script>
			toys.render();

			toys.cart.on('toys_checkout', function (evt) {
				var items, len, i;

				if (this.subtotal() > 0) {
					items = this.items();

					for (i = 0, len = items.length; i < len; i++) {}
			}
			});
		</script>
		<!-- //cart-js -->

		<!--bootstrap working-->
		<script src="js/bootstrap.min.js"></script>
		<!-- //bootstrap working-->
	</body>
</html>
