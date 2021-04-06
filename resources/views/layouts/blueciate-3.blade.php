<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" href="/img/core-img/favicon.ico">
    <title>
        {{ isset($title) ? $title : '' }}
    </title>
    <meta name="og:locale" property="og:locale" content="en_US">
    <meta name="og:type" property="og:type" content="article">
    <meta name="og:site_name" property="og:site_name" content="Blueciate Inc">
    <meta name="og:title" property="og:title" content="{{ isset($title) ? $title : '' }}">
    @if (isset($metaDescription))
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="og:description" property="og:description" content="{{ $metaDescription }}">
    @endif
{{--    <link rel="stylesheet" href="/blueciate/index_files/home-page.css">--}}
    <link rel="stylesheet" href="/blueciate/files/styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="/blueciate/icons/style.css">
    <link rel="stylesheet" type="text/css" href="/blueciate/files/flexslider.min.css">
    <link rel="stylesheet" href="/blueciate/fontawesome-web/css/all.min.css">



{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.css">--}}
{{--    <link rel="stylesheet" href="/blueciate/index_files/style.css">--}}
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Roboto:300,400,700" rel="stylesheet">--}}

    <!-- Modernizr -->
    <!--    <script type="text/javascript" src="./files/modernizr.js.download"></script>-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <!--    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
    <!--    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <!--[endif]-->

    <!--    <script type="text/javascript" charset="UTF-8" src="./files/common.js.download"></script>-->
    <!--    <script type="text/javascript" charset="UTF-8" src="./files/util.js.download"></script>-->
    <!--    <script type="text/javascript" charset="UTF-8" src="./files/stats.js.download"></script>-->

    @stack('styles')
</head>
<body>
<div class="mm-page mm-slideout">
    <div id="wrapper">
        @include('layouts.blueciate.header-2')
            @yield('content')
        @include('layouts.blueciate.footer')
        </div>
    </div>
<!-- jQuery -->

<script src="/blueciate/js/jquery.js"></script>
<script src="/blueciate/js/slick.min.js"></script>
<script src="/blueciate/js/share.min.js"></script>
<script src="/blueciate/js/classie.js"></script>
<script src="/blueciate/js/elements.js"></script>
<script src="/blueciate/js/jquery.animate-enhanced.min.js"></script>
<script src="/blueciate/js/jquery.superslides.min.js"></script>
<script src="/blueciate/js/jquery.easing.js"></script>
<script src="/blueciate/js/hammer.min.js"></script>
<script src="/blueciate/js/scriptmap.js"></script>
<script src="/blueciate/js/gmap.js"></script>
<script src="/blueciate/js/validate.min.js"></script>
<script src="/blueciate/js/jquery.mmenu.min.all.js"></script>
<script src="/blueciate/js/theater.min.js"></script>
<script src="/blueciate/js/jquery.superslides.min.js"></script>
<script src="/blueciate/js/jquery.flexslider-min.js"></script>
<script src="/blueciate/js/imagelightbox.min.js"></script>

<!-- use this url for more information about share button plugin -->
<!-- https://github.com/carrot/share-button/wiki/Configuration-Options -->
<script src="/blueciate/js/scripts.js"></script>

@stack('scripts')
</body>
</html>
