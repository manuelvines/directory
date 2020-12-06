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

    <!--
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
     -->
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{  asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{  asset('frontend/css/style.css') }}" rel="stylesheet">
	<link href="{{  asset('frontend/css/vendors.css') }}" rel="stylesheet">
	<link href="{{  asset('frontend/css/blog.css') }}" rel="stylesheet">
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


<div id="page" class="theia-exception">
		
        <header class="header_in">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div id="logo">
                        <a href="{{ url('/') }}">
                             <img src="{{ asset('frontend/img/logo/logo-naranja-svg.svg') }}" width="165" height="35" alt="" class="logo_sticky">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-9 col-12">
                        <ul id="top_menu">
							<li><a href="{{ route('experience.create') }}" class="btn_add">PUBLICAR EXPERIENCÍA</a></li>


                            
							@guest
                <li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
                @else
                
                <li>
                  

                            @if( Auth::user()->avatar  == "avatar.jpg")
							    <a href="{{ route('home')  }}">
								  <img class="img-fluid rounded-circle"  style="width:40px;" src="{{ asset('frontend/img/avatar.jpg') }}" alt="{{ Auth::user()->name }}">
								</a> 
							 @else
								<a href="{{ route('home')  }}">
								  <img class="img-fluid rounded-circle"  style="width:40px;" src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}">
								</a> 
                             @endif


							 <ul>
					                <li><a href="404.html">404 page</a></li>
					                <li><a href="contacts-2.html">Contacts 2</a></li>
					                <li><a href="pricing-tables.html">Pricing tables</a></li>
					                <li><a href="login.html">Login</a></li>
					                <li><a href="register.html">Register</a></li>
					                <li><a href="menu-options.html">Menu Options</a></li>
					                <li><a href="invoice.html">Invoice</a></li>
					                <li><a href="coming_soon/index.html">Coming Soon</a></li>
					            </ul>




                </li>


			

                @endguest
                        
                        </ul>
                        <!-- /top_menu -->
                        <a href="#menu" class="btn_mobile">
                            <div class="hamburger hamburger--spin" id="hamburger">
                                <div class="hamburger-box">
                                    <div class="hamburger-inner"></div>
                                </div>
                            </div>
                        </a>
                      
                        <nav id="menu" class="main-menu">
                            <ul>
                                <li><span><a href="{{  route('home') }}">Inico</a></span></li>
                                <li><span><a href="{{  route('home') }}">Busca Experiencía</a></span></li>
								<li><span><a href="#0">Extra</a></span>
					            <ul>
					                <li><a href="404.html">404 page</a></li>
					                <li><a href="contacts-2.html">Contacts 2</a></li>
					                <li><a href="pricing-tables.html">Pricing tables</a></li>
					                <li><a href="login.html">Login</a></li>
					                <li><a href="register.html">Register</a></li>
					                <li><a href="menu-options.html">Menu Options</a></li>
					                <li><a href="invoice.html">Invoice</a></li>
					                <li><a href="coming_soon/index.html">Coming Soon</a></li>
					            </ul>
					        </li>
                            </ul>
                        </nav>
                        
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->		
        </header>
        <!-- /header -->
        
	
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
	<script src="{{ asset('frontend/assets/js/animated_canvas_min.j') }}"></script>

	@stack('scripts')


</body>
</html>