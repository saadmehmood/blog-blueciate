
        <aside class="featured-blog">
            <div class="container ">
                <div class="gw" style="font-size:15px;">
                    <div class="g lg-one-whole">
                        <aside class="feature-slider">
                            <ul class="slides">
                                <?php
                                foreach ($images as $image) {
                                    ?>
                                    <li>
                                        <div class="featured-img ">
                                            <div class="img-holder overlay">
                                                <img src="/blueciate/img/<?php echo $image;?>" alt="blog-featured"
                                                     class="background-image">
                                            </div>

                                        </div>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </aside>
