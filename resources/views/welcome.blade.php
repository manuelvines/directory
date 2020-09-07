@extends('layouts.frontend')
@section('title','HostFriends')

@section('content')
@include('partials-frontend.header-home') 



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
									@foreach($tags as $tag)
									<option href="{{ $tag->id }}">{{ $tag->name }}</option>	
									@endforeach
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
		
	
		<div class="bg_color_1">
			<div class="container margin_80_55">
				<div class="main_title_2">
					<span><em></em></span>
					<h2>Categorías Populares</h2>
					<p>¿Qué tipo de actividad estás buscando?</p>
				</div>

				<div class="row">
				    @foreach($tags as $tag)
					<div class="col-lg-4 col-md-6">
						<a href="#" class="grid_item">
							<figure>
								<img src='{{ asset("frontend/img/categorias/$tag->tag_thumbnail") }}' alt="">
								<div class="info">
									<small>122 Locations</small>
									<h3>{{ $tag->name }}</h3>
								</div>
							</figure>
						</a>
					</div>
                   	<!-- /row -->
					@endforeach   
			</div>
			<!-- /container -->	
		</div>

@endsection
