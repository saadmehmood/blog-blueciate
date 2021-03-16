<?php
$title = 'Contact Us :- Blueciate Inc';
include('mail.php');
require_once 'head.php';
?>
<body>
<div class="mm-page mm-slideout">
    <div id="wrapper">
        <?php
        require_once 'header-2.php'
        ?>

        <!-- main header -->
        <section class="block title text-left">
            <div class="container">
                <aside>
                    <div class="g md-one-whole">
                        <h1>Apply Now</h1>
                        <p>Care for <span>your-growth?</span></p>

                        <p>
                            Work with inventive thought-leaders.
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
                            <h2>Apply <strong>Now</strong></h2>
                            <p>Join <span>Our Company</span></p>
                            <p>
                                Join us for better career.
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
                                    <input name="fullname" type="text" id="fullname" placeholder="Full name" class="detail" required>
                                    <input name="email" type="email" id="email" placeholder="Your Email" class="detail" required>
                                    <input name="number" type="number" id="number" placeholder="Contact Number" class="detail" required>
                                    <textarea name="comments" id="comments" cols="30" rows="10" class="message" placeholder="Tell us something about yourself"></textarea>

                                    <input type="submit" name="btnSubmit" value="Send" id="btnSubmit">
                                </form>

                            </aside>
                        </section>
                    </aside>

                    <article id="contact-details">
                        <div class="g lg-six-twelfths ">
                            <aside class="box block color">
                                <h4>Want to know more?</h4>
                                <h1>Let's have a chat!</h1>

                                <p>Telephone: +1-408-656-1932 </p>
                                <a href="mailto:info@blueciate.com?subject=feedback">info@blueciate.com</a>
                            </aside>

                            <aside class="box block">
                                <h1 data-color="#b39ddb" style="color: rgb(179, 157, 219);">Registered office</h1>
                                <p>
                                    <?php echo $address ?> Richardson TX 75080

                                </p>
                                <!--                  <h1 data-color="#b39ddb" style="color: rgb(179, 157, 219);">Visit Us</h1>-->
                                <!--                  Office: Blue Ciate Inc. 811 S. Central Expressway 434 Richardson TX 75080. <p></p>-->
                            </aside>
<!---->
<!--                            <aside class="box block">-->
<!--                                <h2 data-color="#29b6f6" style="color: rgb(41, 182, 246);">Looking for a career?</h2>-->
<!--                                <p>-->
<!--                                    Apply today-->
<!--                                    for an exciting new career at Blueciate.-->
<!--                                </p>-->
<!--                                <a href="/careers" class="buttonmore">Apply Now!</a>-->
<!--                            </aside>-->
                        </div>
                    </article>
                    <!-- contact-details -->
                </div>
            </div>
        </section>


        <?php
        require_once 'footer.php';
        ?>


    </div>
</div>
<!-- End Page Loader -->


<!-- jQuery -->

<script src="./files/jquery.js.download"></script>
<script src="./files/slick.min.js.download"></script>
<script src="./files/share.min.js.download"></script>
<script src="./files/classie.js.download"></script>
<script src="./files/elements.js.download"></script>
<script src="./files/jquery.animate-enhanced.min.js.download"></script>
<script src="./files/jquery.superslides.min.js.download"></script>
<script src="./files/jquery.easing.js.download"></script>
<script src="./files/hammer.min.js.download"></script>
<script src="./files/scriptmap.js.download"></script>
<script src="./files/main.js.download"></script>
<script src="./files/gmap.js.download"></script>
<script src="./files/validate.min.js.download"></script>
<script src="./files/jquery.mmenu.min.all.js.download"></script>
<script src="./files/theater.min.js.download"></script>
<script src="./files/jquery.superslides.min.js.download"></script>
<script src="./files/jquery.flexslider-min.js.download"></script>
<script src="./files/imagelightbox.min.js.download"></script>

<!-- use this url for more information about share button plugin -->
<!-- https://github.com/carrot/share-button/wiki/Configuration-Options -->
<script src="./files/scripts.js.download"></script>
<!-- set form validation -->
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


<div id="mm-blocker" class="mm-slideout"></div>
</body>
</html>