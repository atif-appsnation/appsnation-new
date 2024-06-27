@extends('app.main')
@section('content')

<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 booking-app">

	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 my-auto wow fadeInLeft">
				<div class="bread-titlev2">
					<h1 class="text-white" data-wow-delay=".2s">Booking App Service</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">The one-of-a-kind platform where users may look for different occupations in their spare time, book a slot, submit a request, choose an automated location, and enjoy the spotlight.</p>
					<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk mt20" data-wow-delay=".6s">Get Quote
						<i class="fas fa-chevron-right fa-icon"></i>
						<span class="circle"></span>
					</a>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeInRight text-end">
				<img src="images/solutions/booking-app-1.webp" alt="Booking App" class="img-fluid no-shadow w-100" />
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb Area-->

<!--Start Why-->
<section class="solutions py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12">
				<h2>Booking App Feature Listing</h2>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6">
				<div class="image-block wow fadeInLeft">
					<img src="images/solutions/booking-app-1.webp" alt="Booking App" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-6 block-1 my-auto wow fadeInRight">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> <img class="lazy loaded" src="images/solutions/search.svg" alt="search" data-was-processed="true">
							<p> <span>Search</span>Users can utilize a quick and easy search option to find the services they need.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/services.svg" alt="services" data-was-processed="true">
							<p> <span>services</span>A large and diverse selection of services is available for valuable users to search for their chosen services.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/user-management.svg" alt="property" data-was-processed="true">
							<p> <span>Filters</span>Users can utilize a variety of dynamic filters to find the services they want based on their needs and wants.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/booking.svg" alt="booking" data-was-processed="true">
							<p> <span>Booking</span>To avoid queuing and ruining the mood, an instant pre-booking method is available.</p>
						</li>
						<!-- <li> <img class="lazy loaded" src="images/solutions/mortgage-finance-center.webp" alt="mortgage" data-was-processed="true">
							<p> <span>Mortgage</span>This feature facilitates the user with a logical and systematic approach to calculating and obtaining the best mortgage rates.</p>
						</li> -->
						<li> <img class="lazy loaded" src="images/solutions/promotions-and-discounts.svg" alt="promotions" data-was-processed="true">
							<p> <span>Promotions &amp; Discounts</span>To entice your loyal consumers, offer exclusive promotions and discounts.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 block-1 wow fadeInLeft">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> <img class="lazy loaded" src="images/solutions/check-out.svg" alt="check" data-was-processed="true">
							<p> <span>Check Out</span>To settle payment for the bookings online, there is an easy and user-friendly checkout facility.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/payment-gateways.svg" alt="payment" data-was-processed="true">
							<p> <span>Payment Gateways</span>Convenient transactions and check-outs with popular and advanced payment methods.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/e-wallet.svg" alt="wallet" data-was-processed="true">
							<p> <span>E-Wallet</span>E-wallet that is both systematic and responsive, allowing consumers to make online payments with simplicity and minimal effort.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/history.svg" alt="history" data-was-processed="true">
							<p> <span>Maintain History</span>History of previously booked services is maintained in an active and very well form.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/reviews-and-ratings.svg" alt="reviews" data-was-processed="true">
							<p> <span>Reviews and Ratings</span>With a simple review and rating system, you can stay up to current on your customers' experiences.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/user-management.svg" alt="property" data-was-processed="true">
							<p> <span>Filters</span>Users will receive instant notifications regarding their actions and reservations.</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="image-block my-auto wow fadeInRight">
					<img src="images/solutions/booking-app-2.webp" alt="Booking App" class="img-fluid no-shadow" />
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Why-->

<!--Start Why-->
<section class="solutions py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12">
				<h2>Admin Panel Features</h2>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6">
				<div class="image-block wow fadeInLeft">
					<img src="images/solutions/booking-app-3.webp" alt="Booking App" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-6 block-1 my-auto wow fadeInRight">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> <img class="lazy loaded" src="images/solutions/dashboard-analytics.svg" alt="analytics" data-was-processed="true">
							<p> <span>Dashboard &amp; Analytics</span>Through a full admin dashboard, you can manage and examine your app statistics and analytics, as well as get quick information on all of your users, sales earnings, and so on.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/content-management.svg" alt="content" data-was-processed="true">
							<p> <span>Content Management</span>Using an easy and user-friendly content management system, you can create, upload, and manage all of the information on the app, as well as make run-time modifications.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/user-management.svg" alt="user" data-was-processed="true">
							<p> <span>User Management</span>By using a user management system, you can control and manage all application users, as well as observe their activities and learn about their interests.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/services-management.svg" alt="management" data-was-processed="true">
							<p> <span>Services Management</span>Create, maintain, and modify services as well as their data that are presented on the app for users to view and book.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 block-1 wow fadeInLeft my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> <img class="lazy loaded" src="images/solutions/promotions-and-discounts.svg" alt="promotions" data-was-processed="true">
							<p> <span>Promotions &amp; Discounts Management</span>Create unique promos and discounts to entice customers to purchase your products and take advantage of varied discounts.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/bookings-management.svg" alt="bookings" data-was-processed="true">
							<p> <span>Bookings Management</span>Start managing all bookings made on the application by different users, as well as accept/reject bookings based on service availability, using the booking management platform.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/reviews-ratings-management.svg" alt="reviews" data-was-processed="true">
							<p> <span>Reviews &amp; Ratings Management</span>Using a review and ratings management system, you can stay up to speed on your valuable customers' thoughts and experiences, as well as manage their reviews and ratings on services.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/notifications-alerts.svg" alt="notifications" data-was-processed="true">
							<p> <span>Pop Up Notifications Options</span>Use the notification tool to stay up to date on your customers' actions and status.</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="image-block wow fadeInRight">
					<img src="images/solutions/booking-app-4.webp" alt="Booking App" class="img-fluid no-shadow" />
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Why-->

<!-- Start Technologies -->
<section class="technologies certificates py-5">
	<div class="container">
		<div class="row wow fadeInLeft">
			<div class="col-lg-6">
				<div class="common-heading">
					<h2>We Partner with the <span>World's technology</span> leaders</h2>
				</div>
			</div>
		</div>
		<div class="row pt-3 wow fadeInRight">
			<div class="col-12">
				<div id="tech" class="carousel slide tech" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="row">
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/google-certifie-agency.webp" alt="Google Developers">
									<h6 class="pt-3">Google Developer<br>Certified Agency</h6>
								</div>
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/adobe-logos.webp" alt="Adobe Solution Partner">
									<h6 class="pt-3">Adobe Solution<br>Partner Program</h6>
								</div>
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/microsoft-certified-partner.webp" alt="Microsoft Certified Consulting">
									<h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
								</div>
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/amazon-web-services.webp" alt="Amazon Web Service">
									<h6 class="pt-3">Amazon Web<br>Service Partner</h6>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/google-certifie-agency.webp" alt="Google Developers">
									<h6 class="pt-3">Google Developer<br>Certified Agency</h6>
								</div>
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/adobe-logos.webp" alt="Adobe Solution Partner">
									<h6 class="pt-3">Adobe Solution<br>Partner Program</h6>
								</div>
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/microsoft-certified-partner.webp" alt="Microsoft Certified Consulting">
									<h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
								</div>
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/amazon-web-services.webp" alt="Amazon Web Service">
									<h6 class="pt-3">Amazon Web<br>Service Partner</h6>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/google-certifie-agency.webp" alt="Google Developers">
									<h6 class="pt-3">Google Developer<br>Certified Agency</h6>
								</div>
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/adobe-logos.webp" alt="Adobe Solution Partner">
									<h6 class="pt-3">Adobe Solution<br>Partner Program</h6>
								</div>
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/microsoft-certified-partner.webp" alt="Microsoft Certified Consulting">
									<h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
								</div>
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/amazon-web-services.webp" alt="Amazon Web Service">
									<h6 class="pt-3">Amazon Web<br>Service Partner</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--<div class="col-12 text-center mt-3">-->
			<!--	<a class="btn mb-3 mr-1" href="#tech" role="button" data-bs-slide="prev">-->
			<!--		<i class="fa fa-arrow-left"></i>-->
			<!--	</a>-->
			<!--	<a class="btn mb-3" href="#tech" role="button" data-bs-slide="next">-->
			<!--		<i class="fa fa-arrow-right"></i>-->
			<!--	</a>-->
			<!--</div>-->
		</div>
	</div>
</section>
<!-- End Technologies -->

<!-- Start Why Choose -->
<section class="why-choose-section py-5">
	<div class="container">
		<div class="row justify-content-center wow fadeInUp">
			<div class="col-12">
				<div class="card py-3">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-6">
								<h2>Why Choose <span>Appsnation</span> As Your <span>Development Partner</span></h2>
								<p class="pt-2">Appsnation has been working in the software development field since 2016. We have worked with 300+ businesses. Moreover, Appsnation has its play stores where we have 50+ different apps and software, which most development companies don't have. Appsnation has its own 50+ certified developers and designers team that helps you convert the idea into reality.</p>
								<img src="images/why-choose/why-choose.webp" class="img-fluid mt-4">
							</div>
							<div class="col-lg-6 mt-3">
								<div class="row">
									<div class="col-md-6">
										<h3>Team Scalability</h3>
										<img src="images/why-choose/team-scalibility.webp" class="img-fluid my-3" alt="Team Scalability">
										<p class="mb-0">Boost your team with domain specialists whenever required.</p>
									</div>
									<div class="col-md-6 mt-3 mt-sm-0">
										<h3>Quick Time to Market</h3>
										<img src="images/why-choose/quick-time-to-market.webp" class="img-fluid my-3" alt="Quick Time to Market">
										<p class="mb-0">Streamlined delivery intended to achieve efficiency on time.</p>
									</div>
									<div class="col-md-6 mt-3">
										<h3>Cost Saving</h3>
										<img src="images/why-choose/cost-saving.webp" class="img-fluid my-3" alt="Cost Saving">
										<p class="mb-0">Get experienced and competent developers at a reasonable price.</p>
									</div>
									<div class="col-md-6 mt-3">
										<h3>Skilled Resources</h3>
										<img src="images/why-choose/skilled-resources.webp" class="img-fluid my-3" alt="Skilled Resources">
										<p class="mb-0">Get access to skilled mobile gaming experts with domain knowledge.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Why Choose -->
@endsection