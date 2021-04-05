@push('styles')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body {

            font-family: 'Open Sans', sans-serif;
            background: rgb(21,105,224);
            background: -moz-linear-gradient(90deg, rgba(21,105,224,1) 0%, rgba(0,176,80,1) 100%);
            background: -webkit-linear-gradient(90deg, rgba(21,105,224,1) 0%, rgba(0,176,80,1) 100%);
            background: linear-gradient(90deg, rgba(21,105,224,1) 0%, rgba(0,176,80,1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#1569e0",endColorstr="#00b050",GradientType=1);
        }
        .block {margin-bottom: 0}
        .modal {
            z-index: 1051;
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
        img {
             width: 100%;
             max-width: 100%;
             height: auto;
             vertical-align: middle;
         }
        #content #main-nav {
            margin-bottom: 0px;
        }
        .container-fluid, .container {
            background-color: white;
        }

        article#services.hh-services section {
            padding: 1.3em 4.3125em 1.3em 4.3125em;
        }

        h2.heading {
            color: #0070c0;
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

        .box-shadow-bottom {
            padding: 1.5rem 1.3rem 1rem;
            margin-bottom: 16px;
            border-radius: 10px;
            box-shadow: -0.1px 4px 24.1px 4.9px rgb(0 0 0 / 15%);
            background-color: #fff;
            transition: visibility .5s ease,opacity .5s ease;
            /*-webkit-box-shadow: 5px 10px 13px -14px #000000, 5px 5px 15px 5px rgba(0, 0, 0, 0);*/
            /*box-shadow: 5px 10px 13px -14px #000000, 5px 5px 15px 5px rgba(0, 0, 0, 0);*/
            /*border: #0070c0 solid;*/
        }

        .font-size-48 {
            font-size: 48px;
        }

        .font-size-36 {
            font-size: 36px;
        }

        .font-size-28 {
            font-size: 28px;
        }

        .font-size-24 {
            font-size: 24px;
        }

        .heading-top {
            font-size: 26px;
        }

        .heading-small {
            color: #0070c0;
            font-weight: bold;
            font-size: 20px
        }

        p.paragraph {
            color: #707577;
            font-family: 'Open Sans', sans-serif;
            line-height: 25px;
            font-style: normal;
            font-weight: 300;
            width: 100%;
            font-size: 18px;
            margin-bottom: 0px;
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

        .text-highlight {
            color: #00b050;
        }

        p.paragraph-small {
            color: #707577;
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
            line-height: 22px;
            font-style: normal;
            font-weight: 300;
        }

        .box {
            border: 1px solid;
            border-color: #0e0b04;
            height: 100%;
        }

        .mt-150 {
            margin-top: 150px;
        }

        .mt-100 {
            margin-top: 100px;
        }

        .btn-blue {
            -webkit-appearance: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            display: inline-block;
            background: #0070c0;
            color: #fff;
            border: none;
            font-size: 1.25em;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: .225em;
            padding: 1em 1.25em;
        }

        .btn-blue:hover {
            background: #00b050;
        }

        .bottom-blueciate-font {
            font-size: 72px;
        }
        .bottom-text-font {
            font-size: 36px;
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

            h2.heading, .heading-top {
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
                width: 30px;
                height: 30px;
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
                width: 30px;
                height: 30px;
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
            .bottom-blueciate-font {
                font-size: 36px;
            }
            .bottom-text-font {
                font-size: 24px;
            }
        }

        .bg-white {
            background: white;
        }

        .btn:focus, .btn-steps:focus {
            outline: none;
        }

        .btn-check:checked + .btn-secondary, .btn-secondary:hover, .btn-secondary:focus {
            color: #fff;
            background-color: #00b050;
            border-color: #00b050;
        }

        .btn-secondary {
            color: #0070c0;
            background-color: #fff;
            border-color: #0070c0;
        }

        .btn-check:checked + .btn-team-size {
            color: #fff;
            background-color: #00b050;
            border-color: #00b050;
        }

        .btn-team-size {
            width: 100%;
            color: #0070c0;
            background-color: #fff;
            border-color: #0070c0;
            border-radius: 0;
        }

        .btn-check:checked + .btn-steps, .btn-steps:hover {
            color: #fff;
            background-color: #00b050;
            border-color: #00b050;
        }

        .btn-steps {
            color: #0070c0;
            font-weight: 600;
            background-color: white;
            border-color: #0070c0;
            border-radius: 0;
        }

        .btn {
            letter-spacing: normal;
            margin-bottom: 10px;
            text-transform: none;
        }

        .top-banner {
            background-image: url(/blueciate/img/trm_bg.jpg);
            height: 100%;
            padding-bottom: 70px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .steps {
            font-size: 18px;
        }
    </style>
@endpush
@extends('layouts.blueciate-3')
@section('content')
    <?php
    $images = ['remote-work.png'];
    ?>
    {{--        @include('blueciate.image-slider')--}}
    <div class="container-fluid top-banner" id="top-banner">
        <div class="row" style="min-height: 400px">
            <div class="col">
                <p class="banner-paragraph">helping companies to be ready for your Digital Transformation step & what is next
                    …..</p>
                <br>
                <br>
                <br>
                <h2 class="heading banner-text"><b>Blueciate</b> teamwork <br><span
                        class="text-highlight">#RemoteWork</span><br></h2>
                <h2 class="heading ">(your next step towards digital transformation…)</h2>
                <p class="banner-paragraph">
                    (software engineering digital transformation platform team, to Connect, Engage, Communicate, Collaborate & Orchestrate
                    your business).</p>
            </div>
        </div>
    </div>

    <div class="container">
        <form method="post" id="upload-image-form" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12 px-0">
                    <h2 class="font-size-48 heading text-center pt-3 pt-lg-5"  style="color: black;">Let's build your remote engineering team in 4 easy steps</h2>

                </div>
            </div>
            {{--            <div class="row mt-lg-4">--}}
            {{--                <div class="col-md-12 px-0">--}}
            {{--                    <h2 class="font-size-48 heading text-center">How? <br><span style="color: grey; font-size: 30px">in</span> <span class="text-highlight font-size-36"> <br>4 easy steps.</span></h2>--}}

            {{--                </div>--}}
            {{--            </div>--}}
            <br>
            <br>
            @csrf
            <div class="row mt-4 mt-lg-4" data-aos="fade-up" data-aos-duration="1500">
                <div class="col-12">
                    <h2 class="heading text-center"><span class="steps">Step 1:</span> I want</h2>
                </div>
                <br>
                <br>
                <div class="col-12 pr-0 bg-white pl-lg-2 py-lg-3 text-center">
                    <p class="paragraph text-center" style="font-size: 15px;">(I wanted to have my application development, production support, network support team member)</p>

                    <input type="radio" class="btn-check" name="work_type" id="steps-ad" autocomplete="off"
                           value="Application Development" checked>
                    <label class="btn btn-steps" for="steps-ad">Application Development</label>
                    <input type="radio" class="btn-check" name="work_type" id="steps-ps" autocomplete="off"
                           value="Production Suport">
                    <label class="btn btn-steps" for="steps-ps">Production Suport</label>
                    <input type="radio" class="btn-check" name="work_type" id="steps-ns" autocomplete="off"
                           value="Networking Support">
                    <label class="btn btn-steps" for="steps-ns">Networking Support</label>

                </div>
            </div>

            {{--            <div class="row mt-lg-4">--}}
            {{--                <div class="col-12 px-0">--}}
            {{--                    <h2 class="heading mb-0">Lets get started and Build your Dream Team.</h2>--}}
            {{--                    <p class="paragraph text-left">(select your Blueciate Remote Development Team.)</p>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            <div class="row mt-4 mt-lg-4" data-aos="fade-up" data-aos-duration="1500" id="ad-step2">
                <div class="col-12 pr-0 bg-white pl-lg-2 py-lg-3">
                    <h2 class="heading mb-0" style="line-height: 24px"><span class="steps">Step 2:</span> Define Scope of Work?</h2>
                    <p class="paragraph text-left mb-3" style="margin-left: 68px;font-size: 15px;">(select your Blueciate Remote Development Team.)</p>

                    <?php
                    $options = [
                        'Low code',
                        'Artifictal Intellegence(AI)',
                        'Software Integration',
                        'Data Engineering',
                        'DevOps & Infrastructure',
                        'Machine Learning',
                        'Mobile Development',
                        'Web Development',
                        'RPA Automation',
                        'iBPMS',
                        'Need Help'
                    ];
                    $count = 1;
                    foreach ($options as $option){
                    ?>

                    <input type="checkbox" class="btn-check ad-options-2" name="options[]" id="option{{ $count }}"
                           value="{{ $option }}" autocomplete="off">
                    <label class="btn btn-secondary" for="option{{ $count }}">{{ $option }}</label>

                    <?php
                    $count++;
                    } ?>
                </div>
            </div>
            <div class="row mt-4 mt-lg-4" data-aos="fade-up" data-aos-duration="1500" style="display: none;" id="ps-step2">
                <div class="col-12 pr-0 bg-white pl-lg-2 py-lg-3">
                    <h2 class="heading mb-0" style="line-height: 24px"><span class="steps">Step 2:</span> Define Scope of Work?</h2>
                    <p class="paragraph text-left mb-3" style="margin-left: 68px;font-size: 15px;">(select your Blueciate Remote Development Team.)</p>

                    <?php
                    $options = [
                        'System Support',
                        'ERP-Application Support',
                        'Database Support',
                        'Technical Support Engineer'
                    ];
                    $count = 1;
                    foreach ($options as $option){
                    ?>

                    <input type="checkbox" class="btn-check ps-options-2" name="options[]" id="ps-option{{ $count }}"
                           value="{{ $option }}" autocomplete="off">
                    <label class="btn btn-secondary" for="ps-option{{ $count }}">{{ $option }}</label>

                    <?php
                    $count++;
                    } ?>
                </div>
            </div>
            <div class="row mt-4 mt-lg-4" data-aos="fade-up" data-aos-duration="1500" style="display: none;" id="ns-step2">
                <div class="col-12 pr-0 bg-white pl-lg-2 py-lg-3">
                    <h2 class="heading mb-0" style="line-height: 24px"><span class="steps">Step 2:</span> Define Scope of Work?</h2>
                    <p class="paragraph text-left mb-3" style="margin-left: 68px;font-size: 15px;">(select your Blueciate Remote Development Team.)</p>

                    <?php
                    $options = [
                        'Data Center Suport',
                        'Network Design Engineer',
                        'Networking Support Engg',
                        'Engineer - Hardware',
                        'Mainframe Support Analyst'
                    ];
                    $count = 1;
                    foreach ($options as $option){
                    ?>

                    <input type="checkbox" class="btn-check ns-options-2" name="options[]" id="ns-option{{ $count }}"
                           value="{{ $option }}" autocomplete="off">
                    <label class="btn btn-secondary" for="ns-option{{ $count }}">{{ $option }}</label>

                    <?php
                    $count++;
                    } ?>
                </div>
            </div>

            {{--            <div class="row mt-lg-4">--}}
            {{--                <div class="col-12 px-0">--}}
            {{--                    <h2 class="heading mb-0">Select the right skill set & Platform?</h2>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            <div class="row mt-4 mt-lg-4" data-aos="fade-up" data-aos-duration="1500" id="ad-step3">
                <div class="col-12 pr-0 bg-white pl-lg-2 py-lg-3">
                    <h2 class="heading mb-0" style="line-height: 24px"><span  class="steps">Step 3:</span> Select platform & skill-set?</h2>
                    <p class="paragraph text-left mb-3" style="margin-left: 68px;font-size: 15px;">(select the right skill-set) </p>

                    <?php
                    $skills = [
                        'Ruby On Rails',
                        'React Native',
                        'Objective C',
                        'Angular Js',
                        'Javascript',
                        'Typescript',
                        'Bootstrap',
                        'React Js',
                        'Html/Css',
                        'Node Js',
                        'Android',
                        'Angular',
                        'My Sql',
                        'Python',
                        'Swift',
                        'AWS',
                        'Php',
                        'C#',
                        'Sql',
                        'Java',
                        'Need Help'
                    ];
                    $count = 1;
                    foreach ($skills as $skill){
                    ?>

                    <input type="checkbox" class="btn-check ad-skills" name="skills[]" id="ns-skill{{ $count }}" value="{{ $skill }}"
                           autocomplete="off">
                    <label class="btn btn-secondary" for="ns-skill{{ $count }}">{{ $skill }}</label>

                    <?php
                    $count++;
                    } ?>
                </div>
            </div>

            <div class="row mt-4 mt-lg-4" data-aos="fade-up" data-aos-duration="1500" style="display: none" id="ps-step3">
                <div class="col-12 pr-0 bg-white pl-lg-2 py-lg-3">
                    <h2 class="heading mb-0" style="line-height: 24px"><span  class="steps">Step 3:</span> Select platform & skill-set?</h2>
                    <p class="paragraph text-left mb-3" style="margin-left: 68px;font-size: 15px;">(select the right skill-set) </p>

                    <?php
                    $skills = [
                        'Windows',
                        'linux',
                        'Oracle',
                        'SAP',
                        'HANA',
                        'SQL Server',
                        'DB2',
                        'ETC',
                        'SQL Developer',
                        'SAP BASIS',
                        'SAP SECURITY'
                    ];
                    $count = 1;
                    foreach ($skills as $skill){
                    ?>

                    <input type="checkbox" class="btn-check ns-skills" name="skills[]" id="ps-skill{{ $count }}" value="{{ $skill }}"
                           autocomplete="off">
                    <label class="btn btn-secondary" for="ps-skill{{ $count }}">{{ $skill }}</label>

                    <?php
                    $count++;
                    } ?>
                </div>
            </div>

            <div class="row mt-4 mt-lg-4" data-aos="fade-up" data-aos-duration="1500" style="display: none" id="ns-step3">
                <div class="col-12 pr-0 bg-white pl-lg-2 py-lg-3">
                    <h2 class="heading mb-0" style="line-height: 24px"><span  class="steps">Step 3:</span> Select platform & skill-set?</h2>
                    <p class="paragraph text-left mb-3" style="margin-left: 68px;font-size: 15px;">(select the right skill-set) </p>

                    <?php
                    $skills = [
                        'Network or Security Engineer',
                        'Optical Network Engineer',
                        'Network and Systems Engineer',
                        'Data Center Engineer',
                        'Cisco Network Engineer',
                        'Cyber Security Analyst',
                        'Network Analyst',
                        'Junior Network Engineer'
                    ];
                    $count = 1;
                    foreach ($skills as $skill){
                    ?>

                    <input type="checkbox" class="btn-check ps-skills" name="skills[]" id="skill{{ $count }}" value="{{ $skill }}"
                           autocomplete="off">
                    <label class="btn btn-secondary" for="skill{{ $count }}">{{ $skill }}</label>

                    <?php
                    $count++;
                    } ?>
                </div>
            </div>

            {{--            <div class="row mt-lg-4">--}}
            {{--                <div class="col-12 px-0">--}}
            {{--                    <h2 class="heading mb-0">Select your Right Team  Size?</h2>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            <div class="row mt-4 mt-lg-4" data-aos="fade-up" data-aos-duration="1500">
                <div class="col-12 pr-0 bg-white pl-lg-2 py-lg-3">
                    <h2 class="heading mb-0" style="line-height: 24px"><span  class="steps">Step 4:</span> Select team size?</h2>
                    <p class="paragraph text-left mb-3" style="margin-left: 68px;font-size: 15px;">(Team size required 1-5)</p>

                    <div class="row px-2">
                        <div class="col-12 pr-0 bg-white pl-lg-2 py-lg-3">
                        <?php
                        $teamSize = ['One (1)','Two (2)', 'Three (3)', 'Four (4)', 'Five (5)', '5+', 'Not sure'];
                        $count = 1;
                        foreach ($teamSize as $team){
                        ?>
{{--                        <div class="col px-0">--}}
                            <input type="radio" class="btn-check" name="team_size" id="team{{ $count }}"
                                   value="{{ $team }}" autocomplete="off">
                            <label class="btn btn-secondary" for="team{{ $count }}">{{ $team }}</label>
{{--                        </div>--}}

                        <?php
                        $count++;
                        } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4 mt-lg-4 bg-white justify-content-center">

                <div class="col-md-11 px-3 box-shadow-bottom">
                    <h2 class="heading">Tell us about <span class="text-highlight">Yourself</span></h2>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-2">
                                <label for="full_name" class="form-label">Full name</label>
                                <input type="text" name="full_name" class="form-control" id="full_name"
                                       placeholder="Full name" required>
                            </div>
                            <div class="mb-2">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email"
                                       placeholder="name@example.com" required>
                            </div>
                            <div class="mb-2">
                                <label for="Phone" class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" id="Phone" placeholder="Phone"
                                       required>
                            </div>
                            <div class="mb-2">
                                <label for="company_name" class="form-label">Company name</label>
                                <input type="text" name="company_name" class="form-control" id="company_name"
                                       placeholder="Company name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-2">
                                <label for="message" class="form-label">Your Message</label>
                                <textarea class="form-control" id="message" name="message" rows="4"
                                          style="height: 272px" placeholder="Type your message"></textarea>
                            </div>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary" id="submit-button" type="submit">Send</button>
                            <div class="spinner-grow text-primary mx-3" style="display: none" id="loader" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
        <div id="thank_box" style="display: none;">
            <div class="row text-center" data-aos="fade-up" data-aos-duration="1500">
                <div class="col-md-12 col-sm-12 px-3 mb-4">
                    <h2 class="font-size-36 heading mt-lg-5 text-center"><span class="text-highlight"><span style="font-size: 80px; font-weight: 900;">Thank You</span><br> <span style="color: black">we will get back to you shortly.</span></span></h2>

                    <a class="btn btn-primary" id="back-btn" href="#"> Back</a>
                </div>
            </div>

{{--            <div class="row py-5" data-aos="fade-up" data-aos-duration="1500">--}}
{{--                <div class="col-md-6 px-0" style="position: relative; margin: 0 auto;">--}}
{{--                    <div class="inner-box">--}}
{{--                        <div class="image">--}}
{{--                            <img itemprop="thumbnailUrl" src="/blueciate/img/auraportal-video-thumb.png" alt="Process Automation in 3 Steps thumbnail" role="button" aria-label="Process Automation in 3 Steps video">--}}
{{--                        </div>--}}
{{--                        <div class="video-overlay">--}}
{{--                            <img src="/blueciate/img/videoOverlay.png" data-toggle="modal" data-target="#videoModal" data-theVideo="https://www.youtube.com/embed/muUopRjuKgk">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row py-5" data-aos="fade-up" data-aos-duration="1500">--}}
{{--                <div class="col-md-6 px-0" style="position: relative; margin: 0 auto;">--}}
{{--                    <div class="inner-box">--}}
{{--                        <div class="image">--}}
{{--                            <img itemprop="thumbnailUrl" src="/blueciate/img/blue-connect-desktop.png" alt="Process Automation in 3 Steps thumbnail" role="button" aria-label="Process Automation in 3 Steps video">--}}
{{--                        </div>--}}
{{--                        <div class="video-overlay">--}}
{{--                            <img src="/blueciate/img/videoOverlay.png" data-toggle="modal" data-target="#videoModal" data-theVideo="https://www.youtube.com/embed/bVuD0mDhho0">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>


            <div class="row mt-lg-4 mt-4 justify-content-center">
                <div class="col-md-12 col-sm-12 pb-3">
                    <h2 class="heading" style="font-size: 22px; color: black;">In Collaboration with technology partners:</h2>
                </div>
                <div class="col-11 box-shadow-bottom">
                    <div class="row">
                <div class="col-md-2 col-sm-12">
                    <img src="/blueciate/img/univergblue.png" style="width:132px">
                </div>
                <div class="col-md-7 col-sm-12">
                    <h2 class="heading-small">Connect, Collaborate, Orchestrate</h2>
                    <p class="paragraph">
                        <span style="color: #0070c0;">NEC UNIVERGE BLUE CONNECT, MEET, SHARE, ENGAGE</span> an easy-to-use cloud-based communications
                        platform that helps employees to be more productive and collaborative.
                        Take your business to the next level with
                        fully integrated unified communications.
                        It includes a full-featured phone system combined with chat, web/video
                        conferencing, and file sync, share, and backup capabilities.
                        <a href="{{ route('univerge-blue') }}">more...</a>
                    </p>
                </div>
                <div class="col-md-2 px-0" style="position: relative; margin: 0 auto;">
                    <div class="inner-box">
                        <div class="image">
                            <img itemprop="thumbnailUrl" src="/blueciate/img/blue-connect-desktop.png" alt="Process Automation in 3 Steps thumbnail" role="button" aria-label="Process Automation in 3 Steps video">
                        </div>
                        <div class="video-overlay">
                            <img src="/blueciate/img/videoOverlay.png" data-toggle="modal" data-target="#videoModal" data-theVideo="https://www.youtube.com/embed/bVuD0mDhho0">
                        </div>
                    </div>
                </div>
                </div>
                    <div class="row mt-4">
                        <div class="col-md-2 col-sm-12">
                            <img src="/blueciate/img/auralogo.png" style="width:132px">
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <h2 class="heading-small">Remote Work,Home, office, anywhere</h2>
                            <p class="paragraph">
                                <span style="color: #0070c0;">AuraQuantic</span> helps you digitize and orchestrate all types of business processes and rapidly create
                                end-to-end business applications. Complete low-code platform for building the enterprise solutions that drive Digital Transformation.
                                <a href="{{ route('bpm') }}">more...</a>
                            </p>
                        </div>
                        <div class="col-md-2 px-0" style="position: relative; margin: 0 auto;">
                            <div class="inner-box">
                                <div class="image">
                                    <img itemprop="thumbnailUrl" src="/blueciate/img/auraportal-video-thumb.png" alt="Process Automation in 3 Steps thumbnail" role="button" aria-label="Process Automation in 3 Steps video">
                                </div>
                                <div class="video-overlay">
                                    <img src="/blueciate/img/videoOverlay.png" data-toggle="modal" data-target="#videoModal" data-theVideo="https://www.youtube.com/embed/muUopRjuKgk">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-lg-4">
                <div class="col-md-12 py-3 px-3">
                    <h2 class="heading" style="font-size: 22px"><span style="color: black">Why</span> Blueciate?</h2>
                </div>
            </div>

            <div class="row bg-white">
                <h2 class="heading-small"><span class="text-highlight">100% Confidence:</span></h2>
                <p class="paragraph pb-lg-5">Our values are constant and our processes are transparent, you wil always
                    know what we are working on, and why that’s why I BlueCiate..
                </p>
            </div>

        <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-3 bg-white pb-4">
                <div class="col">
                    <div class=" box px-3 py-4">
                    <h2 class="heading-small">We keep your ideas <span class="text-highlight">safe</span></h2>
                    <p class="paragraph-small">It's our responsibility to foster trust your Intellectual Property rights
                        are fully protected and code is yours.</p>
                    </div>
                </div>
                <div class="col">
                    <div class=" box px-3 py-4">
                    <h2 class="heading-small">We deliver <span class="text-highlight">on-time</span></h2>
                    <p class="paragraph-small">We remain dedicated to a high standard of competency and share timely
                        update on progress of work with you.</p>
                    </div>
                </div>
                <div class="col">
                    <div class=" box px-3 py-4">
                    <h2 class="heading-small">We're <span class="text-highlight">easy</span> to work with</h2>
                    <p class="paragraph-small">UNIVERGE BLUE® Desktop App brings essential collaboration tools together, making teamwork easier than ever.</p>
                    </div>
                </div>
                <div class="col">
                    <div class=" box px-3 py-4">
                    <h2 class="heading-small"><span class="text-highlight">Augment</span> your R&D team</h2>
                    <p class="paragraph-small">We access to dedicated pool of 100+ software and hardware engineers.Fully integrated unified communications and collaboration...</p>
                    </div>
                </div>
                <div class="col">
                    <div class=" box px-3 py-4">
                    <h2 class="heading-small">Build an <span class="text-highlight">idea</span> from scratch</h2>
                    <p class="paragraph-small">With simple cloud app delivers a seamless, unified experience while reducing complexity and costs.</p>
                    </div>
                </div>
                <div class="col">
                    <div class=" box px-3 py-4">
                    <h2 class="heading-small">Transform your<span class="text-highlight">enterprise</span></h2>
                    <p class="paragraph-small">By modernizing legacy systems and exploiting advances in
                        technologies.</p>
                    </div>
                </div>
                <div class="col">
                    <div class=" box px-3 py-4">
                    <h2 class="heading-small">Blueciate <span class="text-highlight">RemoteWork</span>?</h2>
                    <p class="paragraph-small">Collaborate maintain, , full-featured phone system combined with chat and even increase productivity throughout the entire business ecosystem,</p>
                    </div>
                </div>
                <div class="col">
                    <div class=" box px-3 py-4">
                    <h2 class="heading-small">Low-code Application Platform <span class="text-highlight">(LCAP)</span></h2>
                    <p class="paragraph-small">Create zero-code automations for your business operations. low-code platform for building the enterprise solutions.</p>
                    </div>
                </div>
                <div class="col">
                    <div class=" box px-3 py-4">
                    <h2 class="heading-small">Business Process <span class="text-highlight">Automation</span></h2>
                    <p class="paragraph-small">Automate your business and see progress in real time in three phases: draw the diagram, define the attributes of the objects that appear in the diagram and execute the process.</p>
                    </div>
                </div>
                <div class="col">
                    <div class=" box px-3 py-4">
                    <h2 class="heading-small">Artificial Intelligence + <span class="text-highlight">Zero-code</span></h2>
                    <p class="paragraph-small">With Artificial Intelligence, machines can analyze images, understand spoken language, interact in a natural way and make predictions using data. </p>
                    </div>
                </div>
                <div class="col">
                    <div class=" box px-3 py-4">
                    <h2 class="heading-small">Connect, <span class="text-highlight">Collaborate,</span> Orchestrate</h2>
                    <p class="paragraph-small">Take your business to the next level with fully integrated unified communications.</p>
                    </div>
                </div>
                <div class="col">
                    <div class=" box px-3 py-4">
                    <h2 class="heading-small">UNIVERGE BLUE <span class="text-highlight">CONNECT:</span></h2>
                    <p class="paragraph-small">Easy-to-use cloud-based communications that helps your employees to be more productive and collaborative.</p>
                    </div>
                </div>
            </div>
    </div>
    <div class="container-fluid">
            <div class="row justify-content-center" style="background-color: #00b050;">
                <div class="col-md-7 p-5">
                    <h2 class="heading text-center"
                        style="color: #fff; font-size: 24px; line-height: 24px; font-weight: normal;padding: 10px"><span class="bottom-blueciate-font">Blueciate</span><br> <span class="bottom-text-font">digital transformation platform & team</span><br><br> helps you to build, automate, deploy your applications & you completely focus on your business.</h2>
                </div>
            </div>

    </div>
    @include('layouts.blueciate.contact')


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
@endsection
@push('scripts')
    <script src="/blueciate/index_files/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">

    </script>

    <!--jQuery library-->
    <script src="/blueciate/index_files/jquery.min.js"></script>

    <!--Popper JS -->
    <script src="/blueciate/index_files/popper.min.js"></script>

    <!--Latest compiled JavaScript-->
    <script src="/blueciate/index_files/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#back-btn').click(function () {
            $('#top-banner').show();
            $('#upload-image-form').show();
            $('#thank_box').hide();
        });
        $('#upload-image-form').submit(function (e) {
            e.preventDefault();
            let formData = new FormData(this);

            $('#submit-button').hide();
            $('#loader').show();

            $('#first_name_error').text('');
            $('#last_name_error').text('');
            $('#email_error').text('');
            $('#phone_error').text('');
            $('#file_error').text('');

            $.ajax({
                type: 'POST',
                url: '/remote-work-mail',
                data: formData,
                contentType: false,
                processData: false,
                success: (response) => {
                    if (response) {
                        // this.reset();
                        $('#top-banner').hide();
                        $('#upload-image-form').hide();
                        $('#thank_box').show();

                        $('#submit-button').show();
                        $('#loader').hide();

                        $("html, body").animate({ scrollTop: 0 }, "slow");
                    }
                },
                error: function (response) {
                    $('#submit-button').show();
                    $('#loader').hide();
                    console.log(response.errors);
                    $('#first_name_error').text(response.responseJSON.errors.first_name);
                    $('#last_name_error').text(response.responseJSON.errors.last_name);
                    $('#email_error').text(response.responseJSON.errors.email);
                    $('#phone_error').text(response.responseJSON.errors.phone);
                    $('#resume_error').text(response.responseJSON.errors.resume);
                }
            });
        });
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
            $('input[type=radio][name=work_type]').change(function() {
                $('.ad-options-2').prop('checked', false);
                $('.ns-options-2').prop('checked', false);
                $('.ps-options-2').prop('checked', false);
                $('.ad-skills').prop('checked', false);
                $('.ns-skills').prop('checked', false);
                $('.ps-skills').prop('checked', false);

                if (this.value == 'Application Development') {
                    $('#ad-step2').show();
                    $('#ad-step3').show();
                    $('#ps-step2').hide();
                    $('#ps-step3').hide();
                    $('#ns-step2').hide();
                    $('#ns-step3').hide();
                } else if (this.value == 'Production Suport') {
                    $('#ad-step2').hide();
                    $('#ad-step3').hide();
                    $('#ps-step2').show();
                    $('#ps-step3').show();
                    $('#ns-step2').hide();
                    $('#ns-step3').hide();
                } else if (this.value == 'Networking Support') {
                    $('#ad-step2').hide();
                    $('#ad-step3').hide();
                    $('#ps-step2').hide();
                    $('#ps-step3').hide();
                    $('#ns-step2').show();
                    $('#ns-step3').show();
                }
            });
            // $('#webinar').modal();
            // if (Cookies.get('webinar-feb') !== 'submitted') {
            // }
        });

    </script>
@endpush
