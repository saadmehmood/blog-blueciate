@extends('layouts.blueciate-2')
@section('content')
        <?php
        $images = ['iot-1.jpg', 'iot-2.jpg', 'iot-3.jpg'];
        ?>
        @include('blueciate.image-slider')

        <article id="services" class="hh-services">
            <div class="container">
                <section>
                    <aside class="g lg-twelfths md-one-whole" id="first">
                        <h3>Internet of Things</h3>
                        <p style="text-align: center; max-width: 1200px; background: #0A120D; color: white">
                        INTERNET OF THINGS <br>
                        Technology of Things<br>
                            Answering to digital of intelligence to Internet of Things<br>
                                IoT business framework to help your organizations.
                        </p>
                        <p style="max-width: 1200px">
                            Blueciate believes that IoT can empower smart devices to action automatically, thus Connecting Things facilitates businesses accomplish.
                        <ul>
                            <li>
                                Small business models
                            </li>
                            <li>
                                Improved life style
                            </li>
                            <li>
                                Customer experience
                            </li>
                            <li>
                                Responsive value addition
                            </li>
                            <li>
                                Optimized systems
                            </li>
                        </ul>
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
