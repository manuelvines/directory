<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Dashboard HostFriends</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="icon" href="{{ asset('frontend/img/logo/logo-launcher.png') }}">

        <link href="{{ asset('vertical/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('vertical/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('vertical/assets/css/style.css') }}" rel="stylesheet" type="text/css">
        <style>
         .btn-naranja{
            background-color:#eb4d32;
            color:white;

         }
         .btn-naranja:hover{
            background-color:#eb4d32;
            color:white;

         }
         .navbar-custom{
            background-color:#eb4d32 !important;
         }
         
        </style>    
    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">

                        <a href="{{ url('/') }}" class="logo">
                        
                            <img src="{{ asset('frontend/img/logo/logo-launcher.png') }}" alt="" style="max-width:50px; " class="img-fluid">

                        </a>
                        <!-- <a href="index.html" class="logo"><img src="assets/images/logo.png" height="24" alt="logo"></a> -->
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">

                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Configuraciones</li>

                            <li>
                                <a href="{{ route('home') }}" class="waves-effect">
                                    <i class="mdi mdi-airplay"></i>
                                      <span> Dashboard 
                                    
                                    </span>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-settings-variant "></i> <span> Ajustes </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('profile.index') }}">Perfil</a></li>
                                    <li><a href="{{ route('geolocation') }}">Ubicación</a></li>
                                    <li><a href="{{ route('upload-document') }}">Validar identidad</a></li>
                                    <li><a href="{{ route('change-avatar') }}">Cambiar Avatar</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi mdi-star"></i> <span> Experiencias </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('experience.index') }}">Mis Experiencias</a></li>
                                    <li><a href="{{ route('experience.create') }}">Crear una Experiencia</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar-clock"></i><span> Calendar </span></a>
                            </li>

                         
                        
               

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">

                            <ul class="list-inline float-right mb-0">
                                <!-- language-->
                                <li class="list-inline-item dropdown notification-list hide-phone">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect text-white" data-toggle="dropdown" href="#" role="button"
                                        aria-haspopup="false" aria-expanded="false">
                                        English <img src="{{ asset('vertical/assets/images/flags/us_flag.jpg') }}" class="ml-2" height="16" alt=""/>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right language-switch">
                                        <a class="dropdown-item" href="#"><img src="{{ asset('vertical/assets/images/flags/spain_flag.jpg') }}" alt="" height="16"/><span> Spanish </span></a>
                                    </div>
                                </li>
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="ti-email noti-icon"></i>
                                        <span class="badge badge-info noti-icon-badge">5</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5><span class="badge badge-danger float-right">745</span>Messages</h5>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-2.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                            <p class="notify-details"><b>Charles M. Jones</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-3.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                            <p class="notify-details"><b>Thomas J. Mimms</b><small class="text-muted">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-4.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                            <p class="notify-details"><b>Luis M. Konrad</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                        </a>

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            View All
                                        </a>

                                    </div>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="ti-bell noti-icon"></i>
                                        <span class="badge badge-success noti-icon-badge">23</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5><span class="badge badge-danger float-right">87</span>Notification</h5>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
                                            <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-martini"></i></div>
                                            <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                        </a>

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            View All
                                        </a>

                                    </div>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                <!--   
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="" alt="user" class="rounded-circle">
                                    </a>
-->

                                    
								    @if( Auth::user()->avatar  == "avatar.jpg")
										<a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown"  href="{{ route('home')  }}">
										<img style="width:60px; height:60px; margin: 0 auto;" class="img-fluid rounded-circle"  src="{{ asset('frontend/img/avatar.jpg') }}" alt="{{ Auth::user()->name }}">
										</a> 
									@else
										<a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown"  href="{{ route('home')  }}">
										<img style="width:60px; height:60px; margin:  0 auto;" class="img-fluid rounded-circle"  src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}">
										</a> 
									@endif


                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>Welcome</h5>
                                        </div>
                                        <a class="dropdown-item" target="_blank" href="{{ route('friend', Auth::user()->id ) }}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i>Perfil público</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5 text-muted"></i> Mi Billetera</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}"><i class="mdi mdi-logout m-r-5 text-muted"></i> Cerrar Sesión</a>
                                    </div>
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="float-left">
                                    <button class="button-menu-mobile open-left waves-light waves-effect">
                                        <i class="mdi mdi-menu"></i>
                                    </button>
                                </li>
                              
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                    <div class="col-sm-12">
                                        <div class="page-title-box">
                                           
                                            <h4 class="page-title">@yield('title-page')</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- end page title end breadcrumb -->

                        </div><!-- container -->
                        <div class="container-fluid">


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

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2020 HostFriends.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{ asset('vertical/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('vertical/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('vertical/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vertical/assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('vertical/assets/js/detect.js') }}"></script>
        <script src="{{ asset('vertical/assets/js/fastclick.js') }}"></script>
        <script src="{{ asset('vertical/assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('vertical/assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('vertical/assets/js/waves.js') }}"></script>
        <script src="{{ asset('vertical/assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('vertical/assets/js/jquery.scrollTo.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('vertical/assets/js/app.js') }}"></script>
        <script src="{{ asset('vertical/assets/plugins/tinymce/tinymce.min.js') }}"></script>
	
        @stack('scripts')


        <script>
                $(document).ready(function () {
                    if($(".editor").length > 0){
                        tinymce.init({
                            selector: "textarea.editor",
                            theme: "modern",
                            height:300,
                            plugins: [
                                "image lists hr pagebreak spellchecker",
                                "searchreplace wordcount visualblocks visualchars fullscreen insertdatetime media nonbreaking",
                                "save   emoticons template paste textcolor"
                            ],
                            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                            style_formats: [
                                {title: 'Bold text', inline: 'b'},
                                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                                {title: 'Example 1', inline: 'span', classes: 'example1'},
                                {title: 'Example 2', inline: 'span', classes: 'example2'},
                                {title: 'Table styles'},
                                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                            ]
                        });
                    }
                });
            </script>


    </body>
</html>