<?php
$title = 'Application Integration :- Blueciate Inc';
include('head.php');
?>
<body>

<div class="mm-page mm-slideout">
    <div id="wrapper">
        <?php
        require_once 'header-2.php';
        $images = ['cam-1.png', 'cam-2.png', 'cam-3.png', 'cam-4.png'];
        include('image-slider.php');
        ?>

        <article id="services" class="hh-services">
            <div class="container">
                <section>
                    <aside class="g lg-twelfths md-one-whole" id="first">
                        <h3>Gain control of application performance</h3>
                        <p style="max-width: 1200px;">
                            Get end-to-end performance monitoring, accurate alerting and AI-powered root cause analysis for cloud applications.
                        </p>
                        <h3>Easily monitor cloud-native technologies</h3>
                        <p style="min-width: 1200px">
                            Support innovation and avoid issues impacting user experience, caused by micro service architectures and cloud-native technologies with out-of-the box monitoring of key resources.
                        </p>
                        <h3>Ensure cloud drives business performance</h3>
                        <p style="min-width: 1200px">
                            Compare and contrast technical and business performance metrics in real time to make informed investment decisions and drive in the confidence that cloud delivers business value.
                        </p>
                        <h3>Visualize end-to-end cloud application performance in real time</h3>
                        <p style="min-width: 1200px">
                            Go beyond basic infrastructure health metrics and understand the true performance of your cloud application. See clearly how every application component, line of code and important infrastructure resource is performing no matter whether they’re in public or private clouds. This includes Docker containers, Kubernetes, every microservice and key cloud-native technologies from Amazon AWS, Microsoft Azure, Red Hat OpenShift and Pivotal Cloud Foundry.
                        </p>
                        <h3>Network monitoring:<br>
                            Fix issues before they
                            become emergencies</h3>
                        <p style="min-width: 1200px">
                            PRTG Network Monitor ensures that you are notified before outages occur. It also increases network efficiency by tracking bandwidth and resource consumption.
                            <br>
                            The PRTG network monitoring software is easy to install and use. It supports remote management via any web browser or smart phone, various notifications methods and multiple location monitoring.
                            <br>
                            For further details <a href="/contact-us" class="buttonmore">Contuct us</a>
                        </p>
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
<!--                            <h4>Contact Us</h4>-->
                            <h1>Get in touch today</h1>
                            <p>
                                BlueCiate Team is always here to listen you.
                            </p>
                        </div>
                        <div class="g lg-one-twelfth">&nbsp;</div>
                        <div class="g lg-two-twelfths">
                            <aside>
                                <span class="icon-phone"></span>
                                <small><?php echo $phone;?></small>

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
                                <small><?php echo $address?></small>
                                <small><?php echo $addressLine2; ?></small>
                            </aside>
                        </div>
                    </div>

                </section>

            </div>
        </article>
        <?php
        include('footer.php');
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
