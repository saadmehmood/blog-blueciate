<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" href="/img/core-img/favicon.ico">

    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.css">
    <link rel="stylesheet" href="/blueciate/index_files/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="/blueciate/index_files/home-page.css">
</head>
<body>
<!-- Modal -->
<style>
    .modal-content {
        background: transparent;
        border: none;
    }
    .modal-header {
        border: none;
    }
    .modal-lg {
        max-width: 60%;
    }
    .modal-body {

        background-color: #002E47;
        /*background-image: url("/img/webinar-bg.png");*/
        /*background-position: right;*/
        /*background-repeat: no-repeat;*/
        min-height: 150px;
    }
    .webinar-content {
        color: white;
        padding: 20px;
        margin: 100px 0;
    }
    .webinar-img {
        min-height: 200px;
        overflow: hidden;
        background-size: cover;
        background-position: center;
    }
    .webinar-content p {
        color: white;
    }
    .webinar-bg-image {
        background-image: url("/blueciate/img/webinar-bg.png");
    }
    .remote-work-bg-image {
        background-image: url("/blueciate/img/remote-work-popup.jpeg");
    }

    @media screen and (max-width: 992px) {
        .modal-lg {
            max-width: 100%;
        }
        .webinar-img{
            display: none;
        }
        .webinar-content{
            max-width: 100%;
        }
    }

    @media screen and (max-width: 600px) {
        .modal-lg {
            max-width: 100%;
        }
        .webinar-img{
            display: none;
        }
        .webinar-content{
            max-width: 100%;
        }
    }
</style>
@stack('styles')
@include('layouts.blueciate.header')
    @yield('content')
@include('layouts.blueciate.footer')

    <script>
        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {myFunction()};

        // Get the navbar
        var navbar = document.getElementById("main-nav");

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky");
                $('.featured-blog').addClass('mt-100');
            } else {
                navbar.classList.remove("sticky");
                $('.featured-blog').removeClass('mt-100');
            }
        }
    </script>

    <link id="gs-css" type="text/css" rel="stylesheet" href="/blueciate/index_files/style(1).css">
    <script src="/blueciate/index_files/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


    <!--jQuery library-->
    <script src="/blueciate/index_files/jquery.min.js"></script>

    <!--Popper JS -->
    <script src="/blueciate/index_files/popper.min.js"></script>

    <!--Latest compiled JavaScript-->
    <script src="/blueciate/index_files/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>

    <!--OPTIONAL JQUERY-->
    <script>

        var counterS = 0;
        var counterA = 0;

        $(function () {

            $(".get-started-btn").on('click', 'a', function () {
                $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top
                }, 1000);
            });

            $(document).ready(function () {
                $('#hamburger').click(function () {
                    $(this).toggleClass('open');
                    $("#header .main-menu").toggleClass('show');
                });
            });


            $.fn.isInViewport = function () {
                var elementTop = $(this).offset().top;
                var elementBottom = elementTop + $(this).outerHeight();

                var viewportTop = $(window).scrollTop();
                var viewportBottom = viewportTop + $(window).height();

                return elementBottom > viewportTop && elementTop < viewportBottom;
            };

            $(window).on('resize scroll', function () {

                // language=JQuery-CSS

            });

            //SMOOTH SCROLL
            $(".main-menu li").on('click', 'a', function () {
                $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top
                }, 2000);
            });

            //SMOOTH SCROLL
            $(".cta-contactus").on('click', function () {
                $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top
                }, 2000);
            });


        });


        // jQuery is required to run this code
        $(document).ready(function () {
            scaleVideoContainer();

            initBannerVideoSize('.video-container .poster img');
            initBannerVideoSize('.video-container .filter');
            initBannerVideoSize('.video-container video');

            $(window).on('resize', function () {
                scaleVideoContainer();
                scaleBannerVideoSize('.video-container .poster img');
                scaleBannerVideoSize('.video-container .filter');
                scaleBannerVideoSize('.video-container video');
            });
            $('#remoteWork').modal();setTimeout(function() {
                $('#remoteWork').modal('hide').fadeOut(2000);
            }, 10000);
            // if (Cookies.get('webinar-feb') !== 'submitted') {
            // }
        });

        function scaleVideoContainer() {
            var height = $(window).height() + 5;
            var unitHeight = parseInt(height) + 'px';
            $('.homepage-hero-module').css('height', unitHeight);
        }

        function initBannerVideoSize(element) {
            $(element).each(function () {
                $(this).data('height', $(this).height());
                $(this).data('width', $(this).width());
            });

            scaleBannerVideoSize(element);
        }

        function scaleBannerVideoSize(element) {

            var windowWidth = $(window).width(),
                windowHeight = $(window).height() + 5,
                videoWidth,
                videoHeight;

            // console.log(windowHeight);

            $(element).each(function () {
                var videoAspectRatio = $(this).data('height') / $(this).data('width');

                $(this).width(windowWidth);

                if (windowWidth < 1000) {
                    videoHeight = windowHeight;
                    videoWidth = videoHeight / videoAspectRatio;
                    $(this).css({'margin-top': 0, 'margin-left': -(videoWidth - windowWidth) / 2 + 'px'});

                    $(this).width(videoWidth).height(videoHeight);
                }

                $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

            });
        }


    </script>

</body>
</html>
