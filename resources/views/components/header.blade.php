<?php

use Foodboard\Config;

require_once __DIR__ . '/Config/Config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Food order wizard with online payment">
	<meta name="author" content="UWS">
	<title>Zhafira kantin</title>

	<!-- Favicon -->
	<link href="{{ asset('img/logo Zhafira.jpg') }}" rel="shortcut icon">

	<!-- Google Fonts - Jost -->
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">

<!-- Bootstrap Bundle JS (includes Popper) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>

	<!-- Font Awesome CSS -->
	<link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

	<!-- Custom Font Icons -->
	<link href="{{ asset('vendor/icomoon/css/iconfont.min.css') }}" rel="stylesheet">

	<!-- Vendor CSS -->
	<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/dmenu/css/menu.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/hamburgers/css/hamburgers.min.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/mmenu/css/mmenu.min.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/magnific-popup/css/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/float-labels/css/float-labels.min.css') }}" rel="stylesheet">

	<!-- Main CSS -->
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
	
	<!-- Preloader -->
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- Preloader End -->

	<!-- Page -->
	<div id="page">

		<!-- Header -->
		<header class="main-header sticky">
			<a href="#menu" class="btn-mobile">
				<div class="hamburger hamburger--spin" id="hamburger">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</a>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-6">
						<div id="logo">
							<h1><a href="{{ asset('img/logo Zhafira.jpg') }}" title="Zhafira">Zhafira</a></h1>
						</div>
					</div>
					<div class="col-lg-9 col-6">
						<ul id="menuIcons">
							<li><a href="#"><i class="icon icon-support"></i></a></li>
							<li><a href="#"><i class="icon icon-shopping-cart2"></i></a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
									<i class="fa fa-user"></i><span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="">View Profile</a></li>
									<li><a href="">Edit Profile</a></li>
									<li><a href="">Settings</a></li>
									<li class="divider"></li>
									<li><a href=""
										onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
										Logout</a></li>
								</ul>
							</li>
						</ul>
						<!-- Menu -->
						<nav id="menu" class="main-menu">
							<ul>
								<li><span><a href="">Home</a></span></li>
								<li>
									<span><a href="#">Order <i class="fa fa-chevron-down"></i></a></span>
									<ul>
										<li>
											<span><a href="#">Pay online</a></span>
											<ul>
												<li><a href="{{ asset('') }}pay-with-card-online/">Demo 1 - Filtering</a></li>
												<li><a href="{{ asset('') }}pay-with-card-online/order-2.php">Demo 2 - Sticky navigation</a></li>
											</ul>
										</li>
										<li>
											<span><a href="#">Pay with cash</a></span>
											<ul>
												<li><a href="{{ asset('') }}pay-with-cash-on-delivery/">Demo 1 - Filtering</a></li>
												<li><a href="{{ asset('') }}pay-with-cash-on-delivery/order-2.php">Demo 2 - Sticky navigation</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><span><a href="{{ asset('') }}faq.html">Faq</a></span></li>
								<li><span><a href="{{ asset('') }}contacts.html">Contacts</a></span></li>
							</ul>
						</nav>
						<!-- Menu End -->
					</div>
				</div>
			</div>

        <!-- Logout Form -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
		</header>
		<!-- Header End -->

		<!-- Sub Header -->
		<div class="sub-header">
			<div class="container">
				<h1>Pesan online</h1>
			</div>
		</div>
		<!-- Sub Header End -->