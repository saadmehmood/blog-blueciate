@extends('layouts.blueciate-2')
@section('content')
        <?php
        $images = ['ai-1.jpg', 'ai-2.jpg', 'ai-3.jpeg', 'ai-4.jpg'];
        ?>
        @include('blueciate.image-slider')

        <article id="services" class="hh-services">
            <div class="container">
                <section>
                    <aside class="g lg-twelfths md-one-whole" id="first">
                        <h3>Business with Achieve Artificial Intelligence</h3>
                        <p style="max-width: 1200px;">
                            AI is empowering employees and driving material performance improvements.
                            <br>
                            And it’s happening today. Business Results driven by primacy business challenges, Achieve AI is Ciate’s distinctive, all-inclusive AI service portfolio. Connecting your passion go further and achieve more, Achieve AI takes you to deliver AI at measure for thorough going control.
                        </p>
                        <p style="max-width: 1200px; text-align: center;">
                            <b>
                            Now, more than ever,
                            <br>
                            Software needs to work perfectly
                            <br>
                            Monitor, optimize, and scale every app, in any cloud.
                            <br>
                            AWS monitoring
                            <br>
                            Engineered for cloud native and hybrid environments — simplifies complexity using AI and automation.
                            </b>
                        </p>
                    </aside>

                </section>
            </div>
        </article>
        @include('layouts.blueciate.contact')
@endsection
