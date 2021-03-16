@extends('layouts.blueciate-2')
@section('content')

    <?php
    $images = ['analytics-1.jpg', 'analytics-2.jpg', 'analytics-3.jpg', 'analytics-4.jpg', 'analytics-5.jpeg'];
    ?>
    @include('blueciate.image-slider')
    <article id="services" class="hh-services">
      <div class="container">
        <section>
          <aside class="g lg-twelfths md-one-whole" id="first">
              <h3>Dashboards & Analytics</h3>
              <p style="max-width: 1200px;">
                  Blueciate with certified developers can facilitate the opportunity to build applications that integrate the business logic, control logic, and the database layer with unprecedented performance using best practices. At Blueciate we ensure the machine learning and predictive analytics has the ability to analyze any data type and easily integrate native machine learning algorithms, stream analytics and create text analytics, analysis, mining, search and more. With spatial data processing businesses can leverage geospatial data to create new applications and solutions and dashboard for CRM-XRM based solutions using...
              </p>
              <p>
              <ul>
                  <li>
                      Descriptive Analytics
                  </li>
                  <li>
                      Diagnostic Analytics
                  </li>
                  <li>
                      Predictive Analytics
                  </li>
                  <li>
                      Prescriptive Analytics
                  </li>
              </ul>
              </p>
              <p style="max-width: 1200px;">
                  For further details <a href="{{ route('contact-us') }}" class="buttonmore">Contuct us</a>.
              </p>
          </aside>
        </section>
      </div>
    </article>
    @include('layouts.blueciate.contact')
@endsection
