@extends('client.layouts.main')

@section('title', 'Sıkça Sorulan Sorular - Yılmaz Peyzaj')
@section('description', 'Sıkça Sorulan Sorular.')

@section('content')

	<!-- Banner Section -->
	<section class="page-banner">
		<div class="image-layer" style="background-image:url({{ asset_url('client/images/background/banner-image-1.jpg') }})"></div>
		<div class="banner-bottom-pattern"></div>
		<div class="banner-inner">
			<div class="auto-container">
				<div class="inner-container clearfix">
					<h1>
						Sıkça Sorulan Sorular
					</h1>
					<div class="page-nav">
						<ul class="bread-crumb clearfix">
							<li>
								<a href="{{ site_url() }}">
									<span class="fa fa-home"></span>
								</a>
							</li>
							<li class="active">
								Sıkça Sorulan Sorular
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Section -->

	<!-- FAQ Section -->
	<section class="faqs-section">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="left-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner">
						<div class="sec-title">
							<div class="title-icon">
								<span class="icon">
									<img src="{{ asset_url('client/images/icons/leaf-two.png') }}" alt="" title="">
								</span>
							</div>
							<div class="subtitle">
								Müşterilerin Sıkça Sorulan Soruları
							</div>
							<h2>
								En Sık Sorulan Sorular
							</h2>
						</div>
						<ul class="accordion-box clearfix">

							<!-- Block -->
							<li class="accordion block"> <!-- active-block -->
								<div class="acc-btn"> <!-- active -->
									<div class="arrow">
										<span class="flaticon-play-button-1"></span>
									</div>
									Soru?
								</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">
											Cevap.
										</div>
									</div>
								</div>
							</li>

							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn">
									<div class="arrow">
										<span class="flaticon-play-button-1"></span>
									</div>
									Soru?
								</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">
											Cevap.
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="right-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner">
						<h5>
							Başka bir sorunuz mu var?
						</h5>
						<div class="text">
							Sorularınızı uzman ekibimize sorun ve en kısa sürede cevap alın.
						</div>
						<div class="faq-form default-form">
							<form action="" method="post">
								<div class="form-group">
									<div class="field-inner">
										<input type="text" name="name" placeholder="Ad Soyad *" required>
									</div>
								</div>
								<div class="form-group">
									<div class="field-inner">
										<input type="email" name="name" placeholder="E-posta *" required>
									</div>
								</div>
								<div class="form-group">
									<div class="field-inner">
										<textarea name="message" placeholder="Sorularınız..." required></textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="field-inner">
										<button type="submit" class="theme-btn btn-style-three alternate">
											<span class="btn-title">
												Gönder
												<i class="arrow flaticon-play-button-1"></i>
											</span>
										</button>
									</div>
								</div>
							</form>
						</div>
						<div class="info">
							<span>*</span>
							E-postanız paylaşılmayacak.
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
