@extends('app.main')
@section('content')
<!-- Start Breadcrumb Area -->
<section class="breadcrumb-areav2 uae-banner">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-sm-12 col-xl-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Mobile App Development Company in the UAE</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">AppsNation is a top mobile app development company in the UAE, specialising in custom iOS, Android, cross-platform, and enterprise solutions.  Our expert team delivers scalable, high-performance mobile applications tailored to business needs across the Emirates.  Whether you're a startup, SME, or large enterprise, we support you from idea to launch and beyond. Let’s build something remarkable — tailored for your UAE audience.</p>
				</div>
				<div class="row mt-3">
					<div class="col-md-4">
						<div class="card h-100">
							<div class="card-body">
								<img src="images/locations/clutch.webp" alt="Clutch" class="img-fluid d-block mx-auto">
								<img src="images/locations/star.webp" alt="Star" class="img-fluid d-block mx-auto mt-3">
								<p class="text-white text-center pt-2">Recognized as Top App Developers by Clutch</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mt-3 mt-md-0">
						<div class="card h-100">
							<div class="card-body">
								<img src="images/locations/goodfirms.webp" alt="GoodFirms" class="img-fluid d-block mx-auto">
								<img src="images/locations/star.webp" alt="Star" class="img-fluid d-block mx-auto mt-3">
								<p class="text-white text-center pt-2">Recognized as Top App Developers by GoodFirms</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mt-3 mt-md-0">
						<div class="card h-100">
							<div class="card-body">
								<img src="images/locations/designrush.webp" alt="DesignRush" class="img-fluid d-block mx-auto">
								<img src="images/locations/star.webp" alt="Star" class="img-fluid d-block mx-auto mt-3">
								<p class="text-white text-center pt-2">Recognized as Top App Developers by DesignRush</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-12 col-xl-4 mt-3 mt-xl-0 wow fadeIn">
				<div class="niwax23form shadow">
                    <div class="common-heading text-l">
                            {!! NoCaptcha::renderJs() !!}
                        <h2 class="mt0 mb0">Book a Free <span>Consultation</span></h2>
                    </div>
                    <div class="form-block contact-us-form">
                    <form id="contactForm33" method="post" data-toggle="validator" class="shake" action="{{route('leads')}}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" name="first_name" id="first_name" placeholder="Enter First Name" required="" data-error="Please fill Out" maxlength="50">
                                <div class="help-block with-errors"></div>
                            </div>
							<div class="form-group col-sm-6">
                                <input type="text" name="last_name" id="last_name" placeholder="Enter Last Name" required="" data-error="Please fill Out" maxlength="50">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="row">
							<div class="form-group col-sm-12">
                                <input type="email" name="email" id="email" placeholder="Enter email" required="" maxlength="50">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="row">
							<div class="form-group col-sm-12">
									<input type="text" id="mobile" name="mobile" placeholder="Enter mobile" required="" data-error="Please fill Out" maxlength="20">
									<div class="help-block with-errors"></div>
								</div>
							</div>
                        <div class="form-group">
                            <textarea id="message" name="message" rows="5" placeholder="Enter your message" required="" maxlength="500"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group mb-2 captchaContainer3" id="captchaContainer" >
                                {!! NoCaptcha::display() !!}
                            </div>
                        <button type="submit" name="submit" id="form-submit" class="btn button-arounder lnk">Submit
                            <i class="fas fa-chevron-right fa-icon"></i>
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </form>
                </div>
			</div>
		</div>
	</div>
</section>
<!-- End Breadcrumb -->

<!-- Start About -->
<section class="about py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="Mobile" class="light-bg-text bg-text">
						<h2>A Beginner's Guide to Mobile App Innovation in the UAE</h2>
					</div>
					<p>As digital transformation accelerates in the UAE, mobile applications have become essential for businesses across industries.  Our team at AppsNation is at        the forefront of creating innovative mobile app development solutions that blend user experience, speed, and functionality.  If you're ready to grow your business in the UAE, we're here to turn your vision into a powerful mobile platform.</p>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="image-block wow fadeIn">
					<img src="images/locations/uae/uae.webp" alt="uae" class="img-fluid no-shadow" />
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End About -->

<!-- Start About -->
<section class="uae-about pt60 pb60">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="Mobile" class="light-bg-text bg-text">
						<h2 class="text-white">Result-Driven Mobile App Development in the UAE  Built to Scale</h2>
					</div>
					<p class="text-white">With nearly 99% mobile penetration in the UAE and over 90% of online interactions happening via smartphones, mobile apps are no longer optional;  they're essential.</p>
					<p class="text-white">Your business will have a significant advantage if it chooses to target Dubai, Abu Dhabi, Sharjah, or the entire UAE by investing in custom mobile app development. Through seamless mobile experiences, AppsNation helps UAE businesses reach more users, increase engagement, and increase revenue.</p>
					<a href="{{url('/contact-us')}}" class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3" data-wow-delay="0.8s">Get Consultation <i class="fas fa-chevron-right fa-ani"></i></a>
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeIn">
				<img src="images/locations/uae/scale-your-business.webp" alt="Scale Your Business" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<!-- End About -->

<!-- Start Service -->
<section class="service-section py-5 dark-bg2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="common-heading ptag">
					<div data-text="Our Services" class="light-bg-text bg-text text-center">
						<h2>Our App Development Services in the UAE</h2>
						<p>Our comprehensive mobile app development services are designed to serve businesses across the UAE, from Abu Dhabi to Ajman and beyond.</p>
					
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-4 fadeIn">
				<div class="card h-100">
					<div class="card-body">
						<div class="services-img-div">
							<img src="images/home/android-app-development-icon.svg" alt="Android App Development" class="img-fluid">
						</div>
						<div class="service-heading">
							<h4>Android App Development</h4>
						</div>
						<div class="services-text-div">
							<p>Our Android developers specialise in Kotlin, Java, and Flutter to create fast, scalable, and secure apps.  Every feature is customised to meet the unique needs and expectations of the UAE market.</p>
							<a href="{{url('/android-app-development')}}" class="mt20 link-prbs">Read More
								<i class="fas fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt-3 mt-md-0 fadeIn">
				<div class="card h-100">
					<div class="card-body">
						<div class="services-img-div">
							<img src="images/home/ios-app-development-icon.svg" alt="iOS App Development" class="img-fluid">
						</div>
						<div class="service-heading">
							<h4>iOS App Development</h4>
						</div>
						<div class="services-text-div">
							<p>We craft Swift-based iOS applications that are sleek, secure, and optimised for iPhones, iPads, Apple Watches, and more.  Our designs cater to both UAE businesses and global scalability.</p>
							<a href="{{url('/ios-app-development')}}" class="mt20 link-prbs">Read More
								<i class="fas fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt-3 mt-lg-0 fadeIn">
				<div class="card h-100">
					<div class="card-body">
						<div class="services-img-div">
							<img src="images/home/cross-platform-app-development-icon.svg" alt="Cross Platform App Development" class="img-fluid">
						</div>
						<div class="service-heading">
							<h4>Cross-Platform App Development</h4>
						</div>
						<div class="services-text-div">
							<p>Using React Native and Flutter, we build powerful cross-platform apps that ensure smooth performance across Android and iOS.  This reduces costs while expanding your reach within the UAE market.</p>
							<a href="{{url('/cross-platform-app-development')}}" class="mt20 link-prbs">Read More
								<i class="fas fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt-3 wow fadeIn">
				<div class="card h-100">
					<div class="card-body">
						<div class="services-img-div">
							<img src="images/home/game-app-development-icon.svg" alt="Game App Development" class="img-fluid">
						</div>
						<div class="service-heading">
							<h4>Game App Development</h4>
						</div>
						<div class="services-text-div">
							<p>We bring ideas to life with immersive game apps using Unity, Unreal, and CryEngine.  Tailored for the UAE’s rapidly growing mobile gaming community, we offer unique, engaging experiences.</p>
							<a href="{{url('/game-app-development')}}" class="mt20 link-prbs">Read More
								<i class="fas fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt-3 wow fadeIn">
				<div class="card h-100">
					<div class="card-body">
						<div class="services-img-div">
							<img src="images/home/web-app-development-icon.svg" alt="Web App Development" class="img-fluid">
						</div>
						<div class="service-heading">
							<h4>Web App Development</h4>
						</div>
						<div class="services-text-div">
							<p>Our responsive web apps utilise advanced stacks like Node.js and WebSockets, ensuring fast, secure, and scalable platforms that help UAE businesses thrive.</p>
							<a href="{{url('/web-app-development')}}" class="mt20 link-prbs">Read More
								<i class="fas fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
					
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt-3 wow fadeIn">
				<div class="card h-100">
					<div class="card-body">
						<div class="services-img-div">
							<img src="images/home/wearable-app-development-icon.svg" alt="Wearable App Development" class="img-fluid">
						</div>
						<div class="service-heading">
							<h4>Wearable App Development</h4>
						</div>
						<div class="services-text-div">
							<p>We design smart, real-time apps for wearables, catering to the modern UAE consumer’s needs in health, fitness, logistics, and beyond.</p>
							<a href="{{url('/wearable-app-development')}}" class="mt20 link-prbs">Read More
								<i class="fas fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt-3 fadeIn">
				<div class="card h-100">
					<div class="card-body">
						<div class="services-img-div">
							<img src="images/home/ar-app-development-icon.svg" alt="AR App Development" class="img-fluid">
						</div>
						<div class="service-heading">
							<h4>AR App Development</h4>
						</div>
						<div class="services-text-div">
							<p>By combining the real and digital worlds, our augmented reality apps transform the tourism, retail, and education sectors in the UAE by providing virtual try-ons, smart guides, and other features.</p>
							<a href="{{url('/ar-app-development')}}" class="mt20 link-prbs">Read More
								<i class="fas fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt-3 fadeIn">
				<div class="card h-100">
					<div class="card-body">
						<div class="services-img-div">
							<img src="images/home/vr-app-development-icon.svg" alt="VR App Development" class="img-fluid">
						</div>
						<div class="service-heading">
							<h4>VR App Development</h4>
						</div>
						<div class="services-text-div">
							<p>We develop immersive virtual reality experiences for shopping, training, and exploration. Our VR solutions engage users on a deeper level, driving customer interaction in the UAE.</p>
							<a href="{{url('/vr-app-development')}}" class="mt20 link-prbs">Read More
								<i class="fas fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt-3 fadeIn">
				<div class="card h-100">
					<div class="card-body">
						<div class="services-img-div">
							<img src="images/home/mr-app-development-icon.svg" alt="MR App Development" class="img-fluid">
						</div>
						<div class="service-heading">
							<h4>MR App Development</h4>
						</div>
						<div class="services-text-div">
							<p>As pioneers in mixed reality, we blend digital and physical worlds to deliver innovative experiences for UAE businesses, setting the stage for a future in the metaverse.</p>
							<a href="{{url('/mr-app-development')}}" class="mt20 link-prbs">Read More
								<i class="fas fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Service -->

<!-- Start Technologies -->
<section class="technologies certificates py-5">
	<div class="container">
		<div class="row fadeIn">
			<div class="col-12">
				<div class="common-heading text-center">
					<div data-text="Partners" class="dark-bg-text bg-text text-center">
						<h2 class="text-white">We collaborate with the world's leading tech companies</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
				<div>
					<img src="images/home/google-certifie-agency.webp" alt="Google Developers">
					<h6 class="pt-3">Google Developer<br>Certified Agency</h6>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
				<div>
					<img src="images/home/adobe-logos.webp" alt="Adobe Solution Partner">
					<h6 class="pt-3">Adobe Solution<br>Partner Program</h6>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
				<div>
					<img src="images/home/microsoft-certified-partner.webp" alt="Microsoft Certified Consulting">
					<h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
				<div>
					<img src="images/home/amazon-web-services.webp" alt="Amazon Web Service">
					<h6 class="pt-3">Amazon Web<br>Service Partner</h6>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Technologies -->

<!-- Start Portfolio -->
<section class="portfolio-section py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 fadeIn">
				<div class="common-heading">
					<div data-text="Our Portfolio" class="light-bg-text bg-text text-center">
						<h2 class="mb20 text-center">Our Featured Mobile App Projects in the UAE</h2>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="container pb-5">
		<ul class="nav nav-pills justify-content-center fadeIn" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" data-bs-toggle="pill" href="#app">App</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="pill" href="#web">Web</a>
			</li>
		</ul>
		<div class="tab-content mt-5 wow fadeIn">
			<div id="app" class="tab-pane active">
				<div class="row mt60">
					<div class="col-lg-12 col-sm-12 wptbb">
						<div class="pbwide shadow bg-gradient1">
							<div class="portfolio-item-info-tt">
								<div class="logowide mb20">
									<img src="images/case-studies/gym-logo.webp" alt="Gym App" class="img-fluid">
								</div>
								<div class="widebloktag">
									<span class="text-white">UI/UX Design</span>
								</div>
								<div class="widebloktag mt-4">
									<span class="text-white">Mobile App Development</span>
								</div>
								<h3 class="mt30 mb30">Gym App UAE</h3>
								<p class="mb30">empowering UAE fitness enthusiasts with smart training programmes, reminders, and in-app purchases that are precisely tailored to the wellness-driven audience in the UAE.</p>
								<ul class="info-list-ul">
									<li>Personalized Workouts</li>
									<li>Real-Time Coaching</li>
									<li>Nutrition Plans</li>
									<li>Subscription-Based Upgrades</li>
								</ul>
								<a href="{{url('/case-studies/gym-app')}}" class="btn-outline lnk mt30">View Case Study 
									<i class="fas fa-chevron-right fa-icon"></i>
									<span class="circle"></span>
								</a>
							</div>
							<div class="portfolio-wide-image">
								<div class="img-wide-blocktt tilt-outer">
									<div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
										<div>
											<img src="images/home/gym-app.webp" alt="Gym App" class="img-fluid">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-sm-12 wptbb">
						<div class="pbwide shadow bg-gradient1">
							<div class="portfolio-item-info-tt">
								<div class="logowide mb20">
									<img src="images/case-studies/real-estate-logo.webp" alt="Real Estate App" class="img-fluid">
								</div>
								<div class="widebloktag">
									<span class="text-white">UI/UX Design</span>
								</div>
								<div class="widebloktag mt-4">
									<span class="text-white">Mobile App Development</span>
								</div>
								<h3 class="mt30 mb30">Real Estate App UAE</h3>
								<p class="mb30">Helping property buyers and agents in the UAE find, view, and manage listings with our intuitive, map-based, multilingual real estate platform.</p>
								<ul class="info-list-ul">
									<li>3D Virtual Tours</li>
									<li>Mortgage Calculator</li>
									<li>IDX Listings</li>
									<li>Secure In-App Payments</li>
								</ul>
								<a href="{{url('/case-studies/real-estate-app')}}" class="btn-outline lnk mt30">View Case Study 
									<i class="fas fa-chevron-right fa-icon"></i>
									<span class="circle"></span>
								</a>
							</div>
							<div class="portfolio-wide-image">
								<div class="img-wide-blocktt tilt-outer">
									<div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
										<div>
											<img src="images/home/real-estate-app.webp" alt="Real Estate App" class="img-fluid">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="web" class="tab-pane fade">
				<div class="row mt60">
					<div class="col-lg-12 col-sm-12 wptbb">
						<div class="pbwide shadow bg-gradient1">
							<div class="portfolio-item-info-tt">
								<div class="logowide mb20">
									<img src="images/case-studies/gym-logo.webp" alt="Gym App" class="img-fluid">
								</div>
								<div class="widebloktag">
									<span class="text-white">UI/UX Design</span>
								</div>
								<div class="widebloktag mt-4">
									<span class="text-white">Website Development</span>
								</div>
								<h3 class="mt30 mb30">Gym Web UAE</h3>
								<p class="mb30">Our UAE-based Gym Web Development solution is more than just a fitness platform; it also serves as a nutritionist, personal trainer, and coach all rolled into one. Designed for fitness centres and gyms across the UAE, it features a sleek, modern interface to streamline operations and enhance client engagement.</p>
								<ul class="info-list-ul">
									<li>Content Management</li>
									<li>User Management</li>
									<li>Booking System</li>
									<li>Promotions</li>
								</ul>
								<a href="{{url('/case-studies/gym-web')}}" class="btn-outline lnk mt30">View Case Study 
									<i class="fas fa-chevron-right fa-icon"></i>
									<span class="circle"></span>
								</a>
							</div>
							<div class="portfolio-wide-image">
								<div class="img-wide-blocktt tilt-outer">
									<div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
										<div>
											<img src="images/home/gym-web.webp" alt="Gym Web" class="img-fluid">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-sm-12 wptbb">
						<div class="pbwide shadow bg-gradient1">
							<div class="portfolio-item-info-tt">
								<div class="logowide mb20">
									<img src="images/case-studies/real-estate-logo.webp" alt="Real Estate Web" class="img-fluid">
								</div>
								<div class="widebloktag">
									<span class="text-white">UI/UX Design</span>
								</div>
								<div class="widebloktag mt-4">
									<span class="text-white">Website Development</span>
								</div>
								<h3 class="mt30 mb30">Real Estate Web UAE</h3>
								<p class="mb30">Avenue is a comprehensive real estate web development solution based in the United Arab Emirates that is designed to make the buying and selling of real estate a breeze. Built for real estate agencies and property developers in the UAE, it combines smart design with powerful features to elevate your digital property platform.</p>
								<ul class="info-list-ul">
									<li>Intuitive Dashboard</li>
									<li>Property Management</li>
									<li>Mortgage Tools</li>
									<li>User Management</li>
								</ul>
								<a href="{{url('/case-studies/real-estate-web')}}" class="btn-outline lnk mt30">View Case Study 
									<i class="fas fa-chevron-right fa-icon"></i>
									<span class="circle"></span>
								</a>
							</div>
							<div class="portfolio-wide-image">
								<div class="img-wide-blocktt tilt-outer">
									<div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
										<div>
											<img src="images/home/real-estate-web.webp" alt="Real Estate Web" class="img-fluid">
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
</section>
<!-- End Portfolio -->

<!-- Start Badges -->
<section class="badges-section py-5">
	<div class="container">
		<div class="row fadeIn">
			<div class="col-12">
				<div class="common-heading w-tdxt text-center">
					<div data-text="Awards" class="dark-bg-text bg-text text-center">
						<h2 class="text-white">Ranked #1 <span>Mobile App</span> Development Company in UAE</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5 wow fadeIn">
			<div class="col-12">
				<div class="awards-slider owl-carousel owl-theme">

					@foreach($awards as $k => $item)

					@if($k%2==0)
					
					 @if($item['heading']=="Top Website design Agencies")
					 <a href="{{$item['comment']}}" target="_blank">
					 <div class="award-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="uploads/{{$item['image']}}" class="award-img">
									<h5 class="text-center pt-3">{{$item['heading']}}</h5>
									<p class="text-center pt-2">{{$item['content']}}</p>
								</div>
							</div>
						</div>
					 </div>
					 </a>

					 @else
					 <div class="award-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="uploads/{{$item['image']}}" class="award-img">
									<h5 class="text-center pt-3">{{$item['heading']}}</h5>
									<p class="text-center pt-2">{{$item['content']}}</p>
								</div>
							</div>
						</div>
					 </div>
					 @endif

					@else
					@if($item['heading']=="Top Website design Agencies")
					 <a href="{{$item['comment']}}" target="_blank">
					<div class="award-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="uploads/{{$item['image']}}" class="award-img">
									<h5 class="text-center pt-3">{{$item['heading']}}</h5>
									<p class="text-center pt-2">{{$item['content']}}</p>
								</div>
							</div>
						</div>
					</div>
					 </a>
					 @else
					 <div class="award-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="uploads/{{$item['image']}}" class="award-img">
									<h5 class="text-center pt-3">{{$item['heading']}}</h5>
									<p class="text-center pt-2">{{$item['content']}}</p>
								</div>
							</div>
						</div>
					</div>
					@endif
					@endif
					@endforeach

				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Badges -->

<!-- Start Process -->
<section class="process-block bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Process" class="light-bg-text bg-text mt-5">
						<h2>Our Proven <span>Mobile App Development</span> Process in the UAE</h2>
					</div>
					<p>AppsNation takes a smooth and flexible approach to building Android apps for its clients, always focusing on tangible results.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">01</p>
					<h3 class="title">Requirement Analysis</h3>
					<p class="description">Our UAE app development begins with extensive user behaviour and business requirements research. We analyse your audience, define features, and plan intuitive user flows.  Using modern technologies, we craft culturally relevant UI/UX designs that suit how users in the UAE interact with mobile apps daily.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">02</p>
					<h3 class="title">App Development Strategies</h3>
					<p class="description">Our UAE-based developers specialise in creating fast, cloud-powered mobile apps.  We focus on smart planning, innovation, and rapid feature delivery.  Our strategies turn bold ideas into impactful apps that meet the evolving expectations of businesses and users across the Emirates.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">03</p>
					<h3 class="title">Wireframing And Designing</h3>
					<p class="description">We begin with clear wireframes that form the base of standout UI/UX designs tailored to the UAE market.  Whether your business is in Dubai or Abu Dhabi, our team ensures your app reflects local trends and user preferences with fully customised design solutions.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">04</p>
					<h3 class="title">Development Phase</h3>
					<p class="description">We build scalable, high-performing apps for UAE businesses.  Every component, from frontend design to backend development, is designed for speed and stability. Our team manages all technical aspects, so you can focus on your business while we deliver seamless mobile experiences.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">05</p>
					<h3 class="title">App Testing</h3>
					<p class="description">We conduct thorough testing to ensure your app runs smoothly and securely across all devices.  Our UAE-focused QA process covers common and complex scenarios to eliminate bugs and ensure excellent performance, making your app reliable from day one.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">06</p>
					<h3 class="title">App Deployment</h3>
					<p class="description">We prepare your app for launch on the Play Store, App Store, or internal platforms after testing is finished. We take care of all updates, database changes, and API tuning to keep your app competitive in the UAE market after launch and ensure smooth performance.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Process -->

<!-- Start Let's Work Together -->
<div class="row justify-content-center hire-developer hire-developer-app-development">
	<div class="col-lg-7">
		<div class="free-cta-title v-center wow fadeIn">
			<p class="text-center text-lg-start text-white">We Keep Our Promises to <span>Excellence</span></p>
		</div>
		<div class="hire-developer-img d-none d-xl-block">
			<img src="images/locations/uae/hire-developer.webp" alt="Hire Developer" class="img-fluid">
		</div>
	</div>
</div>
<!-- End Let's Work Together -->

<!-- Start Services -->
<section class="services-section mb-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn text-center">
					<div data-text="Services" class="light-bg-text bg-text mt-5 text-center">
						<h2>Our Services in the <span>UAE</span>. Get in touch with us to learn more!</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="owl-carousel owl-theme services-carousel">
					<div class="item">
						<img src="images/locations/services/mobile-app-development.webp" alt="Mobile App Development" class="img-fluid">
						<div class="text">
							<h2>Mobile App Development</h2>
							<a href="{{url('/mobile-app-development')}}" class="btn btn-light text-black">Read More <i class="fa-solid fa-arrow-right ps-2"></i></a>
						</div>
					</div>
					<div class="item">
						<img src="images/locations/services/web-portal-development.webp" alt="Mobile App Development" class="img-fluid">
						<div class="text">
							<h2>Web Portal Development</h2>
							<a href="{{url('/web-portal-app-development')}}" class="btn btn-light text-black">Read More <i class="fa-solid fa-arrow-right ps-2"></i></a>
						</div>
					</div>
					<div class="item">
						<img src="images/locations/services/xr-app-development.png" alt="Mobile App Development" class="img-fluid">
						<div class="text">
							<h2>XR Development</h2>
							<a href="{{url('/xr-app-development')}}" class="btn btn-light text-black">Read More <i class="fa-solid fa-arrow-right ps-2"></i></a>
						</div>
					</div>
					<div class="item">
						<img src="images/locations/services/connected-devices.webp" alt="Mobile App Development" class="img-fluid">
						<div class="text">
							<h2>Connected Devices</h2>
							<a href="{{url('/connected-devices')}}" class="btn btn-light text-black">Read More <i class="fa-solid fa-arrow-right ps-2"></i></a>
						</div>
					</div>
					<div class="item">
						<img src="images/locations/services/design-and-animation-services.webp" alt="Mobile App Development" class="img-fluid">
						<div class="text">
							<h2>Design & Animation Services</h2>
							<a href="{{url('/design-and-animation')}}" class="btn btn-light text-black">Read More <i class="fa-solid fa-arrow-right ps-2"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Services -->

<!-- Start About -->
<section class="uae-partner pt60 pb60 mt-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="Partner" class="light-bg-text bg-text">
						<h2 class="text-white">Collaborate with a <span class="flup-theme">Top Mobile App Development</span> Firm in the UAE</h2>
					</div>
					<p class="text-white">Become one of the hundreds of UAE businesses that trust AppsNation. We've constantly surpassed expectations, and now, we're excited to take on your project. Our specialists are itching to get started.</p>
					<a href="{{url('/contact-us')}}" class="niwax-btn button-arounder btn mt-3 py-2 px-3">Get Consultation <i class="fas fa-chevron-right fa-ani"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End About -->

<!-- Start Let's Work Together -->
<div class="row py-5 justify-content-center hire-developer">
	<div class="col-lg-8">
		<div class="free-cta-title v-center wow fadeIn">
			<div class="row justify-content-center">
				<div class="col-lg-8 my-auto">
					<p class="text-center text-lg-start">Hire <span>mobile app developers</span> in the UAE</p>
				</div>
				<div class="col-lg-4 text-center text-lg-start mt-5 mt-lg-0">
					<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Let's Work Together
						<i class="fas fa-chevron-right fa-icon"></i>
						<span class="circle"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Let's Work Together -->

<!-- Start Testinomial -->
<section class="testimonials-section-app pt100 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading text-center">
                    <div data-text="Testimonials" class="dark-bg-text bg-text text-center">
                        <h2 class="text-white">Here's what <span>our clients</span> have to say about <span>AppsNation</span>.</h2>
                    </div>
                    <h5 class="text-white">Over 1200+ Satisfied Clients and Growing</h5>
                </div>
            </div>
        </div>
		
		
        <div class="testimonial-card-a owl-carousel owl-theme owl-theme">
            <!-- <div class="row mt-3 px-3"> -->
			@foreach($testimonials as $item)
                <!-- <div class="col-lg-6 mt-3 wow fadeIn"> -->
					<div class="tcd card h-100">
						<div class="testimonial-card card-body">
							<div class="tt-text">
								<p class="collapsible-text">{{$item['title']}}</p>
								<button class="btn btn-link toggle-btn">View More</button>
							</div>
							<div class="client-thumbs mt30">
								<div class="media v-center upset">
									<!-- <div class="user-image bdr-radius"> <img src="images/user-thumb/girl.webp" alt="girl" class="img-fluid rounded-circle" /> </div> -->
									<div class="media-body user-info v-center">
										<h5>{{$item['name']}}</h5>
										<p>{{$item['location']}}</p> <i class="fas fa-quote-right posiqut"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
                <!-- </div> -->
            @endforeach
            <!-- </div> -->
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://clutch.co/profile/appsnation#highlights" target="_blank">
									<img src="images/reviews/clutch.webp" class="img-fluid d-block mx-auto" alt="Clutch">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by Clutch</p>
								</a>
							</div>
						</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3 mt-md-0">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.bark.com/en/us/company/appsnation/wGVQn/" target="_blank">
									<img src="images/reviews/bark.webp" class="img-fluid d-block mx-auto" alt="Bark">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by Bark</p>
								</a>
							</div>
						</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3 mt-xl-0">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.designrush.com/agency/profile/appsnation" target="_blank">
									<img src="images/reviews/designrush.webp" class="img-fluid d-block mx-auto" alt="DesignRush">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by DesignRush</p>
								</a>
							</div>
						</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3 mt-xl-0">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.goodfirms.co/company/appsnation-co" target="_blank">
									<img src="images/reviews/goodfirms.webp" class="img-fluid d-block mx-auto" alt="GoodFirms">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by GoodFirms</p>
								</a>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.trustpilot.com/review/appsnation.co" target="_blank">
									<img src="images/reviews/trustpilot.webp" class="img-fluid d-block mx-auto" alt="Trustpilot">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by Trustpilot</p>
								</a>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.sortlist.com/agency/appsnation" target="_blank">
									<img src="images/reviews/sortlist.webp" class="img-fluid d-block mx-auto" alt="Sortlist">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by Sortlist</p>
								</a>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://upcity.com/profiles/appsnation" target="_blank">
									<img src="images/reviews/upcity.webp" class="img-fluid d-block mx-auto" alt="UpCity">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by UpCity</p>
								</a>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.sitejabber.com/reviews/appsnation.co" target="_blank">
									<img src="images/reviews/sitejabber.webp" class="img-fluid d-block mx-auto" alt="SiteJabber">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by SiteJabber</p>
								</a>
							</div>
						</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 fadeIn my-auto text-center">
                <div class="review-title-ref mt40">
                    <a href="{{url('/testimonials')}}" class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3">Read More Reviews <i class="fas fa-chevron-right fa-ani"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testinomial -->

<!-- Start Solutions -->
<section class="solutions-section py-5">
    <div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn text-center">
					<div data-text="Solutions" class="light-bg-text bg-text mt-5 text-center">
						<h2>Take a look at our cutting-edge portfolio and see why we’re the top choice for <span>custom mobile app development</span> in the USA.</h2>
					</div>
				</div>
			</div>
		</div>
    </div>
	<div class="row">
            <div class="col-12">
				<div class="owl-carousel owl-theme solutions-carousel">
					<div class="item booking-app-bg">
						<div class="container">
							<div class="row">
								<div class="col-lg-6">
									<img src="images/locations/booking-app/booking-app-1.webp" alt="Booking App" class="img-fluid d-block mx-auto">
								</div>
								<div class="col-lg-6 my-auto">
									<h3 class="mb-4 text-white">Booking App</h3>
									<p class="text-white">Travelicious, our cutting-edge app, will make your journey hassle-free. designed for travellers worldwide. It's more than just an app; it's your go-to. Partner with us for a hassle-free trip that is made for the modern adventurer.</p>
									<a href="{{url('/case-studies/travel-agency-app')}}" class="btn-outline lnk mt30">View Case Study
										<i class="fas fa-chevron-right fa-icon"></i>
										<span class="circle"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item fitness-app-bg">
						<div class="container">
							<div class="row">
								<div class="col-lg-6">
									<img src="images/locations/fitness-app/fitness-app-1.webp" alt="Fitness App" class="img-fluid d-block mx-auto">
								</div>
								<div class="col-lg-6 my-auto">
									<h3 class="mb-4 text-white">Fitness App</h3>
									<p class="text-white">Check out Gymnasium, our fresh, new fitness app! It's designed to be your go-to 
  workout companion. With its cool, modern vibe, it's ready to help you smash your 
  fitness targets, keep your training routine on point, and keep that passion for your 
  health and well-being burning bright.</p>
									<a href="{{url('/case-studies/gym-app')}}" class="btn-outline lnk mt30">View Case Study
										<i class="fas fa-chevron-right fa-icon"></i>
										<span class="circle"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item loyalty-app-bg">
						<div class="container">
							<div class="row">
								<div class="col-lg-6">
									<img src="images/locations/loyalty-app/loyalty-app-1.webp" alt="Loyalty App" class="img-fluid d-block mx-auto">
								</div>
								<div class="col-lg-6 my-auto">
									<h3 class="mb-4 text-white">Loyalty App</h3>
									<p class="text-white">Whether you're into the latest trends, timeless classics, or something in between, Our all-in-one e-commerce and loyalty app is your go-to destination.  Loved by millions, it brings you exclusive deals and cashback rewards, putting all your favourite stores right where you want them—on your phone.</p>
									<a href="{{url('/case-studies/loyalty-app')}}" class="btn-outline lnk mt30">View Case Study
										<i class="fas fa-chevron-right fa-icon"></i>
										<span class="circle"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item mover-app-bg">
						<div class="container">
							<div class="row">
								<div class="col-lg-6">
									<img src="images/locations/mover-app/mover-app-1.webp" alt="Mover App" class="img-fluid d-block mx-auto">
								</div>
								<div class="col-lg-6 my-auto">
									<h3 class="mb-4 text-white">Mover App</h3>
									<p class="text-white">Our Mover App simplifies moving by managing all your moving orders in a single location. Relax and let our efficient order take care of the rest by booking your move using the app. Management and customer engagement features handle everything else.</p>
									<a href="{{url('/case-studies/mover-app')}}" class="btn-outline lnk mt30">View Case Study
										<i class="fas fa-chevron-right fa-icon"></i>
										<span class="circle"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item real-estate-app-bg">
						<div class="container">
							<div class="row">
								<div class="col-lg-6">
									<img src="images/locations/real-estate-app/real-estate-app-1.webp" alt="Real Estate App" class="img-fluid d-block mx-auto">
								</div>
								<div class="col-lg-6 my-auto">
									<h3 class="mb-4 text-white">Real Estate App</h3>
									<p class="text-white">Discover the new way to navigate the world of real estate. We've made buying, selling, or investing in property easier than ever before. You get the tools you need with our app: stay ahead of the game, no matter what your real estate goals are.</p>
									<a href="{{url('/case-studies/real-estate-app')}}" class="btn-outline lnk mt30">View Case Study
										<i class="fas fa-chevron-right fa-icon"></i>
										<span class="circle"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="counter" class="owl-counter"></div>
            </div>
        </div>
</section>
<!-- End Solutions -->

<!-- Start Industries -->
<section class="industries-section py-5 dark-bg2">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag text-center">
					<div data-text="Our Industries" class="light-bg-text bg-text">
						<h2><span>Industries</span> We Work With in UAE</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeIn">
				<a href="{{url('/advertising')}}" class="industries-link">
					<div class="industries-image">
						<img src="images/industries/advertising.webp" alt="Advertising" class="img-fluid">
					</div>
					<div class="industries-text">
						<h5 class="text-center text-white text-center">Advertising</h5>	
					</div>
					<div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 mt-md-0 wow fadeIn">
				<a href="{{url('/automative-and-transport')}}" class="industries-link">
					<div class="industries-image">
						<img src="images/industries/automative-and-transport.webp" alt="Automative and Transport" class="img-fluid">
					</div>
					<div class="industries-text">
						<h5 class="text-center text-white text-center">Automative and Transport</h5>	
					</div>
					<div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 mt-lg-0 wow fadeIn">
				<a href="{{url('/ecommerce-and-retail')}}" class="industries-link">
					<div class="industries-image">
						<img src="images/industries/ecommerce-and-retail.webp" alt="Ecommerce and Retail" class="img-fluid">
					</div>
					<div class="industries-text">
						<h5 class="text-center text-white text-center">Ecommerce and Retail</h5>	
					</div>
					<div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 mt-xl-0 wow fadeIn">
				<a href="{{url('/education')}}" class="industries-link">
					<div class="industries-image">
						<img src="images/industries/education.webp" alt="Education" class="img-fluid">
					</div>
					<div class="industries-text">
						<h5 class="text-center text-white text-center">Education</h5>	
					</div>
					<div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 wow fadeIn">
				<a href="{{url('/financial-software-development')}}" class="industries-link">
					<div class="industries-image">
						<img src="images/industries/financial-software-development.webp" alt="Financial Software Development" class="img-fluid">
					</div>
					<div class="industries-text">
						<h5 class="text-center text-white text-center">Financial Software Development</h5>	
					</div>
					<div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 wow fadeIn">
				<a href="{{url('/gaming-and-leisure')}}" class="industries-link">
					<div class="industries-image">
						<img src="images/industries/gaming-and-leisure.webp" alt="Gaming and Leisure" class="img-fluid">
					</div>
					<div class="industries-text">
						<h5 class="text-center text-white text-center">Gaming and Leisure</h5>	
					</div>
					<div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 wow fadeIn">
				<a href="{{url('/healthcare-and-life-science')}}" class="industries-link">
					<div class="industries-image">
						<img src="images/industries/healthcare-and-life-science.webp" alt="Healthcare and Life Science" class="img-fluid">
					</div>
					<div class="industries-text">
						<h5 class="text-center text-white text-center">Healthcare and Life Science</h5>	
					</div>
					<div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 wow fadeIn">
				<a href="{{url('/media-and-entertainment')}}" class="industries-link">
					<div class="industries-image">
						<img src="images/industries/media-and-entertainment.webp" alt="Media and Entertainment" class="img-fluid">
					</div>
					<div class="industries-text">
						<h5 class="text-center text-white text-center">Media and Entertainment</h5>	
					</div>
					<div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 wow fadeIn">
				<a href="{{url('/real-estate-and-property')}}" class="industries-link">
					<div class="industries-image">
						<img src="images/industries/real-estate-and-property.webp" alt="Real Estate and Property" class="img-fluid">
					</div>
					<div class="industries-text">
						<h5 class="text-center text-white text-center">Real Estate and Property</h5>	
					</div>
					<div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 wow fadeIn">
				<a href="{{url('/software-and-high-tech')}}" class="industries-link">
					<div class="industries-image">
						<img src="images/industries/software-and-high-tech.webp" alt="Software and High Tech" class="img-fluid">
					</div>
					<div class="industries-text">
						<h5 class="text-center text-white text-center">Software and High Tech</h5>	
					</div>
					<div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 wow fadeIn">
				<a href="{{url('/sports-teams-and-leagues')}}" class="industries-link">
					<div class="industries-image">
						<img src="images/industries/sports-teams-and-leagues.webp" alt="Sports Teams and Leagues" class="img-fluid">
					</div>
					<div class="industries-text">
						<h5 class="text-center text-white text-center">Sports Teams and Leagues</h5>	
					</div><div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 wow fadeIn">
				<a href="{{url('/travel-and-hospitality')}}" class="industries-link">
					<div class="industries-image">
						<img src="images/industries/travel-and-hospitality.webp" alt="Travel and Hospitality" class="img-fluid">
					</div>
					<div class="industries-text">
						<h5 class="text-center text-white text-center">Travel and Hospitality</h5>	
					</div>
					<div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- End Industries -->

<!-- Start Let's Connect -->
<div class="lets-connect">
	<div class="row justify-content-center pt50 pb50">
		<div class="col-12">
			<div class="container">
				<div class="free-cta-title v-center wow fadeIn">
					<h3 class="text-center text-lg-start text-white">Get Help from Our Expert Mobile App Development Company in the UAE—Let's Talk</h3>
				</div>
				<div class="lets-connect-img d-none d-xl-block">
					<img src="images/locations/let-connect-image.webp" alt="Hire Developer" class="img-fluid">
				</div>
			</div>
			
		</div>
	</div>
</div>

<!-- End et's Connect -->

<!-- Start Tech -->
<section class="technologies-stack py-5">
	<div class="container">
		<div class="row fadeIn">
			<div class="col-12">
				<div class="common-heading">
					<div data-text="Technologies" class="light-bg-text bg-text text-center">
						<h2 class="mb30 text-center"><span>Technologies</span> We Work With</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row wow fadeIn">
			<div class="col-lg-6 mt-4">
				<div class="card h-100">
					<div class="card-body">
						<div class="row">
							<div class="con-h">
								<h3 class="text-center">App Development</h3>
								<p class="text-center pt-2">Our expert developers use the latest technologies to build high-performance mobile and web applications. We create custom solutions that are scalable, secure, and tailored to meet your business objectives.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider1 owl-carousel">
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/apple-logo.webp" alt="iOS Logo" class="tech-logo">
										<h4 class="mt-2">iOS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/android-logo.webp" alt="Android Logo" class="tech-logo">
										<h4 class="mt-2">Android</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/flutter-logo.webp" alt="Flutter Logo" class="tech-logo">
										<h4 class="mt-2">Flutter</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/ionic-logo.webp" alt="Ionic Logo" class="tech-logo">
										<h4 class="mt-2">Ionic</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/swift-logo.webp" alt="Swift Logo" class="tech-logo">
										<h4 class="mt-2">Swift</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/kotlin-logo.webp" alt="Kotlin Logo" class="tech-logo">
										<h4 class="mt-2">Kotlin</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/objective-c-logo.webp" alt="Objective C Logo" class="tech-logo">
										<h4 class="mt-2">Objective C</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/react-native-logo.webp" alt="React Native Logo" class="tech-logo">
										<h4 class="mt-2">React Native</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/google-fit-sdk.webp" alt="Google Fit SDK Logo" class="tech-logo">
										<h4 class="mt-2">Google Fit SDK</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/alamofire-logo.webp" alt="Alamofire Logo" class="tech-logo">
										<h4 class="mt-2">Alamofire</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/xcode-logo.webp" alt="XCode Logo" class="tech-logo">
										<h4 class="mt-2">XCode</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/node-red-logo.webp" alt="Node-Red Logo" class="tech-logo">
										<h4 class="mt-2">Node-Red</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/alamofire-logo.webp" alt="Alamofire Logo" class="tech-logo">
										<h4 class="mt-2">Alamofire</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/graphql-logo.webp" alt="Graph QL Logo" class="tech-logo">
										<h4 class="mt-2">Graph QL</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/grafana-logo.webp" alt="Grafana Logo" class="tech-logo">
										<h4 class="mt-2">Grafana</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/tensorflow-logo.webp" alt="Tensor Flow Logo" class="tech-logo">
										<h4 class="mt-2">Tensor Flow</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/tableau-logo.webp" alt="Tableau Logo" class="tech-logo">
										<h4 class="mt-2">Tableau</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/android-sdk-logo.webp" alt="Android SDK Logo" class="tech-logo">
										<h4 class="mt-2">Android SDK</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/apache-kafka-logo.webp" alt="Apache Kafka Logo" class="tech-logo">
										<h4 class="mt-2">Apache Kafka</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/android-studio.webp" alt="Android Studio Logo" class="tech-logo">
										<h4 class="mt-2">Android Studio</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/xamarin-native-c-logo.webp" alt="Xamarin Native C Logo" class="tech-logo">
										<h4 class="mt-2">Xamarin Native C</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/amazon-sumerian-logo.webp" alt="Amazon Sumerian Logo" class="tech-logo">
										<h4 class="mt-2">Amazon Sumerian</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/apache-hadoop-logo.webp" alt="Apache Hadoop Logo" class="tech-logo">
										<h4 class="mt-2">Apache Hadoop</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 mt-4">
				<div class="card h-100">
					<div class="card-body">
						<div class="row">
							<div class="con-h">
								<h3 class="text-center">Frontend Development</h3>
								<p class="text-center pt-2">We design engaging and user-friendly interfaces using proven front-end technologies. Our goal is to deliver responsive designs that enhance user experience and ensure smooth interaction across all devices.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider1 owl-carousel">
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/angular-logo.webp" alt="Angular Logo" class="tech-logo">
										<h4 class="mt-2">Angular JS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/react-native-logo.webp" alt="React Native Logo" class="tech-logo">
										<h4 class="mt-2">React JS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/html-logo.webp" alt="HTML Logo" class="tech-logo">
										<h4 class="mt-2">HTML</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/css-logo.webp" alt="CSS Logo" class="tech-logo">
										<h4 class="mt-2">CSS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/js-logo.webp" alt="JavaScript Logo" class="tech-logo">
										<h4 class="mt-2">JavaScript</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/next-js-logo.webp" alt="Next JS Logo" class="tech-logo">
										<h4 class="mt-2">Next JS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/json-logo.webp" alt="JSON Logo" class="tech-logo">
										<h4 class="mt-2">JSON</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/rest-logo.webp" alt="Rest Logo" class="tech-logo">
										<h4 class="mt-2">Rest</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/soap-logo.webp" alt="Soap Logo" class="tech-logo">
										<h4 class="mt-2">Soap</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/xml-logo.webp" alt="XML Logo" class="tech-logo">
										<h4 class="mt-2">XML</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/spark-ml-logo.webp" alt="Spark ML Logo" class="tech-logo">
										<h4 class="mt-2">Spark ML</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 mt-4">
				<div class="card h-100">
					<div class="card-body">
						<div class="row">
							<div class="con-h">
								<h3 class="text-center">Database Development</h3>
								<p class="text-center pt-2">Our database specialists deliver secure and scalable database solutions.  Using modern tools, we ensure your data is well-structured, optimised, and protected for reliable performance at all times.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider1 owl-carousel">
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/firebase-logo.webp" alt="Firebase Logo" class="tech-logo">
										<h4 class="mt-2">Firebase</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/sqlite-logo.webp" alt="SQLite Logo" class="tech-logo">
										<h4 class="mt-2">SQLite</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/core-data-logo.webp" alt="CoreData Logo" class="tech-logo">
										<h4 class="mt-2">CoreData</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/realm-logo.webp" alt="Realm Logo" class="tech-logo">
										<h4 class="mt-2">Realm</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/mysql-logo.webp" alt="MySQL Logo" class="tech-logo">
										<h4 class="mt-2">MySQL</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/sql-logo.webp" alt="SQL Logo" class="tech-logo">
										<h4 class="mt-2">SQL</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/opentsdb-logo.webp" alt="OpenTSDB Logo" class="tech-logo">
										<h4 class="mt-2">OpenTSDB</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 mt-4">
				<div class="card h-100">
					<div class="card-body">
						<div class="row">
							<div class="con-h">
								<h3 class="text-center">Backend Development</h3>
								<p class="text-center pt-2">We create powerful backend systems that keep processes running smoothly and automate them. Our backend solutions are crafted to integrate smoothly with your frontend and support real-time functionality.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider1 owl-carousel">
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/php-logo.webp" alt="PHP Logo" class="tech-logo">
										<h4 class="mt-2">PHP</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/java-logo.webp" alt="Java Logo" class="tech-logo">
										<h4 class="mt-2">Java</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/node-js-logo.webp" alt="Node JS Logo" class="tech-logo">
										<h4 class="mt-2">Node JS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/python-logo.webp" alt="Python Logo" class="tech-logo">
										<h4 class="mt-2">Python</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/c-sharp-logo.webp" alt="C# Logo" class="tech-logo">
										<h4 class="mt-2">C#</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/c++-logo.webp" alt="C/C++ Logo" class="tech-logo">
										<h4 class="mt-2">C/C++</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 mt-4">
				<div class="card h-100">
					<div class="card-body">
						<div class="row">
							<div class="con-h">
								<h3 class="text-center">CMS Development</h3>
								<p class="text-center pt-2">We develop flexible and intuitive CMS solutions that streamline the entire content management process. From creation and editing to publishing, we help you manage your website content efficiently.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider2 owl-carousel">
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/wordpress-logo.webp" alt="WordPress Logo" class="tech-logo">
										<h4 class="mt-2">WordPress</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/magento-logo.webp" alt="Magento Logo" class="tech-logo">
										<h4 class="mt-2">Magento</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/shopify-logo.webp" alt="Shopify Logo" class="tech-logo">
										<h4 class="mt-2">Shopify</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 mt-4">
				<div class="card h-100 ">
					<div class="card-body">
						<div class="row">
							<div class="con-h">
								<h3 class="text-center">Infra and Devops Development</h3>
								<p class="text-center pt-2">Our team of skilled infrastructure and DevOps developers uses the most up-to-date technologies and methods. This allows organisations to quickly and efficiently release applications and services.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider2 owl-carousel">
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/aws-logo.webp" alt="AWS Logo" class="tech-logo">
										<h4 class="mt-2">AWS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/azure-logo.webp" alt="Azure Logo" class="tech-logo">
										<h4 class="mt-2">Azure</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/google-cloud-logo.webp" alt="Google Cloud Logo" class="tech-logo">
										<h4 class="mt-2">Google Cloud</h4>
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
<!-- End Tech -->

<!-- Start Hire Developers -->
<section class="hire-developers py-5">
	<div class="container">
		<div class="row justify-content-center wow fadeIn">
			<div class="col-xl-6 my-auto">
				<div class="common-heading">
					<div data-text="Developers" class="dark-bg-text bg-text">
						<h2 class="text-white">Need developers for your <span>Custom IT Projects</span> Let's connect!</h2>
					</div>
					<!-- <p class="pt-2">AppsNation offers you to hire your dedicated development team. Which would connect with you 24 hours to ensure your development solution quality up to the mark. The benefit of hiring a dedicated team is you can contact them you will get a dedicated project manager for your project that makes sure your project satisfaction.</p> -->
					<p class="pt-2 text-white">Need a custom mobile app developer in the UAE? Our team of experts can build powerful iOS, Android, and cross-platform apps tailored specifically to your business needs. We combine cutting-edge features with engaging user interfaces and experiences to ensure your app stands out in the rapidly evolving tech scene. Let's get started on your next app project contact the UAE's reliable app development firm right now!</p>
					<a href="{{url('/contact-us')}}" class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3" data-wow-delay="0.8s">Get Consultation <i class="fas fa-chevron-right fa-ani"></i></a>
				</div>
			</div>
			<div class="col-xl-6 mt-3">
				<div class="row scroller">
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/unity-logo.webp" class="img-fluid d-block mx-auto" alt="Unity">
								<!-- <p class="text-center pt-2">Unity</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-sm-0">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/unreal-engine-logo.webp" class="img-fluid d-block mx-auto" alt="Unreal Engine">
								<!-- <p class="text-center pt-2">Unreal Engine</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 mt-lg-0">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/wordpress-logo.webp" class="img-fluid d-block mx-auto" alt="WordPress">
								<!-- <p class="text-center pt-2">WordPress</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 mt-xl-0">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/php-logo.webp" class="img-fluid d-block mx-auto" alt="PHP">
								<!-- <p class="text-center pt-2">PHP</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/angular-logo.webp" class="img-fluid d-block mx-auto" alt="Angular">
								<!-- <p class="text-center pt-2">Angular JS</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/c++-logo.webp" class="img-fluid d-block mx-auto" alt="C++">
								<!-- <p class="text-center pt-2">C++</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/blender-logo.webp" class="img-fluid d-block mx-auto" alt="Blender">
								<!-- <p class="text-center pt-2">Blender</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/python-logo.webp" class="img-fluid d-block mx-auto" alt="Python">
								<!-- <p class="text-center pt-2">Python</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/node-js-logo.webp" class="img-fluid d-block mx-auto" alt="Node Js">
								<!-- <p class="text-center pt-2">Node JS</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/photon-logo.webp" class="img-fluid d-block mx-auto" alt="Photon">
								<!-- <p class="text-center pt-2">Photon</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/react-native-logo.webp" class="img-fluid d-block mx-auto" alt="React Native">
								<!-- <p class="text-center pt-2">React Native</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/js-logo.webp" class="img-fluid d-block mx-auto" alt="JS">
								<!-- <p class="text-center pt-2">JavaScript</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/html-logo.webp" class="img-fluid d-block mx-auto" alt="HTML">
								<!-- <p class="text-center pt-2">HTML</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/laravel-logo.webp" class="img-fluid d-block mx-auto" alt="Laravel">
								<!-- <p class="text-center pt-2">Laravel</p> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Hire Us -->

<!-- Start Clients -->
<section class="py-5 bg-gradient3 client">
	<div class="container">
		<div class="row fadeIn">
			<div class="col-12">
				<div class="common-heading">
					<div data-text="Clients" class="light-bg-text bg-text text-center">
						<h2 class="mb30 text-center">Some of <span>Our Clients</span></h2>
						<p>We're thrilled to have partnered with top brands and cutting-edge companies in a wide range of sectors, creating mobile app solutions that deliver results.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center wow fadeIn mt-xl-5">
			<div class="col-lg-12">
				<div class="client-logoset">
					<div class="row">
						@foreach($clients as $item)
						<div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-4">
							<div class="brand-logo hoshd">
								<img src="uploads/{{$item['image']}}" alt="{{$item['alt']}}" class="img-fluid d-block mx-auto">
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Clients -->

<!-- Start Location -->
<!-- <section class="location py-5">
	<div class="container">
		<div class="row wow fadeIn">
			<div class="col-lg-6 my-auto">
				<div class="common-heading">
					<div data-text="Developers" class="dark-bg-text bg-text">
						<h2><span>Expand Your Market Presence with Our Top Mobile App </span>Development Company in UAE</h2>
					</div>
					<p class="pt-2">We are the No.1 mobile app development company in UAE that offer impeccable solutions under cost-effective rates. We build high-quality, user-friendly mobile apps that drive growth and help you reach more customers & generate massive revenue. With our award-winning solutions and industry expertise, we help you in keeping ahead of your rivals.</p>
					<a href="{{url('/contact-us')}}" class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3" data-wow-delay="0.8s">Get Consultation <i class="fas fa-chevron-right fa-ani"></i></a>
				</div>
			</div>
			<div class="col-lg-6 mt-3 mt-lg-0">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d380.5933028430845!2d-73.9566717760113!3d40.67620832536594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b992569c5a3%3A0x62621967b4b600be!2sWork%20Heights%2C%20Your%20Neighborhood%20Coworking%20Company!5e1!3m2!1sen!2s!4v1735656717767!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</section> -->
<!-- End Location -->

<!-- Start Locations -->
<section class="locations py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag">
					<div data-text="UAE" class="light-bg-text bg-text">
						<h2>UAE</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt70">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
				<div class="card">
					<div class="card-body">
						<h4>Dubai</h4>
						<ul class="mt-3">
							<li><a href="{{url('/app-development-dubai')}}" class="text-black">App Development in Dubai</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Locations-->

<!-- Start FAQS -->
<section class="faq-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeIn">
                <div class="common-heading">
					<div data-text="FAQ" class="light-bg-text bg-text">
                    	<h2>Frequently Asked Questions</h2>
					</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 mt20 wow fadeIn">
                <div class="accordion" id="accordionExample-a">
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-b">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1a" aria-expanded="true" aria-controls="collapseOne">
								Is mobile app development available in Dubai, Abu Dhabi, and Sharjah?
                            </button>
                        </h2>
                        <div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Certainly! AppsNation provides tailored mobile application development services in all major cities of the UAE, including Dubai, Abu Dhabi, Sharjah, and Ajman. We offer Android, iOS, and cross-platform applications to suit your regional needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								What is the pricing for a mobile app in the UAE?
                            </button>
                        </h2>
                        <div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>In the UAE, basic applications are priced starting at AED 18,000 (~$5,000 USD), while more complex applications featuring AI technologies or AR modules could exceed AED 150,000. We follow either fixed or milestone payment structures along with comprehensive cost breakdowns.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
								Will you block mobile application ideas using NDA contracts in the UAE?
                            </button>
                        </h2>
                        <div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Of course! We sign NDAs with all clients based in the UAE, which protects the user’s sensitive information, such as app concepts, with involved data, making it impossible to be disclosed outside the perimeter of the agreement.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
								Are you able to design features for residents of the UAE that will aid them in using Arabic alongside English?
                            </button>
                        </h2>
                        <div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Of course! Our company designs multilingual mobile apps, and we create UIs in Arabic too so that our clients from the UAE can easily read and understand Arabic because they write from right to left (RTL).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
								Which mobile app industries are in demand within the UAE?
                            </button>
                        </h2>
                        <div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>We have made custom mobile applications for clients based in the UAE, covering domains such as real estate, fintech, e-commerce, healthcare, fitness, travel, logistics, and even food delivery services, which included integrations with Emirates ID, payment systems, and other local APIs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
								How long does one need to wait for a mobile app to be developed in the UAE?
                            </button>
                        </h2>
                        <div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>In the majority of cases, 6 to 16 weeks is pretty standard for most mobile apps due to feature sets needed or further integrations and testing required. Projects at the   might extend beyond 6 months, but we will always provide a detailed scope of work with timelines.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7a" aria-expanded="true" aria-controls="collapseOne">
								Do you offer support in publishing the app on the Apple Store and Google Play for UAE versions?
                            </button>
                        </h2>
                        <div id="collapse-7a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Publishing an app under UA Apple and Android accounts is fully managed by us. We even handle ASO (App Store Optimisation) so that our clients will rank higher within the targeted geography searches.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8a" aria-expanded="true" aria-controls="collapseOne">
								Are your mobile apps capable of integrating payment gateways such as Telr, PayTabs and Stripe UAE?
                            </button>
                        </h2>
                        <div id="collapse-8a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Absolutely! We ensure secure transactions with all of PayTabs PCI-DSS compliant systems, and fairly widely used payment methods from the UAE, like Stripe or Apple Pay, are integrated into our system too.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9a" aria-expanded="true" aria-controls="collapseOne">
								Incorporating Emirates ID, GPS delivery zones for deliveries, or VAT compliance, are you able to tailor the features specifically for the UAE?
                            </button>
                        </h2>
                        <div id="collapse-9a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Yes, we create fully tailored apps that include Emirates ID API integration, SMS OTP verification, Arabic geolocation mapping, and even VAT-invoice systems customised for UAE clientele.</p>
									
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10a" aria-expanded="true" aria-controls="collapseOne">
								AppsNation, with mobile app development companies in the UAE, why should I choose you?
                            </button>
                        </h2>
                        <div id="collapse-10a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>The understanding of the UAE market, alongside advanced tech and trained bilingual specialists in AppsNation, makes them stand out from other competitors, as they provide secure, scalable apps that are easy to operate and expand user engagement within GCC countries.</p>
                                </div>
                            </div>
                        </div>
                    </div>
					
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End FAQS -->

@endsection