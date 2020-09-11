@extends('layouts.frontend')
@section('title','HostFriends')
@section('content')

@include('partials-frontend.header-detail') 

<main>		
	
		<nav class="secondary_nav sticky_horizontal_2">
			<div class="container">
				<ul class="clearfix">
					<li><a href="{{ url('welcome') }}" class="active">Booking</a></li>
					<li><a href="#reviews">&nbsp;</a></li>
				
				</ul>
			</div>
		</nav>
   

					


<div class="container margin_60">
			 <div class="row justify-content-center">
				<div class="col-md-5">
					<div id="confirm">
						<div class="icon icon--order-success svg add_bottom_15">
							<svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
								<g fill="none" stroke="#8EC343" stroke-width="2">
									<circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
									<path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
								</g>
							</svg>
						</div>
					<h2>¡Solicitud de experiencia enviada!</h2>
					<p>Hemos notificado al Friend sobre tu interés en la experiencia, en menos de 24 horas tendrás una respuesta.</p>
					</div>
				</div>
			</div>
			<!-- /row -->
        </div>
        
             
	</main>
@endsection
