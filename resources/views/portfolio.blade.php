@extends('layouts.app')




@section('content')

    <!--SITE TITLE OR LOGO-->
      <div id="innerWrapper">
        <div id="title-area">
          <h1 class="site-title" data-content-field="site-title">
            <a href="{{route('index')}}">

              <!--
                             <img class="site-title-image" src="http://static1.squarespace.com/static/5a02644d6957da5329eaba82/t/5a0265acec212d79d8665837/1512778055770/?format=1500w" alt="Satoshi Capital" />
              -->
            </a>
          </h1>



          <text size="20px">
            <strong>
              <center><img src="{{ asset('images/inevstmentproducts-header.png') }}" hieght="300px" width="300px"> </center>
            </strong>
          </text>

          <br>
          <br>

          <text size="20px">
            <h2>
              Automated Strategies
            </h2>
            Satoshi Capital employs a variety of automated strategies to trade digital assets. These strategies are optimized with machine learning algorithms, which allow us to identify and adapt to trends over time and maximize our profitability.
          </text>


          <br>
          <br>



          <text size="20px">
            <h2>
              ICO Strategy
            </h2>
            Satoshi Capital’s proprietary ICO strategy examines an array of factors to quantitatively analyze the quality of new ICO opportunities. Our team then evaluates these results and chooses the projects we believe will be most impactful, utilized and profitable.
          </text>

          <!--SITE contact info-->
          <div class="contact-info">



            <p class="site-location">
              <a href="//maps.google.com/maps?q=,">

              </a>
            </p>







          </div>

          <div class="site-desc">
            <p><em>Satoshi Capital</em>&nbsp;is an investment firm focused exclusively on ventures, tokens,&nbsp;and projects related to blockchain tech, digital currency, and crypto assets.</p>
          </div>

        </div>


        <!--CONTENT INJECTION POINT-->
        <section id="content">
          <div class="main-content-wrapper cf" data-content-field="main-content">
            <!-- CATEGORY NAV -->


          </div>
        </section>
      </div>
@endsection