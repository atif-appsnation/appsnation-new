@extends('app.main')
@section('content')

<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 restaurant-app">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 my-auto wow fadeInLeft">
				<div class="bread-titlev2">
					<h1 class="text-white" data-wow-delay=".2s">Restaurant App Service</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">This special platform allows you to select from a variety of organic and non-organic food establishments throughout the city. Importantly, it allows customers to select their meal and pay for it directly through the app. In addition, users can rate restaurants based on their food, hygiene, and service.</p>
					<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk mt20" data-wow-delay=".6s">Get Quote
						<i class="fas fa-chevron-right fa-icon"></i>
						<span class="circle"></span>
					</a>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeInRight text-end">
				<img src="images/solutions/restaurant-app-1.webp" alt="Restaurant App" class="img-fluid no-shadow w-100" />
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
				<h2>Restaurant App Feature Listing</h2>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 wow fadeInLeft">
				<div class="image-block">
					<img src="images/solutions/restaurant-app-1.webp" alt="Restaurant App" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeInRight my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> <img class="lazy loaded" src="images/solutions/search.svg" alt="search" data-was-processed="true">
							<p> <span>Restaurant Menu Option</span>Foodies can browse for their favorite meals in this intuitive and classified menu book.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/promotions-and-discounts.svg" alt="services" data-was-processed="true">
							<p> <span>Discounts & Coupons Option</span>To entice your loyal consumers, offer exclusive discounts and vouchers.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/content-management.svg" alt="property" data-was-processed="true">
							<p> <span>Gallery Option</span>A prominent and eye-catching gallery to display delicious meals and your restaurant's atmosphere.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/reviews-ratings-management.svg" alt="mortgage" data-was-processed="true">
							<p> <span>Favorites Option</span>Favorites meals allow you to save and create a list of your favorite foods so you can easily reorder again.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/check-out.svg" alt="promotions" data-was-processed="true">
							<p> <span>Real Time Order Option</span>With our simple ordering system, you can order food in real-time, track your orders, and check the progress of your orders.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 block-1 wow fadeInLeft my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> <img class="lazy loaded" src="images/solutions/history.svg" alt="check" data-was-processed="true">
							<p> <span>Table Reservation Option</span>To avoid queuing and disturbing your party vibe, use our quick pre-booking system.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/reviews-and-ratings.svg" alt="payment" data-was-processed="true">
							<p> <span>Reviews & Rating Option</span>With an easy review and rating system, you can stay up to current on your customers' experiences.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/e-wallet.svg" alt="wallet" data-was-processed="true">
							<p> <span>Payment Gateway Option</span>Easy payments and check-outs with popular and advanced payment methods.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/notifications-alerts.svg" alt="history" data-was-processed="true">
							<p> <span>Push Notifications Option</span>History of previously booked services is maintained in an active and very well form.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/bookings-management.svg" alt="property" data-was-processed="true">
							<p> <span>Digital Receipts Option</span>By using digital receipts and invoicing, you can keep track of your food budget and costs.</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 wow fadeInRight">
				<div class="image-block">
					<img src="images/solutions/restaurant-app-2.webp" alt="Restaurant App" class="img-fluid no-shadow" />
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
			<div class="col-lg-6 wow fadeInLeft">
				<div class="image-block">
					<img src="images/solutions/restaurant-app-3.webp" alt="image" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeInRight my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> <img class="lazy loaded" src="images/solutions/dashboard-analytics.svg" alt="analytics" data-was-processed="true">
							<p> <span>Dashboard Option</span>Through the Admin Dashboard, you can manage and examine your restaurant's app statistics and analytics, as well as get information on your users, sales, and profitability.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/content-management.svg" alt="content" data-was-processed="true">
							<p> <span>Branch Management Option</span>Organize your restaurant locations using an intuitive branch management solution.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/user-management.svg" alt="user" data-was-processed="true">
							<p> <span>User Management Option</span>View and manage all the application users and view their activities to know about their interests by the user management system.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/services-management.svg" alt="management" data-was-processed="true">
							<p> <span>Menu Management Option</span>Menu management allows you to create and manage menus with comprehensive categories, food items, and pricing.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/promotions-and-discounts.svg" alt="promotions" data-was-processed="true">
							<p> <span>Discounts Management Option</span>Monitor and generate a variety of promotional offers and discounts for customers to entice them to use the app by managing deals and coupons.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 block-1 wow fadeInLeft my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> <img class="lazy loaded" src="images/solutions/bookings-management.svg" alt="bookings" data-was-processed="true">
							<p> <span>Promo Codes Management Option</span>Create and manage coupons and promo codes for app users to help them market the app using a coupon and promo code control system.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/reviews-ratings-management.svg" alt="reviews" data-was-processed="true">
							<p> <span>Order Management Option</span>The fast order management system allows you to keep track of, manage, and view all of your orders.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/notifications-alerts.svg" alt="notifications" data-was-processed="true">
							<p> <span>Reservation Management Option</span>Reservation management allows you to check availability and make bookings for your valued consumers.</p>
						</li>
						<li> <img class="lazy loaded" src="images/solutions/reviews-and-ratings.svg" alt="promotions" data-was-processed="true">
							<p> <span>Reviews & Ratings Management Option</span>Using our review and rating management system, you can stay up to speed on your valuable customers' ideas and experiences, as well as manage their reviews and ratings on your restaurant's cuisine and services.</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 wow fadeInRight">
				<div class="image-block ">
					<img src="images/solutions/restaurant-app-4.webp" alt="Restaurant App" class="img-fluid no-shadow" />
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