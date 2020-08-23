<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" href="{{ asset('frontend/img/logo/logo-launcher.png') }}">
	<title>HostFriends</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dashboard/css/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dashboard/css/fakeLoader.css') }}">
	<link rel="stylesheet" href="{{ asset('dashboard/css/swiper.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">

	<script src="//cdn.ckeditor.com/4.14.1/basic/ckeditor.js"></script>

</head>
<body>

	<!-- navbar -->
	<div class="navbar navbar-home">
		<div class="left">
			<a href="#menu" class="link menu-link"><i class="icon ion-ios-menu"></i></a>
		</div>
		<div class="right">
			<a href="#" class="link">
		
			<img src="{{ asset('frontend/img/logo/logo-launcher.png') }}" width="165" height="35" alt="" class="logo_sticky">

			</a>
		</div>
	</div>
	<!-- end navbar -->

	<!-- sidebar
	<div class="side-overlay"></div>
	<div id="menu" class="panel sidebar" role="navigation">

	
		<div class="separator-large"></div>
	  
		<div class="list-view list-separate-two list-colored">
			<ul>
				<li>
					<a href="#" class="list-item">
						<div class="list-media">
							<i class="icon ion-ios-home bg-blue"></i>
						</div>
						<div class="list-label">
							<div class="list-title">Perfil público</div>
							<div class="list-after">
                        <i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</a>
				</li>
				<li>
					<a href="#" class="list-item">
						<div class="list-media">
							<i class="icon ion-ios-star bg-red"></i>
						</div>
						<div class="list-label">
							<div class="list-title">Valoraciones</div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</a>
				</li>
				<li>
					<a href="#" class="list-item">
						<div class="list-media">
							<i class="icon ion-ios-browsers bg-green"></i>
						</div>
						<div class="list-label">
							<div class="list-title">Experiencia</div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</a>
            </li>
            

				<li>
					<a href="#" class="list-item">
						<div class="list-media">
							<i class="icon ion-ios-apps bg-yellow"></i>
						</div>
						<div class="list-label">
							<div class="list-title">Medios de Pago</div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</a>
				</li>
			
				<li>
					<a href="#" class="list-item">
						<div class="list-media">
							<i class="icon ion-ios-settings bg-blue"></i>
						</div>
						<div class="list-label">
							<div class="list-title">Ajustes</div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</a>
            </li>
            
			</ul>
		</div>
      
     <hr>
 

		<div class="list-view list-separate-two list-colored">
			<ul>
		
				<li>
					<a href="#" class="list-item">
						<div class="list-media">
							<i class="icon ion-ios-lock bg-blue"></i>
						</div>
						<div class="list-label">
							<div class="list-title">Política de Privacidad</div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</a>
				</li>
				<li>
					<a href="{{ url('/logout') }}" class="list-item">
						<div class="list-media">
							<i class="icon ion-ios-power bg-red"></i>
						</div>
						<div class="list-label">
						   
							<div class="list-title">Cerrar Sesión</div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i>
						
							
							</div>
						</div>
					</a>
				</li>
			</ul>
		</div>

	
		<div class="separator-large"></div>
	

	</div>

	-->


	<!-- page wrapper -->
	<div class="page-wrapper">

		<!-- intro app -->
		<div class="intro-app">
		
            <div class="separator-large"></div>
            <div class="container">

                 <div class="row">

					 <div class="col-xs-12 col-sm-12 col-md-4 card shadow">
					 
						
						
							
								  @if( Auth::user()->source  == "system")
										<a href="{{ route('home')  }}">
										<img style="width:100px; margin: 0 auto;" class="img-fluid rounded-circle"  src="{{ asset('frontend/img/avatar.jpg') }}" alt="{{ Auth::user()->name }}">
										</a> 
									@else
										<a href="{{ route('home')  }}">
										<img style="width:100px; margin:  0 auto;" class="img-fluid rounded-circle"  src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}">
										</a> 
									@endif

									<a href="{{ route('change-avatar') }}" class="text-center">+Actualizar foto</a>


									<div class="mt-5">

									<h5>CONFIGURACIÓN DE LA CUENTA</h5>
										<ul class="text-left">
											<li class="mt-3 pb-3" style="border-bottom:1px solid #bfbdbd;">
											<a href="{{ route('profile.index') }}">
											<h6>
											<i class="icon ion-ios-contact" 
											style="font-size:1.8em; margin-right: 10px; display:block; float:left;"></i>
											Información Personal
											</h6> 
											
											</a>
											</li>
											<li class="mt-3 pb-3" style="border-bottom:1px solid #bfbdbd;"><a href="{{ route('experience.index') }}"><h6>Mis Experiencias</h6></a></li>
											<li class="mt-3 pb-3" style="border-bottom:1px solid #bfbdbd;"><a href="{{ route('friend',  Auth::user()->id  ) }}"><h6>Ver perfil</h6></a></li>

											<li class="mt-3 pb-3"      style="border-bottom:1px solid #bfbdbd;">
											<a href="{{ route('upload-document') }}"><h6>
											<i class="icon ion-ios-checkmark-sharp" 
											style="font-size:1.8em; margin-right: 10px; display:block; float:left;"></i>
											Verificar Cuenta</h6></a></li>

											<li class="mt-3 pb-3"      style="border-bottom:1px solid #bfbdbd;"><a href=""><h6>Pagos y Cobros</h6></a></li>

											<li class="mt-3 pb-3"      style="border-bottom:1px solid #bfbdbd;"><a href=""><h6>Notificaciones</h6></a></li>
									
										</ul>
									</div>
						
							
					 </div>  

					 <div class="col-xs-12 col-sm-12 col-md-8 pl-4">

						    @if(session('success')) 
								<div class="alert alert-success">
									<p>{{session('success')}}</p>
								</div>
							@endif

							@if ($errors->any())
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="alert alert-danger">
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</div>
								</div>
							</div>
							@endif

                     
					   @yield('content')
					 </div>  

                  </div>

            </div>




			</div>
		</div>
		<!-- end intro app -->

	 

		<!-- separator -->
		<div class="separator-large"></div>
		<!-- end separator -->

	</div>
	<!-- end page wrapper -->

	<!-- toolbar bottom -->
	<div class="toolbar">
		<div class="container">
			<ul class="toolbar-bottom toolbar-wrap">
				<li class="toolbar-item">
					<a href="" class="toolbar-link">
					  <i class="icon ion-ios-contact"></i>
					</a>
				</li>
				<li class="toolbar-item">
					<a href="{{ route('experiencia')  }}" class="toolbar-link">
					  <i class="icon ion-ios-add-circle"></i>
					</a>
				</li>
				<li class="toolbar-item">
					<a href="#" class="toolbar-link">
					<i class="icon ion-ios-mail"></i>				
				    </a>
				</li>
				<li class="toolbar-item ">

					<a href="#" class="toolbar-link">
						<i class="icon ion-md-card"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- end toolbar bottom -->

	<script src="{{ asset('dashboard/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('dashboard/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('dashboard/js/fakeLoader.js') }}"></script>
	<script src="{{ asset('dashboard/js/swiper.min.js') }}"></script>
	<script src="{{ asset('dashboard/js/jquery.big-slide.js') }}"></script>
	<script src="{{ asset('dashboard/js/main.js') }}"></script>

	
	@stack('scripts')


</body>
</html>