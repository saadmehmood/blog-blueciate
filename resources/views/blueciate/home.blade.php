@extends('layouts.blueciate')
@push('styles')
    <style>
        .video-paragraph {
            width: 60%;
            height: auto;
            position: relative;
            z-index: 2;
        }


        @media screen and (max-width: 600px) {
            .sec-row-title {
                font-size: 24px;
            }
            #header .search {
                margin-top: 0px;
            }
            h1 {
                font-size: 1.5rem;
            }
            h4 {
                font-size: 1rem;
            }
            p {font-size: 12px}
        }
        /*.video-paragraph::after {*/
        /*    position: absolute;*/
        /*    width: 100%;*/
        /*    height: 100%;*/
        /*    top: 0;*/
        /*    left: 0;*/
        /*    content: '';*/
        /*    background-color: rgba(215, 224, 252, 0.5);*/
        /*    z-index: -1;*/
        /*}*/
    </style>
@endpush

@section('video')

    <div class="filter" style="width: 1351px;"></div>
    <video autoplay="" loop="" muted="" playsinline="" src="/blueciate/index_files/coverr-oculus-wtc-station-1572186359413.mp4"
           class="fillWidth fadeIn animated" style="width: 1351px;">

    </video>
@endsection
@section('video-content')
    <div class="row search">
    </div>
    <div class="row secondary-row">
        <div class="col-12 pt-5">
            <h5>
                It's all about
            </h5>
            <h1 class="sec-row-title " style="color: #03a9f4;">
                Connect, Collaborate, Simplify with SAP S/4HANA <br> and Remote working anywhere
            </h1>
            <h5>
                That’s why I BlueCiate..
            </h5>
            <div class="secondary-btn-search">
                <a class="button btn btn-success  get-started-btn p-3 mt-4" href="{{ route('consulting') }}">More Details</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
<!--quicklinks-->
<div id="quicklinks" class="d-none">
  <div class="container-fluid pl-5 pr-5">
    <div class="row">

      <div class="col-lg-3 text-center">
        <a href="http://xrm.blueciate.com/destinations"><h3>Destinations</h3></a>
        <img src="/blueciate/index_files/destinations.jpg" class="img-fluid ">
        <a class="cta-quicklinks mb-4" href="http://xrm.blueciate.com/destinations">Explore</a>
      </div>

      <div class="col-lg-3 text-center">
        <a href=""><h3>Rooms</h3></a>
        <img src="/blueciate/index_files/hotelroom.jpg" class="img-fluid">
        <a class="cta-quicklinks mb-4" href="">Explore</a>
      </div>

      <div class="col-lg-3 text-center">
        <a href=""><h3>Rent a Car</h3></a>
        <img src="/blueciate/index_files/car-rental.jpg" class="img-fluid">
        <a class="cta-quicklinks mb-4" href="">Explore</a>
      </div>

      <div class="col-lg-3 text-center">
        <a href="http://xrm.blueciate.com/featured-service-providers"><h3>Featured</h3></a>
        <img src="/blueciate/index_files/tour-guide.jpg" class="img-fluid">
        <a class="cta-quicklinks mb-4" href="http://xrm.blueciate.com/featured-service-providers">Explore</a>
      </div>

    </div>
  </div>
</div>
<!--quicklinks-->

<!--Rewards & Membership-->
<div class="jumbotron jumbotron-fluid mb-0 pb-0" id="rewards_sec" style="background-color: rgb(255, 255, 255);">
  <div class="container text-center">
    <img class="r_img" src="/blueciate/index_files/1426735.png">
{{--    <a href="{{ route('consulting') }}"><img class="" src="/blueciate/img/The best run.jpg"></a>--}}
    <h1 class="r_heading color-dark">SAP S/4HANA Finance & ORACLE EBS<br>Business Process Management Software (BPM)</h1>
    <h4 class="r_subheading color-dark">Business Process Management (BPM) software solution with Low-Code, Automation made Fast, Simple
        and makes it easier to build solutions for complex business problems and making digital more human in
        hyperactive drive.<a href="{{route('consulting')}}">more...</a> </h4>
  </div>
</div>

<!--Rewards & Membership-->
<div class="jumbotron jumbotron-fluid rewards_sec mb-0 pb-0 pt-3" id="rewards_sec">
    <div class="container text-center">
        <h1 class="r_heading color-dark">Relationship Management</h1>
        <h4 class="r_subheading color-dark">Your customer relationship management into the future with Blueciate XRM
            Cloud.</h4>
        <p class="r_lead color-dark">Blueciate Relationships and Interactions with Customers (XRM = B2C).</p>
    </div>
</div>
<div class="jumbotron jumbotron-fluid rewards_sec mb-0 pb-0 pt-3" id="rewards_sec">
    <div class="container text-center">
        <h4 class="r_subheading color-dark">Low-Code With Hyper-Automation To Unify Your Data in Digital Platform.</h4>
        <p class="r_lead color-dark">
            Robotic process automation (RPA) helps reduce human error by automating business process-related manual tasks, increasing speed and lowering the total cost of ownership by saving you time and effort. Adding intelligence, using  Intelligent Robotic Process Automation with automated decision making, which leads to additional savings through the reduction of analytical effort.
            To take advantage of AI, you have to move beyond proof of concept. Find out how to scale the impact of AI across your business for maximum value.
        </p>
    </div>
</div>
<div class="jumbotron jumbotron-fluid rewards_sec pb-0 pt-3" id="rewards_sec">
    <div class="container text-center">
        <h4 class="r_subheading color-dark">Automate your business and see progress in real time</h4>
        <p class="r_lead color-dark">
            Create zero-code automations for your business operations. Minimize the chances of human error and focus on the tasks that make a real impact.
            Intranet/Extranet, Collaboration platform, Document management, Dashboard.
            <br>
            The solution includes essential features to maintain and even increase productivity throughout the entire business ecosystem in a remote work environment. In addition, it comes with six predefined processes to enable users to immediately begin their daily work:
            Blueciate and our innovative technology partners focus in Remote Work and how to collaborate the most intuitively, powerful and affordable way humans, system collaborate and transform your current company (BPMS) Business operations into efficient remote work solutions. The platform includes essential features to maintain and even increase productivity throughout the entire business ecosystem, with task automation and traceability ensuring complete control of operations, which is key to a successful remote work strategy.
        </p>
    </div>
</div>

<!--     <div class="jumbotron jumbotron-fluid rewards_sec" id="rewards_sec">
    <div class="">
        <div class="row m-0 no-gutters">
            <div class="col-lg-6 pl-0">
                <img src="http://xrm.blueciate.com/website-assets/img/r-n-m.png" class="img-fluid rew_img">
            </div>
            <div class="col-lg-6 rewards">
                <h1 class="r_heading">Rewards & Membership</h1>
                <h4 class="r_subheading">OUR FAVORITE TRAVEL CREDIT CARDS FROM OUR PARTNERS.</h4>
                <p class="r_lead">Hotel membership REWARDS Travelling includes activities such as sightseeing and camping. Traveler who travel to explore and experience is now "Blueciate".</p>
            </div>
        </div>
    </div>
</div> -->

<!--Rewards & Membership-->

<!--BLOCK SECTION-->
<section class="six_box_sec" id="six_box_sec">
  <div class="">
    <div class="row no-gutters">
      <div class="col-12 col-lg-6 pr-0 pr-lg-1 services-block-four">
        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
          <div class="image">
            <img src="/blueciate/img/2.jpg" alt="">
            <div class="overlay-box">
              <div class="content">
                <div class="icon-box">
                  <span class="icon flaticon-statistics-1"></span>
                </div>
                <h1>Cloud & Digital World</h1>
              </div>
            </div>

            <div class="overlay-box-two">
              <div class="overlay-inner-two">
                <div class="content">
                  <div class="icon-box">
                    <span class="icon flaticon-statistics-1"></span>
                  </div>
                  <h1><a href="{{ route('cloud') }}">Cloud & Digital World</a></h1>
                  <a class="read-more" href="{{ route('cloud') }}">See More<span
                      class="fa fa-angle-double-right"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 pl-0 pl-lg-1 services-block-four">
        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
          <div class="image">
            <img src="/blueciate/img/trip-cover.jpg" alt="">
            <div class="overlay-box">
              <div class="content">
                <div class="icon-box">
                  <span class="icon flaticon-statistics-1"></span>
                </div>
                <h1>Applications</h1>
              </div>
            </div>

            <div class="overlay-box-two">
              <div class="overlay-inner-two">
                <div class="content">
                  <div class="icon-box">
                    <span class="icon flaticon-statistics-1"></span>
                  </div>
                  <h1><a href="{{route('application-integration')}}">Applications</a></h1>
                  <a class="read-more" href="{{ route('application-integration') }}">See More<span
                      class="fa fa-angle-double-right"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row no-gutters mt-2">
      <div class="col-12 col-lg-6 pr-0 pr-lg-1 services-block-four">
        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
          <div class="image">
            <img src="./blueciate/img/about-1.jpg" alt="">
            <div class="overlay-box">
              <div class="content">
                <div class="icon-box">
                  <span class="icon flaticon-statistics-1"></span>
                </div>
                <h1>Remote Work</h1>
              </div>
            </div>

            <div class="overlay-box-two">
              <div class="overlay-inner-two">
                <div class="content">
                  <div class="icon-box">
                    <span class="icon flaticon-statistics-1"></span>
                  </div>
                  <h1><a href="{{ route('remote-work') }}">Remote Work</a></h1>
                  <a class="read-more" href="{{ route('remote-work') }}">See More<span
                      class="fa fa-angle-double-right"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 pl-0 pl-lg-1 services-block-four">
        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
          <div class="image">
            <img src="/blueciate/img/3.jpeg" alt="">
            <div class="overlay-box">
              <div class="content">
                <div class="icon-box">
                  <span class="icon flaticon-statistics-1"></span>
                </div>
                <h1>Analytics</h1>
              </div>
            </div>

            <div class="overlay-box-two">
              <div class="overlay-inner-two">
                <div class="content">
                  <div class="icon-box">
                    <span class="icon flaticon-statistics-1"></span>
                  </div>
                  <h1><a href="{{ route('website-development') }}">Analytics</a></h1>

                  <a class="read-more" href="{{ route('website-development') }}">See More<span
                      class="fa fa-angle-double-right"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row no-gutters mt-2">
      <div class="col-12 col-lg-6 pr-0 pr-lg-1 services-block-four">
        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
          <div class="image">
            <img src="/blueciate/img/5.jpg" alt="">
            <div class="overlay-box">
              <div class="content">
                <div class="icon-box">
                  <span class="icon flaticon-statistics-1"></span>
                </div>
                <h1>Consulting</h1>
              </div>
            </div>

            <div class="overlay-box-two">
              <div class="overlay-inner-two">
                <div class="content">
                  <div class="icon-box">
                    <span class="icon flaticon-statistics-1"></span>
                  </div>
                  <h1><a href="{{ route('consulting') }}">Consulting</a></h1>
                  <div class="text">Simplify, Connect, Collaborate with S/4HANA..</div>
                  <a class="read-more" href="{{ route('consulting') }}">See More<span
                      class="fa fa-angle-double-right"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 pl-0 pl-lg-1 services-block-four">
        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
             style="visibility: visible;animation-duration: 1500ms;animation-delay: 0ms;/* animation-name: fadeInLeft; */">
          <div class="image">
            <img src="/blueciate/img/e1.jpg" alt="">
            <div class="overlay-box">
              <div class="content">
                <div class="icon-box">
                  <span class="icon flaticon-statistics-1"></span>
                </div>
                <h1>Business Center</h1>
              </div>
            </div>

            <div class="overlay-box-two">
              <div class="overlay-inner-two">
                <div class="content">
                  <div class="icon-box">
                    <span class="icon flaticon-statistics-1"></span>
                  </div>
                  <h1><a href="{{ route('small-business') }}">Business Center</a></h1>
                  <a class="read-more" href="{{ route('small-business') }}">See More<span
                      class="fa fa-angle-double-right"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!--BLOCK SECTION-->

<!-- TRM SECTION -->
<section id="trm_sec" class="trm_sec my-3">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-8 col-12">
        <div class="section-heading">
          <span>Blueciate XRM Software is a New Business 2 Business</span>
          <h3>Business & Customer Relationship Management</h3>
          <div class="section-heading-line-left"></div>
        </div>
        <div class="text-content-big mt-4">
          <p>Business Process identifies the needs of existing and potential customers and ensures that appropriate
            services are developed to meet those needs. Business Relationship Management <strong>(BRM)</strong> is a
            comprehensive software available within the Blueciate XRM software. It manages all the company's
            relationships and interactions within the Business and helps you stay connected to everyone, streamline
            processes, internal communications and ultimately improve both profitability and quality of service. The
            Scope of the BRM includes a Customer Relationship Management <strong>(CRM)</strong>.</p>
        </div>
        <div class="mt-2">
          <ul class="primary-list">
            <li><i class="fa fa-check-square"></i>Production & Quality Assurance</li>
            <li><i class="fa fa-check-square"></i>Reporting & Financials</li>
            <li><i class="fa fa-check-square"></i>Business 2 Business B2B, Business 2 Customer</li>
            <li><i class="fa fa-check-square"></i>Sales & Purchasing</li>
          </ul>
        </div>
        <div class="mt-5"><a href="{{ route('remote-work') }}" class="primary-button button-md">Remote Work</a></div>
      </div>
      <div class="col-md-4 col-12"></div>
    </div>
  </div>
</section>


<!--goworld-->
<div id="go-world" class="d-none">
  <div class="container">
    <div class="row ">

      <div class="col-lg-7">
        <img src="/blueciate/index_files/map-1.jpg" class="img-fluid">
      </div>
      <div class="col-lg-5 mt-4">
        <h3>Go World with Blueciate</h3>
        <p>
          I am blueciate, do you? by blueciate. 'Blueciate - Keep<br>
          Traveling for every toursit adventure.

        </p>
        <h5 class="mt-4 plan-ticket">Plan to book tickets</h5>
        <hr>
        <div class="mt-4 go-world-tags ">
          <a href="http://xrm.blueciate.com/">Search</a>
          <a href="http://xrm.blueciate.com/">Shop</a>
          <a href="http://xrm.blueciate.com/">Guide</a>
          <a href="http://xrm.blueciate.com/">Reward</a>
          <a href="http://xrm.blueciate.com/">Analyse</a>
        </div>
      </div>

    </div>
  </div>
</div>
<!--goworld-->

<!--responsive-tourist-guide-->
<div id="responsive-tourist-guide" class="d-none">
  <div class="container">
    <div class="row responsive-tguide-bg">
      <div class="col-lg-5 offset-lg-7 column-rtg">
        <h1>Responsive Internet<br>Tourist Guide?</h1>
        <p>
          Tooryst Reseach based SURVEYS/RATINGS, cultural and geoghrphical explore world tools using Internet
          of Things. Travel Software for Smart Active Life Learning and Expereince for Real People &amp; Real
          World. Use Tooryst Surveys to explore locally and globally. Each year tooryst ranks the world based
          on a variety categories ranging from the beautiful destinations on the planet to the most visited to
          tour.
        </p>
        <h6 class="mt-2">Check next Tooryst Surveyed Destination 2019.</h6>
      </div>
    </div>
  </div>
</div>
<!--responsive-tourist-guide-->

<!--REWARDS & MEMBERSHIP-->
<div id="rewards" class="d-none">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-5">
        <img src="/blueciate/index_files/r-n-m.png" class="img-fluid">
      </div>
      <div class="col-lg-6 p-3 rewards">
        <h1 class="p-3">Rewards &amp; Membership</h1>

        <p class="p-3  hotel-memebership">
          Hotel membership REWARDS Travelling includes activities such as sightseeing and camping. Traveler
          who travel to explore and experience is now "tooryst".
        </p>
        <p class=" mt-2 our-favorite-travel  col-8">
          <b>OUR FAVORITE TRAVEL CREDIT CARDS FROM OUR PARTNERS. </b>
        </p>
        <p class="p-3 chase-sap">
          Chase Sapphire Preferred:registered: Card Capital One:registered: Spark:registered: Miles for
          Business Ink Business Preferred℠ Credit
          Card Enjoy What You’ve Earned — For Life. Lifetime Silver Elite (250 Lifetime Nights + 5 Years Elite
          Status) Lifetime Gold Elite 400 Lifetime Nights + 7 Years Gold Elite Status or Higher Lifetime
          Platinum Elite 600 Lifetime Nights + 10 Years Platinum Elite Status or Higher.
        </p>
        <p class="pl-3 chase-sap">
          Make every journey even more rewarding with Tooryst.
        </p>
      </div>
    </div>
  </div>
</div>
<!--REWARDS & MEMBERSHIP-->

<!--TRIP FINDER-->
<div id="trip-finder" class="d-none" style="position: relative;">
  <div class="container-fluid">
    <div class="row">

      <div class="overlay"></div>

      <div class="col-12 bg-danger image-cover">                 <!--  mt-5 -->
        <div class="col-lg-6 offset-lg-3 p-5 mt-5 mb-5 trip-container">
          <div class="tf-container  ">
            <h1 class="text-center heading-trip">Trip Finder by tooryst</h1>
            <p class="p-4 under-travel">
              Under The Travel Purpose Program, travel to learn and expereince and we believe putting
              travel
              rewards to good use. Blueciate's Tooryst Organises Trip Finder in Meaningfull Moments to Go
              Kashmir 2019. For more details, contact Travel Specialist. Our Scheduled Trips or Private
              Travel
              packages are ready to book and serve.
            </p>
          </div>

        </div>

        <h2 class="dates text-center under-travel-date ">03 June 2019 - 28 June 2019</h2>
      </div>


    </div>

  </div>
</div>
<!--TRIP FINDER-->

<div id="lifestyle" class="d-none">
  <div class="container">
    <div class="row row-flex">

      <div class="col-lg-4">

        <div class="row justify-content-center  bgg-life" style="width: 96%;margin-left: 3%">
          <div class="col-12 p-3">

            <div class=" p-3 text-left image-title-container" style="">


              <span class="image-title">Lifestyle</span>

            </div>
          </div>


          <div class="col-12 p-3 pt-4">
            <div class="image-logo d-flex justify-content-center" style="height:250px">
              <img src="/blueciate/index_files/lifestyle.jpg" alt="" class="img-fluid ">
            </div>
          </div>

          <div class="col-12  p-3">
            <div class="image-paragraph">

              <p>
                Tooryst Reseach based SURVEYS/RATINGS, cultural and geoghrphical explore world tools
                using Internet of Things. Travel Software for Smart Active Life Learning and Expereince
                for Real People &amp; Real World. Use Tooryst Surveys to explore locally and globally. Each
                year tooryst ranks the world based on a variety categories ranging from the beautiful
                destinations on the planet to the most visited to tour.
              </p>

              <p>
                Tooryst Reseach based SURVEYS/RATINGS, cultural and geoghrphical explore world tools
                using Internet of Things. Travel Software for Smart Active Life Learning and Expereince
                for Real People &amp; Real World. Use Tooryst Surveys to explore locally and globally. Each
                year tooryst ranks the world based on a variety categories ranging from the beautiful
                destinations on the planet to the most visited to tour.
              </p>
              <p>
                One of the most critical factors to
                Kashmir
                Travel Technology
                highlight any company in this industry is
                the language you choose to present your
                Blueciate Tooryst CRM
                content, since one of the tourists’s
                demands is the comfort of visiting new
                Host Guest Relationship Reward
                places without abandoning their mother
                tongue. Yet it is not enough to merely
                Top Travel Rewards Benefits of
                provide the contents in their language
                Hospitality and Finance Leaders
                when the user decides to travel: The
                most respected companies in the
                The Destination Portal using
                Tourism and Lifestyle Trends industry
                Internet of Things
                know that the secret is to be with the
                users, speaking their language, during
                Heaven on Earth
                The Search Engine for Travel
                the entire tourism experience.
              </p>
            </div>

          </div>


        </div>

      </div>

      <div class="col-lg-4">

        <div class="row justify-content-center  bgg-life" style="width: 96%;margin-left: 3%">
          <div class="col-12 p-3">

            <div class=" p-3 text-left image-title-container" style="">


              <span class="image-title">Technology</span>

            </div>
          </div>


          <div class="col-12 p-3 pt-4">
            <div class="image-logo d-flex justify-content-center" style="height:250px">
              <img src="/blueciate/index_files/technology.jpg" alt="" class="img-fluid ">
            </div>
          </div>

          <div class="col-12  p-3">
            <div class="image-paragraph">

              <p>
                Tooryst Reseach based SURVEYS/RATINGS, cultural and geoghrphical explore world tools
                using Internet of Things. Travel Software for Smart Active Life Learning and Expereince
                for Real People &amp; Real World. Use Tooryst Surveys to explore locally and globally and the overall
                value we could get from
                readers maximize their travel redeeming them, factoring in variables. Each
                year tooryst ranks the world based on a variety categories ranging from the beautiful
                destinations on the planet to the most visited to tour.
              </p>

              <p style="font-weight: bold">

                <i class="fa fa-check mr-3"></i> Technlogy for Smart Active Life
                using Analytics
              </p>

              <p style="font-weight: bold">

                <i class="fa fa-check mr-3"></i> Technlogy for Smart Active Life
                using Analytics
              </p>

              <p style="font-weight: bold">

                <i class="fa fa-check mr-3"></i> Technlogy for Smart Active Life
                using Analytics
              </p>

              <p style="font-weight: bold">

                <i class="fa fa-check mr-3"></i> Technlogy for Smart Active Life
                using Analytics
              </p>
              <p style="font-weight: bold">

                <i class="fa fa-check mr-3"></i> Technlogy for Smart Active Life
                using Analytics
              </p>

              <p style="font-weight: bold">

                <i class="fa fa-check mr-3"></i> Technlogy for Smart Active Life
                using Analytics
              </p>

              <p style="font-weight: bold">

                <i class="fa fa-check mr-3"></i> Technlogy for Smart Active Life
                using Analytics
              </p>

            </div>

          </div>


        </div>

      </div>

      <div class="col-lg-4">


        <div class="row justify-content-center  bgg-life" style="width: 96%;margin-left: 3%">
          <div class="col-12 p-3">

            <div class=" p-3 text-left image-title-container" style="">


              <span class="image-title">Places</span>

            </div>
          </div>


          <div class="col-12 p-3 pt-4">
            <div class="image-logo d-flex justify-content-center" style="height:250px">
              <img src="/blueciate/index_files/footer-map-2.jpeg" alt="" class="img-fluid ">
            </div>
          </div>

          <div class="col-12  p-3">
            <div class="image-paragraph">

              <p>
                Tooryst Reseach based SURVEYS/RATINGS, cultural and geoghrphical explore world tools
                using Internet of Things.
              </p>

            </div>
          </div>

          <div class="col-12 p-3 ">
            <div class="image-logo d-flex justify-content-center" style="height:250px">
              <img src="/blueciate/index_files/hotelroom.jpg" alt="" class="img-fluid ">
            </div>
          </div>


          <div class="col-12 bgg-life p-3 pb-4">
            <div class="image-paragraph">
              <h3 class="col-12">Pakistan Tourism</h3>
              <p class="col-12">
                Dept of Tourism, Govt of Pakistan
                facilitates 2019 tourist reception center in Kashmir.
              </p>

            </div>

          </div>


          <div class="col-12 p-3 ">
            <div class="image-logo d-flex justify-content-center" style="height:250px">
              <img src="/blueciate/index_files/kashmir.jpg" alt="" class="img-fluid ">
            </div>
          </div>


          <div class="col-11 bgg-life p-3 pb-4">
            <div class="image-paragraph">
              <h3 class="col-12">Heaven on Earth</h3>
              <p class="col-12">
                Go Kashmir 2019, four weeks plan,
                choose your plans
              </p>

            </div>
          </div>


        </div>


      </div>
    </div>

  </div>
</div>

@endsection
