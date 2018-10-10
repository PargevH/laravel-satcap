@extends('layouts.app')




@section('content')

    <!--SITE TITLE OR LOGO-->
    <div id="innerWrapper">
        <div id="title-area">
            <h1 class="site-title" data-content-field="site-title">
                <a href="{{route('login')}}">

                    <!--
                                   <img class="site-title-image" src="http://static1.squarespace.com/static/5a02644d6957da5329eaba82/t/5a0265acec212d79d8665837/1512778055770/?format=1500w" alt="Satoshi Capital" />
                    -->

                </a>
            </h1>
            <text size="20px">
                <strong>
                    <center><img src="{{ asset('images/founders-heading.png') }}" hieght="170px" width="170px"> </center>
                </strong>
            </text>
            <!--SITE contact info-->
            <div class="contact-info">
                <p class="site-location">
                    <a href="http://maps.google.com/maps?q=,">
                    </a>
                </p>
            </div>
            <div class="site-desc"><p><em>Satoshi Capital</em>&nbsp;is an investment firm focused exclusively on ventures, tokens,&nbsp;and projects related to blockchain tech, digital currency, and crypto assets.</p></div>
        </div>
        <!--CONTENT INJECTION POINT-->
        <section id="content">
            <div class="main-content-wrapper cf" data-content-field="main-content">
                <!-- CATEGORY NAV -->
                <center>
                    <img src="{{ asset('images/john-headshot2.png') }}" height="150px" width="150px">
                </center>
                <center>
                    <h2>John Zay</h2>
                    <h3><font color="white">Managing Partner, Director of Quantitative Development</font></h3>
                </center>
                <p><font color="white">John Zay is a Managing Partner and Director of Quantitative Development at Satoshi Capital. He is finishing his B.B.A in Finance at the University of Georgia and has been engaged in digital asset trading since 2013. John has spent the past nine years gaining knowledge regarding aspects of the finance industry. John’s interest in digital assets led him to study Computer Science and develop a variety of quantitative trading algorithms. At Satoshi Capital, John is in charge of strategy development and guides our core development team in the creation of our trading algorithms.</font></p>

                <br>
                <br>
                <br>

                <center>
                    <img src="{{ asset('images/srikar-headshot2.png') }}" height="150px" width="150px">
                </center>
                <center>
                    <h2>Srikar Komanduri
                    </h2>
                    <h3><font color="white">Managing Partner, Director of Research</font></h3>
                </center>
                <p><font color="white">Srikar Komanduri is a Managing Partner and Director of Research at Satoshi Capital. He is currently finishing his B.B.A. in Finance and B.S. in Statistics at the University of Georgia. Srikar has gained tangible knowledge and experience in the financial sector over the past six years, including time spent at the London School of Economics and working for an investment firm in Shanghai. As a specialist in their Digital Assets department, he primarily focused on token economics, valuation, and ICO research. Now, Srikar applies his research and development acumen at Satoshi Capital to aggregate and quantitatively analyze token economics and network effects in relation to potential growth of digital asset projects.</font></p>

                <br>
                <br>
                <br>

                <center>
                    <img src="{{ asset('images/abhay-headshot2.png') }}" height="150px" width="150px">
                </center>
                <center>
                    <h2>Abhay Aluri
                    </h2>
                    <h3><font color="white">Managing Partner, Director of Operations</font></h3>
                </center>
                <p><font color="white">Abhay Aluri is a Managing Partner and Director of Operations at Satoshi Capital, and recently graduated from the University of Georgia. His background in political science,  international political economics, and experience working on a Congressional campaign fed his interest in the global transformative power of blockchain technology. At Satoshi Capital, Abhay provides insight into the ever-changing legal and regulatory environment that governs digital assets, ensuring compliance with all pertinent domestic and international authorities alongside our globally-based legal team. In addition, he streamlines our business operations, handles client relations and administers expansionary and day-to-day operations.</font></p>

                <br>
                <br>
                <br>

            </div>
        </section>
    </div>
@endsection
