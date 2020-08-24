@extends('layouts.frontend')
@section('title','HostFriends')
@section('content')
 @include('partials-frontend.header-detail') 

<main>		
	
		<nav class="secondary_nav sticky_horizontal_2">
			<div class="container">
				<ul class="clearfix">
					<li><a href="#description" class="active">Description</a></li>
					<li><a href="#reviews">Reviews</a></li>
					<li><a href="#sidebar">Booking</a></li>
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
								<h1>{{  $experience->title   }}</h1>
								<a class="address" href="">País, Estado</a>
							</div>



                            <h5 class="add_bottom_15">Descripción</h5>
							<div class="row ">
								<div class="col-lg-12 text-justify">

                                   {!! $experience->description !!}

								</div>
							
							</div>	


                            <h5 class="add_bottom_15">Restricciones</h5>
							<div class="row">
								<div class="col-lg-12 text-justify">
                                {!! $experience->restrictions  !!}
                                </div>
						    </div>


                              <h5 class="add_bottom_15">Tips</h5>
							<div class="row">
								<div class="col-lg-12 text-justify">

                                   {!! $experience->tips  !!}

								</div>
							
							</div>	

                              <h5 class="add_bottom_15">Gastos Extras</h5>
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
								<div class="review-box clearfix">
									<figure class="rev-thumb"><img src="img/avatar2.jpg" alt="">
									</figure>
									<div class="rev-content">
										<div class="rating">
											<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
										</div>
										<div class="rev-info">
											Ahsan – April 01, 2016:
										</div>
										<div class="rev-text">
											<p>
												Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
											</p>
										</div>
									</div>
								</div>
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

							<div class="add-review">
								<h5>Leave a Review</h5>
								<form>
									<div class="row">
										<div class="form-group col-md-6">
											<label>Name and Lastname *</label>
											<input type="text" name="name_review" id="name_review" placeholder="" class="form-control">
										</div>
										<div class="form-group col-md-6">
											<label>Email *</label>
											<input type="email" name="email_review" id="email_review" class="form-control">
										</div>
										<div class="form-group col-md-6">
											<label>Rating </label>
											<div class="custom-select-form">
											<select name="rating_review" id="rating_review" class="wide">
												<option value="1">1 (lowest)</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5" selected>5 (medium)</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10 (highest)</option>
											</select>
											</div>
										</div>
										<div class="form-group col-md-12">
											<label>Your Review</label>
											<textarea name="review_text" id="review_text" class="form-control" style="height:130px;"></textarea>
										</div>
										<div class="form-group col-md-12 add_top_20 add_bottom_30">
											<input type="submit" value="Submit" class="btn_1" id="submit-review">
										</div>
									</div>
								</form>
							</div>
					</div>
					<!-- /col -->
					
					<aside class="col-lg-4" id="sidebar">
						<div class="box_detail booking">
							<div class="price">
								<span>45$ <small>person</small></span>
								<div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div>
							</div>

							<div class="form-group" id="input-dates">
								<input class="form-control" type="text" name="dates" placeholder="When..">
								<i class="icon_calendar"></i>
							</div>

							<div class="dropdown">
								<a href="#" data-toggle="dropdown">Guests <span id="qty_total">0</span></a>
								<div class="dropdown-menu dropdown-menu-right">
									<div class="dropdown-menu-content">
										<label>Adults</label>
										<div class="qty-buttons">
											<input type="button" value="+" class="qtyplus" name="adults">
											<input type="text" name="adults" id="adults" value="0" class="qty">
											<input type="button" value="-" class="qtyminus" name="adults">
										</div>
									</div>
									<div class="dropdown-menu-content">
										<label>Childrens</label>
										<div class="qty-buttons">
											<input type="button" value="+" class="qtyplus" name="child">
											<input type="text" name="child" id="child" value="0" class="qty">
											<input type="button" value="-" class="qtyminus" name="child">
										</div>
									</div>
								</div>
							</div>
							<!-- /dropdown -->

							<div class="form-group clearfix">
								<div class="custom-select-form">
									<select class="wide">
										<option>Room Type</option>	
										<option>Single Room</option>
										<option>Double Room</option>
										<option>Suite Room</option>
									</select>
								</div>
							</div>
							<a href="checkout.html" class=" add_top_30 btn_1 full-width purchase">Purchase</a>
							<a href="wishlist.html" class="btn_1 full-width outline wishlist"><i class="icon_heart"></i> Add to wishlist</a>
							<div class="text-center"><small>No money charged in this step</small></div>
						</div>
						<ul class="share-buttons">
							<li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
							<li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Share</a></li>
							<li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
						</ul>
					</aside>
				</div>
				<!-- /row -->
		</div>
		<!-- /container -->
		
	</main>

@endsection
