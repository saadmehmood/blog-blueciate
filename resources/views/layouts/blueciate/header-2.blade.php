<header id="main1" style="display: none">
{{--    <div class="sign_up">--}}
{{--        <a href="/contact-us" style="text-decoration:none;">--}}
{{--            <i class="fa fa-phone-square awesomefonts"></i>Contact Us--}}
{{--        </a>--}}
{{--        |--}}
{{--        <a href="/about-us" style="text-decoration:none;">--}}
{{--            <i class="fa fa-calendar-o awesomefonts"></i>About Us--}}
{{--        </a>--}}
{{--        |--}}
{{--        <a href="/support" style="text-decoration:none;">--}}
{{--            <i class="fa fa-users awesomefonts"></i>Support--}}
{{--        </a>--}}
{{--    </div>--}}
</header>
<article id="content">
    <section id="main-nav">
        <div class="container clearfix">
            <a class="branding" href="/">
                <img src="/blueciate/files/blueciate.png">
            </a>
            <nav class="site-nav" style="font-size:15px;">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="javascript:void(0)">services</a>
                        <ul class="sub-links">
                            <li><a href="{{ route('analytics') }}">Analytics</a></li>
                            <li><a href="{{ route('application-integration') }}">Application Integration</a></li>
                            <li><a href="{{ route('cloud') }}">Cloud & Digital</a></li>
                            <li><a href="{{ route('internet-of-things') }}">Internet of Things (IoT)</a></li>
                            <li><a href="{{ route('small-business') }}">Small and Mid Size Business</a></li>
                            <li><a href="{{ route('remote-work') }}">Remote Work</a></li>
                        </ul>

                    </li>
                    <li><a href="{{ route('products') }}">Products</a></li>
                </ul>

            </nav>

        </div>
    </section>

    <!-- responsive menu for mobile -->
    <!-- The menu -->
    <!-- mobile nav wrapper  -->
    <article class="mobile-nav sticky-off">
        <div class="banner-mobile ">
            <div class="container">
                <div class="row">
                    <aside class="block">
                        <a class="branding" href="/">
                            <img src="/blueciate/files/blueciate.png">
                        </a>
                        <a href="#my-menu" id="naver" class="icon-naver"></a>
                    </aside>
                </div>
            </div>
        </div>

    </article>
