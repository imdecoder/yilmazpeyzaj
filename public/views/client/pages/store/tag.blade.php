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
						Etiket Adı
					</h1>
					<div class="page-nav">
						<ul class="bread-crumb clearfix">
							<li>
								<a href="{{ site_url() }}">
									<span class="fa fa-home"></span>
								</a>
							</li>
							<li>
								<a href="{{ site_url('magaza') }}">
									Mağaza
								</a>
							</li>
							<li class="active">
								Etiket Adı
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Banner Section -->

	<div class="sidebar-page-container shop-page">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Content Side / Blog Sidebar -->
				<div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
					<div class="our-shop">
						<div class="shop-upper-box clearfix">
							<div class="items-label">
								Showing
								<span>1-9 of 20</span>
								Results
							</div>
							<div class="sort-by form-group">
								<select class="custom-select-box">
									<option>
										Default Sorting
									</option>
									<option>
										Price: Lowest First
									</option>
									<option>
										Price: Highest First
									</option>
									<option>
										Ascending
									</option>
									<option>
										Descending
									</option>
								</select>
							</div>
						</div>
						<div class="row clearfix">

							<!-- Shop Item -->
							<div class="shop-item col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
								<div class="inner-box">
									<div class="image">
										<a href="shop-single.html">
											<img src="{{ asset_url('client/images/resource/shop/1.jpg') }}" alt="">
										</a>
									</div>
									<div class="options">
										<ul class="option-box clearfix">
											<li class="add-fav">
												<a href="#">
													<span class="flaticon-heart-1"></span>
													<span class="t-tip">Favoriler</span>
												</a>
											</li>
											<li>
												<a href="shopping-cart.html">
													<span class="flaticon-shopping-bag-2"></span>
													Sepete Ekle
												</a>
											</li>
											<li class="zoom-btn">
												<a href="{{ asset_url('client/images/resource/shop/1.jpg') }}" class="lightbox-image" data-fancybox="products">
													<span class="flaticon-expand"></span>
													<span class="t-tip">Önizle</span>
												</a>
											</li>
										</ul>
									</div>
									<div class="lower-content">
										<div class="rating">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="far fa-star"></span>
										</div>
										<h5>
											<a href="shop-single.html">
												Ürün Adı
											</a>
										</h5>
										<div class="price">
											<span>46,00 TL</span>
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
									<a href="#" class="control">
										<span class="fa fa-caret-right"></span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Sidebar Side -->
				<div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
					<aside class="sidebar shop-sidebar">

						<!-- Search -->
						<div class="sidebar-widget search-box">
							<form action="" method="post">
								<div class="form-group">
									<input type="search" name="q" placeholder="Ara..." required>
									<button type="submit">
										<span class="icon fa fa-search"></span>
									</button>
								</div>
							</form>
						</div>

						<!-- Category Widget -->
						<div class="sidebar-widget categories">
							<div class="sidebar-title">
								<h4>
									Kategoriler
								</h4>
							</div>
							<div class="widget-content">
								<ul>
									<li>
										<a href="shop-single.html">
											Kategori Adı
										</a>
									</li>
									<li>
										<a href="shop-single.html">
											Kategori Adı
										</a>
									</li>
								</ul>
							</div>
						</div>

						<!-- Price Filters -->
						<div class="sidebar-widget price-filters rangeslider-widget">
							<div class="sidebar-title">
								<h4>
									Fiyata Göre Filtrele
								</h4>
							</div>
							<div class="range-slider-one clearfix">
								<div class="price-range-slider"></div>
								<div class="clearfix">
									<div class="pull-left">
										<a href="#" class="theme-btn btn-style-three">
											<span class="btn-title">Filter</span>
										</a>
									</div>
									<div class="pull-right">
										<div class="title">
											Price:
										</div>
										<div class="input">
											<input type="text" name="price" class="property-amount" readonly>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Post Widget -->
						<div class="sidebar-widget popular-products">
							<div class="sidebar-title">
								<h4>
									Popüler Ürünler
								</h4>
							</div>
							<div class="widget-content">
								
								<!-- Product -->
								<div class="product">
									<div class="post-thumb">
										<a href="shop-single.html">
											<img src="{{ asset_url('client/images/resource/shop/prod-thumb-1.jpg') }}" alt="">
										</a>
									</div>
									<div class="rating">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
									<h5>
										<a href="shop-single.html">
											Ürün Adı
										</a>
									</h5>
									<div class="price">
										46.00 TL
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
