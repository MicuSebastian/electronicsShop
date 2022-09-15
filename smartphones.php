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
		<!--checkout-->
		<link rel="stylesheet" type="text/css" href="css/checkout.css">
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
							<li class="nav-item">
								<a class="nav-link" href="index.php">Home</a>
							</li>
							<li class="nav-item dropdown active">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">(current)</span>Products
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
								<a href="cart.php" class="nav-link">cart</a>
							</li>
							<li class="nav-item">
								<a href="contact.php" class="nav-link">Contact</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="slider text-center">
				<div class="callbacks_container">
					<ul class="rslides" id="slider4">
						<li>
							<div class="inner_page-banner one-img">
							</div>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
			<div class="container py-lg-5 py-md-5 py-sm-4 py-4">
				<h3 class="title text-center mb-lg-5 mb-md-4  mb-sm-4 mb-3">Smartphones</h3>
				<div class="row banner-below-w31">

					<?php
						$cerere="select * from techno1 where categorie='Smartphones'";
						($conn=oci_connect("system","Parola1234","localhost/XE"))
							or die("Conexiune esuata:".oci_error($conn)."<br>\n");

						 ($rezultat=oci_parse($conn, $cerere))
							or die("Cerere SQL esuata: ".oci_error($conn)."<br>\n");

							oci_execute($rezultat);

					?>

					<table class="timetable_sub">
						<tr>
							<th>Smartphone</th>
							<th>Name</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Order</th>
						</tr>

						<?php
							$cerere="select * from techno1 where categorie='Smartphones'";
							($conn=oci_connect("system","Parola1234","localhost/XE"))
								or die("Conexiune esuata:".oci_error($conn)."<br>\n");

						   ($rezultat=oci_parse($conn, $cerere))
								or die("Cerere SQL esuata: ".oci_error($conn)."<br>\n");

								oci_execute($rezultat);	
					   			while($linie = oci_fetch_row($rezultat)) {
						?>

						<tbody>
							<tr>
								<form action="addcart.php" method=get>
									<td class="centru"><img src="<?php echo $linie[1]; ?>" width="150px" height="150px"></td>
									<td><?php echo $linie[3] ?></td>
									<td><?php echo $linie[5] ?> lei</td>
									<input type="hidden" name="id" value="<?php echo $linie[0]?>">
									<input type="hidden" name="nume" value="<?php echo $linie[3]?>">
									<input type="hidden" name="pret" value="<?php echo $linie[5]?>">
									<input type="hidden" name="categorie" value="<?php echo $linie[2]?>">
									<td><input type="text" name="cantitate"></td>
									<td><input type="submit" value="Add to cart" ></td>
								</form>
							</tr>
						</tbody>

						<?php
							}
								oci_free_statement($rezultat);
					  ?>

					</table>
					
					<div class="privacy about">
						<form action="index.php">
							<input class="btn" type="submit" value="Back to the Main Page">
						</form>
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
			techno1.render();

			techno1.cart.on('techno1_checkout', function (evt) {
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
