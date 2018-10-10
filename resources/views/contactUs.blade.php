@extends('layouts.app')
<title>Contact - Satoshi Capital</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="icon" type="" href="{{ asset('images/favicon.ico') }}" />
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/noui/nouislider.min.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
@section('content')



	<div id="innerWrapper">
		<div id="title-area">
			<h1 class="site-title" data-content-field="site-title">
				<a href="/">

					<!-- Satoshi Capital -->




				</a>
			</h1>
			@if(session()->has('success'))
				<div class="alert alert-success">
					{{ session()->get('success') }}
				</div>
			@endif

			<div class="container-contact100">
				<div class="wrap-contact100">
					<form class="contact100-form validate-form" method="POST" action="{{route('contactUs')}}">

						@csrf
								<span class="contact100-form-title">Contact Us</span>

						<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your First Name">
							<span class="label-input100">FIRST NAME *</span>
							<input class="input100" type="text" name="firstName" placeholder="Enter Your First Name" required>
						</div>

						<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Last Name">
							<span class="label-input100">LAST NAME *</span>
							<input class="input100" type="text" name="lastName" placeholder="Enter Your Last Name" required>
						</div>

						<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Enter Your Email (e@a.x)">
							<span class="label-input100">Email *</span>
							<input class="input100" type="text" name="email" placeholder="Enter Your Email " required>
						</div>

						<div class="wrap-input100 bg1 rs1-wrap-input100">
							<span class="label-input100">Phone *</span>
							<input class="input100" type="number" name="phone" placeholder="Enter Phone Number" required>
						</div>

						<div class="wrap-input100 validate-input bg1">
							<span class="label-input100">Company NAME</span>
							<input class="input100" type="text" name="companyName" placeholder="Enter Your Company Name">
						</div>

						<div class="wrap-input100 input100-select bg1">
							<span class="label-input100">Are you an accredited investor? *</span>
							<div>
								<p class="requirements"><i><font size="2px">Check requirements <a href="https://www.investor.gov/additional-resources/news-alerts/alerts-bulletins/investor-bulletin-accredited-investors" target="_blank">here</a></font> </i></p>

								<select class="js-select2" name="accredited" required>
									<option>Please choose</option>
									<option>Yes</option>
									<option>No</option>

								</select>

								<div class="dropDownSelect2"></div>
							</div>
						</div>




						<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate="Please Type Your Message">
							<span class="label-input100">Message</span>
							<textarea class="input100" name="message" placeholder="Your message here..." required></textarea>
						</div>

						<div class="container-contact100-form-btn">
							<button class="contact100-form-btn" name="submit" value="sub">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
							</button>
						</div>
					</form>
				</div>
			</div>

			<br/> <br /> <br />
			<!--FOOTER WITH OPEN BLOCK FIELD-->
			<style>
				footer {
					position: absolute;
					left: 0px;
					bottom: 0px;
					width: 100%;
					color: white;
					margin-bottom: 0px;
					margin-top: 0px;
					text-align: center;
				}
			</style>








			<!--===============================================================================================-->
			<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
			<!--===============================================================================================-->
			<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
			<!--===============================================================================================-->
			<script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
			<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
			<!--===============================================================================================-->
			<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
			<script>
                $(".js-select2").each(function() {
                    $(this).select2({
                        minimumResultsForSearch: 20,
                        dropdownParent: $(this).next('.dropDownSelect2')
                    });


                    $(".js-select2").each(function() {
                        $(this).on('select2:close', function(e) {
                            if ($(this).val() == "Please chooses") {
                                $('.js-show-service').slideUp();
                            } else {
                                $('.js-show-service').slideUp();
                                $('.js-show-service').slideDown();
                            }
                        });
                    });
                })
			</script>
			<!--===============================================================================================-->
			<script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
			<script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
			<!--===============================================================================================-->
			<script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
			<!--===============================================================================================-->
			<script src="{{ asset('vendor/noui/nouislider.min.js') }}"></script>
			<script>
                var filterBar = document.getElementById('filter-bar');

                noUiSlider.create(filterBar, {
                    start: [1500, 3900],
                    connect: true,
                    range: {
                        'min': 1500,
                        'max': 7500
                    }
                });

                var skipValues = [
                    document.getElementById('value-lower'),
                    document.getElementById('value-upper')
                ];

                filterBar.noUiSlider.on('update', function(values, handle) {
                    skipValues[handle].innerHTML = Math.round(values[handle]);
                    $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
                    $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
                });
			</script>
			<!--===============================================================================================-->
			<script src="{{ asset('js/main.js') }}"></script>

			<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
			<script>
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());

                gtag('config', 'UA-23581568-13');
			</script>
		</div>
	</div>
@endsection