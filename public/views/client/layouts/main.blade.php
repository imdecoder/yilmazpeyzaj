<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">

	<!-- Responsive Settings -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<title>@yield('title', 'Yılmaz Peyzaj')</title>
	<meta name="description" content="@yield('description')">

	<!-- Stylesheets -->
	<link href="{{ asset_url('client/css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset_url('client/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset_url('client/css/custom.css') }}" rel="stylesheet">

	@yield('styles')

	<!-- Responsive File -->
	<link href="{{ asset_url('client/css/responsive.css') }}" rel="stylesheet">
	<link rel="shortcut icon" href="{{ asset_url('client/images/favicon.png') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset_url('client/images/favicon.png') }}" type="image/x-icon">

	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="{{ asset_url('client/js/respond.js') }}"></script><![endif]-->
</head>
<body>
	<div class="page-wrapper">

		<!-- Preloader -->
		<div class="preloader">
			<div class="icon"></div>
		</div>

		<!-- Main Header -->
		<header class="main-header">
			
			<!-- Header Top -->
			@include('client.layouts.partials.header-top')
			<!-- End Header Top -->

			<!-- Header Upper -->
			@include('client.layouts.partials.header-upper')
			<!-- End Header Upper -->

			<!-- Header Lower -->
			@include('client.layouts.partials.header-lower')
			<!-- End Header Lower -->

			<!-- Sticky Header -->
			@include('client.layouts.partials.sticky-menu')
			<!-- End Sticky Menu -->

			<!-- Mobile Menu  -->
			@include('client.layouts.partials.mobile-menu')
			<!-- End Mobile Menu -->

		</header>
		<!-- End Main Header -->

		@yield('content')

		<!-- Call to Action -->
		@include('client.layouts.partials.call-to-action')
		<!-- End Call to Action -->

		<!-- Main Footer -->
		<footer class="main-footer">

			<!-- Upper Section -->
			<div class="upper-section">
				<div class="left-image">
					<img src="{{ asset_url('client/images/resource/footer-left-image.png') }}" alt="">
				</div>
				<div class="right-image">
					<img src="{{ asset_url('client/images/resource/footer-right-image.png') }}" alt="">
				</div>
				<div class="auto-container">
					<div class="upper">
						<div class="inner">
							<div class="logo">
								<a href="{{ site_url() }}">
									<img src="{{ asset_url('client/images/footer-logo.png') }}" alt="Yılmaz Peyzaj">
								</a>
							</div>
							<div class="clearfix">
								<div class="text-box">
									<div class="text">
										Hakkımızda kısa açıklama...
										<a href="{{ site_url('hakkimizda') }}" class="theme-btn">
											Hakkımızda Daha Fazlası
											<i class="arrow flaticon-play-button-1"></i>
										</a>
									</div>
								</div>
								<div class="social">
									<ul class="clearfix">
										<li>
											<a href="#">
												<span class="fab fa-facebook-f"></span>
											</a>
										</li>
										<li>
											<a href="https://www.instagram.com/yilmazpeyzajbotanik" target="_blank">
												<span class="fab fa-instagram"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fab fa-twitter"></span>
											</a>
										</li>
										<li>
											<a href="https://www.youtube.com/c/muharremy%C4%B1lmazdrone" target="_blank">
												<span class="fab fa-youtube"></span>
											</a>
										</li>										
									</ul>
								</div>
							</div>
						</div>
					</div>

					<!-- Widgets -->
					@include('client.layouts.partials.footer-widgets')
					<!-- End Widgets -->

					<div class="footer-widget newsletter-widget">
						
						<!-- Newsletter -->
						@include('client.layouts.partials.footer-newsletter')
						<!-- End Newsletter -->

					</div>
				</div>
			</div>

			<!-- Footer Bottom -->
			@include('client.layouts.partials.footer-bottom')
			<!-- End Footer Bottom -->

		</footer>
	</div>
	<!-- End pagewrapper -->

	<!-- Scroll to top -->
	<div class="scroll-to-top scroll-to-target" data-target="html">
		<span class="flaticon-arrows"></span>
	</div>

	<script src="{{ asset_url('client/js/jquery.js') }}"></script>
	<script src="{{ asset_url('client/js/popper.min.js') }}"></script>
	<script src="{{ asset_url('client/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset_url('client/js/jquery-ui.js') }}"></script>
	<script src="{{ asset_url('client/js/jquery.fancybox.js') }}"></script>
	<script src="{{ asset_url('client/js/owl.js') }}"></script>
	<script src="{{ asset_url('client/js/scrollbar.js') }}"></script>
	<script src="{{ asset_url('client/js/appear.js') }}"></script>
	<script src="{{ asset_url('client/js/wow.js') }}"></script>

	@yield('scripts')

	<script src="{{ asset_url('client/js/custom-script.js') }}"></script>
</body>
</html>
