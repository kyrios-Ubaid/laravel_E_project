
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
	    <link href="{{asset('tem/css/bootstrap.min.css')}}" rel="stylesheet"> 
		<link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css')}}" rel="stylesheet">
		<link href="{{asset('tem/css/tiny-slider.css')}}" rel="stylesheet">
		 <link href="{{asset('tem/css/style.css')}}" rel="stylesheet"> 
		<title>Furni</title> 
	
	

		 
</head>
	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="home">Furni<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
    					<li @yield('home')><a class="nav-link" href="home">Home</a></li>
						<li @yield('shop')><a class="nav-link" href="shop">Shop</a></li>
						<li @yield('about')><a class="nav-link" href="about">About us</a></li>
						<li @yield('services')><a class="nav-link" href="services">Services</a></li>
						<li @yield('blog')><a class="nav-link" href="blog">Blog</a></li>
						<li @yield('contact')><a class="nav-link" href="contact">Contact us</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="login"><img src="{{asset('tem/images/user.svg')}}"></a></li>
						<li><a class="nav-link" href="cart"><img src="{{asset('tem/images/cart.svg')}}"></a></li>
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->

		
