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
						Hakkımızda
					</h1>
					<div class="page-nav">
						<ul class="bread-crumb clearfix">
							<li>
								<a href="{{ site_url() }}">
									<span class="fa fa-home"></span>
								</a>
							</li>
							<li class="active">
								Hakkımızda
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Section -->

	<!-- About Section -->
	<section class="about-three">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Text Column -->
				<div class="text-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner">
						<div class="sec-title">
							<div class="title-icon">
								<span class="icon">
									<img src="{{ asset_url('client/images/icons/leaf-two.png') }}" alt="" title="">
								</span>
							</div>
							<div class="subtitle">
								Hakkımızda
							</div>
							<h2>
								Professional Gardener
							</h2>
						</div>
						<div class="text">
							<p class="bigger-text">
								Leader in landscaping, lawn care, and irrigation services in Los Angeles since 2004.
							</p>
							<p>
								Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and we will give you a complete account of the system, and expound the actualy teachings.
							</p>
						</div>
						<div class="quote-box">
							<a href="https://www.youtube.com/watch?v=CB_rXABU8DI" class="vid-link lightbox-image">
								<span class="image">
									<img src="{{ asset_url('client/images/resource/vid-thumb-2.jpg') }}" alt="" title="">
								</span>
								<span class="icon flaticon-play-button-1"></span>
							</a>
							<div class="quote">
								<div class="quote-icon">
									<span></span>
								</div>
								<div class="quote-text">
									“Our Company has established a reputation as the leader in landscape design.”
								</div>
								<div class="info">
									<span class="name">Chris Stanley,</span>
									<span class="designation">Founder of Pruners</span>
								</div>
							</div>
						</div>
						<div class="lower-text">
							Our power of choice is untrammelled & when nothing prevents our being able to do what we like best, every pleasure.
						</div>
						<div class="lower-box clearfix">
							<div class="signature">
								<img src="{{ asset_url('client/images/resource/signature-1.png') }}" alt="" title="">
							</div>
							<div class="iso">
								<div class="iso-icon">
									<span class="icon"><img src="{{ asset_url('client/images/icons/iso-icon.png') }}" alt=""></span>
								</div>
								<div class="txt">
									Certified Company
								</div>
								<div class="number">
									ISO 9001:2015
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner">
						<div class="image-box clearfix">
							<figure class="image"><img src="{{ asset_url('client/images/resource/featured-image-12.jpg') }}" alt="" title=""></figure>
							<div class="caption">
								<span class="big-txt">16</span> 
								<span class="txt">
									Years
									<br>
									of Experience
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- MVG / History Section -->
	<section class="mvg-history">
		<div class="mvg">
			<div class="auto-container">
				<div class="mvg-box">
					<div class="row clearfix">

						<!-- MVG -->
						<div class="mvg-col col-xl-9 col-lg-12 col-md-12 col-sm-12">
							<div class="row clearfix">

								<!-- Why Block -->
								<div class="mvg-block col-lg-4 col-md-6 col-sm-12">
									<div class="inner-box">
										<div class="image-box">
											<img src="{{ asset_url('client/images/resource/mission-image.jpg') }}" alt="" title="">
										</div>
										<div class="lower-box">
											<div class="subtitle"><span>Pruners</span></div>
											<h5>Our Mission</h5>
											<div class="letter">M</div>
										</div>
									</div>
								</div>
								<!--Why Block-->
								<div class="mvg-block col-lg-4 col-md-6 col-sm-12">
									<div class="inner-box">
										<div class="image-box">
											<img src="{{ asset_url('client/images/resource/vision-image.jpg') }}" alt="" title="">
										</div>
										<div class="lower-box">
											<div class="subtitle"><span>Pruners</span></div>
											<h5>Our Vision</h5>
											<div class="letter">V</div>
										</div>
									</div>
								</div>
								<!--Why Block-->
								<div class="mvg-block col-lg-4 col-md-6 col-sm-12">
									<div class="inner-box">
										<div class="image-box">
											<img src="{{ asset_url('client/images/resource/goal-image.jpg') }}" alt="" title="">
										</div>
										<div class="lower-box">
											<div class="subtitle"><span>Pruners</span></div>
											<h5>Our Goals</h5>
											<div class="letter">G</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--Description-->
						<div class="description-col col-xl-3 col-lg-12 col-md-12 col-sm-12">
							<div class="carousel-box">
								<div class="mvg-carousel owl-theme owl-carousel">
									<!--Desc Block-->
									<div class="desc-block">
										<div class="inner">
											<div class="fade-icon"><span class="flaticon-bullseye"></span></div>
											<div class="icon-box"><span class="flaticon-bullseye"></span></div>
											<h5>Mission Statement</h5>
											<div class="text">Business will frequently occur that pleasures have to be repudiated & annoyances accepted.</div>
											<div class="link"><a href="#" class="theme-btn">Continue Reading <i class="arrow flaticon-play-button-1"></i></a></div>
										</div>
									</div>
									<!--Desc Block-->
									<div class="desc-block">
										<div class="inner">
											<div class="fade-icon"><span class="flaticon-bullseye"></span></div>
											<div class="icon-box"><span class="flaticon-bullseye"></span></div>
											<h5>Vision Statement</h5>
											<div class="text">Business will frequently occur that pleasures have to be repudiated & annoyances accepted.</div>
											<div class="link"><a href="#" class="theme-btn">Continue Reading <i class="arrow flaticon-play-button-1"></i></a></div>
										</div>
									</div>
									<!--Desc Block-->
									<div class="desc-block">
										<div class="inner">
											<div class="fade-icon"><span class="flaticon-bullseye"></span></div>
											<div class="icon-box"><span class="flaticon-bullseye"></span></div>
											<h5>Goals Statement</h5>
											<div class="text">Business will frequently occur that pleasures have to be repudiated & annoyances accepted.</div>
											<div class="link"><a href="#" class="theme-btn">Continue Reading <i class="arrow flaticon-play-button-1"></i></a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="history-box">
			<div class="auto-container">
				<div class="carousel-box">
					<div class="history-carousel owl-theme owl-carousel">
						<!--History Block-->
						<div class="history-block">
							<div class="inner">
								<div class="date">
									<div class="date-inner"><span>2004</span></div>
								</div>
								<h5>Early Start</h5>
								<div class="text">It is a long established fact that will be distracted.</div>
							</div>
						</div>
						<!--History Block-->
						<div class="history-block">
							<div class="inner">
								<div class="date">
									<div class="date-inner"><span>2006</span></div>
								</div>
								<h5>Growing Pains</h5>
								<div class="text"> Indignation and dislike men who are so good beguiled.</div>
							</div>
						</div>
						<!--History Block-->
						<div class="history-block">
							<div class="inner">
								<div class="date">
									<div class="date-inner"><span>2007</span></div>
								</div>
								<h5>Future Goals</h5>
								<div class="text">Demoralized by the charms off the pleasure moment.</div>
							</div>
						</div>
						<!--History Block-->
						<div class="history-block">
							<div class="inner">
								<div class="date">
									<div class="date-inner"><span>2009</span></div>
								</div>
								<h5>1000+ Projects</h5>
								<div class="text">Foresee the pain & trouble finaly bound too ensure.</div>
							</div>
						</div>
						<!--History Block-->
						<div class="history-block">
							<div class="inner">
								<div class="date">
									<div class="date-inner"><span>2011</span></div>
								</div>
								<h5>Early Start</h5>
								<div class="text">It is a long established fact that will be distracted.</div>
							</div>
						</div>
						<!--History Block-->
						<div class="history-block">
							<div class="inner">
								<div class="date">
									<div class="date-inner"><span>2014</span></div>
								</div>
								<h5>Growing Pains</h5>
								<div class="text"> Indignation and dislike men who are so good beguiled.</div>
							</div>
						</div>
						<!--History Block-->
						<div class="history-block">
							<div class="inner">
								<div class="date">
									<div class="date-inner"><span>2016</span></div>
								</div>
								<h5>Future Goals</h5>
								<div class="text">Demoralized by the charms off the pleasure moment.</div>
							</div>
						</div>
						<!--History Block-->
						<div class="history-block">
							<div class="inner">
								<div class="date">
									<div class="date-inner"><span>2019</span></div>
								</div>
								<h5>1930+ Projects</h5>
								<div class="text">Foresee the pain & trouble finaly bound too ensure.</div>
							</div>
						</div>
					</div>
				</div>
				<div class="see-all"><a href="about.html" class="theme-btn">View Full History <i class="arrow flaticon-play-button-1"></i></a></div>
			</div>
		</div>
	</section>
	<!--Why Us Section-->
	<section class="why-us-three">
		<div class="auto-container">
			<div class="title-box">
				<div class="row clearfix">
					<div class="left-col col-xl-6 col-lg-12 col-md-12">
						<div class="sec-title alternate">
							<div class="title-icon"><span class="icon"><img src="{{ asset_url('client/images/icons/leaf-eight.png') }}" alt="" title=""></span></div>
							<div class="subtitle">Why Choose Us</div>
							<h2>Reason For Choose Us</h2>
						</div>
					</div>
					<div class="right-col col-xl-6 col-lg-12 col-md-12">
						<div class="text">How to pursue pleasure rationally encounter consequences that painful again is there anyone who loves.</div>
					</div>
				</div>
			</div>
			<div class="why-box">
				<div class="row clearfix">
					<!--Why Block-->
					<div class="why-block-three col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="flap"></span>
								<span class="icon flaticon-null"></span>
							</div>
							<h5>Experienced</h5>
							<div class="text">Indignation dislike worked who that our therefore holds. </div>
						</div>
					</div>
					<!--Why Block-->
					<div class="why-block-three col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="flap"></span>
								<span class="icon flaticon-insurance"></span>
							</div>
							<h5>Fully Insured</h5>
							<div class="text">How all this mistakens idea our pleasure & praising. </div>
						</div>
					</div>
					<!--Why Block-->
					<div class="why-block-three col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="flap"></span>
								<span class="icon flaticon-medal-1"></span>
							</div>
							<h5>100% Guarantee</h5>
							<div class="text">Take trivial example which of us ever undertakes rights.</div>
						</div>
					</div>
					<!--Why Block-->
					<div class="why-block-three col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="flap"></span>
								<span class="icon flaticon-dog-2"></span>
							</div>
							<h5>Pet & Kid Safe</h5>
							<div class="text">How all this mistakens idea our pleasure & praising. </div>
						</div>
					</div>
					<!--Why Block-->
					<div class="why-block-three col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="flap"></span>
								<span class="icon flaticon-gardener-1"></span>
							</div>
							<h5>Professional Staff</h5>
							<div class="text">Take trivial example which of us ever undertakes rights.</div>
						</div>
					</div>
					<!--Why Block-->
					<div class="why-block-three col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="flap"></span>
								<span class="icon flaticon-offer"></span>
							</div>
							<h5>Competetive Pricing</h5>
							<div class="text">Indignation dislike worked who that our therefore holds.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Team Section-->
	<section class="team-two">
		<div class="auto-container">
			<div class="sec-title">
				<div class="title-icon"><span class="icon"><img src="{{ asset_url('client/images/icons/leaf-two.png') }}" alt="" title=""></span></div>
				<div class="subtitle">Behind Lander</div>
				<h2>Professional Team</h2>
			</div>
			<div class="team-box">
				<div class="team-carousel owl-theme owl-carousel">
					<!--Team block-->
					<div class="team-block-two">
						<div class="inner-box">
							<div class="upper">
								<div class="image-box">
									<img src="{{ asset_url('client/images/resource/team-4.jpg') }}" alt="" title="">
								</div>
							</div>
							<div class="lower">
								<div class="designation">Founder</div>
								<h5><a href="#">Isaac Freddie</a></h5>
								<div class="phone-box">
									<a href="#" class="phone"><span class="icon flaticon-headphones"></span>+31 65 792 63 11</a>
									<div class="share-it">
										<span class="theme-btn share-icon flaticon-share-1"></span>
										<div class="share-list">
											<ul class="clearfix">
												<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
												<li><a href="#"><span class="fab fa-twitter"></span></a></li>
												<li><a href="#"><span class="fab fa-instagram"></span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Team block-->
					<div class="team-block-two">
						<div class="inner-box">
							<div class="upper">
								<div class="image-box">
									<img src="{{ asset_url('client/images/resource/team-5.jpg') }}" alt="" title="">
								</div>
							</div>
							<div class="lower">
								<div class="designation">manager</div>
								<h5><a href="#">William Theo</a></h5>
								<div class="phone-box">
									<a href="#" class="phone"><span class="icon flaticon-headphones"></span>+31 65 792 63 12</a>
									<div class="share-it">
										<span class="theme-btn share-icon flaticon-share-1"></span>
										<div class="share-list">
											<ul class="clearfix">
												<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
												<li><a href="#"><span class="fab fa-twitter"></span></a></li>
												<li><a href="#"><span class="fab fa-instagram"></span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Team block-->
					<div class="team-block-two">
						<div class="inner-box">
							<div class="upper">
								<div class="image-box">
									<img src="{{ asset_url('client/images/resource/team-6.jpg') }}" alt="" title="">
								</div>
							</div>
							<div class="lower">
								<div class="designation">Gardenist</div>
								<h5><a href="#">Arlo Reuben</a></h5>
								<div class="phone-box">
									<a href="#" class="phone"><span class="icon flaticon-envelope-1"></span>arlo@lander.com</a>
									<div class="share-it">
										<span class="theme-btn share-icon flaticon-share-1"></span>
										<div class="share-list">
											<ul class="clearfix">
												<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
												<li><a href="#"><span class="fab fa-twitter"></span></a></li>
												<li><a href="#"><span class="fab fa-instagram"></span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Team block-->
					<div class="team-block-two">
						<div class="inner-box">
							<div class="upper">
								<div class="image-box">
									<img src="{{ asset_url('client/images/resource/team-7.jpg') }}" alt="" title="">
								</div>
							</div>
							<div class="lower">
								<div class="designation">Founder</div>
								<h5><a href="#">Nathan Elliot</a></h5>
								<div class="phone-box">
									<a href="#" class="phone"><span class="icon flaticon-headphones"></span>+31 65 792 63 13</a>
									<div class="share-it">
										<span class="theme-btn share-icon flaticon-share-1"></span>
										<div class="share-list">
											<ul class="clearfix">
												<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
												<li><a href="#"><span class="fab fa-twitter"></span></a></li>
												<li><a href="#"><span class="fab fa-instagram"></span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Team block-->
					<div class="team-block-two">
						<div class="inner-box">
							<div class="upper">
								<div class="image-box">
									<img src="{{ asset_url('client/images/resource/team-4.jpg') }}" alt="" title="">
								</div>
							</div>
							<div class="lower">
								<div class="designation">Founder</div>
								<h5><a href="#">Isaac Freddie</a></h5>
								<div class="phone-box">
									<a href="#" class="phone"><span class="icon flaticon-headphones"></span>+31 65 792 63 11</a>
									<div class="share-it">
										<span class="theme-btn share-icon flaticon-share-1"></span>
										<div class="share-list">
											<ul class="clearfix">
												<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
												<li><a href="#"><span class="fab fa-twitter"></span></a></li>
												<li><a href="#"><span class="fab fa-instagram"></span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Team block-->
					<div class="team-block-two">
						<div class="inner-box">
							<div class="upper">
								<div class="image-box">
									<img src="{{ asset_url('client/images/resource/team-5.jpg') }}" alt="" title="">
								</div>
							</div>
							<div class="lower">
								<div class="designation">manager</div>
								<h5><a href="#">William Theo</a></h5>
								<div class="phone-box">
									<a href="#" class="phone"><span class="icon flaticon-headphones"></span>+31 65 792 63 12</a>
									<div class="share-it">
										<span class="theme-btn share-icon flaticon-share-1"></span>
										<div class="share-list">
											<ul class="clearfix">
												<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
												<li><a href="#"><span class="fab fa-twitter"></span></a></li>
												<li><a href="#"><span class="fab fa-instagram"></span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Team block-->
					<div class="team-block-two">
						<div class="inner-box">
							<div class="upper">
								<div class="image-box">
									<img src="{{ asset_url('client/images/resource/team-6.jpg') }}" alt="" title="">
								</div>
							</div>
							<div class="lower">
								<div class="designation">Gardenist</div>
								<h5><a href="#">Arlo Reuben</a></h5>
								<div class="phone-box">
									<a href="#" class="phone"><span class="icon flaticon-envelope-1"></span>arlo@lander.com</a>
									<div class="share-it">
										<span class="theme-btn share-icon flaticon-share-1"></span>
										<div class="share-list">
											<ul class="clearfix">
												<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
												<li><a href="#"><span class="fab fa-twitter"></span></a></li>
												<li><a href="#"><span class="fab fa-instagram"></span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Team block-->
					<div class="team-block-two">
						<div class="inner-box">
							<div class="upper">
								<div class="image-box">
									<img src="{{ asset_url('client/images/resource/team-7.jpg') }}" alt="" title="">
								</div>
							</div>
							<div class="lower">
								<div class="designation">Founder</div>
								<h5><a href="#">Nathan Elliot</a></h5>
								<div class="phone-box">
									<a href="#" class="phone"><span class="icon flaticon-headphones"></span>+31 65 792 63 13</a>
									<div class="share-it">
										<span class="theme-btn share-icon flaticon-share-1"></span>
										<div class="share-list">
											<ul class="clearfix">
												<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
												<li><a href="#"><span class="fab fa-twitter"></span></a></li>
												<li><a href="#"><span class="fab fa-instagram"></span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Awards Section-->
	<section class="awards-section">
		<div class="bottom-image"><img src="{{ asset_url('client/images/resource/anim-image-4.png') }}" alt="" title=""></div>
		<div class="auto-container">
			<div class="row clearfix">
				<!--Left Column-->
				<div class="left-col">
					<div class="image-layer" style="background-image: url(images/background/awards-bg.jpg);"></div>
					<div class="bg-icon"><img src="{{ asset_url('client/images/icons/awards-bg-icon.png') }}" alt="" title=""></div>
					<div class="inner clearfix">
						<div class="content-box">
							<div class="content">
								<div class="title-box">
									<div class="icon-box"><span class="icon flaticon-guarantee-3"></span></div>
									<div class="subtitle">Awards & Recognition</div>
									<h4>Most Awards Won <br>By a Company in <br>USA - <span class="theme_color">Pruners&CO</span></h4>
								</div>
								<div class="text">It is a long established fact that a reader will distracted by the readable content.</div>
								<div class="link-box"><a href="#" class="theme-btn btn-style-three"><span class="btn-title">All Our Awards <i class="arrow flaticon-play-button-1"></i></span></a></div>
							</div>
						</div>
					</div>
				</div>
				<!--Right Column-->
				<div class="right-col">
					<div class="inner clearfix">
						<div class="carousel-box">
							<div class="awards-carousel owl-theme owl-carousel">
								<!--Award Block-->
								<div class="award-block">
									<div class="inner-box">
										<div class="icon-box"><span class="award-date">Awards <br>2017</span></div>
										<div class="date">wyn’s 2017</div>
										<h6>Customer Choice <br>of The Year</h6>
										<div class="link-box">
											<a href="{{ asset_url('client/images/gallery/7.jpg') }}" class="has-tooltip lightbox-image" title="Award Images"><span class="fa fa-image"></span><span class="t-tip-box"><span class="t-t-text">Award Images</span></span></a>
										</div>
									</div>
								</div>
								<!--Award Block-->
								<div class="award-block">
									<div class="inner-box">
										<div class="icon-box"><span class="award-date">Awards <br>2014</span></div>
										<div class="date">asla 2014</div>
										<h6>Residential Design <br>Awards</h6>
										<div class="link-box">
											<a href="{{ asset_url('client/images/gallery/7.jpg') }}" class="has-tooltip lightbox-image" title="Award Images"><span class="fa fa-image"></span><span class="t-tip-box"><span class="t-t-text">Award Images</span></span></a>
										</div>
									</div>
								</div>
								<!--Award Block-->
								<div class="award-block">
									<div class="inner-box">
										<div class="icon-box"><span class="award-date">Awards <br>2010</span></div>
										<div class="date">wyn’s 2010</div>
										<h6>Public Parks and <br>Open Space</h6>
										<div class="link-box">
											<a href="{{ asset_url('client/images/gallery/7.jpg') }}" class="has-tooltip lightbox-image" title="Award Images"><span class="fa fa-image"></span><span class="t-tip-box"><span class="t-t-text">Award Images</span></span></a>
										</div>
									</div>
								</div>
								<!--Award Block-->
								<div class="award-block">
									<div class="inner-box">
										<div class="icon-box"><span class="award-date">Awards <br>2017</span></div>
										<div class="date">wyn’s 2017</div>
										<h6>Customer Choice <br>of The Year</h6>
										<div class="link-box">
											<a href="{{ asset_url('client/images/gallery/7.jpg') }}" class="has-tooltip lightbox-image" title="Award Images"><span class="fa fa-image"></span><span class="t-tip-box"><span class="t-t-text">Award Images</span></span></a>
										</div>
									</div>
								</div>
								<!--Award Block-->
								<div class="award-block">
									<div class="inner-box">
										<div class="icon-box"><span class="award-date">Awards <br>2014</span></div>
										<div class="date">asla 2014</div>
										<h6>Residential Design <br>Awards</h6>
										<div class="link-box">
											<a href="{{ asset_url('client/images/gallery/7.jpg') }}" class="has-tooltip lightbox-image" title="Award Images"><span class="fa fa-image"></span><span class="t-tip-box"><span class="t-t-text">Award Images</span></span></a>
										</div>
									</div>
								</div>
								<!--Award Block-->
								<div class="award-block">
									<div class="inner-box">
										<div class="icon-box"><span class="award-date">Awards <br>2010</span></div>
										<div class="date">wyn’s 2010</div>
										<h6>Public Parks and <br>Open Space</h6>
										<div class="link-box">
											<a href="{{ asset_url('client/images/gallery/7.jpg') }}" class="has-tooltip lightbox-image" title="Award Images"><span class="fa fa-image"></span><span class="t-tip-box"><span class="t-t-text">Award Images</span></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Testimonials Section-->
	<section class="testimonials-one alt-color">
		<div class="auto-container">
			<div class="title-box">
				<div class="row clearfix">
					<div class="left-col col-xl-6 col-lg-12 col-md-12">
						<div class="sec-title alternate">
							<div class="title-icon"><span class="icon"><img src="{{ asset_url('client/images/icons/leaf-four.png') }}" alt="" title=""></span></div>
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
								<div class="image"><img src="{{ asset_url('client/images/resource/testi-thumb-1.jpg') }}" alt="" title=""></div>
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
								<div class="image"><img src="{{ asset_url('client/images/resource/testi-thumb-2.jpg') }}" alt="" title=""></div>
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
								<div class="image"><img src="{{ asset_url('client/images/resource/testi-thumb-3.jpg') }}" alt="" title=""></div>
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
								<div class="image"><img src="{{ asset_url('client/images/resource/testi-thumb-1.jpg') }}" alt="" title=""></div>
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
								<div class="image"><img src="{{ asset_url('client/images/resource/testi-thumb-2.jpg') }}" alt="" title=""></div>
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
								<div class="image"><img src="{{ asset_url('client/images/resource/testi-thumb-3.jpg') }}" alt="" title=""></div>
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
								<div class="image"><img src="{{ asset_url('client/images/resource/testi-thumb-1.jpg') }}" alt="" title=""></div>
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
								<div class="image"><img src="{{ asset_url('client/images/resource/testi-thumb-2.jpg') }}" alt="" title=""></div>
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
								<div class="image"><img src="{{ asset_url('client/images/resource/testi-thumb-3.jpg') }}" alt="" title=""></div>
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

	<!-- Sponsors Section -->
	<section class="sponsors-section">
		<div class="sponsors-outer">

			<!-- Sponsors -->
			<div class="auto-container">

				<!-- Sponsors Carousel -->
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
