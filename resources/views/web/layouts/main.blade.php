<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">

	<!-- Responsive Settings -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<title>@yield('title')</title>
	<meta name="description" content="@yield('description')">

	<!-- Stylesheets -->
	<link href="{{ asset('assets/web/css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/web/css/style.css') }}" rel="stylesheet">

	<!-- Responsive File -->
	<link href="{{ asset('assets/web/css/responsive.css') }}" rel="stylesheet">

	<link rel="shortcut icon" href="{{ asset('assets/web/images/favicon.png') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset('assets/web/images/favicon.png') }}" type="image/x-icon">

	<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="{{ asset('assets/web/js/respond.js') }}"></script><![endif]-->

	@livewireStyles
</head>
<body>
	<div class="page-wrapper">

		<livewire:web.layouts.main.preloader />

		<!-- Main Header -->
		<header class="main-header">
			<div class="header-top">
				<div class="auto-container">
					<div class="inner clearfix">
						<div class="top-left">
							<div class="tip-link"><a href="#"><span class="icon flaticon-play-button-1"></span> Lawn Maintenance Tips</a></div>
							<div class="social-links">
								<ul class="clearfix">
									<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
									<li><a href="#"><span class="fab fa-twitter"></span></a></li>
									<li><a href="#"><span class="fab fa-google"></span></a></li>
									<li><a href="#"><span class="fab fa-youtube"></span></a></li>
								</ul>
							</div>
						</div>
						<div class="top-right">
							<div class="top-links">
								<ul class="clearfix">
									<li><span class="icon flaticon-fast"></span>Mon-Fri: 9am to 7pm</li>
									<li><span class="icon flaticon-placeholder-3"></span>53 Garden Street LA, USA</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Header Upper -->
			<div class="header-upper">
				<div class="auto-container">
					<div class="inner-container clearfix">

						<!--Logo-->
						<div class="logo-box">
							<div class="logo"><a href="index.html" title="Pruners - Gardening and Landscaping HTML Template"><img src="{{ asset('assets/web/images/logo.png') }}" alt="Pruners - Gardening and Landscaping HTML Template" title="Pruners - Gardening and Landscaping HTML Template"></a></div>
						</div>
						<div class="other-links clearfix">
							<div class="info">
								<div class="info-icon"><span class="flaticon-smartphone"></span></div>
								<div class="phone"><a href="tel:+56789012345">(+5) 678 90 12 345</a></div>
								<div class="call">Get Call Back <span class="icon flaticon-play-button-1"></span></div>
							</div>
							<div class="search-box">
								<form method="post" action="contact.html">
									<div class="form-group">
										<div class="field-box">
											<input type="search" name="search" value="" placeholder="Keyword ..." required="">
										</div>
										<div class="btn-box"><button type="submit" class="search-btn"><span class="flaticon-search-1"></span></button></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--End Header Upper-->

			<!--Header Lower-->
			<div class="header-lower">
				<div class="auto-container">
					<div class="inner clearfix">
						<div class="nav-outer clearfix">

							<!--Mobile Navigation Toggler-->
							<div class="mobile-nav-toggler">
								<span class="icon flaticon-menu-1"></span>
							</div>

							<!-- Main Menu -->
							<nav class="main-menu navbar-expand-md navbar-light">
								<div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li class="current">
											<a href="{{ route('web.home') }}">
												Anasayfa
											</a>
										</li>
										<li>
											<a href="about.html">
												About
											</a>
										</li>
										<li  class="dropdown">
											<a href="services.html">
												Services
											</a>
											<ul>
												<li><a href="services.html">All Services</a></li>
												<li><a href="spring-service.html">Spring Cleanup</a></li>
												<li><a href="landscape-service.html">Landscape Installation</a></li>
												<li><a href="garden-service.html">Garden Care</a></li>
												<li><a href="water-service.html">Water Fountain</a></li>
												<li><a href="hardscaping-service.html">Hardscaping</a></li>
												<li><a href="snow-removal-service.html">Snow & Ice Removal</a></li>
											</ul>
										</li>
										<li class="dropdown"><a href="gallery-grid-1.html">Projects</a>
											<ul>
												<li class="dropdown"><a href="gallery-grid-1.html">Grid View</a>
													<ul>
														<li><a href="gallery-grid-1.html">3 Columns</a></li>
														<li><a href="gallery-grid-2.html">4 Columns</a></li>
													</ul>
												</li>
												<li class="dropdown"><a href="gallery-wide-1.html">Wide View</a>
													<ul>
														<li><a href="gallery-wide-1.html">4 Columns</a></li>
														<li><a href="gallery-wide-2.html">5 Columns</a></li>
														<li><a href="gallery-wide-3.html">Masonry</a></li>
													</ul>
												</li>
												<li><a href="gallery-masonry.html">Masonry</a></li>
												<li><a href="project-single.html">Project Details</a></li>
											</ul>
										</li>
										<li class="dropdown"><a href="blog-grid-1.html">Blog</a>
											<ul>
												<li><a href="blog-grid-1.html">Grid 2 Columns</a></li>
												<li><a href="blog-grid-2.html">Grid 3 Columns</a></li>
												<li><a href="blog-list.html">List View</a></li>
												<li><a href="blog-single.html">Single Post</a></li>
											</ul>
										</li>
										<li class="dropdown"><a href="appointment.html">Pages</a>
											<ul>
												<li><a href="appointment.html">Appointments</a></li>
												<li><a href="coming-soon.html">Coming Soon</a></li>
												<li><a href="faq.html">Faq’s</a></li>
												<li><a href="reviews.html">Reviews</a></li>
												<li><a href="error-page.html">404</a></li>
												<li class="dropdown"><a href="shop.html">Shop</a>
													<ul>
														<li><a href="shop.html">Products</a></li>
														<li><a href="shop-single.html">Single Product</a></li>
														<li><a href="shopping-cart.html">Shopping Cart</a></li>
														<li><a href="checkout.html">Checkout</a></li>
														<li><a href="my-account.html">My Account</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</div>
							</nav>
						</div>

						<div class="more-links clearfix">
							<div class="cart-btn"><a href="shopping-cart.html"><span class="flaticon-shopping-bag-2"></span></a></div>
							<div class="estimate-btn"><a href="contact.html"><span class="icon flaticon-business-1"></span>Free Estimate <span class="arrow flaticon-play-button-1"></span></a></div>
						</div>
					</div>
				</div>
			</div>
			<!--End Header Lower-->

			<!-- Sticky Header  -->
			<div class="sticky-header">
				<div class="auto-container clearfix">
					<!--Logo-->
					<div class="logo pull-left">
						<a href="index.html" title=""><img src="{{ asset('assets/web/images/sticky-logo.png') }}" alt="" title=""></a>
					</div>
					<!--Right Col-->
					<div class="pull-right clearfix">
						<!-- Main Menu -->
						<nav class="main-menu clearfix">
							<!--Keep This Empty / Menu will come through Javascript-->
						</nav><!-- Main Menu End-->

						<!--Contact Btn-->
						<div class="contact-link">
							<a href="contact.html" class="theme-btn btn-style-three"><span class="btn-title">Get Quote <i class="arrow flaticon-play-button-1"></i></span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- End Sticky Menu -->

			<!-- Mobile Menu  -->
			<div class="mobile-menu">
				<div class="menu-backdrop"></div>
				<div class="close-btn"><span class="icon flaticon-letter-x"></span></div>

				<nav class="menu-box">
					<div class="nav-logo"><a href="index.html"><img src="{{ asset('assets/web/images/nav-logo.png') }}" alt="" title=""></a></div>
					<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
					<!--Social Links-->
					<div class="social-links">
						<ul class="clearfix">
							<li><a href="#"><span class="fab fa-twitter"></span></a></li>
							<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
							<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
							<li><a href="#"><span class="fab fa-instagram"></span></a></li>
							<li><a href="#"><span class="fab fa-youtube"></span></a></li>
						</ul>
					</div>
				</nav>
			</div><!-- End Mobile Menu -->
		</header>
		<!-- End Main Header -->

		@yield('content')

		<!-- Main Footer -->
		<footer class="main-footer">

			<!-- Upper Section -->
			<div class="upper-section">
				<div class="left-image"><img src="{{ asset('assets/web/images/resource/footer-left-image.png') }}" alt=""></div>
				<div class="right-image"><img src="{{ asset('assets/web/images/resource/footer-right-image.png') }}" alt=""></div>

				<div class="auto-container">

					<div class="upper">
						<div class="inner">
							<div class="logo"><a href="#"><img src="{{ asset('assets/web/images/footer-logo.png') }}" alt=""></a></div>
							<div class="clearfix">
								<div class="text-box">
									<div class="text">Pruners is established in the year of 2001 by Lee Rother , With operations throughout North America ... <a href="#" class="theme-btn">More About Us <i class="arrow flaticon-play-button-1"></i></a></div>
								</div>
								<div class="social">
									<ul class="clearfix">
										<li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
										<li><a href="#"><span class="fab fa-twitter"></span></a></li>
										<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<!--Widgets-->
					<div class="widgets-section">
						<div class="row clearfix">

							<!--Column-->
							<div class="column col-xl-3 col-lg-4 col-md-12 col-sm-12">
								<div class="footer-widget info-widget">
									<div class="widget-title">
										<h4>Get In Touch</h4>
									</div>
									<ul class="info">
										<li class="address">PO Box 515381 <br>Pruners, Garden Street <br>LA 90029 USA</li>
										<li class="timing">
											Opening Hrs: <br>Mon-Sat: 9am to 7pm
										</li>
										<li>
											<span class="phone"><a href="tel:+56789012345">(+5) 678 90 12 345</a></span><br>
											<span class="email"><a href="mailto:service@Pruners.com">service@Pruners.com</a></span>
										</li>
									</ul>
								</div>
							</div>

							<!--Column-->
							<div class="column col-xl-6 col-lg-4 col-md-12 col-sm-12">
								<div class="footer-widget services-widget">
									<div class="widget-title">
										<h4>Main Services</h4>
									</div>
									<div class="widget-content">
										<div class="row clearfix">
											<div class="col-xl-6 col-lg-12 col-md-6 col-sm-12">
												<ul>
													<li><a href="#"><span class="icon flaticon-hedge"></span><span class="txt">Spring Cleanup</span><span class="sub-txt">Details <i class="arrow flaticon-play-button-1"></i></span></a></li>
													<li><a href="#"><span class="icon flaticon-digging-1"></span><span class="txt">Plants Planting</span><span class="sub-txt">Details <i class="arrow flaticon-play-button-1"></i></span></a></li>
													<li><a href="#"><span class="icon flaticon-sprinkler"></span><span class="txt">Water Fountain</span><span class="sub-txt">Details <i class="arrow flaticon-play-button-1"></i></span></a></li>
												</ul>
											</div>
											<div class="col-xl-6 col-lg-12 col-md-6 col-sm-12">
												<ul>
													<li><a href="#"><span class="icon flaticon-painting"></span><span class="txt">Hardscaping</span><span class="sub-txt">Details <i class="arrow flaticon-play-button-1"></i></span></a></li>
													<li><a href="#"><span class="icon flaticon-wheelbarrow"></span><span class="txt">Garden Care</span><span class="sub-txt">Details <i class="arrow flaticon-play-button-1"></i></span></a></li>
													<li><a href="#"><span class="icon flaticon-terrain"></span><span class="txt">Soil Preparation</span><span class="sub-txt">Details <i class="arrow flaticon-play-button-1"></i></span></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!--Column-->
							<div class="column col-xl-3 col-lg-4 col-md-12 col-sm-12">
								<div class="footer-widget links-widget">
									<div class="widget-title">
										<h4>Quick Links</h4>
									</div>
									<div class="widget-content">
										<ul class="links">
											<li><a href="#">About Company</a></li>
											<li><a href="#">Projects</a></li>
											<li><a href="#">Testimonials</a></li>
											<li><a href="#">News & Updates</a></li>
											<li><a href="#">Working Process</a></li>
											<li><a href="#">Contact Us</a></li>
										</ul>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="footer-widget newsletter-widget">
						<!--Newsletter-->
						<div class="newsletter-form">
							<form method="post" action="contact.html">
								<div class="form-group clearfix">
									<input type="text" name="name" value="" placeholder="Your Name *" required>
									<input type="email" name="email" value="" placeholder="Email Address *" required>
									<button type="submit" class="theme-btn btn-style-three"><span class="btn-title">Subscribe Us <i class="arrow flaticon-play-button-1"></i></span></button>
								</div>
							</form>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="auto-container">
					<div class="inner clearfix">
						<div class="copyright">Copyright &copy; 2020 All Rights Reserved by <a href="#">Pruners.</a></div>
						<div class="bottom-links">
							<ul class="clearfix">
								<li><a href="#">Terms of Service</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Sitemap</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!--End pagewrapper-->

	<!-- Scroll to top -->
	<div class="scroll-to-top scroll-to-target" data-target="html">
		<span class="flaticon-arrows"></span>
	</div>

	<script src="{{ asset('assets/web/js/jquery.js') }}"></script>
	<script src="{{ asset('assets/web/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/web/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/web/js/jquery-ui.js') }}"></script>
	<script src="{{ asset('assets/web/js/jquery.fancybox.js') }}"></script>
	<script src="{{ asset('assets/web/js/owl.js') }}"></script>
	<script src="{{ asset('assets/web/js/scrollbar.js') }}"></script>
	<script src="{{ asset('assets/web/js/appear.js') }}"></script>
	<script src="{{ asset('assets/web/js/wow.js') }}"></script>
	<script src="{{ asset('assets/web/js/custom-script.js') }}"></script>

	@livewireScripts
</body>
</html>
