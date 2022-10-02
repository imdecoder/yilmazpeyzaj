@extends('client.layouts.main')

@section('title', 'Blog - Yılmaz Peyzaj')
@section('description', 'Blog.')

@section('content')

	<!-- Banner Section -->
	<section class="page-banner">
		<div class="image-layer" style="background-image:url({{ asset_url('client/images/background/banner-image-1.jpg') }})"></div>
		<div class="banner-bottom-pattern"></div>
		<div class="banner-inner">
			<div class="auto-container">
				<div class="inner-container clearfix">
					<h1>
						Blog
					</h1>
					<div class="page-nav">
						<ul class="bread-crumb clearfix">
							<li>
								<a href="{{ site_url() }}">
									<span class="fa fa-home"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Section -->

	<div class="sidebar-page-container blog-page">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Content Side -->
				<div class="content-side col-lg-8 col-md-12 col-sm-12">
					<div class="blog-content">

						<!-- News block -->
						<div class="news-block alternate">
							<div class="inner-box">
								<div class="upper">
									<div class="image-box">
										<img src="{{ asset_url('client/images/resource/news-image-21.jpg') }}" alt="" title="">
									</div>
									<div class="info clearfix">
										<div class="cat">
											<a href="blog-single.html">
												Garden Tips
											</a>
										</div>
										<div class="date">
											<span class="icon far fa-calendar"></span>
											April 25, 2020
										</div>
									</div>
									<div class="hvr-link theme-btn">
										<a href="blog-single.html">
											<span class="flaticon-cross"></span>
										</a>
									</div>
									<div class="share-it">
										<span class="theme-btn share-icon flaticon-share-1"></span>
										<div class="share-list">
											<ul class="clearfix">
												<li>
													<a href="#">
														<span class="fab fa-facebook-f"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fab fa-twitter"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fab fa-instagram"></span>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="lower">
									<h5>
										<a href="blog-single.html">
											Reduce Carbon Footprint with Gardening Robots
										</a>
									</h5>
									<div class="text">
										Must explain to you how all this mistaken idea of denouncing pleasure & praising pain was born and we will give you a complete account of the system...
									</div>
									<div class="post-meta">
										<ul class="clearfix">
											<li class="author">
												<span class="thumb">
													<img src="{{ asset_url('client/images/resource/author-thumb-1.jpg') }}" alt="" title="">
												</span>
												<a href="#">
													By: Edward Samuel
												</a>
											</li>
											<li>
												<a href="#">
													<span class="icon far fa-comment"></span>
													Comments: 08
												</a>
											</li>
											<li>
												<a href="#">
													<span class="icon far fa-heart"></span>
													Likes: 24
												</a>
											</li>
										</ul>
									</div>
									<div class="more-link">
										<a href="blog-single.html">
											<span class="icon flaticon-right-arrow"></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="pagination-box">
						<ul class="styled-pagination">
							<li>
								<a href="#" class="control">
									<span class="fa fa-caret-left"></span>
								</a>
							</li>
							<li>
								<a href="#" class="active">
									1
								</a>
							</li>
							<li>
								<a href="#">
									2
								</a>
							</li>
							<li>
								<a href="#">
									3
								</a>
							</li>
							<li>
								<a href="#" class="control">
									<span class="fa fa-caret-right"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>

				<!-- Sidebar Side -->
				<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
					<aside class="sidebar blog-sidebar">

						<!-- Sidebar Widget -->
						<div class="sidebar-widget search-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="widget-inner">
								<form action="" method="get">
									<div class="form-group">
										<input type="search" name="q" placeholder="Ara..." required>
										<button type="submit">
											<span class="icon fa fa-search"></span>
										</button>
									</div>
								</form>
							</div>
						</div>
						<div class="sidebar-widget archives wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="widget-inner">
								<div class="sidebar-title">
									<h4>
										Kategoriler
									</h4>
								</div>
								<ul>
									<li>
										<a href="#">
											<span class="ttl">Commercial</span>
											<span class="count">8</span>
										</a>
									</li>
									<li class="active">
										<a href="#">
											<span class="ttl">Design & Plan</span>
											<span class="count">3</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="sidebar-widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="widget-inner">
								<div class="sidebar-title">
									<h4>
										Popüler Yazılar
									</h4>
								</div>

								<!-- Post -->
								<div class="post">
									<figure class="post-thumb">
										<img src="{{ asset_url('client/images/resource/post-thumb-1.jpg') }}" alt="">
									</figure>
									<h5 class="text">
										<a href="#">
											Landscaping Mistakes & Howto Avoid Easily
										</a>
									</h5>
									<div class="info">
										April 25, 2020
									</div>
								</div>
							</div>
						</div>
						<div class="sidebar-widget popular-tags wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="widget-inner">
								<div class="sidebar-title">
									<h4>
										Etiketler
									</h4>
								</div>
								<ul class="tags-list clearfix">
									<li>
										<a href="#">
											Area
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="sidebar-widget call-to-widget wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="widget-inner">
								<div class="image-layer" style="background-image:url({{ asset_url('client/images/background/call-to-bg-2.jpg') }})"></div>
								<div class="content">
									<div class="icon-box">
										<span class="flaticon-gardener"></span>
									</div>
									<h5>
										Let’s Start Your Project
										<br>
										Contact Experts
									</h5>
									<div class="email">
										<a href="mailto:service@lander.com">
											service@lander.com
										</a>
									</div>
									<div class="phone">
										<a href="tel:(+5)6789012345">
											(+90) 678 902 3452
										</a>
									</div>
									<div class="link-box">
										<a href="{{ site_url('teklif-iste') }}" class="theme-btn btn-style-four">
											<span class="btn-title">
												Teklif İste
												<i class="arrow flaticon-play-button-1"></i>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>

@endsection
