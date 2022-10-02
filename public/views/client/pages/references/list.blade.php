@extends('client.layouts.main')

@section('title', 'Referanslar - Yılmaz Peyzaj')
@section('description', 'Referanslar.')

@section('content')

	<!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url({{ asset_url('client/images/background/banner-image-1.jpg') }})"></div>
        <div class="banner-bottom-pattern"></div>
        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>
						Referanslar
					</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li>
								<a href="{{ site_url() }}">
									<span class="fa fa-home"></span>
								</a>
							</li>
                            <li class="active">
								Referanslar
							</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!-- Gallery Section -->
    <section class="gallery-section">
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
								Referanslar
							</div>
                            <h2>
								Yaptığımız İşleri Keşfedin
							</h2>
                        </div>
                    </div>
                    <div class="right-col col-xl-6 col-lg-12 col-md-12">
                        <div class="text">
							How to pursue pleasure rationally encounter consequences that painful again is there anyone who loves.
						</div>
                    </div>
                </div>
            </div>

			<!-- MixitUp Galery -->
            <div class="mixitup-gallery">

				<!-- Filter -->
                <div class="gallery-filters centered clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">
							Tümü
							<span class="count">15</span>
						</li>
                        <li class="filter" data-role="button" data-filter=".garden">
							Garden
							<span class="count">5</span>
						</li>
                    </ul>
                </div>
                <div class="filter-list row">

                    <!-- Gallery Item -->
                    <div class="gallery-item mix all lawncare col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset_url('client/images/gallery/9.jpg') }}" alt="" title="">
                            </div>
                            <div class="hover-box">
                                <div class="hvr-content">
                                    <div class="cat">
										<a href="#">
											Lawn Care
										</a>
									</div>
                                    <h5>
										<a href="#">
											Sprinkler Irrigation
										</a>
									</h5>
                                    <div class="link-box">
										<a href="#">
											<span class="icon flaticon-right-arrow-1"></span>
										</a>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item mix all garden col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset_url('client/images/gallery/8.jpg') }}" alt="" title="">
                            </div>
                            <div class="hover-box">
                                <div class="hvr-content">
                                    <div class="cat">
										<a href="#">
											Garden Care
										</a>
									</div>
                                    <h5>
										<a href="#">
											Communual Garden
										</a>
									</h5>
                                    <div class="link-box">
										<a href="#">
											<span class="icon flaticon-right-arrow-1"></span>
										</a>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-box">
                    <a class="theme-btn btn-style-four" href="#">
						<span class="btn-title">
							Daha Fazla Göster
							<i class="arrow flaticon-play-button-1"></i>
						</span>
					</a>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')

	<script src="{{ asset_url('client/js/mixitup.js') }}"></script>

@endsection
