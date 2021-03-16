
@extends('layouts.blueciate-2')
@section('content')
        <?php
        $images = ['consulting-1.jpg', 'consulting-2.jpg', 'consulting-3.jpg'];
        ?>
        @include('blueciate.image-slider')

        <article id="services" class="hh-services">
            <div class="container">
                <section>
                    <aside class="g lg-twelfths md-one-whole" id="first">
                        <h3>Consulting</h3>
                        <p style="max-width: 1200px;">
                            Hospitality Consulting (XRM) is our Hospitality & Tourism industry focused consulting practice offering business,
                            digital and network management consulting services. Our Consultants are engaged in helping businesses to adapt their
                            business models and operational processes to the competitive conditions and customer requirements of the digitalized,
                            globalized economy with state-of-the-art communication and information technology. Our Enterprise Level Consulting Services
                            provide businesses across multiple industry verticals with state-of-the-art technology and right business systems to master
                            complexity, make quicker and smarter decisions and add value.
                            By having customer information on-hand in the form of wearable devices, and being able to
                            sense the location of customers, wearable devices present a unique opportunity to quickly
                            process an individual’s likely scenario (where they are shopping), understand their recent
                            purchase history, and combine this information with other data, such as their checking
                            account balance or current promotions on products they’re likely to buy. Simply put, these
                            features have the capability to revolutionize retail. Consider the following purchasing
                            scenario:
                        </p>
                        <p>
                        <ul>
                            <li>
                                <b>Proximity.</b> A customer is near a purchasing location, and their wearable device is processing their purchase history there, identifying any potential opportunities that the customer could benefit from.
                            </li>
                            <li>
                                <b>Shopping.</b> A wearable device can prompt a customer on their last purchase, show discounts that can be automatically applied, remind them of other products they’ve purchased in the past and direct them to where they can find products.
                            </li>
                            <li>
                                <b>Purchase.</b> Customer data shows and utilize any rewards or discounts they can take advantage of. Their purchase can happen using voice-enabled technology, and their information is already stored for an easy transaction. The security measures on both the machine and the wearable device help ensure a secure purchase, and afterwards, their data is automatically stored and categorized.
                            </li>
                            <li>
                                <b>Back-end.</b> Customer data is automatically stored and compiled with other customer data from the day, showing macro-trends in shopping. Financial institutions can compile customers’ personalized data into hyper-focused profiles that show what type of shopper the customer is, along with combining their purchase data into larger data sets across their entire customer base.
                            </li>
                        </ul>
                        </p>
                    </aside>

                </section>
            </div>
        </article>
        @include('layouts.blueciate.contact')
    @endsection
