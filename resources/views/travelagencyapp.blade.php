@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2 travel-agency-app">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container wow fadeIn" data-wow-delay="0.2s">
		<div class="row">
			<div class="col-lg-6 my-auto">
			<img src="images/case-studies/travel-agency-app/header-logo.webp" class="img-fluid" alt="Travel Agency App Logo">
				<div class="bread-titlev2 mt-4">
					<h1 class="text-white banner-heading">Best Traveling Agency</h1>
					<h3 class="mt50 text-white">TRAVELICIOUS</h5>
					<p class="text-white">EXPERIENCE THE WORLD</p>
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0">
				<img src="images/case-studies/travel-agency-app/header-phone.webp" class="img-fluid" alt="Travel Agency App">
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb Area-->

<!--Start About-->
<section class="about-travel wow fadeIn py-5" data-wow-delay="0.4s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-auto">
				<div class="common-heading">
					<h2>Best App<br>For Travelling</h2>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img src="images/case-studies/travel-agency-app/about-travel-app.webp" alt="Travel App" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start About Project-->
<section class="about-goal-travel py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="common-heading">
					<h2 class="text-white text-center">Project Goal</h1>
					<p class="text-white text-center"> Our goal is to revolutionize the travel experience by offering a user-friendly app that simplifies planning, booking, and exploring destinations worldwide.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About Project-->

<!--Start Project Idea-->
<section class="project-idea-travel py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Project Idea</h2>
					<p class="text-middle">Travelicious aims to empower travelers with a comprehensive platform that seamlessly integrates itinerary planning, real-time updates, and personalized recommendations. By leveraging advanced technology, Travelicious ensures a hassle-free travel experience from start to finish. Whether you're exploring a new city, embarking on a business trip, or planning a dream vacation, Travelicious provides intuitive tools for crafting and managing detailed itineraries tailored to your preferences. Stay informed with instant updates on flight schedules, weather forecasts, and local events, all personalized to enhance your journey. Our goal is to redefine travel planning by offering a reliable companion that simplifies logistics, inspires discovery, and enriches your travel adventures.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img src="images/case-studies/travel-agency-app/travel-app-visuals-1.webp" alt="Travel App Visuals" class="img-fluid about-phone">
			</div>
		</div>
	</div>
</section> 
<!--End Project Idea-->

<!--Start Target Audience-->
<section class="target-audience-travel py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				<img src="images/case-studies/travel-agency-app/travel-app-visuals-2.webp" alt="Travel App Visuals" class="img-fluid about-phone">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Target Audience</h2>
					<p class="text-middle">Travelicious caters to today's discerning travelers who prioritize convenience, personalized experiences, and seamless journey planning. Whether you're a frequent flyer seeking efficiency, a family on vacation craving memorable adventures, or a solo adventurer exploring new horizons, Travelicious is meticulously crafted to elevate every facet of your travel experience. Enjoy tailored recommendations, effortless itinerary management, and real-time updates, all designed to ensure your travels are as enriching as they are enjoyable.
					</p>
				</div>
			</div>	
		</div>
	</div>
</section> 
<!--End Target Audience-->

<!--Start Project Challenges-->
<section class="project-challanges-travel py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Project Challenges</h2>
					<p class="text-middle">Creating an app that seamlessly integrates multiple travel services, ensures real-time updates, and maintains user engagement posed significant technical and user experience challenges.
					</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img src="images/case-studies/travel-agency-app/travel-app-visuals-3.webp" alt="Travel App Visuals" class="img-fluid about-phone">
			</div>
		</div>
	</div>
</section> 
<!--End Project Challenges-->

<!--Start Solutions Delivered-->
<section class="solutions-delivered-travel py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				<img src="images/case-studies/travel-agency-app/travel-app-visuals-4.webp" alt="Travel App Visuals" class="img-fluid about-phone">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Solution Delivered</h2>
					<p class="text-middle">By leveraging cutting-edge technology and user-centric design principles, Travelicious overcomes these challenges to deliver a robust app that simplifies travel planning, offers personalized recommendations, and ensures smooth navigation through every stage of the journey.
					</p>
				</div>
			</div>
		</div>
	</div>
</section> 
<!--End Solutions Delivered-->

<!--Start Results/Impact-->
<section class="results-impact-travel py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Results/Impact</h2>
					<p class="text-middle">Travelicious has successfully redefined travel planning, offering users a reliable companion that enhances their travel experiences, fosters exploration, and provides peace of mind. Join us on Travelicious and embark on journeys that inspire and delight.
					</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img src="images/case-studies/travel-agency-app/travel-app-visuals-1.webp" alt="Travel App Visuals" class="img-fluid about-phone">
			</div>
		</div>
	</div>
</section> 
<!--End Results/Impact-->

<!--Start Conclusion-->
<section class="conclusion-travel py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				<img src="images/case-studies/travel-agency-app/travel-app-visuals-2.webp" alt="Travel App Visuals" class="img-fluid about-phone">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Conclusion</h2>
					<p class="text-middle">In conclusion, the project of integrating a travel booking company into our mobile application was a resounding success. It not only met the initial project goals but also set the stage for future enhancements and expansions. Moving forward, the project can explore adding more personalized features and expanding service offerings to cover more geographical locations. This case study serves as a testament to the potential benefits of integrating comprehensive service offerings into a user-friendly mobile application.</p>
				</div>
			</div>
		</div>
	</div>
</section> 
<!--End Conclusion-->

<!--Start Design-->
<section class="design-process-travel py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center design-text">
					<h2 class="mb30">Design Process</h2>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.4s">
				<div class="travel-app-sketching-icon">
					<img src="images/case-studies/travel-agency-app/sketching-icon.webp" alt="Sketching" class="img-fluid">
				</div>
				<h5 class="pt-3">Sketching</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.6s">
				<div class="travel-app-wireframe-icon">
					<img src="images/case-studies/travel-agency-app/wireframe-icon.webp" alt="Wireframe" class="img-fluid">
				</div>
				<h5 class="pt-3">Wireframe</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.8s">
				<div class="travel-app-branding-icon">
					<img src="images/case-studies/travel-agency-app/branding-icon.webp" alt="Branding" class="img-fluid">
				</div>
				<h5 class="pt-3">Branding</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="1.0s">
				<div class="travel-app-visuals-icon">
					<img src="images/case-studies/travel-agency-app/visuals-icon.webp" alt="Visuals" class="img-fluid">
				</div>
				<h5 class="pt-3">Visuals</h5>
			</div>
		</div>
	</div>
</section>
<!--End Design-->

<!--Start Sketching-->
<section class="sketching-travel py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center">
					<h2 class="mb25">Sketching</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="sketching-img-div pt-3 wow fadeIn" data-wow-delay="0.4s">
		<img src="images/case-studies/travel-agency-app/sketching.webp" alt="Sketching" class="img-fluid w-100">
	</div>
</section>
<!--End Sketching-->

<!--Start Wireframe-->
<section class="wireframe-travel py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center">
					<h2 class="mb30">Wireframes</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="sketching-img-div pt-3 wow fadeIn" data-wow-delay="0.6s">
		<img src="images/case-studies/travel-agency-app/wireframes.webp" alt="Wireframe" class="img-fluid w-100">
	</div>
</section>
<!--End Wireframe-->

<!--Start Color Pallate-->
<section class="color-travel py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center">
					<h2 class="mb30">Color Pallate</h2>
				</div>
			</div>
			<div class="col-lg-6 mt-5 text-center wow fadeIn" data-wow-delay="0.4s">
				<h4 class="text-center">Tints</h4>
				<img src="images/case-studies/travel-agency-web/tints.webp" alt="Tints" class="img-fluid">
			</div>
			<div class="col-lg-6 mt-5 text-center wow fadeIn" data-wow-delay="0.6s">
				<h4 class="text-center">Shades</h4>
				<img src="images/case-studies/travel-agency-web/shades.webp" alt="Shades" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<!--End Color Pallate-->

<!--Start Typography-->
<section class="typography-travel py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center">
					<h2 class="mb30">Typography</h2>
				</div>
			</div>
			<div class="col-12 mt-5 text-center wow fadeIn" data-wow-delay="0.4s">
				<img src="images/case-studies/travel-agency-app/typography.webp" alt="Typography" class="img-fluid">
			</div>
		</div> 
	</div>
</section>
<!--End Typography-->

<!--Start Visuals-->
<section class="visuals-travel py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center visual-text">
					<h2 class="mb30">Visuals</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="visuals-travel-background pt50">
		<div class="container">
			<div class="row mt-4 mt-lg-0">
				<div class="col-12 col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.4s">
					<img src="images/case-studies/travel-agency-app/travel-app-visuals-1.webp" alt="Travel App Visuals" class="img-fluid travel-app-visuals-1">
				</div>
				<div class="col-12 col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.6s">
					<img src="images/case-studies/travel-agency-app/travel-app-visuals-2.webp" alt="Travel App Visuals" class="img-fluid travel-app-visuals-2">
				</div>
				<div class="col-12 col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.8s">
					<img src="images/case-studies/travel-agency-app/travel-app-visuals-3.webp" alt="Travel App Visuals" class="img-fluid travel-app-visuals-3">
				</div>
				<div class="col-12 col-md-6 col-lg-3 wow fadeIn" data-wow-delay="1.0s">
					<img src="images/case-studies/travel-agency-app/travel-app-visuals-4.webp" alt="Travel App Visuals" class="img-fluid travel-app-visuals-4">
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Visuals-->

<!--Start Features-->
<section class="features-travel py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-end">
					<h2 class="mb-0">Features</h2>
				</div>
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.4s">
			<div class="col-lg-6 my-lg-auto">
				<h5 class="travel-sub-heading">Search</h5>
				<p>Users can utilize a quick and easy search option to find the services they need.</p>
				<hr class="my-5">
				<h5 class="travel-sub-heading">Services</h5>
				<p>A large and diverse selection of services is available for valuable users to search for their chosen services.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				<img src="images/case-studies/travel-agency-app/travel-app-visuals-1.webp" alt="Travel App Visuals" class="img-fluid">
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.6">
			<div class="col-lg-6 text-start">
				<img src="images/case-studies/travel-agency-app/travel-app-visuals-4.webp" alt="Travel App Visuals" class="img-fluid">
			</div>
			<div class="col-lg-6 mt-5 my-lg-auto text-end">
				<h5 class="travel-sub-heading">Filters</h5>
				<p class="text-end">Users can utilize a variety of dynamic filters to find the services they want based on their needs and wants.</p>
				<hr class="my-5 d-block ms-auto">
				<h5 class="travel-sub-heading">Booking</h5>
				<p class="text-end">To avoid queuing and ruining the mood, an instant pre-booking method is available.</p>
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.8">
			<div class="col-lg-6 my-lg-auto">
				<h5 class="travel-sub-heading">Mortgage</h5>
				<p>This feature facilitates the user with a logical and systematic approach to calculating and obtaining the best mortgage rates.</p>
				<hr class="my-5">
				<h5 class="travel-sub-heading">Promotions & Discounts</h5>
				<p>To entice your loyal consumers, offer exclusive promotions and discounts.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				<img src="images/case-studies/travel-agency-app/travel-app-visuals-2.webp" alt="Travel App Visuals" class="img-fluid">
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="1.0s">
			<div class="col-lg-6 text-start">
				<img src="images/case-studies/travel-agency-app/travel-app-visuals-3.webp" alt="Travel App Visuals" class="img-fluid">
			</div>
			<div class="col-lg-6 mt-5 my-lg-auto text-end">
				<h5 class="travel-sub-heading">Check Out</h5>
				<p class="text-end">Users can utilize a variety of dynamic filters to find the services they want based on their needs and wants.</p>
				<hr class="my-5 d-block ms-auto">
				<h5 class="travel-sub-heading">Payment Gateways</h5>
				<p class="text-end">Convenient transactions and check-outs with popular and advanced payment methods.</p>
			</div>
		</div>
	</div>
</section>
<!--End Features-->

<section class="travel-app my-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-center wow fadeIn" data-wow-delay="0.2s">
				<img src="images/case-studies/app-store.webp" alt="App Store" class="img-fluid">
			</div>
			
			<div class="col-md-6 text-center wow fadeIn" data-wow-delay="0.4s">
				<img src="images/case-studies/google-play.webp" alt="Google Play" class="img-fluid">
			</div>
		</div>
	</div>
</section>
@endsection