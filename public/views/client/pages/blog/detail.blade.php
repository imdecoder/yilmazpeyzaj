@extends('client.layouts.main')

@section('title', 'Yazı Adı - Yılmaz Peyzaj')
@section('description', 'Yazı açıklaması.')

@section('content')

	<!-- Banner Section -->
	<section class="page-banner single-banner">
		<div class="image-layer" style="background-image:url({{ asset_url('client/images/background/banner-image-1.jpg') }})"></div>
		<div class="banner-bottom-pattern"></div>
		<div class="banner-inner">
			<div class="auto-container">
				<div class="inner-container clearfix">
					<h1>
						Yazı Adı
					</h1>
					<div class="news-info">
						<div class="info clearfix">
							<div class="cat">
								<a href="{{ site_url('blog/kategori/detay') }}">
									Kategori Adı
								</a>
							</div>
							<div class="date">
								<span class="icon far fa-calendar"></span>
								19 Ekim, 2022
							</div>
						</div>
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
						<div class="post-details">
							<div class="inner-box">
								<div class="post-meta">
									<ul class="clearfix">
										<li class="author">
											<span class="thumb">
												<img src="{{ asset_url('client/images/resource/author-thumb-1.jpg') }}" alt="" title="">
											</span>
											<a href="#">
												Yazar: Muharrem Yılmaz
											</a>
										</li>
										<li>
											<a href="#">
												<span class="icon far fa-comment"></span>
												Yorum: 8
											</a>
										</li>
										<!--<li>
											<a href="#">
												<span class="icon far fa-heart"></span>
												Beğeni: 24
											</a>
										</li>-->
									</ul>
								</div>
								<div class="upper">
									<div class="image-box">
										<img src="{{ asset_url('client/images/resource/news-image-24.jpg') }}" alt="" title="">
									</div>
								</div>
								<div class="lower">
									<div class="text">
										<p>
											Yazı içeriği.
										</p>
									</div>
								</div>
								<div class="lower-info clearfix">
									<div class="related-tags">
										<ul class="clearfix">
											<li>
												<span class="fa fa-tags"></span>
												Etiketler:
											</li>
											<li>
												<a href="#">garden</a>,
												<a href="#">landscaping</a>,
												<a href="#">tips</a>
											</li>
										</ul>
									</div>
									<div class="share-post">
										<div class="social-links">
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
														<span class="fab fa-linkedin-in"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fab fa-youtube"></span>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="author-box">
							<div class="inner-box">
								<figure class="thumb">
									<img src="{{ asset_url('client/images/resource/author-thumb-4.jpg') }}" alt="">
								</figure>
								<h5>
									Muharrem Yılmaz
								</h5>
								<div class="link">
									<a href="#">
										E-posta: yilmazfidancilik55@gmail.com
									</a>
								</div>
								<div class="text">
									Yazar açıklaması.
								</div>
								<div class="follow-me">
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
												<span class="fab fa-linkedin-in"></span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="post-controls">
							<div class="inner clearfix">
								<div class="prev-post">
									<a href="#">
										<figure class="thumb">
											<img src="{{ asset_url('client/images/resource/thumb-4.jpg') }}" alt="">
										</figure>
										<div class="upper-title">
											<span class="icon fa fa-caret-left"></span>
											&ensp; Önceki
										</div>
										<span class="txt">
											Yazı Adı
										</span>
									</a>
								</div>
								<div class="next-post">
									<a href="#">
										<figure class="thumb">
											<img src="{{ asset_url('client/images/resource/thumb-5.jpg') }}" alt="">
										</figure>
										<div class="upper-title">
											Sonraki &ensp;
											<span class="icon fa fa-caret-right"></span>
										</div>
										<span class="txt">
											Yazı Adı
										</span>
									</a>
								</div>
							</div>
						</div>
						<div class="comments-area">
							<div class="group-title">
								<h4>
									Yorumlar
								</h4>
							</div>
							<div class="comment-box">
								<div class="comment">
									<div class="author-thumb">
										<figure class="thumb">
											<img src="{{ asset_url('client/images/resource/author-thumb-5.jpg') }}" alt="">
										</figure>
									</div>
									<div class="info">
										<span class="name">Steven Rich,</span>
										<span class="date">February 28, 2020 [11.00am]</span>
									</div>
									<div class="text">
										On the other hand, we denounce with righteous indignation  dislike men which toil and some great pleasure.
									</div>
									<div class="reply-link">
										<a href="#" class="theme-btn">
											<span class="flaticon-reply-all"></span>
										</a>
									</div>
								</div>
							</div>
							<div class="comment-box reply-comment">
								<div class="comment">
									<div class="author-thumb">
										<figure class="thumb">
											<img src="{{ asset_url('client/images/resource/author-thumb-6.jpg') }}" alt="">
										</figure>
									</div>
									<div class="info">
										<span class="name">William Cobus,</span>
										<span class="date">February 28, 2020 [11.00am]</span>
									</div>
									<div class="text">
										Our power of choice is untrammelled when nothing prevents all able to do what we like best is to be welcomed.
									</div>
									<div class="reply-link">
										<a href="#" class="theme-btn">
											<span class="flaticon-reply-all"></span>
										</a>
									</div>
								</div>
							</div>
							<div class="comment-box">
								<div class="comment">
									<div class="author-thumb">
										<figure class="thumb">
											<img src="{{ asset_url('client/images/resource/author-thumb-7.jpg') }}" alt="">
										</figure>
									</div>
									<div class="info">
										<span class="name">Boris Elbert,</span>
										<span class="date">February 27, 2020 [06.00pm]</span>
									</div>
									<div class="text">
										These cases are perfectly simple and easy to distinguish. In a free hour, of choice is and when nothing prevents.
									</div>
									<div class="reply-link">
										<a href="#" class="theme-btn">
											<span class="flaticon-reply-all"></span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="leave-comments">
							<div class="group-title">
								<h4>
									Yorum Yap
								</h4>
								<div class="instruction">
									E-posta adresiniz yayımlanmayacak.
								</div>
							</div>
							<div class="default-form comment-form">
								<form action="" method="post">
									<div class="row clearfix">
										<div class="col-md-12 col-sm-12 form-group">
											<textarea name="message" placeholder="Yorumunuz"></textarea>
										</div>
										<div class="col-md-6 col-sm-12 form-group">
											<input type="text" name="username" placeholder="Ad Soyad*" required>
										</div>
										<div class="col-md-6 col-sm-12 form-group">
											<input type="email" name="email" placeholder="E-posta*" required>
										</div>
										<div class="col-md-12 col-sm-12 form-group">
											<button type="submit" class="theme-btn btn-style-four">
												<span class="btn-title">
													Gönder
													<i class="arrow flaticon-play-button-1"></i>
												</span>
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<!-- Sidebar Side -->
				<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
					<aside class="sidebar blog-sidebar">

						<!-- Sidebar Widget -->
						<div class="sidebar-widget search-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="widget-inner">
								<form method="post" action="blog.html">
									<div class="form-group">
										<input type="search" name="search-field" value="" placeholder="Blog içinde ara..." required="">
										<button type="submit"><span class="icon fa fa-search"></span></button>
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
								<div class="post">
									<figure class="post-thumb">
										<img src="{{ asset_url('client/images/resource/post-thumb-2.jpg') }}" alt="">
									</figure>
									<h5 class="text">
										<a href="#">
											Keeping Rodents & More Out of  Your Lawn
										</a>
									</h5>
									<div class="info">
										April 10, 2020
									</div>
								</div>
								<div class="post">
									<figure class="post-thumb">
										<img src="{{ asset_url('client/images/resource/post-thumb-3.jpg') }}" alt="">
									</figure>
									<h5 class="text">
										<a href="#">
											How to Build a Custom Wire Frame Lights?
										</a>
									</h5>
									<div class="info">
										April 08, 2020
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
											(+5) 678 90 12 345
										</a>
									</div>
									<div class="link-box">
										<a href="contact.html" class="theme-btn btn-style-four">
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
