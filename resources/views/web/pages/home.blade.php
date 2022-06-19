@extends('web.layouts.main')

@section('title', 'Yılmaz Fidancılık & Peyzaj Botanik, Sulama')
@section('description', 'Açıklama.')

@section('content')

	<!-- Banner Section -->
	<section class="banner-section banner-one">
		<div class="banner-carousel owl-theme owl-carousel">

			<!-- Slide Item -->
			<div class="slide-item">
				<div class="image-layer" style="background-image: url({{ asset('assets/web/images/main-slider/1.jpg') }});"></div>
				<div class="auto-container">
					<div class="content-box">
						<div class="content clearfix">
							<div class="inner">
								<div class="subtitle"><span class="icon"></span> Welcome to Pruners</div>
								<h1>Brilliant Hands <br>For Your Landscaping</h1>
								<div class="text">How to pursue pleasure rationally encounter consequences that are extremely painful nor again is there anyone.</div>
								<div class="link-box clearfix">
									<a href="about.html" class="theme-btn btn-style-one"><span class="btn-title">Read More <i class="arrow flaticon-play-button-1"></i></span></a>
									<a href="contact.html" class="theme-btn btn-style-two"><span class="btn-title">Contact Us <i class="arrow flaticon-play-button-1"></i></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Slide Item -->
			<div class="slide-item">
				<div class="image-layer" style="background-image: url({{ asset('assets/web/images/main-slider/2.jpg') }});"></div>
				<div class="auto-container">
					<div class="content-box right-aligned">
						<div class="content clearfix">
							<div class="inner">
								<div class="subtitle"><span class="icon"></span> Form of Impression </div>
								<h1>Complete Solution <br>for Your Landscaping</h1>
								<div class="text">When our power of choice is untrammelled and when nothing our being able to do what we like best.</div>
								<div class="link-box clearfix">
									<a href="about.html" class="theme-btn btn-style-one"><span class="btn-title">Read More <i class="arrow flaticon-play-button-1"></i></span></a>
									<a href="services.html" class="theme-btn btn-style-three"><span class="btn-title">Services <i class="arrow flaticon-play-button-1"></i></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Slide Item -->
			<div class="slide-item">
				<div class="image-layer" style="background-image: url({{ asset('assets/web/images/main-slider/3.jpg') }});"></div>
				<div class="auto-container">
					<div class="content-box">
						<div class="content clearfix">
							<div class="inner">
								<div class="subtitle"><span class="icon"></span> 100% Gurantee Works</div>
								<h1>We Give Guarantee <br>for Healthy Landscapes</h1>
								<div class="text">How to pursue pleasure rationally encounter consequences that are extremely painful nor again is there anyone.</div>
								<div class="link-box clearfix">
									<a href="about.html" class="theme-btn btn-style-one"><span class="btn-title">Read More <i class="arrow flaticon-play-button-1"></i></span></a>
									<a href="reviews.html" class="theme-btn btn-style-two"><span class="btn-title">Testimonials <i class="arrow flaticon-play-button-1"></i></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Banner Section -->

	<!--About Section-->
	<section class="about-section">
		<div class="auto-container">
			<div class="row clearfix">
				<!--Text Column-->
				<div class="text-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner">
						<div class="sec-title">
							<div class="title-icon"><span class="icon"><img src="{{ asset('assets/web/images/icons/leaf-two.png') }}" alt="" title=""></span></div>
							<div class="subtitle">About Us</div>
							<h2>Professional Gardener</h2>
						</div>
						<div class="text">
							<p class="bigger-text">Leader in landscaping, lawn care, and irrigation services in Los Angeles since 2004.</p>
							<p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and we will give you a complete account of the system, and expound the actualy teachings.</p>
						</div>
						<div class="quote-box">
							<a href="https://www.youtube.com/watch?v=CB_rXABU8DI" class="vid-link lightbox-image">
								<span class="image"><img src="{{ asset('assets/web/images/resource/quote-thumb.jpg') }}" alt="" title=""></span>
								<span class="icon flaticon-play-button-1"></span>
							</a>
							<div class="quote">
								<div class="quote-icon"><span></span></div>
								<div class="quote-text">“Our Company has established a reputation as the leader in landscape design.”</div>
								<div class="info"><span class="name">Chris Stanley,</span> <span class="designation">Founder of Pruners</span></div>
							</div>
						</div>
						<div class="lower-box clearfix">
							<div class="link-box">
								<a href="about.html" class="theme-btn btn-style-four"><span class="btn-title">Read More <i class="arrow flaticon-play-button-1"></i></span></a>
							</div>
							<div class="signature"><img src="{{ asset('assets/web/images/resource/signature-1.png') }}" alt="" title=""></div>
						</div>
					</div>
				</div>
				<!--Image Column-->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner">
						<div class="image-box clearfix">
							<figure class="image"><img src="{{ asset('assets/web/images/resource/featured-image-1.jpg') }}" alt="" title=""></figure>
							<div class="anim-image"><img src="{{ asset('assets/web/images/resource/anim-image-1.png') }}" alt="" title=""></div>
							<div class="caption">
								<span class="icon flaticon-leaves"></span>
								<span class="big-txt">2k</span>
								<span class="txt">Projects <br>were completed</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--What We Do Section-->
	<section class="what-we-do">
		<div class="tabs-box service-tabs">
			<div class="upper-box">
				<div class="pattern-layer"></div>

				<div class="auto-container">
					<div class="sec-title">
						<div class="title-icon"><span class="icon"><img src="{{ asset('assets/web/images/icons/leaf-two.png') }}" alt="" title=""></span></div>
						<div class="subtitle">What we Do</div>
						<h2>Services We Provide</h2>
					</div>

					<div class="buttons">
						<ul class="tab-buttons row clearfix">
							<li class="tab-btn active-btn col" data-tab="#tab-1"><span class="hvr-seeds"></span><div class="icon-box"><span class="icon flaticon-hedge"></span><span class="icon hvr-icon flaticon-null-3"></span></div><div class="btn-title">Spring Cleanup</div><span class="arrow flaticon-right-1"></span></li>
							<li class="tab-btn col" data-tab="#tab-2"><span class="hvr-seeds"></span><div class="icon-box"><span class="icon flaticon-digging-1"></span><span class="icon hvr-icon flaticon-digging"></span></div><div class="btn-title">Plants Plantintg</div><span class="arrow flaticon-right-1"></span></li>
							<li class="tab-btn col" data-tab="#tab-3"><span class="hvr-seeds"></span><div class="icon-box"><span class="icon flaticon-sprinkler"></span><span class="icon hvr-icon flaticon-sprinkler-1"></span></div><div class="btn-title">Water Fountain</div><span class="arrow flaticon-right-1"></span></li>
							<li class="tab-btn col" data-tab="#tab-4"><span class="hvr-seeds"></span><div class="icon-box"><span class="icon flaticon-painting"></span><span class="icon hvr-icon flaticon-painting-1"></span></div><div class="btn-title">Hard Scaping</div><span class="arrow flaticon-right-1"></span></li>
							<li class="tab-btn col" data-tab="#tab-5"><span class="hvr-seeds"></span><div class="icon-box"><span class="icon flaticon-wheelbarrow"></span><span class="icon hvr-icon flaticon-wheelbarrow-1"></span></div><div class="btn-title">Garden Care</div><span class="arrow flaticon-right-1"></span></li>
						</ul>
					</div>

				</div>
			</div>

			<div class="tabs-content">
				<!--Tab-->
				<div class="tab active-tab" id="tab-1">
					<div class="row outer-container clearfix">
						<!--Image Column-->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="image-layer" style="background-image: url({{ asset('assets/web/images/background/image-1.jpg') }});"></div>
							<div class="inner clearfix">
								<div class="content">
									<div class="inner-box">
										<div class="icon-box"><span class="flaticon-leaves"></span></div>
										<h5>Let’s <br>Start Your Project</h5>
										<div class="text">Make an appointment & Start your project today.</div>
										<div class="link-box clearfix">
											<a href="appointment.html" class="theme-btn btn-style-one alt-hover"><span class="btn-title">Appointment <i class="arrow flaticon-play-button-1"></i></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--Text Column-->
						<div class="text-column col-lg-6 col-md-12 col-sm-12">
							<div class="big-icon"><span class="flaticon-null-3"></span></div>
							<div class="inner">
								<div class="content">
									<div class="s-title">
										<div class="icon"><span class="flaticon-null-3"></span></div>
										<div class="subtitle">know About</div>
										<h4>Spring Cleanup</h4>
									</div>
									<div class="text">We denounce with righteous indignation and dislike men who are beguiled and demoralized by the charms of pleasure of the moment equal belongs fail in their duty through as saying through shrinking ...</div>

									<div class="b-box">
										<div class="image"><a href="#"><img src="{{ asset('assets/web/images/resource/bro-thumb-1.jpg') }}" alt=""></a></div>
										<div class="bro-title">Projects & Case Studies</div>
										<div class="bro-link"><a href="#" class="theme-btn">Download.pdf <i class="arrow flaticon-play-button-1"></i></a></div>
									</div>

									<div class="more-link">
										<a href="spring-service.html" class="theme-btn">More about service <i class="arrow flaticon-play-button-1"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--Tab-->
				<div class="tab" id="tab-2">
					<div class="row outer-container clearfix">
						<!--Image Column-->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="image-layer" style="background-image: url({{ asset('assets/web/images/background/image-2.jpg') }});"></div>
							<div class="inner clearfix">
								<div class="content">
									<div class="inner-box">
										<div class="icon-box"><span class="flaticon-leaves"></span></div>
										<h5>Let’s <br>Start Your Project</h5>
										<div class="text">Make an appointment & Start your project today.</div>
										<div class="link-box clearfix">
											<a href="appointment.html" class="theme-btn btn-style-one alt-hover"><span class="btn-title">Appointment <i class="arrow flaticon-play-button-1"></i></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--Text Column-->
						<div class="text-column col-lg-6 col-md-12 col-sm-12">
							<div class="big-icon"><span class="flaticon-digging"></span></div>
							<div class="inner">
								<div class="content">
									<div class="s-title">
										<div class="icon"><span class="flaticon-digging"></span></div>
										<div class="subtitle">know About</div>
										<h4>Plants Plantintg</h4>
									</div>
									<div class="text">We denounce with righteous indignation and dislike men who are beguiled and demoralized by the charms of pleasure of the moment equal belongs fail in their duty through as saying through shrinking ...</div>

									<div class="b-box">
										<div class="image"><a href="#"><img src="{{ asset('assets/web/images/resource/bro-thumb-1.jpg') }}" alt=""></a></div>
										<div class="bro-title">Projects & Case Studies</div>
										<div class="bro-link"><a href="#" class="theme-btn">Download.pdf <i class="arrow flaticon-play-button-1"></i></a></div>
									</div>

									<div class="more-link">
										<a href="landscape-service.html" class="theme-btn">More about service <i class="arrow flaticon-play-button-1"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--Tab-->
				<div class="tab" id="tab-3">
					<div class="row outer-container clearfix">
						<!--Image Column-->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="image-layer" style="background-image: url({{ asset('assets/web/images/background/image-3.jpg') }});"></div>
							<div class="inner clearfix">
								<div class="content">
									<div class="inner-box">
										<div class="icon-box"><span class="flaticon-leaves"></span></div>
										<h5>Let’s <br>Start Your Project</h5>
										<div class="text">Make an appointment & Start your project today.</div>
										<div class="link-box clearfix">
											<a href="appointment.html" class="theme-btn btn-style-one alt-hover"><span class="btn-title">Appointment <i class="arrow flaticon-play-button-1"></i></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--Text Column-->
						<div class="text-column col-lg-6 col-md-12 col-sm-12">
							<div class="big-icon"><span class="flaticon-sprinkler-1"></span></div>
							<div class="inner">
								<div class="content">
									<div class="s-title">
										<div class="icon"><span class="flaticon-sprinkler-1"></span></div>
										<div class="subtitle">know About</div>
										<h4>Water Fountain</h4>
									</div>
									<div class="text">We denounce with righteous indignation and dislike men who are beguiled and demoralized by the charms of pleasure of the moment equal belongs fail in their duty through as saying through shrinking ...</div>

									<div class="b-box">
										<div class="image"><a href="#"><img src="{{ asset('assets/web/images/resource/bro-thumb-1.jpg') }}" alt=""></a></div>
										<div class="bro-title">Projects & Case Studies</div>
										<div class="bro-link"><a href="#" class="theme-btn">Download.pdf <i class="arrow flaticon-play-button-1"></i></a></div>
									</div>

									<div class="more-link">
										<a href="water-service.html" class="theme-btn">More about service <i class="arrow flaticon-play-button-1"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--Tab-->
				<div class="tab" id="tab-4">
					<div class="row outer-container clearfix">
						<!--Image Column-->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="image-layer" style="background-image: url({{ asset('assets/web/images/background/image-4.jpg') }});"></div>
							<div class="inner clearfix">
								<div class="content">
									<div class="inner-box">
										<div class="icon-box"><span class="flaticon-leaves"></span></div>
										<h5>Let’s <br>Start Your Project</h5>
										<div class="text">Make an appointment & Start your project today.</div>
										<div class="link-box clearfix">
											<a href="appointment.html" class="theme-btn btn-style-one alt-hover"><span class="btn-title">Appointment <i class="arrow flaticon-play-button-1"></i></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--Text Column-->
						<div class="text-column col-lg-6 col-md-12 col-sm-12">
							<div class="big-icon"><span class="flaticon-painting-1"></span></div>
							<div class="inner">
								<div class="content">
									<div class="s-title">
										<div class="icon"><span class="flaticon-painting-1"></span></div>
										<div class="subtitle">know About</div>
										<h4>Hard Scaping</h4>
									</div>
									<div class="text">We denounce with righteous indignation and dislike men who are beguiled and demoralized by the charms of pleasure of the moment equal belongs fail in their duty through as saying through shrinking ...</div>

									<div class="b-box">
										<div class="image"><a href="#"><img src="{{ asset('assets/web/images/resource/bro-thumb-1.jpg') }}" alt=""></a></div>
										<div class="bro-title">Projects & Case Studies</div>
										<div class="bro-link"><a href="#" class="theme-btn">Download.pdf <i class="arrow flaticon-play-button-1"></i></a></div>
									</div>

									<div class="more-link">
										<a href="hardscaping-service.html" class="theme-btn">More about service <i class="arrow flaticon-play-button-1"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--Tab-->
				<div class="tab" id="tab-5">
					<div class="row outer-container clearfix">
						<!--Image Column-->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="image-layer" style="background-image: url({{ asset('assets/web/images/background/image-5.jpg') }});"></div>
							<div class="inner clearfix">
								<div class="content">
									<div class="inner-box">
										<div class="icon-box"><span class="flaticon-leaves"></span></div>
										<h5>Let’s <br>Start Your Project</h5>
										<div class="text">Make an appointment & Start your project today.</div>
										<div class="link-box clearfix">
											<a href="appointment.html" class="theme-btn btn-style-one alt-hover"><span class="btn-title">Appointment <i class="arrow flaticon-play-button-1"></i></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--Text Column-->
						<div class="text-column col-lg-6 col-md-12 col-sm-12">
							<div class="big-icon"><span class="flaticon-wheelbarrow-1"></span></div>
							<div class="inner">
								<div class="content">
									<div class="s-title">
										<div class="icon"><span class="flaticon-wheelbarrow-1"></span></div>
										<div class="subtitle">know About</div>
										<h4>Garden Care</h4>
									</div>
									<div class="text">We denounce with righteous indignation and dislike men who are beguiled and demoralized by the charms of pleasure of the moment equal belongs fail in their duty through as saying through shrinking ...</div>

									<div class="b-box">
										<div class="image"><a href="#"><img src="{{ asset('assets/web/images/resource/bro-thumb-1.jpg') }}" alt=""></a></div>
										<div class="bro-title">Projects & Case Studies</div>
										<div class="bro-link"><a href="#" class="theme-btn">Download.pdf <i class="arrow flaticon-play-button-1"></i></a></div>
									</div>

									<div class="more-link">
										<a href="garden-service.html" class="theme-btn">More about service <i class="arrow flaticon-play-button-1"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!--Why Us Section-->
	<section class="why-us">
		<div class="pattern-layer"></div>
		<div class="right-leaf"></div>
		<div class="auto-container">
			<div class="title-box">
				<div class="row clearfix">
					<div class="left-col col-xl-6 col-lg-12 col-md-12">
						<div class="sec-title alternate">
							<div class="title-icon"><span class="icon"><img src="{{ asset('assets/web/images/icons/leaf-four.png') }}" alt="" title=""></span></div>
							<div class="subtitle">Why Choose Us</div>
							<h2>Experts Trusted Us</h2>
						</div>
					</div>
					<div class="right-col col-xl-6 col-lg-12 col-md-12">
						<div class="text">How to pursue pleasure rationally encounter consequences that painful again is there anyone who loves.</div>
					</div>
				</div>
			</div>

			<div class="row clearfix">
				<!--Why Block-->
				<div class="why-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="flaticon-null"></span>
						</div>
						<h5>Experienced</h5>
						<div class="text">Indignation and dislike mens who are so beguiled & the demoralized. </div>
						<div class="more-link"><a class="theme-btn" href="#"><span class="icon flaticon-right-arrow-1"></span></a></div>
						<div class="right-curve"></div>
					</div>
				</div>

				<!--Why Block-->
				<div class="why-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="flaticon-insurance"></span>
						</div>
						<h5>Upfront Pricing</h5>
						<div class="text">Take trivial example which of ever undertakes laborious physical exercise. </div>
						<div class="more-link"><a class="theme-btn" href="#"><span class="icon flaticon-right-arrow-1"></span></a></div>
						<div class="right-curve"></div>
					</div>
				</div>

				<!--Why Block-->
				<div class="why-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="flaticon-offer"></span>
						</div>
						<h5>Fully Insured</h5>
						<div class="text">Readable content page when looking at its layout making look like readable. </div>
						<div class="more-link"><a class="theme-btn" href="#"><span class="icon flaticon-right-arrow-1"></span></a></div>
						<div class="right-curve"></div>
					</div>
				</div>

				<!--Why Block-->
				<div class="why-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="flaticon-shovel"></span>
						</div>
						<h5>Quality Products</h5>
						<div class="text">How all this mistaken idea of denouncing pleasure and praising complete. </div>
						<div class="more-link"><a class="theme-btn" href="#"><span class="icon flaticon-right-arrow-1"></span></a></div>
						<div class="right-curve"></div>
					</div>
				</div>

				<!--Why Block-->
				<div class="why-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="flaticon-dog-2"></span>
						</div>
						<h5>Pet & Kid Safe</h5>
						<div class="text">How all this mistaken idea of denouncing pleasure and praising complete. </div>
						<div class="more-link"><a class="theme-btn" href="#"><span class="icon flaticon-right-arrow-1"></span></a></div>
						<div class="right-curve"></div>
					</div>
				</div>

				<!--Why Block-->
				<div class="why-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="flaticon-gardener-1"></span>
						</div>
						<h5>Expert Staff</h5>
						<div class="text">Take trivial example which of ever undertakes laborious physical exercise. </div>
						<div class="more-link"><a class="theme-btn" href="#"><span class="icon flaticon-right-arrow-1"></span></a></div>
						<div class="right-curve"></div>
					</div>
				</div>

				<!--Why Block-->
				<div class="why-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="flaticon-medal-1"></span>
						</div>
						<h5>100% Guarantee</h5>
						<div class="text">Indignation and dislike mens who are so beguiled & the demoralized. </div>
						<div class="more-link"><a class="theme-btn" href="#"><span class="icon flaticon-right-arrow-1"></span></a></div>
						<div class="right-curve"></div>
					</div>
				</div>

				<!--Why Block-->
				<div class="why-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="flaticon-on-time"></span>
						</div>
						<h5>Ontime Delivery</h5>
						<div class="text">Readable content page when looking at its layout making look like readable. </div>
						<div class="more-link"><a class="theme-btn" href="#"><span class="icon flaticon-right-arrow-1"></span></a></div>
						<div class="right-curve"></div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!--Facts Section-->
	<section class="facts-section">
		<div class="image-layer" style="background-image: url({{ asset('assets/web/images/background/image-6.jpg') }} );"></div>
		<div class="auto-container">
			<div class="row clearfix">
				<!--Title Column-->
				<div class="fact-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner">
						<div class="icon-box"><span class="flaticon-park"></span></div>
						<div class="fact-count"><div class="count-box"><span class="count-text" data-stop="2.5" data-speed="1000">0</span><sup>k</sup></div></div>
						<h4>Completed Projects</h4>
					</div>
				</div>

				<!--Title Column-->
				<div class="fact-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner">
						<div class="icon-box"><span class="flaticon-gardener"></span></div>
						<div class="fact-count"><div class="count-box"><span class="count-text" data-stop="108" data-speed="3000">0</span></div></div>
						<h4>Expert Landscapers</h4>
					</div>
				</div>

				<!--Title Column-->
				<div class="fact-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner">
						<div class="icon-box"><span class="flaticon-medal"></span></div>
						<div class="fact-count"><div class="count-box"><span class="count-text" data-stop="23" data-speed="2000">0</span><sup>+</sup></div></div>
						<h4>Awards and Honors</h4>
					</div>
				</div>

				<!--Title Column-->
				<div class="fact-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner">
						<div class="icon-box"><span class="flaticon-customer-review-1"></span></div>
						<div class="fact-count"><div class="count-box"><span class="count-text" data-stop="99" data-speed="3000">0</span><sup>%</sup></div></div>
						<h4>Satisfied Customers</h4>
					</div>
				</div>

			</div>

		</div>
	</section>

	<!--Projects Section-->
	<section class="projects-section">
		<div class="auto-container">
			<div class="sec-title">
				<div class="title-icon"><span class="icon"><img src="{{ asset('assets/web/images/icons/leaf-two.png') }}" alt="" title=""></span></div>
				<div class="subtitle">Our Projects</div>
				<h2>Latest From Projects</h2>
			</div>

			<div class="carousel-box">
				<div class="project-carousel owl-theme owl-carousel">
					<!--Project Block-->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<img src="{{ asset('assets/web/images/resource/featured-image-2.jpg') }}" alt="" title="">
							</div>
							<div class="hover-box">
								<div class="hvr-content">
									<div class="cat"><a href="#">Garden Care</a></div>
									<h5><a href="#">Communual Garden</a></h5>
								</div>
							</div>
							<div class="link-box"><a href="project-single.html"><span class="icon flaticon-right-arrow-1"></span></a></div>
						</div>
					</div>
					<!--Project Block-->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<img src="{{ asset('assets/web/images/resource/featured-image-3.jpg') }}" alt="" title="">
							</div>
							<div class="hover-box">
								<div class="hvr-content">
									<div class="cat"><a href="#">Lawn Care</a></div>
									<h5><a href="#">Sprinkler Irrigation</a></h5>
								</div>
							</div>
							<div class="link-box"><a href="project-single.html"><span class="icon flaticon-right-arrow-1"></span></a></div>
						</div>
					</div>
					<!--Project Block-->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<img src="{{ asset('assets/web/images/resource/featured-image-4.jpg') }}" alt="" title="">
							</div>
							<div class="hover-box">
								<div class="hvr-content">
									<div class="cat"><a href="#">Pathways</a></div>
									<h5><a href="#">Rubbish Removal</a></h5>
								</div>
							</div>
							<div class="link-box"><a href="project-single.html"><span class="icon flaticon-right-arrow-1"></span></a></div>
						</div>
					</div>
					<!--Project Block-->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<img src="{{ asset('assets/web/images/resource/featured-image-2.jpg') }}" alt="" title="">
							</div>
							<div class="hover-box">
								<div class="hvr-content">
									<div class="cat"><a href="#">Garden Care</a></div>
									<h5><a href="#">Communual Garden</a></h5>
								</div>
							</div>
							<div class="link-box"><a href="project-single.html"><span class="icon flaticon-right-arrow-1"></span></a></div>
						</div>
					</div>
					<!--Project Block-->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<img src="{{ asset('assets/web/images/resource/featured-image-3.jpg') }}" alt="" title="">
							</div>
							<div class="hover-box">
								<div class="hvr-content">
									<div class="cat"><a href="#">Lawn Care</a></div>
									<h5><a href="#">Sprinkler Irrigation</a></h5>
								</div>
							</div>
							<div class="link-box"><a href="project-single.html"><span class="icon flaticon-right-arrow-1"></span></a></div>
						</div>
					</div>
					<!--Project Block-->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<img src="{{ asset('assets/web/images/resource/featured-image-4.jpg') }}" alt="" title="">
							</div>
							<div class="hover-box">
								<div class="hvr-content">
									<div class="cat"><a href="#">Pathways</a></div>
									<h5><a href="#">Rubbish Removal</a></h5>
								</div>
							</div>
							<div class="link-box"><a href="project-single.html"><span class="icon flaticon-right-arrow-1"></span></a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="lower-text">We give guarantee for healthy landscapes, You should never compromise with quality. <a href="#" class="theme-btn">View All Projects <i class="arrow flaticon-play-button-1"></i></a></div>
		</div>
	</section>


	<!--Work Process Section-->
	<section class="work-process">
		<div class="round-pattern-layer"></div>
		<div class="right-leaf"><img src="{{ asset('assets/web/images/resource/leaf-1.png') }}" alt="" title=""></div>
		<div class="auto-container">
			<div class="title-box">
				<div class="row clearfix">
					<div class="left-col col-xl-6 col-lg-12 col-md-12">
						<div class="sec-title alternate">
							<div class="title-icon"><span class="icon"><img src="{{ asset('assets/web/images/icons/leaf-four.png') }}" alt="" title=""></span></div>
							<div class="subtitle">How It Works</div>
							<h2>Working Process</h2>
						</div>
					</div>
					<div class="right-col col-xl-6 col-lg-12 col-md-12">
						<div class="text">How to pursue pleasure rationally encounter consequences that painful again is there anyone who loves.</div>
					</div>
				</div>
			</div>

			<div class="process">
				<div class="row clearfix">
					<!--Process Block-->
					<div class="process-block col-xl-3 col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<img src="{{ asset('assets/web/images/resource/featured-image-5.jpg') }}" alt="" title="">
								<div class="hover-box">
									<div class="hvr-content">
										<div class="text">Which is the same as saying through shrinkings from toil and cases are perfect.</div>
									</div>
								</div>
							</div>
							<div class="lower-box">
								<div class="icon-box">
									<span class="flaticon-consulting"></span>
								</div>
								<div class="step">Step One</div>
								<h5>Talk with expert</h5>
							</div>
						</div>
					</div>

					<!--Process Block-->
					<div class="process-block col-xl-3 col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<img src="{{ asset('assets/web/images/resource/featured-image-6.jpg') }}" alt="" title="">
								<div class="hover-box">
									<div class="hvr-content">
										<div class="text">Which is the same as saying through shrinkings from toil and cases are perfect.</div>
									</div>
								</div>
							</div>
							<div class="lower-box">
								<div class="icon-box">
									<span class="flaticon-blueprint"></span>
								</div>
								<div class="step">Step Two</div>
								<h5>Design proposal</h5>
							</div>
						</div>
					</div>

					<!--Process Block-->
					<div class="process-block col-xl-3 col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<img src="{{ asset('assets/web/images/resource/featured-image-7.jpg') }}" alt="" title="">
								<div class="hover-box">
									<div class="hvr-content">
										<div class="text">Which is the same as saying through shrinkings from toil and cases are perfect.</div>
									</div>
								</div>
							</div>
							<div class="lower-box">
								<div class="icon-box">
									<span class="flaticon-gardener-2"></span>
								</div>
								<div class="step">Step Three</div>
								<h5>Start planting</h5>
							</div>
						</div>
					</div>

					<!--Process Block-->
					<div class="process-block col-xl-3 col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<img src="{{ asset('assets/web/images/resource/featured-image-8.jpg') }}" alt="" title="">
								<div class="hover-box">
									<div class="hvr-content">
										<div class="text">Which is the same as saying through shrinkings from toil and cases are perfect.</div>
									</div>
								</div>
							</div>
							<div class="lower-box">
								<div class="icon-box">
									<span class="flaticon-trees"></span>
								</div>
								<div class="step">Step Four</div>
								<h5>Party With Family</h5>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>

	<!--Team Section-->
	<section class="team-section">
		<div class="left-leaf"><img src="{{ asset('assets/web/images/resource/leaf-2.png') }}" alt="" title=""></div>
		<div class="right-leaf"><img src="{{ asset('assets/web/images/resource/leaf-3.png') }}" alt="" title=""></div>
		<div class="auto-container">
			<div class="upper-box clearfix">
				<div class="sec-title">
					<div class="title-icon"><span class="icon"><img src="{{ asset('assets/web/images/icons/leaf-two.png') }}" alt="" title=""></span></div>
					<div class="subtitle">Behind Pruners</div>
					<h2>Our Expert Specialists</h2>
				</div>
				<div class="link-box">
					<a href="#" class="theme-btn btn-style-four"><span class="btn-title">All Members <i class="arrow flaticon-play-button-1"></i></span></a>
				</div>
			</div>

			<div class="team-box">
				<div class="row clearfix">
					<!--Team block-->
					<div class="team-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="upper">
								<div class="image-box">
									<img src="{{ asset('assets/web/images/resource/team-1.jpg') }}" alt="" title="">
								</div>
							</div>
							<div class="lower">
								<div class="phone">
									<a href="#"><span class="icon flaticon-headphones"></span>Phone: +31 65 792 63 11</a>
								</div>
								<h5><a href="#">Isaac Freddie</a></h5>
								<div class="designation">Founder</div>
							</div>
						</div>
					</div>

					<!--Team block-->
					<div class="team-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="upper">
								<div class="image-box">
									<img src="{{ asset('assets/web/images/resource/team-2.jpg') }}" alt="" title="">
								</div>
							</div>
							<div class="lower">
								<div class="phone">
									<a href="#"><span class="icon flaticon-headphones"></span>Phone: +31 65 792 63 12</a>
								</div>
								<h5><a href="#">William Theo</a></h5>
								<div class="designation">Manager</div>
							</div>
						</div>
					</div>

					<!--Team block-->
					<div class="team-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="upper">
								<div class="image-box">
									<img src="{{ asset('assets/web/images/resource/team-3.jpg') }}" alt="" title="">
								</div>
							</div>
							<div class="lower">
								<div class="phone">
									<a href="#"><span class="icon flaticon-headphones"></span>Phone: +31 65 792 63 13</a>
								</div>
								<h5><a href="#">Arlo Reuben</a></h5>
								<div class="designation">Arlo Reuben</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<!--Testimonials Section-->
	<section class="testimonials-one">
		<div class="auto-container">
			<div class="title-box">
				<div class="row clearfix">
					<div class="left-col col-xl-6 col-lg-12 col-md-12">
						<div class="sec-title alternate">
							<div class="title-icon"><span class="icon"><img src="{{ asset('assets/web/images/icons/leaf-four.png') }}" alt="" title=""></span></div>
							<div class="subtitle">Testimonials</div>
							<h2>Guarantee Success</h2>
						</div>
					</div>
					<div class="right-col col-xl-6 col-lg-12 col-md-12">
						<div class="text">How to pursue pleasure rationally encounter consequences that painful again is there anyone who loves.</div>
					</div>
				</div>
			</div>

			<div class="carousel-box">
				<div class="testimonial-carousel owl-theme owl-carousel">

					<!--Block-->
					<div class="testi-block">
						<div class="inner-box">
							<div class="content">
								<div class="quote-icon"><span></span></div>
								<div class="image"><img src="{{ asset('assets/web/images/resource/testi-thumb-1.jpg') }}" alt="" title=""></div>
								<h6 class="name">Louie Daxon</h6>
								<div class="region">New Orleans, United States</div>
								<div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
								<div class="text">Thank you for our beautiful new front! Your crew was outstanding, neat, tidy, & very professional!.</div>
							</div>
						</div>
					</div>

					<!--Block-->
					<div class="testi-block">
						<div class="inner-box">
							<div class="content">
								<div class="quote-icon"><span></span></div>
								<div class="image"><img src="{{ asset('assets/web/images/resource/testi-thumb-2.jpg') }}" alt="" title=""></div>
								<h6 class="name">Luke Mattew</h6>
								<div class="region">San Antonio, United States</div>
								<div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="far fa-star"></span></div>
								<div class="text">We are very pleased with the way of business is done, We look forward to the completion of our project.</div>
							</div>
						</div>
					</div>

					<!--Block-->
					<div class="testi-block">
						<div class="inner-box">
							<div class="content">
								<div class="quote-icon"><span></span></div>
								<div class="image"><img src="{{ asset('assets/web/images/resource/testi-thumb-3.jpg') }}" alt="" title=""></div>
								<h6 class="name">Rory Blake</h6>
								<div class="region">Nottingham, United Kingdom</div>
								<div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half"></span></div>
								<div class="text">Pruners Landscaping blends unique garden, water and patio layouts while working within a budget.</div>
							</div>
						</div>
					</div>

					<!--Block-->
					<div class="testi-block">
						<div class="inner-box">
							<div class="content">
								<div class="quote-icon"><span></span></div>
								<div class="image"><img src="{{ asset('assets/web/images/resource/testi-thumb-1.jpg') }}" alt="" title=""></div>
								<h6 class="name">Louie Daxon</h6>
								<div class="region">New Orleans, United States</div>
								<div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
								<div class="text">Thank you for our beautiful new front! Your crew was outstanding, neat, tidy, & very professional!.</div>
							</div>
						</div>
					</div>

					<!--Block-->
					<div class="testi-block">
						<div class="inner-box">
							<div class="content">
								<div class="quote-icon"><span></span></div>
								<div class="image"><img src="{{ asset('assets/web/images/resource/testi-thumb-2.jpg') }}" alt="" title=""></div>
								<h6 class="name">Luke Mattew</h6>
								<div class="region">San Antonio, United States</div>
								<div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="far fa-star"></span></div>
								<div class="text">We are very pleased with the way of business is done, We look forward to the completion of our project.</div>
							</div>
						</div>
					</div>

					<!--Block-->
					<div class="testi-block">
						<div class="inner-box">
							<div class="content">
								<div class="quote-icon"><span></span></div>
								<div class="image"><img src="{{ asset('assets/web/images/resource/testi-thumb-3.jpg') }}" alt="" title=""></div>
								<h6 class="name">Rory Blake</h6>
								<div class="region">Nottingham, United Kingdom</div>
								<div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa star-half"></span></div>
								<div class="text">Pruners Landscaping blends unique garden, water and patio layouts while working within a budget.</div>
							</div>
						</div>
					</div>

					<!--Block-->
					<div class="testi-block">
						<div class="inner-box">
							<div class="content">
								<div class="quote-icon"><span></span></div>
								<div class="image"><img src="{{ asset('assets/web/images/resource/testi-thumb-1.jpg') }}" alt="" title=""></div>
								<h6 class="name">Louie Daxon</h6>
								<div class="region">New Orleans, United States</div>
								<div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
								<div class="text">Thank you for our beautiful new front! Your crew was outstanding, neat, tidy, & very professional!.</div>
							</div>
						</div>
					</div>

					<!--Block-->
					<div class="testi-block">
						<div class="inner-box">
							<div class="content">
								<div class="quote-icon"><span></span></div>
								<div class="image"><img src="{{ asset('assets/web/images/resource/testi-thumb-2.jpg') }}" alt="" title=""></div>
								<h6 class="name">Luke Mattew</h6>
								<div class="region">San Antonio, United States</div>
								<div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="far fa-star"></span></div>
								<div class="text">We are very pleased with the way of business is done, We look forward to the completion of our project.</div>
							</div>
						</div>
					</div>

					<!--Block-->
					<div class="testi-block">
						<div class="inner-box">
							<div class="content">
								<div class="quote-icon"><span></span></div>
								<div class="image"><img src="{{ asset('assets/web/images/resource/testi-thumb-3.jpg') }}" alt="" title=""></div>
								<h6 class="name">Rory Blake</h6>
								<div class="region">Nottingham, United Kingdom</div>
								<div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa star-half"></span></div>
								<div class="text">Pruners Landscaping blends unique garden, water and patio layouts while working within a budget.</div>
							</div>
						</div>
					</div>


				</div>
			</div>

		</div>
	</section>

	<!--Blog Section-->
	<section class="blog-section">
		<div class="auto-container">
			<div class="upper-box clearfix">
				<div class="sec-title">
					<div class="title-icon"><span class="icon"><img src="{{ asset('assets/web/images/icons/leaf-two.png') }}" alt="" title=""></span></div>
					<div class="subtitle">News & Updates</div>
					<h2>Latest From Blog</h2>
				</div>
				<div class="link-box">
					<a href="blog-grid-1.html" class="theme-btn"><span class="btn-title">View More Blog <i class="arrow flaticon-play-button-1"></i></span></a>
				</div>
			</div>

			<div class="blog-posts">
				<div class="row clearfix">
					<!--News block-->
					<div class="news-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="upper">
								<div class="image-box">
									<img src="{{ asset('assets/web/images/resource/news-image-1.jpg') }}" alt="" title="">
								</div>
								<div class="info clearfix">
									<div class="cat"><a href="blog-single.html">Garden Tips</a></div>
									<div class="date"><span class="icon far fa-calendar"></span> April 25, 2020</div>
								</div>
								<div class="hvr-link theme-btn"><a href="blog-single.html"><span class="flaticon-cross"></span></a></div>
							</div>
							<div class="lower">
								<h5><a href="blog-single.html">Reduce Your Carbon Footprint with Gardening Robots</a></h5>
								<div class="posted-by"><span class="icon far fa-user"></span> Edward Samuel</div>
								<div class="more-link"><a href="blog-single.html"><span class="icon flaticon-right-arrow"></span></a></div>
							</div>
						</div>
					</div>

					<!--News block-->
					<div class="news-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="upper">
								<div class="image-box">
									<img src="{{ asset('assets/web/images/resource/news-image-2.jpg') }}" alt="" title="">
								</div>
								<div class="info clearfix">
									<div class="cat"><a href="blog-single.html">Discussion</a></div>
									<div class="date"><span class="icon far fa-calendar"></span> April 10, 2020</div>
								</div>
								<div class="hvr-link theme-btn"><a href="blog-single.html"><span class="flaticon-cross"></span></a></div>
							</div>
							<div class="lower">
								<h5><a href="blog-single.html">Landscaping Design - Industrial Buildings & Warehouses</a></h5>
								<div class="posted-by"><span class="icon far fa-user"></span> Lika Joshua</div>
								<div class="more-link"><a href="blog-single.html"><span class="icon flaticon-right-arrow"></span></a></div>
							</div>
						</div>
					</div>

					<!--News block-->
					<div class="news-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="upper">
								<div class="image-box">
									<img src="{{ asset('assets/web/images/resource/news-image-3.jpg') }}" alt="" title="">
								</div>
								<div class="info clearfix">
									<div class="cat"><a href="blog-single.html">Garden Tips</a></div>
									<div class="date"><span class="icon far fa-calendar"></span> March 18, 2020</div>
								</div>
								<div class="hvr-link theme-btn"><a href="blog-single.html"><span class="flaticon-cross"></span></a></div>
								<div class="video-link theme-btn"><a href="blog-single.html"><span class="flaticon-play-button-3"></span></a></div>
							</div>
							<div class="lower">
								<h5><a href="blog-single.html">Three Ways Melting Snow Can Impact the Water</a></h5>
								<div class="posted-by"><span class="icon far fa-user"></span> Edward Samuel</div>
								<div class="more-link"><a href="blog-single.html"><span class="icon flaticon-right-arrow"></span></a></div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>

	<!--Contact Section-->
	<section class="contact-section">
		<div class="pattern-layer"></div>
		<div class="auto-container">
			<div class="row clearfix">
				<!--Text Column-->
				<div class="text-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner">
						<div class="sec-title">
							<div class="title-icon"><span class="icon"><img src="{{ asset('assets/web/images/icons/leaf-two.png') }}" alt="" title=""></span></div>
							<div class="subtitle">Get In Touch</div>
							<h2>Request for Free Quote</h2>
							<div class="sub-text">Get free estimates from Pruners lawn care and gardening professionals in your city.</div>
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
				<!--Image Column-->
				<div class="image-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner">
						<div class="image-box clearfix">
							<figure class="image"><img src="{{ asset('assets/web/images/resource/anim-image-2.png') }}" alt="" title=""></figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--Sponsors Section-->
	<section class="sponsors-section">
		<div class="sponsors-outer">
			<!--Sponsors-->
			<div class="auto-container">
				<!--Sponsors Carousel-->
				<div class="sponsors-carousel owl-theme owl-carousel">
					<div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/web/images/clients/1.png') }}" alt=""></a></figure></div>
					<div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/web/images/clients/2.png') }}" alt=""></a></figure></div>
					<div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/web/images/clients/3.png') }}" alt=""></a></figure></div>
					<div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/web/images/clients/4.png') }}" alt=""></a></figure></div>
					<div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/web/images/clients/1.png') }}" alt=""></a></figure></div>
					<div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/web/images/clients/2.png') }}" alt=""></a></figure></div>
					<div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/web/images/clients/3.png') }}" alt=""></a></figure></div>
					<div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/web/images/clients/4.png') }}" alt=""></a></figure></div>
				</div>
			</div>
		</div>
	</section>

	<!-- Call to Action -->
	<section class="call-to-action">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="title-col col-xl-7 col-lg-12 col-md-12">
					<div class="inner">
						<h4>Do you need tree care for your home?</h4>
					</div>
				</div>
				<div class="info-col col-xl-5 col-lg-12 col-md-12">
					<div class="inner clearfix">
						<ul class="info clearfix">
							<li><a href="#"><span>Send Message</span> <i class="arrow flaticon-play-button-1"></i></a></li>
							<li><a href="tel:+31657926311"><span>+31 65 792 63 11</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
