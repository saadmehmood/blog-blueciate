<?php
$title = 'Contact Us :- Blueciate Inc';
include ('mail.php');
require_once 'head.php';
?>
<body>
<div class="mm-page mm-slideout">
  <div id="wrapper">
      <?php
      require_once 'header-2.php'
      ?>
      <section class="block title text-left">
        <div class="container">
          <aside>
            <div class="g md-one-whole">
              <h1>Support</h1>
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
                <h2>Support </h2>
                <p>Contact <span>Our Company</span></p>
<!--                <p>-->
<!--                  Contact us for any further questions, possible projects.and business partnerships-->
<!--                </p>-->

                <aside class="lg-one-whole">
                  <form method="post" name="contact" id="ajax-contact" novalidate="novalidate">

                    <div class="aspNetHidden">
                      <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                             value="uQC5AJPdnLdv1/KqTRGRUeVQhAsz0V//ElSKt3B/UuOr+/TyPD84aQgIv7O5faOLBdTLHiuY5g6q2Q4xwkcJyX6gytAMQLsp+BrTMyJdNT4=">
                    </div>

                    <div class="aspNetHidden">

                      <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="5C437075">
                      <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                             value="4HaHsEhWQbsBfPULEMbec2KV4OvRiP7ghRXboephVvFWFB7InSWYEFyZ8eXt8RsmMtmxf4BpkH3F5x7cpZ7jbMtUpsHKZrLwcwpwlQ8AaVu+KD3reTbXJK8xWK/2rOpN+XFBY3gDZo0g9i9CNZk8vHlUTLPC9R9vpAwZ1uHvbMjqHSo2y4dHeYTrdpgz7SAK">
                    </div>
                    <input name="fullname" type="text" id="fullname" placeholder="Full name" class="detail">
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
<!--                  <h4>Contact Us</h4>-->
                  <h1>Let's have a chat!</h1>

                  <p>T: <?php echo $phone?> </p>
                  <p>F: <?php echo $fax?> </p>

                </aside>

                <aside class="box block">
                  <h2 data-color="#b39ddb" style="color: rgb(179, 157, 219);">Email </h2>

                  <a href="mailto:info@blueciate.com?subject=feedback">info@blueciate.com</a>
                  <p></p>
                </aside>


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