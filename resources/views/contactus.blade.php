@extends('app.main')
@section('content')

<!-- Start Breadcrumb -->
<section class="breadcrumb-areav2 contact-us">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

    <div class="container">
		<div class="row">
			<div class="col-lg-6 v-center wow fadeIn">
				<div class="bread-inner">
					<div class="bread-title">
						<h1 class="text-white">How can we help?</h1>
						<p class="text-white pt-3">We make all your dreams come true in a successful project.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Breadcrumb -->

<!--Start Enquire Form-->
<section class="contact-page py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 v-center">
				<div class="common-heading text-l">
					<!-- <span>Contact Now</span> -->
					<h2 class="mt0 mb0">Have Question? Write a Message</h2>
					<p class="mb60 mt20">We will catch you as early as we receive the message</p>
				</div>
				<div class="form-block contact-us-form">
					<form id="contactForm" method="post" data-toggle="validator" class="shake" action="{!!route('leads')!!}">
						@csrf
						<div class="row">
							<div class="form-group col-sm-6">
								<input type="text" name="name" id="name" placeholder="Enter name" required="" data-error="Please fill Out">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group col-sm-6">
								<input type="email" name="email" id="email" placeholder="Enter email" required="">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-6">
								<input type="text" id="mobile" name="mobile" placeholder="Enter mobile" required="" data-error="Please fill Out">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group col-sm-6">
								<select name="service" class="custom-select">
									<option selected="">Select</option>
									<option value="mobile-app-development">Mobile App Development</option>
									<option value="ar-vr-app-development">AR & VR App Development</option>
									<option value="strategic-design-consultancy">Strategic Design Consultancy</option>
									<option value="mobile-app-qa-and-testing">Mobile App QA and Testing</option>
									<option value="web-portal-development">Web Portal Development</option>
									<option value="connected-devices">Connected Devices</option>
								</select>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-6">
								<input type="text" id="company" name="company" placeholder="Enter company name (optional)" required="" data-error="">
							</div>
							<div class="form-group col-sm-6">
								<input type="text" id="subject" name="subject" placeholder="Enter subject" required="" data-error="Please fill Out">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="form-group">
							<textarea id="message" name="message" rows="5" placeholder="Enter your message" required=""></textarea>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group mb-2">
							{!! NoCaptcha::renderJs() !!}
							{!! NoCaptcha::display() !!}
						</div>

						<button type="submit" name="submit" id="form-submit" class="btn-main button-arounder lnk">Submit
							<i class="fas fa-chevron-right fa-icon"></i>
						</button>
						<div id="msgSubmit" class="h3 text-center hidden"></div>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
			<div class="col-lg-6 v-center">
				<div class="contact-details">
					<div class="email-card wow fadeIn" data-wow-delay=".2s">
						<div class="info-card v-center text-white">
							<span><i class="fas fa-phone-alt"></i> Phone:</span>
							<div class="info-body">
								<p>Assistance hours: Monday – Friday, 9 AM to 5 PM</p>
								<a href="tel:+12535284174">+1 (253) 528-4174 </a>
							</div>
						</div>
					</div>
					<div class="email-card mt30 wow fadeIn" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
						<div class="info-card v-center text-white">
							<span><i class="fas fa-envelope"></i> Email:</span>
							<div class="info-body">
								<p>Our support team will get back to in 24-h during standard business hours.</p>
								<a href="mailto:info@appsnation.com">info@appsnation.com</a>
							</div>
						</div>
					</div>
					<div class="skype-card mt30 wow fadeIn" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeIn;">
						<div class="info-card v-center">
							<a href="https://www.facebook.com/AppsNationUS" target="_blank">
								<span><i class="fa-brands fa-facebook"></i> Facebook</span>
							</a>
						</div>
						<div class="info-card v-center">
							<a href="https://www.instagram.com/appsnation.us/" target="_blank">
								<span><i class="fa-brands fa-instagram"></i> Instagram</span>
							</a>
						</div>
						<div class="info-card v-center">
							<a href="https://www.linkedin.com/company/appsnation/" target="_blank">
								<span><i class="fa-brands fa-linkedin-in"></i> LinkedIn</span>
							</a>
						</div>
						<div class="info-card v-center">
							<a href="https://twitter.com/AppsnationCo" target="_blank">
								<span><i class="fa-brands fa-x-twitter"></i> Twitter</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Enquire Form-->

@endsection