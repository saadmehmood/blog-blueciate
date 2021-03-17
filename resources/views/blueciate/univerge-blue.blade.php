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

    .work-flexibilty {
        padding-top: 80px;
    }

    .univerge-img {
        text-align: center;
    }
    .univerge-img img {
        width: 80%;
    }






</style>
@endpush
@extends('layouts.blueciate-2')
@section('content')
        <?php
        $images = ['bpm-7.png'];
        ?>
        @include('blueciate.image-slider')

        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-6 col-md-12 col-sm-12 cell already-visible come-in work-flexibilty">
                    <div class="column-wrapper" style="">
                        <h2 class="heading-top text-highlight">PROVIDING THE ULTIMATE<strong> WORK STYLE FLEXIBILTY</strong></h2>

                        <p class="paragraph" style="text-align-last: left;">UNIVERGE BLUE<sup>®</sup> CONNECT is an <strong>easy-to-use cloud-based communications platform</strong> that helps easily manage team communications and collaboration. One simple cloud app delivers a seamless, unified experience while reducing complexity and costs.</p>

                        <ul class="fa-ul">
                            <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span><strong>Fully integrated unified communications and collaboration solution</strong> in one seamless and intuitive experience.</li>
                            <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Allow your teams to <strong>work when they want and in the context they want</strong> (over any channel or device) to drive the specific outcomes you want.</li>
                        </ul>

                    </div>
                </div>
                <div class="col-6 col-lg-6 col-md-12 col-sm-12 cell already-visible come-in">
                    <div class="column-wrapper" style="">
                        <p class="univerge-img"><img style="width: 520px" alt="" src="https://s3.eu-central-1.amazonaws.com/z3r2zxopa4uuqpw5a4ju/univergeblue/images/v2/blue-platform.png"></p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-6 col-lg-6 col-md-12 col-sm-12 cell come-in">
                    <div class="column-wrapper" style="">
                        <p class="univerge-img">
                            <img alt="" src="https://s3.eu-central-1.amazonaws.com/z3r2zxopa4uuqpw5a4ju/univergeblue/images/v2/univerge-blue-meet-application.png">
                        </p>
                    </div>
                </div>

                <div class="col-6 col-lg-6 col-md-12 col-sm-12 cell already-visible come-in pt-lg-5">
                    <div class="column-wrapper" style="">
                        <h2 class="heading-top text-highlight">BRING YOUR <strong>TEAMS TOGETHER</strong></h2>

                        <p class="paragraph" style="text-align-last: left;">With one-click video meetings, stay connected no matter where you are in the world. Go from sharing ideas to delivering work, all in one place.</p>

                        <ul class="fa-ul">
                            <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Start a video meeting right from a messaging thread.</li>
                            <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span><strong>Share your screen</strong> so everyone's on the same page.</li>
                            <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Manage the conversation flow with <strong>in-meeting chat</strong>.</li>
                        </ul>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6 col-lg-6 col-md-12 col-sm-12 cell already-visible come-in pt-lg-5">
                    <div class="column-wrapper" style="">
                        <h2 class="heading-top text-highlight">UNIVERGE BLUE<br>
                            <strong>CONNECT DESKTOP APP</strong></h2>

                        <p class="paragraph" style="text-align-last: left;">UNIVERGE BLUE<sup>®</sup> Desktop App brings essential collaboration tools together, making teamwork easier than ever.</p>

                        <ul class="fa-ul">
                            <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>See who is available, send team chats and text messages, place and receive calls, share screens, start video calls, and manage files.</li>
                            <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span><strong>All from ONE application</strong>. Available as a downloadable app for PC or Mac®.</li>
                            <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Integrate tightly with leading business applications with <strong><a href="/cloud-services/extend/">UNIVERGE BLUE EXTEND</a></strong> to streamline workflows and maximize employee efficiency.</li>
                        </ul>

                    </div>
                </div>

                <div class="col-6 col-lg-6 col-md-12 col-sm-12 cell come-in">
                    <div class="column-wrapper" style="">
                        <p class="univerge-img">
                            <img alt="" src="https://s3.eu-central-1.amazonaws.com/z3r2zxopa4uuqpw5a4ju/univergeblue/images/v2/blue-connect-desktop-app.png">
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-6 col-lg-6 col-md-12 col-sm-12 cell come-in">
                    <div class="column-wrapper" style="">
                        <div class="univerge-img">
                            <img alt="" src="https://s3.eu-central-1.amazonaws.com/z3r2zxopa4uuqpw5a4ju/univergeblue/images/v2/blue-connect-mobile.png">
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-6 col-md-12 col-sm-12 cell come-in pt-lg-5">
                    <div class="column-wrapper" style="">
                        <h2 class="heading-top text-highlight">UNIVERGE BLUE <strong>CONNECT MOBILE APP</strong></h2>

                        <p class="paragraph" style="text-align-last: left;">Do business anywhere you go with the UNIVERGE BLUE<sup>®</sup> Mobile App. It allows you to connect to team members, customers, and vendors easier than ever before.</p>

                        <ul class="fa-ul">
                            <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Reach with a <strong>single business identity</strong> for HD VoIP calling and SMS.</li>
                            <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span><strong>Route calls</strong> with advanced call controls, like call flip, switch, transfer, and park.</li>
                            <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Seamlessly <strong>make and receive calls via Wi‑Fi or cellular data</strong> without ever dropping a call.</li>
                        </ul>

                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-6 col-lg-6 col-md-12 col-sm-12 cell come-in">
                    <div class="column-wrapper" style="">
                        <h2 class="heading-top text-highlight">FILE SHARING <strong>&amp; SECURITY</strong></h2>

                        <p class="paragraph" style="text-align-last: left;">Improve team collaboration, streamline workflows, and increase decision making speed with UNIVERGE BLUE<sup>®</sup> SHARE file sharing and backup. With direct access to the application from any device, teams can review recent files and backup documents quickly, no matter their location.</p>

                        <ul class="fa-ul">
                            <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Real-time backup of all files, mobile photos, and videos from any device.</li>
                            <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>View the most current version of files and co-edit documents in real time from any device.</li>
                            <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Integrates with Windows file server, Exchange® Email, Active Directory, Outlook®, Office®, and Office 365®.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-6 col-lg-6 col-md-12 col-sm-12 cell come-in">
                    <div class="column-wrapper" style="">
                        <p class="univerge-img"><img alt="" src="https://s3.eu-central-1.amazonaws.com/z3r2zxopa4uuqpw5a4ju/univergeblue/images/v2/blue-connect-desktop-files.png"></p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-6 col-lg-6 col-md-12 col-sm-12 cell come-in">
                    <div class="column-wrapper" style="">
                        <p class="univerge-img"><img alt="" src="https://s3.eu-central-1.amazonaws.com/z3r2zxopa4uuqpw5a4ju/univergeblue/images/v2/enage/NEC%20Univerge%20Blue%20ENGAGE%20apps.jpg"></p>
                    </div>
                </div>

                <div class="col-6 col-lg-6 col-md-12 col-sm-12 cell come-in">
                    <div class="column-wrapper" style="">
                        <h2 class="heading-top text-highlight">UNIVERGE BLUE<br>
                            <strong>ENGAGE</strong></h2>

                        <p class="paragraph" style="text-align-last: left;">A highly customizable cloud-based contact center solution</p>

                        <ul class="fa-ul">
                            <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span><strong>Improves the handling and oversight of communications through</strong> a range of agent and supervisor contact center services.</li>
                            <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span><strong>Highly flexible solution </strong>including easy deployment for remote / home workers.</li>
                            <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span><strong>Scalable</strong> from the smallest call-centric teams to large omni-channel environments.</li>
                            <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span><strong>Streamlines incoming inquiries</strong> from multiple channels using smart routing and delivers context to agents for optimal customer experience.</li>
                            <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span><strong>Enhance delivery and support</strong> of business by integrating admin and operational processes with UNIVERGE BLUE EXTEND.&nbsp;&nbsp;</li>
                        </ul>

                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-6 col-lg-6 col-md-12 col-sm-12 cell come-in">
                    <div class="column-wrapper" style="">
                        <h2 class="heading-top text-highlight">BACKUP &amp; <strong>RECOVER</strong></h2>

                        <p class="paragraph" style="text-align-last: left;">Data protection in the cloud, on-premises, and&nbsp;anywhere in between. UNIVERGE BLUE®&nbsp;BACKUP &amp; RECOVER offers a broad set of fully integrated services to manage and protect critical proprietary information and data and is built on NEC’s award-winning server, storage, and software-defined networking technology.</p>

                        <ul class="fa-ul">
                            <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span><strong>Choice of dynamic delivery models</strong>, ranging from fully managed backup service and cloud storage by NEC to self-managed with NEC providing the on-prem and/or off-prem cloud storage</li>
                            <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span><strong>Secure and optimized backup and disaster recovery architecture</strong> built on NEC’s own award winning storage infrastructure, including deduplication, compression, and data verification</li>
                            <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span><strong>Centralized control and protection of company data</strong> which offers total control of all corporate backup data ranging from bare metal virtualized servers, to applications, databases files, and endpoints</li>
                            <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span><strong>Service and Support</strong> with a fully staffed Network Operations Center (NOC) to manage and support entire backup process as well as restoration assistance delivered 7x24x365</li>
                        </ul>

                    </div>
                </div>

                <div class="small-12 medium-6 cell come-in">
                    <div class="column-wrapper" style=""><p class="univerge-img"><img alt="" src="https://s3.eu-central-1.amazonaws.com/z3r2zxopa4uuqpw5a4ju/univergeblue/images/v2/blue-backup-recover.png"></p>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="bpm-content">
                <div class="row">

                </div>
            </div>
        </section>

<br>
        <!--BLOCK SECTION-->
        <section class="six_box_sec services-blocks-sm" id="six_box_sec">
            <div class="">
                <div class="row no-gutters">
                    <div class="col-12 col-lg-4 col-sm-6 pr-1 pl-1 services-block-four">
                        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
                            <div class="image">
                                <img src="/blueciate/img/1.apps-2558373__480.webp" alt="">
                                <div class="overlay-box overlay-box-green">
                                    <div class="content">
                                        <div class="icon-box">
                                            <span class="icon flaticon-statistics-1"></span>
                                        </div>
                                        <h4 style="color: white;">AuraQuantic Business Process Automation</h4>
                                    </div>
                                </div>

                                <div class="overlay-box-green-two overlay-box-two">
                                    <div class="overlay-inner-two">
                                        <div class="content">
                                            <div class="icon-box">
                                                <span class="icon flaticon-statistics-1"></span>
                                            </div>
                                            <h5 class="mb-1">AuraQuantic is a Zero-Code iBPMS (Intelligent Business Process Management Suite) platform</h5>
                                            <span style="font-size: 10px;"> that allows you to visually-create and digitize every step of all kind of business processes in one easy-to-use Digital Platform. BPM is the consolidated and unstoppable trend that is changing forever the way to manage operations in organizations, making them much more flexible, highly automated and extremely powerful. | Weaknesses are brought to light and the most relevant activities are strengthened. AuraQuantic increases productivity by 60%-85%.</span>
                                            <br>
                                            <a class="read-more" style="padding: 8px 15px; font-size: 8px" href="https://www.auraquantic.com/bpm-digital-platform/process-automation">Learn More<span
                                                        class="fa fa-angle-double-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-sm-6 pr-1 pl-1 services-block-four">
                        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
                            <div class="image">
                                <img src="/blueciate/img/5.CLOUD.webp" alt="">
                                <div class="overlay-box  overlay-box-green">
                                    <div class="content">
                                        <div class="icon-box">
                                            <span class="icon flaticon-statistics-1"></span>
                                        </div>
                                        <h4 style="color: white;">AuraQuantic Finance</h4>
                                    </div>
                                </div>

                                <div class="overlay-box-two overlay-box-green-two">
                                    <div class="overlay-inner-two">
                                        <div class="content">
                                            <div class="icon-box">
                                                <span class="icon flaticon-statistics-1"></span>
                                            </div>
                                            <h5 class="mb-1">AuraQuantic Finance is a Zero-Code iBPMS platform</h5>
                                            <span style="font-size: 10px;">AuraQuantic Finance platform enables managers to check the status of each process and, based on the established indicators, make well-informed decisions to achieve optimal company development. AuraQuantic BPM Finance is a Zero-Code iBPMS (Intelligent Business Process Management Suite) Allows you to visually create and digitize every step of all kind of finance processes in one easy-to-use Digital Platform.</span>
                                            <br>
                                            <a class="read-more" style="padding: 8px 15px; font-size: 8px" href="https://www.auraquantic.com/bpm-digital-platform/process-automation">Learn More<span
                                                        class="fa fa-angle-double-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-sm-6 pr-1 pl-1 services-block-four">
                        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
                            <div class="image">
                                <img src="/blueciate/img/4.business-3528035__480.webp" alt="">
                                <div class="overlay-box overlay-box-green">
                                    <div class="content">
                                        <div class="icon-box">
                                            <span class="icon flaticon-statistics-1"></span>
                                        </div>
                                        <h4 style="color: white;">AuraQuantic Insurance</h4>
                                    </div>
                                </div>

                                <div class="overlay-box-two overlay-box-green-two">
                                    <div class="overlay-inner-two">
                                        <div class="content">
                                            <div class="icon-box">
                                                <span class="icon flaticon-statistics-1"></span>
                                            </div>
                                            <h5 class="mb-1">AuraQuantic Insurance enables managers to check the status of each process.</h5>
                                            <span style="font-size: 10px;">AuraQuantic BPM Insurance enables Management to check the status of each process and, based on the established indicators, make well-informed decisions to achieve optimal company development. AuraQuantic BPM Insurance is a Zero-Code iBPMS (Intelligent Business Process Management Suite) Allows you to visually create and digitize every step of all kind of insurance processes in one easy-to-use Digital Platform.</span>
                                            <br>
                                            <a class="read-more" style="padding: 8px 15px; font-size: 8px" href="https://www.auraquantic.com/bpm-digital-platform/process-automation">Learn More<span
                                                        class="fa fa-angle-double-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters mt-2">
                    <div class="col-12 col-lg-4 col-sm-6 pr-1 pl-1 services-block-four">
                        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
                            <div class="image">
                                <img src="/blueciate/img/3.bulletin-board-3233643__480.webp" alt="">
                                <div class="overlay-box overlay-box-green">
                                    <div class="content">
                                        <div class="icon-box">
                                            <span class="icon flaticon-statistics-1"></span>
                                        </div>
                                        <h4 style="color: white;">AuraQuantic Manufacturing</h4>
                                    </div>
                                </div>

                                <div class="overlay-box-two overlay-box-green-two">
                                    <div class="overlay-inner-two">
                                        <div class="content">
                                            <div class="icon-box">
                                                <span class="icon flaticon-statistics-1"></span>
                                            </div>
                                            <h5 class="mb-1">AuraQuantic Manufacturing</h5>
                                            <span style="font-size: 10px;">AuraQuantic Manufacturing platform is a Zero-Code iBPMS (Intelligent Business Process Management Suite) that allows you to visually create and digitize every step of all kind of processes in one easy-to-use Digital Platform compatible with existing systems (ERP, CRM, Legacy apps, etc.). AuraQuantic BPM Manufacturing can implement even the most complex processes without any additional programming.</span>
                                            <br>
                                            <a class="read-more" style="padding: 8px 15px; font-size: 8px" href="https://www.auraquantic.com/bpm-digital-platform/process-automation">Learn More<span
                                                        class="fa fa-angle-double-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-sm-6 pr-1 pl-1 services-block-four">
                        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
                            <div class="image">
                                <img src="/blueciate/img/8.hand-3108158__480.webp" alt="">
                                <div class="overlay-box overlay-box-green">
                                    <div class="content">
                                        <div class="icon-box">
                                            <span class="icon flaticon-statistics-1"></span>
                                        </div>
                                        <h4 style="color: white;">AuraQuantic Energy - Oil and Gas</h4>
                                    </div>
                                </div>

                                <div class="overlay-box-two overlay-box-green-two">
                                    <div class="overlay-inner-two">
                                        <div class="content">
                                            <div class="icon-box">
                                                <span class="icon flaticon-statistics-1"></span>
                                            </div>
                                            <h5 class="mb-1">AuraQuantic Oil and Gas (O&G)</h5>
                                            <span style="font-size: 10px;">AuraQuantic Oil and Gas is a Zero-Code iBPMS (Intelligent Business Process Management Suite) platform that allows you to visually create and digitize every step of all kind of processes in one easy-to-use Digital Platform compatible with existing systems (ERP, CRM, Legacy apps, etc.). AuraQuantic BPM Oil and Gas can implement even the most complex processes without any additional programming. If you are on an accelerated expansion scenario you required the implementation of a system to automate Process for the complete Oil and Gas operational cycle including: CAPEX Project Control, Opex Approval flows.</span>
                                            <br>
                                            <a class="read-more" style="padding: 8px 15px; font-size: 8px" href="https://www.auraquantic.com/bpm-digital-platform/process-automation">Learn More<span
                                                        class="fa fa-angle-double-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-sm-6 pr-1 pl-1 services-block-four">
                        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
                            <div class="image">
                                <img src="/blueciate/img/2.back-view-woman-making-video-260nw-1683359032.webp" alt="">
                                <div class="overlay-box overlay-box-green">
                                    <div class="content">
                                        <div class="icon-box">
                                            <span class="icon flaticon-statistics-1"></span>
                                        </div>
                                        <h4 style="color: white;">AuraQuantic Compliance</h4>
                                    </div>
                                </div>

                                <div class="overlay-box-two overlay-box-green-two">
                                    <div class="overlay-inner-two">
                                        <div class="content">
                                            <div class="icon-box">
                                                <span class="icon flaticon-statistics-1"></span>
                                            </div>
                                            <h5 class="mb-1">AuraQuantic GDPR Governance</h5>
                                            <span style="font-size: 10px;">“AuraQuantic GDPR Accelerator” / “AuraQuantic GDPR Governance Tool” ensures GDPR business procedures compliance. • Accountability • All Lawful Bases • Validate Lawful Bases • Renew Lawful Bases • Automatic Messaging • Processing and Purpose Assistant • Data Retention Periods • Security Measures • IT System Control • Compulsory Impact Assessment • Proof of No Assessment • List of Risks Included • Risk Mitigation Measures • Guaranteed Execution of Measures • Report Templates • Data Subject Rights • Incident mailbox • Incident Management Process • Security Breach Notification • Sanction Attenuation • Communication Log with Data Processors • Complete Management of the Data Processor.</span>
                                            <br>
                                            <a class="read-more" style="padding: 8px 15px; font-size: 8px" href="https://www.auraquantic.com/bpm-digital-platform/process-automation">Learn More<span
                                                        class="fa fa-angle-double-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <div>
                            <iframe class="video-iframe" src="" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-0">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <iframe class="video-iframe" src="https://www.youtube.com/embed/PMeNAFSKkpQ?&showinfo=0&rel=0&modestbranding=1&cc_load_policy=1&enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="carousel-item">
                                    <iframe class="video-iframe" src="https://www.youtube.com/embed/0qh7ZrJJjOg?&showinfo=0&rel=0&modestbranding=1&cc_load_policy=1&enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="carousel-item">
                                    <iframe class="video-iframe" src="https://www.youtube.com/embed/ld6E_PJXg_k?&showinfo=0&rel=0&modestbranding=1&cc_load_policy=1&enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen title="What is BPM / BPMS / iBPMS (Business Process Management)?"></iframe>
                                </div>
                                <div class="carousel-item">
                                    <iframe class="video-iframe" class="embedded-video" title="Process Automation in 3 Steps" src="https://www.youtube.com/embed/TZLe74T0pcU?&showinfo=0&rel=0&modestbranding=1&cc_load_policy=1&enablejsapi=1" frameborder="0"></iframe>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.blueciate.contact')
        @endsection
@push('scripts')
<link id="gs-css" type="text/css" rel="stylesheet" href="/blueciate/index_files/style(1).css">
<script src="/blueciate/index_files/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">

</script>

<!--jQuery library-->
<script src="/blueciate/index_files/jquery.min.js"></script>

<!--Popper JS -->
<script src="/blueciate/index_files/popper.min.js"></script>

<!--Latest compiled JavaScript-->
<script src="/blueciate/index_files/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
<!-- jQuery -->
<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
<!--<script src="../js/jquery.js"></script>-->
<!--<script src="../js/slick.min.js"></script>-->
<!--<script src="../js/share.min.js"></script>-->
<!--<script src="../js/classie.js"></script>-->
<!--<script src="../js/elements.js"></script>-->
<!--<script src="../js/jquery.animate-enhanced.min.js"></script>-->
<!--<script src="../js/jquery.superslides.min.js"></script>-->
<!--<script src="../js/jquery.easing.js"></script>-->
<!--<script src="../js/hammer.min.js"></script>-->
<!--<script src="../js/scriptmap.js"></script>-->
<!--<script src="../js/gmap.js"></script>-->
<!--<script src="../js/validate.min.js"></script>-->
<!--<script src="../js/jquery.mmenu.min.all.js"></script>-->
<!--<script src="../js/theater.min.js"></script>-->
<!--<script src="../js/jquery.superslides.min.js"></script>-->
<!--<script src="../js/jquery.flexslider-min.js"></script>-->
<!--<script src="../js/imagelightbox.min.js"></script>-->

<!-- use this url for more information about share button plugin -->
<!-- https://github.com/carrot/share-button/wiki/Configuration-Options -->
<!--<script src="../js/scripts.js"></script>-->

<script>
    //FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
    function autoPlayYouTubeModal(){
        var trigger = $("body").find('[data-toggle="modal"]');
        trigger.click(function() {
            var theModal = $(this).data( "target" ),
                videoSRC = $(this).attr( "data-theVideo" ),
                videoSRCauto = videoSRC+"?autoplay=1" ;
            $(theModal+' iframe').attr('src', videoSRCauto);
            $(theModal+' button.close').click(function () {
                $(theModal+' iframe').attr('src', videoSRC);
            });
        });
    }

    $(document).ready(function(){
        autoPlayYouTubeModal();
        // $('#webinar').modal();
        // if (Cookies.get('webinar-feb') !== 'submitted') {
        // }
    });
</script>
@endpush
