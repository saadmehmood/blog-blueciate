@push('styles')
<style>
    body{

        font-family: 'Open Sans',sans-serif;
        background-color: #f5f5f5;
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
        color:  #0070c0;
        font-weight: 600;
        line-height: 50px;
    }
    .box-shadow-bottom {
        -webkit-box-shadow: 5px 10px 13px -14px #000000, 5px 5px 15px 5px rgba(0,0,0,0);
        box-shadow: 5px 10px 13px -14px #000000, 5px 5px 15px 5px rgba(0,0,0,0);
    }
    .font-size-48{
        font-size: 48px;
    }
    .font-size-36{
        font-size: 36px;
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
        margin-bottom: 0px;
    }
    .text-highlight {
        color: #00b050;
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
    .bg-white{
        background: white;
    }
    .btn-check:checked+.btn-secondary {
        color: #fff;
        background-color: #00b050;
        border-color: #00b050;
    }
    .btn-secondary {
        color: #fff;
        background-color: #0070c0;
        border-color: #0070c0;
    }

    .btn{
        letter-spacing: normal;
        margin-bottom: 10px;
        text-transform: none;
    }
</style>
@endpush
@extends('layouts.blueciate-3')
@section('content')
        <?php
        $images = ['remote-work.png'];
        ?>
        @include('blueciate.image-slider')

        <div class="container">
            <div class="row">
                <div class="col-md-12 px-0 box-shadow-bottom bg-white pt-lg-5">
                    <h2 class="font-size-48 heading text-center">Your Blueciate <span class="text-highlight">RemoteWork</span> TEAM for Digital Transformation!!!</h2>
                    <h2 class="font-size-36 heading text-center">Helping your business  SCALE UP and go to the next level ….</h2>
                </div>
            </div>
            <div class="row mt-lg-4">
                <div class="col-md-6 px-0">
                    <h2 class="font-size-48 heading text-center pt-lg-5">Build Remote Engineering Team in <span class="text-highlight">24 hours</span></h2>
                    <div class="text-center">
                        <a href="#" class="btn-blue">Get Started</a>
                    </div>

                </div>

                <div class="col-md-6 text-center p-0">
                    <img src="/blueciate/img/team-trans-bg.png" alt="Blueciate Team" style="width: 80%">
                </div>
            </div>
            <div class="row mt-lg-4">
                <div class="col-md-12 px-0 bg-white py-lg-3">
                    <h2 class="font-size-48 heading text-center">Select your <span class="text-highlight">Next Generation Digital Platform Transformation Team</span> in less than 48 hours!</h2>

                </div>
            </div>
            <div class="row mt-lg-4">
                <div class="col-md-12 px-0">
                    <h2 class="font-size-48 heading text-center">How? <br> <span class="text-highlight font-size-36">Only in 4 easy steps.</span></h2>

                </div>
            </div>
            <div class="row mt-lg-4">
                <div class="col-md-4 px-0">
                    <h2 class="heading text-center">Application Development</h2>

                </div>
                <div class="col-md-4 px-0">
                    <h2 class="heading text-center">Production Suport</h2>

                </div>
                <div class="col-md-4 px-0">
                    <h2 class="heading text-center">Networking Support</h2>

                </div>
            </div>

            <div class="row mt-lg-4">
                <div class="col-12 px-0">
                    <h2 class="heading mb-0">Lets get started and Build your Dream Team.</h2>
                    <p class="paragraph text-left">(select your Blueciate Remote Development Team.)</p>
                </div>
            </div>

            <div class="row mt-lg-4">
                <div class="col-12 pr-0 bg-white pl-lg-2 py-lg-3">
                    <h2 class="heading">What can <span class="text-highlight font-size-36">remote team</span> do for you?</h2>

                    <input type="checkbox" class="btn-check" name="options" id="option1" autocomplete="off">
                    <label class="btn btn-secondary" for="option1">Web Development</label>

                    <input type="checkbox" class="btn-check" name="options" id="option2" autocomplete="off">
                    <label class="btn btn-secondary" for="option2">Mobile Development</label>

                    <input type="checkbox" class="btn-check" name="options" id="option3" autocomplete="off">
                    <label class="btn btn-secondary" for="option3">Data Engineering</label>

                    <input type="checkbox" class="btn-check" name="options" id="option4" autocomplete="off">
                    <label class="btn btn-secondary" for="option4">Software Integration</label>
                    <input type="checkbox" class="btn-check" name="options" id="option5" autocomplete="off">
                    <label class="btn btn-secondary" for="option5">DevOps & Infrastructure</label>
                    <input type="checkbox" class="btn-check" name="options" id="option6" autocomplete="off">
                    <label class="btn btn-secondary" for="option6">Machine Learning</label>
                    <input type="checkbox" class="btn-check" name="options" id="option7" autocomplete="off">
                    <label class="btn btn-secondary" for="option7">Other Mission</label>
                </div>
            </div>

            <div class="row mt-lg-4">
                <div class="col-12 px-0">
                    <h2 class="heading mb-0">Select the right skill set & Platform?</h2>
                </div>
            </div>

            <div class="row mt-lg-4">
                <div class="col-12 pr-0 bg-white pl-lg-2 py-lg-3">
                    <h2 class="heading">What kind of <span class="text-highlight font-size-36">skills</span> you required from your team?</h2>

                    <input type="checkbox" class="btn-check" name="options" id="option1" autocomplete="off">
                    <label class="btn btn-secondary" for="option1">Javascript</label>

                    <input type="checkbox" class="btn-check" name="options" id="option2" autocomplete="off">
                    <label class="btn btn-secondary" for="option2">React Js</label>

                    <input type="checkbox" class="btn-check" name="options" id="option3" autocomplete="off">
                    <label class="btn btn-secondary" for="option3">Node Js</label>

                    <input type="checkbox" class="btn-check" name="options" id="option4" autocomplete="off">
                    <label class="btn btn-secondary" for="option4">Html/Css</label>
                    <input type="checkbox" class="btn-check" name="options" id="option5" autocomplete="off">
                    <label class="btn btn-secondary" for="option5">Php</label>
                    <input type="checkbox" class="btn-check" name="options" id="option6" autocomplete="off">
                    <label class="btn btn-secondary" for="option6">Python</label>
                    <input type="checkbox" class="btn-check" name="options" id="option7" autocomplete="off">
                    <label class="btn btn-secondary" for="option7">Ruby On Rails</label>
                    <input type="checkbox" class="btn-check" name="options" id="option7" autocomplete="off">
                    <label class="btn btn-secondary" for="option7">React Native</label>
                    <input type="checkbox" class="btn-check" name="options" id="option7" autocomplete="off">
                    <label class="btn btn-secondary" for="option7">Angular</label>
                    <input type="checkbox" class="btn-check" name="options" id="option7" autocomplete="off">
                    <label class="btn btn-secondary" for="option7">Angular Js</label>
                    <input type="checkbox" class="btn-check" name="options" id="option7" autocomplete="off">
                    <label class="btn btn-secondary" for="option7">Swift</label>
                    <input type="checkbox" class="btn-check" name="options" id="option7" autocomplete="off">
                    <label class="btn btn-secondary" for="option7">AWS</label>
                    <input type="checkbox" class="btn-check" name="options" id="option7" autocomplete="off">
                    <label class="btn btn-secondary" for="option7">C#</label>
                    <input type="checkbox" class="btn-check" name="options" id="option7" autocomplete="off">
                    <label class="btn btn-secondary" for="option7">Android</label>
                    <input type="checkbox" class="btn-check" name="options" id="option7" autocomplete="off">
                    <label class="btn btn-secondary" for="option7">Bootstrap</label>
                    <input type="checkbox" class="btn-check" name="options" id="option7" autocomplete="off">
                    <label class="btn btn-secondary" for="option7">Objective C</label>
                    <input type="checkbox" class="btn-check" name="options" id="option7" autocomplete="off">
                    <label class="btn btn-secondary" for="option7">Typescript</label>
                    <input type="checkbox" class="btn-check" name="options" id="option7" autocomplete="off">
                    <label class="btn btn-secondary" for="option7">My Sql</label>
                    <input type="checkbox" class="btn-check" name="options" id="option7" autocomplete="off">
                    <label class="btn btn-secondary" for="option7">Sql</label>
                    <input type="checkbox" class="btn-check" name="options" id="option7" autocomplete="off">
                    <label class="btn btn-secondary" for="option7">Java</label>
                </div>
            </div>
        </div>
        @include('layouts.blueciate.contact')
        @endsection
@push('scripts')
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
@endpush
