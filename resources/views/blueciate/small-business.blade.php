@extends('layouts.blueciate-2')
@section('content')

    <?php
        $images = ['small-business-1.jpg', 'small-business-2.jpg', 'small-business-3.jpg'];
        ?>
    @include('blueciate.image-slider')

        <article id="services" class="hh-services">
            <div class="container">
                <section>
                    <aside class="g lg-twelfths md-one-whole" id="first">
                        <h3>Small & Mid Size Business</h3>
                        <p style="max-width: 1200px;">
                            Small to medium business solutions and services for hospitality and tourism. Ciate SB make the right technology investments and IT decisions so you can focus on growing your business.
                            <br>
                            The tourism industry has evolved greatly in recent years. Today’s customers want travel technology at their fingertips, and businesses are working harder to meet that need.
                            <br>
                            <br>
                            With a variety of cloud computing solutions, including hybrid cloud, front office, back office, security and more, we have the programs your business needs to succeed. We’ll help you protect your bottom line by designing a scalable end-to-end solution that enables you to serve your customers better.
                            <br>
                            Cloud-based technology solutions for tourism Insight is a leading provider of cloud-based solutions for the travel and tourism industry. Find out how we can help your business
                            <a href="http://www.tooryst.com/">here</a> .
                        </p>
                        <img src="/blueciate/img/small-business.jpg"/>
                    </aside>

                </section>
            </div>
        </article>
@include('layouts.blueciate.contact')
@endsection
