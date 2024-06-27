@extends('app.main')
@section('content')

<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 real-estate-app">

	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 my-auto wow fadeInLeft">
				<div class="bread-titlev2">
					<h1 class="text-white" data-wow-delay=".2s">Real Estate App Service</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">The project's goal is to establish a unique and dynamic platform that allows users to easily search for houses for sale and rent. The project's goal is to develop a mobile application for users that allows them to conveniently seek for and search for properties, such as homes, offices, and apartments, based on their needs and requirements, and interact with real estate agents quickly and easily.</p>
					<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk mt20" data-wow-delay=".6s">Get Quote
						<i class="fas fa-chevron-right fa-icon"></i>
						<span class="circle"></span>
					</a>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeInRight text-end">
				<img src="images/solutions/real-estate-app-1.webp" alt="Real Estate App" class="img-fluid no-shadow w-100" />
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
				<h2>Real Estate App Features</h2>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 wow fadeInLeft">
				<div class="image-block">
					<img src="images/solutions/real-estate-app-1.webp" alt="Real Estate App" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeInRight my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> <img class="lazy loaded" src="images/solutions/search.svg" alt="search" data-was-processed="true">
							<p> <span>Search properties</span>Users can utilize a quick and easy search option to find the properties they want.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/content-management.svg" alt="services" data-was-processed="true">
							<p> <span>Properties Listing</span>A large and diverse property list for our valued users to search for various homes.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/bookings-management.svg" alt="property" data-was-processed="true">
							<p> <span>Property Information</span>Detailed property details to learn everything there is to know about the property.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/services-management.svg" alt="booking" data-was-processed="true">
							<p> <span>Amenities Information</span>Customers may take advantage of a longer variety of amenities to get the most out of their residences</p>
						</li>
						<!-- <li> <img class="lazy loaded" src="images/solutions/mortgage-finance-center.webp" alt="mortgage" data-was-processed="true">
							<p> <span>Mortgage</span>Mortgage center with a logical and coherent approach to calculating and obtaining the best mortgage rates.</p>
						</li> -->
						<li> <img class="lazy loaded" src="images/solutions/reviews-ratings-management.svg" alt="promotions" data-was-processed="true">
							<p> <span>Contact Agent</span>To contact the agents right away, use the call, message, or email options.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 block-1 wow fadeInLeft my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> <img class="lazy loaded" src="images/solutions/services-management.svg" alt="check" data-was-processed="true">
							<p> <span>Map Integration</span>Maps that are dynamic and responsive to help you find the best routes and pinpoint specific locations.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/content-management.svg" alt="payment" data-was-processed="true">
							<p> <span>Gallery</span>Beautiful photographs and videos of real estate locales are displayed in a prominent and gaze gallery.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/user-management.svg" alt="wallet" data-was-processed="true">
							<p> <span>Favorites</span>The Favorites option allows you to save and create a list of your favorite properties so that you can discover them easily afterward.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/notifications-alerts.svg" alt="history" data-was-processed="true">
							<p> <span>Push Notifications</span>Get instant information about your customers' actions, contacts, and reviews.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/reviews-and-ratings.svg" alt="reviews" data-was-processed="true">
							<p> <span>Testimonials</span>Testimonials</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/reviews-ratings-management.svg" alt="property" data-was-processed="true">
							<p> <span>Reviews &amp; Ratings</span>Users will receive instant notifications regarding their actions and reservations.</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 wow fadeInRight">
				<div class="image-block">
					<img src="images/solutions/real-estate-app-2.webp" alt="Real Estate App" class="img-fluid no-shadow" />
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
				<h2>Admin Features</h2>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 wow fadeInLeft">
				<div class="image-block">
					<img src="images/solutions/real-estate-app-3.webp" alt="image" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeInRight my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> <img class="lazy loaded" src="images/solutions/dashboard-analytics.svg" alt="analytics" data-was-processed="true">
							<p> <span>Dashboard &amp; statistics</span>Through a full admin dashboard, you can manage and analyze your app statistics and analytics, as well as get quick information on all of your users, sales, and earnings.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/content-management.svg" alt="content" data-was-processed="true">
							<p> <span>Content Management</span>Generate, edit, and organize all of the user's content, as well as make changes in real-time, using a simple and user-friendly content management system.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/user-management.svg" alt="user" data-was-processed="true">
							<p> <span>User Management</span>By using the user management system, you can see and control all of the application users, as well as their behaviors and learn about their preferences.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/services-management.svg" alt="management" data-was-processed="true">
							<p> <span>Properties Management</span>Property management allows you to maintain and examine a variety of real estate listings.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/bookings-management.svg" alt="management" data-was-processed="true">
							<p> <span>Amenities Management</span>Through amenities management, you may see and control a large number of amenities.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 block-1 wow fadeInLeft my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> <img class="lazy loaded" src="images/solutions/reviews-ratings-management.svg" alt="promotions" data-was-processed="true">
							<p> <span>Contact Agent</span>To reach the agents right away, use the call, message, or email options.</p>
						</li>
						<!-- <li> <img class="lazy loaded" src="images/solutions/bookings-management.svg" alt="bookings" data-was-processed="true">
							<p> <span>Mortgage/Finance Management</span>Maintain awareness of users' mortgage/finance needs and keep them up to speed with the latest finance rates and plans via the mortgage current mortgage rates and strategies management system.</p>
						</li> -->
						<li> <img class="lazy loaded" src="images/solutions/content-management.svg" alt="reviews" data-was-processed="true">
							<p> <span>Gallery Management</span>Through the gallery management system, you may view, update, upload, and manage a large number of photographs and movies.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/reviews-and-ratings.svg" alt="notifications" data-was-processed="true">
							<p> <span>Testimonials Management</span>Upload, review, and manage valuable testimonials to help users better understand and market the software.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/reviews-ratings-management.svg" alt="reviews" data-was-processed="true">
							<p> <span>Review &amp; Ratings Management</span>Using a review and rating management system, you may stay up to speed on your important customers' thoughts and experiences, as well as manage their services-based reviews.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/notifications-alerts.svg" alt="notifications" data-was-processed="true">
							<p> <span>Notifications / Alerts</span>Use the notification tool to stay up to date on your customers' operations and status.</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 wow fadeInRight">
				<div class="image-block">
					<img src="images/solutions/real-estate-app-4.webp" alt="Real Estate App" class="img-fluid no-shadow" />
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