@push('styles')
<style>
    body {
        color: white;
        font-family: "Titillium Web",sans-serif;
    }
    .bpms-webinar {
        color: white;
    }
    .bg-color {
        /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#00a7ac+0,6dab3c+100 */
        background: #00a7ac; /* Old browsers */
        background: -moz-linear-gradient(-45deg,  #00a7ac 0%, #6dab3c 100%); /* FF3.6-15 */
        background: -webkit-linear-gradient(-45deg,  #00a7ac 0%,#6dab3c 100%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(135deg,  #00a7ac 0%,#6dab3c 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00a7ac', endColorstr='#6dab3c',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

    }
    .info-form-heading {
        font-family: "TitilliumWeb-Blod",sans-serif;
        font-weight: 600;
        font-size: 38px;
        line-height: 48px;
        margin: 56px 0 0;
        color: white;
    }
    .info-form {
        color: white;
    }
    .info-form .teaser {
        width: 100%;
        font-size: 20px;
        line-height: 28px;
    }
    .info-form .teaser .teaser-text {
        color: white;
        font-size: 20px;
        line-height: 28px;
        margin: 56px 0 0;
    }
    .info-form .icon-holder {
        width: 5%;
        display: inline-block;
    }
    .info-form .icon-text {
        width: 80%;
        display: inline-block;
    }
    .info-form .icon-title {
        color: white;
    }
    .form-field input {
        color: #fff;
        background: 0 0;
        border: none;
        border-bottom: 1px solid #fff;
        border-radius: 0px;
    }
    .form-field input:focus {
        color: #fff;
        background: 0 0;
        border: none;
        border-bottom: 1px solid #fff;
        border-radius: 0px;
        box-shadow: none;
    }/*Change text in autofill textbox*/
    input:-webkit-autofill {
        background-color: transparent;
    }


    .form-outline {
        background: rgba(0,167,172,.9);
        box-shadow: 10px 9px 24px 0 rgba(0,0,0,.75);
        margin: 0 0 56px;
        padding: 56px
    }
    .info-form-description {
        color: #595757;
        line-height: 1.5em;
        font-family: "Open Sans", sans-serif;
        font-weight: 300;
        font-style: normal;
    }
    .info-form .form-label {
        font-size: 0.8em;
    }
    .webinar-collaboration-with {
        background: #eee;
        padding: 36px 0;
    }
    .webinar-collaboration-with h2 {
        color: #7f7f7f;
        margin: 0 0 24px 24px;
        font-size: 24px;
        line-height: 32px;
    }
    .webinar-collaboration-with .flexcontainer {
        -ms-flex-align: center;
        align-items: center;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }
    .webinar-collaboration-with .flexcontainer .item {
        width: 23.7288135593%;
        float: left;
        margin-right: 1.6949152542%;
        padding: 0 24px;
    }
    .main-content .heading {
        float: left;
        clear: left;
        margin: 32px 0 32px -8px;
        width: 100%;
    }
    .main-content .heading span {
        background-color: #6dab3c;
        -webkit-box-decoration-break: clone;
        box-decoration-break: clone;
        color: #fff;
        font-size: 24px;
        font-weight: 600;
        line-height: 2;
        padding: 12px;
    }
    .main-content .paragraph {
        color: rgba(50, 50, 50, .75);
        font-size: 16px;
        font-weight: 300;
        line-height: 24px;
        margin-bottom: 16px;
    }
    .main-content .speaker-img {
        float: left;
        margin: 6px 24px 12px 0;
        width: 33%;
    }
    .main-content .content-wrap {
        display: inline-block;
        clear: both;
    }
    .form-outline .hs-button {
        background-color: #47A860;
        border: none;
        border-radius: 4px;
        color: #fff;
        cursor: pointer;
        display: block;
        font-size: 20px;
        font-weight: 300;
        line-height: 26px;
        margin: 14px 0;
        padding: 14px;
        text-align: center;
        text-decoration: none;
        transition: all .2s ease 0s;
        white-space: normal;
        width: 100%;
    }
    .form-outline .hs-button:hover {
        background-color: #6dab3c;
        transition: all .2s ease 0s;
    }
    .fa-3 {
        font-size: 44px;
        color: white;
    }
</style>
@endpush
@extends('layouts.blueciate-2')
@section('content')
        <div class=" bg-color">
            <div class="container">
                <section class="row mx-0">
                        <div class="info-form col-md-7">
                            <div>
                            <h1 class="info-form-heading">Webinar: Learn to Diagram Business Processes with the BPMN Standard</h1>
                            </div>
                            <div class="mb-2">
                                <div class="icon-holder mr-2 pt-2">
                                    <i class="fa fa-calendar-alt fa-3"></i>
                                </div>
                                <div class="icon-text">
                                    <p class="icon-title mb-0"> 	February 25th 2021</p>
                                    <p class="icon-title mb-0 pt-1"> 	2:00-3:00 PM PST</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="icon-holder mr-2 pt-2">
                                    <i class="fa fa-wallet fa-3"></i>
                                </div>
                                <div class="icon-text">
                                    <p class="icon-title mb-0"> 	for free</p>
                                    <p>&nbsp;</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="icon-holder mr-2 pt-2">
                                    <i class="fa fa-award fa-3"></i>
                                </div>
                                <div class="icon-text">
                                    <p class="icon-title mb-0"> Free webinar certificate</p>
                                    <p>&nbsp;</p>
                                </div>
                            </div>

                            <div class="teaser">
                                <p class="teaser-text">
                                    Thanks to the AuraQuantic Low-code applications development  Business Transformation Suite to set the foundation for a successful iBPMS using RPA initiative. Do not miss this opportunity to learn from the leading industrial services provider as the company shares its RPA success story, including compelling use cases and lessons learned.
                                </p>
                            </div>
                        </div>
                    <div class="col-md-5 form-outline">
                        <form method="post" action="{{ route('bpmsWebinarMail') }}" name="contact"  id="ajax-contact" novalidate="novalidate">
                            @csrf
                            <input type="hidden" name="webinar" value="1"/>
                            <!-- Email input -->
                            <div class="form-field mb-3">
                                <label class="form-label" for="firstName">First Name</label>
                                <input type="text" id="firstName" name="firstName" class="form-control" />
                            </div>

                            <div class="form-field mb-3">
                                <label class="form-label" for="lastName">Last Name</label>
                                <input type="text" id="lastName" name="lastName" class="form-control" />
                            </div>

                            <div class="form-field mb-3">
                                <label class="form-label" for="emailAddress">Email Address</label>
                                <input type="text" id="emailAddress" name="emailAddress" class="form-control" />
                            </div>

                            <div class="form-field mb-3">
                                <label class="form-label" for="phone">Phone</label>
                                <input type="text" id="phone" name="phone" class="form-control" />
                            </div>

                            <div class="form-field mb-3">
                                <label class="form-label" for="company">Company</label>
                                <input type="text" id="company" name="company" class="form-control" />
                            </div>

                            <div class="form-field mb-3">
                                <label class="form-label" for="country">Country</label>
                                <input type="text" id="country" name="country" class="form-control" />
                            </div>
                            <!-- Submit button -->
                            <button type="submit" name="btnSubmit" class="hs-button">Register</button>
                        </form>
                        </div>

                </section>
            </div>
        </div>
        <div class="webinar-collaboration-with pt-5">
            <div class="container">
                <h2>In Collaboration with:</h2>
                <div class="flexcontainer">
                    <div class="item"><img src="/blueciate/img/aura-quantic.jpeg" data-was-processed="true"></div>				</div>
            </div>
        </div>
        <div class="container">
            <div class="main-content">
            <div class="col-md-7 px-0">
                <h2 class="heading">
                    <span>What to expect</span>
                </h2>
                <p class="paragraph">
                    Learn how  AuraQuantic Business Transformation Suite supports the leading industrial services provider to identify opportunities low code applications development for automation, and then unlock optimization standards across existing processes in preparation for strategic RPA implementation and highlight how to overcome the challenge of standardization across silos.
                </p>
            </div>
            <div class="col-md-7 px-0">
                <h2 class="heading">
                    <span>More information about the webinar</span>
                </h2>
                <p class="paragraph">
                    You will receive a link to join the webinar and all other details by email. Can’t make the broadcast? Register anyway, and you will be sent the recording to watch at your convenience.
                </p>
                <p class="paragraph">
                    Any questions? We are happy to help – contact us at: <span class="link-special" style="font-weight: bold"><a href="mailto:info@blueciate.com" target="_blank" rel="noreferrer noopener">info@blueciate.com</a></span>
                </p>
            </div>
            <div class="col-md-7 px-0">
                <h2 class="heading">
                    <span>About the speakers</span>
                </h2>
                <div class="content-wrap">
                    <div class="speaker-img">
                        <a href="https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela.jpg" data-fancybox="images" class="noLinkr">
                            <img data-srcset="https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela.jpg 1024w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-150x150.jpg 150w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-600x600.jpg 600w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-300x300.jpg 300w" data-sizes="100vw" data-src="https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela.jpg" alt="Michaela Brandl Bilfinger" class="lazy loaded" sizes="100vw" srcset="https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela.jpg 1024w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-150x150.jpg 150w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-600x600.jpg 600w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-300x300.jpg 300w" src="https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela.jpg" data-was-processed="true">
                        </a>
                    </div>
                    <p>Since the beginning of 2020, <strong>Michaela Brandl</strong> has been working as a Project Manager Financial Processes &amp; Projects with an RPA focus at Bilfinger Shared Services GmbH. She takes care of the develop­ment of the internal RPA Competence Center and the rollout of the auto­mation initiatives. She is also respon­sible for identi­fying optimization potential and advises internally on the possible implemen­tation opportunities of robotic process automation.</p>
                </div>
                <div class="content-wrap">
                    <div class="speaker-img">
                        <a href="https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela.jpg" data-fancybox="images" class="noLinkr">
                            <img data-srcset="https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela.jpg 1024w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-150x150.jpg 150w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-600x600.jpg 600w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-300x300.jpg 300w" data-sizes="100vw" data-src="https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela.jpg" alt="Michaela Brandl Bilfinger" class="lazy loaded" sizes="100vw" srcset="https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela.jpg 1024w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-150x150.jpg 150w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-600x600.jpg 600w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-300x300.jpg 300w" src="https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela.jpg" data-was-processed="true">
                        </a>
                    </div>
                    <p>Since the beginning of 2020, <strong>Michaela Brandl</strong> has been working as a Project Manager Financial Processes &amp; Projects with an RPA focus at Bilfinger Shared Services GmbH. She takes care of the develop­ment of the internal RPA Competence Center and the rollout of the auto­mation initiatives. She is also respon­sible for identi­fying optimization potential and advises internally on the possible implemen­tation opportunities of robotic process automation.</p>
                </div>
                <div class="content-wrap">
                    <div class="speaker-img">
                        <a href="https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela.jpg" data-fancybox="images" class="noLinkr">
                            <img data-srcset="https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela.jpg 1024w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-150x150.jpg 150w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-600x600.jpg 600w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-300x300.jpg 300w" data-sizes="100vw" data-src="https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela.jpg" alt="Michaela Brandl Bilfinger" class="lazy loaded" sizes="100vw" srcset="https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela.jpg 1024w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-150x150.jpg 150w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-600x600.jpg 600w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-300x300.jpg 300w" src="https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela.jpg" data-was-processed="true">
                        </a>
                    </div>
                    <p>Since the beginning of 2020, <strong>Michaela Brandl</strong> has been working as a Project Manager Financial Processes &amp; Projects with an RPA focus at Bilfinger Shared Services GmbH. She takes care of the develop­ment of the internal RPA Competence Center and the rollout of the auto­mation initiatives. She is also respon­sible for identi­fying optimization potential and advises internally on the possible implemen­tation opportunities of robotic process automation.</p>
                </div>
                <div class="content-wrap">
                    <div class="speaker-img">
                        <a href="https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela.jpg" data-fancybox="images" class="noLinkr">
                            <img data-srcset="https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela.jpg 1024w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-150x150.jpg 150w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-600x600.jpg 600w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-300x300.jpg 300w" data-sizes="100vw" data-src="https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela.jpg" alt="Michaela Brandl Bilfinger" class="lazy loaded" sizes="100vw" srcset="https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela.jpg 1024w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-150x150.jpg 150w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-600x600.jpg 600w, https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela-300x300.jpg 300w" src="https://www.signavio.com/wp-content/uploads/2020/12/Brandl-Michaela.jpg" data-was-processed="true">
                        </a>
                    </div>
                    <p>Since the beginning of 2020, <strong>Michaela Brandl</strong> has been working as a Project Manager Financial Processes &amp; Projects with an RPA focus at Bilfinger Shared Services GmbH. She takes care of the develop­ment of the internal RPA Competence Center and the rollout of the auto­mation initiatives. She is also respon­sible for identi­fying optimization potential and advises internally on the possible implemen­tation opportunities of robotic process automation.</p>
                </div>
            </div>
            </div>
        </div>
        @include('layouts.blueciate.contact')
@endsection
@push('scripts')
<script>
    jQuery(document).ready(function ($) {
        $("#ajax-contact").validate({
            rules: {
                firstName: {
                    required: true,
                    minlength: 2
                },
                lastName: {
                    required: true,
                    minlength: 2
                },
                emailAddress: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    minlength: 2
                },
                company: {
                    required: true
                }
            },
            messages: {
                firstName: {
                    required: "Please enter a correct name",
                    minlength: "Your bane seens a bit doesn't it?"
                },
                lastName: {
                    required: "Please enter a correct name",
                    minlength: "Your bane seens a bit doesn't it?"
                },
                emailAddress: {
                    required: "please enter your email address",
                    email: "please enter a valid email address"
                },
                phone: {
                    required: "Please enter a phone number"
                },
                company: {
                    required: "please enter company."
                }
            }
        });
    });

</script>
@endpush
