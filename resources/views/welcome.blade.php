@extends('layouts.frontend-home')
@section('title','HostFriends')

@section('content')

	
<div id="page" class="theia-exception">
		



		<section class="hero_single version_2" >
			<div class="wrapper">
				<div class="container">
					<h3>HOST FRIENDS</h3>
					<p>@lang('HomeTagline')</p>
				
					<form method="GET" action="{{ url('buscar') }}">
						<div class="row no-gutters custom-search-input-2">
							<div class="col-lg-4">
								<div class="form-group">
								  <input class="form-control" name="query" id="query" type="text" placeholder="¿Qué tipo de experiencía estás buscando?">
								  <i class="icon_search"></i>						
																
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
								   
								<select class="wide" name="country_id" id="country_id">
									          <option>Selecciona país</option>	
											 @foreach($countries as $country)
									           <option value="{{ $country->id }}">{{ $country->name }}</option>
										     @endforeach
									</select>

								</div>
							</div>
							<div class="col-lg-3">
								<select class="wide" name="tag" id="tag">
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
						<a href="{{  route('tag',$tag->id)  }}" class="grid_item">
							<figure>
								<img src='{{ asset("frontend/img/categorias/$tag->tag_thumbnail") }}' alt="" class="img-fluid">
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


		@push('scripts')
         <script src="{{ asset('dashboard/js/statesByCountry.js') }}"></script>
        @endpush
@endsection
