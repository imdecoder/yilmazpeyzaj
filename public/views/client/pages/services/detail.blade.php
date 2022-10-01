@extends('client.layouts.main')

@section('content')

	<!-- Banner Section -->
	<section class="page-banner">
		<div class="image-layer" style="background-image:url({{ asset_url('client/images/background/banner-image-1.jpg') }})"></div>
		<div class="banner-bottom-pattern"></div>
		<div class="banner-inner">
			<div class="auto-container">
				<div class="inner-container clearfix">
					<h1>Landscape Installation</h1>
					<div class="page-nav">
						<ul class="bread-crumb clearfix">
							<li><a href="index.html"><span class="fa fa-home"></span></a></li>
							<li><a href="services.html">Hizmetler</a></li>
							<li class="active">Hizmet Adı</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Banner Section -->
	<div class="sidebar-page-container services-page">
		<div class="auto-container">
			<div class="row clearfix">
				<!--Content Side-->
				<div class="content-side col-lg-8 col-md-12 col-sm-12">
					<div class="service-details">
						<div class="sec-title">
							<div class="title-icon"><span class="icon"><img src="{{ asset_url('client/images/icons/leaf-two.png') }}" alt="" title=""></span></div>
							<div class="subtitle">Service Details</div>
							<h2>Landscape Installation</h2>
						</div>
						<div class="upper-content">
							<div class="big-text">We care about your Landscape Installation project as much as you do and we'll do everything. </div>
							<div class="text">
								<p>Must explain to you how all this mistaken idea of denouncing pleasure and praisings pain was born and we will give you a completed accounts off the system, and expound that sed actualy teachings laborious physical exercise therefore always holds.</p>
								<p>Mistaken idea of denouncing pleasure and praisings pain was born and we will give you completed accounts off the system and expound except to obtain some advantage from it.</p>
							</div>
							<div class="main-image">
								<img src="{{ asset_url('client/images/resource/featured-image-19.jpg') }}" alt="">
							</div>
							<div class="row clearfix">
								<div class="feature-block col-lg-6 col-md-6 col-sm-12">
									<div class="inner">
										<div class="over">
											<div class="icon-box">
												<span class="flap"></span>
												<span class="icon flaticon-eco"></span>
											</div>
											<h5>Benefits</h5>
											<div class="text">Indignation & dislike men who are so that our therefore;</div>
										</div>
										<div class="lower-text text">
											<ul>
												<li>Grass & Trees Provide Cooler Temperatures</li>
												<li>Good for the Air and Water</li>
												<li>Outdoor Living Areas Improve Quality of Life</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="feature-block col-lg-6 col-md-6 col-sm-12">
									<div class="inner">
										<div class="over">
											<div class="icon-box">
												<span class="flap"></span>
												<span class="icon flaticon-challenges"></span>
											</div>
											<h5>Challenges</h5>
											<div class="text">Have to be repudiated & accepted holds in these matters;</div>
										</div>
										<div class="lower-text text">
											<ul>
												<li>It’s Reduces the Use of Natural Resources</li>
												<li>Water Features Make One-of-a-Kind</li>
												<li>Landscapes Offer Large Economic Benefits</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="process">
								<div class="row clearfix">
									<div class="block col-lg-4 col-md-4 col-sm-12">
										<div class="inner">
											<h4>Consultation </h4>
											<div class="text">Consult with our experts to get catchy design.</div>
											<div class="count"><span>01</span></div>
										</div>
									</div>
									<div class="block col-lg-4 col-md-4 col-sm-12">
										<div class="inner">
											<h4>Get Your Plan </h4>
											<div class="text">Get your final plan which is going to work.</div>
											<div class="count"><span>02</span></div>
										</div>
									</div>
									<div class="block col-lg-4 col-md-4 col-sm-12">
										<div class="inner">
											<h4>Start a Project </h4>
											<div class="text">Let’s start project with our professional team.</div>
											<div class="count"><span>03</span></div>
										</div>
									</div>
								</div>
							</div>
							<div class="installation">
								<h3>Installation Cost</h3>
								<div class="installation-box">
									<div class="image-layer" style="background-image:url(images/background/bg-installation.jpg);"></div>
									<div class="cost-form">
										<div class="form-box">
											<h5>Landscaping Costs</h5>
											<div class="text">Calculate local project costs by entering your zip code.</div>
											<form method="post" action="contact.html">
												<div class="form-group clearfix">
													<input type="text" name="zip" value="" placeholder="Enter Zip Code" required="">
													<button type="submit" class="theme-btn btn-style-four"><span class="btn-title">Calculate <i class="arrow flaticon-play-button-1"></i></span></button>
												</div>
											</form>
										</div>
									</div>
									<div class="info-box">
										<ul>
											<li class="clearfix"><span class="ttl">Average Local Price</span> <span class="dtl">$3,605</span></li>
											<li class="clearfix"><span class="ttl">Typical Price Range</span> <span class="dtl">$1,545 - $5,150</span></li>
											<li class="clearfix"><span class="ttl">Maximum Price</span> <span class="dtl">$41,200</span></li>
											<li class="clearfix"><span class="ttl">Typical Price Range <i>[per square foot]</i></span> <span class="dtl">$7 - $23</span></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="recent-projects">
								<div class="upper-text">
									<h3>Recent Projects</h3>
									<div class="text">We have done morethan 200 landscaping <br>installation in last year.</div>
								</div>
								<div class="row clearfix">
									<!--Project Block-->
									<div class="project-block col-md-6 col-sm-12">
										<div class="inner-box">
											<div class="image-box">
												<img src="{{ asset_url('client/images/resource/featured-image-21.jpg') }}" alt="" title="">
											</div>
											<div class="hover-box">
												<div class="hvr-content">
													<div class="cat"><a href="#">Garden Care</a></div>
													<h5><a href="#">Communual Garden</a></h5>
												</div>
											</div>
											<div class="link-box"><a href="#"><span class="icon flaticon-right-arrow-1"></span></a></div>
										</div>
									</div>
									<!--Project Block-->
									<div class="project-block col-md-6 col-sm-12">
										<div class="inner-box">
											<div class="image-box">
												<img src="{{ asset_url('client/images/resource/featured-image-20.jpg') }}" alt="" title="">
											</div>
											<div class="hover-box">
												<div class="hvr-content">
													<div class="cat"><a href="#">Lawn Care</a></div>
													<h5><a href="#">Sprinkler Irrigation</a></h5>
												</div>
											</div>
											<div class="link-box"><a href="#"><span class="icon flaticon-right-arrow-1"></span></a></div>
										</div>
									</div>
									<!--Project Block-->
									<div class="project-block col-md-6 col-sm-12">
										<div class="inner-box">
											<div class="image-box">
												<img src="{{ asset_url('client/images/resource/featured-image-22.jpg') }}" alt="" title="">
											</div>
											<div class="hover-box">
												<div class="hvr-content">
													<div class="cat"><a href="#">Pathways</a></div>
													<h5><a href="#">Rubbish Removal</a></h5>
												</div>
											</div>
											<div class="link-box"><a href="#"><span class="icon flaticon-right-arrow-1"></span></a></div>
										</div>
									</div>
									<!--Project Block-->
									<div class="project-block col-md-6 col-sm-12">
										<div class="inner-box">
											<div class="image-box">
												<img src="{{ asset_url('client/images/resource/featured-image-23.jpg') }}" alt="" title="">
											</div>
											<div class="hover-box">
												<div class="hvr-content">
													<div class="cat"><a href="#">Garden Care</a></div>
													<h5><a href="#">Communual Garden</a></h5>
												</div>
											</div>
											<div class="link-box"><a href="#"><span class="icon flaticon-right-arrow-1"></span></a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--Sidebar Side-->
				<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
					<aside class="sidebar services-sidebar">
						<div class="sidebar-widget services-widget services-list">
							<div class="widget-inner">
								<div class="sidebar-title">
									<h4>Our Services</h4>
								</div>
								<ul>
									<li><a href="spring-service.html">Spring Cleanup</a></li>
									<li class="active"><a href="landscape-service.html">Landscape Installation</a></li>
									<li><a href="garden-service.html">Garden Care</a></li>
									<li><a href="water-service.html">Water Fountain</a></li>
									<li><a href="hardscaping-service.html">Hardscaping</a></li>
									<li><a href="snow-removal-service.html">Snow & Ice Removal</a></li>
								</ul>
							</div>
						</div>
						<div class="sidebar-widget services-widget downloads">
							<div class="widget-inner">
								<div class="sidebar-title">
									<h4>Download Materials</h4>
								</div>
								<ul class="clearfix">
									<li><a href="#"><span class="icon"><img src="{{ asset_url('client/images/icons/icon-pdf.png') }}" alt=""></span><span class="txt">Company <br>Presentation <i class="flaticon-play-button-1"></i></span></a></li>
									<li><a href="#"><span class="icon"><img src="{{ asset_url('client/images/icons/icon-pdf.png') }}" alt=""></span><span class="txt">128 KB <br>Download <i class="flaticon-play-button-1"></i></span></a></li>
								</ul>
							</div>
						</div>
						<div class="sidebar-widget call-to-widget">
							<div class="widget-inner">
								<div class="image-layer" style="background-image:url(images/background/call-to-bg-2.jpg);"></div>
								<div class="content">
									<div class="icon-box"><span class="flaticon-gardener"></span></div>
									<h5>Let’s Start Your Project <br>Contact Experts</h5>
									<div class="email"><a href="mailto:service@lander.com">service@lander.com</a></div>
									<div class="phone"><a href="tel:(+5)6789012345">(+5) 678 90 12 345</a></div>
									<div class="link-box"><a href="contact.html" class="theme-btn btn-style-four"><span class="btn-title">Geta Quote <i class="arrow flaticon-play-button-1"></i></span></a></div>
								</div>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
	<section class="service-request">
		<div class="auto-container">
			<div class="inner-box">
				<div class="right-image"><img src="{{ asset_url('client/images/resource/service-request-image.png') }}" alt=""></div>
				<div class="content-box">
					<div class="sec-title">
						<div class="title-icon"><span class="icon"><img src="{{ asset_url('client/images/icons/leaf-two.png') }}" alt="" title=""></span></div>
						<div class="subtitle">Get In Touch</div>
						<h2>Request for Free Quote</h2>
						<div class="sub-text">Get free estimates from lander lawn care and gardening professionals in your city.</div>
					</div>
					<div class="form-outer">
						<div class="form-box">
							<div class="discount">Save up to 40%</div>
							<!--Newsletter-->
							<div class="quote-form default-form">
								<form method="post" action="contact.html">
									<div class="row clearfix">
										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<div class="field-inner">
												<input type="text" name="name" value="" placeholder="Your Name *" required>
												<span class="alt-icon far fa-user"></span>
											</div>
										</div>
										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<div class="field-inner">
												<input type="email" name="email" value="" placeholder="Email Address *" required>
												<span class="alt-icon far fa-envelope"></span>
											</div>
										</div>
										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<div class="field-inner">
												<input type="text" name="phone" value="" placeholder="Phone *" required>
												<span class="alt-icon fa fa-phone-alt"></span>
											</div>
										</div>
										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<div class="field-inner">
												<select class="custom-select-box" name="service">
													<option>Choose Service</option>
													<option>Spring Cleanup</option>
													<option>Plants Planting</option>
													<option>Water Fountain</option>
													<option>Hard Scaping</option>
													<option>Garden Care</option>
												</select>
											</div>
										</div>
										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<div class="field-inner">
												<input type="text" name="address" value="" placeholder="Address *" required>
												<span class="alt-icon fa fa-map-marker-alt"></span>
											</div>
										</div>
										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<div class="field-inner">
												<button type="submit" class="theme-btn btn-style-three alternate"><span class="btn-title">Get a Quote <i class="arrow flaticon-play-button-1"></i></span></button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Sponsors Section-->
	<section class="sponsors-section alt-padd">
		<div class="sponsors-outer">
			<!--Sponsors-->
			<div class="auto-container">
				<!--Sponsors Carousel-->
				<div class="sponsors-carousel owl-theme owl-carousel">
					<div class="slide-item">
						<figure class="image-box"><a href="#"><img src="{{ asset_url('client/images/clients/1.png') }}" alt=""></a></figure>
					</div>
					<div class="slide-item">
						<figure class="image-box"><a href="#"><img src="{{ asset_url('client/images/clients/2.png') }}" alt=""></a></figure>
					</div>
					<div class="slide-item">
						<figure class="image-box"><a href="#"><img src="{{ asset_url('client/images/clients/3.png') }}" alt=""></a></figure>
					</div>
					<div class="slide-item">
						<figure class="image-box"><a href="#"><img src="{{ asset_url('client/images/clients/4.png') }}" alt=""></a></figure>
					</div>
					<div class="slide-item">
						<figure class="image-box"><a href="#"><img src="{{ asset_url('client/images/clients/1.png') }}" alt=""></a></figure>
					</div>
					<div class="slide-item">
						<figure class="image-box"><a href="#"><img src="{{ asset_url('client/images/clients/2.png') }}" alt=""></a></figure>
					</div>
					<div class="slide-item">
						<figure class="image-box"><a href="#"><img src="{{ asset_url('client/images/clients/3.png') }}" alt=""></a></figure>
					</div>
					<div class="slide-item">
						<figure class="image-box"><a href="#"><img src="{{ asset_url('client/images/clients/4.png') }}" alt=""></a></figure>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
