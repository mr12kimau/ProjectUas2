	@include('components.header')
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
											<img src="{{ asset('') }}img/bg/lazy-placeholder.jpg" data-src="{{ asset('') }}img/gallery/grid-items/01.jpg" class="img-fluid lazy" alt="">
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
											<img src="{{ asset('') }}img/bg/lazy-placeholder.jpg" data-src="{{ asset('') }}img/gallery/grid-items/02.jpg" class="img-fluid lazy" alt="">
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
						
						@include('components.cart')
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
		
	@include('components.footer')