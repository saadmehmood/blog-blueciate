@extends('layouts.blueciate-2')
@section('content')

        <!-- main header -->
        <section class="block title text-left">
            <div class="container">
                <aside>
                    <div class="g md-one-whole">
                        <h1>Get in Touch</h1>
                        <p>
                            To exceed customer satisfaction by providing cost effective quality solutions through
                            continual improvement in process &amp; optimum utilization of resources.
                        </p>
                    </div>
                </aside>
            </div>
        </section>

        <section id="wrapper-contact">
            <div class="container">
                <div class="gw" style="font-size:15px;">
                    <aside class="g lg-six-twelfths form-section">
                        <section>
                            <h2>Get in <strong>touch</strong></h2>
                            <p>Contact <span>Our Company</span></p>
                            <p>
                                Contact us for any further questions, possible projects.and business partnerships
                            </p>
                            <?php
                            if ($mailStatus == 'success') {
                                ?>
                                <p style="color: #0ca129;">
                                    Thanks for reaching out <b>BlueCiate.inc</b>. Your message is received,
                                    <br>
                                    <b>BlueCiate.inc</b> team will contact back to you soon.
                                </p>
                                <?php
                            }
                            ?>

                            <aside class="lg-one-whole">
                                <form method="post" name="contact" id="ajax-contact" novalidate="novalidate">
                                    @csrf
                                    <div class="aspNetHidden">
                                        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                                               value="LEX8OfmsM3K1Tu2lvttEXgFgmEj2aZ9uTP6IDssM7QDAKcRgKjpwYG8R/Y5/RtuC0DftagL+y9n/gUl8QxjrjOCKq418FOpojHGuCq2oBrk=">
                                    </div>

                                    <div class="aspNetHidden">

                                        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR"
                                               value="0829F5A3">
                                        <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                                               value="bHBRD9qXET9auBccv8GwSrxTDd53B+4OlXQQ31hV7Ss/5tEGtMMKsrGcwBeQM0ZiNm6EdpduOwD0i8VchcY2VNzN0LLbBuvQ9d8lRcYmESSJb2VPw0+uw1Vw9cpH09lgr+8yc4TCyovrVJpt3+ks5pUNIGLh9usskAyxdV6hkOH8p1PexbmAENF62QPNt+bo">
                                    </div>
                                    <input name="fullname" type="text" id="fullname" placeholder="Full name"
                                           class="detail">
                                    <input name="email" type="text" id="email" placeholder="Your Email" class="detail">
                                    <textarea name="comments" id="comments" cols="30" rows="10" class="message"
                                              placeholder="Your message"></textarea>

                                    <input type="submit" name="btnSubmit" value="Send" id="btnSubmit">
                                </form>

                            </aside>
                        </section>
                    </aside>

                    <article id="contact-details">
                        <div class="g lg-six-twelfths ">
                            <aside class="box block color">
                                <h4>Contact Us</h4>
                                <h1>Let's have a chat!</h1>

                                <p>Telephone: <?php echo phone(); ?> </p>
                                <a href="mailto:info@blueciate.com?subject=feedback">info@blueciate.com</a>
                            </aside>

                            <aside class="box block">
                                <h1 data-color="#b39ddb" style="color: rgb(179, 157, 219);">Registered office</h1>
                                <p>
                                    <?php echo address() ?> Richardson TX 75080

                                </p>
                                <!--                  <h1 data-color="#b39ddb" style="color: rgb(179, 157, 219);">Visit Us</h1>-->
                                <!--                  Office: Blue Ciate Inc. 811 S. Central Expressway 434 Richardson TX 75080. <p></p>-->
                            </aside>

                            <aside class="box block">
                                <h2 data-color="#29b6f6" style="color: rgb(41, 182, 246);">Looking for a career?</h2>
                                <p>
                                    Apply today
                                    for an exciting new career at Blueciate.
                                </p>
                                <a href="/careers" class="buttonmore">Apply Now!</a>
                            </aside>
                        </div>
                    </article>
                    <!-- contact-details -->
                </div>
            </div>
        </section>
        @endsection
<!-- set form validation -->
@push('scripts')
<script>
    jQuery(document).ready(function ($) {
        $("#ajax-contact").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: "Please enter a correct name",
                    minlength: "Your bane seens a bit doesn't it?"
                },
                email: {
                    required: "please enter your email address",
                    email: "please enter a valid email address"
                },
                message: {
                    required: "please enter your message",
                    minlength: "Your message seems a bit short dosn't it? please enter at least 50 characters"
                }
            }
        });
    });

</script>
@endpush
