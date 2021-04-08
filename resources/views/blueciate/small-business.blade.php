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
        .heading.orange, .orange {
            color: #ec6600;
        }
        .heading.dark-blue, .dark-blue {
            color: #082c5c;
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
        $images = ['small-business-1.jpg', 'small-business-2.jpg', 'small-business-3.jpg'];
        ?>
    @include('blueciate.image-slider')
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 col-md-12">
                <h2 class="heading mb-0">Small and Medium-Sized Enterprises</h2>
                <h2 class="heading dark-blue"><i>Advancing the interests of America’s largest employers: Small and medium-sized businesses.</i></h2>
                <p class="paragraph">
                    Small- and medium-sized enterprises (SMEs) are the backbone of the U.S. economy and are key
                    contributors to economic growth in other TPP economies as well. The 28 million American SMEs
                    account for nearly two-thirds of net new private sector jobs in recent decades. SMEs that export
                    tend to grow even faster, create more jobs, and pay higher wages than similar businesses that do
                    not trade internation.
                </p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 col-md-12 ">
                <h2 class="heading">THE WAY WE DO BUSINESS AND THE WAY WE COMMUNICATE IS CHANGING RAPIDLY</h2>
                <p class="paragraph mb-5">
                    The demand for remote or home working has increased immeasurably. Prompt responses across multiple
                    communication channels are now standard customer expectations. The choice of communication
                    solutions in the marketplace is vast – however, managing separate tools can waste time and
                    drive down productivity.
                </p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 col-md-6">
                <h2 class="heading">SMALL BUSINESS PHONE SYSTEM</h2>
                <p class="paragraph">
                    NEC’s SL2100 (Small Business Phone System) and SV9100 (SME Phone System) brings all this together
                    with a cost-effective, modular solutions that keeps your team – and your customers – connected.
                    Looking for cost-effective telephone systems for small businesses or SMEs? NEC have the answer.
                </p>
                <p class="paragraph">
                    Make your smartphone your business phone
                </p>
                <ul>
                    <li>Enjoy voice mobile extension over WiFi for your smartphone or smart device</li>
                    <li>Bring Your Own Device (BYOD): Enable your team to use their own mobiles, iPads or tablets</li>
                    <li>Free WiFi business calls</li>
                    <li>Download for free via App Store</li>
                </ul>
            </div>
            <div class="col-12 col-md-6">
                <div>
                    <img src="/blueciate/img/sms-business-1.png">
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 col-md-6">
                <div>
                    <img src="/blueciate/img/sms-business-2.png">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <h2 class="heading orange mb-0">HOMEWORKING VIDEO CONFERENCING:</h2>
                <h2 class="heading">BUILT-IN COLLABORATION</h2>
                <ul>
                    <li>Home working video conferencing solutions, document & screen sharing, up to 32 users</li>
                    <li>Uses secure WebRTC connectivity via a web browser</li>
                    <li>InUC provides further features including Presence, Instant Messaging & Call Status</li>
                    <li>Works via Google Chrome on a PC or Android device</li>
                </ul>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 col-md-6">
                <p class="paragraph">
                    Working from home and missing full-fledged business phone functionality as you are used to in the
                    office? No need to! Our remote contact centre solutions are easily installed on your Windows PC.
                    Using your existing VPN connection they replicate your office desk phone using the same extension
                    number, the same features and experiences as in the office.
                </p>
                <ul>
                    <li>High-quality voice communication using a USB-connected headset</li>
                    <li>Full functionality and features of your desktop phone</li>
                    <li>Plus advanced multimedia applications</li>
                </ul>
            </div>
            <div class="col-12 col-md-6">
                <div>
                    <img src="/blueciate/img/sms-business-3.png">
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 col-md-6">
                <div>
                    <img src="/blueciate/img/sms-business-4.png">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <h2 class="heading orange mb-0">LET YOUR CONTACT CENTER</h2>
                <h2 class="heading">AGENTS WORK FROM HOME!</h2>
                <p class="paragraph">
                    With NEC’s UNIVERGE Business ConneCT, your remote contact center agents can work safely and
                    securely from home – with all the same support, presence and information as in the office. Without
                    any additional licence, your agents can from home simply log on and start work. NEC’s remote
                    contact center solutions keeps them well informed with:
                </p>
                <ul>
                    <li>Full visibility of customers’ histories and their previous interactions</li>
                    <li>Omni-channel service so customers can access your organization using their channel of choice</li>
                    <li>Create a fully functioning remote working contact center for your team</li>
                </ul>
            </div>
        </div>
    </div>

        <article id="services" class="hh-services">
            <div class="container">
                <section>
                    <aside class="g lg-twelfths md-one-whole" id="first">
                        <h3>Small & Mid Size Business</h3>
                        <p style="max-width: 1200px;">
                            Small to medium business solutions and services for hospitality and tourism. Ciate SB make the right technology investments and IT decisions so you can focus on growing your business.
                            <br>
                            The tourism industry has evolved greatly in recent years. Today’s customers want travel technology at their fingertips, and businesses are working harder to meet that need.
                            <br>
                            <br>
                            With a variety of cloud computing solutions, including hybrid cloud, front office, back office, security and more, we have the programs your business needs to succeed. We’ll help you protect your bottom line by designing a scalable end-to-end solution that enables you to serve your customers better.
                            <br>
                            Cloud-based technology solutions for tourism Insight is a leading provider of cloud-based solutions for the travel and tourism industry. Find out how we can help your business
                            <a href="http://www.tooryst.com/">here</a> .
                        </p>
                        <img src="/blueciate/img/small-business.jpg"/>
                    </aside>

                </section>
            </div>
        </article>
@include('layouts.blueciate.contact')
@endsection
