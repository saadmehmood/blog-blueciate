
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
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('courses') }}">Courses</a></li>
                                    <li><a href="#">Single Courses</a></li>
                                    <li><a href="#">Instructors</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Single Blog</a></li>
                                    <li><a href="#">Regular Page</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('courses') }}">Courses</a></li>
                            <li><a href="#">Instructors</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>

                        <!-- Search Button -->
{{--                        <div class="search-area">--}}
{{--                            <form action="#" method="post">--}}
{{--                                <input type="search" name="search" id="search" placeholder="Search">--}}
{{--                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>--}}
{{--                            </form>--}}
{{--                        </div>--}}

{{--                        <!-- Register / Login -->--}}
{{--                        <div class="register-login-area">--}}
{{--                            <a href="#" class="btn">Register</a>--}}
{{--                            <a href="index-login.html" class="btn active">Login</a>--}}
{{--                        </div>--}}

                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</header>
