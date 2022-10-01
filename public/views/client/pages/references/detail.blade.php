@extends('client.layouts.main')

@section('content')

	<!-- Banner Section -->
	<section class="page-banner">
		<div class="image-layer" style="background-image:url({{ asset_url('client/images/background/banner-image-1.jpg') }})"></div>
		<div class="banner-bottom-pattern"></div>
		<div class="banner-inner">
			<div class="auto-container">
				<div class="inner-container clearfix">
					<h1>
						Referans Adı
					</h1>
					<div class="page-nav">
						<ul class="bread-crumb clearfix">
							<li>
								<a href="{{ site_url() }}">
									<span class="fa fa-home"></span>
								</a>
							</li>
							<li>
								<a href="{{ site_url('referanslar') }}">
									Referanslar
								</a>
							</li>
							<li class="active">
								Referans Adı
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Banner Section -->

	<!-- Project Single Section -->
	<div class="project-single">

		<!-- Details -->
		<section class="project-details">
			<div class="auto-container">
				<div class="main-image">
					<a href="{{ asset_url('client/images/gallery/53.jpg') }}" class="lightbox-image" data-fancybox="gallery">
						<img src="{{ asset_url('client/images/gallery/53.jpg') }}" alt="" title="">
					</a>
				</div>
				<div class="upper-box">
					<div class="row clearfix">
						<div class="title-col col-lg-4 col-md-12 col-sm-12">
							<h3>
								Here to Know
								<br>
								About Our Project
							</h3>
						</div>
						<div class="text-col col-lg-8 col-md-12 col-sm-12">
							<div class="text">
								<p>
									Indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain trouble that are bound Demoralized by the charms of pleasure of the moment so blinded desire our power of choice is untrammelled has when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and and owing to the claims of duty or the obligations.
								</p>
								<p>
									Foresee the pain trouble that are bound demoralized by the charms of pleasure the moment blinded desire our power of choice is untrammelled and when nothing prevents.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="info">
					<div class="row clearfix">
						
						<!-- Block -->
						<div class="block col-xl-2 col-lg-4 col-md-4 col-sm-6">
							<div class="inner">
								<div class="icon-box">
									<span class="flaticon-marketing"></span>
								</div>
								<h6>
									Client
								</h6>
								<div class="sub-text">
									Shwan
									<br>
									Communities
								</div>
							</div>
						</div>

						<!-- Block -->
						<div class="block col-xl-2 col-lg-4 col-md-4 col-sm-6">
							<div class="inner">
								<div class="icon-box">
									<span class="flaticon-location-1"></span>
								</div>
								<h6>
									Location
								</h6>
								<div class="sub-text">
									Newyork
									<br>
									United States
								</div>
							</div>
						</div>

						<!-- Block -->
						<div class="block col-xl-2 col-lg-4 col-md-4 col-sm-6">
							<div class="inner">
								<div class="icon-box">
									<span class="flaticon-trees"></span>
								</div>
								<h6>
									Services
								</h6>
								<div class="sub-text">
									Landscape
									<br>
									Design
								</div>
							</div>
						</div>

						<!-- Block -->
						<div class="block col-xl-2 col-lg-4 col-md-4 col-sm-6">
							<div class="inner">
								<div class="icon-box">
									<span class="flaticon-home-2"></span>
								</div>
								<h6>
									Property
								</h6>
								<div class="sub-text">
									Luxury
									<br>
									Apartment
								</div>
							</div>
						</div>

						<!-- Block -->
						<div class="block col-xl-2 col-lg-4 col-md-4 col-sm-6">
							<div class="inner">
								<div class="icon-box">
									<span class="flaticon-calendar-1"></span>
								</div>
								<h6>
									Date
								</h6>
								<div class="sub-text">
									14 Feb to
									<br>
									26 Feb, 2020
								</div>
							</div>
						</div>

						<!-- Block -->
						<div class="block col-xl-2 col-lg-4 col-md-4 col-sm-6">
							<div class="inner">
								<div class="icon-box">
									<span class="flaticon-sticker"></span>
								</div>
								<h6>
									Price
								</h6>
								<div class="sub-text">
									8500 <br>US Dollar
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Outline -->
		<section class="project-outline">
			<div class="auto-container">
				<div class="title">
					<h3>
						Outline Of Project
					</h3>
				</div>
				<div class="row clearfix">

					<!-- Outline Block -->
					<div class="outline-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<img src="{{ asset_url('client/images/resource/featured-image-13.jpg') }}" alt="" title="">
							</div>
							<div class="hover-box">
								<div class="hvr-content">
									<h5>
										<a href="#">
											Before Work
										</a>
									</h5>
									<div class="text">
										These cases are perfectly simple and easy to distinguish.
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Outline Block -->
					<div class="outline-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<img src="{{ asset_url('client/images/resource/featured-image-14.jpg') }}" alt="" title="">
							</div>
							<div class="hover-box">
								<div class="hvr-content">
									<h5>
										<a href="#">
											During Work
										</a>
									</h5>
									<div class="text">
										These cases are perfectly simple and easy to distinguish.
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Outline Block -->
					<div class="outline-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<img src="{{ asset_url('client/images/resource/featured-image-15.jpg') }}" alt="" title="">
							</div>
							<div class="hover-box">
								<div class="hvr-content">
									<h5>
										<a href="#">
											After Work
										</a>
									</h5>
									<div class="text">
										These cases are perfectly simple and easy to distinguish.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Feedback -->
		<section class="project-feedback">
			<div class="image-layer" style="background-image: url({{ asset_url('client/images/background/quote-bg.jpg') }})"></div>
			<div class="auto-container">
				<div class="inner">
					<div class="quote">
						<div class="quote-icon">
							<span></span>
						</div>
						<h4>
							Get morethan we expected
						</h4>
						<div class="quote-text">
							Thank you for our beautiful new front! Your crew was outstanding & very professional!.
						</div>
						<div class="rating">
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
						<div class="info">
							<span class="name">Louie Daxon,</span>
							<span class="area">New Orleans, usa</span>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Related -->
		<section class="related-project">
			<div class="auto-container">
				<div class="title">
					<h3>
						Related Projects
					</h3>
				</div>
				<div class="row clearfix">

					<!-- Gallery Item -->
					<div class="gallery-item-three col-xl-3 col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<img src="{{ asset_url('client/images/gallery/25.jpg') }}" alt="" title="">
							</div>
							<div class="link-box">
								<a href="#">
									<span class="icon flaticon-right-arrow-1"></span>
								</a>
							</div>
							<div class="hover-box">
								<div class="hvr-content">
									<div class="cat">
										<a href="#">
											Lawn Care
										</a>
									</div>
									<h5>
										<a href="#">
											Sprinkler Irrigation
										</a>
									</h5>
								</div>
							</div>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item-three col-xl-3 col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<img src="{{ asset_url('client/images/gallery/26.jpg') }}" alt="" title="">
							</div>
							<div class="link-box">
								<a href="#">
									<span class="icon flaticon-right-arrow-1"></span>
								</a>
							</div>
							<div class="hover-box">
								<div class="hvr-content">
									<div class="cat">
										<a href="#">
											Garden Care
										</a>
									</div>
									<h5>
										<a href="#">
											Communual Garden
										</a>
									</h5>
								</div>
							</div>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item-three col-xl-3 col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<img src="{{ asset_url('client/images/gallery/27.jpg') }}" alt="" title="">
							</div>
							<div class="link-box">
								<a href="#">
									<span class="icon flaticon-right-arrow-1"></span>
								</a>
							</div>
							<div class="hover-box">
								<div class="hvr-content">
									<div class="cat">
										<a href="#">
											Pathways
										</a>
									</div>
									<h5>
										<a href="#">
											Rubbish Removal
										</a>
									</h5>
								</div>
							</div>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item-three col-xl-3 col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<img src="{{ asset_url('client/images/gallery/28.jpg') }}" alt="" title="">
							</div>
							<div class="link-box">
								<a href="#">
									<span class="icon flaticon-right-arrow-1"></span>
								</a>
							</div>
							<div class="hover-box">
								<div class="hvr-content">
									<div class="cat">
										<a href="#">
											Pathways
										</a>
									</div>
									<h5>
										<a href="#">
											Rubbish Removal
										</a>
									</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

@endsection
