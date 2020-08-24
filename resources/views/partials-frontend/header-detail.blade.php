	
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
                            <li><a href="account.html" class="btn_add">Explorar</a></li>
                           
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
                                <li><span><a href="#0">Home</a></span></li>
                                <li><span><a href="#0">Busca Host</a></span></li>
                                <li><span><a href="#0">Vivir Experiencia</a></span></li>
                                <li><span><a href="#0">Temporalidad</a></span></li>
                        
                            </ul>
                        </nav>
                        
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->		
        </header>
        <!-- /header -->
        