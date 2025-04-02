<?php
require_once './system/core/database.php';

require_once LAYOUT.'/header.php';
?>

	<!-- >>>>>>>>>>>>>>>>>>> Cart part end >>>>>>>>>>>>>>>>>>>-->
	<!-- >>>>>>>>>>>>>>>>>>> Slider part start >>>>>>>>>>>>>>>>>>>-->
	<div id="wrapper">
		<div class="content">
			<div class="bg-shape">
				<img src="/assets/images/banner/banner-shape1.png" alt="">
			</div>
			<div class="product-img">
				<div class="product-img__item" id="img1">
					<img src="/assets/images/slider/item-1.png" alt="" class="product-img__img w-100 img">
				</div>
				<div class="product-img__item" id="img2">
					<img src="/assets/images/slider/item-2.png" alt="" class="product-img__img w-100 img">
				</div>
				<div class="product-img__item" id="img3">
					<img src="/assets/images/slider/item-3.png" alt="" class="product-img__img w-100 img">
				</div>
				<div class="product-img__item" id="img4">
					<img src="/assets/images/slider/item-4.png" alt="" class="product-img__img w-100 img">
				</div>
			</div>
			<div class="product-slider">
				<button class="prev disabled">
					<i class="fa-solid fa-arrow-left"></i>
				</button>
				<button class="next">
					<i class="fa-solid fa-arrow-right"></i>
				</button>
				<div class="product-slider__wrp swiper-wrapper">
					<div class="product-slider__item swiper-slide" data-target="img4">
						<div class="product-slider__card">
							<img src="/assets/images/banner/banner-item-bg.jpg" alt="" class="product-slider__cover">
							<div class="product-slider__content">
								<h1 class="product-slider__title">
									Spectrum <br>
									Body Wash Oil
								</h1>
								<span class="product-slider__price">$12.299,<sup>99</sup></span>
								<div class="product-ctr">
									<div class="product-labels">
										<div class="product-labels__title">Key Benefits:</div>
										<div class="product-labels__group">
											<label class="product-labels__item">
												<span class="product-labels__txt">
													<i class="fa-solid fa-circle-check"></i>Reduces stress and anxiety.
												</span>
											</label>
											<label class="product-labels__item">
												<span class="product-labels__txt">
													<i class="fa-solid fa-circle-check"></i>Enhances sleep.
												</span>
											</label>
											<label class="product-labels__item">
												<span class="product-labels__txt">
													<i class="fa-solid fa-circle-check"></i>Regulates metabolism and
													appetite.
												</span>
											</label>
											<label class="product-labels__item">
												<span class="product-labels__txt">
													<i class="fa-solid fa-circle-check"></i>Reduces inflammation and
													alleviates pain.
												</span>
											</label>
											<label class="product-labels__item">
												<span class="product-labels__txt">
													<i class="fa-solid fa-circle-check"></i>Improves overall health by
													aiding in homeostasis.
												</span>
											</label>
										</div>
									</div>
									<span class="hr-vertical"></span>
									<div class="product-inf">
										<div class="product-inf__percent">
											<div class="product-inf__percent-circle">
												<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
													viewBox="0 0 100 100">
													<defs>
														<linearGradient x1="0%" y1="0%" x2="0%" y2="100%">
															<stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
															<stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
														</linearGradient>
													</defs>
													<circle cx="50" cy="50" r="47" stroke-dasharray="250, 300"
														stroke="#9cc026" stroke-width="4" fill="none" />
												</svg>
											</div>
											<div class="product-inf__percent-txt">
												80%
											</div>
										</div>
										<span class="product-inf__title">Natural Rate</span>
									</div>
								</div>
								<div class="product-slider__bottom">
									<button class="product-slider__cart">
										ADD TO CART
									</button>
									<button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO
										WISHLIST</button>
								</div>
							</div>
						</div>
					</div>
					<div class="product-slider__item swiper-slide" data-target="img1">
						<div class="product-slider__card">
							<img src="/assets/images/banner/banner-item-bg.jpg" alt="" class="product-slider__cover">
							<div class="product-slider__content">
								<h1 class="product-slider__title">
									Hair Nourishing <br> CBD Oil
								</h1>
								<span class="product-slider__price">$9.999,<sup>99</sup></span>
								<div class="product-ctr">
									<div class="product-labels">
										<div class="product-labels__title">Key Benefits: </div>
										<div class="product-labels__group">
											<label class="product-labels__item">
												<span class="product-labels__txt">
													<i class="fa-solid fa-circle-check"></i>Lightweight Formula.
												</span>
											</label>
											<label class="product-labels__item">
												<span class="product-labels__txt">
													<i class="fa-solid fa-circle-check"></i>Leaves Hair Brilliantly
													Shiny.
												</span>
											</label>
											<label class="product-labels__item">
												<span class="product-labels__txt">
													<i class="fa-solid fa-circle-check"></i>Provides a Silky Smooth
													Finish.
												</span>
											</label>
											<label class="product-labels__item">
												<span class="product-labels__txt">
													<i class="fa-solid fa-circle-check"></i>Reducess Frizz and Flyaways.
												</span>
											</label>
										</div>
									</div>
									<span class="hr-vertical"></span>
									<div class="product-inf">
										<div class="product-inf__percent">
											<div class="product-inf__percent-circle">
												<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
													viewBox="0 0 100 100">
													<defs>
														<linearGradient x1="0%" y1="0%" x2="0%" y2="100%">
															<stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
															<stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
														</linearGradient>
													</defs>
													<circle cx="50" cy="50" r="47" stroke-dasharray="260, 300"
														stroke="#9cc026" stroke-width="4" fill="none" />
												</svg>
											</div>
											<div class="product-inf__percent-txt">
												90%
											</div>
										</div>
										<span class="product-inf__title">Natural Rate</span>
									</div>
								</div>
								<div class="product-slider__bottom">
									<button class="product-slider__cart">
										ADD TO CART
									</button>
									<button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO
										WISHLIST</button>
								</div>
							</div>
						</div>
					</div>
					<div class="product-slider__item swiper-slide" data-target="img2">
						<div class="product-slider__card">
							<img src="/assets/images/banner/banner-item-bg.jpg" alt="" class="product-slider__cover">
							<div class="product-slider__content">
								<h1 class="product-slider__title">
									Hemp Sun <br> Grown Cream
								</h1>
								<span class="product-slider__price">$1.699,<sup>99</sup></span>
								<div class="product-ctr">
									<div class="product-labels">
										<div class="product-labels__title">Key Benefits: </div>
										<div class="product-labels__group">
											<label class="product-labels__item">
												<span class="product-labels__txt">
													<i class="fa-solid fa-circle-check"></i>Naturally cleanses and
													exfoliates the skin.
												</span>
											</label>
											<label class="product-labels__item">
												<span class="product-labels__txt">
													<i class="fa-solid fa-circle-check"></i>Appropriate for all skin
													types.
												</span>
											</label>
											<label class="product-labels__item">
												<span class="product-labels__txt">
													<i class="fa-solid fa-circle-check"></i>Reduces redness and the look
													of fine lines and wrinkles.
												</span>
											</label>
											<label class="product-labels__item">
												<span class="product-labels__txt">
													<i class="fa-solid fa-circle-check"></i>Penetrates to calm and
													smooth skin cells.
												</span>
											</label>
											<label class="product-labels__item">
												<span class="product-labels__txt">
													<i class="fa-solid fa-circle-check"></i>Contains powerful
													antioxidants.
												</span>
											</label>
										</div>
									</div>
									<span class="hr-vertical"></span>
									<div class="product-inf">
										<div class="product-inf__percent">
											<div class="product-inf__percent-circle">
												<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
													viewBox="0 0 100 100">
													<defs>
														<linearGradient x1="0%" y1="0%" x2="0%" y2="100%">
															<stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
															<stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
														</linearGradient>
													</defs>
													<circle cx="50" cy="50" r="47" stroke-dasharray="250, 300"
														stroke="#9cc026" stroke-width="4" fill="none" />
												</svg>
											</div>
											<div class="product-inf__percent-txt">
												80%
											</div>
										</div>
										<span class="product-inf__title">Natural Rate</span>
									</div>
								</div>
								<div class="product-slider__bottom">
									<button class="product-slider__cart">
										ADD TO CART
									</button>
									<button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO
										WISHLIST</button>
								</div>
							</div>
						</div>
					</div>
					<div class="product-slider__item swiper-slide" data-target="img3">
						<div class="product-slider__card">
							<img src="/assets/images/banner/banner-item-bg.jpg" alt="" class="product-slider__cover">
							<div class="product-slider__content">
								<h1 class="product-slider__title">
									Vijaya Ambrosia <br> Rich Oil
								</h1>
								<span class="product-slider__price">$9.999,<sup>99</sup></span>
								<div class="product-ctr">
									<div class="product-labels">
										<div class="product-labels__title">Key Benefits: </div>
										<div class="product-labels__group">
											<label class="product-labels__item">
												<span class="product-labels__txt">
													<i class="fa-solid fa-circle-check"></i>Improved immune system
													function.
												</span>
											</label>
											<label class="product-labels__item">
												<span class="product-labels__txt">
													<i class="fa-solid fa-circle-check"></i>Improved sleep quality.
												</span>
											</label>
											<label class="product-labels__item">
												<span class="product-labels__txt">
													<i class="fa-solid fa-circle-check"></i>Reduced anxiety and
													depression symptoms.
												</span>
											</label>
											<label class="product-labels__item">
												<span class="product-labels__txt">
													<i class="fa-solid fa-circle-check"></i>Increased relaxation and
													stress relief.
												</span>
											</label>
											<label class="product-labels__item">
												<span class="product-labels__txt">
													<i class="fa-solid fa-circle-check"></i>Improved cognitive
													abilities, such as memory and focus.
												</span>
											</label>
										</div>
									</div>
									<span class="hr-vertical"></span>
									<div class="product-inf">
										<div class="product-inf__percent">
											<div class="product-inf__percent-circle">
												<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
													viewBox="0 0 100 100">
													<defs>
														<linearGradient x1="0%" y1="0%" x2="0%" y2="100%">
															<stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
															<stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
														</linearGradient>
													</defs>
													<circle cx="50" cy="50" r="47" stroke-dasharray="280, 300"
														stroke="#9cc026" stroke-width="4" fill="none" />
												</svg>
											</div>
											<div class="product-inf__percent-txt">
												99%
											</div>
										</div>
										<span class="product-inf__title">Natural Rate</span>
									</div>
								</div>
								<div class="product-slider__bottom">
									<button class="product-slider__cart">
										ADD TO CART
									</button>
									<button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO
										WISHLIST</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hidden" hidden>
		<svg>
			<symbol id="icon-arrow-left" viewBox="0 0 32 32">
				<path
					d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z">
				</path>
			</symbol>
			<symbol id="icon-arrow-right" viewBox="0 0 32 32">
				<path
					d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z">
				</path>
			</symbol>
		</svg>
	</div>
	<!-- >>>>>>>>>>>>>>>>>>> Slider part end >>>>>>>>>>>>>>>>>>>-->
	<!-- >>>>>>>>>>>>>>>>>>> Banner part start >>>>>>>>>>>>>>>>>>>-->
	<div id="banner-poster" class="banner-poster" style="background: url(/assets/images/banner/bg1.png) no-repeat;">
		<div class="container">
			<div class="row">
				<!-- banner blog -->
				<div class="banner-item col-lg-4 col-md-6 col-sm-6 col-xl-4">
					<div class="banner-blog product-hot">
						<img class="w-100 img-fluid" src="/assets/images/banner/banner-01.jpg" alt="IMG-BANNER">
						<a href="#" class="banner-txt">
							<div class="banner-txt-child1">
								<span class="banner-info">
									100% Organic
								</span>
								<span class="banner-name">
									Quality CBD Store
								</span>
							</div>
							<div class="banner-txt-child2">
								<div class="banner-link">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>
				<!-- banner blog -->
				<div class="banner-item col-lg-4 col-md-6 col-sm-6 col-xl-4">
					<div class="banner-blog product-hot">
						<img class="w-100 img-fluid" src="/assets/images/banner/banner-02.jpg" alt="IMG-BANNER">
						<a href="#" class="banner-txt">
							<div class="banner-txt-child1">
								<span class="banner-info">
									Get 50% Off on all
								</span>
								<span class="banner-name">
									Organic Oil Products
								</span>
							</div>
							<div class="banner-txt-child2">
								<div class="banner-link">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>
				<!-- banner blog -->
				<div class="banner-item col-lg-4 col-md-6 col-sm-12 col-xl-4">
					<div class="banner-blog product-hot">
						<img class="w-100 img-fluid" src="/assets/images/banner/banner-03.jpg" alt="IMG-BANNER">
						<a href="#" class="banner-txt">
							<div class="banner-txt-child1">
								<span class="banner-info">
									100% Organic
								</span>
								<span class="banner-name">
									Marijuana Products
								</span>
							</div>
							<div class="banner-txt-child2">
								<div class="banner-link">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- >>>>>>>>>>>>>>>>>>> Banner part end >>>>>>>>>>>>>>>>>>>-->
	<!-- >>>>>>>>>>>>>>>>>>> Product part start >>>>>>>>>>>>>>>>>>>-->
	<section id="products">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="header_title text-center">
						<p>100% Organic</p>
						<h3 class="about_header_title">
							Our Products
						</h3>
					</div>
				</div>
			</div>
			<div class="product-menu d-flex flex-wrap">
				<div class="d-flex flex-wrap filter-tope-group">
					<ul class="nav nav-pills" id="pills-tab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="recents" data-bs-toggle="pill" data-bs-target="#recent"
								type="button" role="tab" aria-controls="recent" aria-selected="true">Recent Products
							</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="discounts" data-bs-toggle="pill" data-bs-target="#discount"
								type="button" role="tab" aria-controls="discount"
								aria-selected="false">Discounts</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="features" data-bs-toggle="pill" data-bs-target="#featured"
								type="button" role="tab" aria-controls="featured" aria-selected="false">Featured
								Products</button>
						</li>
					</ul>
				</div>
				<!-- Filter button -->
				<div class="filter d-flex flex-wrap">
					<div class="filter-item js-show-filter">
						<i class="icon-filter fa-solid fa-arrow-down-wide-short"></i>
						<i class="icon-close-filter icon-close"></i>
						Filter
					</div>
					<div class="filter-item js-show-search">
						<i class="icon-search fa-solid fa-magnifying-glass"></i>
						<i class="icon-close-search icon-close"></i>
						Search
					</div>
				</div>
				<!-- Filter -->
				<div class="panel-filter w-100">
					<div class="wrap-filter flex-wrap d-flex w-100">
						<div class="filter-col1">
							<div class="filter-title">
								Sort By
							</div>
							<ul>
								<li>
									<a href="#" class="filter-link ">
										Default
									</a>
								</li>
								<li>
									<a href="#" class="filter-link ">
										Popularity
									</a>
								</li>
								<li>
									<a href="#" class="filter-link ">
										Average rating
									</a>
								</li>
								<li>
									<a href="#" class="filter-link  filter-link-active">
										Newness
									</a>
								</li>
								<li>
									<a href="#" class="filter-link ">
										Price: Low to High
									</a>
								</li>
								<li>
									<a href="#" class="filter-link ">
										Price: High to Low
									</a>
								</li>
							</ul>
						</div>
						<div class="filter-col2">
							<div class="filter-title">
								Price
							</div>
							<ul>
								<li>
									<a href="#" class="filter-link  filter-link-active">
										All
									</a>
								</li>
								<li>
									<a href="#" class="filter-link ">
										$0.00 - $50.00
									</a>
								</li>
								<li>
									<a href="#" class="filter-link ">
										$50.00 - $100.00
									</a>
								</li>
								<li>
									<a href="#" class="filter-link ">
										$100.00 - $150.00
									</a>
								</li>
								<li>
									<a href="#" class="filter-link ">
										$150.00 - $200.00
									</a>
								</li>
								<li>
									<a href="#" class="filter-link ">
										$200.00+
									</a>
								</li>
							</ul>
						</div>
						<div class="filter-col3">
							<div class="filter-title">
								Color
							</div>
							<ul>
								<li>
									<span class="black">
										<i class="fa-solid fa-circle"></i>
									</span>
									<a href="#" class="filter-link ">
										Black
									</a>
								</li>
								<li>
									<span class="blue">
										<i class="fa-solid fa-circle"></i>
									</span>
									<a href="#" class="filter-link  filter-link-active">
										Blue
									</a>
								</li>
								<li>
									<span class="grey">
										<i class="fa-solid fa-circle"></i>
									</span>
									<a href="#" class="filter-link ">
										Grey
									</a>
								</li>
								<li>
									<span class="green">
										<i class="fa-solid fa-circle"></i>
									</span>
									<a href="#" class="filter-link ">
										Green
									</a>
								</li>
								<li>
									<span class="red">
										<i class="fa-solid fa-circle"></i>
									</span>
									<a href="#" class="filter-link ">
										Red
									</a>
								</li>
								<li>
									<span class="white">
										<i class="fa-solid fa-circle"></i>
									</span>
									<a href="#" class="filter-link ">
										White
									</a>
								</li>
							</ul>
						</div>
						<div class="filter-col4">
							<div class="filter-title">
								Tags
							</div>
							<div class="filter-col4-item d-flex flex-wrap">
								<a href="#">
									Cannabis Oil
								</a>
								<a href="#">
									Skin Therapy
								</a>
								<a href="#">
									Beauty
								</a>
								<a href="#">
									Recent
								</a>
								<a href="#">
									Discounts
								</a>
								<a href="#">
									New
								</a>
								<a href="#">
									Sale
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Search product -->
				<div class="panel-search w-100">
					<div class="panel-search-body d-flex">
						<button>
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
						<input type="text" name="search-product" placeholder="Search">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10">
					<div class="tab-content " id="pills-tabContent">
						<!-- Recent Products part -->
						<div class="tab-pane active show fade" id="recent" role="tabpanel" aria-labelledby="recents">
							<div class="row">
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic New ">
											<img class="img-1" src="/assets/images/products/product-01.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-02.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn  js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Skin Nourishing Serum plus
												</a>
												<span>
													$22.09
												</span>
												<div class="d-flex discount-price">
													<del>$25.99</del>
													<p>(-15%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(106)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic New">
											<img class="img-1" src="/assets/images/products/product-03.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-04.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Skin Toning Serum
												</a>
												<span>
													$15.50
												</span>
												<div class="d-flex discount-price">
													<del>$30.99</del>
													<p>(-50%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(144)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic New">
											<img class="img-1" src="/assets/images/products/product-05.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-06.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Skin Therapy Combo
												</a>
												<span>
													$16.49
												</span>
												<div class="d-flex discount-price">
													<del>$29.99</del>
													<p>(-45%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(369)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic New">
											<img class="img-1" src="/assets/images/products/product-07.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-08.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Acne Treating Serum
												</a>
												<span>
													$27.49
												</span>
												<div class="d-flex discount-price">
													<del>$49.99</del>
													<p>(-45%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(355)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic New">
											<img class="img-1" src="/assets/images/products/product-09.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-10.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													CBD Glow Combo
												</a>
												<span>
													$52.13
												</span>
												<div class="d-flex discount-price">
													<del>$65.99</del>
													<p>(-32%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(377)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic New">
											<img class="img-1" src="/assets/images/products/product-11.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-12.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Skin Nourishing Serum
												</a>
												<span>
													$14.66
												</span>
												<div class="d-flex discount-price">
													<del>$16.22</del>
													<p>(-30%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(330)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic New">
											<img class="img-1" src="/assets/images/products/product-13.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-14.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Cannabis Face Cream
												</a>
												<span>
													$34.01
												</span>
												<div class="d-flex discount-price">
													<del>$53.99</del>
													<p>(-37%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(330)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic New">
											<img class="img-1" src="/assets/images/products/product-15.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-16.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Spectrum CBD Face Cream
												</a>
												<span>
													$40.79
												</span>
												<div class="d-flex discount-price">
													<del>$40.79</del>
													<p>(-32%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(322)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic New">
											<img class="img-1" src="/assets/images/products/product-17.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-18.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													CBD Infused Lotion
												</a>
												<span>
													$35.49
												</span>
												<div class="d-flex discount-price">
													<del>$49.99</del>
													<p>(-29%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(140)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic New">
											<img class="img-1" src="/assets/images/products/product-19.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-20.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Hemp Sun Grown Cream
												</a>
												<span>
													$27.19
												</span>
												<div class="d-flex discount-price">
													<del>$39.99 </del>
													<p>(-32%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(230)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic New">
											<img class="img-1" src="/assets/images/products/product-21.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-22.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Hair Nourishing CBD Oil
												</a>
												<span>
													$35.50
												</span>
												<div class="d-flex discount-price">
													<del>$70.99</del>
													<p>(-50%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(130)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic New">
											<img class="img-1" src="/assets/images/products/product-23.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-24.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Spectrum Body Wash Oil
												</a>
												<span>
													$56.43
												</span>
												<div class="d-flex discount-price">
													<del>$67.99</del>
													<p>(-17%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(60)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<div class="load_more d-flex flex-wrap">
									<a href="#">
										Load More
									</a>
								</div>
							</div>
						</div>
						<!-- Discounts part -->
						<div class="tab-pane fade" id="discount" role="tabpanel" aria-labelledby="discounts">
							<div class="row">
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic fa-solid fa-certificate discount"
											data-discount="-45%">
											<img class="img-1" src="/assets/images/products/product-05.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-06.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Skin Therapy Combo
												</a>
												<span>
													$16.49
												</span>
												<div class="d-flex discount-price">
													<del>$29.99</del>
													<p>(-45%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(369)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic fa-solid fa-certificate discount"
											data-discount="-15%">
											<img class="img-1" src="/assets/images/products/product-01.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-02.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Skin Nourishing Serum plus
												</a>
												<span>
													$22.09
												</span>
												<div class="d-flex discount-price">
													<del>$25.99</del>
													<p>(-15%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(106)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic fa-solid fa-certificate discount"
											data-discount="-29%">
											<img class="img-1" src="/assets/images/products/product-17.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-18.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													CBD Infused Lotion
												</a>
												<span>
													$35.49
												</span>
												<div class="d-flex discount-price">
													<del>$49.99</del>
													<p>(-29%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(140)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic fa-solid fa-certificate discount"
											data-discount="-32%">
											<img class="img-1" src="/assets/images/products/product-15.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-16.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Spectrum CBD Face Cream
												</a>
												<span>
													$40.79
												</span>
												<div class="d-flex discount-price">
													<del>$40.79</del>
													<p>(-32%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(322)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic fa-solid fa-certificate discount"
											data-discount="-50%">
											<img class="img-1" src="/assets/images/products/product-03.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-04.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Skin Toning Serum
												</a>
												<span>
													$15.50
												</span>
												<div class="d-flex discount-price">
													<del>$30.99</del>
													<p>(-50%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(144)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic fa-solid fa-certificate discount"
											data-discount="-45%">
											<img class="img-1" src="/assets/images/products/product-07.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-08.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Acne Treating Serum
												</a>
												<span>
													$27.49
												</span>
												<div class="d-flex discount-price">
													<del>$49.99</del>
													<p>(-45%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(355)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic fa-solid fa-certificate discount"
											data-discount="-32%">
											<img class="img-1" src="/assets/images/products/product-09.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-10.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													CBD Glow Combo
												</a>
												<span>
													$52.13
												</span>
												<div class="d-flex discount-price">
													<del>$65.99</del>
													<p>(-32%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(377)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic fa-solid fa-certificate discount"
											data-discount="-17%">
											<img class="img-1" src="/assets/images/products/product-23.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-24.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Spectrum Body Wash Oil
												</a>
												<span>
													$56.43
												</span>
												<div class="d-flex discount-price">
													<del>$67.99</del>
													<p>(-17%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(60)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic fa-solid fa-certificate discount"
											data-discount="-30%">
											<img class="img-1" src="/assets/images/products/product-11.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-12.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Skin Nourishing Serum
												</a>
												<span>
													$14.66
												</span>
												<div class="d-flex discount-price">
													<del>$16.22</del>
													<p>(-30%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(330)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic fa-solid fa-certificate discount"
											data-discount="-37%">
											<img class="img-1" src="/assets/images/products/product-13.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-14.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Cannabis Face Cream
												</a>
												<span>
													$34.01
												</span>
												<div class="d-flex discount-price">
													<del>$53.99</del>
													<p>(-37%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(330)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic fa-solid fa-certificate discount"
											data-discount="-32%">
											<img class="img-1" src="/assets/images/products/product-19.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-20.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Hemp Sun Grown Cream
												</a>
												<span>
													$27.19
												</span>
												<div class="d-flex discount-price">
													<del>$39.99 </del>
													<p>(-32%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(230)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic fa-solid fa-certificate discount"
											data-discount="-50%">
											<img class="img-1" src="/assets/images/products/product-21.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-22.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Hair Nourishing CBD Oil
												</a>
												<span>
													$35.50
												</span>
												<div class="d-flex discount-price">
													<del>$70.99</del>
													<p>(-50%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(130)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<div class="load_more d-flex flex-wrap">
									<a href="#">
										Load More
									</a>
								</div>
							</div>
						</div>
						<!-- Features part -->
						<div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="features">
							<div class="row">
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic">
											<img class="img-1" src="/assets/images/products/product-01.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-02.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Skin Nourishing Serum plus
												</a>
												<span>
													$22.09
												</span>
												<div class="d-flex discount-price">
													<del>$25.99</del>
													<p>(-15%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(106)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic">
											<img class="img-1" src="/assets/images/products/product-07.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-08.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Acne Treating Serum
												</a>
												<span>
													$27.49
												</span>
												<div class="d-flex discount-price">
													<del>$49.99</del>
													<p>(-45%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(355)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic">
											<img class="img-1" src="/assets/images/products/product-13.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-14.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Cannabis Face Cream
												</a>
												<span>
													$34.01
												</span>
												<div class="d-flex discount-price">
													<del>$53.99</del>
													<p>(-37%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(330)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic">
											<img class="img-1" src="/assets/images/products/product-19.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-20.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Hemp Sun Grown Cream
												</a>
												<span>
													$27.19
												</span>
												<div class="d-flex discount-price">
													<del>$39.99 </del>
													<p>(-32%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(230)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic">
											<img class="img-1" src="/assets/images/products/product-03.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-04.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Skin Toning Serum
												</a>
												<span>
													$15.50
												</span>
												<div class="d-flex discount-price">
													<del>$30.99</del>
													<p>(-50%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(144)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic">
											<img class="img-1" src="/assets/images/products/product-09.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-10.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													CBD Glow Combo
												</a>
												<span>
													$52.13
												</span>
												<div class="d-flex discount-price">
													<del>$65.99</del>
													<p>(-32%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(377)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic">
											<img class="img-1" src="/assets/images/products/product-15.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-16.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Spectrum CBD Face Cream
												</a>
												<span>
													$40.79
												</span>
												<div class="d-flex discount-price">
													<del>$40.79</del>
													<p>(-32%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(322)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic">
											<img class="img-1" src="/assets/images/products/product-21.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-22.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Hair Nourishing CBD Oil
												</a>
												<span>
													$35.50
												</span>
												<div class="d-flex discount-price">
													<del>$70.99</del>
													<p>(-50%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(130)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic">
											<img class="img-1" src="/assets/images/products/product-05.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-06.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Skin Therapy Combo
												</a>
												<span>
													$16.49
												</span>
												<div class="d-flex discount-price">
													<del>$29.99</del>
													<p>(-45%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(369)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic">
											<img class="img-1" src="/assets/images/products/product-11.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-12.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Skin Nourishing Serum
												</a>
												<span>
													$14.66
												</span>
												<div class="d-flex discount-price">
													<del>$16.22</del>
													<p>(-30%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(330)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic">
											<img class="img-1" src="/assets/images/products/product-17.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-18.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													CBD Infused Lotion
												</a>
												<span>
													$35.49
												</span>
												<div class="d-flex discount-price">
													<del>$49.99</del>
													<p>(-29%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(140)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<!-- single product-->
								<div class="item">
									<div class="item-block">
										<div class="item-block-pic">
											<img class="img-1" src="/assets/images/products/product-23.jpg" alt="IMG-PRODUCT">
											<img class="img-2" src="/assets/images/products/product-24.jpg" alt="IMG-PRODUCT">
											<a href="#" class="item-block-btn js-cart-show-modal">
												Quick View
											</a>
										</div>
										<div class="item-block-txt d-flex flex-wrap">
											<div class="item-block-txt-child1">
												<a href="product-detail.html" class="js-name-b2">
													Spectrum Body Wash Oil
												</a>
												<span>
													$56.43
												</span>
												<div class="d-flex discount-price">
													<del>$67.99</del>
													<p>(-17%)</p>
												</div>
												<div class="star d-flex flex-wrap">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star-half-stroke"></i>
													<i class="fa-regular fa-star"></i>
													<span>(60)</span>
												</div>
											</div>
											<button class="product_fav js-fav btn-addwish-b2 js-addwish-b2">
												<span class="heart"></span>
											</button>
										</div>
									</div>
								</div>
								<div class="load_more d-flex flex-wrap">
									<a href="shop.html">
										Load More
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="product-banner-part">
						<div class="product-banner">
							<a href="#">
								<img class="w-100 img-fluid" src="/assets/images/blog/news_card.jpg" alt="">
							</a>
						</div>
						<div class="product-banner">
							<a href="#">
								<img class="w-100 img-fluid" src="/assets/images/blog/news_card1.jpg" alt="">
							</a>
						</div>
						<div class="product-banner">
							<a href="#">
								<img class="w-100 img-fluid" src="/assets/images/blog/news_card2.jpg" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- >>>>>>>>>>>>>>>>>>> Product part end >>>>>>>>>>>>>>>>>>>-->
	<!-- >>>>>>>>>>>>>>>>>>> specification part start >>>>>>>>>>>>>>>>>>>-->
	<section id="specification">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 order-2 order-lg-1">
					<img class="w-100 img-fluid" src="/assets/images/about/specification.png" alt="">
				</div>
				<div class="col-lg-6 order-1 order-lg-2">
					<div class="header_title text-start">
						<p>Organic Cannabis</p>
						<h3 class="about_header_title">
							Products We Offer
						</h3>
					</div>
					<div class="specification">
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam sed fugiat dolore delectus
							laudantium exercitationem sit, architecto iure iste vero, quidem voluptatibus repudiandae,
							ducimus obcaecati consectetur unde eaque facilis distinctio..</p>
						<div class="row">
							<div class="col-lg-6 col-sm-6">
								<div class="specification-info-col">
									<img src="/assets/images/about/icon.png" alt="">
									<div class="specification-detail">
										<h3>Certified Products</h3>
										<p>Tortor posuere ac ut.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6">
								<div class="specification-info-col">
									<img src="/assets/images/about/icon2.png" alt="">
									<div class="specification-detail">
										<h3>100% Organic CBD</h3>
										<p>In fermentum et sollicitudin.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6">
								<div class="specification-info-col">
									<img src="/assets/images/about/icon3.png" alt="">
									<div class="specification-detail">
										<h3>Chemical Free</h3>
										<p>parturient montes nascetur.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6">
								<div class="specification-info-col">
									<img src="/assets/images/about/icon4.png" alt="">
									<div class="specification-detail">
										<h3>World Wide Delivery </h3>
										<p>Tortor posuere ac ut.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- >>>>>>>>>>>>>>>>>>> specification part end >>>>>>>>>>>>>>>>>>>-->
	<!-- >>>>>>>>>>>>>>>>>>> Banner part start >>>>>>>>>>>>>>>>>>>-->
	<div id="banner-poster2">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="header_title text-center">
						<p>100% Organic</p>
						<h3 class="about_header_title">
							Featured Collection
						</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- banner blog -->
				<div class="banner-item col-md-6 col-sm-6">
					<div class="banner-blog product-hot">
						<img class="w-100 img-fluid" src="/assets/images/banner/banner-04.jpg" alt="IMG-BANNER">
						<a href="#" class="banner-txt">
							<div class="banner-txt-child1">
								<span class="banner-info">
									100% Organic
								</span>
								<span class="banner-name">
									Get 50% Off on all
								</span>
								<span class="banner-name">
									Organic Oil Products
								</span>
							</div>
							<div class="banner-txt-child2">
								<div class="banner-link">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>
				<!-- banner blog -->
				<div class="banner-item col-md-6 col-sm-6">
					<div class="banner-blog product-hot">
						<img class="w-100 img-fluid" src="/assets/images/banner/banner-05.jpg" alt="IMG-BANNER">
						<a href="#" class="banner-txt">
							<div class="banner-txt-child1">
								<span class="banner-info">
									100% Organic
								</span>
								<span class="banner-name">
									Marijuana Products
								</span>
							</div>
							<div class="banner-txt-child2">
								<div class="banner-link">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>
				<!-- banner blog -->
				<div class="banner-item col-md-6 col-sm-6 col-lg-4">
					<div class="banner-blog product-hot">
						<img class="w-100 img-fluid" src="/assets/images/banner/banner-06.jpg" alt="IMG-BANNER">
						<a href="#" class="banner-txt">
							<div class="banner-txt-child1">
								<span class="banner-info">
									60% OFF
								</span>
								<span class="banner-name">
									CBD Glow Combo collection
								</span>
							</div>
							<div class="banner-txt-child2">
								<div class="banner-link">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>
				<!-- banner blog -->
				<div class="banner-item col-md-6 col-sm-6 col-lg-4">
					<div class="banner-blog product-hot">
						<img class="w-100 img-fluid" src="/assets/images/banner/banner-07.jpg" alt="IMG-BANNER">
						<a href="#" class="banner-txt">
							<div class="banner-txt-child1">
								<span class="banner-info">
									Get 50% Off on all
								</span>
								<span class="banner-name">
									Organic Oil Products
								</span>
							</div>
							<div class="banner-txt-child2">
								<div class="banner-link">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>
				<!-- banner blog -->
				<div class="banner-item col-md-6 col-sm-8 col-lg-4">
					<div class="banner-blog product-hot">
						<img class="w-100 img-fluid" src="/assets/images/banner/banner-08.jpg" alt="IMG-BANNER">
						<a href="#" class="banner-txt">
							<div class="banner-txt-child1">
								<span class="banner-info">
									100% Organic
								</span>
								<span class="banner-name">
									Quality CBD Store
								</span>
							</div>
							<div class="banner-txt-child2">
								<div class="banner-link">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- >>>>>>>>>>>>>>>>>>> Banner part start >>>>>>>>>>>>>>>>>>>-->
	<!-- >>>>>>>>>>>>>>>>>>> Services part start >>>>>>>>>>>>>>>>>>>-->
	<section id="services">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-sm-6 col-md-6">
					<div class="content-block text-center text-uppercase p-5">
						<ul class="circles-box">
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<i class="fa-solid fa-truck-fast"></i>
						<h2>Free Shipping world</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, numquam!</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 col-md-6">
					<div class="content-block text-center text-uppercase p-5">
						<ul class="circles-box">
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<i class="fa-solid fa-headset"></i>
						<h2>24/7 Online support </h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, numquam!</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 col-md-6">
					<div class="content-block text-center text-uppercase p-5">
						<ul class="circles-box">
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<i class="fa-solid fa-globe"></i>
						<h2>World wide Delivery </h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, numquam!</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 col-md-6">
					<div class="content-block text-center text-uppercase p-5">
						<ul class="circles-box">
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<i class="fa-solid fa-box-open"></i>
						<h2>30 Days Free Returns</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, numquam!</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- >>>>>>>>>>>>>>>>>>> Services part end >>>>>>>>>>>>>>>>>>>-->
	<!-- >>>>>>>>>>>>>>>>>>> Blog part start >>>>>>>>>>>>>>>>>>>-->
	<section id="blog">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="header_title text-center">
						<p>Recent Posts</p>
						<h3 class="about_header_title">
							Latest blog entries
						</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="blog-item-info col-sm-6 col-md-4">
					<div class="blog-item p-3 h-100">
						<div class="blog-img">
							<a href="blog-detail.html">
								<img src="/assets/images/blog/blog-01.jpg" alt="IMG-BLOG">
							</a>
						</div>
						<div class="blog-text">
							<div class="d-flex flex-wrap">
								<span>
									<span>
										By
									</span>
									<span class="me-1">
										Nancy Ward
									</span>
								</span>
								<span>
									<span>
										on
									</span>
									<span>
										July 22, 2024
									</span>
								</span>
							</div>
							<h4>
								<a href="blog-detail.html">
									Making CBD-Infused Pastries And Cupcakes
								</a>
							</h4>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas qui ab assumenda?
								Facere, optio quas.
							</p>
						</div>
					</div>
				</div>
				<div class="blog-item-info col-sm-6 col-md-4">
					<div class="blog-item p-3 h-100">
						<div class="blog-img">
							<a href="blog-detail.html">
								<img src="/assets/images/blog/blog-02.jpg" alt="IMG-BLOG">
							</a>
						</div>
						<div class="blog-text">
							<div class="d-flex flex-wrap">
								<span>
									<span>
										By
									</span>
									<span class="me-1">
										Nancy Ward
									</span>
								</span>
								<span>
									<span>
										on
									</span>
									<span>
										July 22, 2024
									</span>
								</span>
							</div>
							<h4>
								<a href="blog-detail.html">
									How Does A Lotion Containing CBD Help Your Skin?
								</a>
							</h4>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, eaque pariatur iure
								aliquam harum voluptatum!
							</p>
						</div>
					</div>
				</div>
				<div class="blog-item-info col-sm-12 col-md-4">
					<div class="blog-item p-3 h-100">
						<div class="blog-img">
							<a href="blog-detail.html">
								<img src="/assets/images/blog/blog-03.jpg" alt="IMG-BLOG">
							</a>
						</div>
						<div class="blog-text">
							<div class="d-flex flex-wrap">
								<span>
									<span>
										By
									</span>
									<span class="me-1">
										Nancy Ward
									</span>
								</span>
								<span>
									<span>
										on
									</span>
									<span>
										July 22, 2024
									</span>
								</span>
							</div>
							<h4>
								<a href="blog-detail.html">
									Permalink to Why CBD Product’s Ingredients List Must Be Examined?
								</a>
							</h4>
							<p>
								Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem corrupti quaerat sequi
								rem adipisci repellendus!
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- >>>>>>>>>>>>>>>>>>> Blog part end >>>>>>>>>>>>>>>>>>>-->
	<!-- >>>>>>>>>>>>>>>>>>> Subscribe part start >>>>>>>>>>>>>>>>>>>-->
	<section id="subscribe">
		<div class="newsletter">
			<ul class="circles-box">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h1>Subscribe To Our Newsletter</h1>
						<p>Stay in touch with the latest news and releases</p>
					</div>
					<div class="col-lg-12">
						<form>
							<div class="row g-0 justify-content-center">
								<div class="col-md-4 col-sm-8 email">
									<input type="email" placeholder="Enter your email address" required>
								</div>
								<div class="col-md-2 col-sm-4 email-button">
									<!-- <input type="submit"  value="Subscribe"> -->
									<button type="submit">Subscribe</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- >>>>>>>>>>>>>>>>>>> Subscribe part end >>>>>>>>>>>>>>>>>>>-->
	<!-- >>>>>>>>>>>>>>>>>>> gallery part start >>>>>>>>>>>>>>>>>>>-->
	<section id="gallery">
		<div class="container-fluid">
			<div class="row">
				<div class="carousel-gallery">
					<div class="swiper-container">
						<div class="swiper-wrapper gallery-img">
							<div class="swiper-slide">
								<a href="/assets/images/cart_and_gallery/gallery1.jpg" data-fancybox="gallery">
									<div data-lightbox="gallery" class="image"
										style="background-image: url(/assets/images/cart_and_gallery/gallery1.jpg)">
										<div class="overlay">
											<em class="fa-solid fa-plus"></em>
										</div>
									</div>
								</a>
								<div class="gallery-overlay">
									<h4>
										CBD Glow Combo
									</h4>
								</div>
							</div>
							<div class="swiper-slide">
								<a href="/assets/images/cart_and_gallery/gallery2.jpg" data-fancybox="gallery">
									<div class="image"
										style="background-image: url(/assets/images/cart_and_gallery/gallery2.jpg)">
										<div class="overlay">
											<em class="fa-solid fa-plus"></em>
										</div>
									</div>
								</a>
								<div class="gallery-overlay">
									<h4>
										Skin Therapy Combo
									</h4>
								</div>
							</div>
							<div class="swiper-slide">
								<a href="/assets/images/cart_and_gallery/gallery3.jpg" data-fancybox="gallery">
									<div class="image"
										style="background-image: url(/assets/images/cart_and_gallery/gallery3.jpg)">
										<div class="overlay">
											<em class="fa-solid fa-plus"></em>
										</div>
									</div>
								</a>
								<div class="gallery-overlay">
									<h4>
										Acne Treating Serumo
									</h4>
								</div>
							</div>
							<div class="swiper-slide">
								<a href="/assets/images/cart_and_gallery/gallery4.jpg" data-fancybox="gallery">
									<div class="image"
										style="background-image: url(/assets/images/cart_and_gallery/gallery4.jpg)">
										<div class="overlay">
											<em class="fa-solid fa-plus"></em>
										</div>
									</div>
								</a>
								<div class="gallery-overlay">
									<h4>
										Hair Nourishing Oil
									</h4>
								</div>
							</div>
							<div class="swiper-slide">
								<a href="/assets/images/cart_and_gallery/gallery5.jpg" data-fancybox="gallery">
									<div class="image"
										style="background-image: url(/assets/images/cart_and_gallery/gallery5.jpg)">
										<div class="overlay">
											<em class="fa-solid fa-plus"></em>
										</div>
									</div>
								</a>
								<div class="gallery-overlay">
									<h4>
										Hemp Sun Grown
									</h4>
								</div>
							</div>
							<div class="swiper-slide">
								<a href="/assets/images/cart_and_gallery/gallery6.jpg" data-fancybox="gallery">
									<div class="image"
										style="background-image: url(/assets/images/cart_and_gallery/gallery6.jpg)">
										<div class="overlay">
											<em class="fa-solid fa-plus"></em>
										</div>
									</div>
								</a>
								<div class="gallery-overlay">
									<h4>
										CBD Infused Lotion
									</h4>
								</div>
							</div>
							<div class="swiper-slide">
								<a href="/assets/images/cart_and_gallery/gallery7.jpg" data-fancybox="gallery">
									<div class="image"
										style="background-image: url(/assets/images/cart_and_gallery/gallery7.jpg)">
										<div class="overlay">
											<em class="fa-solid fa-plus"></em>
										</div>
									</div>
								</a>
								<div class="gallery-overlay">
									<h4>
										CBD Face Cream
									</h4>
								</div>
							</div>
							<div class="swiper-slide">
								<a href="/assets/images/cart_and_gallery/gallery8.jpg" data-fancybox="gallery">
									<div class="image"
										style="background-image: url(/assets/images/cart_and_gallery/gallery8.jpg)">
										<div class="overlay">
											<em class="fa-solid fa-plus"></em>
										</div>
									</div>
								</a>
								<div class="gallery-overlay">
									<h4>
										Cannabis Face Cream
									</h4>
								</div>
							</div>
							<div class="swiper-slide">
								<a href="/assets/images/cart_and_gallery/gallery9.jpg" data-fancybox="gallery">
									<div class="image"
										style="background-image: url(/assets/images/cart_and_gallery/gallery9.jpg)">
										<div class="overlay">
											<em class="fa-solid fa-plus"></em>
										</div>
									</div>
								</a>
								<div class="gallery-overlay">
									<h4>
										CBD Infused Lotion
									</h4>
								</div>
							</div>
						</div>
						<div class="slider__prev"><i class="fa-solid fa-chevron-left"></i></div>
						<div class="slider__next"><i class="fa-solid fa-chevron-right"></i></div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- >>>>>>>>>>>>>>>>>>> gallery part end >>>>>>>>>>>>>>>>>>>-->
	<!-- >>>>>>>>>>>>>>>>>>> Footer part start >>>>>>>>>>>>>>>>>>>-->
	
<?php
require_once LAYOUT.'/footer.php';
?>