<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>{{ config('app.name', 'HostFriends') }}</title>

    <!-- Favicons-->
	<link rel="icon" href="{{ asset('frontend/img/logo/logo-launcher.png') }}">

    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{  asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{  asset('frontend/css/style.css') }}" rel="stylesheet">
	<link href="{{  asset('frontend/css/vendors.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">

	<style>
	.btn-naranja{
            background-color:#eb4d32;
            color:white;

		 }
		 .btn-naranja:hover{
            background-color:#eb4d32;
            color:white;

         }
	</style>

</head>
<body>


	
	
	<main class="pattern">
         @yield('content')


	</main>
	<!-- /main -->

	<footer class="plus_border">
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h3 data-target="#collapse_ft_1">Links rápidos</h3>
					<div class="collapse dont-collapse-sm" id="collapse_ft_1">
						<ul class="links">
							<li><a href="#0">Acerca de</a></li>
							<li><a href="#0">Preguntas Frecuentes</a></li>
							<li><a href="#0">Ayuda</a></li>
							<li><a href="#0">Mi Cuenta</a></li>
							<li><a href="#0">Crear una Cuenta</a></li>
							<li><a href="#0">Friends</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h3 data-target="#collapse_ft_2">Categorias</h3>
					<div class="collapse dont-collapse-sm" id="collapse_ft_2">
						<ul class="links">
							
		
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h3 data-target="#collapse_ft_3">Contacto</h3>
					<div class="collapse dont-collapse-sm" id="collapse_ft_3">
						<ul class="contacts">
							<li><i class="ti-home"></i>97845 Baker st. 567<br>Los Angeles - US</li>
							<li><i class="ti-headphone-alt"></i>+39 06 97240120</li>
							<li><i class="ti-email"></i><a href="#0">info@sparker.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h3 data-target="#collapse_ft_4">Mantenerse en contacto</h3>
					<div class="collapse dont-collapse-sm" id="collapse_ft_4">
						<div id="newsletter">
							<div id="message-newsletter"></div>
							<form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
								<div class="form-group">
									<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
									<input type="submit" value="Suscribirse" id="submit-newsletter">
								</div>
							</form>
						</div>
						<div class="follow_us">
							<h5>Síguenos</h5>
							<ul>
								<li><a href="#0"><i class="ti-facebook"></i></a></li>
								<li><a href="#0"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<hr>
			<div class="row">
				<div class="col-lg-6">
					<ul id="footer-selector">
						<li>
							<div class="styled-select" id="lang-selector">
								<select>
							
									<option value="Spanish" selected>Español</option>
									<option value="English">English</option>
								
								</select>
							</div>
						</li>
					
						<li><img src="{{ asset('frontend/img/cards_all.svg') }}" alt=""></li>
					</ul>
				</div>
				<div class="col-lg-6">
					<ul id="additional_links">
						<li><a href="#0">Términos y condiciones</a></li>
						<li><a href="#0">Política de Privacidad</a></li>
						<li><span>© 2020 HostFriends</span></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Iniciar Sesión</h3>
		</div>
		<form  action="{{ route('register') }}" method="POST">
		@csrf
		@method('POST')
			<div class="sign-in-wrapper">


					<a  class="social_bt facebook" href="{{ route('social.auth', 'facebook') }}">
						Continuar con Facebook
					</a>
                         
				    <a href="#0" class="social_bt google">
					    Continuar con Google
					</a>
                   

				<div class="divider"><span>O</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Recuerdame
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">¿Olvidaste tu contraseña?</a></div>
				</div>
				<div class="text-center">

					<input type="submit" value="INICIAR SESIÓN" class="btn_1 full-width">
				
				</div>
				<div class="text-center">
					¿No tienes cuenta? <a href="{{ route('register') }}">Registrarse</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center">
						<input type="submit" value="Reset Password" class="btn_1">
					</div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Popup -->
	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="{{ asset('frontend/js/common_scripts.js') }}"></script>
	<script src="{{ asset('frontend/js/functions.js') }}"></script>
	<script src="{{ asset('frontend/assets/validate.js') }}"></script>
    <!-- SPECIFIC SCRIPTS -->
	<script src="{{ asset('frontend/js/animated_canvas_min.js') }}"></script>
	
	@stack('scripts')


</body>
</html>