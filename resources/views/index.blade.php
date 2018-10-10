@extends('layouts.app')




@section('content')

    <!--SITE TITLE OR LOGO-->
    <div id="innerWrapper">
        <div id="title-area">
            <h1 class="site-title" data-content-field="site-title">
                <a href="/">

                    <!-- Satoshi Capital -->

                    <img src="{{ asset('images/satoshilogoonly.png') }}" class="site-title-image" alt="Satoshi Capital" height="100px" width="100px" />


                </a>
            </h1>
            <font size="3px" color="white">
                <p>
                    Satoshi Capital is a quantitative investment fund providing digital asset exposure to our clients with the ease of investing in a traditional fund. Our data-driven proprietary trading algorithms follow market momentum to pick up on trends developing in the digital asset space, and our futures trading strategies allow us to short digital assets, enabling us to remain profitable regardless of the state of the digital asset space. We enhance our algorithms with machine learning and artificial intelligence to provide optimal risk adjusted returns to our clients. Our fund will also invest in a limited number of new blockchain protocols and businesses.
                </p>
            </font>
            <br>
            @guest
                <div class="contactForm">

                <div class="row">
                    <div class="offset-md-4 col-md-4 col-centered">
                        Sign up for updates<br>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-4 col-md-4 col-centered">
                        <form id="#form" action="https://send.pageclip.co/tr2XqUyAOCsFPK8XiFKb1znLeAavR7Z6" class="pageclip-form" method="post">
                            <input type="text" name="email" value="" class="form-control" id="newsletter_input"/>
                            <label id="newsletter_label" for="newsletter_input">email address</label>
                            <button id="newsletter_button" type="submit" class="pageclip-form__submit">Sign up</button>
                        </form>

                        <style media="screen">
                            .col-centered{
                                float: none;
                                margin: 0 auto;
                            }
                            #form {
                                position: relative;
                                margin: 200px auto 50px auto;
                                width: 550px;
                                height: 60px;
                                -webkit-box-sizing: border-box;
                                box-sizing: border-box;
                            }

                            #newsletter_input {
                                width: 100%;
                                height: 50px;
                                left: 0;
                                border: 0;
                                border-radius: 4px;
                                background: #065cb7;
                                outline: 0;
                                padding: 2em 1em 1em 1em;
                                color: #fff;
                                font-size: 1em;
                                -webkit-transition: background 0.35s ease-out;
                                transition: background 0.35s ease-out;
                            }
                            #newsletter_input::-webkit-input-placeholder {
                                color: #fff;
                                text-transform: capitalize;
                            }
                            #newsletter_input:-moz-placeholder {
                                color: #fff;
                                text-transform: capitalize;
                            }
                            #newsletter_input::-moz-placeholder {
                                color: #fff;
                                text-transform: capitalize;
                            }
                            #newsletter_input:-ms-input-placeholder {
                                color: #fff;
                                text-transform: capitalize;
                            }
                            #newsletter_input:focus {
                                background: #044f9e;
                            }
                            #newsletter_input:focus + label {
                                -webkit-transform: translateY(-10px) scale(0.8);
                                transform: translateY(-10px) scale(0.8);
                                color: #6da6df;
                            }
                            #newsletter_input:focus + label + button {
                                opacity: 1;
                            }

                            #newsletter_label {
                                position: absolute;
                                left: 1.4em;
                                top: 15%;
                                left:50%;
                                margin-left: -50px;
                                font-family: Lato;
                                font-size: 0.8em;
                                margin-top: -8px;
                                color: #fff;
                                text-transform: capitalize;
                                -webkit-transform-origin:  center;
                                transform-origin:  center;
                                -webkit-transition: color 0.25s ease-out, -webkit-transform 0.25s ease-out;
                                transition: color 0.25s ease-out, -webkit-transform 0.25s ease-out;
                                transition: transform 0.25s ease-out, color 0.25s ease-out;
                                transition: transform 0.25s ease-out, color 0.25s ease-out, -webkit-transform 0.25s ease-out;
                            }

                            #newsletter_button {
                                left: 85px;
                                width: 100%;
                                height: 100%;
                                border: 0;
                                border-radius: 4px;
                                font-size: 1em;
                                background: #065cb7;
                                color: #fff;
                                cursor: pointer;
                                opacity: 0;
                                outline: none;
                                -webkit-transition: opacity 0.35s ease-out, width 0.5s ease-out, background 0.25s ease-out;
                                transition: opacity 0.35s ease-out, width 0.5s ease-out, background 0.25s ease-out;
                            }

                            #newsletter_button.is-active {
                                background: #5c94cd;
                                color: #fff;
                            }

                            #newsletter_button.is-done {
                                width: 100%;
                                opacity: 1;
                            }
                        </style>
                        <script type="text/javascript">

                            var email = document.getElementById('newsletter_input'),
                                button = document.getElementById('newsletter_button');

                            function validateEmail(email) {
                                var ex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                                return ex.test(email);
                            }

                            email.addEventListener('keydown', function() {
                                var email = this.value;

                                if(validateEmail(email)) {
                                    button.classList.add('is-active');
                                }
                            });

                            button.addEventListener('click', function(e){
                                this.classList.add('is-done','is-active');

                                setTimeout(function(){
                                    button.innerHTML = "Check Your Email."
                                }, 500);
                            });

                        </script>
                    </div>
                </div>

            </div>
            @endguest
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
