
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
                            At Blueciate , we have
                            built a wide range of development technical expertise. From User
                            Experience frameworks such as FIORI and UI5 to backend applications development in ABAP
                            and cloud technologies on the SAP Business Technology Platform, our technical expertise is
                            comprehensive.
                            <br>
                            Our experts are well versed with Scrum and other Agile methodologies. This ensures a rapid,
                            communicative and iterative approach to delivering projects with constant user engagement.
                            We combine this technical expertise with our traditional strength in SAP S/4HANA application
                            backed by very strong real world business process experience. Our engineers bring excellent
                            communication and proactive management skills to help our customers realise their experience
                            driven transformation journeys.
                            <br>
                            We have decades of experience managing and enabling ERP, BI, Mobile, and Cloud data to
                            analytic experience and to help users make better business decisions.  We have deep
                            expertise  in the SAP suite of analytical tools ranging from ECC, BW, BOBJ. BPC, Data
                            Warehouse Cloud (DWC),
                            Embedded Analytics, SAP Analytics Cloud (SAC), UI5, and Fiori.
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
