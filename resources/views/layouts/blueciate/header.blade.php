
<div id="hamburger">
    <span></span>
    <span></span>
    <span></span>
</div>
<div id="header" class="{{ isset($showVideo) ? '' : 'video-container__video-false' }}">
    <div class="homepage-hero-module" style="height: 588px;">
        <div class="video-container">
            @yield('video')
            <div class="container-fluid pl-3 pr-3 pl-lg-5 pr-lg-5">
                <div class="row">
                    <div class=" pl-5 col-3 pl-lg-3 col-lg-1 pt-4 mt-2">
{{--                        <img src="/blueciate/files/blueciate.png" class="img-fluid">--}}
                        <img src="/blueciate/img/logo-square.jpeg" class="img-fluid">
                    </div>
                    <div class="col-lg-11">
                        <ul class="main-menu">
                            <li>
                                <a href="{{ route('home') }}"><i class="fas fa-home mr-2"></i>Home</a>
                            </li>
                            <li>
                                <a href="{{ route('cloud') }}"><i class="fas fa-cloud mr-2"></i>Cloud</a>
                            </li>
                            <li>
                                <a href="{{ route('products') }}"><i class="fas fa-wifi mr-2"></i>Products</a>
                            </li>
                            <li>
                                <a href="{{ route('consulting') }}"><i class="fas fa-clock mr-2"></i>Consulting</a>
                            </li>
                            <li>
                                <a href="{{ route('posts.index') }}"><i class="fas fa-blog"></i>Blog</a>
                            </li>
                            <li>
                                @guest
                                <a href="{{ route('login') }}" class="login-btn"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
                                @else

                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();" class="login-btn"><i class="fas fa-sign-out-alt mr-2"></i>
                                        @lang('Logout')
                                    </a>

                                    <form id="logout-form" class="d-none" action="{{ url('/logout') }}" method="POST">
                                        {{ csrf_field() }}
                                    </form>
                                @endguest
                            </li>
                        </ul>
                    </div>
                </div>
                @yield('video-content')
            </div>
        </div>
    </div>
</div>
