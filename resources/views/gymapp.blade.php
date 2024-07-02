@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2 gym-app">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container wow fadeIn" data-wow-delay="0.2s">
		<div class="row">
			<div class="col-lg-6 my-auto">
			<img src="images/case-studies/gym-app/header-logo.webp" class="img-fluid" alt="Gym App Logo">
				<div class="bread-titlev2 mt-4">
					<h1 class="text-white">Welcome to</h1>
					<h1 class="span">GYMNASIUM</h1>
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0">
				<img src="images/case-studies/gym-app/header-phone.webp" class="img-fluid" alt="Gym App">
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb Area-->

<!--Start About-->
<section class="gym-about py-5 wow fadeIn" data-wow-delay="0.4s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-auto">
				<div class="common-heading">
					<h2>Best App</h2>
					<h2 class="span">For Fitness</h2>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img src="images/case-studies/gym-app/about-gym.webp" alt="Gym App" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start About Project-->
<section class="gym-goal py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="common-heading">
					<h2 class="text-white text-center">Project Goal</h1>
					<p class="text-white text-center">Our fitness app's goal is to provide expert-led exercise instruction, enabling users to access professional training and support anywhere. We aim to enhance physical fitness through a personalized, interactive learning experience. The project aspires to be a pivotal tool for users to achieve their health and wellness goals with professional guidance.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About Project-->

<!--Start Project Idea-->
<section class="gym-project-idea py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Project Idea</h2>
					<p class="text-middle">The project idea for this fitness application is to create a virtual training platform that connects users with professional fitness instructors for personalized exercise guidance. The app will feature a wide array of workout routines, nutritional advice, and progress tracking tools to cater to diverse fitness goals and preferences. Interactive features such as live classes, community challenges, and real-time feedback will be integral to creating an engaging and supportive environment that motivates users to maintain a healthy lifestyle.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img src="images/case-studies/gym-app/gym-app-visuals-1.webp" alt="Gym App Visuals" class="img-fluid">
			</div>
		</div>
	</div>
</section> 
<!--End Project Idea-->

<!--Start Target Audience-->
<section class="gym-target-audience py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				<img src="images/case-studies/gym-app/gym-app-visuals-2.webp" alt="Gym App Visuals" class="img-fluid">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Target Audience</h2>
					<p class="text-middle">The target audience for this fitness application includes health-conscious individuals seeking structured workout routines, from beginners requiring step-by-step guidance to advanced fitness enthusiasts looking to refine their technique. It is tailored for busy professionals who value the convenience of exercising on their schedule, at-home fitness devotees, and those who prefer the privacy and comfort of a personal training experience without the need for a gym membership. The app also targets individuals seeking a community of like-minded fitness peers and expert advice to stay motivated and accountable in their fitness journey.</p>
				</div>
			</div>	
		</div>
	</div>
</section> 
<!--End Target Audience-->


<!--Start Project Challenges-->
<section class="gym-project-challanges py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Project Challenges</h2>
					<p class="text-middle">One of the primary challenges for this fitness application is ensuring a user-friendly interface that caters to all levels of tech-savviness, enabling easy navigation and access to workout programs. Another challenge is creating personalized, adaptive workout content that can suit a wide range of fitness levels and goals while also ensuring the accuracy of exercise guidance to prevent injuries. Additionally, the project faces the task of maintaining user engagement and retention through motivational tools and community features in a market saturated with health and fitness apps. Technological hurdles such as seamless video streaming, data security, and integration with wearable devices for tracking progress will also be significant to address.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img src="images/case-studies/gym-app/gym-app-visuals-3.webp" alt="Gym App Visuals" class="img-fluid">
			</div>
		</div>
	</div>
</section> 
<!--End Project Challenges-->

<!--Start Solutions Delivered-->
<section class="gym-solutions-delivered py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				<img src="images/case-studies/gym-app/gym-app-visuals-4.webp" alt="Gym App Visuals" class="img-fluid">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Solution Delivered</h2>
					<p class="text-middle">The solution delivered for this fitness application encompasses a highly intuitive and engaging user interface, ensuring ease of use for individuals across all demographics. It offers a vast library of on-demand and live video workouts, led by certified professionals, which are customizable to match user preferences and fitness levels. The app integrates advanced tracking features that sync with wearable technology to monitor progress, and it incorporates AI-driven recommendations to adapt to user performance and feedback. To foster community and maintain engagement, the app includes social sharing capabilities, milestone celebrations, and competitive challenges. Ensuring data privacy and providing robust customer support round out the comprehensive solution this fitness application offers to its users.</p>
				</div>
			</div>
		</div>
	</div>
</section> 
<!--End Solutions Delivered-->

<!--Start Results/Impact-->
<section class="gym-results-impact py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Results/Impact</h2>
					<p class="text-middle">The results/impact of this fitness application have been substantial, with a notable increase in user engagement and retention rates. Users report improved fitness outcomes, attributing their success to the personalized training regimens and professional guidance. The application has also fostered a strong community, leading to increased motivation and accountability among users. Data analytics indicate a significant uptick in daily active users, with positive feedback highlighting the app's user-friendly design and effective workout programs. Overall, the app has made a marked impact on users’ health and wellness, positioning itself as a pivotal tool in their fitness journeys.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img src="images/case-studies/gym-app/gym-app-visuals-1.webp" alt="Gym App Visuals" class="img-fluid">
			</div>
		</div>
	</div>
</section> 
<!--End Results/Impact-->

<!--Start Conclusion-->
<section class="gym-conclusion py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				<img src="images/case-studies/gym-app/gym-app-visuals-2.webp" alt="Gym App Visuals" class="img-fluid">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Conclusion</h2>
					<p class="text-middle">In conclusion, this fitness application has successfully bridged the gap between professional training and home workouts, offering users an accessible, personalized fitness experience. With its comprehensive features, user-centric design, and community-driven approach, the app has not only met its project goals but has also cultivated a loyal user base that values the health benefits and convenience it provides. Its positive impact on users' fitness routines underscores its effectiveness as a transformative tool in the digital wellness landscape.</p>
				</div>
			</div>
		</div>
	</div>
</section> 
<!--End Conclusion-->

<!--Start Design-->
<section class="gym-design-process py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading text-center design-text">
					<h2 class="mb30">Design Process</h2>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.4s">
				<div class="gym-app-sketching-icon">
					<img src="images/case-studies/gym-app/sketching-icon.webp" alt="Sketching" class="img-fluid">
				</div>
				<h5 class="pt-3">Sketching</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.6s">
				<div class="gym-app-wireframe-icon">
					<img src="images/case-studies/gym-app/wireframe-icon.webp" alt="Wireframe" class="img-fluid">
				</div>
				<h5 class="pt-3">Wireframe</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.8s">
				<div class="gym-app-branding-icon">
					<img src="images/case-studies/gym-app/branding-icon.webp" alt="Branding" class="img-fluid">
				</div>
				<h5 class="pt-3">Branding</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="1.0s">
				<div class="gym-app-visuals-icon">
					<img src="images/case-studies/gym-app/visuals-icon.webp" alt="Visuals" class="img-fluid">
				</div>
				<h5 class="pt-3">Visuals</h5>
			</div>
		</div>
	</div>
</section>
<!--End Design-->

<!--Start Sketching-->
<section class="gym-sketching py-5">
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
		<img src="images/case-studies/gym-app/sketching.webp" alt="Sketching" class="img-fluid w-100">
	</div>
</section>
<!--End Sketching-->

<!--Start Wireframe-->
<section class="gym-wireframe py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center">
					<h2 class="mb30">Wireframes</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="sketching-img-div pt-3 wow fadeIn" data-wow-delay="0.4s">
		<img src="images/case-studies/gym-app/wireframes.webp" alt="Wireframe" class="img-fluid w-100">
	</div>
</section>
<!--End Wireframe-->

<!--Start Color Pallate-->
<section class="gym-color py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center">
					<h2 class="mb30">Color Pallate</h2>
				</div>
			</div>
			<div class="col-lg-6 mt-5 wow fadeIn text-center" data-wow-delay="0.4s">
				<h4 class="text-center">Tints</h4>
				<img src="images/case-studies/gym-app/tints.webp" alt="Tints" class="img-fluid">
			</div>
			<div class="col-lg-6 mt-5 text-center wow fadeIn" data-wow-delay="0.6s">
				<h4 class="text-center">Shades</h4>
				<img src="images/case-studies/gym-app/shades.webp" alt="Shades" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<!--End Color Pallate-->

<!--Start Typography-->
<section class="gym-typography py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center">
					<h2 class="mb30">Typography</h2>
				</div>
			</div>
			<div class="col-12 mt-5 text-center wow fadeIn" data-wow-delay="0.4s">
				<img src="images/case-studies/gym-app/typography.webp" alt="Typography" class="img-fluid">
			</div>
		</div> 
	</div>
</section>
<!--End Typography-->

<!--Start Visuals-->
<section class="gym-visuals py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center visual-text">
					<h2 class="mb30">Visuals</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="gym-visuals-background pt50 pb50">
		<div class="container">
			<div class="row mt-4 mt-lg-0">
				<div class="col-12 col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.4s">
					<img src="images/case-studies/gym-app/gym-app-visuals-1.webp" alt="Gym App Visuals" class="img-fluid gym-app-visuals-1">
				</div>
				<div class="col-12 col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.6s">
					<img src="images/case-studies/gym-app/gym-app-visuals-2.webp" alt="Gym App Visuals" class="img-fluid gym-app-visuals-2">
				</div>
				<div class="col-12 col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.8s">
					<img src="images/case-studies/gym-app/gym-app-visuals-3.webp" alt="Gym App Visuals" class="img-fluid gym-app-visuals-3">
				</div>
				<div class="col-12 col-md-6 col-lg-3 wow fadeIn" data-wow-delay="1.0s">
					<img src="images/case-studies/gym-app/gym-app-visuals-4.webp" alt="Gym App Visuals" class="img-fluid gym-app-visuals-4">
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Visuals-->

<!--Start Features-->
<section class="gym-features py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12 wow fadeIn">
				<div class="common-heading text-center">
					<h2 class="mb-0">Features</h2>
				</div>
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.4s">
			<div class="col-lg-6 my-lg-auto">
				<h5 class="gym-sub-heading">Management of Profile</h5>
				<p>Set and Edit your profile information and change your account password with this feature. Our profile system allows you to connect with your friends.</p>
				<hr class="my-5">
				<h5 class="gym-sub-heading">Management of Health</h5>
				<p>Set and track your fitness goals with the help of a calorie counter, a sleep tracker, and a heart rate monitor. You can also look at your prior work.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				<img src="images/case-studies/gym-app/gym-app-visuals-1.webp" alt="Gym App Visuals" class="img-fluid">
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.6s">
			<div class="col-lg-6 text-start">
				<img src="images/case-studies/gym-app/gym-app-visuals-2.webp" alt="Gym App Visuals" class="img-fluid">
			</div>
			<div class="col-lg-6 mt-5 my-lg-auto text-end">
				<h5 class="gym-sub-heading">Management of Timeline</h5>
				<p class="text-end">Create and share updates/statuses with your friends to keep your timeline up to date.</p>
				<hr class="my-5 d-block ms-auto">
				<h5 class="gym-sub-heading">Management of Newsfeed</h5>
				<p class="text-end">Configure your newsfeed items and read Admin's replies, messages, and articles. Also, like and share your friends' posts and statuses on your page.</p>
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.8s">
			<div class="col-lg-6 my-lg-auto">
				<h5 class="gym-sub-heading">Favourite Panel</h5>
				<p>This feature facilitates the user with a logical and systematic approach to calculating and obtaining the best mortgage rates.</p>
				<hr class="my-5">
				<h5 class="gym-sub-heading">Meal Plan</h5>
				<p>To entice your loyal consumers, offer exclusive promotions and discounts.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				<img src="images/case-studies/gym-app/gym-app-visuals-3.webp" alt="Gym App Visuals" class="img-fluid">
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="1.0s">
			<div class="col-lg-6 text-start">
				<img src="images/case-studies/gym-app/gym-app-visuals-4.webp" alt="Gym App Visuals" class="img-fluid">
			</div>
			<div class="col-lg-6 mt-5 my-lg-auto text-end">
				<h5 class="gym-sub-heading">View Recipes</h5>
				<p class="text-end">Users can utilize a variety of dynamic filters to find the services they want based on their needs and wants.</p>
				<hr class="my-5 d-block ms-auto">
				<h5 class="gym-sub-heading">View Videos</h5>
				<p class="text-end">Recipes, meal plans, and workouts are all available in video format.</p>
			</div>
		</div>
	</div>
</section>
<!--End Features-->

<!--Start Download App-->
<section class="my-5">
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
<!--End Download App-->
@endsection