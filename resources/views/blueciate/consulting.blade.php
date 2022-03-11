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

        h2.banner-text {
            font-size: 68px;
            line-height: 75px
        }
        h2.banner-text .text-highlight {
            font-size: 90px;
            font-weight: 900;
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

            h2.banner-text {
                font-size: 2rem;
                line-height: 2rem;
            }
            h2.banner-text .text-highlight {
                font-size: 36px;
                line-height: 36px;
                font-weight: 600;
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

        .top-banner {
            background-image: url(/blueciate/img/consulting-3.jpg);
            height: 100%;
            padding-bottom: 70px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        p.banner-paragraph {
            color: #000;
            font-family: 'Open Sans', sans-serif;
            line-height: 25px;
            font-style: normal;
            font-weight: 300;
            width: 100%;
            font-size: 18px;
            margin-bottom: 0px;
        }
    </style>
@endpush
@section('content')
        <?php
        $images = ['ai-1.jpg', 'ai-2.jpg', 'ai-3.jpeg', 'ai-4.jpg'];
        ?>
{{--        @include('blueciate.image-slider')--}}



        <div class="container-fluid top-banner" id="top-banner">
            <div class="row" style="min-height: 400px">
                <div class="col">
                    <br><br><br>
                    <br><br><br>
                    <br><br><br>
                    <br>
                    <br>
                    <br>
                    <h2 class="heading banner-text text-center">SAP Technical Expertise </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row pt-5">
                <div class="col-12 col-lg-12 col-sm-12">
                    <p class="paragraph">
                        At Blueciate , we have
                        built a wide range of development technical expertise. From User
                        Experience frameworks such as FIORI and UI5 to backend applications development in ABAP
                        and cloud technologies on the SAP Business Technology Platform, our technical expertise is
                        comprehensive.
                    </p>
                    <p class="paragraph">

                        Our experts are well versed with Scrum and other Agile methodologies. This ensures a rapid,
                        communicative and iterative approach to delivering projects with constant user engagement.
                        We combine this technical expertise with our traditional strength in SAP S/4HANA application
                        backed by very strong real world business process experience. Our engineers bring excellent
                        communication and proactive management skills to help our customers realise their experience
                        driven transformation journeys.
                    </p>
                    <p class="paragraph">
                        We combine this technical expertise with our traditional strength in SAP S/4HANA application backed by very strong real world business process experience. Our engineers bring excellent communication and proactive management skills to help our customers realise their experience driven transformation journeys.
                    </p>
                    <p class="paragraph">
                        We have decades of experience managing and enabling ERP, BI, Mobile, and Cloud data to
                        analytic experience and to help users make better business decisions.  We have deep
                        expertise  in the SAP suite of analytical tools ranging from ECC, BW, BOBJ. BPC, Data
                        Warehouse Cloud (DWC),
                        Embedded Analytics, SAP Analytics Cloud (SAC), UI5, and Fiori.
                    </p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-lg-10 text-left">
                    <h2 class="heading">Fiori</h2>
                    <p class="paragraph">
                        With our core design thinking principles, our UI/UX portfolio of services cover everything from UX Strategy to UX Design, delivering human-centric solutions that puts the end-user at the core. We do this with the help of FIORI. FIORI provides the framework to simplify complex business processes, provide data-enhancing visualizations, and mobile-enable your entire team.
                    </p>
                </div>
                <div class="col-lg-2 col-12  my-lg-5 text-right">
                    <img src="/blueciate/img/erp-3.png" style="width: 80%">
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12 col-sm-12">
                <h2 class="heading">S/4 HANA</h2>
                <p class="paragraph">
                    For businesses targeting their next phase of growth, scaling up operations comes with its unique set of challenges. Choosing the correct digital solution can help businesses reduce inefficiencies and streamline cross-functional processes, both of which are crucial to prepare for this planned phase of growth.
                    <br>
                    With SAP S/4HANA, companies can measurably reduce such inefficiencies that arise due to legacy manual administrative processes and paper-trail-based workflows that companies never had a reliable digital alternative for. What that results in, is fewer errors and a faster time to completion resulting in accurate transactional data and reduced administrative overhead. Similarly, workflows that were traditionally performed manually can now be automated to include rules-based routing of transactions to the appropriate roles within the organization, enabling the digitization of the organization’s Levels of Approvals (LOA) policies.
                </p>
            </div>

                <div class="row">
                    <div class="col-12 col-lg-10 col-sm-12">
                        <h2 class="heading">BTP</h2>
                        <p class="paragraph">
                            Our focus on experience has led Mindset to be a pioneer in SAP’s BTP offerings, including technologies focused on intelligence, data and analytics, extension, and integration. BTP provides the platform for delivering remarkable user experience for business applications.
                        </p>
                    </div>
                    <div class="col-lg-2 col-12 col-sm-12 my-lg-5 text-right">
                        <img src="/blueciate/img/erp-4.png" style="width: 80%">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-12 col-sm-12 my-lg-5 text-left">
                        <img src="/blueciate/img/erp-5.png" style="width: 80%">
                    </div>
                    <div class="col-12 col-lg-8 col-sm-12">
                        <h2 class="heading">DevOps</h2>
                        <p class="paragraph">
                            In today’s high demand IT environments, using outdated methodologies, processes or practices restrain your organization’s ability to transform the user experience of technology in the enterprise. A DevOps-informed approach ensures your enterprise systems stay clean and robust while providing an industry-leading experience for your developers, enterprise technology team, users, and business stakeholders.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-8 col-sm-12">
                        <h2 class="heading">Analytics</h2>
                        <p class="paragraph">
                            Access and connectivity to Data, may it be through direct connectivity, data pipelines, virtual streams or via Hyper-Converged infrastructures for accurate information is critical for all businesses. Mindset focuses on the overall user experience where we enable key analytical capabilities to the appropriate business roles and personas within an organization.
                        </p>
                    </div>
                    <div class="col-lg-4 col-12 col-sm-12 my-lg-5 text-right">
                        <img src="/blueciate/img/erp-6.png" style="width: 80%">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-5 col-12 col-sm-12 my-lg-5 text-left">
                        <img src="/blueciate/img/erp-7.png" style="width: 80%">
                    </div>
                    <div class="col-12 col-lg-7 col-sm-12">
                        <h2 class="heading">SAP S/4HANA and Central Finance</h2>
                        <p class="paragraph">
                            SAP S/4HANA enables more speed and better insights in almost every area of finance. It’s also a platform for real-time analytics—with no more waiting for separate reporting systems, batch jobs, and long processing times. Yes, it can be expensive, and yes, there may be implementation risks, but defining a digital transformation roadmap upfront, driven by prioritized capabilities that drive value for the business, can help address both cost and risk in a positive way.
                        </p>
                    </div>
                </div>

        </div>
        </div>
        @include('layouts.blueciate.contact')
@endsection
