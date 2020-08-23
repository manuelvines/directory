@extends('layouts.frontend')
@section('title','HostFriends')


@include('partials-frontend.header-home') 


@section('content')


		<section class="hero_single version_2" >
			<div class="wrapper">
				<div class="container">
					<h3>HOST FRIENDS</h3>
					<p>@lang('HomeTagline')</p>
					<form method="post" action="grid-listings-filterscol.html">
						<div class="row no-gutters custom-search-input-2">
							<div class="col-lg-4">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="{{ __('HomeFormKeyword') }}">
									<i class="icon_search"></i>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="{{ __('HomeFormWhere') }}">
									<i class="icon_pin_alt"></i>
								</div>
							</div>
							<div class="col-lg-3">
								<select class="wide">
									<option>Categorias</option>	
									<option>Shops</option>
									<option>Hotels</option>
									<option>Restaurants</option>
									<option>Bars</option>
									<option>Events</option>
									<option>Fitness</option>
								</select>
							</div>
							<div class="col-lg-2">
								<input type="submit" value="{{ __('Search') }}">
							</div>
						</div>
						<!-- /row -->
					</form>
				</div>
			</div>
		</section>
		<!-- /hero_single -->
		
		<div class="main_categories">
			<div class="container">
				<ul class="clearfix">
					<li>
						<a href="#">
							<i class="icon-shop"></i>
							<h3>Shops</h3>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="icon-lodging"></i>
							<h3>Hotels</h3>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="icon-restaurant"></i>
							<h3>Restaurants</h3>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="icon-bar"></i>
							<h3>Bars</h3>
						</a>
					</li>
					<li>
						<a href="{{ route('filtro') }}">
							<i class="icon-dot-3"></i>
							<h3>More</h3>
						</a>
					</li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		<!-- /main_categories -->
		
		<div class="container margin_60_35">
			<div class="main_title_3">
				<span></span>
				<h2>Popular Places</h2>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
				<a href="{{ route('filtro') }}">Ver todos</a>
			</div>
			<div class="row add_bottom_30">
				<div class="col-lg-3 col-sm-6">
					<a href="{{  route('detalle') }}" class="grid_item small">
						<figure>
							<img src="{{ asset('frontend/img/400x267/1.png') }}" alt="">
							<div class="info">
								<h3>Victoria Secretes</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="{{  route('detalle') }}" class="grid_item small">
						<figure>
							<img src="{{ asset('frontend/img/400x267/2.png') }}" alt="">
							<div class="info">
								<h3>Louis Vuitton</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="{{  route('detalle') }}" class="grid_item small">
						<figure>
							<img src="{{ asset('frontend/img/400x267/3.png') }}" alt="">
							<div class="info">
								<h3>Burberry</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="{{  route('detalle') }}" class="grid_item small">
						<figure>
							<img src="{{ asset('frontend/img/400x267/4.png') }}" alt="">
							<div class="info">
								<h3>Pinko</h3>
							</div>
						</figure>
					</a>
				</div>
			</div>
			<!-- /row -->
			
			<div class="main_title_3">
				<span></span>
				<h2>Top Hosts</h2>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
				<a href="{{  route('filtro') }}">Ver todos</a>
			</div>
			<div class="row add_bottom_30">
				<div class="col-lg-3 col-sm-6">
					<a href="{{  route('detalle') }}" class="grid_item small">
						<figure>
							<img src="{{ asset('frontend/img/400x267/5.png') }}" alt="">
							<div class="info">
								<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
								<h3>Hotel Mariott</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="{{  route('detalle') }}" class="grid_item small">
						<figure>
							<img src="{{ asset('frontend/img/400x267/6.png') }}" alt="">
							<div class="info">
								<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
								<h3>Hotel Concorde</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="{{  route('detalle') }}" class="grid_item small">
						<figure>
							<img src="{{ asset('frontend/img/400x267/7.png') }}" alt="">
							<div class="info">
								<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
								<h3>Hotel La Defanse</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="{{  route('detalle') }}" class="grid_item small">
						<figure>
							<img src="{{ asset('frontend/img/400x267/8.png') }}" alt="">
							<div class="info">
								<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
								<h3>Hotel Carlton</h3>
							</div>
						</figure>
					</a>
				</div>
			</div>
			<!-- /row -->
			
		
		
		</div>
		<!-- /container -->
		
		<div class="call_section">
			<div class="wrapper">
				<div class="container margin_80_55">
					<div class="main_title_2">
						<span><em></em></span>
						<h2>¿Cómo funciona HostFriends?</h2>
						<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="box_how">
								<i class="pe-7s-search"></i>
								<h3>Search Locations</h3>
								<p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
								<span></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box_how">
								<i class="pe-7s-info"></i>
								<h3>View Location Info</h3>
								<p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
								<span></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box_how">
								<i class="pe-7s-like2"></i>
								<h3>Book, Reach or Call</h3>
								<p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
							</div>
						</div>
					</div>
					<!-- /row -->
					<p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5s"><a href="account.html" class="btn_1 rounded">Register Now</a></p>
				</div>
				<canvas id="hero-canvas" width="1920" height="1080"></canvas>
			</div>
			<!-- /wrapper -->
		</div>
		<!--/call_section-->
@endsection
