<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aggarsain Spinners Limited</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />
       <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/skin-corporate-5.css') }}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        <header id="header" class="header-narrow" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-14px", "stickyChangeLogo": false}'>
            <div class="header-body">
                <div class="header-top header-top-secondary header-top-style-3">

                </div>
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-logo">
                                <a href="/">
                                    <img alt="Porto" height="35px" src="{{ asset('img/logo.png')}}">
                                    <img alt="Porto" height="35px" width="200px" src="{{ asset('img/logoname.jpeg')}}">
                                </a>
                            </div>
                        </div>
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-nav">
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                                        <i class="fa fa-bars"></i>
                                    </button>

                                    <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                                        <nav>
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li>
                                                    <a href="/">
                                                        Home
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('aboutus')}}">
                                                        About
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle" href="#">
                                                        Investors
                                                    </a>

                                                    <ul class="dropdown-menu">
                                                        <li class="dropdown">
                                                            <a href="{{route('report', ['reportname' => 'Annual'])}}">Annual reports</a>
                                                        </li>
                                                        <li class="dropdown">
                                                                <a href="{{route('report', ['reportname' => 'Quarterly'])}}">Quarterly financial results</a>
                                                            </li>
                                                        <li class="dropdown">
                                                            <a href="{{route('report', ['reportname' => 'Shareholding'])}}">Shareholding pattern</a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a href="{{route('report', ['reportname' => 'Policies'])}}">Policies and code of conduct</a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a href="{{route('report', ['reportname' => 'bod'])}}">Board of Directors and committee</a>
                                                        </li>   
                                                                                                      
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a  href="{{route('contactus')}}">
                                                        Contact Us
                                                    </a>
                                                </li>
                                                @guest

                                                @else
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }}
                                                    </a>

                                                    <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> -->
                                                        <!-- <a class="dropdown-item" href="/reports">
                                                           Manage Reports
                                                        </a> -->

                                                    <!-- </div> -->

                                                    <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </div> -->



                                                    <ul class="dropdown-menu">
                                                        <li class="dropdown">
                                                                <a class="dropdown-item" href="/reports"> Manage Reports </a>
                                                        </li>
                                                        <li class="dropdown">
                                                                <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> -->
                                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                                    onclick="event.preventDefault();
                                                                                document.getElementById('logout-form').submit();">
                                                                    {{ __('Logout') }}
                                                                </a>

                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                    @csrf
                                                                </form>
                                                            <!-- </div>  -->
                                                               
                                                               </li>
                                                                                             
                                                    </ul>
                                                </li>
                                                @endguest   
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div role="main" class="main">
          <div class="slider-container rev_slider_wrapper">
            
                    <img src="{{ asset('img/header.jpeg') }}" alt="" class="rev-slidebg" style="width:100%">
          </div>
          <div class="container" style="margin-top:40px; margin-bottom:60px;"> 
          <div class="row mb-xl">
						<div class="col-md-4">
								<h2 class="mb-xl" style="color:#f79749; padding-top: 2px;">
									<strong>Quick links</strong>
								</h2>
								<div class="list-group" style="padding-top: 7px;">
									<a href="{{route('report', ['reportname' => 'Annual'])}}" class="list-group-item list-group-item-action list-group-item-secondary">Annual reports</a>
									<a href="{{route('report', ['reportname' => 'Quarterly'])}}" class="list-group-item list-group-item-action list-group-item-secondary">Quarterly financial results</a>
									<a href="{{route('report', ['reportname' => 'Shareholding'])}}" class="list-group-item list-group-item-action list-group-item-secondary">Shareholding pattern</a>
									<a href="{{route('report', ['reportname' => 'Policies'])}}" class="list-group-item list-group-item-action list-group-item-secondary">Policies and code of conduct</a>
									<a href="{{route('report', ['reportname' => 'bod'])}}" class="list-group-item list-group-item-action list-group-item-secondary">Board of Directors and committee</a>
								   
								</div>
		
							</div>
					<div class="col-md-8">         
                @yield('main')
                </div>
				</div>
			</div>
        <footer id="footer">
          <div class="container">
            <div class="row">
              <div class="footer-ribbon">
                <span>Get in Touch</span>
              </div>
              <div class="col-md-4">
                <div class="newsletter">
                  <h4>Corporate Office</h4>
                  <p style="color:white !important; font-size: 1.1em !important;"> SCO 404, Second Floor, sector 20, <br> Panchkula - 134109</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="contact-details">
                  <h4>Contact Us</h4>
                  <p style="color:white !important; font-size: 1.1em !important;">
                    <i class="fa fa-phone"></i>&nbsp;&nbsp; (0172) 4644666
                    <br>
                    <i class="fa fa-phone"></i>&nbsp;&nbsp; (0172) 4644777</p>

                </div>
              </div>
              <div class="col-md-4">
                <div class="contact-details">
                  <h4>Drop an email</h4>
                  <p style="color:white !important; font-size: 1.1em !important;">
                    <i class="fa fa-envelope"></i>&nbsp;&nbsp; info@aggarsainspinners.com
                    <br>
                    <i class="fa fa-envelope"></i>&nbsp;&nbsp; aggarsainspinners@gmail.com
                  </p>
                </div>
              </div>
              <div class="col-md-2">

              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
              <div class="row">
                <div class="col-md-8">
                  <p style="color:white !important; font-size: 1.1em !important;">IT Partner : Subodh Moudgil (9781436777)
                  </p>
                </div>
                <div class="col-md-4">
                  <nav id="sub-menu">
                    <ul style="color:white !important; font-size: 1.1em !important;">
                      Copyright © 2019 Aggarsain Spinners Limited
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </footer>
		</div>
        </div>
    </body>
</html>
