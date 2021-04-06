@extends('layouts.blueciate-3')
@push('styles')
    <link rel="stylesheet" href="/blueciate/css/style-awsm.css">
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
            text-align-last: left;
            margin-bottom: 30px;
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
@section('content')
        <?php
        $images = ['ai-1.jpg', 'ai-2.jpg', 'ai-3.jpeg', 'ai-4.jpg'];
        ?>
        @include('blueciate.image-slider')



        <div class="container">
            <div class="row mt-5 mb-4">
                <div class="col-lg-12 col-sm-12">
                    <h2 class="heading">Application Integration</h2>
                    <p class="paragraph">
                        Application integration on AWS is a suite of services that enable communication between decoupled components within microservices, distributed systems, and serverless applications. You don’t need to refactor your entire architecture to benefit - decoupling applications at any scale can reduce the impact of changes, making it easier to update and faster to release new features.
                    </p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <h2 class="heading-top text-highlight">Develop with agility</h2>
                    <p class="paragraph" style="text-align: left">
                        By using application integration services to connect your apps, you no longer need to write custom code to enable interoperability. This also limits extra code that may be repeated in your microservices and functions.
                    </p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <h2 class="heading-top text-highlight">Focus on innovation</h2>
                    <p class="paragraph">
                        Application integration services shift your operational responsibilities to AWS, so you can focus on development and innovation. With automatic scaling, you no longer need to provision, patch, and manage servers.
                    </p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <h2 class="heading-top text-highlight">Scale and fail independently</h2>
                    <p class="paragraph">
                        Decoupling your app with application integration services allows them to remain interoperable, but if one service has a failure or spike in workload, it won’t affect the rest of them.
                    </p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <h2 class="heading-top text-highlight">Message with confidence</h2>
                    <p class="paragraph">
                        Application integration messaging services can accommodate any level of throughput and use cross-availability zone message storage to provide high availability and durability.
                    </p>
                </div>
            </div>
            <div class="row"><div class="col-12"><hr></div></div>
            <div class="row mt-5">
                <div class="col-lg-12 col-sm-12">
                    <h2 class="heading mb-1">AWS Application Integration services</h2>
                </div>
            </div>
            <div class="lb-row lb-row-max-large lb-snap">
                <div class="lb-col lb-tiny-24 lb-mid-24">
                    <div class="lb-border-p lb-border-horizontal lb-grid lb-row lb-row-max-large lb-snap lb-div" style="background-color:#FFFFFF; margin-bottom:0px;">
                        <div class="lb-col lb-tiny-24 lb-mid-4">
                            <div class="lb-txt-bold lb-txt-none lb-txt-20 lb-tiny-v-margin lb-txt">
                                Category
                            </div>
                        </div>
                        <div class="lb-col lb-tiny-24 lb-mid-20">
                            <div class="lb-none-pad lb-none-v-margin lb-xb-grid-wrap" style="background-color:#FFFFFF;">
                                <div class="lb-xb-grid lb-row-max-large lb-snap lb-div lb-gutter-tiny lb-vgutter-tiny lb-tiny-xb-2">
                                    <div class="lb-xbcol">
                                        <div class="lb-txt-bold lb-txt-none lb-txt-20 lb-none-pad lb-micro-v-margin lb-txt">
                                            What is it
                                        </div>
                                    </div>
                                    <div class="lb-xbcol">
                                        <div class="lb-txt-bold lb-txt-none lb-txt-20 lb-none-pad lb-micro-v-margin lb-txt">
                                            AWS service
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lb-border-p lb-border-bottom lb-none-v-margin lb-grid lb-row lb-row-max-large lb-snap lb-div" style="background-color:#FFFFFF;">
                        <div class="lb-col lb-tiny-24 lb-mid-4">
                            <a class="lb-txt-bold lb-txt-none lb-txt-16 lb-tiny-v-margin lb-txt" style="margin-bottom:17px;" href="/api-gateway/api-management/?c=ai&amp;sec=srv"> API Management</a>
                            <div class="lb-tiny-hide lb-small-hide lb-mid-show lb-none-pad lb-none-v-margin lb-box" style="height:89px;">
                            </div>
                        </div>
                        <div class="lb-col lb-tiny-24 lb-mid-20">
                            <div class="lb-border-p lb-border-bottom lb-none-pad lb-none-v-margin lb-xb-grid-wrap" style="background-color:#FFFFFF;">
                                <div class="lb-xb-grid lb-row-max-large lb-snap lb-div lb-gutter-tiny lb-vgutter-tiny lb-tiny-xb-2">
                                    <div class="lb-xbcol">
                                        <div class="lb-txt-normal lb-txt-none lb-txt-16 lb-none-pad lb-micro-v-margin lb-txt">
                                            Create, publish, maintain, monitor, and secure APIs at any scale for serverless workloads and web applications
                                        </div>
                                    </div>
                                    <div class="lb-xbcol">

                                        <div class="lb-tiny-iblock lb-none-pad lb-micro-v-margin lb-box lb-hover-p-feature-shadow">
                                            <figure class="lb-tiny-iblock lb-none-v-margin lb-svg">
                                                <div class="lb-none-pad">
                                                    <img src="//d1.awsstatic.com/webteam/category-pages/Application Integration/Amazon-API-Gateway_Icon_32_Squid.be56b6a54ba27cf462affd4026d8178543f5f03a.svg" title="Amazon-API-Gateway_Icon_32_Squid" alt="Amazon-API-Gateway_Icon_32_Squid">
                                                </div>
                                            </figure>
                                            <a class="lb-txt-bold lb-txt-none lb-tiny-iblock lb-txt-16 lb-none-pad lb-none-v-margin lb-txt" href="/api-gateway/?c=ai&amp;sec=srv" data-lb-popover-trigger="api-gateway"> Amazon API Gateway</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lb-none-pad lb-none-v-margin lb-xb-grid-wrap" style="background-color:#FFFFFF;">
                                <div class="lb-xb-grid lb-row-max-large lb-snap lb-div lb-gutter-tiny lb-vgutter-tiny lb-tiny-xb-2">
                                    <div class="lb-xbcol">
                                        <div class="lb-txt-normal lb-txt-none lb-txt-16 lb-none-pad lb-micro-v-margin lb-txt">
                                            Create a flexible API to securely access, manipulate, and combine data from one or more data sources
                                        </div>
                                    </div>
                                    <div class="lb-xbcol">

                                        <div class="lb-tiny-iblock lb-none-pad lb-micro-v-margin lb-box lb-hover-p-feature-shadow">
                                            <figure class="lb-tiny-iblock lb-none-v-margin lb-svg">
                                                <div class="lb-none-pad">
                                                    <img src="//d1.awsstatic.com/webteam/category-pages/Application Integration/AWS-AppSync-Icon_32_Squid.ad16576ed5575c88962974b56e3aca3d93dc7a89.svg" title="AWS-AppSync-Icon_32_Squid" alt="AWS-AppSync-Icon_32_Squid">
                                                </div>
                                            </figure>
                                            <a class="lb-txt-bold lb-txt-none lb-tiny-iblock lb-txt-16 lb-none-pad lb-none-v-margin lb-txt" href="/appsync/?c=ai&amp;sec=srv" data-lb-popover-trigger="appsync"> AWS AppSync</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lb-border-p lb-border-bottom lb-none-v-margin lb-grid lb-row lb-row-max-large lb-snap lb-div" style="background-color:#FFFFFF;">
                        <div class="lb-col lb-tiny-24 lb-mid-4">
                            <a class="lb-txt-bold lb-txt-none lb-txt-16 lb-tiny-v-margin lb-txt" style="margin-bottom:17px;" href="/event-driven-architecture/?c=ai&amp;sec=srv"> Event Bus</a>
                            <div class="lb-tiny-hide lb-small-hide lb-mid-show lb-none-pad lb-none-v-margin lb-box" style="height:20px;">
                            </div>
                        </div>
                        <div class="lb-col lb-tiny-24 lb-mid-20">
                            <div class="lb-none-pad lb-none-v-margin lb-xb-grid-wrap" style="background-color:#FFFFFF;">
                                <div class="lb-xb-grid lb-row-max-large lb-snap lb-div lb-gutter-tiny lb-vgutter-tiny lb-tiny-xb-2">
                                    <div class="lb-xbcol">
                                        <div class="lb-txt-normal lb-txt-none lb-txt-16 lb-none-pad lb-micro-v-margin lb-txt">
                                            Build an event-driven architecture that connects application data from your own apps, SaaS, and AWS services
                                        </div>
                                    </div>
                                    <div class="lb-xbcol">

                                        <div class="lb-tiny-iblock lb-none-pad lb-micro-v-margin lb-box lb-hover-p-feature-shadow">
                                            <figure class="lb-tiny-iblock lb-none-v-margin lb-svg">
                                                <div class="lb-none-pad">
                                                    <img src="//d1.awsstatic.com/webteam/category-pages/Application Integration/AWS-EventBridge_Icon_32_Squid.ff0571e1ac1809f868a703de93df70384b931d7e.svg" title="AWS-EventBridge_Icon_32_Squid" alt="AWS-EventBridge_Icon_32_Squid">
                                                </div>
                                            </figure>
                                            <a class="lb-txt-bold lb-txt-none lb-tiny-iblock lb-txt-16 lb-none-pad lb-none-v-margin lb-txt" href="/eventbridge/?c=sc&amp;sec=srv" data-lb-popover-trigger="eventbridge"> Amazon EventBridge</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lb-border-p lb-border-bottom lb-none-v-margin lb-grid lb-row lb-row-max-large lb-snap lb-div" style="background-color:#FFFFFF;">
                        <div class="lb-col lb-tiny-24 lb-mid-4">
                            <a class="lb-txt-bold lb-txt-none lb-txt-16 lb-tiny-v-margin lb-txt" style="margin-bottom:17px;" href="/messaging/?c=ai&amp;sec=srv"> Messaging</a>
                            <div class="lb-tiny-hide lb-small-hide lb-mid-show lb-none-pad lb-none-v-margin lb-box" style="height:165px;">
                            </div>
                        </div>
                        <div class="lb-col lb-tiny-24 lb-mid-20">
                            <div class="lb-border-p lb-border-bottom lb-none-pad lb-none-v-margin lb-xb-grid-wrap" style="background-color:#FFFFFF;">
                                <div class="lb-xb-grid lb-row-max-large lb-snap lb-div lb-gutter-tiny lb-vgutter-tiny lb-tiny-xb-2">
                                    <div class="lb-xbcol">
                                        <div class="lb-txt-normal lb-txt-none lb-txt-16 lb-none-pad lb-micro-v-margin lb-txt">
                                            Reliable high throughput pub/sub, SMS, email, and mobile push notifications
                                        </div>
                                    </div>
                                    <div class="lb-xbcol">

                                        <div class="lb-tiny-iblock lb-none-pad lb-micro-v-margin lb-box lb-hover-p-feature-shadow">
                                            <figure class="lb-tiny-iblock lb-none-v-margin lb-svg">
                                                <div class="lb-none-pad">
                                                    <img src="//d1.awsstatic.com/webteam/category-pages/Application Integration/AWS-Simple-Notification-Service_Icon_32_Squid.83c21af5c6c4a5ee1e05ae4ae3bf297dd970e2f4.svg" title="AWS-Simple-Notification-Service_Icon_32_Squid" alt="AWS-Simple-Notification-Service_Icon_32_Squid">
                                                </div>
                                            </figure>
                                            <a class="lb-txt-bold lb-txt-none lb-tiny-iblock lb-txt-16 lb-none-pad lb-none-v-margin lb-txt" href="/sns/?c=ai&amp;sec=srv" data-lb-popover-trigger="sns"> Amazon Simple Notification Service (SNS)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lb-border-p lb-border-bottom lb-none-pad lb-none-v-margin lb-xb-grid-wrap" style="background-color:#FFFFFF;">
                                <div class="lb-xb-grid lb-row-max-large lb-snap lb-div lb-gutter-tiny lb-vgutter-tiny lb-tiny-xb-2">
                                    <div class="lb-xbcol">
                                        <div class="lb-txt-normal lb-txt-none lb-txt-16 lb-none-pad lb-micro-v-margin lb-txt">
                                            Message queue that sends, stores, and receives messages between application components at any volume
                                        </div>
                                    </div>
                                    <div class="lb-xbcol">

                                        <div class="lb-tiny-iblock lb-none-pad lb-micro-v-margin lb-box lb-hover-p-feature-shadow">
                                            <figure class="lb-tiny-iblock lb-none-v-margin lb-svg">
                                                <div class="lb-none-pad">
                                                    <img src="//d1.awsstatic.com/webteam/category-pages/Application Integration/AWS-Simple-Queue-Service_Icon_32_Squid.888914dcb2886d02f1c4bd470781ba380ec7e504.svg" title="AWS-Simple-Queue-Service_Icon_32_Squid" alt="AWS-Simple-Queue-Service_Icon_32_Squid">
                                                </div>
                                            </figure>
                                            <a class="lb-txt-bold lb-txt-none lb-tiny-iblock lb-txt-16 lb-none-pad lb-none-v-margin lb-txt" href="/sqs/?c=ai&amp;sec=srv" data-lb-popover-trigger="sqs"> Amazon Simple Queue Service (SQS)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lb-none-pad lb-none-v-margin lb-xb-grid-wrap" style="background-color:#FFFFFF;">
                                <div class="lb-xb-grid lb-row-max-large lb-snap lb-div lb-gutter-tiny lb-vgutter-tiny lb-tiny-xb-2">
                                    <div class="lb-xbcol">
                                        <div class="lb-txt-normal lb-txt-none lb-txt-16 lb-none-pad lb-micro-v-margin lb-txt">
                                            Message broker for Apache ActiveMQ and RabbitMQ that makes migration easy and enables hybrid architectures
                                        </div>
                                    </div>
                                    <div class="lb-xbcol">

                                        <div class="lb-tiny-iblock lb-none-pad lb-micro-v-margin lb-box lb-hover-p-feature-shadow">
                                            <figure class="lb-tiny-iblock lb-none-v-margin lb-svg">
                                                <div class="lb-none-pad">
                                                    <img src="//d1.awsstatic.com/webteam/category-pages/Application Integration/Amazon-MQ-Icon_32_Squid.67adbb153d731e7f68a9bcf2b24c4d00b128387f.svg" title="Amazon-MQ-Icon_32_Squid" alt="Amazon-MQ-Icon_32_Squid">
                                                </div>
                                            </figure>
                                            <a class="lb-txt-bold lb-txt-none lb-tiny-iblock lb-txt-16 lb-none-pad lb-none-v-margin lb-txt" href="/amazon-mq/?c=ai&amp;sec=srv" data-lb-popover-trigger="amazon-mq"> Amazon MQ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lb-border-p lb-border-bottom lb-none-v-margin lb-grid lb-row lb-row-max-large lb-snap lb-div" style="background-color:#FFFFFF;">
                        <div class="lb-col lb-tiny-24 lb-mid-4">
                            <div class="lb-txt-bold lb-txt-none lb-txt-black lb-txt-16 lb-tiny-v-margin lb-txt" style="margin-bottom:17px;">
                                No-code API Integration
                            </div>
                            <div class="lb-tiny-hide lb-small-hide lb-mid-show lb-none-pad lb-none-v-margin lb-box" style="height:20px;">
                            </div>
                        </div>
                        <div class="lb-col lb-tiny-24 lb-mid-20">
                            <div class="lb-none-pad lb-none-v-margin lb-xb-grid-wrap" style="background-color:#FFFFFF;">
                                <div class="lb-xb-grid lb-row-max-large lb-snap lb-div lb-gutter-tiny lb-vgutter-tiny lb-tiny-xb-2">
                                    <div class="lb-xbcol">
                                        <div class="lb-txt-normal lb-txt-none lb-txt-16 lb-none-pad lb-micro-v-margin lb-txt">
                                            Automate the flow of data between SaaS applications and AWS services at nearly any scale, without code.
                                        </div>
                                    </div>
                                    <div class="lb-xbcol">

                                        <div class="lb-tiny-iblock lb-none-pad lb-micro-v-margin lb-box lb-hover-p-feature-shadow">
                                            <figure class="lb-tiny-iblock lb-none-v-margin lb-svg">
                                                <div class="lb-none-pad">
                                                    <img src="//d1.awsstatic.com/product-marketing/sandstone/Amazon-AppFlow_Icon_32_Squid.15fbb470c2ea3fc4be0041cbd7803351e9ca060f.svg" title="Amazon-AppFlow_Icon_32_Squid" alt="Amazon-AppFlow_Icon_32_Squid">
                                                </div>
                                            </figure>
                                            <a class="lb-txt-bold lb-txt-none lb-tiny-iblock lb-txt-16 lb-none-pad lb-none-v-margin lb-txt" href="/appflow/?c=ai&amp;sec=srv" data-lb-popover-trigger="appflow"> Amazon AppFlow</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lb-border-p lb-border-bottom lb-none-v-margin lb-grid lb-row lb-row-max-large lb-snap lb-div" style="background-color:#FFFFFF;">
                        <div class="lb-col lb-tiny-24 lb-mid-4">
                            <div class="lb-txt-bold lb-txt-none lb-txt-black lb-txt-16 lb-tiny-v-margin lb-txt" style="margin-bottom:17px;">
                                Workflows
                            </div>
                            <div class="lb-tiny-hide lb-small-hide lb-mid-show lb-none-pad lb-none-v-margin lb-box" style="height:95px;">
                            </div>
                        </div>
                        <div class="lb-col lb-tiny-24 lb-mid-20">
                            <div class="lb-border-p lb-border-bottom lb-none-pad lb-none-v-margin lb-xb-grid-wrap" style="background-color:#FFFFFF;">
                                <div class="lb-xb-grid lb-row-max-large lb-snap lb-div lb-gutter-tiny lb-vgutter-tiny lb-tiny-xb-2">
                                    <div class="lb-xbcol">
                                        <div class="lb-txt-normal lb-txt-none lb-txt-16 lb-none-pad lb-micro-v-margin lb-txt">
                                            Coordinate multiple AWS services into serverless workflows so you can build and update apps quickly
                                        </div>
                                    </div>
                                    <div class="lb-xbcol">

                                        <div class="lb-tiny-iblock lb-none-pad lb-micro-v-margin lb-box lb-hover-p-feature-shadow">
                                            <figure class="lb-tiny-iblock lb-none-v-margin lb-svg">
                                                <div class="lb-none-pad">
                                                    <img src="//d1.awsstatic.com/webteam/category-pages/Application Integration/AWS-Step-Functions_Icon_32_Squid.6b3c6f91c40e9a8aa70884e5cc61a4329b97188c.svg" title="AWS-Step-Functions_Icon_32_Squid" alt="AWS-Step-Functions_Icon_32_Squid">
                                                </div>
                                            </figure>
                                            <a class="lb-txt-bold lb-txt-none lb-tiny-iblock lb-txt-16 lb-none-pad lb-none-v-margin lb-txt" href="/step-functions/?c=ai&amp;sec=srv" data-lb-popover-trigger="step-functions"> AWS Step Functions</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lb-none-pad lb-none-v-margin lb-xb-grid-wrap" style="background-color:#FFFFFF;">
                                <div class="lb-xb-grid lb-row-max-large lb-snap lb-div lb-gutter-tiny lb-vgutter-tiny lb-tiny-xb-2">
                                    <div class="lb-xbcol">
                                        <div class="lb-txt-normal lb-txt-none lb-txt-16 lb-none-pad lb-micro-v-margin lb-txt">
                                            Run Apache Airflow at scale without provisioning or managing infrastructure
                                        </div>
                                    </div>
                                    <div class="lb-xbcol">

                                        <div class="lb-tiny-iblock lb-none-pad lb-micro-v-margin lb-box lb-hover-p-feature-shadow">
                                            <figure class="lb-tiny-iblock lb-none-v-margin lb-svg">
                                                <div class="lb-none-pad">
                                                    <img src="//d1.awsstatic.com/product-marketing/Pinwheel/CN-Pinwheel_32.1752b31591c714acf34b7b2c3cd61430666d8103.svg" title="CN-Pinwheel_32" alt="CN-Pinwheel_32">
                                                </div>
                                            </figure>
                                            <a class="lb-txt-bold lb-txt-none lb-tiny-iblock lb-txt-16 lb-none-pad lb-none-v-margin lb-txt" href="/managed-workflows-for-apache-airflow/?c=ai&amp;sec=srv" data-lb-popover-trigger="mwaa"> Amazon Managed Workflows for Apache Airflow (MWAA)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-12 col-sm-12">
                    <h2 class="heading">What's trending in the shift to digital Transformation</h2>
                    <p class="paragraph">
                        The right talent, the right attitude, the right platform, the innovation business quickly deliver deployable IoT solutions across the business.
                    </p>
                    <p class="paragraph">
                        To keep up, the modern enterprise needs to innovate at mach speed. But innovation can’t get off the ground without digitalizing and connecting all systems – both in the cloud and on premises.
                    </p>
                    <p class="paragraph">
                        Blueciate working with Integration webMethods API, integration (iPaaS & on-prem) and microservices platform offers unified out-of-the-box connectivity that has been architected for the next generation of challenges in digital transformation.Our mission is to clear the roadblocks to your digital future.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <img src="/blueciate/img/application-integration-1.png" style="width: 80%">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-lg-6 text-center">
                    <p class="paragraph">
                        In an age of ever-faster change, you need a forward-thinking partner with a vision ... someone
                        who can help you take your powerful applications to 2050 and beyond. Look ahead to a future
                        where you can continue to make the most of that investment and the unique business logic built
                        into your core applications.
                    </p>
                    <p class="paragraph">
                        Blueciate We’re that partner, committed to helping you digitalize your legacy, fast and
                        risk-free. Together, let’s manage the generational change of developers, modernize your
                        applications to save costs, expand the reach of your core apps, and accelerate development
                        in an ultra-modern environment.  
                    </p>
                </div>
                <div class="col-lg-5 col-12 mt-lg-5 mx-lg-5">
                    <img src="/blueciate/img/application-integration-2.png" style="width: 80%">
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12 col-sm-12">
                <h2 class="heading">Business with Achieve Artificial Intelligence</h2>
                <p class="paragraph" style="max-width: 1200px; text-align: center; text-align-last: center">
                    AI is empowering employees and driving material performance improvements.
                    <br>
                    And it’s happening today. Business Results driven by primacy business challenges, Achieve AI is Ciate’s distinctive, all-inclusive AI service portfolio. Connecting your passion go further and achieve more, Achieve AI takes you to deliver AI at measure for thorough going control.
                </p>
                <p class="paragraph" style="max-width: 1200px; text-align: center; text-align-last: center">
                    <b>
                        Now, more than ever,
                        <br>
                        Software needs to work perfectly
                        <br>
                        Monitor, optimize, and scale every app, in any cloud.
                        <br>
                        AWS monitoring
                        <br>
                        Engineered for cloud native and hybrid environments — simplifies complexity using AI and automation.
                    </b>
                </p>
            </div>
        </div>
        </div>
        @include('layouts.blueciate.contact')
@endsection
