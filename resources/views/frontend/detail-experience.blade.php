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
	
						<section id="description">
							<div class="detail_title_1">
                                    <img src="{{  $experience->experience_thumbnail  }}" alt="Cargando image {{  $experience->title }}" class="img-fluid">
									-<div class="cat_star mt-3">
										<i class="icon_star"></i>
										<i class="icon_star"></i>
										<i class="icon_star"></i>
										<i class="icon_star"></i>
									</div>
									<h1>{{ $experience->title }}</h1>
								    <a class="address" href="">{{ $country->name }}, {{ $state->name }} </a>
							</div>


							<div class="row ">
								<div class="col-lg-12 col-sm-12 col-md-12 mt-3" style="overflow: scroll;">
								  <h5 class="add_bottom_15">Descripción</h5> 
								  {!! $experience->description  !!}
								</div>
						    </div>	
                            <br>

					
						</section>
					
					</div>
					<!-- /col -->
					
					<aside class="col-lg-4" id="sidebar">
						<div class="box_detail booking">
							<div class="price">
								<span>45$ <small>por persona</small></span>
								<div class="score"><span>Good<em>50 Reseñas</em></span><strong>4.5</strong></div>
							

							</div>
                             <div class="alert alert-info">
							 
							 <p>
							 Experiencía desde: {{ $experience->initial_schedule }} y hasta {{ $experience->final_schedule }} h.<br>
                            Duración: {{ $experience->duration }} h.</p>
							 </div>
							<form  method="POST" action="{{ route('appointment.store') }}">
								@csrf
								@method('POST')
								<div class="form-group" id="input-dates">
  								  
									<input class="form-control" type="date" name="date" min="{{ Date('y/m/d') }}" required>
									<i class="icon_calendar"></i>
								</div>

								<div class="form-group">
								    <div class="row">
									   <div class="col-xs-6 col-sm-6 col-md-6">
                                         
										  <?php  $initial  = intval($experience->initial_schedule); ?>
										  <?php  $final    = intval($experience->final_schedule); ?>
										  <?php  $duration = intval($experience->duration); ?>

										
										  <select name="initial_schedule_hour" id="initial_schedule_hour" style="display:block" class="form-control">
										     @for($i = $initial; $i <= $final - $duration; $i++)
                                                  <option value="{{$i}}">{{ $i }}</option>
											 @endfor
										  </select>
										  <small>Horas</small>

									   </div>
									   <div class="col-xs-6 col-sm-6 col-md-6">
									      <select name="initial_schedule_minute" id="initial_schedule_minute" style="display:block" class="form-control">
                                           
										    <option value="00">00</option>
											<option value="15">15</option>
											<option value="30">30</option>
											<option value="45">45</option>

										  </select>
										  <small>Minutos</small>
                                       </div>
									</div>
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
