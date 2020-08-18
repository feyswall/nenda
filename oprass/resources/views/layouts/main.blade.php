<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Styles -->
    <link href="{{ asset('custom/custom_css.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Birri @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div class="south-load"></div>
</div>

<header class="header-area ">
    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="h-100 d-md-flex justify-content-between align-items-center">
            <div class="email-address">
                <a href="#">demoEmail@gmail.com</a>
            </div>
        </div>
    </div>

    <!-- Main Header Area -->
    <div class="main-header-area" id="stickyHeader">
        <div class="classy-nav-container breakpoint-off">
            <!-- Classy Menu -->
            <nav class="classy-navbar justify-content-between" id="southNav">

                <!-- Logo -->
                <a class="nav-brand" href="/"><img src="" alt="">BIRRI</a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="{{ route('pages.about') }}"><span id="about">About Us</span></a></li>
                            <li><a href="{{ route('pages.contact') }}"><span id="contact">Contacts</span></a></li>
                        <!--   <li><a href="register.html" id="captured" class="lead">Register</a></li> -->
                            <!--     <li><a href="#myModal" id="captured" class="trigger-btn lead" data-toggle="modal">LogIn</a></li>

    <div id="myModal" class="modal fade">
     <div class="modal-dialog modal-login">
         <div class="modal-content">
             <div class="modal-header">
                 <div class="avatar">
                     <img  alt="Avatar">
                 </div>
                 <h4 class="modal-title">MemLoginv10ogin</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
             </div>
             <div class="modal-body">
                 <form action="/examples/actions/confirmation.php" method="post">
            Loginv10    <div class="form-group">
                         <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                     </div>
                     <div class="form-group">
                         <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                     </div>
                     <div class="form-group">
                         <button type="submit" class="btn btn-outline-danger btn-lg btn-block ">Login</button>
                     </div>
                 </form>
             </div>
             <div class="modal-footer">
                 <a href="#">Forgot Password?</a>
             </div>
         </div>
     </div>
    </div>  -->

                                <!-- Authentication Links -->
                                @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                    @endguest
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</header>

    <!-- default bootstrap nav bar -->
{{--    @include('partials._nav')--}}

    <div>
        @yield('content')
    </div>



    <div class="container">
        <articles></articles>
    </div>









    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay"
            style="background-image:  url(../img/20.jpg) ;">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title lead">
                                <h6>About Us</h6>
                            </div>


                            <div class="footer-logo my-4">
                            </div>
                            <p id="about-footer">

                            </p>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title lead">
                                <h6>Contacts</h6>
                            </div>
                            <!-- Office Hours -->
                            <div class="weekly-office-hours">
                                <ul id="cont">
                                    <li class="d-flex align-items-center justify-content-between">
                                        <span id="phone"></span>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <span id="emayo"></span>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <span id="faces"></span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Address -->
                            <!-- <div class="address">
                                 <h6><img src="img/icons/phone-call.png" alt=""> +45 677 8993000 223</h6>
                                 <h6><img src="img/icons/envelope.png" alt=""> office@template.com</h6>
                                 <h6><img src="img/icons/location.png" alt=""> Main Str. no 45-46, b3, 56832, Los Angeles, CA</h6>
                             </div>-->
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title lead">
                                <h6>Useful Links</h6>
                            </div>
                            <!-- Nav -->
                            <ul class="useful-links-nav d-flex align-items-center">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">News</a></li>
                                <!--  <li><a href="#">Services</a></li>
                                  <li><a href="#">Properties</a></li>
                                  <li><a href="#">Listings</a></li>
                                  <li><a href="#">Testimonials</a></li>
                                  <li><a href="#">Properties</a></li>
                                  <li><a href="#">Blog</a></li>
                                  <li><a href="#">Testimonials</a></li>
                                  <li><a href="#">Contact</a></li>
                                  <li><a href="#">Elements</a></li>
                                  <li><a href="#">FAQ</a></li>-->
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title lead">
                                <h6>Featured Properties</h6>
                            </div>
                            <!-- Featured Properties Slides -->
                            <div class="weekly-office-hours">
                                <p id="firster">

                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- Copywrite Text -->
        <div class="copywrite-text d-flex align-items-center justify-content-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with  udomSalafy
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>





</body>
@yield('down')
</html>
