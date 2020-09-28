@extends('layouts.frontend')
@section('title','HostFriends')
@section('content')


<main>		
	
		<nav class="secondary_nav sticky_horizontal_2">
			<div class="container">
				<ul class="clearfix">
					<li><a href="{{ url('welcome') }}" class="active">Login</a></li>
					<li><a href="#reviews">&nbsp;</a></li>
				
				</ul>
			</div>
		</nav>

<div class="container">
    <div class="row justify-content-center">

             

    <div class="container margin_60">
			<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					<h3 class="client">Usuario Registrado</h3>
					<div class="form_container">
						<div class="row no-gutters">
							<div class="col-lg-6 pr-lg-1">


                            <a  class="social_bt facebook" href="{{ route('social.auth', 'facebook') }}">
                              Continuar con Facebook
                              </a>
							</div>
							<div class="col-lg-6 pl-lg-1">
								<a href="#0" class="social_bt google">Continuar con Google</a>
							</div>
						</div>
						<div class="divider"><span>O</span></div>
       
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

						<div class="form-group">
						   
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
						<div class="form-group">
							<div class="hideShowPassword-wrapper" style="position: relative; display: block; vertical-align: baseline; margin: 0px;">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                           
                            <button type="button" role="button" aria-label="Show Password" title="Show Password" tabindex="0" class="my-toggle hideShowPassword-toggle-show" 
                            style="position: absolute; right: 0px; top: 50%; margin-top: -15px; display: none;" aria-pressed="false">Show</button></div>
						</div>


						<div class="clearfix add_bottom_15">
							<div class="checkboxes float-left">
								<label class="container_check">Recordarme
									<input type="checkbox">
									<span class="checkmark"></span>
								</label>
							</div>

							<div class="float-right"><a id="forgot" href="javascript:void(0);">Lost Password?</a></div>
						</div>

						<div class="text-center">
                        <input type="submit" value="Log In" class="btn_1 full-width">
                        </div>

						<div id="forgot_pw">
							<div class="form-group">
								<input type="email" class="form-control" name="email_forgot" id="email_forgot" placeholder="Type your email">
							</div>
							<p>A new password will be sent shortly.</p>
							<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
						</div>
					</div>
                    </form>
					<!-- /form_container -->
				</div>
				<!-- /box_account -->
				<div class="row hidden_tablet">
					<div class="col-md-6">
						<ul class="list_ok">
							<li>Find Locations</li>
							<li>Quality Location check</li>
							<li>Data Protection</li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul class="list_ok">
							<li>Secure Payments</li>
							<li>H24 Support</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					<h3 class="new_client">Nuevo Usuario</h3> <small class="float-right pt-2">* Campos requeridos</small>
					<div class="form_container">

                    
					

                    <div class="row no-gutters">
							<div class="col-lg-6 pr-lg-1">
                              <a  class="social_bt facebook" href="{{ route('social.auth', 'facebook') }}">
                              Registrarse con Facebook
                              </a>
							</div>
							<div class="col-lg-6 pl-lg-1">
							  <a href="#0" class="social_bt google">
							  Registrarse con Google
							  </a>
							</div>
					</div>
                         

                    <form method="POST" action="{{ route('register') }}" autocomplete="off">
                        @csrf


		
				<div class="form-group">
     				<label for="name" class=" col-form-label text-md-right">{{ __('Name') }}</label>
     				<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

					@error('name')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>

				
				<div class="form-group">
				    <label for="email" class=" col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
					 @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>



				<div class="form-group">
				                 <label for="password" class=" col-form-label text-md-right">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
							
                                @error('password')
                                     <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>


				        <div class="form-group row">
                            <label for="password-confirm" class="col-md-12 col-form-label">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
							

						    </div>
                        </div>


						<div class="form-group row">
                            <label for="reference_code" class="col-md-12 col-form-label"> Código de referencía </label>
							<div class="col-md-12">

								@if( isset($_REQUEST['referenced_code'])  )
								
								<input value="{{  $_REQUEST['referenced_code'] }}" id="reference_code" name="reference_code" type="text" class="form-control" readonly>
							    
								@else

								<input id="reference_code" name="reference_code" type="text" class="form-control">


								@endif
							</div>
                        </div>


				<div id="pass-info" class="clearfix"></div>



                <input type="submit"  class="btn_1 rounded full-width add_top_30" value="¡Registrarse ahora!"> 

			</form>
						
						
					</div>
					<!-- /form_container -->
				</div>
				<!-- /box_account -->
			</div>
		</div>
		<!-- /row -->
		</div>






    </div>
</div>


</main>
@endsection
