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
        $images = ['bpm-7.png'];
        ?>
        @include('blueciate.image-slider')

        <article id="services" class="hh-services">
            <div class="container">
                </section>
                <section class="row mx-0 ">
                    <div class="col-md-12 px-0">
                        <h3 class="heading-top"><span class="text-highlight">Blue Ciate Digital Transform</span></h3>
                    </div>
                    <div class="col-md-2">
                        <i class="fas fa-dot-circle"></i> <span class="mr-2">BPM</span>
                    </div>
                    <div class="col-md-2">
                        <i class="fas fa-dot-circle"></i> <span class="mr-2">Low Code</span>
                    </div>
                    <div class="col-md-2">
                        <i class="fas fa-dot-circle"></i> <span class="mr-2">iBPMS</span>
                    </div>
                    <div class="col-md-6 px-0">
                    </div>
                    <div class="col-md-2">
                        <i class="fas fa-dot-circle"></i> <span class="mr-2">Marketplace</span>
                    </div>
                    <div class="col-md-2">
                        <i class="fas fa-dot-circle"></i> <span class="mr-2">Analysis</span>
                    </div>
                    <div class="col-md-2">
                        <i class="fas fa-dot-circle"></i> <span class="mr-2">Cloud</span>
                    </div>
                    <div class="col-md-6 px-0">
                    </div>
                    <div class="col-md-6 px-0">

                        <h3 class="heading-top"><span class="text-highlight">Blue Ciate Business Process Automation – BPM</span></h3>
                        <p class="paragraph" style="text-align-last: left;">
                            <span class="heading-small">LOW-CODE BPM TO UNIFY YOUR DATA in your Digital Platform.</span> <br>
                            <b>Unify your data into a single interface with zero-code integrations.</b>
                            Get the flexibility you need to bring data together from across your
                            organization into a single interface, so action can be taken when and
                            where it’s needed. You control your data. No migration, no lock-ins, and
                            no transaction or storage fees.
                            <br>
                            <br>
                            Easily integrate with enterprise systems such as Salesforce, SAP,
                            Oracle, DocuSign, Blue Prism, UiPath and more.
                            Integrate systems with zero-code, low-code, and industry standard
                            connectors or build your own with custom APIs.
                            Remove data silos and orchestrate your data to create a seamless
                            experience for your users.
                            Use RPA in a workflow to integrate systems without APIs and leverage
                            your IT investments.
                            <br>
                            <br>
                            Blueciate Business Automation & Digital Transformation, is the technology-enabled automation of complex business processes. It can streamline a business for simplicity, achieve digital transformation, increase service quality, improve service delivery or contain costs.

                        </p>
                    </div>
                    <div  class="col-md-6 px-0 mt-lg-5 px-3">
                        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
                            <div class="image">
                                <img itemprop="thumbnailUrl" src="https://store-images.s-microsoft.com/image/apps.46859.171428a8-79a7-4e0a-acf0-ff6521e2c98b.5e09026c-692e-4bfb-86e3-4e7be17e85e1.cd3c7387-0dac-4e5c-b52a-320bb2d8a16d" alt="What is BPM / BPMS / iBPMS (Business Process Management)? thumbnail" role="button" aria-label="What is BPM / BPMS / iBPMS (Business Process Management)? video">
                                <!--                                <img src="https://store-images.s-microsoft.com/image/apps.16581.171428a8-79a7-4e0a-acf0-ff6521e2c98b.5e09026c-692e-4bfb-86e3-4e7be17e85e1.8046dac4-7c29-4a79-8755-5ba3518f0f9a" alt="" data-toggle="modal" data-target="#exampleModalCenter" data-target="#carouselExampleIndicators" data-slide-to="1">-->
                            </div>
                            <div class="video-overlay">
                                <img src="/blueciate/img/videoOverlay.png" data-toggle="modal" data-target="#videoModal" data-theVideo="https://www.youtube.com/embed/ld6E_PJXg_k">
                            </div>
                        </div>
                    </div>
                </section>
                <section class="row mx-0 " style="background-color: #F7F7F7;">
                    <div class="col-md-12 px-0">
                        <h2 class="heading" style="text-align: center;">
                            Low-code Application Platform  <span style="color: #6dab3c;">(LCAP)</span>
                        </h2>
                        <p class="paragraph">
                            AuraQuantic is a business software platform designed for business users (citizen developers) to build their business applications fast and easily.
                        </p>
                    </div>
                </section>
                <section class="row mx-0 ">
                    <div class="col-md-12 px-0">
                        <h2 class="heading">
                            How to Create your Business Applications faster?
                        </h2>
                        <p class="paragraph">
                            AuraQuantic is the most <span style="color: #1785b0; font-weight: 600;">complete low-code platform</span> for building the enterprise solutions that drive Digital Transformation.
                        </p>
                        <p class="paragraph">
                                <video class="low-code-video" autoplay="" loop="" muted=""> <source src="/blueciate/videos/Application-explained.mp4" type="video/mp4"></video>
                        </p>
                    </div>
                </section>
                <section class="row mx-0 dashboard" style="background-color: #F7F7F7;">
                    <div class="col-md-12 px-0">
                        <h2 class="heading">
                            Dashboards
                        </h2>
                        <p class="paragraph" style="max-width: 1200px;">AuraQuantic <span style="color: #1785b0; font-weight: 600;">Remote Work</span>&nbsp;
                            is your new virtual office! See an overview from your remote workplace, making it easier for you and your team to reach your goals and boost performance!
                        </p>
                    </div>

                        <div class="col-md-4 text-center">
                            <img src="/blueciate/img/ic-features-04.png" class="icon-holder">
                            <br>
                            <span class="mt-lg-5 icon-title">Real-time dashboards</span>
                            <p class="paragraph">Give different access to each of your employees depending on the information they need to see.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="/blueciate/img/ic-features-03.png" class="icon-holder">
                            <br>
                            <span class="mt-10 icon-title">Instant notifications</span>
                            <p class="paragraph">View your project status in real-time and keep track of what’s most important.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="/blueciate/img/ic-features-05.png" class="icon-holder">
                            <br>
                            <span class="mt-10 icon-title">Real-time reports</span>
                            <p class="paragraph">Have full control of data and get a better overview of your employees’ performance.</p>
                        </div>
                </section>
                <section class="row mx-0 section-5">
                    <div class="col-md-12 px-0">
                        <h2 class="heading">
                            For any user, any department, and anywhere!
                        </h2>
                        <p class="paragraph">
                            The solution includes essential features to maintain and even increase productivity throughout the entire business ecosystem in a <span style="color: #1785b0; font-weight: 600;">remote work</span> environment. In addition, it comes with six predefined processes to enable users to immediately begin their daily work:
                        </p>
                    </div>

                    <div class="col-md-4 text-center">
                        <div class="row mb-2">
                            <div class="icon-holder mr-3">
                                <img src="/blueciate/img/proceso-06.png">
                            </div>
                            <p class="icon-title pt-2"> Purchase process</p>
                        </div>
                        <div class="row mb-2">
                            <div class="icon-holder mr-3">
                                <img src="/blueciate/img/proceso-08.png">
                            </div>
                            <p class="icon-title pt-2"> 	Dynamic workflow</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="row mb-2">
                            <div class="icon-holder mr-3">
                                <img src="/blueciate/img/proceso-09.png">
                            </div>
                            <p class="icon-title pt-2"> 	Activity recording</p>
                        </div>
                        <div class="row">
                            <div class="icon-holder mr-3">
                                <img src="/img/proceso-10.png">
                            </div>
                            <p class="icon-title"> Administrative permissions</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="row">
                            <div class="icon-holder mr-3">
                                <img src="/blueciate/img/proceso-07.png">
                            </div>
                            <p class="icon-title pt-2"> Document management</p>
                        </div>
                        <div class="row">
                            <div class="icon-holder mr-3">
                                <img src="/blueciate/img/proceso-11.png">
                            </div>
                            <p class="icon-title pt-2"> Technical assistance</p>
                        </div>
                    </div>
                </section>
                <section class="row mx-0 " style="background-color: #F7F7F7;">
                    <div class="col-md-12 px-0">
                        <h2 class="heading">
                            How to automate your business and see progress in real time?
                        </h2>
                        <p class="paragraph">
                            Create zero-code automations for your business operations. Minimize the chances of human error and focus on the tasks that make a real impact.
                        </p>
                    </div>

                    <div class="col-md-4 text-center">
                        <div class="row mb-2">
                            <div class="icon-holder mr-2 pt-2">
                                <i class="fa fa-check-circle fa-3"></i>
                            </div>
                            <p class="icon-title pt-3"> 	Intranet/Extranet</p>
                        </div>
                        <div class="row mb-2">
                            <div class="icon-holder mr-2 pt-2">
                                <i class="fa fa-check-circle fa-3"></i>
                            </div>
                            <p class="icon-title pt-3"> 	Collaboration platform</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="row mb-2">
                            <div class="icon-holder mr-2 pt-2">
                                <i class="fa fa-check-circle fa-3"></i>
                            </div>
                            <p class="icon-title pt-3"> 	Document management</p>
                        </div>
                        <div class="row">
                            <div class="icon-holder mr-2 pt-2">
                                <i class="fa fa-check-circle fa-3"></i>
                            </div>
                            <p class="icon-title pt-3"> Dashboard</p>
                        </div>
                    </div>
                </section>
                <section class="row mx-0 ">
                    <div class="col-md-12 px-0 mb-3">
                        <h2 class="heading">
                            Automate your business in just 3 steps
                        </h2>
                        <p class="paragraph">
                            To create a process, you need to create a <strong>model</strong> with the necessary information. This model is developed in three phases: <strong>draw</strong> the diagram, <strong>define</strong> the attributes of the objects that appear in the diagram and <strong>execute</strong> the process
                        </p>
                    </div>
                    <div class="col-md-2"><p>&nbsp;</p></div>
                    <div class="col-md-2 text-center">
                        <div class="row mb-2 step-box">
                            <div class="icon-holder" >
                                <img src="/blueciate/img/pa-02.png">
                            </div>
                            <div class="icon-title">
                                <span>STEP 1: Draw</span>
                            </div>
                                <p style="text-align: justify;" class="step-description">Diagram the activities and the connecting lines to set the process flow, regardless of its complexity.</p>
                        </div>
                    </div>
                    <div class="col-md-1"><p>&nbsp;</p></div>

                    <div class="col-md-2 text-center">
                        <div class="row mb-2 step-box">
                            <div class="icon-holder">
                                <img src="/blueciate/img/pa-01.png">
                            </div>
                            <div class="icon-title">
                                <span>STEP 2: Define</span>
                            </div>
                                <p style="text-align: justify;" class="step-description">Input fields for each activity and for the users who should receive tasks and notifications.</p>
                        </div>
                    </div>
                    <div class="col-md-1"><p>&nbsp;</p></div>

                    <div class="col-md-2 text-center">
                        <div class="row mb-2 step-box">
                            <div class="icon-holder">
                                <img src="/blueciate/img/pa-03.png">
                            </div>
                            <div  class="icon-title">
                                <span>STEP 3: Execute</span>
                            </div>
                                <p style="text-align: justify;" class="step-description">That’s it!<br> Every time the process is initiated, it will follow the defined flow.</p>
                        </div>
                    </div>
                </section>
                <section class="row mx-0 section-7">
                    <div class="col-md-12 px-0">
                        <p style="text-align: center;">
                            <img class="alignnone size-full wp-image-48939 icon-img" style="width: 60px; height: 60px;" src="/blueciate/img/icono-fase-44.png" alt="">
                        </p>
                        <h2 class="heading" style="text-align: center;">
                            Step 1: Draw the diagram
                        </h2>
                        <p class="paragraph">
                            To create a process, you need to create a <strong>model</strong> with the necessary information. This model is developed in three phases: <strong>draw</strong> the diagram, <strong>define</strong> the attributes of the objects that appear in the diagram and <strong>execute</strong> the process
                        </p>
                    </div>

                    <div class="col-md-5 text-center">
                        <div class="row mb-2 mx-0">
                                <img src="/blueciate/img/laptop-modeler-mockup-v2.png">
                                <img class="top-on-img" src="/blueciate/img/auraportal-modeler-animated-640x360px.gif">
                        </div>
                    </div>


                    <div class="col-md-2 text-center">
                        <p>&nbsp;</p>
                    </div>

                    <div class="col-md-5 text-center px-0">
                        <div class="row mb-2 mx-0">
                            <div class="wpb_wrapper">
                                <p style="text-align: justify;" class="paragraph-small mb-0">
                                    This is done using a diagram creation tool which lets you drag and drop
                                    <strong>Objects</strong>
                                    (Tasks, Events and Gateways) and their
                                    <strong>Connecting Lines</strong>
                                    to establish the operational flow of the process.
                                </p>
                                <p style="text-align: justify;" class="paragraph-small">
                                    There are many diagramming tools on the market, but none are comparable in effectiveness or ease of use with
                                    <strong>AuraQuantic ‘Modeler’</strong>,
                                    developed with the latest technology and based on the universal standard, BPMN 2.0, improved to allow the automatic generation of processes which are ready to run without any additional programming.
                                </p>
                            </div>
                        </div>
                        <div class="fa-1x mx-auto mt-4" style="text-align: left;">
                            <a href="BPMS-Ready" class="buttonmore">Download</a>
                        </div>
                    </div>
                </section>
                <section class="row mx-0 " style="background-color: #F7F7F7;">
                    <div class="col-md-12 px-0">
                        <p style="text-align: center;">
                            <img class="alignnone size-full wp-image-48939" style="width: 60px; height: 60px;" src="/blueciate/img/icono-fase-43.png" alt="" width="60" height="60"></p>
                        <h2 class="heading" style="text-align: center;">
                            Step 2: Define the object attributes
                        </h2>
                    </div>

                    <div class="col-md-5 text-center">
                        <div class="row mb-2 mx-0">
                            <img width="709" height="681" src="/blueciate/img/conditions.png" class="vc_single_image-img attachment-full" alt="" srcset="/blueciate/img/conditions.png 709w, /blueciate/img/conditions-300x288.png 300w, /blueciate/img/conditions-700x672.png 700w" sizes="(max-width: 709px) 100vw, 709px">
                        </div>
                    </div>


                    <div class="col-md-2 text-center">
                        <p>&nbsp;</p>
                    </div>

                    <div class="col-md-5 text-center px-0">
                        <div class="row mb-2 mx-0 mt-150">
                            <div class="wpb_wrapper">
                                <p style="text-align: justify;" class="paragraph-small">
                                    In <strong>AuraQuantic</strong>, you will have direct access to input and modify the attributes of the objects that appear in the diagram without using any code. Together, these objects define the complete process.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="row mx-0 " style="background-color: #F7F7F7;">
                    <div class="col-md-12 px-0">
                        <p style="text-align: center;">
                            <img class="alignnone size-full wp-image-48939" style="width: 60px; height: 60px;" src="/blueciate/img/icono-fase-42.png" alt="" width="60" height="60"></p>
                        <h2 class="heading" style="text-align: center;">
                            Step 3: Execute the process
                        </h2>
                    </div>

                    <div class="col-md-12 text-center">
                        <img style="width: 70%;" width="998" height="506" src="/blueciate/img/Execution-Ejecucion.png" class="vc_single_image-img attachment-full" alt="" srcset="/blueciate/img/Execution-Ejecucion.png 998w, /blueciate/img/Execution-Ejecucion-300x152.png 300w, /blueciate/img/Execution-Ejecucion-768x389.png 768w, /blueciate/img/Execution-Ejecucion-700x355.png 700w" sizes="(max-width: 998px) 100vw, 998px">
                    </div>

                    <div class="col-md-12 text-center px-0">
                        <div class="row mb-2 mx-0 mt-lg-4">
                            <div class="wpb_wrapper">
                                <p style="text-align: justify;" class="paragraph-small">
                                AuraQuantic is the only BPM that can really execute what you have drawn with the modeler without any additional programming. Many BPMs claim no-code execution, but in reality, AuraQuantic is the only software that offers this for even the most complex diagrams.
                                    The execution of each process is traced and controlled in runtime.
                                    In addition, all the data related to each process and groups of processes, such as times, costs, etc., are saved in the monitoring system to provide important information for decision making and statistical records.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 text-center">
                        <div class="row mb-2 mx-0">
                            <img width="625" height="560" src="/blueciate/img/monitoring4.png" class="vc_single_image-img attachment-full" alt="" srcset="/blueciate/img/monitoring4.png 625w, /blueciate/img/monitoring4-300x269.png 300w" sizes="(max-width: 625px) 100vw, 625px">
                        </div>
                    </div>


                    <div class="col-md-1 text-center">
                        <p>&nbsp;</p>
                    </div>

                    <div class="col-md-6 text-center px-0 mt-lg-5">
                        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
                            <div class="image">
                                <img itemprop="thumbnailUrl" src="https://store-images.s-microsoft.com/image/apps.16581.171428a8-79a7-4e0a-acf0-ff6521e2c98b.5e09026c-692e-4bfb-86e3-4e7be17e85e1.8046dac4-7c29-4a79-8755-5ba3518f0f9a" alt="AuraQuantic iBPMS - Zero-Code Application Development Platform thumbnail" role="button" aria-label="AuraQuantic iBPMS - Zero-Code Application Development Platform video">
                                <!--                                <img src="https://store-images.s-microsoft.com/image/apps.16581.171428a8-79a7-4e0a-acf0-ff6521e2c98b.5e09026c-692e-4bfb-86e3-4e7be17e85e1.8046dac4-7c29-4a79-8755-5ba3518f0f9a" alt="" data-toggle="modal" data-target="#exampleModalCenter" data-target="#carouselExampleIndicators" data-slide-to="1">-->
                            </div>
                            <div class="video-overlay">
                                <img src="/blueciate/img/videoOverlay.png" data-toggle="modal" data-target="#videoModal" data-theVideo="https://www.youtube.com/embed/PMeNAFSKkpQ">
                            </div>
                        </div>
                    </div>
                    <div class="fa-1x mx-auto mt-4" style="text-align: left;">
                        <a href="BPMS-Ready" class="buttonmore" data-toggle="modal" data-target="#videoModal" data-theVideo="https://www.youtube.com/embed/PMeNAFSKkpQ">Watch Video</a>
                    </div>
                </section>
                <section class="row mx-0 " style="background-color: #F7F7F7;">
                    <div class="col-md-12 px-0">
                        <h2 class="heading" style="text-align: center;">
                            User Interface
                        </h2>
                        <p class="paragraph">
                            Adapt to the faster, smarter and connected digital world. Delight users with attractive portals across multiple devices and respond immediately to their ever-changing needs with agility and zero-code changes on the fly.
                        </p>
                    </div>
                </section>
                <section class="row mx-0 ">
                    <div class="col-md-12 px-0">
                        <h2 class="heading" style="text-align: center;">
                            Business Rules engine
                        </h2>
                        <p class="paragraph">
                            Simple to manage and powerful in execution with on-the-fly power of performance and modification, the AuraQuantic Business Rules apply all company regulations and procedures, as well as process-related information which can be seamlessly integrated into the running processes.
                            <br>
                            There are four types of Business Rules differentiated by the way they perform and deliver results:
                        </p>
                    </div>
                    <div class="col-md-6 px-0">
                    <div class="col-md-12 text-center">
                        <div class="row mb-0">
                            <div class="icon-holder mr-3">
                                <img src="/blueciate/img/icons-data-07-1.png">
                            </div>
                            <p class="icon-title pt-2 mb-0" style="font-weight: 500;"> Assignment</p>
                        </div>
                        <div class="row mb-2" style="margin-left: 35px">
                            <p class="paragraph-small">
                                Store variables with assigned values.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="row mb-0">
                            <div class="icon-holder mr-3">
                                <img src="/blueciate/img/icons-data-08-08-1.png">
                            </div>
                            <p class="icon-title pt-2 mb-0" style="font-weight: 500;"> Textual</p>
                        </div>
                        <div class="row mb-2" style="margin-left: 35px">
                            <p class="paragraph-small">
                                Contain rich text with unlimited storage or use.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="row mb-0">
                            <div class="icon-holder mr-3">
                                <img src="/blueciate/img/icons-data-09-1.png">
                            </div>
                            <p class="icon-title pt-2 mb-0" style="font-weight: 500;"> Inference</p>
                        </div>
                        <div class="row mb-2" style="margin-left: 35px">
                            <p class="paragraph-small" style="text-align: left;">
                                Provide results that comply with an unlimited number<br> of variables and combinations.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="row mb-0">
                            <div class="icon-holder mr-3">
                                <img src="/blueciate/img/icons-data-10-1.png">
                            </div>
                            <p class="icon-title pt-2 mb-0" style="font-weight: 500;"> Calculation</p>
                        </div>
                        <div class="row mb-2" style="margin-left: 35px">
                            <p class="paragraph-small">
                                Store simple or complex equations for any variable.
                            </p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6 mt-lg-3">
                        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
                            <div class="image">
                                <img itemprop="thumbnailUrl" src="https://store-images.s-microsoft.com/image/apps.22866.171428a8-79a7-4e0a-acf0-ff6521e2c98b.5e09026c-692e-4bfb-86e3-4e7be17e85e1.9851c582-6fab-4409-84f0-211585aeb9ac" alt="AuraQuantic Architecture (Software &amp; Hardware) thumbnail" role="button" aria-label="AuraQuantic Architecture (Software &amp; Hardware) video">
                                <!--                                <img src="https://store-images.s-microsoft.com/image/apps.16581.171428a8-79a7-4e0a-acf0-ff6521e2c98b.5e09026c-692e-4bfb-86e3-4e7be17e85e1.8046dac4-7c29-4a79-8755-5ba3518f0f9a" alt="" data-toggle="modal" data-target="#exampleModalCenter" data-target="#carouselExampleIndicators" data-slide-to="1">-->
                            </div>
                            <div class="video-overlay">
                                <img src="/blueciate/img/videoOverlay.png" data-toggle="modal" data-target="#videoModal" data-theVideo="https://www.youtube.com/embed/0qh7ZrJJjOg">
                            </div>
                        </div>
                    </div>
                    <div class="fa-1x mx-auto mt-4" style="text-align: left;">
                        <a href="BPMS-Ready" class="buttonmore" data-toggle="modal" data-target="#videoModal" data-theVideo="https://www.youtube.com/embed/0qh7ZrJJjOg">Watch Video</a>
                    </div>
                </section>
                <section class="row mx-0 " style="background-color: #F7F7F7;">
                    <div class="col-md-12 px-0">
                        <h2 class="heading" style="text-align: center;">
                            Azure Artificial Intelligence
                        </h2>
                        <p class="paragraph">
                            The creation of systems that learn, adapt and potentially act autonomously has become a challenge for technological developments for the coming years.
                        </p>
                    </div>
                    <div class="col-md-12 px-0">
                        <h2  class="heading" style="text-align: center;">
                            Artificial Intelligence + Zero-code
                        </h2>
                        <h2 class="heading" style="color: #1785b0; font-weight: 500; text-align: center;">
                            Create smart applications with AuraQuantic and Azure AI
                        </h2>
                        <p class="paragraph">
                            With Artificial Intelligence, machines can analyze images, understand spoken language, interact in a natural way and make predictions using data. Create the next generation of applications using Artificial Intelligence functionalities for any business scenario:
                        </p>
                    </div>
                </section>
                <section class="row mx-0 section-13">
                    <div class="col-md-12 px-0">
                        <h2 class="heading" style="text-align: center;">
                            What is AuraQuantic <span style="color: #6dab3c;">Remote Work</span>?
                        </h2>
                        <p class="paragraph" style="max-width: 1200px;">AuraQuantic <span style="color: #1785b0; font-weight: 600;">Remote Work</span>&nbsp;is the most intuitive, powerful and affordable system to transform your current company operations into efficient remote work solutions. The platform includes essential features to maintain and even increase productivity throughout the entire business ecosystem, with task automation and traceability ensuring complete control of operations, which is key to a successful remote work strategy.</p>
                    </div>

                    <div class="col-md-4 text-center">
                        <img src="/blueciate/img/icon-power.png" class="icon-img">
                        <br>
                        <span class="mt-lg-5 icon-title">Powerful</span>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="/blueciate/img/elementos-cabecera-04.png" class="icon-img">
                        <br>
                        <span class="mt-10 icon-title">Intuitive</span>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="/blueciate/img/icon-economico-02.png" class="icon-img">
                        <br>
                        <span class="mt-10 icon-title">Affordable</span>
                    </div>
                </section>
                <section class="row mx-0 " style="background-color: #F7F7F7;">
                    <div class="col-md-6 px-0 mt-100">
                        <div class="fa-1x mx-auto mt-2" style="text-align: center;">Accelerate Your Digital Transformation WhitePaper.</div>
                        <div class="fa-1x mx-auto mt-4" style="text-align: center;">
                            <a href="BPMS-Ready" class="buttonmore">Download</a>
                        </div>
                    </div>
                    <div class="col-md-6 px-0">
                        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
                            <div class="image">
                                <img itemprop="thumbnailUrl" src="https://store-images.s-microsoft.com/image/apps.24439.171428a8-79a7-4e0a-acf0-ff6521e2c98b.5e09026c-692e-4bfb-86e3-4e7be17e85e1.8feb3aad-e718-4904-afb2-f9f0a3ad1943" alt="Process Automation in 3 Steps thumbnail" role="button" aria-label="Process Automation in 3 Steps video">
                            </div>
                            <div class="video-overlay">
                                <img src="/blueciate/img/videoOverlay.png" data-toggle="modal" data-target="#videoModal" data-theVideo="https://www.youtube.com/embed/TZLe74T0pcU">
                            </div>
                        </div>
                    </div>
                    <div class="fa-1x mx-auto mt-4" style="text-align: left;">
                        <a href="BPMS-Ready" class="buttonmore" data-toggle="modal" data-target="#videoModal" data-theVideo="https://www.youtube.com/embed/TZLe74T0pcU">Watch Video</a>
                    </div>

                </section>
            </div>
        </article>
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
