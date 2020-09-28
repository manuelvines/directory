@extends('layouts.frontend')
@section('title','HostFriends')
@section('content')

<div id="results" style="background-color:#eb4d32;">
		   <div class="container">
			   <div class="row" >
				   <div class="col-lg-3 col-md-4 col-10">
					   <h4><strong> {{ count($experiences) }}</strong> resultados </h4>
				   </div>
				   <div class="col-lg-9 col-md-8 col-2">
					   <a href="#0" class="search_mob btn_search_mobile"></a> <!-- /open search panel -->
						<div class="row no-gutters custom-search-input-2 inner">
							<div class="col-lg-4">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="¿Qué tipo de experiencia buscas?">
									<i class="icon_search"></i>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="¿Dónde?">
									<i class="icon_pin_alt"></i>
								</div>
							</div>
							<div class="col-lg-3">
								<select class="wide">
								    <option value="">Categorias</option>
							        @foreach($tags as $tag)
									   <option value="">{{ $tag->name  }}</option>
									@endforeach
								</select>
							</div>
							<div class="col-lg-1">
								<input type="submit">
							</div>
						</div>
				   </div>
			   </div>
			   <!-- /row -->
				<div class="search_mob_wp">
					<div class="custom-search-input-2">
						<div class="form-group">
							<input class="form-control" type="text" placeholder="What are you looking for...">
							<i class="icon_search"></i>
						</div>
						<div class="form-group">
							<input class="form-control" type="text" placeholder="¿Dónde?">
							<i class="icon_pin_alt"></i>
						</div>
						<select class="wide">
						            <option value="">Categorias</option>
							        @foreach($tags as $tag)
									   <option value="">{{ $tag->name  }}</option>
									@endforeach
						</select>
						<input type="submit">
					</div>
				</div>
				<!-- /search_mobile -->
		   </div>
		   <!-- /container -->
</div>

<div class="container mt-3">


	<div class="row">
	@foreach($experiences as $experience)
				<div class="col-xl-4 col-lg-6 col-md-6">
						<div class="strip grid">
							<figure>

							    <a href="{{ route('experience', $experience->slug ) }}">
								  <img src="{{ $experience->experience_thumbnail  }}" class="img-fluid" alt="">
								</a>
                                <!--
								<small></small>
								-->
							</figure>
							<div class="wrapper">
								<h3>
									<a href="{{ route('experience', $experience->slug ) }}">
									{{ $experience->title }}
									</a>
								</h3>
								<p>{!! $experience->description !!}</p>
								<a class="address" >{{ $experience->country->name }},</a>
								<a>{{ $experience->state->name }}</a>
							</div>
					
						</div>
					</div>

	</div>

	@endforeach
</div>
@endsection
