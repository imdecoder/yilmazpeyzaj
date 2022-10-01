<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">

	<!-- Responsive Settings -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<title>Yılmaz Peyzaj</title>
	<meta name="robots" content="noindex, nofollow">

	<!-- Stylesheets -->
	<link href="{{ asset_url('client/css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset_url('client/css/style.css') }}" rel="stylesheet">

	<!-- Responsive File -->
	<link href="{{ asset_url('client/css/responsive.css') }}" rel="stylesheet">
	<link rel="shortcut icon" href="{{ asset_url('client/images/favicon.png') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset_url('client/images/favicon.png') }}" type="image/x-icon">
	
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="{{ asset_url('client/js/respond.js') }}"></script><![endif]-->
</head>
<body>
	<div class="page-wrapper">
		<section class="error-section">
			<div class="image-layer" style="background-image: url({{ asset_url('client/images/background/bg-404.jpg') }})"></div>
			<div class="auto-container">
				<div class="error-image">
					<img src="{{ asset_url('client/images/resource/404-image.png') }}" alt="" title="">
				</div>
				<div class="content-box">
					<h4>
						Hata! Sayfa bulunamadı.
					</h4>
					<div class="text">
						Bu adreste hiçbir şey bulunamadı gibi görünüyor.
					</div>
					<div class="link-box">
						<a href="{{ site_url() }}" class="theme-btn btn-style-four">
							<span class="btn-title">
								Anasayfaya Git
								<i class="arrow flaticon-play-button-1"></i>
							</span>
						</a>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!--End pagewrapper-->
	<script src="{{ asset_url('client/js/jquery.js') }}"></script>
	<script src="{{ asset_url('client/js/popper.min.js') }}"></script>
	<script src="{{ asset_url('client/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset_url('client/js/appear.js') }}"></script>
	<script src="{{ asset_url('client/js/wow.js') }}"></script>
	<script src="{{ asset_url('client/js/custom-script.js') }}"></script>
</body>
</html>
