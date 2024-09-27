@extends('app.main')
@section('content')

<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2">
@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Wearable App Development Company</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">Enrich your brand’s mobility with a wearable app running across various wearables and connectivity with multi-platform devices - responsive, fast, and visually appealing.</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeIn">
				<img src="images/wearable-app-development/wearables-app-banner-img.webp" class="img-fluid" alt="Wearable App Development">
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb Area-->

<!--Start About-->
<section class="service py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 my-auto wow fadeIn">
				<div class="image-block">
					<img src="images/wearable-app-development/wearable-app-development.webp" alt="Wearable App Development" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-7 block-1 wow fadeIn">
				<div class="common-heading text-l pl25">
					<h2>Affordable Solutions For <br> <span>Wearables App Development</span></h2>
					<p><strong>Wearable technology has served success to 79% of businesses that have implemented it.</strong></p>
					<p>Rapid technical breakthroughs have resulted in extraordinary innovation. Dive into the innovation to stay ahead of the curve. Wearable are intelligent devices similar to our mobile phones but not for entertainment. Instead, they serve humankind as fitness tracking and health monitoring devices with maximum mobility.</p>
					<p>Wearables Technology is beyond health and fitness, and it has become the standard of living. No matter what industry you lie in, you can flourish it to offer consumers a more immersive user experience. Fulfil your desire to strengthen customer touchpoints through 1:1 interaction with our expert wearables device app development services. AppsNation design and develop feature-rich bespoke wearable device apps with custom integrations and sensors that will serve customers and enrich your workforce.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start Service -->
<section class="service-section-app py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag">
					<h2><span>Wearable Devices App</span> Development Services</h2>
					<p>Step into the technological revolution to stand out in the competition and thrive in the digital world with intelligent apps for wearable devices.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="custom-wearable-device-img"></div>
					</div>
					<div class="service-heading">
						<h4>Custom Wearable Device App Development</h4>
					</div>
					<div class="services-text-div">
						<p>Offer your loyal customers a new standard of living with a custom wearable app of your business with our reliable wearable device app development services.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="wearable-app-design-img"></div>
					</div>
					<div class="service-heading">
						<h4>Wearable App UI/UX Design</h4>
					</div>
					<div class="services-text-div">
						<p>Our skilled UI/UX designers are driven to create wearable device app designs that are concise, simplified, user-friendly, and visually appealing.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-wearable-img"></div>
					</div>
					<div class="service-heading">
						<h4>Android Wearable App Development</h4>
					</div>
					<div class="services-text-div">
						<p>Our brilliant android developers are experts in fusing modern devices with Android to create a flawless wearable android app for your brilliant business.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="apple-watch-app-img"></div>
					</div>
					<div class="service-heading">
						<h4>Apple Watch Application Development</h4>
					</div>
					<div class="services-text-div">
						<p>We design slick, high-quality Apple Watch applications that are refined and effective in ways you never imagined and go above and beyond.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="iot-wearable-app-img"></div>
					</div>
					<div class="service-heading">
						<h4>IoT based Wearable App Development</h4>
					</div>
					<div class="services-text-div">
						<p>Make use of our IoT professionals, who are passionate about developing IoT wearables and apps tailored to your specific business requirements.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="augmented-reality-app-img"></div>
					</div>
					<div class="service-heading">
						<h4>Augmented Reality App Development for Wearables</h4>
					</div>
					<div class="services-text-div">
						<p>We enjoy how AR provide companies with an immersive experience to sell themselves. With our Augmented Reality app development for wearables, you can get started right now.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="wearable-apps-comp-img"></div>
					</div>
					<div class="service-heading">
						<h4>Wearable Apps Compatibility Testing</h4>
					</div>
					<div class="services-text-div">
						<p>We provide complete wearable app testing services to guarantee that businesses get the most out of their unique wearable device application.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="recreating-apps-img"></div>
					</div>
					<div class="service-heading">
						<h4>Recreating Existing Apps for Wearables</h4>
					</div>
					<div class="services-text-div">
						<p>Not a single creation is a failure. Reach our recreating existing apps for wearables services to make that amateur app live and deliver a seamless user experience.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="maintenance-and-support-img"></div>
					</div>
					<div class="service-heading">
						<h4>Maintenance and Support</h4>
					</div>
					<div class="services-text-div">
						<p>To preserve the integrity of the wearable device app and offer your users a smooth experience, we provide sustainable support and maintenance services.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Service -->

<!--Start Services-->
<section class="service py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<h2>Our <span>Wearables App Development</span> Core Expertise </h2>
					<p class="mb30">Leading Wearables Device App Development Services With Extensive Expertise. We are a leading wearable app development company, offering undeniable benefits to our clients with a fantastic wearable device app.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-lg-6">
			<div class="image-block wow fadeIn">
				<img src="images/wearable-app-development/smart-band-apps.webp" alt="Smart Band Apps" class="img-fluid no-shadow" />
			</div>
		</div>
		<div class="col-lg-6 block-1 wow fadeIn my-auto">
			<div class="common-heading text-l pl25">
				<h3>Smart Band Apps</h3>
				<p>We design and develop reliable and immersive smart band apps for accurate monitoring of health and fitness conditions.</p>
			</div>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-lg-6 block-1 wow fadeIn my-auto">
			<div class="common-heading text-l pl25">
				<h3>Apple Watch Apps</h3>
				<p>Our watchOS experts build Apple Watch apps with bespoke functionalities and features with a user-friendly design.</p>
			</div>
		</div>
		<div class="col-lg-6 mt-4 mt-sm-4 mt-md-3">
			<div class="image-block wow fadeIn">
				<img src="images/wearable-app-development/apple-watch-apps.webp" alt="Apple Watch Apps" class="img-fluid no-shadow" />
			</div>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-lg-6">
			<div class="image-block wow fadeIn">
				<img src="images/wearable-app-development/google-glass-apps.webp" alt="Google Glass Apps" class="img-fluid no-shadow" />
			</div>
		</div>
		<div class="col-lg-6 block-1 wow fadeIn my-auto">
			<div class="common-heading text-l pl25">
				<h3>Google Glass Apps</h3>
				<p>We have our hands on the latest technology of Google Glass to create the supporting apps for your business.</p>
			</div>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-lg-6 block-1 wow fadeIn my-auto">
			<div class="common-heading text-l pl25">
				<h3>Virtual Reality Apps</h3>
				<p>We create amazing VR apps for businesses to leverage Oculus Quest, HTC Vive, Valve Index, and other VR platforms.</p>
			</div>
		</div>
		<div class="col-lg-6 mt-4 mt-sm-4 mt-md-3">
			<div class="image-block wow fadeIn">
				<img src="images/wearable-app-development/virtual-reality-apps.webp" alt="Virtual Reality Apps" class="img-fluid no-shadow" />
			</div>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-lg-6">
			<div class="image-block wow fadeIn">
				<img src="images/wearable-app-development/iot-wearable-apps.webp" alt="IoT Wearable Apps" class="img-fluid no-shadow" />
			</div>
		</div>
		<div class="col-lg-6 block-1 wow fadeIn my-auto">
			<div class="common-heading text-l pl25">
				<h3>IoT Wearable Apps</h3>
				<p>Grow your business with an intuitive IoT wearable app that supports every device and operating system.</p>
			</div>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-lg-6 block-1 wow fadeIn my-auto">
			<div class="common-heading text-l pl25">
				<h3>Wearable Payment App</h3>
				<p>Introduce the easiest and quickest payment method to your business with our wearable payment apps development.</p>
			</div>
		</div>
		<div class="col-lg-6 mt-4 mt-sm-4 mt-md-3">
			<div class="image-block wow fadeIn">
				<img src="images/wearable-app-development/wearable-payment-app.webp" alt="Wearable Payment App" class="img-fluid no-shadow" />
			</div>
		</div>
	</div>
</section>
<!--End Services-->

<!--Start Features-->
<section class="features-section-app dark-bg2 py-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-5 wow fadeIn">
				<div class="tab-content" id="imagetab">
					@foreach($agencystack as $k=>$items)
					@if($k==0)

					<div class="tab-pane active" id="panel_a_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						<img src="uploads/{!!$items['image']!!}" alt="img" class="img-fluid">
					</div>
					@else
					<div class="tab-pane fade" id="panel_a_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						<img src="uploads/{!!$items['image']!!}" alt="img" class="img-fluid">
					</div>
					@endif

					@endforeach
				</div>
			</div>

			<div class="col-sm-12 col-md-12 col-lg-7 my-auto pl-3 pl-sm-3 pl-md-5 pt-3 pt-sm-3 pt-md-3 pt-lg-0 wow fadeIn">
				<div class="common-heading ptag">
					<h2>Creative <span>Wearable App</span> Development Agency</h2>
				</div>
				<p class="py-3">We help a diverse clientele build result-driven mobile apps for different industries.</p>
				<ul class="nav nav-tabs features-tab" id="headingtab" role="tablist">
					@foreach($agencystack as $k=>$items)
                    @if($k==0)
                    <li class="nav-item">
                        <a class="nav-link active" id="{!!$items['id']!!}-tab" data-bs-target="#panel_b_{!!$items['id']!!}" data-bs-secondary="#panel_a_{!!$items['id']!!}" data-bs-toggle="tab" href="#{!!$items['id']!!}" role="tab" aria-controls="{!!$items['id']!!}" aria-selected="false">{!!$items['heading']!!}</a>
                    </li>

                    @else
                    <li class="nav-item">
                        <a class="nav-link" id="{!!$items['id']!!}-tab" data-bs-target="#panel_b_{!!$items['id']!!}" data-bs-secondary="#panel_a_{!!$items['id']!!}" data-bs-toggle="tab" href="#{!!$items['id']!!}" role="tab" aria-controls="{!!$items['id']!!}" aria-selected="false">{!!$items['heading']!!}</a>
                    </li>
                    @endif
                    @endforeach
				</ul>

				<div class="tab-content pt-3" id="texttab">
					@foreach($agencystack as $k=>$items)
					@if($k==0)
					<div class="tab-pane active" id="panel_b_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						<h3>{!!$items['heading']!!}</h3>
						<p>{!!$items['content']!!}</p>
					</div>
					@else
					<div class="tab-pane fade" id="panel_b_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						<h3>{!!$items['heading']!!}</h3>
						<p>{!!$items['content']!!}</p>
					</div>
					@endif
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Features-->

<!--Start Let's Work Together-->
<div class="row py-5 justify-content-center hire-developer">
	<div class="col-lg-9">
		<div class="free-cta-title v-center wow fadeIn">
			<div class="row justify-content-center">
				<div class="col-lg-8 my-auto">
					<p class="text-center text-lg-start">Let's Start a <span>New Project</span> Together</span> </p>
				</div>
				<div class="col-lg-4 text-center text-lg-start mt-5 mt-lg-0">
					<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Inquire Now
						<i class="fas fa-chevron-right fa-icon"></i>
						<span class="circle"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End Let's Work Together-->

<!--Start Why Choose -->
<section class="why-choose bg-gradient3 py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<h2 class="text-white">Why Choose <span>AppsNation</span></h2>
					<p class="text-white">We are a leading wearable app development company, offering undeniable benefits to our clients with a fantastic wearable device app.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="comprehensive-experties-img"></div>
					</div>
					<div class="service-heading">
						<h4>Comprehensive Expertise</h4>
					</div>
					<div class="services-text-div">
						<p>We offer a wide range of wearable app development services.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="extensive-versatility-img"></div>
					</div>
					<div class="service-heading">
						<h4>Extensive Versatility</h4>
					</div>
					<div class="services-text-div">
						<p>We develop wearable app development services across every platform and device.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="cross-device-img"></div>
					</div>
					<div class="service-heading">
						<h4>Cross-Device Capability</h4>
					</div>
					<div class="services-text-div">
						<p>We create a single coded wearable app that works efficiently on multiple platforms.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="cross-industry-img"></div>
					</div>
					<div class="service-heading">
						<h4>Cross-industry Experience</h4>
					</div>
					<div class="services-text-div">
						<p>We serve all the industries across the world to leverage innovative technology.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="competitive-delivery-img"></div>
					</div>
					<div class="service-heading">
						<h4>Competitive Pricing & Timely Delivery</h4>
					</div>
					<div class="services-text-div">
						<p>We have made our services affordable with on-time delivery to achieve customer satisfaction.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="bug-free-img"></div>
					</div>
					<div class="service-heading">
						<h4>Bug-free Wearable App Development</h4>
					</div>
					<div class="services-text-div">
						<p>Our impeccable testing services ensure the wearable app is error-free.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Why Choose -->

<!--Start Process-->
<section class="process-block bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<h2>Our <span>Wearable App</span> Development Process</h2>
					<p>We offer a seamless wearable app development process to upscale your software abilities with our wearable devices app developers.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">01</p>
						<h3 class="title">Requirement Gathering</h3>
						<p class="description">Contact AppsNation to pitch your innovative wearable device app ideas to our experienced project managers and analysts. Then, as we create a business document comprising a project brief, we provide the customer with absolute authority to explain his expectations correctly.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">02</p>
						<h3 class="title">App Development Strategies</h3>
						<p class="description">We establish a sustainable wearable app development strategy for your bespoke app after in-depth research of the client's business, competitors, and target demographic to provide users with an immersive experience of your company and services.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">03</p>
						<h3 class="title">Wireframing And Designing</h3>
						<p class="description">Our skilled UI/UX designers create your product's first look and feel, model the user experience and journey, and prioritize features and functionalities to keep the user engaged with its appealing, user-friendly interface. Before proceeding, we ensure that our customer is satisfied.a</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">04</p>
						<h3 class="title">Development Phase</h3>
						<p class="description">We harness the true power of Artificial Intelligence (AI) and Machine Learning (ML) in our wearable app development process to give flawless features and functionalities to your bespoke wearable device app. Each progress is made with the coordination of the client.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">05</p>
						<h3 class="title">App Testing</h3>
						<p class="description">Wearable device app testing is a critical component for a successful app launch. We have skilled quality assurance analysts working with us to test wearable device apps extensively to ensure they are bug-free for an outstanding user experience.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">06</p>
						<h3 class="title">App Deployment</h3>
						<p class="description">Our job is to make the wearable device app available in the appropriate markets while complying with all of the criteria. Our team prepares the proper documentation, descriptions, and screenshots for app stores publication as well as continuous support and maintenance.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Process-->

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

<!-- Start Technologies -->
<section class="technologies certificates py-5">
	<div class="container">
		<div class="row fadeIn">
			<div class="col-12">
				<div class="common-heading text-center">
					<div data-text="Partners" class="dark-bg-text bg-text text-center">
						<h2 class="text-white">We Partner With The <span>World's Technology</span> Leaders</h2>
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

<!--Start Badges-->
<section class="badges-section py-5">
	<div class="container">
		<div class="row fadeIn">
			<div class="col-12">
				<div class="common-heading w-tdxt text-center">
					<div data-text="Awards" class="dark-bg-text bg-text text-center">
						<h2 class="text-white">Ranked as #1 <span>Android App</span> Development Company</h2>
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
<!--End Badges-->

<!--Start Let's Work Together-->
<div class="row py-5 justify-content-center hire-developer">
	<div class="col-lg-8">
		<div class="free-cta-title v-center wow fadeIn">
			<div class="row justify-content-center">
				<div class="col-lg-7 my-auto">
					<p class="text-center text-lg-start">We Promise. <span>We Deliver.</span> </p>
				</div>
				<div class="col-lg-5 text-center text-lg-start mt-5 mt-lg-0">
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
		<div class="row mt-3">
			<div class="col-lg-5 fadeIn my-auto">
				<div class="row mt30 justify-content-center">
					<div class="col-4">
						<a href="#" target="blank" class="wow fadeIn review-div">
							<img src="images/home/reviews-icon-1.webp" alt="review" class="img-fluid">
						</a>
					</div>
					<div class="col-4">
						<a href="#" target="blank" class="wow fadeIn review-div">
							<img src="images/home/reviews-icon-2.webp" alt="review" class="img-fluid">
						</a>
					</div>
					<div class="col-4">
						<a href="#" target="blank" class="wow fadeIn review-div">
							<img src="images/home/reviews-icon-3.webp" alt="review" class="img-fluid">
						</a>
					</div>
				</div>
				<div class="review-title-ref mt40">
					<a href="{{url('/testimonials')}}" class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3">Read More Reviews <i class="fas fa-chevron-right fa-ani"></i></a>
				</div>
			</div>
			<div class="col-lg-7 wow fadeIn">
				<div class="pl50">
					<div class="shape shape-a1"><img src="images/shape/shape-3.svg" alt="shape"></div>
					<div class="testimonial-card-a tcd owl-carousel">

						@foreach($testimonials as $item)
						<div class="testimonial-card">
							<div class="tt-text">
								<p>{{$item['title']}}</p>
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
						@endforeach

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Testinomial-->

<!--Start FAQS-->
<section class="faq-section py-5" id="faqs">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeIn">
                <div class="common-heading">
                    <h2 class="mb0 common-heading">Frequently Asked Questions</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 wow fadeIn">
                <div class="accordion" id="accordionExample-a">
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-b">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1a" aria-expanded="true" aria-controls="collapseOne">
								What is wearable technology? How does wearable technology work?
                            </button>
                        </h2>
                        <div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Wearable technology is at the vanguard of the Internet of Things (IoT) due to its rapid adoption in smart devices and computers. A wearable is a form of electronic gadget worn as an accessory, implanted in the user's body, and sometimes even tattooed on the skin. Wearable technology offers many applications and advantages in navigation systems, healthcare, and textile.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								What are the challenges faced by wearable app developers?
                            </button>
                        </h2>
                        <div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>There are several problems in developing wearable apps that need greater caution, superior resources, and a customer audience that is well aware of the technology. However, the most common challenges include:</p>
									<ul class="ps-5">
										<li>The smaller screen size makes the UI/UX development difficult</li>
										<li>Minimal battery life</li>
										<li>Few wearable device app developers</li>
										<li>Unavailability of updates of the wearable app</li>
									</ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
								Do you provide maintenance and support after developing a wearable app?
                            </button>
                        </h2>
                        <div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
									<p>3-months of free support and maintenance are an essential part of our unrivalled wearable device app development services to guarantee a successful app journey ahead.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
								Why choose AppsNation for iOS and Android wearable app development?
                            </button>
                        </h2>
                        <div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>AppsNation offers clients countless benefits and, on top, the wearable app development services that incorporate the AI that connects the machine with humans efficiently. Furthermore, our exceptional wearable app development services are inclined to empower businesses and their consumers with a more simulating experience of their services by combining the latest technologies to the renowned iOS and Android platforms.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
								What are different types of wearable app development services do you provide?
                            </button>
                        </h2>
                        <div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>We offer a wide range of wearable app development services that include:</p>
									<ul class="ps-5">
										<li>Custom Wearable Device App Development</li>
										<li>Wearable App UI/UX Design</li>
										<li>Android wear app Development</li>
										<li>Apple Watch Application Development</li>
										<li>Android Watch Applications</li>
										<li>Wearable App Development for iOS</li>
										<li>IoT based Wearable App Development</li>
										<li>Augmented Reality App Development for Wearables</li>
										<li>Testing of Apps for Wearable Device Compatibility </li>
										<li>Recreating Existing Apps for Wearables</li>
										<li>Maintenance and Support</li>
									</ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
								How much does it cost for developing a wearable app?
                            </button>
                        </h2>
                        <div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>To determine the cost of a wearable device app development, you must consider the app's purpose, features, and functionalities. Besides, UI/UX design, wear apps, non-visual interfaces, offline usage, and the choice of platform and device influence the cost of wearable app development.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7a" aria-expanded="true" aria-controls="collapseOne">
								How long does it take to build a wearable app?
                            </button>
                        </h2>
                        <div id="collapse-7a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>The development duration of a wearable device app depends on many factors such as; defining the purpose, designing the user interface and experience, functionalities and features to incorporate, platform compatibility, and testing. Typically, a standard wearable app may take around 3-6 months to develop.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8a" aria-expanded="true" aria-controls="collapseOne">
								What are the benefits of outsourcing wearable app development?
                            </button>
                        </h2>
                        <div id="collapse-8a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>There are countless benefits of outsourcing any project, and hiring an agency for wearable app development comes along with remarkable benefits such as:</p>
									<ul class="ps-5">
										<li>Cost-effective.</li>
										<li>Flexible.</li>
										<li>Quick turnaround time.</li>
										<li>Extensive developers and technologies.</li>
										<li>Highly secure development.</li>
										<li>Adequate support and maintenance system.</li>
									</ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9a" aria-expanded="true" aria-controls="collapseOne">
								Do you guarantee app approval in the app store?
                            </button>
                        </h2>
                        <div id="collapse-9a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Publishing apps on different platforms and marketplaces are part of our core wearable app development services. We strictly follow the guidelines of all the app stores to approve the wearable app adequately.</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10a" aria-expanded="true" aria-controls="collapseOne">
								Do you develop wearable apps on multiple platforms?
                            </button>
                        </h2>
                        <div id="collapse-10a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Our extensive wearable app development services include the development of wearable apps for different platforms and devices. AppsNation is on the verge to offer businesses to make the most out of wearable technology and thrive among the best. In contrast, we develop wearable apps for iOS, Android, smart bands and watches, Google Smart glasses, and VR headsets.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End FAQS -->


@endsection