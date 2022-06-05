<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">

	@include('web.layouts.static.responsive')

	<title>@yield('title')</title>
	<meta name="description" content="@yield('description')">

	@include('web.layouts.static.stylesheets')

	@include('web.layouts.static.favicon')

	@include('web.layouts.static.ie9')

	@livewireStyles
</head>
<body>
	<div class="page-wrapper">

		<livewire:web.layouts.preloader />

		<!-- Main Header -->
		<header class="main-header">

			<livewire:web.layouts.header-top />

			<livewire:web.layouts.header-upper />

			<livewire:web.layouts.header-lower />

			<livewire:web.layouts.sticky-header />

			<!-- Mobile Menu  -->
			<div class="mobile-menu">
				<div class="menu-backdrop"></div>
				<div class="close-btn"><span class="icon flaticon-letter-x"></span></div>

				<nav class="menu-box">
					<div class="nav-logo">
						<a href="index.html">
							<img src="{{ asset('assets/web/images/nav-logo.png') }}" alt="" title="">
						</a>
					</div>
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
			</div>
			<!-- End Mobile Menu -->

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
