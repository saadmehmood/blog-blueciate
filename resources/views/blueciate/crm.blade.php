
    @extends('layouts.blueciate-2')
    @section('content')
        <?php
        $images = ['crm-1.jpg', 'crm-2.jpg', 'crm-3.jpg', 'crm-4.png'];
        ?>
        @include('blueciate.image-slider')
        <article id="services" class="hh-services">
            <div class="container">
                <section>
                    <aside class="g lg-twelfths md-one-whole" id="first">
                        <h3>Engage customers and grow revenue</h3>
                        <p style="max-width: 1200px;">
                            Blueciate and its partner integrates and deliver’s you connected API’s to connect your business and sales experiences to accelerate the buying process and turn customers into advocates.

                        </p>
                        <h3>Work’s better</h3>
                        <p style="min-width: 1200px;">
                            <b>CRM + Work Management</b>
                            <br>
                            Blueciate help teams <b>get everything in one place</b>, work more collaboratively to <b>get more done</b>, and track and <b>improve performance</b>.
                        </p>
                        <h3>Connect with every customer</h3>
                        <p style="min-width: 1200px;">
                            Our sales solutions can help you engage customers through connected, customer-centric processes that improve experiences and maximize sales.
                        <ul>
                            <li>
                                Sales & Marketing
                            </li>
                            <li>
                                Productivity & Collaboration
                            </li>
                            <li>
                                Integrated Customer Experience
                            </li>
                            <li>
                                Business Analytics
                            </li>
                            <li>
                                Finance & Accounting
                            </li>
                            <li>
                                Human Resources
                            </li>
                            <li>
                                Low-Code Developer Platform
                            </li>
                        </ul>
                        </p>
                        <p style="max-width: 1200px;">
                            For further details <a href="/contact-us" class="buttonmore">Contuct us</a>.
                        </p>
                    </aside>

                </section>
            </div>
        </article>
        @include('layouts.blueciate.contact')
    @endsection
