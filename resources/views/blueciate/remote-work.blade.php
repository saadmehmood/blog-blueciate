﻿@push('styles')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body {

            font-family: 'Open Sans', sans-serif;
            /*background-color: #f5f5f5;*/
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
            -webkit-box-shadow: 5px 10px 13px -14px #000000, 5px 5px 15px 5px rgba(0, 0, 0, 0);
            box-shadow: 5px 10px 13px -14px #000000, 5px 5px 15px 5px rgba(0, 0, 0, 0);
            border: #0070c0 solid;
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
                font-size: 36px;
                line-height: 36px
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
    <div class="container-fluid top-banner">
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
            <div class="row mt-lg-4">
                <div class="col-md-12 px-0">
                    <h2 class="font-size-48 heading text-center pt-3 pt-lg-5">Let's build your remote engineering team in 4 easy steps</h2>

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

                    <input type="radio" class="btn-check" name="work_type" id="steps-ad" autocomplete="off"
                           value="Application Development">
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

            <div class="row mt-4 mt-lg-4" data-aos="fade-up" data-aos-duration="1500">
                <div class="col-12 pr-0 bg-white pl-lg-2 py-lg-3">
                    <h2 class="heading mb-0" style="line-height: 24px"><span class="steps">Step 2:</span> Define Scope of Work?</h2>
                    <p class="paragraph text-left mb-3" style="margin-left: 68px;font-size: 14px;">(select your Blueciate Remote Development Team.)</p>

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

                    <input type="checkbox" class="btn-check" name="options[]" id="option{{ $count }}"
                           value="{{ $option }}" autocomplete="off">
                    <label class="btn btn-secondary" for="option{{ $count }}">{{ $option }}</label>

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

            <div class="row mt-4 mt-lg-4" data-aos="fade-up" data-aos-duration="1500">
                <div class="col-12 pr-0 bg-white pl-lg-2 py-lg-3">
                    <h2 class="heading mb-0" style="line-height: 24px"><span  class="steps">Step 3:</span> Select platform & skill-set?</h2>
                    <p class="paragraph text-left mb-3" style="margin-left: 68px;font-size: 14px;">(select the right skill-set) </p>

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

                    <input type="checkbox" class="btn-check" name="skills[]" id="skill{{ $count }}" value="{{ $skill }}"
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
                    <p class="paragraph text-left mb-3" style="margin-left: 68px;font-size: 14px;">(Team size required 1-5)</p>

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

            <div class="row mt-4 mt-lg-4 bg-white box-shadow-bottom">

                <div class="col-md-12 px-3">
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

        <div class="row mt-4 mt-lg-4" data-aos="fade-up" data-aos-duration="1500" id="thank_box" style="display: none;">
            <div class="col-md-12 col-sm-12 px-3">
                <h2 class="font-size-48 heading mt-lg-5 text-center"><span class="text-highlight">Thank you for your business we will get back to you shortly.</span></h2>
            </div>
        </div>


            <div class="row mt-lg-4 mt-4">
                <div class="col-md-12 col-sm-12 pb-3">
                    <h2 class="heading">In Collaboration with technology partners:</h2>
                </div>
                <div class="col-md-2 col-sm-12">
                    <img src="/blueciate/img/univergblue.png" style="width:132px">
                </div>
                <div class="col-md-10 col-sm-12">
                    <h2 class="heading-small">Connect, Collaborate, Orchestrate</h2>
                    <p class="paragraph">
                        <span style="color: #0070c0;">NEC UNIVERGE BLUE CONNECT, MEET, SHARE, ENGAGE</span> an easy-to-use cloud-based communications
                        platform that helps employees to be more productive and collaborative.
                        Take your business to the next level with
                        fully integrated unified communications.
                        It includes a full-featured phone system combined with chat, web/video
                        conferencing, and file sync, share, and backup capabilities.
                    </p>
                </div>
            </div>
            <div class="row mt-lg-4">
                <div class="col-md-2 col-sm-12">
                    <img src="/blueciate/img/auralogo.png" style="width:132px">
                </div>
                <div class="col-md-10 col-sm-12">
                    <h2 class="heading-small">Remote Work,Home, office, anywhere</h2>
                    <p class="paragraph">
                        <span style="color: #0070c0;">AuraQuantic</span> helps you digitize and orchestrate all types of business processes and rapidly create end-to-end business applications. Complete low-code platform for building the enterprise solutions that drive Digital Transformation.
                    </p>
                </div>
            </div>

            <div class="row mt-lg-4">
                <div class="col-md-12 py-3 px-3">
                    <h2 class="heading">Why Blueciate?</h2>
                </div>
            </div>

            <div class="row bg-white">
                <h2 class="heading-small">100% Confidence:</h2>
                <p class="paragraph pb-lg-5">Our values are constant and our processes are transparent, you wil always
                    know what we are working on, and why that’s why I BlueCiate..
                </p>
            </div>

        <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-3 bg-white">
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
                    <p class="paragraph-small">Collaborate maintain and even increase productivity throughout the entire business ecosystem,</p>
                    </div>
                </div>
                <div class="col">
                    <div class=" box px-3 py-4">
                    <h2 class="heading-small">Low-code Application Platform <span class="text-highlight">(LCAP)</span></h2>
                    <p class="paragraph-small">Create zero-code automations for your business operations. low-code platform for building the enterprise solutions that drive Digital Transformation to minimize the chances of human error and focus on the tasks that make a real impact</p>
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
                    <p class="paragraph-small">Take your business to the next level with fully integrated unified communications, full-featured phone system combined with chat, web/video conferencing, and file sync, share& backup.</p>
                    </div>
                </div>
                <div class="col">
                    <div class=" box px-3 py-4">
                    <h2 class="heading-small">UNIVERGE BLUE <span class="text-highlight">CONNECT:</span></h2>
                    <p class="paragraph-small">Take your business to the next level with fully integrated unified communications. Easy-to-use cloud-based communications that helps your employees to be more productive and collaborative.</p>
                    </div>
                </div>
            </div>
    </div>
    <div class="container-fluid">


            <div class="row justify-content-center mt-lg-4" style="background-color: #6dab3c;">
                <div class="col-md-7 p-5">
                    <h2 class="heading text-center"
                        style="color: #fff; font-size: 24px; line-height: 24px; font-weight: normal;padding: 10px"><span style="font-size: 72px;">Blueciate</span><br> <span style="font-size: 36px;">digital transformation platform & team</span><br><br> helps you to build, automate, deploy your applications & you completely focus on your business.</h2>
                </div>
            </div>

    </div>
    @include('layouts.blueciate.contact')
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
                        $('#upload-image-form').hide();
                        $('#thank_box').show();
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

    </script>
@endpush