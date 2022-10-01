@extends('client.layouts.main')

@section('title', 'Yılmaz Fidancılık & Peyzaj Botanik, Sulama')
@section('description', 'Açıklama.')

@section('content')

	<!-- Banner Section -->
	<section class="banner-section banner-one">
		<div class="banner-carousel owl-theme owl-carousel">

			<!-- Slide Item -->
			<div class="slide-item">
				<div class="image-layer" style="background-image: url({{ asset_url('client/images/main-slider/1.jpg') }})"></div>
				<div class="auto-container">
					<div class="content-box">
						<div class="content clearfix">
							<div class="inner">
								<div class="subtitle">
									<span class="icon"></span>
									Yılmaz Peyzaj'a Hoş Geldiniz
								</div>
								<h1>
									Çevre Düzenlemeniz İçin
									<br>
									Temiz & Güvenilir Eller
								</h1>
								<div class="text">
									Açıklama.
								</div>
								<div class="link-box clearfix">
									<a href="{{ site_url('hakkimizda') }}" class="theme-btn btn-style-one">
										<span class="btn-title">
											Daha Fazlası
											<i class="arrow flaticon-play-button-1"></i>
										</span>
									</a>
									<a href="{{ site_url('iletisim') }}" class="theme-btn btn-style-two">
										<span class="btn-title">
											İletişim
											<i class="arrow flaticon-play-button-1"></i>
										</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Slide Item -->
			<div class="slide-item">
				<div class="image-layer" style="background-image: url({{ asset_url('client/images/main-slider/2.jpg') }})"></div>
				<div class="auto-container">
					<div class="content-box right-aligned">
						<div class="content clearfix">
							<div class="inner">
								<div class="subtitle">
									<span class="icon"></span>
									İzlenim Formu
								</div>
								<h1>
									Peyzajınız İçin
									<br>
									Tam Çözüm
								</h1>
								<div class="text">
									Açıklama.
								</div>
								<div class="link-box clearfix">
									<a href="{{ site_url('hakkimizda') }}" class="theme-btn btn-style-one">
										<span class="btn-title">
											Devamını Oku
											<i class="arrow flaticon-play-button-1"></i>
										</span>
									</a>
									<a href="{{ site_url('hizmetler') }}" class="theme-btn btn-style-three">
										<span class="btn-title">
											Hizmetler
											<i class="arrow flaticon-play-button-1"></i>
										</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Slide Item -->
			<div class="slide-item">
				<div class="image-layer" style="background-image: url({{ asset_url('client/images/main-slider/3.jpg') }})"></div>
				<div class="auto-container">
					<div class="content-box">
						<div class="content clearfix">
							<div class="inner">
								<div class="subtitle">
									<span class="icon"></span>
									%100 Garanti Veriyoruz
								</div>
								<h1>
									Sağlıklı Peyzaj
									<br>
									Garantisi Veriyoruz
								</h1>
								<div class="text">
									Açıklama.
								</div>
								<div class="link-box clearfix">
									<a href="{{ site_url('hakkimizda') }}" class="theme-btn btn-style-one">
										<span class="btn-title">
											Devamını Oku
											<i class="arrow flaticon-play-button-1"></i>
										</span>
									</a>
									<a href="{{ site_url('referanslar') }}" class="theme-btn btn-style-two">
										<span class="btn-title">
											Referanslar
											<i class="arrow flaticon-play-button-1"></i>
										</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Section -->

	<!-- About Section -->
	<section class="about-section">
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
								Profesyonel Bahçıvan
							</h2>
						</div>
						<div class="text">
							<p class="bigger-text">
								2004'ten beri Samsun'da peyzaj, çim bakımı ve sulama hizmetlerinde lider.
							</p>
							<p>
								Açıklama.
							</p>
						</div>
						<div class="quote-box">
							<a href="https://www.youtube.com/watch?v=zWtWcIE-ZlY" class="vid-link lightbox-image">
								<span class="image">
									<img src="{{ asset_url('client/images/resource/quote-thumb.jpg') }}" alt="Hakkımızda" title="Hakkımızda">
								</span>
								<span class="icon flaticon-play-button-1"></span>
							</a>
							<div class="quote">
								<div class="quote-icon">
									<span></span>
								</div>
								<div class="quote-text">
									“Şirketimiz peyzaj tasarımında lider olarak ün kazanmıştır.”
								</div>
								<div class="info">
									<span class="name">Muharrem Yılmaz,</span>
									<span class="designation">Yılmaz Peyzaj'ın Kurucusu</span>
								</div>
							</div>
						</div>
						<div class="lower-box clearfix">
							<div class="link-box">
								<a href="{{ site_url('hakkimizda') }}" class="theme-btn btn-style-four">
									<span class="btn-title">
										Devamını Oku
										<i class="arrow flaticon-play-button-1"></i>
									</span>
								</a>
							</div>
							<div class="signature">
								<img src="{{ asset_url('client/images/resource/signature-1.png') }}" alt="Muharrem Yılmaz" title="Muharrem Yılmaz">
							</div>
						</div>
					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner">
						<div class="image-box clearfix">
							<figure class="image">
								<img src="{{ asset_url('client/images/resource/featured-image-1.jpg') }}" alt="İki Bin Proje Tamamlandı" title="2 Bin Proje Tamamlandı">
							</figure>
							<div class="anim-image">
								<img src="{{ asset_url('client/images/resource/anim-image-1.png') }}" alt="İki Bin Proje Tamamlandı" title="2 Bin Proje Tamamlandı">
							</div>
							<div class="caption">
								<span class="icon flaticon-leaves"></span> 
								<span class="big-txt">2b</span> 
								<span class="txt">Proje<br>Tamamlandı</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- What We Do Section -->
	<section class="what-we-do">
		<div class="tabs-box service-tabs">
			<div class="upper-box">
				<div class="pattern-layer"></div>
				<div class="auto-container">
					<div class="sec-title">
						<div class="title-icon">
							<span class="icon">
								<img src="{{ asset_url('client/images/icons/leaf-two.png') }}" alt="" title="">
							</span>
						</div>
						<div class="subtitle">
							Neler Yapıyoruz
						</div>
						<h2>
							Sağladığımız Hizmetler
						</h2>
					</div>
					<div class="buttons">
						<ul class="tab-buttons row clearfix">
							<li class="tab-btn active-btn col" data-tab="#tab-1">
								<span class="hvr-seeds"></span>
								<div class="icon-box">
									<span class="icon flaticon-hedge"></span>
									<span class="icon hvr-icon flaticon-null-3"></span>
								</div>
								<div class="btn-title">
									Bordur Taş İşleri
								</div>
								<span class="arrow flaticon-right-1"></span>
							</li>
							<li class="tab-btn col" data-tab="#tab-2">
								<span class="hvr-seeds"></span>
								<div class="icon-box">
									<span class="icon flaticon-digging-1"></span>
									<span class="icon hvr-icon flaticon-digging"></span>
								</div>
								<div class="btn-title">
									Çim & Bahçe Bakımı
								</div>
								<span class="arrow flaticon-right-1"></span>
							</li>
							<li class="tab-btn col" data-tab="#tab-3">
								<span class="hvr-seeds"></span>
								<div class="icon-box">
									<span class="icon flaticon-sprinkler"></span>
									<span class="icon hvr-icon flaticon-sprinkler-1"></span>
								</div>
								<div class="btn-title">
									Çit Yapımı
								</div>
								<span class="arrow flaticon-right-1"></span>
							</li>
							<li class="tab-btn col" data-tab="#tab-4">
								<span class="hvr-seeds"></span>
								<div class="icon-box">
									<span class="icon flaticon-painting"></span>
									<span class="icon hvr-icon flaticon-painting-1"></span>
								</div>
								<div class="btn-title">
									Dikim & Budama
								</div>
								<span class="arrow flaticon-right-1"></span>
							</li>
							<li class="tab-btn col" data-tab="#tab-5">
								<span class="hvr-seeds"></span>
								<div class="icon-box">
									<span class="icon flaticon-wheelbarrow"></span>
									<span class="icon hvr-icon flaticon-wheelbarrow-1"></span>
								</div>
								<div class="btn-title">
									Hizmet Adı
								</div>
								<span class="arrow flaticon-right-1"></span>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="tabs-content">
				
				<!-- Tab -->
				<div class="tab active-tab" id="tab-1">
					<div class="row outer-container clearfix">
						
						<!-- Image Column -->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="image-layer" style="background-image: url({{ asset_url('client/images/background/image-1.jpg') }})"></div>
							<div class="inner clearfix">
								<div class="content">
									<div class="inner-box">
										<div class="icon-box">
											<span class="flaticon-leaves"></span>
										</div>
										<h5>
											Hadi
											<br>
											Projenizi Başlatalım
										</h5>
										<div class="text">
											Randevu alın ve projenize bugün başlayalım.
										</div>
										<div class="link-box clearfix">
											<a href="#" class="theme-btn btn-style-one alt-hover">
												<span class="btn-title">
													Randevu Al
													<i class="arrow flaticon-play-button-1"></i>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Text Column -->
						<div class="text-column col-lg-6 col-md-12 col-sm-12">
							<div class="big-icon">
								<span class="flaticon-null-3"></span>
							</div>
							<div class="inner">
								<div class="content">
									<div class="s-title">
										<div class="icon">
											<span class="flaticon-null-3"></span>
										</div>
										<div class="subtitle">
											Hizmet Hakkında
										</div>
										<h4>
											Bordur Taş İşleri
										</h4>
									</div>
									<div class="text">
										Açıklama.
									</div>
									<div class="b-box">
										<div class="image">
											<a href="#">
												<img src="{{ asset_url('client/images/resource/bro-thumb-1.jpg') }}" alt="Bordur Taş İşleri">
											</a>
										</div>
										<div class="bro-title">
											Projeler & Çalışmalar
										</div>
										<div class="bro-link">
											<a href="#" class="theme-btn">
												bordur-tas-isleri.pdf
												<i class="arrow flaticon-play-button-1"></i>
											</a>
										</div>
									</div>
									<div class="more-link">
										<a href="{{ site_url('hizmetler/bordur-tas-isleri') }}" class="theme-btn">
											Daha Fazla Bilgi
											<i class="arrow flaticon-play-button-1"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Tab -->
				<div class="tab" id="tab-2">
					<div class="row outer-container clearfix">
						
						<!-- Image Column -->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="image-layer" style="background-image: url({{ asset_url('client/images/background/image-2.jpg') }})"></div>
							<div class="inner clearfix">
								<div class="content">
									<div class="inner-box">
										<div class="icon-box">
											<span class="flaticon-leaves"></span>
										</div>
										<h5>
											Hadi
											<br>
											Projenizi Başlatalım
										</h5>
										<div class="text">
											Randevu alın ve projenize bugün başlayalım.
										</div>
										<div class="link-box clearfix">
											<a href="#" class="theme-btn btn-style-one alt-hover">
												<span class="btn-title">
													Randevu Al
													<i class="arrow flaticon-play-button-1"></i>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Text Column -->
						<div class="text-column col-lg-6 col-md-12 col-sm-12">
							<div class="big-icon">
								<span class="flaticon-digging"></span>
							</div>
							<div class="inner">
								<div class="content">
									<div class="s-title">
										<div class="icon">
											<span class="flaticon-digging"></span>
										</div>
										<div class="subtitle">
											Hizmet Hakkında
										</div>
										<h4>
											Çim & Bahçe Bakımı
										</h4>
									</div>
									<div class="text">
										Açıklama.
									</div>
									<div class="b-box">
										<div class="image">
											<a href="#">
												<img src="{{ asset_url('client/images/resource/bro-thumb-1.jpg') }}" alt="Çim & Bahçe Bakımı">
											</a>
										</div>
										<div class="bro-title">
											Projeler & Çalışmalar
										</div>
										<div class="bro-link">
											<a href="#" class="theme-btn">
												cim-ve-bahce-bakimi.pdf
												<i class="arrow flaticon-play-button-1"></i>
											</a>
										</div>
									</div>
									<div class="more-link">
										<a href="{{ site_url('hizmetler/cim-ve-bahce-bakimi') }}" class="theme-btn">
											Daha Fazla Bilgi
											<i class="arrow flaticon-play-button-1"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Tab -->
				<div class="tab" id="tab-3">
					<div class="row outer-container clearfix">
						
						<!-- Image Column -->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="image-layer" style="background-image: url({{ asset_url('client/images/background/image-3.jpg') }})"></div>
							<div class="inner clearfix">
								<div class="content">
									<div class="inner-box">
										<div class="icon-box">
											<span class="flaticon-leaves"></span>
										</div>
										<h5>
											Hadi
											<br>
											Projenizi Başlatalım
										</h5>
										<div class="text">
											Randevu alın ve projenize bugün başlayalım.
										</div>
										<div class="link-box clearfix">
											<a href="#" class="theme-btn btn-style-one alt-hover">
												<span class="btn-title">
													Randevu Al
													<i class="arrow flaticon-play-button-1"></i>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Text Column -->
						<div class="text-column col-lg-6 col-md-12 col-sm-12">
							<div class="big-icon">
								<span class="flaticon-sprinkler-1"></span>
							</div>
							<div class="inner">
								<div class="content">
									<div class="s-title">
										<div class="icon">
											<span class="flaticon-sprinkler-1"></span>
										</div>
										<div class="subtitle">
											Hizmet Hakkında
										</div>
										<h4>
											Çit Yapımı
										</h4>
									</div>
									<div class="text">
										Açıklama.
									</div>
									<div class="b-box">
										<div class="image">
											<a href="#">
												<img src="{{ asset_url('client/images/resource/bro-thumb-1.jpg') }}" alt="Çit Yapımı">
											</a>
										</div>
										<div class="bro-title">
											Projeler & Çalışmalar
										</div>
										<div class="bro-link">
											<a href="#" class="theme-btn">
												cit-yapimi.pdf
												<i class="arrow flaticon-play-button-1"></i>
											</a>
										</div>
									</div>
									<div class="more-link">
										<a href="{{ site_url('hizmetler/cit-yapimi') }}" class="theme-btn">
											Daha Fazla Bilgi
											<i class="arrow flaticon-play-button-1"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Tab -->
				<div class="tab" id="tab-4">
					<div class="row outer-container clearfix">
						
						<!-- Image Column -->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="image-layer" style="background-image: url({{ asset_url('client/images/background/image-4.jpg') }})"></div>
							<div class="inner clearfix">
								<div class="content">
									<div class="inner-box">
										<div class="icon-box">
											<span class="flaticon-leaves"></span>
										</div>
										<h5>
											Hadi
											<br>
											Projenizi Başlatalım
										</h5>
										<div class="text">
											Randevu alın ve projenize bugün başlayalım.
										</div>
										<div class="link-box clearfix">
											<a href="#" class="theme-btn btn-style-one alt-hover">
												<span class="btn-title">
													Randevu Al
													<i class="arrow flaticon-play-button-1"></i>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Text Column -->
						<div class="text-column col-lg-6 col-md-12 col-sm-12">
							<div class="big-icon">
								<span class="flaticon-painting-1"></span>
							</div>
							<div class="inner">
								<div class="content">
									<div class="s-title">
										<div class="icon">
											<span class="flaticon-painting-1"></span>
										</div>
										<div class="subtitle">
											Hizmet Hakkında
										</div>
										<h4>
											Dikim & Budama
										</h4>
									</div>
									<div class="text">
										Açıklama.
									</div>
									<div class="b-box">
										<div class="image">
											<a href="#">
												<img src="{{ asset_url('client/images/resource/bro-thumb-1.jpg') }}" alt="Dikim & Budama">
											</a>
										</div>
										<div class="bro-title">
											Projeler & Çalışmalar
										</div>
										<div class="bro-link">
											<a href="#" class="theme-btn">
												dikim-ve-budama.pdf
												<i class="arrow flaticon-play-button-1"></i>
											</a>
										</div>
									</div>
									<div class="more-link">
										<a href="{{ site_url('hizmetler/dikim-ve-budama') }}" class="theme-btn">
											Daha Fazla Bilgi
											<i class="arrow flaticon-play-button-1"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Tab -->
				<div class="tab" id="tab-5">
					<div class="row outer-container clearfix">

						<!-- Image Column -->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="image-layer" style="background-image: url({{ asset_url('client/images/background/image-5.jpg') }})"></div>
							<div class="inner clearfix">
								<div class="content">
									<div class="inner-box">
										<div class="icon-box">
											<span class="flaticon-leaves"></span>
										</div>
										<h5>
											Hadi
											<br>
											Projenizi Başlatalım
										</h5>
										<div class="text">
											Randevu alın ve projenize bugün başlayalım.
										</div>
										<div class="link-box clearfix">
											<a href="#" class="theme-btn btn-style-one alt-hover">
												<span class="btn-title">
													Randevu Al
													<i class="arrow flaticon-play-button-1"></i>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Text Column -->
						<div class="text-column col-lg-6 col-md-12 col-sm-12">
							<div class="big-icon">
								<span class="flaticon-wheelbarrow-1"></span>
							</div>
							<div class="inner">
								<div class="content">
									<div class="s-title">
										<div class="icon">
											<span class="flaticon-wheelbarrow-1"></span>
										</div>
										<div class="subtitle">
											Hizmet Hakkında
										</div>
										<h4>
											Hizmet Adı
										</h4>
									</div>
									<div class="text">
										Açıklama.
									</div>
									<div class="b-box">
										<div class="image">
											<a href="#">
												<img src="{{ asset_url('client/images/resource/bro-thumb-1.jpg') }}" alt="Hizmet Adı">
											</a>
										</div>
										<div class="bro-title">
											Projeler & Çalışmalar
										</div>
										<div class="bro-link">
											<a href="#" class="theme-btn">
												hizmet-adi.pdf
												<i class="arrow flaticon-play-button-1"></i>
											</a>
										</div>
									</div>
									<div class="more-link">
										<a href="#" class="theme-btn">
											Daha Fazla Bilgi
											<i class="arrow flaticon-play-button-1"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Why Us Section -->
	<section class="why-us">
		<div class="pattern-layer"></div>
		<div class="right-leaf"></div>
		<div class="auto-container">
			<div class="title-box">
				<div class="row clearfix">
					<div class="left-col col-xl-6 col-lg-12 col-md-12">
						<div class="sec-title alternate">
							<div class="title-icon">
								<span class="icon">
									<img src="{{ asset_url('client/images/icons/leaf-four.png') }}" alt="Neden Bizi Seçmelisiniz" title="Neden Bizi Seçmelisiniz">
								</span>
							</div>
							<div class="subtitle">
								Neden Bizi Seçmelisiniz
							</div>
							<h2>
								Uzmanlar Bize Güvendi
							</h2>
						</div>
					</div>
					<div class="right-col col-xl-6 col-lg-12 col-md-12">
						<div class="text">
							Açıklama.
						</div>
					</div>
				</div>
			</div>
			<div class="row clearfix">

				<!-- Why Block -->
				<div class="why-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="flaticon-null"></span>
						</div>
						<h5>
							Tecrübeli
						</h5>
						<div class="text">
							Açıklama.
						</div>
						<div class="more-link">
							<a href="#" class="theme-btn">
								<span class="icon flaticon-right-arrow-1"></span>
							</a>
						</div>
						<div class="right-curve"></div>
					</div>
				</div>

				<!-- Why Block -->
				<div class="why-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="flaticon-insurance"></span>
						</div>
						<h5>
							Peşin Fiyatlandırma
						</h5>
						<div class="text">
							Açıklama.
						</div>
						<div class="more-link">
							<a href="#" class="theme-btn">
								<span class="icon flaticon-right-arrow-1"></span>
							</a>
						</div>
						<div class="right-curve"></div>
					</div>
				</div>

				<!-- Why Block -->
				<div class="why-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="flaticon-offer"></span>
						</div>
						<h5>
							Tam Sigortalı
						</h5>
						<div class="text">
							Açıklama.
						</div>
						<div class="more-link">
							<a href="#" class="theme-btn">
								<span class="icon flaticon-right-arrow-1"></span>
							</a>
						</div>
						<div class="right-curve"></div>
					</div>
				</div>

				<!-- Why Block -->
				<div class="why-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="flaticon-shovel"></span>
						</div>
						<h5>
							Kaliteli Ürünler
						</h5>
						<div class="text">
							Açıklama.
						</div>
						<div class="more-link">
							<a href="#" class="theme-btn">
								<span class="icon flaticon-right-arrow-1"></span>
							</a>
						</div>
						<div class="right-curve"></div>
					</div>
				</div>

				<!-- Why Block -->
				<div class="why-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="flaticon-dog-2"></span>
						</div>
						<h5>
							Evcil Hayvan & Çocuk Güvenliği
						</h5>
						<div class="text">
							Açıklama.
						</div>
						<div class="more-link">
							<a href="#" class="theme-btn">
								<span class="icon flaticon-right-arrow-1"></span>
							</a>
						</div>
						<div class="right-curve"></div>
					</div>
				</div>

				<!-- Why Block -->
				<div class="why-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="flaticon-gardener-1"></span>
						</div>
						<h5>
							Uzman Kadro
						</h5>
						<div class="text">
							Açıklama.
						</div>
						<div class="more-link">
							<a href="#" class="theme-btn">
								<span class="icon flaticon-right-arrow-1"></span>
							</a>
						</div>
						<div class="right-curve"></div>
					</div>
				</div>

				<!-- Why Block -->
				<div class="why-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="flaticon-medal-1"></span>
						</div>
						<h5>
							%100 Garanti
						</h5>
						<div class="text">
							Açıklama.
						</div>
						<div class="more-link">
							<a href="#" class="theme-btn">
								<span class="icon flaticon-right-arrow-1"></span>
							</a>
						</div>
						<div class="right-curve"></div>
					</div>
				</div>

				<!-- Why Block -->
				<div class="why-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="flaticon-on-time"></span>
						</div>
						<h5>
							Zamanında Teslimat
						</h5>
						<div class="text">
							Açıklama.
						</div>
						<div class="more-link">
							<a href="#" class="theme-btn">
								<span class="icon flaticon-right-arrow-1"></span>
							</a>
						</div>
						<div class="right-curve"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Facts Section -->
	<section class="facts-section">
		<div class="image-layer" style="background-image: url({{ asset_url('client/images/background/image-6.jpg') }})"></div>
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Title Column -->
				<div class="fact-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner">
						<div class="icon-box">
							<span class="flaticon-park"></span>
						</div>
						<div class="fact-count">
							<div class="count-box">
								<span class="count-text" data-stop="2.5" data-speed="1000">0</span><sup>b</sup>
							</div>
						</div>
						<h4>
							Tamamlanan İşler
						</h4>
					</div>
				</div>
				
				<!-- Title Column -->
				<div class="fact-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner">
						<div class="icon-box">
							<span class="flaticon-gardener"></span>
						</div>
						<div class="fact-count">
							<div class="count-box">
								<span class="count-text" data-stop="108" data-speed="3000">0</span>
							</div>
						</div>
						<h4>
							Uzman Peyzaj Mimarları
						</h4>
					</div>
				</div>
				
				<!-- Title Column -->
				<div class="fact-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner">
						<div class="icon-box">
							<span class="flaticon-medal"></span>
						</div>
						<div class="fact-count">
							<div class="count-box">
								<span class="count-text" data-stop="23" data-speed="2000">0</span><sup>+</sup>
							</div>
						</div>
						<h4>
							Ödüller & Onurlar
						</h4>
					</div>
				</div>
				
				<!-- Title Column -->
				<div class="fact-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner">
						<div class="icon-box">
							<span class="flaticon-customer-review-1"></span>
						</div>
						<div class="fact-count">
							<div class="count-box">
								<span class="count-text" data-stop="99" data-speed="3000">0</span><sup>%</sup>
							</div>
						</div>
						<h4>
							Memnun Müşteriler
						</h4>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Projects Section -->
	<section class="projects-section">
		<div class="auto-container">
			<div class="sec-title">
				<div class="title-icon">
					<span class="icon">
						<img src="{{ asset_url('client/images/icons/leaf-two.png') }}" alt="Hizmetlerimiz" title="Hizmetlerimiz">
					</span>
				</div>
				<div class="subtitle">
					Hizmetlerimiz
				</div>
				<h2>
					Güncel Hizmetlerimiz
				</h2>
			</div>
			<div class="carousel-box">
				<div class="project-carousel owl-theme owl-carousel">

					<!-- Project Block -->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<img src="{{ asset_url('client/images/resource/featured-image-2.jpg') }}" alt="Bordur Taş İşleri" title="Bordur Taş İşleri">
							</div>
							<div class="hover-box">
								<div class="hvr-content">
									<div class="cat">
										<a href="#">
											Kategori Adı
										</a>
									</div>
									<h5>
										<a href="#">
											Bordur Taş İşleri
										</a>
									</h5>
								</div>
							</div>
							<div class="link-box">
								<a href="project-single.html">
									<span class="icon flaticon-right-arrow-1"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="lower-text">
				Sağlıklı peyzajlar için garanti veriyoruz, kaliteden asla ödün vermemelisiniz.
				<a href="{{ site_url('hizmetler') }}" class="theme-btn">
					Tüm Hizmetleri Görüntüle
					<i class="arrow flaticon-play-button-1"></i>
				</a>
			</div>
		</div>
	</section>
	
	<!-- Work Process Section -->
	<section class="work-process">
		<div class="round-pattern-layer"></div>
		<div class="right-leaf">
			<img src="{{ asset_url('client/images/resource/leaf-1.png') }}" alt="" title="">
		</div>
		<div class="auto-container">
			<div class="title-box">
				<div class="row clearfix">
					<div class="left-col col-xl-6 col-lg-12 col-md-12">
						<div class="sec-title alternate">
							<div class="title-icon">
								<span class="icon">
									<img src="{{ asset_url('client/images/icons/leaf-four.png') }}" alt="" title="">
								</span>
							</div>
							<div class="subtitle">
								Nasıl Çalışıyoruz?
							</div>
							<h2>
								Çalışma Süreci
							</h2>
						</div>
					</div>
					<div class="right-col col-xl-6 col-lg-12 col-md-12">
						<div class="text">
							Açıklama.
						</div>
					</div>
				</div>
			</div>
			<div class="process">
				<div class="row clearfix">

					<!-- Process Block -->
					<div class="process-block col-xl-3 col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<img src="{{ asset_url('client/images/resource/featured-image-5.jpg') }}" alt="Bir Uzmanla Konuşun" title="Bir Uzmanla Konuşun">
								<div class="hover-box">
									<div class="hvr-content">
										<div class="text">
											Açıklama.
										</div>
									</div>
								</div>
							</div>
							<div class="lower-box">
								<div class="icon-box">
									<span class="flaticon-consulting"></span>
								</div>
								<div class="step">
									Adım Bir
								</div>
								<h5>
									Bir Uzmanla Konuşun
								</h5>
							</div>
						</div>
					</div>

					<!-- Process Block -->
					<div class="process-block col-xl-3 col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<img src="{{ asset_url('client/images/resource/featured-image-6.jpg') }}" alt="Tasarım Önerisi" title="Tasarım Önerisi">
								<div class="hover-box">
									<div class="hvr-content">
										<div class="text">
											Açıklama.
										</div>
									</div>
								</div>
							</div>
							<div class="lower-box">
								<div class="icon-box">
									<span class="flaticon-blueprint"></span>
								</div>
								<div class="step">
									Adım İki
								</div>
								<h5>
									Tasarım Önerisi
								</h5>
							</div>
						</div>
					</div>

					<!-- Process Block -->
					<div class="process-block col-xl-3 col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<img src="{{ asset_url('client/images/resource/featured-image-7.jpg') }}" alt="Ekime Başlama" title="Ekime Başlama">
								<div class="hover-box">
									<div class="hvr-content">
										<div class="text">
											Açıklama.
										</div>
									</div>
								</div>
							</div>
							<div class="lower-box">
								<div class="icon-box">
									<span class="flaticon-gardener-2"></span>
								</div>
								<div class="step">
									Adım Üç
								</div>
								<h5>
									Ekime Başlama
								</h5>
							</div>
						</div>
					</div>

					<!-- Process Block -->
					<div class="process-block col-xl-3 col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<img src="{{ asset_url('client/images/resource/featured-image-8.jpg') }}" alt="Piknik Vakti" title="Piknik Vakti">
								<div class="hover-box">
									<div class="hvr-content">
										<div class="text">
											Açıklama.
										</div>
									</div>
								</div>
							</div>
							<div class="lower-box">
								<div class="icon-box">
									<span class="flaticon-trees"></span>
								</div>
								<div class="step">
									Adım Dört
								</div>
								<h5>
									Piknik Vakti
								</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Team Section -->
	<section class="team-section">
		<div class="left-leaf">
			<img src="{{ asset_url('client/images/resource/leaf-2.png') }}" alt="Profesyonel" title="Profesyonel">
		</div>
		<div class="right-leaf">
			<img src="{{ asset_url('client/images/resource/leaf-3.png') }}" alt="Uzmanlarımız" title="Uzmanlarımız">
		</div>
		<div class="auto-container">
			<div class="upper-box clearfix">
				<div class="sec-title">
					<div class="title-icon">
						<span class="icon">
							<img src="{{ asset_url('client/images/icons/leaf-two.png') }}" alt="" title="">
						</span>
					</div>
					<div class="subtitle">
						Profesyonel
					</div>
					<h2>
						Uzmanlarımız
					</h2>
				</div>
				<div class="link-box">
					<a href="#" class="theme-btn btn-style-four">
						<span class="btn-title">
							Tümünü Görüntüle
							<i class="arrow flaticon-play-button-1"></i>
						</span>
					</a>
				</div>
			</div>
			<div class="team-box">
				<div class="row clearfix">

					<!-- Team block -->
					<div class="team-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="upper">
								<div class="image-box">
									<img src="{{ asset_url('client/images/resource/team-1.jpg') }}" alt="Ad Soyad" title="Ad Soyad">
								</div>
							</div>
							<div class="lower">
								<div class="phone">
									<a href="#">
										<span class="icon flaticon-headphones"></span>
										Telefon: 0 (555) 555 5555
									</a>
								</div>
								<h5>
									<a href="#">
										Ad Soyad
									</a>
								</h5>
								<div class="designation">
									Unvan
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Testimonials Section -->
	<section class="testimonials-one">
		<div class="auto-container">
			<div class="title-box">
				<div class="row clearfix">
					<div class="left-col col-xl-6 col-lg-12 col-md-12">
						<div class="sec-title alternate">
							<div class="title-icon">
								<span class="icon">
									<img src="{{ asset_url('client/images/icons/leaf-four.png') }}" alt="Müşteri Yorumları" title="Müşteri Yorumları">
								</span>
							</div>
							<div class="subtitle">
								Müşteri Yorumları
							</div>
							<h2>
								Başarı Garantisi
							</h2>
						</div>
					</div>
					<div class="right-col col-xl-6 col-lg-12 col-md-12">
						<div class="text">
							Açıklama.
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-box">
				<div class="testimonial-carousel owl-theme owl-carousel">

					<!-- Block -->
					<div class="testi-block">
						<div class="inner-box">
							<div class="content">
								<div class="quote-icon">
									<span></span>
								</div>
								<div class="image">
									<img src="{{ asset_url('client/images/resource/testi-thumb-1.jpg') }}" alt="Ad Soyad" title="Ad Soyad">
								</div>
								<h6 class="name">
									Ad Soyad
								</h6>
								<div class="region">
									Adres
								</div>
								<div class="rating">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
								<div class="text">
									Kısa yazı.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Blog Section -->
	<section class="blog-section">
		<div class="auto-container">
			<div class="upper-box clearfix">
				<div class="sec-title">
					<div class="title-icon">
						<span class="icon">
							<img src="{{ asset_url('client/images/icons/leaf-two.png') }}" alt="Son Blog Yazıları" title="Son Blog Yazıları">
						</span>
					</div>
					<div class="subtitle">
						Yeni Yazılar & Güncellemeler
					</div>
					<h2>
						Son Blog Yazıları
					</h2>
				</div>
				<div class="link-box">
					<a href="{{ site_url('blog') }}" class="theme-btn">
						<span class="btn-title">
							Daha Fazla Görüntüle
							<i class="arrow flaticon-play-button-1"></i>
						</span>
					</a>
				</div>
			</div>
			<div class="blog-posts">
				<div class="row clearfix">

					<!-- News block -->
					<div class="news-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="upper">
								<div class="image-box">
									<img src="{{ asset_url('client/images/resource/news-image-1.jpg') }}" alt="Yazı Adı" title="Yazı Adı">
								</div>
								<div class="info clearfix">
									<div class="cat">
										<a href="blog-single.html">
											Kategori Adı
										</a>
									</div>
									<div class="date">
										<span class="icon far fa-calendar"></span>
										Tarih
									</div>
								</div>
								<div class="hvr-link theme-btn">
									<a href="blog-single.html">
										<span class="flaticon-cross"></span>
									</a>
								</div>
							</div>
							<div class="lower">
								<h5>
									<a href="blog-single.html">
										Yazı Adı
									</a>
								</h5>
								<div class="posted-by">
									<span class="icon far fa-user"></span>
									Yılmaz Peyzaj
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
			</div>
		</div>
	</section>

	<!-- Contact Section -->
	<section class="contact-section">
		<div class="pattern-layer"></div>
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Text Column -->
				<div class="text-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner">
						<div class="sec-title">
							<div class="title-icon">
								<span class="icon">
									<img src="{{ asset_url('client/images/icons/leaf-two.png') }}" alt="Ücretsiz Teklif Talebi" title="Ücretsiz Teklif Talebi">
								</span>
							</div>
							<div class="subtitle">
								Bize Ulaşın
							</div>
							<h2>
								Ücretsiz Teklif Talebi
							</h2>
							<div class="sub-text">
								Yılmaz Peyzaj'ın çim bakımı ve bahçe profesyonellerinden ücretsiz teklif talepleri alın.
							</div>
						</div>
						<div class="form-outer">
							<div class="form-box">
								<div class="discount">
									%40 Tasarruf
								</div>

								<!-- Newsletter -->
								<div class="quote-form default-form">
									<form method="post" action="contact.html">
										<div class="row clearfix">
											<div class="form-group col-lg-6 col-md-6 col-sm-12">
												<div class="field-inner">
													<input type="text" name="name" placeholder="Ad Soyad *" required>
													<span class="alt-icon far fa-user"></span>
												</div>
											</div>
											<div class="form-group col-lg-6 col-md-6 col-sm-12">
												<div class="field-inner">
													<input type="email" name="email" placeholder="E-posta *" required>
													<span class="alt-icon far fa-envelope"></span>
												</div>
											</div>
											<div class="form-group col-lg-6 col-md-6 col-sm-12">
												<div class="field-inner">
													<input type="text" name="phone" placeholder="Telefon *" required>
													<span class="alt-icon fa fa-phone-alt"></span>
												</div>
											</div>
											<div class="form-group col-lg-6 col-md-6 col-sm-12">
												<div class="field-inner">
													<select class="custom-select-box" name="service">
														<option value="" selected disabled>
															Hizmet Seçiniz
														</option>
														<option value="1">
															Bordur Taş İşleri
														</option>
														<option value="2">
															Çim & Bahçe Bakımı
														</option>
														<option value="3">
															Çit Yapımı
														</option>
														<option value="4">
															Dikim Budama
														</option>
													</select>
												</div>
											</div>
											<div class="form-group col-lg-6 col-md-6 col-sm-12">
												<div class="field-inner">
													<input type="text" name="address" placeholder="Adres *" required>
													<span class="alt-icon fa fa-map-marker-alt"></span>
												</div>
											</div>
											<div class="form-group col-lg-6 col-md-6 col-sm-12">
												<div class="field-inner">
													<button type="submit" class="theme-btn btn-style-three alternate">
														<span class="btn-title">
															Teklif İste
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

				<!-- Image Column -->
				<div class="image-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner">
						<div class="image-box clearfix">
							<figure class="image">
								<img src="{{ asset_url('client/images/resource/anim-image-2.png') }}" alt="Ücretsiz Teklif Talebi" title="Ücretsiz Teklif Talebi">
							</figure>
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
						<figure class="image-box">
							<a href="#">
								<img src="{{ asset_url('client/images/clients/1.png') }}" alt="Referans Adı">
							</a>
						</figure>
					</div>
					<div class="slide-item">
						<figure class="image-box">
							<a href="#">
								<img src="{{ asset_url('client/images/clients/2.png') }}" alt="Referans Adı">
							</a>
						</figure>
					</div>
					<div class="slide-item">
						<figure class="image-box">
							<a href="#">
								<img src="{{ asset_url('client/images/clients/3.png') }}" alt="Referans Adı">
							</a>
						</figure>
					</div>
					<div class="slide-item">
						<figure class="image-box">
							<a href="#">
								<img src="{{ asset_url('client/images/clients/4.png') }}" alt="Referans Adı">
							</a>
						</figure>
					</div>
					<div class="slide-item">
						<figure class="image-box">
							<a href="#">
								<img src="{{ asset_url('client/images/clients/1.png') }}" alt="Referans Adı">
							</a>
						</figure>
					</div>
					<div class="slide-item">
						<figure class="image-box">
							<a href="#">
								<img src="{{ asset_url('client/images/clients/2.png') }}" alt="Referans Adı">
							</a>
						</figure>
					</div>
					<div class="slide-item">
						<figure class="image-box">
							<a href="#">
								<img src="{{ asset_url('client/images/clients/3.png') }}" alt="Referans Adı">
							</a>
						</figure>
					</div>
					<div class="slide-item">
						<figure class="image-box">
							<a href="#">
								<img src="{{ asset_url('client/images/clients/4.png') }}" alt="Referans Adı">
							</a>
						</figure>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
