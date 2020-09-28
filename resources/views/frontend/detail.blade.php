@extends('layouts.frontend')
@section('title','HostFriends')
@section('content')


<main>		
	
		<nav class="secondary_nav sticky_horizontal_2">
			<div class="container">
				<ul class="clearfix">
					<li><a href="{{ url('welcome') }}" class="active">Home</a></li>
					<li><a href="#reviews">&nbsp;</a></li>
				
				</ul>
			</div>
		</nav>
   

		<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-12">

					

						<section id="description">
							<div class="detail_title_1 text-center">

                              
                            @if( $user->avatar  == "avatar.jpg")
							    <a href="{{ route('home')  }}">
								  <img class="img-fluid rounded-circle"  style="width:100px;" src="{{ asset('frontend/img/avatar.jpg') }}" alt="{{ $user->name }}">
								</a> 
							 @else
								<a href="{{ route('home')  }}">
								  <img class="img-fluid rounded-circle"  style="width:100px;" src="{{ $user->avatar }}" alt="{{ $user->name }}">
								</a> 
                             @endif


								<div class="cat_star mt-3"><i class="icon_star"></i><i class="icon_star"></i>
								<i class="icon_star"></i><i class="icon_star"></i></div>
								<h1>{{  $user->name  }}</h1
								>
								<a class="address" > {{ $country->name }}, {{ $state->name }} </a>
							
							
								{!! $profile->bio !!}	


							</div>


                           						
							
							
							<h5 class="add_bottom_15">Idiomas que habla el Friend</h5>
							<div class="row add_bottom_30">
								<div class="col-lg-12">


								<ul class="bullets">
									@foreach($languajes as $languaje)
								
									     <li>{{ $languaje->name }}</li>
									
									@endforeach
									</ul>

								</div>
							
							</div>
							<!-- /row -->						
							<hr>

							@foreach($experiences as $experience)
							<div class="room_type first">
							
						       	<div class="row">

									<div class="col-md-4">

									

									<a href="{{ route('experience', $experience->slug ) }}">
										<img src="{!! $experience->experience_thumbnail  !!}" class="img-fluid" alt="">
								    </a>
									</div>
									<div class="col-md-8">
										<h4><a href="{{ route('experience', $experience->slug ) }}">{{ $experience->title  }}</a></h4>
										
									     {!! substr($experience->description, 0, 50)  !!}
									 	
									</div>
								</div>
								<!-- /row -->
							</div>
							
						    @endforeach
					
							<!-- End Map -->
						</section>
						<!-- /section -->
					
						<section id="reviews">
							<h2>Reseñas</h2>
							<div class="reviews-container add_bottom_30">
								<div class="row">
									<div class="col-lg-3">
										<div id="review_summary">
											<strong>4.5</strong>
											<em>Estrellas</em>
											<small>Basado en 100 reseñas</small>
										</div>
									</div>
									<div class="col-lg-9">
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>5 Estrellas</strong></small></div>
										</div>
										
									
										
										<!-- /row -->
									</div>
								</div>
								<!-- /row -->
							</div>

							<div class="reviews-container">

								<div class="review-box clearfix">
									<figure class="rev-thumb"><img src="img/avatar1.jpg" alt="">
									</figure>
									<div class="rev-content">
										<div class="rating">
											<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
										</div>
										<div class="rev-info">
											Admin – April 03, 2016:
										</div>
										<div class="rev-text">
											<p>
												Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
											</p>
										</div>
									</div>
								</div>
							

								
								<!-- /review-box -->
							</div>
							<!-- /review-container -->
						</section>
						<!-- /section -->
						<hr>

							
					</div>
					<!-- /col -->
				
				</div>
				<!-- /row -->
		</div>
		<!-- /container -->
		
	</main>
@endsection
