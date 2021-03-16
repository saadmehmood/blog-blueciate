@extends('layouts.blueciate-2')
@section('content')
        <?php
        $images = ['cd-1.jpg', 'cd-2.jpg', 'cd-3.jpg', 'cd-4.jpg'];
        ?>
        @include('blueciate.image-slider')

        <article id="services" class="hh-services">
            <div class="container">
                <section>
                    <aside class="g lg-twelfths md-one-whole" id="first">
                        <h3>Cloud Apps, & API</h3>
                        <p style="text-align: center; max-width: 1200px; background: #0A120D; color: white; font-size: 16px">
                            <b>CLOUD APPS, MICROSERVICES & API</b><br>
                            <b>Unlock the Power of Cloud</b>
                                <br>
                            Simplify cloud transformation to fuel innovation, agility and success
                        </p>
                        <p style="max-width: 1200px; font-size: 16px;color: #474747;">
                            Digital disruption with impacting business technology-enabled customers are empowered and highly in demanding.
                            Digital customers convert into digital businesses – BECOMING increasingly agile, elastic, responsive and efficient.
                            But traditional IT systems too often make digital transformation difficult.
                            CIOs and other senior IT decision makers progressively seek to augment and update traditional IT systems with a range of cloud services,
                            cloud delivery models, and cloud-native technologies. Blueciate customer focus on save time and deliver highly distinguished customer experience (CX) in order to win and serve customers
                            <br>
                            <b>Check out the webinar on</b> www.blueciate.com/webinars
                        </p>
                    </aside>

                </section>
            </div>
        </article>


        <br/>
        <article id="contact--details" class="block">
            <div class="container">
                <section style="background: grey; color: white">
                    <p style="text-align: center; max-width: 1200px;background: grey; color: white; font-size: 20px;">
                    What’s your challenge?<br>
                    Let’s solve it.<br>
                    <a href="mailto:info@blueciate.com">Email Us</a>
                    </p>

                </section>

            </div>
        </article>
@endsection
