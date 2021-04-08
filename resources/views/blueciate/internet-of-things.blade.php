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
        p.paragraph {
            color: #707577;
            font-family: 'Open Sans',sans-serif;
            line-height: 25px;
            font-style: normal;
            font-weight: 300;
            width: 100%;
            font-size: 18px;
            text-align: justify;
            text-align-last: center;
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
    $images = ['iot-1.jpg', 'iot-2.jpg', 'iot-3.jpg'];
    ?>
    @include('blueciate.image-slider')

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <h2 class="heading">IoT connects physical machines and manufacturing equipment with the digital world of cloud, analytics, artificial intelligence, and more.</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <p class="paragraph">
                    The internet of things (IoT), and its ability to transform business, has become pervasive in
                    the context of product development in the manufacturing industry as digitization is now a
                    business priority for many organizations. IoT connects physical machines and manufacturing
                    equipment with the digital world of cloud, analytics, artificial intelligence, and more. This
                    results in systems that can monitor, collect, exchange, analyze, and deliver valuable new
                    insights that help to drive smarter, faster business decisions for industrial companies.
                </p>
                <p class="paragraph">
                    The design of IoT solution implementation in manufacturing operations needs to handle
                    real-time data generated by sensors at machine/equipment level. This comprises connectivity,
                    data processing, large data storage, business processes. The anticipating challenges in early
                    phases of the project and solution will help organization management and business to complete
                    digitization faster.
                </p>
                <p class="paragraph">
                    Read our point of view on the Industrialization of IoT and its implementation.
                </p>
            </div>
            <div class="col-12 col-md-6">
                <div>
                    <img src="/blueciate/img/iot-1.png">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12">
                <h2 class="heading">
                    As the world begins to return to the new normal, are you looking for a robust
                    solution to help guarantee a safe shopping or working environment?  Among control measures,
                    social distancing is the best way to fight Covid19 propagation.
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div>
                    <img src="/blueciate/img/iot-2.png">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <h2 class="heading">
                    Easily deploy the blue eye solution in:
                </h2>
                <ul>
                    <li>Plants, shop floors, warehouses, stores, malls …</li>
                    <li>Lobbies, labs, offices …</li>
                    <li>Public places: train stations, airports, museums, banks …</li>
                    <li>Construction sites: buildings, public works, railways, bridges, infrastructures …</li>
                </ul>
                <p class="paragraph">
                    With our joint blue eye solution by Blueciate Inc, we help ensure people’s physical safety
                    during visits to private or public places, and help avoid new or long-term lockdowns.
                </p>
                <p class="paragraph">
                    Thanks to embedded camera and Artificial Intelligence (AI) algorithms developed within an
                     Intel framework dedicated to deep learning, this smart little box monitors, automatically
                    and without any data sharing, distances between individuals and warns everyone in case they
                    get too close, and detects if someone is not wearing a mask.
                </p>
                <p class="paragraph">
                    The alarm system plays a part in proper spacing awareness and triggers an audible alarm and
                    flashing light to encourage appropriate distancing or to notify if a mask is missing; it helps
                    fulfill the collective responsibility between individuals, the business, and public policies.
                </p>
            </div>
        </div>
    </div>
@endsection
