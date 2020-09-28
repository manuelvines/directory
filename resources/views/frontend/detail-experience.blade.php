@extends('layouts.frontend')
@section('title','HostFriends')
@section('content')


<main>		
	
		<nav class="secondary_nav sticky_horizontal_2">
			<div class="container">
				<ul class="clearfix">
					<li><a href="#description" class="active">Experiencia en: {{ $country->name }}, {{ $state->name }} </a></li>
					<li><a href="#reviews">Reviews</a></li>
				
				</ul>
			</div>
		</nav>
   

		<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-8">

					
						<div id="carousel_in" class="owl-carousel owl-theme add_bottom_30">
					      <div class="item"><img src="{{ asset('frontend/img/1920x600/1.png') }}" alt=""></div>
					      <div class="item"><img src="{{ asset('frontend/img/1920x600/1.png') }}" alt=""></div>
					      <div class="item"><img src="{{ asset('frontend/img/1920x600/1.png') }}" alt=""></div>
					    </div>



						<section id="description">
							<div class="detail_title_1">

							    <img src="{{  $experience->experience_thumbnail  }}" alt="Cargando image {{  $experience->title }}" class="img-fluid">

								<div class="cat_star mt-3"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
								<h1>{{  $experience->title   }}, </h1>
								<a class="address" href="">{{ $country->name }}, {{ $state->name }} </a>

							</div>



                            <h5 class="add_bottom_15">Descripción</h5>
							<div class="row ">
								<div class="col-lg-12 " style="overflow: scroll;">
                                   {!! $experience->description !!}
                                   
								</div>
							
							</div>	

							<h5 class="add_bottom_15">Disponibilidad de tiempo</h5>
							<div class="row">
								<div class="col-lg-12 text-justify">
								
                                 <p>Desde: {{ $experience->initial_schedule }}<br>Hasta: {{ $experience->final_schedula }}</p>
                                </div>
						    </div>

                            <h5 class="add_bottom_15">Restricciones - Máximo de Personas: {{ $experience->max_people }}</h5>
							<div class="row">
								<div class="col-lg-12 text-justify">
								
                                {!! $experience->restrictions  !!}
							
                                </div>
						    </div>


                              <h5 class="add_bottom_15">Tips</h5>
							<div class="row">
								<div class="col-lg-12 text-justify">

								@guest
               
                                      <div class=" shadow-sm mt-5 mb-5" style="border: 1px solid gray; ">
									        <h2><i class=" icon-lock"></i>	Desbloquea todos los tips para: {{ $experience->title }}</h2>
											<a  class="social_bt facebook" href="{{ route('social.auth', 'facebook') }}">
												Continuar con Facebook
											</a>

									  </div>
                                          

								 @else
								    
								 {!! $experience->tips  !!}

								@endguest


                                    

								</div>
							
							</div>	

                              <h5 class="add_bottom_15">Gastos Extras - Costo estimado por persona ${{ $experience->estimated_price_per_person }} </h5>
							<div class="row">
								<div class="col-lg-12 text-justify">

                                   {!! $experience->extra_expenses   !!}

								</div>
							
							</div>			
							
                            <hr>
							
							<h5 class="add_bottom_15">Información del Friend</h5>
							
                            <a href="{{ route('friend', $user->id) }}">
                            <img src="{{  $user->avatar }}" alt="" class="img-fluid img-fluid rounded-circle" style="max-width:100px;">
                            </a>
                            <p>{{ $user->name }}</p>

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

						
					
							<!-- End Map -->
						</section>
						<!-- /section -->
					
						<section id="reviews">
							<h2>Reseñas</h2>
							<div class="reviews-container add_bottom_30">
								<div class="row">
									<div class="col-lg-3">
										<div id="review_summary">
											<strong>8.5</strong>
											<em>Superb</em>
											<small>Based on 4 reviews</small>
										</div>
									</div>
									<div class="col-lg-9">
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
										</div>
										<!-- /row -->
									</div>
								</div>
								<!-- /row -->
							</div>

							<div class="reviews-container">

							
							
								<!-- /review-box -->
								<div class="review-box clearfix">
									<figure class="rev-thumb"><img src="img/avatar3.jpg" alt="">
									</figure>
									<div class="rev-content">
										<div class="rating">
											<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
										</div>
										<div class="rev-info">
											Sara – March 31, 2016:
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
					
					<aside class="col-lg-4" id="sidebar">
						<div class="box_detail booking">
							<div class="price">
								<span>45$ <small>por hora</small></span>
								
								
								<div class="score"><span>Good<em>50 Reseñas</em></span><strong>4.5</strong></div>
								
							</div>

							<form  method="POST" action="{{ route('appointment.store') }}">
							@csrf
							@method('POST')

							<div class="form-group" id="input-dates">
								<input class="form-control" type="date" name="date" min="{{ Date('y/m/d') }}" required>
								<i class="icon_calendar"></i>
							</div>

				
							<div class="form-group clearfix">
								<div class="custom-select-form">
								    <input type="number" name="people" id="people" min="1" max="{{  $experience->max_people  }}" placeholder="Máximo {{   $experience->max_people }} personas" class="form-control " required>
								</div>
							</div>

							 
							      <input type="hidden" name="experience_id" id="experience_id" value="{{ $experience->id }}">

							
							
							@guest
											<a  class="social_bt facebook" href="{{ route('social.auth', 'facebook') }}">
												Continuar con Facebook
											</a>

							@else
							
							   <input type="submit" value="Reservar" class="btn btn-block btn-naranja">

							@endguest

                            </form>

							<div class="text-center"><small>Aún no se te cobrará nada</small></div>
						</div>
						
                        <!--
						<ul class="share-buttons">
							<li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
							<li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Share</a></li>
							<li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
						</ul>
                        -->

					</aside>
				</div>
				<!-- /row -->
		</div>
		<!-- /container -->
		
	</main>

@endsection
