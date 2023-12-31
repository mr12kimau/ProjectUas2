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
	<link href="<?php echo e(asset('img/logo Zhafira.jpg')); ?>" rel="shortcut icon">

	<!-- Google Fonts - Jost -->
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<!-- Font Awesome CSS -->
	<link href="<?php echo e(asset('vendor/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">

	<!-- Custom Font Icons -->
	<link href="<?php echo e(asset('vendor/icomoon/css/iconfont.min.css')); ?>" rel="stylesheet">

	<!-- Vendor CSS -->
	<link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('vendor/dmenu/css/menu.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('vendor/hamburgers/css/hamburgers.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('vendor/mmenu/css/mmenu.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('vendor/magnific-popup/css/magnific-popup.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('vendor/float-labels/css/float-labels.min.css')); ?>" rel="stylesheet">

	<!-- Main CSS -->
	<link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

</head>

<body>

	<?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<!-- Main -->
		<main>
			<!-- Order -->
			<div class="order">
				<!-- Container -->
				<div class="container">
					<!-- Row -->
					<div class="row">
						<!-- Left Sidebar -->
						<div class="col-lg-8" id="mainContent">
							<!-- Filter Area -->
							<div class="row filter-box filters">
								<div class="filter-box-header">
									<h3>Filters</h3>
									<span class="filter-box-link isotope-reset">Reset Filters</span>
								</div>
								<div class="col-md-6 col-sm-6">
									<select id="category" class="wide price-list" name="category">
										<option value="">Show all</option>
										<option value=".pizza">Pizzas </option>
										<option value=".burger">Burgers</option>
										<option value=".vegetarian">Vegetarian</option>
									</select>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="search-wrap">
										<input id="search" type="text" class="form-control" placeholder="Search..." />
										<i class="icon icon-search"></i>
									</div>
								</div>
							</div>
							<!-- Filter Area End -->
							<!-- Grid -->
							<div class="row grid">
								<!-- Grid Item 01 -->
								<div id="gridItem01" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 isotope-item pizza">
									<div class="item-body">
										<figure>
											<img src="<?php echo e(asset('')); ?>img/bg/lazy-placeholder.jpg" data-src="<?php echo e(asset('')); ?>img/gallery/grid-items/01.jpg" class="img-fluid lazy" alt="">
											<a href="#modalDetailsItem01" class="item-body-link modal-opener">
												<div class="item-title">
													<h3>Aspen</h3>
													<small>Bacon, Onion, Mushroom ...</small>
												</div>
											</a>
											<div class="ribbon-size"><span>Size: M</span></div>
										</figure>
										<ul>
											<li>
												<a href="#modalOptionsItem01" class="item-size modal-opener">Options</a>
											</li>
											<li>
												<span class="item-price format-price">8.00</span>
											</li>
											<li>
												<a href="javascript:;" class="add-options-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
											</li>
										</ul>
									</div>
								</div>
								<!-- Grid Item 02 -->
								<div id="gridItem02" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 isotope-item  pizza">
									<div class="item-body">
										<figure>
											<div class="ribbon-discount"><span>- 10%</span></div>
											<img src="<?php echo e(asset('')); ?>img/bg/lazy-placeholder.jpg" data-src="<?php echo e(asset('')); ?>img/gallery/grid-items/02.jpg" class="img-fluid lazy" alt="">
											<a href="#modalDetailsItem02" class="item-body-link modal-opener">
												<div class="item-title">
													<h3>Bolognese</h3>
													<small>Ragu, Mozzarella</small>
												</div>
											</a>
											<div class="ribbon-size"><span>Size: M</span></div>
										</figure>
										<ul>
											<li>
												<a href="#modalOptionsItem02" class="item-size modal-opener">Options</a>
											</li>
											<li>
												<span class="item-price format-price">6.80</span>
											</li>
											<li>
												<span class="item-price-discount format-price">7.65</span>
											</li>
											<li>
												<a href="javascript:;" class="add-options-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- Grid End -->
						</div>
						<!-- Left Sidebar End -->
						
						<?php echo $__env->make('components.cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<div class="row">
							<div class="col-md-12">
								<button type="button" name="backward" class="btn-form-func btn-form-func-alt-color backward">
									<span class="btn-form-func-content">Back</span>
									<span class="icon"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
								</button>
							</div>
						</div>
						<div class="row footer">
							<div class="col-md-12 text-center">
								<small>Copyrigth FoodBoard 2021.</small>
							</div>
						</div>				
					</div>
					<!-- Row End -->
				</div>
				<!-- Container End -->
			</div>
			<!-- Order End -->

		</main>
		<!-- Main End -->
		
	<?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\zhafira_order\resources\views/customers/index.blade.php ENDPATH**/ ?>