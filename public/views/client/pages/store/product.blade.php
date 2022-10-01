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
						Ürün Adı
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
								Ürün Adı
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Banner Section -->

	<!-- product-details -->
	<section class="product-details">
		<div class="auto-container">
			<div class="basic-details">
				<div class="row clearfix">
					<div class="image-column col-lg-6 col-md-12 col-sm-12">
						<figure class="image">
							<a href="{{ asset_url('client/images/resource/shop/10.jpg') }}" class="lightbox-image" data-fancybox="gallery">
								<img src="{{ asset_url('client/images/resource/shop/10.jpg') }}" alt="">
							</a>
						</figure>
					</div>
					<div class="content-column col-lg-6 col-md-12 col-sm-12">
						<div class="product-details-content">
							<h3>
								Ürün Adı
							</h3>
							<ul class="rating-box clearfix">
								<li>
									<i class="fas fa-star"></i>
								</li>
								<li>
									<i class="fas fa-star"></i>
								</li>
								<li>
									<i class="fas fa-star"></i>
								</li>
								<li>
									<i class="fas fa-star"></i>
								</li>
								<li>
									<i class="fas fa-star-half-alt"></i>
								</li>
							</ul>
							<div class="reviews">
								<a href="product-single.html">
									[2 Müşteri Yorumu]
								</a>
							</div>
							<div class="item-price">
								<span>19.00 TL</span>
							</div>
							<div class="share">
								<a href="shop-single.html">
									<i class="flaticon-share-1"></i>
								</a>
							</div>
							<div class="text">
								<p>
									Who chooses to enjoy a pleasure that has no one  take a trivial example which of us undertakes laborious.
								</p>
							</div>
							<div class="product-highlights">
								<h5>
									Özellikler
								</h5>
								<ul class="list-item clearfix">
									<li>
										To take a trivial example ever undertakes.
									</li>
									<li>
										Who chooses to enjoy a pleasure that has no annoying.
									</li>
									<li>
										Produces no resultant pleasure.
									</li>
								</ul>
							</div>
							<div class="other-options clearfix">
								<div class="quentity-box">
									<div class="item-quantity">
										<input type="text" name="quantity" value="1" class="quantity-spinner">
									</div>
								</div>
								<div class="link-box">
									<button type="button" class="theme-btn btn-style-four">
										<span class="btn-title">
											Sepete Ekle
											<i class="arrow flaticon-play-button-1"></i>
										</span>
									</button>
								</div>
							</div>
							<div class="product-category">
								<ul class="list clearfix">
									<li>
										Etiketler:
									</li>
									<li>
										<a href="product-single.html">
											Roofing
										</a>,
									</li>
									<li>
										<a href="product-single.html">
											Safety
										</a>,
									</li>
									<li>
										<a href="product-single.html">
											Gloves
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="product-description">
				<div class="tabs-box">
					<div class="tab-btn-box centred">
						<ul class="tab-btns tab-buttons clearfix">
							<li class="tab-btn" data-tab="#tab-1">
								Açıklama
							</li>
							<li class="tab-btn active-btn" data-tab="#tab-2">
								Ürün Yorumları (2)
							</li>
						</ul>
					</div>
					<div class="tabs-content">
						<div class="tab" id="tab-1">
							<div class="text">
								<h4>
									Ürün Açıklaması
								</h4>
								<p>
									Nor again is there anyone who loves or pursues or desires to pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious except to obtain some advantage from it? But who has any right to find fault with a man who chooses.
								</p>
								<p>
									Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a completed great of the great explorer of the truth, the master-builder of human happiness except to obtain some advantage.
								</p>
							</div>
						</div>
						<div class="tab active-tab" id="tab-2">
							<div class="customer-comment">
								<div class="row clearfix">
									<div class="comment-col col-lg-6 col-ms-12 col-sm-12">
										<div class="comment">
											<figure class="customer-thumb">
												<img src="{{ asset_url('client/images/resource/author-thumb-8.jpg') }}" alt="">
											</figure>
											<div class="info clearfix">
												<h4>
													Steven Rich
												</h4>
												<span>March 10, 2020:</span>
											</div>
											<ul class="rating clearfix">
												<li>
													<i class="fas fa-star"></i>
												</li>
												<li>
													<i class="fas fa-star"></i>
												</li>
												<li>
													<i class="fas fa-star"></i>
												</li>
												<li>
													<i class="fas fa-star"></i>
												</li>
												<li>
													<i class="fas fa-star"></i>
												</li>
											</ul>
											<p>
												Value for money , I use it from long time & it is very useful and good product.
											</p>
										</div>
									</div>
									<div class="comment-col col-lg-6 col-ms-12 col-sm-12">
										<div class="comment">
											<figure class="customer-thumb">
												<img src="{{ asset_url('client/images/resource/author-thumb-9.jpg') }}" alt="">
											</figure>
											<div class="info clearfix">
												<h4>
													William Cobus
												</h4>
												<span>March 10, 2020:</span>
											</div>
											<ul class="rating clearfix">
												<li>
													<i class="fas fa-star"></i>
												</li>
												<li>
													<i class="fas fa-star"></i>
												</li>
												<li>
													<i class="fas fa-star"></i>
												</li>
												<li>
													<i class="fas fa-star"></i>
												</li>
												<li>
													<i class="fas fa-star"></i>
												</li>
											</ul>
											<p>
												We denounce with righteous indignation & who are so beguiled demoralized.
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="reply-box">
								<div class="reply-inner">
									<h3>
										Yorum Yapın,
										<span>E-posta adresiniz yayınlanmayacak. Gerekli alanlar * ile işaretlendi.</span>
									</h3>
									<div class="default-form review-form">
										<form action="" method="post" class="replay-form">
											<div class="row clearfix">
												<div class="col-lg-12 col-md-12 col-sm-12 form-group">
													<div class="field-label">
														Yorum
													</div>
													<textarea name="message"></textarea>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 form-group">
													<div class="field-label">
														Ad Soyad*
													</div>
													<input type="text" name="name" required>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 form-group">
													<div class="field-label">
														E-posta*
													</div>
													<input type="email" name="email" required>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
													<div class="review-box clearfix">
														<p>
															Puanınız
														</p>
														<ul class="rating clearfix">
															<li>
																<i class="far fa-star"></i>
															</li>
															<li>
																<i class="far fa-star"></i>
															</li>
															<li>
																<i class="far fa-star"></i>
															</li>
															<li>
																<i class="far fa-star"></i>
															</li>
															<li>
																<i class="far fa-star"></i>
															</li>
														</ul>
													</div>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
													<div class="btn-box clearfix">
														<button type="submit" class="theme-btn btn-style-four">
															<span class="btn-title">
																Gönder
																<i class="arrow flaticon-play-button-1"></i>
															</span>
														</button>
														<div class="remember-me">
															<input type="checkbox" id="remember">
															<label for="remember">
																<span class="description">Adımı ve e-postamı bir dahaki sefere yorum yapacağımda bu tarayıcıya kaydet.</span>
															</label>
														</div>
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
			</div>
			<div class="related-product">
				<h3>
					Benzer Ürünler
				</h3>
				<div class="row clearfix">

					<!-- Shop Item -->
					<div class="shop-item col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
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
											<span class="t-tip">Preview</span>
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
			</div>
		</div>
	</section>
	<!-- product-details end -->

@endsection

@section('scripts')

	<script src="{{ asset_url('client/js/touchspin.js') }}"></script>

@endsection
