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
				<img src="images/why-choose/why-choose.webp" width="100%" height="100%" class="img-fluid">
			</div>
			<div class="col-lg-6 v-center">
				<div class="contact-details">
					<div class="email-card wow fadeIn" data-wow-delay=".2s">
						<div class="info-card v-center text-white">
							<span><i class="fas fa-phone-alt"></i> Phone:</span>
							<div class="info-body">
								<p>Assistance hours: Monday – Friday, 9 AM to 5 PM</p>
								<a href="tel:+13237989803">+1 (323) 798-9803 </a>
							</div>
						</div>
					</div>
					<div class="email-card mt20 wow fadeIn" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
						<div class="info-card v-center text-white">
							<span><i class="fas fa-envelope"></i> Email:</span>
							<div class="info-body">
								<p>Our support team will get back to you in 24-h during standard business hours.</p>
								<a href="mailto:info@appsnation.co">info@appsnation.co</a>
							</div>
						</div>
					</div>
					<div class="skype-card mt20 wow fadeIn" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeIn;">
						<div class="info-card v-center">
							<a href="https://www.facebook.com/appsnation.co" target="_blank">
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