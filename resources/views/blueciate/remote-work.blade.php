@push('styles')
<style>
    body{

        font-family: 'Open Sans',sans-serif;
        background-color: #f5f5f5;
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
        color: #0070c0;
        font-weight: bold;
        font-size: 20px
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
    p.paragraph-small {
        color: #707577;
        font-family: 'Open Sans',sans-serif;
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
    .btn:focus, btn-steps:focus {
        outline: none;
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
    .btn-check:checked+.btn-team-size {
        color: #fff;
        background-color: #00b050;
        border-color: #00b050;
    }
    .btn-team-size {
        width: 100%;
        color: #fff;
        background-color: #0070c0;
        border-color: #00b050;
        border-radius: 0;
    }
    .btn-check:checked+.btn-steps, .btn-steps:hover {
        color: #fff;
        background-color: #0070c0;
        border-color: #0070c0;
    }
    .btn-steps {
        color:  #0070c0;
        font-weight: 600;
        line-height: 50px;
        font-size: 2rem;
        width: 100%;
        background-color: white;
        border-color: #0070c0;
        border-radius: 0;
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
            <form method="post" id="upload-image-form" enctype="multipart/form-data">
                @csrf
            <div class="row mt-lg-4">
                <div class="col-md-4 px-0">

                    <input type="radio" class="btn-check" name="work_type" id="steps-ad" autocomplete="off" value="Application Development">
                    <label class="btn btn-steps" for="steps-ad">Application Development</label>
{{--                    <h2 class="heading text-center">Application Development</h2>--}}

                </div>
                <div class="col-md-4 px-0">
                    <input type="radio" class="btn-check" name="work_type" id="steps-ps" autocomplete="off" value="Production Suport">
                    <label class="btn btn-steps" for="steps-ps">Production Suport</label>
{{--                    <h2 class="heading text-center">Production Suport</h2>--}}

                </div>
                <div class="col-md-4 px-0">
                    <input type="radio" class="btn-check" name="work_type" id="steps-ns" autocomplete="off" value="Networking Support">
                    <label class="btn btn-steps" for="steps-ns">Networking Support</label>
{{--                    <h2 class="heading text-center">Networking Support</h2>--}}

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

                    <?php
                    $options = ['Web Development', 'Mobile Development', 'Data Engineering', 'Software Integration', 'DevOps & Infrastructure', 'Machine Learning', 'Other Mission'];
                    $count = 1;
                    foreach ($options as $option){
                    ?>

                    <input type="checkbox" class="btn-check" name="options[]" id="option{{ $count }}" value="{{ $option }}" autocomplete="off">
                    <label class="btn btn-secondary" for="option{{ $count }}">{{ $option }}</label>

                    <?php
                    $count++;
                    } ?>
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

                    <?php
                    $skills = ['Javascript', 'React Js', 'Node Js', 'Html/Css', 'Php', 'Python', 'Ruby On Rails', 'React Native', 'Angular', 'Angular Js', 'Swift', 'AWS', 'C#', 'Android', 'Bootstrap', 'Objective C', 'Typescript', 'My Sql', 'Sql', 'Java'];
                    $count = 1;
                    foreach ($skills as $skill){
                        ?>

                    <input type="checkbox" class="btn-check" name="skills[]" id="skill{{ $count }}" value="{{ $skill }}" autocomplete="off">
                    <label class="btn btn-secondary" for="skill{{ $count }}">{{ $skill }}</label>

                    <?php
                    $count++;
                    } ?>
                </div>
            </div>

            <div class="row mt-lg-4">
                <div class="col-12 px-0">
                    <h2 class="heading mb-0">Select your Right Team  Size?</h2>
                </div>
            </div>

            <div class="row mt-lg-4">
                <div class="col-12 pr-0 bg-white pl-lg-2 py-lg-3">
                    <h2 class="heading">How many <span class="text-highlight font-size-36">team</span> members do you required?</h2>

                    <div class="row px-5">
                        <?php
                        $teamSize = [2,3,4,5,6,7, 'Not sure'];
                        $count = 1;
                        foreach ($teamSize as $team){
                            ?>
                        <div class="col px-0">
                    <input type="radio" class="btn-check" name="team_size" id="team{{ $count }}" value="{{ $team }}" autocomplete="off">
                    <label class="btn btn-team-size" for="team{{ $count }}">{{ $team }}</label>
                        </div>

                        <?php
                        $count++;
                        } ?>
                    </div>
                </div>
            </div>

            <div class="row mt-lg-4 bg-white box-shadow-bottom">
                <div class="col-md-6 text-center p-3">
                    <img src="/blueciate/img/colleagues-giving-fist-bump.jpg" alt="Blueciate Team">
                </div>

                <div class="col-md-6 px-3" id="user_form_data">
                    <h2 class="heading">Tell us about <span class="text-highlight">Yourself</span></h2>
                    <div class="row">
                        <div class="col">
                            <div class="mb-2">
                                <label for="full_name" class="form-label">Full name</label>
                                <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Full name" required>
                            </div>
                            <div class="mb-2">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                            </div>
                            <div class="mb-2">
                                <label for="Phone" class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" id="Phone" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <label for="company_name" class="form-label">Company name</label>
                                <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Company name">
                            </div>
                            <div class="mb-2">
                                <label for="message" class="form-label">Your Message</label>
                                <textarea class="form-control" id="message" name="message" rows="4" style="height: 115px"></textarea>
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

                <div class="col-md-6 px-3" id="thank_box" style="display: none;">
                    <h2 class="heading mt-lg-5">Thank you for your business we will get back to you shortly.</h2>
                </div>
            </div>


            <div class="row mt-lg-4">
                <div class="col-md-12 p-0">
                    <h2 class="heading">Join the <span class="text-highlight">Blueciate</span> Future <span class="text-highlight">Digital Transformation</span> Team to build, automate & deploy your applications and you completely focus on your business needs.</h2>
                </div>
            </div>


            <div class="row mt-lg-4">
                <div class="col-md-12 p-0">
                    <h2 class="heading">Why <span class="text-highlight">Blueciate</span>?</h2>
                </div>
            </div>

            <div class="row bg-white p-2">
                <h2><span class="text-highlight">100%</span> Confidence</h2>
                <p class="paragraph pb-lg-5">Our values are constant and our processes are transparent, you wil always know what we are working on, and why</p>
                <div class="col box px-3 py-4 mx-2">
                    <h2 class="heading-small">We keep your ideas <span class="text-highlight">safe</span></h2>
                    <p class="paragraph-small">It's our responsibility to foster trust your Intellectual Property rights are fully protected and code is yours.</p>
                </div>
                <div class="col box px-3 py-4 mx-2">
                    <h2 class="heading-small">We deliver <span class="text-highlight">on-time</span></h2>
                    <p class="paragraph-small">We remain dedicated to a high standard of competency and share timely update on progress of work with you.</p>
                </div>
                <div class="col box px-3 py-4 mx-2">
                    <h2 class="heading-small">We're <span class="text-highlight">easy</span> to work with</h2>
                    <p class="paragraph-small">Regular skype meetings, demo sessions and feedback sessions ensure we meet your demand.</p>
                </div>
                <div class="col box px-3 py-4 mx-2">
                    <h2 class="heading-small"><span class="text-highlight">Augment</span> your R&D team</h2>
                    <p class="paragraph-small">We access to dedicated pool of 150+ software and hardware engineers.</p>
                </div>
                <div class="col box px-3 py-4 mx-2">
                    <h2 class="heading-small">Build an  <span class="text-highlight">idea</span> from scratch</h2>
                    <p class="paragraph-small">Guided by top business consultants and senior solution architects.</p>
                </div>
                <div class="col box px-3 py-4 mx-2">
                    <h2 class="heading-small">Transform your<span class="text-highlight">enterprise</span></h2>
                    <p class="paragraph-small">By modernizing legacy systems and exploiting advances in technologies.</p>
                </div>
            </div>
            </form>

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

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#upload-image-form').submit(function(e) {
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
                type:'POST',
                url: '/remote-work-mail',
                data: formData,
                contentType: false,
                processData: false,
                success: (response) => {
                    if (response) {
                        // this.reset();
                        $('#user_form_data').hide();
                        $('#thank_box').show();
                    }
                },
                error: function(response){
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
