<?php
$title = 'Project Outsourcing :- Blueciate Inc';
require_once 'head.php';
?>
<body>

<div class="mm-page mm-slideout">
    <div id="wrapper">
        <?php
        require_once 'header-2.php'
        ?>

    <!--            <%&#45;&#45;<section class="title text-left red">-->
    <!--                <div class="container">-->
    <!--                    <aside>-->
    <!--                        <div class="g md-one-whole">-->
    <!--                            <h1>Overview</h1>-->
    <!--                            <p>-->
    <!--                                Blueciate provides project-based development services for nearshore outsourcing-->
    <!--                                clients-->
    <!--                                out of United States. Blueciate’s project management organization – Project-->
    <!--                                Office-->
    <!--                                – develops a variety of solutions for different industry verticals that span across-->
    <!--                                mobile, web and desktop platforms. As a supplement to Client Own Team or a separate-->
    <!--                                offering, Project Office provides immediate production capacity with a professional-->
    <!--                                project management and a structured development process.-->

    <!--                            </p>-->
    <!--                        </div>-->
    <!--                    </aside>-->
    <!--                </div>-->
    <!--            </section>&#45;&#45;%>-->

    <aside class="featured-blog">
      <div class="container ">
        <div class="gw" style="font-size:15px;">
          <div class="g lg-one-whole">
            <aside class="feature-slider">
              <ul class="slides">
                <li>
                  <div class="featured-img ">
                    <div class="img-holder overlay">
                      <img src="../Images/about-1.jpg" alt="blog-featured" class="background-image">
                    </div>
                    <div class="inner align-vertical">
                    </div>
                  </div>
                </li>
                <li>
                  <div class="featured-img ">
                    <div class="img-holder overlay">
                      <img src="../Images/gallery-thumb9.jpg" alt="blog-featured" class="background-image">
                    </div>
                    <div class="inner align-vertical">
                    </div>
                  </div>

                </li>
                <li>
                  <div class="featured-img ">
                    <div class="img-holder overlay">
                      <img src="../Images/article_2.jpg" alt="blog-featured" class="background-image">
                    </div>
                    <div class="inner align-vertical">
                    </div>
                  </div>

                </li>
              </ul>
            </aside>
          </div>
        </div>
      </div>
    </aside>

    <article id="services" class="hh-services">
      <div class="container">
        <section>
          <aside class="g lg-four-twelfths md-one-whole" id="two" style="max-width: 400px;">
            <h3>Advantages of partnering with Blueciate </h3>
            <p style="font-size: 14px; line-height: 25px;">
              Blueciate Project Office will formalize your project requirements or business
              vision
              and turn them into a working product. Before commencing development, Blueciate
              holds
              a workStore session between clients and technical business consultants in order to
              ensure and facilitate knowledge transfer between stakeholders. Project office takes
              responsibility for deadlines and deliverables.

            </p>
          </aside>
          <aside class="g lg-four-twelfths">
            <div class="gw" style="font-size:15px;">
              <article class="g lg-one-whole widget md-one-half sm-one-whole">
                <span><i class="icon-lightbulb"></i></span>
                <aside>
                  <h4>ENTERPRISE SOLUTIONS </h4>
                  <p style="font-size: 14px; line-height: 25px;">
                  </p>
                </aside>
              </article>

              <article class="g lg-one-whole widget md-one-half sm-one-whole">
                <span><i class="icon-layers"></i></span>
                <aside>
                  <h4>ECOMMERCE & CMS SOLUTIONS </h4>
                  <p style="font-size: 14px; line-height: 25px;">
                  </p>
                </aside>
              </article>
            </div>
          </aside>
          <aside class="g lg-four-twelfths">
            <div class="gw" style="font-size:15px;">
              <article class="g lg-one-whole widget md-one-half sm-one-whole">
                <span><i class="icon-lifesaver"></i></span>
                <aside>
                  <h4>MOBILE SOLUTIONS </h4>
                  <p style="font-size: 14px; line-height: 25px;">
                  </p>
                </aside>
              </article>

              <article class="g lg-one-whole widget md-one-half sm-one-whole">
                <span><i class="icon-ribbon"></i></span>
                <aside>
                  <h4>CUSTOM SOLUTIONS </h4>
                  <p style="font-size: 14px; line-height: 25px;">
                  </p>
                </aside>
              </article>
            </div>
          </aside>
        </section>
      </div>
    </article>


    <br/>
    <article id="contact--details" class="block">
      <div class="container">
        <section>
          <div class="gw" style="font-size:15px;">
            <div class="g lg-three-twelfths">
<!--              <h4>Contact Us</h4>-->
              <h1>Get in touch today</h1>
              <p>
                BlueCiate Team is always here to listen you.
              </p>
            </div>
            <div class="g lg-one-twelfth">&nbsp;</div>
            <div class="g lg-two-twelfths">
              <aside>
                <span class="icon-phone"></span>
                <small><?php echo $phone ?> </small>
              </aside>
            </div>
            <div class="g lg-one-twelfth">&nbsp;</div>
            <div class="g lg-two-twelfths">
              <aside>
                <span class="icon-envelope"></span>
                <small><a href="mailto:info@blueciate.com?subject=feedback">info@blueciate.com</a></small>
              </aside>
            </div>
            <div class="g lg-one-twelfth">&nbsp;</div>
            <div class="g lg-two-twelfths">
              <aside>
                <span class="icon-map-pin"></span>
                <small><?php echo $address?> </small>
                <small><?php echo $addressLine2; ?></small>
              </aside>
            </div>
          </div>

        </section>

      </div>
    </article>
        <?php
        require_once 'footer.php';
        ?>
    </div>

</div>

<!-- jQuery -->

<script src="../js/jquery.js"></script>
<script src="../js/slick.min.js"></script>
<script src="../js/share.min.js"></script>
<script src="../js/classie.js"></script>
<script src="../js/elements.js"></script>
<script src="../js/jquery.animate-enhanced.min.js"></script>
<script src="../js/jquery.superslides.min.js"></script>
<script src="../js/jquery.easing.js"></script>
<script src="../js/hammer.min.js"></script>
<script src="../js/scriptmap.js"></script>
<script src="../js/gmap.js"></script>
<script src="../js/validate.min.js"></script>
<script src="../js/jquery.mmenu.min.all.js"></script>
<script src="../js/theater.min.js"></script>
<script src="../js/jquery.superslides.min.js"></script>
<script src="../js/jquery.flexslider-min.js"></script>
<script src="../js/imagelightbox.min.js"></script>

<!-- use this url for more information about share button plugin -->
<!-- https://github.com/carrot/share-button/wiki/Configuration-Options -->
<script src="../js/scripts.js"></script>

</body>


</html>
