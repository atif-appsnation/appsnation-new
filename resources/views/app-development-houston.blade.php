@extends('app.main')
@section('content')
<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 houston-banner">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-sm-12 col-xl-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Mobile App Development Company in Houston </h1>
					<p class="mt20 text-white" data-wow-delay=".4s">AppsNation is a premier mobile app development company in Houston, representing the next generation of technology. We specialize in cutting-edge innovations in wearables, iOS, Android, IoT, AR/VR, gaming, cross-platform, and e-commerce apps, among other areas. We provide seamless tailored app development services in Houston, devoting our efforts to meticulous customization. Get in touch with us right now to turn your company's idea into a reality.</p>
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
<!--End Breadcrumb-->

<!--Start About-->
<section class="about py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="Mobile" class="light-bg-text bg-text">
						<h2>Top<span class="flup-theme"> Mobile App Development</span><br> Company in Houston</h2>
					</div>
					<p>Leading in the rapidly changing tech industry, we have continuously exceeded expectations by creating outstanding mobile app designs for tech start-ups and providing them with cost-effective mobile app development services that help them meet their revenue targets. Get in touch with us right now, and let our app developers in Houston take care of all your app requirements using our cutting-edge mobile app tech stack. Join us today for custom mobile app development.</p>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="image-block wow fadeIn">
					<img src="images/locations/houston/houston.webp" alt="Houston" class="img-fluid no-shadow" />
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start About-->
<section class="houston-about pt60 pb60">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="Mobile" class="light-bg-text bg-text">
						<h2 class="text-white">Take your Business to New Heights with our Growth-Oriented <span>Mobile App Development Company</span> in Houston</h2>
					</div>
					<p class="text-white">We aim for value-focused work to help your business expand its horizons and take your revenue graphs to unprecedented levels. With our customized solutions you can alter the process completely per the blueprint you have in mind.</p>
					<p class="text-white"> When it comes down to quality, we firmly believe there are no boundaries and clients need to be served with absolute best. When it comes to spending time on mobile phones, 92.5% of users prefer to use mobile apps. According to recent stats, In 2024, consumer app spending reached $115 Billion in the App Store and $55 Billion in Google Play. Partner with us today and seal the deal and unlock your business’s full potential.</p>
					<a href="{{url('/contact-us')}}" class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3" data-wow-delay="0.8s">Get Consultation <i class="fas fa-chevron-right fa-ani"></i></a>
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeIn">
				<img src="images/locations/austin/scale-your-business.webp" alt="Scale Your Business" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start Service-->
<section class="service-section py-5 dark-bg2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="common-heading ptag">
					<div data-text="Our Services" class="light-bg-text bg-text text-center">
						<h2>Our State-of-the-art App Development Services in <span>Houston</span></h2>
						<p>With our cutting-edge technology and innovative approaches, we devise apps that not only meet but exceed industry standards. From vision to launch, our users rely on us for premium quality app development services in Houston</p>
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
							<p>At AppsNation, we leverage the power of Kotlin and Java to craft innovative Android apps with dynamic and responsive interfaces. We offer Android app development in Houston with competitive solutions and business-focused features, guaranteeing experiences that keep customers coming back.</p>
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
							<p>At AppsNation, we give your business the boost it needs with custom app development services in Houston. Our expert developers utilize Swift-powered efficiency and cutting-edge frameworks to create a secure, reliable, and adaptive UI/UX design that works across iPhones, iPads, Macs, Apple TV, and Apple Watch.</p>
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
							<p>Take your business to the next level with our cross-platform app development services to enhance your audience reach, reduce costs and provide a consistent experience across all platforms. Using technologies like React Native, we create feature-rich, affordable app development that provides customers with an immersive experience.</p>
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
							<p>Have a knack for gaming? So do we! Introducing innovative game app development services in Houston, AppsNation specializes in creating expansive, captivating, and interactive open-world experiences that push the limits of gameplay. We make gaming imaginations come to life with the help of engines like CryEngine, Unreal, and Unitys</p>
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
							<p>Elevate your business with our flexible, scalable, and high-geared web app development services. Our cutting-edge web solutions drive user engagement through push notifications and WebSockets, delivering robust web app development tailored to your dynamic business needs.</p>
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
							<p>We are paving the way for innovation with our wearable app development services. By creating smart, interactive solutions, our wearable app developers bring real-time insights to your fingertips—or rather, your wrist. it’s the next-gen wearable app development at its finest.</p>
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
							<p>With our cutting-edge AR app creation, you can empower your company. With our advanced augmented reality app development, we transform digital interactions by producing realistic, immersive experiences that raise the benchmark for user experiences.</p>
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
							<p>Discover a future where lines between imagination and reality are blurring. Our VR app developers use Unity 3D and Vuforia to create interactive experiences. If you want to offer users an unparalleled VR experience, then opt for our virtual reality app services in Houston, which are designed to be as realistic as the real world, allowing you to see the hyper-real difference.</p>
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
							<p>We emphasize on advancing the boundaries of mixed reality by setting new standards for augmented experiences. We are redefining the Metaverse, paving the way for higher-level digital interactions that offer limitless possibilities and virtual realms for businesses, creators, and communities.</p>
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
<!--End Service-->

<!-- Start Technologies -->
<section class="technologies certificates py-5">
	<div class="container">
		<div class="row fadeIn">
			<div class="col-12">
				<div class="common-heading text-center">
					<div data-text="Partners" class="dark-bg-text bg-text text-center">
						<h2 class="text-white">We have joined hands with some of the most <span>renowned Technology giants</span> in the industry</h2>
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

<!--Start Portfolio-->
<section class="portfolio-section py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 fadeIn">
				<div class="common-heading">
					<div data-text="Our Portfolio" class="light-bg-text bg-text text-center">
						<h2 class="mb20 text-center">Latest From Our Studio</h2>
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
								<h3 class="mt30 mb30">Gym App Development</h3>
								<p class="mb30">Your go-to Fitness Companion. Customized exercise regimens and effective training. We have designed our interactive gym app services for modern users in Houston offering personalized workout plans and real-time coaching to help achieve fitness goals with precision and efficiency</p>
								<ul class="info-list-ul">
									<li>Personalized workout Routines</li>
									<li>In-app purchases for premium plans</li>
									<li>Smart Reminders</li>
									<li>Nutrition and Meal Plan</li>
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
								<h3 class="mt30 mb30">Avenue REAL-ESTATE</h3>
								<p class="mb30">We have designed a real estate app that is easy to use and provides real Estate information instantly. We have the most advanced features for real estate app development in Houston, such as virtual tours and advanced property searches. We provide IDX-based search tools and MLS listings to help you stay ahead of the competition.</p>
								<ul class="info-list-ul">
									<li>Map-Based Search</li>
									<li>Virtual Tours & 3D Walkthroughs</li>
									<li>Mortgage calculators</li>
									<li>Secure Payment Gateway</li>
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
								<h3 class="mt30 mb30">Gym Web</h3>
								<p class="mb30">More than just a fitness app, Gymnasium acts as your personal trainer, nutritionist, and motivational coach—all conveniently housed within a user-friendly interface.</p>
								<ul class="info-list-ul">
									<li>Content Management</li>
									<li>User Management</li>
									<li>Bookings Management</li>
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
								<h3 class="mt30 mb30">Real Estate Web</h3>
								<p class="mb30">Discover Avenue, the ultimate app for all your property buying and selling needs.</p>
								<ul class="info-list-ul">
									<li>Dashboard</li>
									<li>Properties Management</li>
									<li>Mortgage</li>
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
<!--End Portfolio-->

<!--Start Badges-->
<section class="badges-section py-5">
	<div class="container">
		<div class="row fadeIn">
			<div class="col-12">
				<div class="common-heading w-tdxt text-center">
					<div data-text="Awards" class="dark-bg-text bg-text text-center">
						<h2 class="text-white">The Gold standard for <span>Mobile App</span> Development in Houston</h2>
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
									<img src="uploads/{{$item['image']}}" class="award-img" alt="{{$item['alt']}}">
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
									<img src="uploads/{{$item['image']}}" class="award-img" alt="{{$item['alt']}}">
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
									<img src="uploads/{{$item['image']}}" class="award-img" alt="{{$item['alt']}}">
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
									<img src="uploads/{{$item['image']}}" class="award-img" alt="{{$item['alt']}}">
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
<!--End Badges-->

<!--Start Process-->
<section class="process-block bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Process" class="light-bg-text bg-text mt-5">
						<h2>Our Blueprint for <span>App</span> Development Success in Houston</h2>
					</div>
					<p>AppsNation offers clients an easy and agile android app development process with a result-driven ideology.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">01</p>
					<h3 class="title">Requirement Analysis</h3>
					<p class="description">Our approach to creating apps involves considering user requirements and consumer demographics, based on the needs of your app. We define the elements, features, and functionality of the user interface and integrate cutting-edge technical infrastructure. Additionally, we develop UX/UI wireframes to showcase the journey and prepare users for scalability and performance, which will attract more users while also optimizing data usage for enhanced efficiency.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">02</p>
					<h3 class="title">App Development Strategies</h3>
					<p class="description">The expertise of our developers in cloud-based solutions enables them to implement an iterative and agile development approach that accelerates feature rollout times. We develop comprehensive, innovation-driven roadmaps for effective productivity-based development to transform ideas into competitive apps.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">03</p>
					<h3 class="title">Wireframing And Designing</h3>
					<p class="description">Our wireframes provide the most optimal UI/UX design. The objective is to produce a highly detailed and minimalist design while maintaining symmetry and visual hierarchy. A user-oriented responsive design that maintains consistency across all devices and has a straightforward, user-friendly framework. Our professional project managers can help you realize your idea, so contact us now. We ensure that our customers express all their requirements to provide tailored solutions.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">04</p>
					<h3 class="title">Development Phase</h3>
					<p class="description">We have the expertise to develop your apps flawlessly.' We make use of its scalability, security, and performance. Our back-end and front-end designs are robust enough to ensure a smooth user experience. We handle all the technical aspects, including database management and API integration so u can sit back and let us serve you the absolute best.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">05</p>
					<h3 class="title">App Testing</h3>
					<p class="description">Our app testing ensures quality by utilizing our experienced testing staff to test, improve, and launch the application. We offer ongoing feedback and testing services for your app to improve its performance without any compromises. Our quality control system maintains the app's adherence to industry standards.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">06</p>
					<h3 class="title">App Deployment</h3>
					<p class="description">All of our apps are thoroughly tested and maintained for their dependability as well as user experience before they are released to the public, ensuring high-quality delivery. Scaling backend infrastructure, such as database configuration and APIs on demand (to optimize app performance), is a key aspect of app efficiency.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Process-->

<!--Start Let's Work Together-->
<div class="row justify-content-center hire-developer hire-developer-app-development">
	<div class="col-lg-7">
		<div class="free-cta-title v-center wow fadeIn">
			<p class="text-center text-lg-start text-white"> Where <span>Vision</span> Meets Exceptional Execution</p>
		</div>
		<div class="hire-developer-img d-none d-xl-block">
			<img src="images/locations/hire-developer.webp" alt="Hire Developer" class="img-fluid">
		</div>
	</div>
</div>
<!--End Let's Work Together-->

<!--Start Services-->
<section class="services-section mb-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn text-center">
					<div data-text="Services" class="light-bg-text bg-text mt-5 text-center">
						<h2>Our <span>Services</span> in Houston</h2>
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
<!--End Services-->

<!--Start About-->
<section class="houston-partner pt60 pb60 mt-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="Partner" class="light-bg-text bg-text">
						<h2 class="text-white">Partner with a Leading<span class="flup-theme"> Mobile App Development</span>Company in Houston</h2>
					</div>
					<p class="text-white">Be a part of 100s of Houston based businesses who put their trust in AppsNation, and we just managed to exceed expectations. We await your business needs so our experts can create innovative and scalable mobile applications that fuel business success.</p>
					<a href="{{url('/contact-us')}}" class="niwax-btn button-arounder btn mt-3 py-2 px-3">Get Consultation <i class="fas fa-chevron-right fa-ani"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start Let's Work Together-->
<div class="row py-5 justify-content-center hire-developer">
	<div class="col-lg-8">
		<div class="free-cta-title v-center wow fadeIn">
			<div class="row justify-content-center">
				<div class="col-lg-8 my-auto">
					<p class="text-center text-lg-start">Hire a <span>Dedicated Developer</span> </p>
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
<!--End Let's Work Together-->

<!--Start Testinomial-->
<section class="testimonials-section-app pt100 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading text-center">
                    <div data-text="Testimonials" class="dark-bg-text bg-text text-center">
                        <h2 class="text-white">What <span> Our Clients</span> Say About <span>AppsNation</span></h2>
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
<!--End Testinomial-->

<!--Start Solutions-->
<section class="solutions-section py-5">
    <div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn text-center">
					<div data-text="Solutions" class="light-bg-text bg-text mt-5 text-center">
						<h2>Our Avant-garde <span>Portfolio</span> as the leading Custom Mobile App Development Company in <span>Houston</span></h2>
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
									<p class="text-white">Experience a hassle-free travel journey with our global and innovative app—Travelicious. It’s not just an app but a wanderlust partner to cater to modern travelers for a seamless voyage.</p>
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
									<p class="text-white">Introducing our interactive and dynamic fitness app— Gymnasium. Built with a sleek and modern design, it becomes a fitness pal to help users stay at the top of their health goals, training plans, and motivation for wellness.</p>
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
									<p class="text-white">Trends, classics, and everything in between, our one-stop shop E-commerce app—Loyalty app. Trusted by millions, our app offers exclusive deals and cashback rewards for customers. All your favorite stores are now at your fingertips.</p>
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
									<p class="text-white">Moving is made easy with our Mover App, a holistic approach to all moving orders. Our app lets users book and relax as it provides efficient order management and customer engagement.</p>
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
									<p class="text-white">Experience the future of real estate, we have streamlined the real estate journey for you whether it is a property you want to buy, sell, or invest in, our app provides seamless solutions to keep you one step ahead in the market.</p>
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
<!--End Solutions-->

<!--Start Industries-->
<section class="industries-section py-5 dark-bg2">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag text-center">
					<div data-text="Our Industries" class="light-bg-text bg-text">
						<h2><span>Industries</span> We Work With in Houston</h2>
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
<!--End Industries-->

<!--Start Let's Connect-->
<div class="lets-connect">
	<div class="row justify-content-center pt50 pb50">
		<div class="col-12">
			<div class="container">
				<div class="free-cta-title v-center wow fadeIn">
					<h3 class="text-center text-lg-start text-white">Seek Assistance from Our Adept Houston-Based Mobile App Development Company Let’s Connect</h3>
				</div>
				<div class="lets-connect-img d-none d-xl-block">
					<img src="images/locations/let-connect-image.webp" alt="Hire Developer" class="img-fluid">
				</div>
			</div>
			
		</div>
	</div>
</div>

<!--End et's Connect-->

<!--Start Tech-->
<section class="technologies-stack py-5">
	<div class="container">
		<div class="row fadeIn">
			<div class="col-12">
				<div class="common-heading">
					<div data-text="Technologies" class="light-bg-text bg-text text-center">
						<h2 class="mb30 text-center"><span>Technologies</span> That Manifest Your Vision</h2>
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
								<p class="text-center pt-2">Our team of developers utilizes cutting-edge technology to provide outstanding solutions for app development.</p>
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
								<p class="text-center pt-2">Our developers design interactive user interfaces with a selection of trusted tools and programming languages. These are carefully picked to draw in users and engage them effectively.</p>
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
								<p class="text-center pt-2">Our team of database experts specializes in providing dependable management services. We employ cutting-edge technologies to keep your database secure and protected.</p>
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
								<p class="text-center pt-2">Backend development is vital for making your system run automatically. Our skilled developers use the newest methods to deliver outstanding solutions.</p>
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
								<p class="text-center pt-2">Our CMS engineers have real-world experience in developing custom solutions that make it easier to create, store, organize, edit, and publish content for websites.</p>
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
								<p class="text-center pt-2">Our skilled infrastructure and DevOps developers use cutting-edge technologies and methods to enable organizations to deliver applications and services with speed and efficiency.</p>
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
<!--End Tech-->

<!-- Start Hire Developers -->
<section class="hire-developers py-5">
	<div class="container">
		<div class="row justify-content-center wow fadeIn">
			<div class="col-xl-6 my-auto">
				<div class="common-heading">
					<div data-text="Developers" class="dark-bg-text bg-text">
						<h2 class="text-white">Hire Our Master Developers For <span>Custom IT Projects</span></h2>
					</div>
					<!--<p class="pt-2">AppsNation offers you to hire your dedicated development team. Which would connect with you 24 hours to ensure your development solution quality up to the mark. The benefit of hiring a dedicated team is you can contact them you will get a dedicated project manager for your project that makes sure your project satisfaction.</p>-->
					<p class="pt-2 text-white">Looking for the best IT project? You're in the right place. Our expert app developers create top app designs that help businesses thrive in the digital era. From the initial concept to the final launch, we provide superior app development services. Whether you're in need of software, web and mobile apps, or database management, we craft custom mobile apps in Houston to help you reach more customers and expand your business. Team up with us for IT solutions that are both expandable and secure.</p>
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

<!--Start Clients-->
<section class="py-5 bg-gradient3 client">
	<div class="container">
		<div class="row fadeIn">
			<div class="col-12">
				<div class="common-heading">
					<div data-text="Clients" class="light-bg-text bg-text text-center">
						<h2 class="mb30 text-center">Some of <span>Our Clients</span></h2>
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
<!--End Clients-->

<!-- Start Start Location -->
<!-- <section class="location py-5">
	<div class="container">
		<div class="row wow fadeIn">
			<div class="col-lg-6 my-auto">
				<div class="common-heading">
					<div data-text="Developers" class="dark-bg-text bg-text">
						<h2><span>Expand Your Market Presence with Our Top Mobile App </span>Development Company in Houston</h2>
					</div>
					<p class="pt-2">Our mobile app development services in Houston are the most innovative and unique. If you're seeking apps that function across different platforms or have numerous features for iOS or Android, we can assist you in finding the right solution. We create personalized mobile apps that meet your business needs and strengthen your brand to connect with users in Houston's tech community. Get in touch with us today to begin expanding your business.</p>
					<a href="{{url('/contact-us')}}" class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3" data-wow-delay="0.8s">Get Consultation <i class="fas fa-chevron-right fa-ani"></i></a>
				</div>
			</div>
			<div class="col-lg-6 mt-3 mt-lg-0">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d380.5933028430845!2d-73.9566717760113!3d40.67620832536594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b992569c5a3%3A0x62621967b4b600be!2sWork%20Heights%2C%20Your%20Neighborhood%20Coworking%20Company!5e1!3m2!1sen!2s!4v1735656717767!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</section> -->
<!-- End Start Location -->

<!-- Start FAQS-->
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
							What types of apps does AppsNation develop in Houston?
                            </button>
                        </h2>
                        <div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>AppsNation creates apps for industries such as e-commerce, Real Estate, Travel, Healthcare, and Education, among others. We are experts in developing apps for both IOS and Android platforms.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
							What is the estimated cost and timeline for app development in Houston?
                            </button>
                        </h2>
                        <div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>The cost and timeline for app development with AppsNation depends on several factors such as app complexity, UI/UX design, development approach, and more. We offer a detailed proposal with a breakdown of the cost and timeline after a thorough evaluation of the project demands.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
							What makes AppsNation stand out from other app development companies in Houston?
                            </button>
                        </h2>
                        <div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>The team at AppsNation, which includes experienced developers, designers, and project managers, works directly with clients to develop solutions that match their specific business needs. Once a project is launched, we continue to assist by offering maintenance and updates. This ongoing support involves fixing bugs, providing regular updates to features, and ensuring everything runs smoothly.</p>
									
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
							How to hire an app development company in Houston?
                            </button>
                        </h2>
                        <div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>You can shortlist and hire the most professional app development company in Houston, only if you follow these quick steps:</p>
									<ul class="ps-5">
										<li>The first and foremost thing is to have a clear idea in your mind about what you are looking for, in order to find the ideal candidate</li>
										<li>Secondly, ask them to share their past work and portfolio so you can have an idea of what they’re going to produce as an end result</li>
										<li>Settle up a first kick-off meeting with them once you’ve gone through all portfolio, past client feedback, and everything essential necessary to finalize an app development company in Houston.</li>
									</ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
							Does AppsNation offer ongoing app maintenance and updates?
                            </button>
                        </h2>
                        <div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Yes, we offer post launch maintenance and support services. Our team handles client queries and also provides updates and enhancements to the app as per the client’s requirements and feedback to ensure its optimal performance and user engagement.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
							How much does it cost to develop a mobile app?
                            </button>
                        </h2>
                        <div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>The cost to develop a mobile app in Houston depends on different factors such as platforms, operating systems, features and functionalities. However, if you want to determine the average cost of your mobile app development then feel free to reach out, we’ll be glad to help.</p>
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