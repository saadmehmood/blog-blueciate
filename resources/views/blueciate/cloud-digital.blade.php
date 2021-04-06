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
            line-height: 50px;
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
    $images = ['cd-1.jpg', 'cd-2.jpg', 'cd-3.jpg', 'cd-4.jpg'];
    ?>
    @include('blueciate.image-slider')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 px-0">
                <h2 class="heading">Cloud & Digital</h2>
                <p class="paragraph">
                    Our practice in B2B and B2C digital transformation solution provider. We create differentiating
                    experiences that foster relationships through Commerce, Marketing, Sales and Service solutions.
                    By combining proven methodologies, deep technical expertise and strategy, our talented teams build
                    digital customer experiences that engage and convert, enabling brands to realize their CX vision.
                    NEC, AuraQuantic in low code applications as a strategic partner. We help our clients craft
                    successful digital customer experience strategies, put them into practice, and continually optimize
                    them for long-term success.
                </p>
                <p class="paragraph">
                    Today, smartphones have a massive effect on the world, with these devices expected to account for
                    a third of internet protocol traffic by 2021. This extends to financial services, with many
                    customers using mobile apps to conduct their day-to-day banking business.
                    A recent study conducted in the UK by Smart Money People discovered just how prevalent this effect
                    is, with 39.2% of customers saying their preferred means of dealing with banks is via apps. This
                    study also found that the preference for online banking has fallen to 38.6% – putting it below the
                    use of banking apps for the first time.
                    “It’s a timely reminder that every financial services firm needs to offer an excellent, app-based
                    user experience,”
                </p>
            </div>

            <div class="col-12 mx-lg-5 mt-lg-5 col-lg-5 px-0 align-self-center">
                <p>
                    <img src="/blueciate/img/mobile.png" alt="cloud&digital" />
                </p>
            </div>
        </div>
        <div class="row mt-lg-5">
            <div class="col-12 col-lg-5 px-0">
                <div class="image">
                    <img src="/blueciate/img/cloud-digital-2.png" alt="cloud&digital" style="width: 80%"/>
                </div>

            </div>
            <div class="col-12 mx-lg-5 col-lg-6 px-0">
                <p class="paragraph">
                    New technologies such as AI, AR, VR, and blockchain will continue to evolve and play a critical
                    role here. After all, there is currently a need to deliver a customer experience that automatically
                    understands customer next steps and provides easily accessible options in order to make your
                    customers feel that they are valued and special.
                </p>
                <p class="paragraph">
                    For instance, when a client opens an app, the screen should be customized. When they visit the
                    bank, the bank representative should know why they are there, with the same information being
                    relayed to and triggered on the banks multiple channels, products, and interaction points.
                </p>
                <p class="paragraph">
                    This is why it is very important that banks implement an effective customer-centric strategy, but
                    it’s vital to remember that the heart of any new customer-centric strategy needs to come from your
                    people, starting with the CEO. The CRI recently discovered that 80% of respondents gave their CEO
                    credit for leading a successful cultural transformation within their organization. This is
                    significant as a successful cultural transformation is an important factor when banks want to begin
                    or expand out their customer-centric strategy, as a more mature culture leads to happier employees,
                    and happier employees will always put the customer first.
                </p>
            </div>
        </div>
    </div>
@endsection
