@extends('client.layouts.main')

@section('title', 'Sepetim - Yılmaz Peyzaj')
@section('description', 'Alışveriş Sepetim.')

@section('content')

	<!-- Banner Section -->
	<section class="page-banner">
		<div class="image-layer" style="background-image:url({{ asset_url('client/images/background/banner-image-1.jpg') }})"></div>
		<div class="banner-bottom-pattern"></div>
		<div class="banner-inner">
			<div class="auto-container">
				<div class="inner-container clearfix">
					<h1>
						Alışveriş Sepeti
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
								Alışveriş Sepeti
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Section -->

	<!-- Cart Section -->
	<section class="cart-section">
		<div class="auto-container">
			<div class="cart-outer">
				<div class="totle-table clearfix">
					<div class="item pull-left">
						<p>
							<span>Sepetiniz:</span>
							2 Ürün
						</p>
					</div>
					<div class="total pull-right">
						<p>
							<span>Toplam:</span>
							<i>159,95 TL</i>
						</p>
					</div>
				</div>
				<div class="table-outer">
					<table class="cart-table">
						<thead class="cart-header">
							<tr>
								<th>
									Ürün
								</th>
								<th>
									Adet
								</th>
								<th class="price">
									Fiyat
								</th>
								<th>
									Toplam
								</th>
								<th>
									Kaldır
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="prod-column">
									<div class="column-box">
										<figure class="prod-thumb">
											<a href="#">
												<img src="{{ asset_url('client/images/resource/shop/prod-thumb-4.jpg') }}" alt="">
											</a>
										</figure>
										<h4>
											Hand Shovel
										</h4>
									</div>
								</td>
								<td class="qty">
									<input type="number" name="quantity" value="2">
								</td>
								<td class="sub-total">
									34.99 TL
								</td>
								<td class="total-price">
									69.98 TL
								</td>
								<td>
									<a href="#" class="remove-btn">
										<span class="fas fa-times"></span>
									</a>
								</td>
							</tr>
							<tr>
								<td class="prod-column">
									<div class="column-box">
										<figure class="prod-thumb">
											<a href="#">
												<img src="{{ asset_url('client/images/resource/shop/prod-thumb-5.jpg') }}" alt="">
											</a>
										</figure>
										<h4>
											Flower Pot
										</h4>
									</div>
								</td>
								<td class="qty">
									<input type="number" name="quantity" value="3">
								</td>
								<td class="sub-total">
									29.99 TL
								</td>
								<td class="total-price">
									89.97 TL
								</td>
								<td>
									<a href="#" class="remove-btn">
										<span class="fas fa-times"></span>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="row clearfix">
					<div class="col-lg-7 col-md-12 col-sm-12 column">
						<div class="apply-coupon clearfix">
							<div class="form-group clearfix">
								<input type="text" name="coupon-code" placeholder="Kupon kodunu girin...">
							</div>
							<div class="form-group clearfix">
								<button type="button" class="theme-btn btn-style-three">
									<span class="btn-title">
										Kuponu Uygula
										<i class="arrow flaticon-play-button-1"></i>
									</span>
								</button>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-12 col-sm-12 column clearfix">
						<div class="btn-box pull-right clearfix">
							<button type="button" class="theme-btn btn-style-four">
								<span class="btn-title">
									Sepeti Güncelle
									<!--<i class="arrow flaticon-play-button-1"></i>-->
								</span>
							</button>
							<button type="button" class="theme-btn btn-style-three">
								<span class="btn-title">
									Ödeme Yap
									<i class="arrow flaticon-play-button-1"></i>
								</span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Cart Section -->

@endsection
