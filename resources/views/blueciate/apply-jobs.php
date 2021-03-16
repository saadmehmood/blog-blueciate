<?php
$title = 'Contact Us :- Blueciate Inc';
include('mail.php');
require_once 'head.php';
?>
<body>

<!-- Page Loader -->

<!-- End Page Loader -->

<div id="wrapper">
    <?php
    require_once 'header-2.php'
    ?>
    <section id="wrapper-contact">
        <div class="container">
            <div class="gw" style="font-size:15px;">
                <aside class="g lg-six-twelfths form-section">
                    <section>
                        <h2>Apply <strong>Now</strong></h2>
                        <p>Care for <span>your-growth?</span></p>
                        <p>
                            Work with inventive thought-leaders.
                        </p>

                        <aside class="lg-one-whole">
                            <div class="row">
                                <div class="loginform-wrapper col col-md-6">
                                    <div class="login-form" id="login-form">
                                        <div class="form-inline">
                                            <form id="form1" runat="server">
                                                <div class="col col-xs-12 form-group">

                                                    <label for="email">Applying For: </label>
                                                    <select id="drpJobs" runat="server" class="rqtextbox form-control"
                                                            Width="350px" name="drpJobs">
                                                        <option value="Select">Select</option>
                                                        <optionvalue
                                                        =".Net Lead Programmer Analyst">.Net Lead Programmer
                                                        Analyst</option>

                                                        <option value="Not in the list">Not in the list</option>

                                                    </select>
                                                </div>
                                                <div class="col col-xs-12 form-group">
                                                    <label for="txtName">Name: </label>
                                                    <input type="text" class="rqtextbox form-control"
                                                           style="width:100%;" id="txtName" runat="server"
                                                           name="txtName" required/>
                                                </div>
                                                <div class="col col-xs-12 form-group">
                                                    <label for="email">Email address: </label>
                                                    <input type="email" id="txtEmail" runat="server"
                                                           class="rqtextbox form-control" style="width:100%;"
                                                           name="txtEmail" required/>

                                                </div>
                                                <div class="col col-xs-12 form-group">
                                                    <label for="txtContact">Contact Nos.: </label>
                                                    <input type="text" id="txtContact" runat="server"
                                                           class="rqtextbox form-control" style="width:100%;"
                                                           name="txtContact" required/>
                                                </div>
                                                <div class="col col-xs-12 form-group">
                                                    <label for="fileResume">Resume: </label>

                                                    <input type="file" id="fileResume" runat="server"
                                                           class="rqtextbox form-control" style="width:100%;"
                                                           name="fileResume"/>
                                                </div>
                                                <div class="col col-sm-12 form-group">
                                                    <label for="txtComments">Tell us something about
                                                        yourself: </label><br/>
                                                    <textarea Class="form-control" style="width:100%;"
                                                              placeholder="Comment here" ID="txtComments" runat="server"
                                                              TextMode="MultiLine" name="txtComments"></textarea>
                                                </div>
                                                <div class="">
                                                    <label>

                                                        <input type="checkbox" checked/> Send me Job notifications
                                                    </label>
                                                </div>


                                                <div class="login-forget col col-xs-4">
                                                    <div>
                                                        <button ID="lnkSubmit" runat="server"
                                                                CssClass="btn btn-default theme-btn"
                                                                OnClick="lnkSubmit_Click">Submit <i
                                                                    class="arrow_right"></i></button>

                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </aside>
                    </section>
                </aside>

                <article id="contact-details">
                    <div class="g lg-six-twelfths ">
                        <div class="register-wrapper col col-md-3">
                            <div class="register">
                                <h3>Want to know more?</h3>
                                <p>Well, you can contact us anytime to know how to apply for this job or about our
                                    company. We would love to hear you.</p>
                                <a class="btn btn-default theme-btn" href="../Contact.aspx">Contact Now <i
                                            class="arrow_right"></i></a>
                            </div>
                        </div>

                        <div class="sideimg-wrapper col col-md-3">
                            <div class="sideimg">
                                <img src="../Images/44691106_s.jpg" alt class="img img-responsive"/>
                            </div>
                        </div>
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
<!-- set form validation -->


</body>
</html>
