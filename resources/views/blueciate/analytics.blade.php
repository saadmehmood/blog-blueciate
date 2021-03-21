@extends('layouts.blueciate-2')
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
@section('content')

    <?php
    $images = ['analytics-1.jpg', 'analytics-2.jpg', 'analytics-3.jpg', 'analytics-4.jpg', 'analytics-5.jpeg'];
    ?>
    @include('blueciate.image-slider')

    <div class="container">
        <div class="row mt-5 mb-4">
            <div class="col-lg-6 order-lg-6">
                <video data-autoplay="" src="https://imgix.datadoghq.com/video/DD_Tracegraph_gif_smaller_02.mp4" preload="none" class="shadow-card-nohover w-100 lazyloaded" playsinline="" autoplay="" muted="" loop="" poster="https://imgix.datadoghq.com/img/tracesearch_00000.jpg?auto=format" data-poster="https://imgix.datadoghq.com/img/tracesearch_00000.jpg?auto=format"></video>
            </div>
            <div class="col-lg-6 order-lg-6">
                <h2 class="heading-top text-highlight">Resolve AWS performance issues faster</h2>
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Gain full visibility into your AWS application code performance with end-to-end tracing, profiling, and App Analytics</li>
                    <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Identify critical issues quickly with real-time service maps and alerts on code-level + service-level performance issues</li>
                    <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Test hypotheses in seconds by overlaying events onto time-synchronized graphs</li>
                </ul>
            </div>
        </div>
        <div class="row"><div class="col-12"><hr></div></div>
        <div class="row mb-4">
            <div class="col-lg-6">
                <h2 class="heading-top text-highlight">See inside any stack, at any scale, anywhere</h2>
                <p></p>
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Monitor your AWS services, databases, servers, containers, and servlets all in one place with Datadog's 400+ vendor-backed integrations</li>
                    <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Create custom, drag-and-drop dashboards within seconds</li>
                    <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Seamlessly navigate between infrastructure metrics, application traces, and relevant logs in a single platform</li>
                </ul>
                <p></p>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img loading="lazy" class="img-fluid shadow-card-nohover lazyloaded" data-srcset="https://imgix.datadoghq.com/img/ProductVideoDashboard_HD.jpg?auto=format&amp;w=652&amp;dpr=1 1x, https://imgix.datadoghq.com/img/ProductVideoDashboard_HD.jpg?auto=format&amp;w=652&amp;dpr=2 2x" alt="ProductVideoDashboard_HD.jpg" srcset="https://imgix.datadoghq.com/img/ProductVideoDashboard_HD.jpg?auto=format&amp;w=652&amp;dpr=1 1x, https://imgix.datadoghq.com/img/ProductVideoDashboard_HD.jpg?auto=format&amp;w=652&amp;dpr=2 2x">
            </div>
        </div>
        <div class="row"><div class="col-12"><hr></div></div>
        <div class="row mb-4">
            <div class="col-lg-6 order-lg-6">
                <video data-autoplay="" src="https://imgix.datadoghq.com/video/hostmapLP_2_comp.mp4" preload="none" class="shadow-card-nohover w-100 lazyloaded" playsinline="" autoplay="" muted="" loop="" poster="https://imgix.datadoghq.com/img/lpghostmap.png?auto=format" data-poster="https://imgix.datadoghq.com/img/lpghostmap.png?auto=format"></video>
            </div>
            <div class="col-lg-6 order-lg-6">
                <h2 class="heading-top text-highlight">Monitor your AWS infrastructure more effectively</h2>
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>View all your AWS and on-prem servers from a bird's-eye view</li>
                    <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Track ephemeral environments, such as Lambda functions and Docker containers, in real-time</li>
                    <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Use your existing AWS tags to slice data by host, role, device, and any other tag</li>
                    <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Automatically surface issues within your IT infrastructure using Watchdog</li>
                </ul>
            </div>
        </div>
        <div class="row"><div class="col-12"><hr></div></div>
        <div class="row mb-4">
            <div class="col-lg-6">
                <h2 class="heading-top text-highlight">Spend less time scaling and maintaining your tools</h2>
                <p></p>
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Save time scaling and maintaining your open source tools as complexity grows within your stack</li>
                    <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Diagnose root causes faster and see anomalous behavior across all your systems with one click using correlations</li>
                    <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Get started in seconds with auto-discovery for AWS services such as S3, EBS, ELB, and ElastiCache, among many others</li>
                </ul>
                <p></p>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <video data-autoplay="" src="https://imgix.datadoghq.com/video/dg/infrastructure.mp4" preload="none" class="shadow-card-nohover w-100 lazyloaded" playsinline="" autoplay="" muted="" loop="" poster="https://imgix.datadoghq.com/img/lpghostmap.png?auto=format" data-poster="https://imgix.datadoghq.com/img/lpghostmap.png?auto=format"></video>
            </div>
        </div>
        <div class="row"><div class="col-12"><hr></div></div>
        <div class="row">
            <div class="col-lg-6 order-lg-6">
                <video data-autoplay="" src="https://imgix.datadoghq.com/video/alerts-slack-AWS-compressed.mp4" preload="none" class="shadow-card-nohover w-100 lazyloaded" playsinline="" autoplay="" muted="" loop="" poster="https://imgix.datadoghq.com/img/alerts-slack-aws.jpg?auto=format" data-poster="https://imgix.datadoghq.com/img/alerts-slack-aws.jpg?auto=format"></video>
            </div>
            <div class="col-lg-6 order-lg-6">
                <h2 class="heading-top text-highlight">Receive AWS alerts only for the issues that matter and eliminate false-positives</h2>
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Set up alerts for anomalies and outliers that account for daily, weekly, and seasonal fluctuations</li>
                    <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Proactively prevent outages and errors by alerting on metric forecasts</li>
                    <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Create composite alerts, based on boolean logic, to reduce your time spent responding to spurious alerts</li>
                    <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Automatically detect unanticipated outliers, anomalies, and errors with Watchdog</li>
                </ul>
            </div>
        </div>
        <div class="row"><div class="col-12"><hr></div></div>
        <div class="row">
            <div class="col-lg-6">
                <h2 class="heading-top text-highlight">Track AWS with Datadog</h2>
                <p></p>
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Slice and dice data across metrics, traces, and logs with automated tagging integrated throughout the platform</li>
                    <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Collect more traces and high granularity metrics for 15 months or longer</li>
                    <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Ingest all your logs and only pay for the logs you index, with an accessible archive</li>
                    <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Start monitoring faster with Datadog's streamlined setup process; enable end-to-end AWS visibility in 1-click</li>
                </ul>
                <p></p>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <video data-autoplay="" src="https://imgix.datadoghq.com/video/timeboard-logs-flame_graph-comp.mp4" preload="none" class="shadow-card-nohover w-100 lazyloaded" playsinline="" autoplay="" muted="" loop="" poster="https://imgix.datadoghq.com/img/timeboard-logs-flame_graph.png?auto=format" data-poster="https://imgix.datadoghq.com/img/timeboard-logs-flame_graph.png?auto=format"></video>
            </div>
        </div>
        <div class="row"><div class="col-12"><hr></div></div>
    </div>
    <article id="services" class="hh-services">
      <div class="container">
        <section>
          <aside class="g lg-twelfths md-one-whole" id="first">
              <h3>Dashboards & Analytics</h3>
              <p style="max-width: 1200px;">
                  Blueciate with certified developers can facilitate the opportunity to build applications that integrate the business logic, control logic, and the database layer with unprecedented performance using best practices. At Blueciate we ensure the machine learning and predictive analytics has the ability to analyze any data type and easily integrate native machine learning algorithms, stream analytics and create text analytics, analysis, mining, search and more. With spatial data processing businesses can leverage geospatial data to create new applications and solutions and dashboard for CRM-XRM based solutions using...
              </p>
              <p>
              <ul>
                  <li>
                      Descriptive Analytics
                  </li>
                  <li>
                      Diagnostic Analytics
                  </li>
                  <li>
                      Predictive Analytics
                  </li>
                  <li>
                      Prescriptive Analytics
                  </li>
              </ul>
              </p>
              <p style="max-width: 1200px;">
                  For further details <a href="{{ route('contact-us') }}" class="buttonmore">Contuct us</a>.
              </p>
          </aside>
        </section>
      </div>
    </article>
    @include('layouts.blueciate.contact')
@endsection
