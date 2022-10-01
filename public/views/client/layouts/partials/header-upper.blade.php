<div class="header-upper">
	<div class="auto-container">
		<div class="inner-container clearfix">

			<!-- Logo -->
			<div class="logo-box">
				<div class="logo">
					<a href="{{ site_url() }}" title="Yılmaz Peyzaj">
						<img src="{{ asset_url('client/images/logo.png') }}" alt="Yılmaz Peyzaj">
					</a>
				</div>
			</div>
			<div class="other-links clearfix">
				<div class="info">
					<div class="info-icon">
						<span class="flaticon-smartphone"></span>
					</div>
					<div class="phone">
						<a href="tel:+905550804557">
							0 (555) 080 45 57
						</a>
					</div>
					<div class="call">
						Bize Ulaşın
						<span class="icon flaticon-play-button-1"></span>
					</div>
				</div>
				<div class="search-box">
					<form action="{{ site_url('arama') }}" method="get">
						<div class="form-group">
							<div class="field-box">
								<input type="search" name="q" placeholder="Arama yap..." required="">
							</div>
							<div class="btn-box">
								<button type="submit" class="search-btn">
									<span class="flaticon-search-1"></span>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
