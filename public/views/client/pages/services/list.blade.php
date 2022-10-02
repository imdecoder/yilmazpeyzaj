@extends('client.layouts.main')

@section('title', 'Hizmetler - Yılmaz Peyzaj')
@section('description', 'Hizmetler.')

@section('content')

	<!-- Banner Section -->
	<section class="page-banner">
		<div class="image-layer" style="background-image:url({{ asset_url('client/images/background/banner-image-1.jpg') }})"></div>
		<div class="banner-bottom-pattern"></div>
		<div class="banner-inner">
			<div class="auto-container">
				<div class="inner-container clearfix">
					<h1>Services</h1>
					<div class="page-nav">
						<ul class="bread-crumb clearfix">
							<li><a href="index.html"><span class="fa fa-home"></span></a></li>
							<li class="active">Services</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Banner Section -->
	<!--Main Services Section-->
	<section class="main-services">
		<div class="auto-container">
			<div class="row clearfix">
				<!--Service block-->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="upper">
							<div class="image-box">
								<img src="{{ asset_url('client/images/resource/featured-image-9.jpg') }}" alt="" title="">
							</div>
							<div class="hvr-icon"><span class="flaticon-hedge"></span></div>
						</div>
						<div class="lower">
							<div class="icon-right"><span class="flaticon-hedge"></span></div>
							<h5><a href="spring-service.html">Spring Cleanup</a></h5>
							<div class="text">Indignation and dislike men who are so beguiled demoralized ...</div>
							<div class="more-link"><a href="spring-service.html">Read More <i class="icon fa fa-caret-right"></i></a></div>
						</div>
					</div>
				</div>
				<!--Service block-->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="upper">
							<div class="image-box">
								<img src="{{ asset_url('client/images/resource/featured-image-10.jpg') }}" alt="" title="">
							</div>
							<div class="hvr-icon"><span class="flaticon-wheelbarrow"></span></div>
						</div>
						<div class="lower">
							<div class="icon-right"><span class="flaticon-wheelbarrow"></span></div>
							<h5><a href="garden-service.html">Garden Care</a></h5>
							<div class="text">Frequently occur that pleasures have to berepudiated & accepted ...</div>
							<div class="more-link"><a href="garden-service.html">Read More <i class="icon fa fa-caret-right"></i></a></div>
						</div>
					</div>
				</div>
				<!--Service block-->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="upper">
							<div class="image-box">
								<img src="{{ asset_url('client/images/resource/featured-image-11.jpg') }}" alt="" title="">
							</div>
							<div class="hvr-icon"><span class="flaticon-sprinkler"></span></div>
						</div>
						<div class="lower">
							<div class="icon-right"><span class="flaticon-sprinkler"></span></div>
							<h5><a href="water-service.html">Water Fountain</a></h5>
							<div class="text">Duty through weakness of will which is the same as saying through ...</div>
							<div class="more-link"><a href="water-service.html">Read More <i class="icon fa fa-caret-right"></i></a></div>
						</div>
					</div>
				</div>
				<!--Service block-->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="upper">
							<div class="image-box">
								<img src="{{ asset_url('client/images/resource/featured-image-16.jpg') }}" alt="" title="">
							</div>
							<div class="hvr-icon"><span class="flaticon-garden"></span></div>
						</div>
						<div class="lower">
							<div class="icon-right"><span class="flaticon-garden"></span></div>
							<h5><a href="landscape-service.html">Landscape Installation</a></h5>
							<div class="text">Indignation and dislike men who are so beguiled demoralized ...</div>
							<div class="more-link"><a href="landscape-service.html">Read More <i class="icon fa fa-caret-right"></i></a></div>
						</div>
					</div>
				</div>
				<!--Service block-->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="upper">
							<div class="image-box">
								<img src="{{ asset_url('client/images/resource/featured-image-17.jpg') }}" alt="" title="">
							</div>
							<div class="hvr-icon"><span class="flaticon-brickwall"></span></div>
						</div>
						<div class="lower">
							<div class="icon-right"><span class="flaticon-brickwall"></span></div>
							<h5><a href="hardscaping-service.html">Hardscaping</a></h5>
							<div class="text">Frequently occur that pleasures have to berepudiated & accepted ...</div>
							<div class="more-link"><a href="hardscaping-service.html">Read More <i class="icon fa fa-caret-right"></i></a></div>
						</div>
					</div>
				</div>
				<!--Service block-->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="upper">
							<div class="image-box">
								<img src="{{ asset_url('client/images/resource/featured-image-18.jpg') }}" alt="" title="">
							</div>
							<div class="hvr-icon"><span class="flaticon-snowflake"></span></div>
						</div>
						<div class="lower">
							<div class="icon-right"><span class="flaticon-snowflake"></span></div>
							<h5><a href="snow-removal-service.html">Snow & Ice Removal</a></h5>
							<div class="text">Duty through weakness of will which is the same as saying through ...</div>
							<div class="more-link"><a href="snow-removal-service.html">Read More <i class="icon fa fa-caret-right"></i></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
