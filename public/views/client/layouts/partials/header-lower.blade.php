<div class="header-lower">
	<div class="auto-container">
		<div class="inner clearfix">
			<div class="nav-outer clearfix">

				<!-- Mobile Navigation Toggler -->
				<div class="mobile-nav-toggler">
					<span class="icon flaticon-menu-1"></span>
				</div>

				<!-- Main Menu -->
				<nav class="main-menu navbar-expand-md navbar-light">
					<div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
						<ul class="navigation clearfix">
							<li class="{{ !segments(0) ? 'current' : null }}">
								<a href="{{ site_url() }}">
									Anasayfa
								</a>
							</li>
							<li class="{{ segments(0) == 'hakkimizda' ? 'current' : null }}">
								<a href="{{ site_url('hakkimizda') }}">
									Hakkımızda
								</a>
							</li>
							<li class="dropdown {{ segments(0) == 'hizmetler' ? 'current' : null }}">
								<a href="{{ site_url('hizmetler') }}">
									Hizmetler
								</a>
								<ul>
									<li>
										<a href="{{ site_url('hizmetler') }}">
											Tüm Hizmetler
										</a>
									</li>

									@foreach ($services['header'] as $service)

										<li>
											<a href="{{ site_url('hizmetler/' . $service->slug) }}">
												{!! $service->title !!}
											</a>
										</li>

									@endforeach

								</ul>
							</li>
							<li class="dropdown {{ segments(0) == 'referanslar' ? 'current' : null }}">
								<a href="{{ site_url('referanslar') }}">
									Referanslar
								</a>
								<ul>
									<li>
										<a href="{{ site_url('referanslar') }}">
											Tüm Referanslar
										</a>
									</li>
									<li>
										<a href="{{ site_url('referanslar/referans-adi') }}">
											Referans Adı
										</a>
									</li>
								</ul>
							</li>
							<li class="{{ segments(0) == 'blog' ? 'current' : null }}">
								<a href="{{ site_url('blog') }}">
									Blog
								</a>
							</li>
							<li class="{{ segments(0) == 'magaza' ? 'current' : null }}">
								<a href="{{ site_url('magaza') }}">
									Mağaza
								</a>
							</li>
							<li class="{{ segments(0) == 'iletisim' ? 'current' : null }}">
								<a href="{{ site_url('iletisim') }}">
									İletişim
								</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="more-links clearfix">
				<div class="cart-btn">
					<a href="{{ site_url('magaza/sepet') }}">
						<span class="flaticon-shopping-bag-2"></span>
					</a>
				</div>
				<div class="estimate-btn">
					<a href="{{ site_url('teklif-iste') }}">
						<span class="icon flaticon-smartphone-3"></span>
						Teklif İste
						<span class="arrow flaticon-play-button-1"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
