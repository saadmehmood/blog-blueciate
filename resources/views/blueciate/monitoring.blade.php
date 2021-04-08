@push('styles')
    <style>
        body{

            font-family: 'Open Sans',sans-serif;
        }
        .modal {
            z-index: 1050;
        }
        .video-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            opacity: 0.75;
            color: transparent;
            cursor: pointer;
        }
        .modal-lg {
            max-width: 60%;
        }
        .video-iframe {
            width: 100%;
            height: 600px;
        }
        .carousel-item {
            text-align: center;
        }
        .modal-content {
            background-color: transparent;
            border: 0px;
        }
        .carousel-control-prev, .carousel-control-next {
            width: 5%;
        }
        .modal-header {
            border: 0px;
        }
        article#services.hh-services section {
            padding: 1.3em 4.3125em 1.3em 4.3125em;
        }
        h2.heading {
            font-size: 26px;
            color:  #6dab3c;
            font-weight: 600;
            line-height: 35px;
        }
        .heading-top {
            font-size: 26px;
        }
        .heading-small {
            color: #6dab3c;
            font-weight: bold;
            font-size: 16px
        }
        .orange {
            color: #ec6600;
        }
        .font-size-48 {
            font-size: 48px;
        }
        p.paragraph {
            color: #707577;
            font-family: 'Open Sans',sans-serif;
            line-height: 25px;
            font-style: normal;
            font-weight: 300;
            width: 100%;
            font-size: 18px;
            margin-bottom: 0px;
        }
        .text-highlight {
            color: #1785b0;
        }
        .icon-holder {
            width: 35px;
        }
        .icon-title {
            color: #707577;
            font-family: 'Open Sans',sans-serif;
            font-weight: 300;
            font-size: 18px;
        }
        .fa-3 {
            font-size: 2rem;
            color: #6dab3c;
        }
        .low-code-video {
            width: 80%;
            margin: 0 auto;
        }
        .top-on-img {
            position: absolute;
            width: 72%;
            top: 14.8%;
            left: 14%;
        }
        p.paragraph-small {
            color: #707577;
            font-family: 'Open Sans',sans-serif;
            font-size: 17px;
            line-height: 25px;
            font-style: normal;
            font-weight: 300;
        }
        .step-box {
            padding: 20px;
            border-radius: 3px;
            background: #fff;
            box-shadow: 0 0 13px rgba(33,33,33,.07);
            min-height: 250px;
        }
        .step-box .icon-holder {
            width: 100%;
            text-align: center;
        }
        .step-box .icon-title {
            width: 100%;
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
            color: #303030;
            font-size: 16px;
            font-weight: 600;
        }
        .step-box .step-description {
            color: #707577;
            font-family: 'Open Sans',sans-serif;
            font-size: 15px;
            line-height: 25px;
            font-style: normal;
            font-weight: 300;
        }
        .step-box .icon-holder img {
            width: 35px;
        }
        .dashboard .icon-holder {
            width: 60px; height: 60px;
        }
        .dashboard .icon-title {
            font-size: 22px; font-weight: 600; color: #383838;
        }
        .section-7 .icon-img {
            width: 60px;
            height: 60px;
        }
        .section-13 .icon-img {
            width: 80px;
            height: 80px;
        }
        .section-13 .icon-title {
            font-size: 18px;
            font-weight: 600;
            color: #383838;
        }
        .mt-150 {
            margin-top: 150px;
        }
        .mt-100 {
            margin-top: 100px;
        }


        @media screen and (max-width: 992px) {
            .container {
                padding: 0px;
            }
            article#services.hh-services section {
                padding: 1.3em 1.3125em 1.3em 1.3125em;
            }
            .low-code-video {
                width: 100%;
            }
            .modal-lg {
                max-width: 100%;
            }
            h2.heading, .heading-top{
                font-size: 18px;
                line-height: 18px;
            }
            p.paragraph {
                line-height: 16px;
            }
            p.paragraph, p.paragraph-small, .step-box .step-description, .icon-title, .step-box .icon-title, .section-13 .icon-title {
                font-size: 12px;
            }
            .heading-small {
                font-size: 14px;
            }
            .dashboard .icon-holder {
                width: 30px; height: 30px;
            }
            .dashboard .icon-title {
                font-size: 16px;
            }
            .section-5 .icon-holder {
                width: 25px;
            }
            .section-7 .icon-img {
                width: 40px;
                height: 40px;
            }
            .section-13 .icon-img {
                width: 40px;
                height: 40px;
            }
            .mt-150, .mt-100 {
                margin-top: 0px;
            }
        }

        /* On screens that are 600px or less, set the background color to olive */
        @media screen and (max-width: 600px) {
            .low-code-video {
                width: 100%;
            }
            .modal-lg {
                max-width: 100%;
            }
            h2.heading, .heading-top{
                font-size: 18px;
                line-height: 18px;
            }
            p.paragraph {
                line-height: 16px;
            }
            p.paragraph, p.paragraph-small, .step-box .step-description, .icon-title, .step-box .icon-title, .section-13 .icon-title {
                font-size: 12px;
            }
            .heading-small {
                font-size: 14px;
            }
            .dashboard .icon-holder {
                width: 30px; height: 30px;
            }
            .dashboard .icon-title {
                font-size: 16px;
            }
            .section-5 .icon-holder {
                width: 25px;
            }
            .section-7 .icon-img {
                width: 40px;
                height: 40px;
            }
            .section-13 .icon-img {
                width: 40px;
                height: 40px;
            }
            .mt-150, .mt-100 {
                margin-top: 0px;
            }
        }
    </style>
@endpush
@extends('layouts.blueciate-2')
@section('content')

    <?php
    $images = [];
    ?>

    @include('blueciate.image-slider')
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 col-md-12">
                <h2 class="heading text-center">
                    <span class="font-size-48">Monitor. Visualize. Relax. </span>
                    <br>
                    Stay ahead of IT infrastructure issues
                </h2>
                <p class="paragraph mb-5">
                    IT has many different areas, each with their own monitoring requirements: network, infrastructure,
                    hardware and applications are just a few examples.
                    BlueCiate Implementation Partnering with PRTG has everything you need to monitor all areas of your IT.
                    <br>
                    Unlimited version of PRTG for 30 days. After 30 days, PRTG reverts to a free version. Or, you can
                    upgrade to a paid license anytime.
                </p>
            </div>
            <div class="col-12 col-md-12">
                <h2 class="heading">Integrated technologies</h2>
                <p class="paragraph">
                    PRTG monitors your entire IT infrastructure.
                </p>
                <p class="paragraph">
                    All important technologies are supported:
                </p>
                <ul>
                    <li>SNMP: ready-to-use and custom options</li>
                    <li>WMI and Windows Performance Counters</li>
                    <li>SSH: for Linux/Unix and macOS systems</li>
                    <li>Traffic analysis using flow protocols or packet sniffing</li>
                    <li>HTTP requests</li>
                    <li>REST APIs returning XML or JSON</li>
                    <li>Ping, SQL, and many more</li>
                </ul>
            </div>
        </div>
    </div>
    <article id="services" class="hh-services">
            <div class="container">
                <section>
                    <aside class="g lg-twelfths md-one-whole" id="first">
                        <h3>The monitoring solution for all areas of IT</h3>
                        <p style="max-width: 1200px;">
                            IT has many different areas, each with their own monitoring requirements: network, infrastructure, hardware and applications are just a few examples.
                            <br>
                            BlueCiate Implementation Partnering  with PRTG has everything you need to monitor all areas of your IT.
                        </p>
                        <p style="max-width: 1200px;">
                            Unlimited version of PRTG for 30 days. After 30 days, PRTG reverts to a free version.
                            Or, you can upgrade to a paid license anytime.

                        </p>
                    </aside>
                </section>
            </div>
        </article>

<br>
        <!--BLOCK SECTION-->
        <section class="six_box_sec services-blocks-sm" id="six_box_sec">
            <div class="">
                <div class="row no-gutters">
                    <div class="col-12 col-lg-3 col-sm-6 pr-1 pl-1 services-block-four">
                        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
                            <div class="image">
                                <a href="https://www.paessler.com/firewall_monitoring"><img src="/blueciate/img/montoring.png" alt="firewall Monitoring"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-sm-6 pr-1 pl-1 services-block-four">
                        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
                            <div class="image">
                                <a href="https://www.paessler.com/ip_monitoring"><img src="/blueciate/img/ip-monitoring.png" alt="Ip Monitoring"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-sm-6 pr-1 pl-1 services-block-four">
                        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
                            <div class="image">
                                <a href="https://www.paessler.com/lan_monitor"><img src="/blueciate/img/lan-monitoring.png" alt="LAN Monitoring"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-sm-6 pr-1 pl-1 services-block-four">
                        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
                            <div class="image">
                                <a href="https://www.paessler.com/wifi-monitoring"><img src="/blueciate/img/wifi-monitoring.png" alt="Wifi Monitoring"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters mt-2">
                    <div class="col-12 col-lg-3 col-sm-6 pr-1 pl-1 services-block-four">
                        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
                            <div class="image">
                                <a href="https://www.paessler.com/network-monitoring-software"><img src="/blueciate/img/network-diagnosis.png" alt="Network Monitoring Software"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-sm-6 pr-1 pl-1 services-block-four">
                        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
                            <div class="image">
                                <a href="https://www.paessler.com/network-optimization"><img src="/blueciate/img/network-monitoring.png" alt="Network Optimization"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-sm-6 pr-1 pl-1 services-block-four">
                        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
                            <div class="image">
                                <a href="https://www.paessler.com/network-security-monitoring"><img src="/blueciate/img/network.png" alt="Network Security Monitoring"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-sm-6 pr-1 pl-1 services-block-four">
                        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
                            <div class="image">
                                <a href="https://www.paessler.com/network_latency"><img src="/blueciate/img/latency-monitoring.png" alt="Network Latency"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--BLOCK SECTION-->
    @include('layouts.blueciate.contact')
@endsection
