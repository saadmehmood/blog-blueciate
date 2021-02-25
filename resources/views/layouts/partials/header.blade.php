
<!-- Preloader -->
<div id="preloader">
    <div class="spinner"></div>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area">

{{--    <!-- Top Header Area -->--}}
{{--    <div class="top-header-area d-flex justify-content-between align-items-center">--}}
{{--        <!-- Contact Info -->--}}
{{--        <div class="contact-info">--}}
{{--            <a href="#"><span>Phone:</span> +44 300 303 0266</a>--}}
{{--            <a href="#"><span>Email:</span> info@clever.com</a>--}}
{{--        </div>--}}
{{--        <!-- Follow Us -->--}}
{{--        <div class="follow-us">--}}
{{--            <span>Follow us</span>--}}
{{--            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>--}}
{{--            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>--}}
{{--            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- Navbar Area -->
    <div class="clever-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="cleverNav">

                <!-- Logo -->
                <a class="nav-brand" href="index.html"><img src="img/core-img/blueciate.png" alt=""></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="https://blueciate.com/">Home</a></li>
                            <li><a href="https://blueciate.com/cloud">Cloud</a>
                            </li>
                            <li><a href="https://blueciate.com/products">Products</a></li>
                            <li><a href="https://blueciate.com/consulting">Consulting</a></li>
                            <li><a href="{{ route('home') }}">Blog</a></li>
                        </ul>

                        <!-- Search Button -->
{{--                        <div class="search-area">--}}
{{--                            <form action="#" method="post">--}}
{{--                                <input type="search" name="search" id="search" placeholder="Search">--}}
{{--                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>--}}
{{--                            </form>--}}
{{--                        </div>--}}

                        <!-- Register / Login -->

                        @guest
                        <div class="register-login-area">
                            <a href="{{ route('register') }}" class="btn">Register</a>
                            <a href="{{ route('login') }}" class="btn active">Login</a>
                        </div>
                        @else
                        <div class="login-state d-flex align-items-center">
                            <div class="user-name mr-30">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                        {{ link_to_route('users.show', __('users.public_profile'), Auth::user(), ['class' => 'dropdown-item']) }}
                                        {{ link_to_route('users.edit', __('users.settings'), [], ['class' => 'dropdown-item']) }}
                                        <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            @lang('auth.logout')</a>
                                        <form id="logout-form" class="d-none" action="{{ url('/logout') }}" method="POST">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="userthumb">
                                <img src="img/bg-img/t1.png" alt="">
                            </div>
                        </div>
                        @endguest

                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</header>
