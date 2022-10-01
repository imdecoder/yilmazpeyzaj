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
						İletişim
					</h1>
					<div class="page-nav">
						<ul class="bread-crumb clearfix">
							<li>
								<a href="{{ site_url() }}">
									<span class="fa fa-home"></span>
								</a>
							</li>
							<li class="active">
								İletişim
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Banner Section -->

	<!-- Contact Section -->
	<section class="contact-three">
		<div class="outer-container">
			<div class="row clearfix">

				<!--Text Col-->
				<div class="text-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
					<div class="inner clearfix">
						<div class="top-icon">
							<span class="flaticon-internet"></span>
						</div>
						<div class="content-box">
							<div class="sec-title">
								<div class="title-icon">
									<span class="icon">
										<img src="{{ asset_url('client/images/icons/leaf-two.png') }}" alt="" title="">
									</span>
								</div>
								<div class="subtitle">
									Bize Ulaşın
								</div>
								<h2>
									Size Yardımcı Olmak İçin Buradayız
								</h2>
							</div>
							<div class="address">
								<h5>
									Merkez
								</h5>
								<div class="text">
									Derecik Mah. Recep Tayyip Erdoğan Bulv. Yol Kenarı, 55040 İlkadım/Samsun
								</div>
								<div class="link">
									<a href="https://goo.gl/maps/npocmZrziA2xwRgz5" class="theme-btn" target="_blank">
										<span class="btn-title">
											Haritada Görüntüle
											<i class="arrow flaticon-play-button-1"></i>
										</span>
									</a>
								</div>
							</div>
							<div class="info">
								<div class="row clearfix">

									<!-- Block -->
									<div class="info-block col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<div class="inner-box">
											<div class="icon">
												<span class="flaticon-message-1"></span>
											</div>
											<h6>
												Telefon & E-posta
											</h6>
											<ul>
												<li>
													<a href="tel:+905550804557">
														0 (555) 080 45 57
													</a>
												</li>
												<li>
													<a href="mailto:bilgi@yilmazpeyzaj.com">
														bilgi@yilmazpeyzaj.com
													</a>
												</li>
											</ul>
										</div>
									</div>

									<!-- Block -->
									<div class="info-block col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<div class="inner-box">
											<div class="icon">
												<span class="flaticon-clock"></span>
											</div>
											<h6>
												Çalışma Saatleri
											</h6>
											<ul>
												<li>
													Pzt-Cmt: 08:00-19:30
												</li>
												<li>
													Paz: 08:30-19:30
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Text Col -->
				<div class="form-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
					<div class="image-layer" style="background-image:url({{ asset_url('client/images/background/contact-form-bg.jpg') }})"></div>
					<div class="image-right">
						<img src="{{ asset_url('client/images/resource/contact-image.png') }}" alt="">
					</div>
					<div class="inner clearfix">
						<div class="content-box">
							<div class="sec-title">
								<div class="title-icon">
									<span class="icon">
										<img src="{{ asset_url('client/images/icons/leaf-two.png') }}" alt="" title="">
									</span>
								</div>
								<div class="subtitle">
									İletişim Formu
								</div>
								<h2>
									Bize Bir Mesaj Gönder
								</h2>
							</div>
							<div class="contact-form default-form">
								<form method="post" action="sendemail.php" id="contact-form">
									<div class="row clearfix">
										<div class="form-group col-lg-12 col-md-12 col-sm-12">
											<div class="field-inner">
												<input type="text" name="name" placeholder="Ad Soyad *" required>
											</div>
										</div>
										<div class="form-group col-lg-12 col-md-12 col-sm-12">
											<div class="field-inner">
												<input type="email" name="email" placeholder="E-posta*" required>
											</div>
										</div>
										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<div class="field-inner">
												<input type="text" name="phone" placeholder="Telefon" required>
											</div>
										</div>
										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<div class="field-inner">
												<select class="custom-select-box" name="subject">
													<option value="" selected disabled>
														Konu
													</option>
													<option value="1">
														Konu Adı
													</option>
												</select>
											</div>
										</div>
										<div class="form-group col-lg-12 col-md-12 col-sm-12">
											<div class="field-inner">
												<textarea name="message" placeholder="Mesajınız..." required></textarea>
											</div>
										</div>
										<div class="form-group col-lg-12 col-md-12 col-sm-12">
											<div class="field-inner">
												<button type="submit" class="theme-btn btn-style-four alternate">
													<span class="btn-title">
														Gönder
														<i class="arrow flaticon-play-button-1"></i>
													</span>
												</button>
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

	<!-- Map -->
	<section class="map-section">
		<div class="map-outer">
			<div class="map-box">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2997.2627591081246!2d36.277873814759076!3d41.30314710917722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408877dfbd7fa26b%3A0xc48b36cee813a0cd!2sY%C4%B1lmaz%20Fidanc%C4%B1l%C4%B1k%20%26%20Peyzaj%20Botanik%20%2C%20Sulama!5e0!3m2!1sen!2str!4v1664615706656!5m2!1sen!2str" allowfullscreen aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
	</section>

@endsection

@section('scripts')

	<script src="{{ asset_url('client/js/validate.js') }}"></script>

@endsection
