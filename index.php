<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>X &amp; Y Store</title>
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css" />
	<link rel="shortcut icon" href="img/icon.ico">
	<link rel="stylesheet" href="OwlCarousel/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
</head>
<body>
<header class="nav">	
<nav class="navbar navbar-expand-lg navbar-light nav-bg fixed-top">
  <a class="navbar-brand" href="index.php"><img src="img/logo.png" class="gambar" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-start nav-coll" id="navbarNav">
  	<div class="dropdown drop">
    		<a class="btn dropdown-toggle back-drop" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
    			Pages
    		</a>
    			<div class="dropdown-menu menu-pages" aria-labelledby="dropdownMenuLink">
    				<a class="dropdown-item pages-link" href="#">Home Page</a>
    				<a class="dropdown-item pages-link" href="#">Category Page</a>
    				<a class="dropdown-item pages-link" href="#">Contact Page</a>
    			</div>
    </div>
    <form class="form-inline form">
      <input class="cari" type="search" placeholder="Search....." aria-label="Search">
      <button class="btn tombolcari" type="submit"><img src="img/search.svg" class="kaca"></button>
    </form>
		<div class="dropdown drop-user">
		  <button class="btn btn-user" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="gbruser" src="img/user.svg" alt="users">
		  </button>
		  <div class="dropdown-menu menu-user" aria-labelledby="dropdownMenuButton">
		    <a class="dropdown-item user-link" href="#">Sign In</a>
		    <a class="dropdown-item user-link" href="#">Sign Up</a>
		    <a class="dropdown-item user-link" href="#">My Order</a>
		    <a class="dropdown-item user-link" href="#">Log Out</a>
		  </div>
		</div>
			<div class="cart">
				<a href="#" class="bag-shopping"><i class="fa fa-shopping-cart fa-lg"></i></a><sup class="badge bg-badge">4</sup>
			</div>
  </div>
</nav>
</header>

<div class="container">
	
<div id="carouselExampleFade" class="carousel slide carousel-fade carousel-banner" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/head.png" class="d-block w-100  gbr-banner" alt="banner1">
    </div>
    <div class="carousel-item">
      <img src="img/smartphones.png" class=" d-block w-100 gbr-banner" alt="banner2">
    </div>
    <div class="carousel-item">
      <img src="img/laptops.png" class=" d-block w-100 gbr-banner" alt="banner3">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="category">
	<h2 class="cat-tulisan">Category</h2>
	<div class="row cat">
	  <div class="col-md-3 col-auto"><a href="#"><img src="img/headphones.svg" alt="cat-head" class="gbrcat"></a><a href="#" class="link1"><br><p class="cat-link1">Headphones</p></a></div>
	  <div class="col-md-3 col-auto"><a href=""><img src="img/smartphone.svg" alt="cat-phones" class="gbrcat"></a><a href="#" class="link2"><br><p class="cat-link2">Smartphones</p></a></div>
	  <div class="col-md-3 col-auto"><a href=""><img src="img/laptop.svg" alt="cat-laptop" class="gbrcat"></a><a href="#" class="link3"><p class="cat-link3">Laptops</p></a></div>
	  <div class="col-md-3 col-auto"><a href=""><img src="img/dial.svg" alt="cat-dial" class="gbrcat"></a><a href="#" class="link"><p class="cat-link">Others</p></a></div>
	</div>
</div>

<div class="best-offer">
	<h2 class="best-tulisan">Best Offers</h2>
	<div id="owl-demo" class="owl-carousel">
          
	  <div class="item"><a href="#" class="link-best"><img src="img/heads1.png" alt="best1"><p class="offer-name">Headphone 1</p><p class="offer-price">$100</p></a></div>
	  <div class="item"><a href="#" class="link-best"><img src="img/head2.png" alt="best2"><p class="offer-name">Headphone 2</p><p class="offer-price">$100</p></a></div>
	  <div class="item"><a href="#" class="link-best"><img src="img/head3.png" alt="best3"><p class="offer-name">Headphone 3</p><p class="offer-price">$100</p></a></div>
	  <div class="item"><a href="#" class="link-best"><img src="img/phone1.png" alt="best4"><p class="offer-name">Smartphone 1</p><p class="offer-price">$100</p></a></div>
	  <div class="item"><a href="#" class="link-best"><img src="img/phone2.png" alt="best5"><p class="offer-name">Smartphone 2</p><p class="offer-price">$100</p></a></div>
	  <div class="item"><a href="#" class="link-best"><img src="img/phone3.png" alt="best6"><p class="offer-name">Smartphone 3</p><p class="offer-price">$100</p></a></div>
	  <div class="item"><a href="#" class="link-best"><img src="img/laptop1.png" alt="best7"><p class="offer-name">Laptop 1</p><p class="offer-price">$100</p></a></div>
	  <div class="item"><a href="#" class="link-best"><img src="img/laptop2.png" alt="best8"><p class="offer-name">Laptop 2</p><p class="offer-price">$100</p></a></div>
	  <div class="item"><a href="#" class="link-best"><img src="img/laptop3.png" alt="best9"><p class="offer-name">Laptop 3</p><p class="offer-price">$100</p></a></div>
	 
	</div>
</div>

<div class="product">
	<h2 class="product-tulisan">Product</h2>
	<div class="row">
		<div class="col-md-3 col-auto">
			<img src="img/product1.png" class="pro-image" alt="product1">
			<a href="#" class="link-product"><p>Laptops 1</p><p>$500</p></a>
		</div>
		<div class="col-md-3 col-auto">
			<img src="img/product2.png" class="pro-image" alt="product2">
			<a href="#" class="link-product"><p>Headphones 1</p><p>$500</p></a>
		</div>
		<div class="col-md-3 col-auto">
			<img src="img/product3.png" class="pro-image" alt="product3">
			<a href="#" class="link-product"><p>Smartphones 1</p><p>$500</p></a>
		</div>
		<div class="col-md-3 col-auto">
			<img src="img/product4.png" class="pro-image" alt="product4">
			<a href="#" class="link-product"><p>Headphones 2</p><p>$500</p></a>
		</div>
		<div class="col-md-3 col-auto">
			<img src="img/product5.png" class="pro-image" alt="product5">
			<a href="#" class="link-product"><p>Smartphones 2</p><p>$500</p></a>
		</div>
		<div class="col-md-3 col-auto">
			<img src="img/product6.png" class="pro-image" alt="product6">
			<a href="#" class="link-product"><p>Laptops 2</p><p>$500</p></a>
		</div>
	</div>
</div>

<div class="service">
	<div class="row">
		<div class="col-md-4 col-auto">
			<img src="img/paper-plane.svg" class="service-image">
			<p><strong>International Shipping</strong></p><p>Free international shipping</p>
		</div>
		<div class="col-md-4 col-auto">
			<img src="img/box.svg" class="service-image">
			<p><strong>Re-turn</strong></p><p>Free Return Package</p>
		</div>
		<div class="col-md-4 col-auto">
			<img src="img/support.svg" class="service-image" >
			<p><strong>Customer Service</strong></p><p>24hr Customer Service</p>
		</div>
	</div>
</div>

</div>

<footer class="bg-footer clearfix">
	<div class="container">
		<div class="foot-tulisan">
			<p>&copy;Copyright 2019 Beta Version   -Freza Ridho</p>
		</div>
	</div>
</footer>
</body>

	<script src="bootstrap/dist/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="bootstrap/dist/js/popper.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="OwlCarousel/dist/owl.carousel.min.js"></script>
</html>