@extends('app.main')
@section('content')

<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 shopping-express-app">

	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 my-auto wow fadeInLeft">
				<div class="bread-titlev2">
					<h1 class="text-white" data-wow-delay=".2s">Shopping Express App Service</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">The goal of this project is to have a user with a better, more dependable, and more accessible e-commerce platform to engage potential and existing customers, as well as raise their pleasure and satisfaction through a mobile application by offering better services in the area.</p>
					<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk mt20" data-wow-delay=".6s">Get Quote
						<i class="fas fa-chevron-right fa-icon"></i>
						<span class="circle"></span>
					</a>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeInRight text-end">
				<img src="images/solutions/shopping-express-app-1.webp" alt="Shopping Express App" class="img-fluid no-shadow w-100" />
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
				<h2>Shop App Features</h2>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 wow fadeInLeft">
				<div class="image-block">
					<img src="images/solutions/shopping-express-app-1.webp" alt="Shopping Express App" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeInRight my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> <img class="lazy loaded" src="images/solutions/user-management.svg" alt="search" data-was-processed="true">
							<p> <span>User Guide</span>It includes all of the application's primary parts, which will instruct and familiarise the user with the application.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/content-management.svg" alt="services" data-was-processed="true">
							<p> <span>Product Listing</span>A variety of product listings will be displayed to the user, from which he can add items to his cart.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/search.svg" alt="property" data-was-processed="true">
							<p> <span>Search Product</span>Users will be able to search for a particular product using filters and add them to their shopping basket.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/history.svg" alt="booking" data-was-processed="true">
							<p> <span>Favorites</span>Favorite items will be preserved in this section, where the user can quickly add them to the cart at a later time.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/check-out.svg" alt="mortgage" data-was-processed="true">
							<p> <span>Cart</span>This feature will assist the user in adding and maintaining products that he wants to buy. It's an E-Cart where the user can keep track of all of his purchases before check-out.</p>
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
							<p> <span>Coupon Codes</span>Users will be offered coupons and promo codes through promotions and regular usage of the application, which will be utilized to get discounts on purchases.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/check-out.svg" alt="payment" data-was-processed="true">
							<p> <span>Checkout</span>The feature refers to the procedure a consumer must follow when checking out the products in their shopping basket. At the front end, this is what the user sees.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/content-management.svg" alt="wallet" data-was-processed="true">
							<p> <span>Orders</span>The user can see all prior and current orders, verify their status, and ask questions about any of them.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/e-wallet.svg" alt="history" data-was-processed="true">
							<p> <span>Payment Gateway</span>For e-commerce ventures, a payment gateway enables credit card payments. When a credit or debit card transaction is made, a payment gateway is part of the "magic" that happens behind the scenes.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/notifications-alerts.svg" alt="reviews" data-was-processed="true">
							<p> <span>Push Notifications</span>All actions and promotional offers will be notified to the user via push notification on the application, keeping him up to date.</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 wow fadeInRight">
				<div class="image-block">
					<img src="images/solutions/shopping-express-app-2.webp" alt="Shopping Express App" class="img-fluid no-shadow" />
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
				<h2>Shop Admin Features</h2>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 wow fadeInLeft">
				<div class="image-block">
					<img src="images/solutions/shopping-express-app-3.webp" alt="Shopping Express App" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeInRight my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> <img class="lazy loaded" src="images/solutions/dashboard-analytics.svg" alt="analytics" data-was-processed="true">
							<p> <span>Dashboard</span>Through a full admin dashboard, you can manage and analyze your app statistics and analytics, as well as get quick information on all of your users, sales, and earnings.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/content-management.svg" alt="content" data-was-processed="true">
							<p> <span>Content Management</span>Generate, upload, and maintain all of the application's content, as well as make changes if needed, using a simple and user-friendly content management system.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/user-management.svg" alt="user" data-was-processed="true">
							<p> <span>User Management</span>By using a user management system, you can control and manage all application users, as well as observe their activities and learn about their interests.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/content-management.svg" alt="management" data-was-processed="true">
							<p> <span>Product Management</span>Product management allows you to upload and manage products with descriptive categories, pricing, and other information.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 block-1 wow fadeInLeft my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> <img class="lazy loaded" src="images/solutions/services-management.svg" alt="promotions" data-was-processed="true">
							<p> <span>Order Management</span>Through the fast order management system, you can track, manage, and monitor all of your orders, as well as get information on their status.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/bookings-management.svg" alt="bookings" data-was-processed="true">
							<p> <span>Gallery Management</span>Start managing all bookings made on the application by different users, as well as accept/reject bookings based on service availability, using the booking management platform.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/reviews-and-ratings.svg" alt="reviews" data-was-processed="true">
							<p> <span>Reviews &amp; Ratings Management</span>Using a review and rating management system, you may stay up to speed on your valuable customers' thoughts and experiences, as well as manage their reviews and ratings on services.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/notifications-alerts.svg" alt="notifications" data-was-processed="true">
							<p> <span>Notification</span>Use the notification option to stay up to date on your clients' activities and status.</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 wow fadeInRight">
				<div class="image-block">
					<img src="images/solutions/shopping-express-app-4.webp" alt="Shopping Express App" class="img-fluid no-shadow" />
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