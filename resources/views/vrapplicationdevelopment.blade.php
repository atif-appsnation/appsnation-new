@extends('app.main')
@section('content')

<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 vr-app-banner">
@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 my-auto my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Virtual Reality – VR App Development</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">Level up your marketing game and enrich consumer experience with our reliable Virtual Reality (VR) apps development services.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb Area-->

<!--Start About-->
<section class="service py-5 vr-intro-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 block-1 wow fadeIn">
				<div class="common-heading text-l pl25">
					<div data-text="VR" class="light-bg-text bg-text">
						<h2>Scale-Up With Our <span class="flup-theme">Virtual Reality (VR) </span>Development Services</h2>
					</div>
					<p><strong>Accelerate your digitalization efforts on the strategic and phased road to industry 4.0 reality.</strong></p>
					<p>AppsNation is a leading Virtual Reality (VR) app development company that transforms your ideas into reality by implementing powerful AI and AR with VR. The byproduct created is robust and offers an indistinctive and immersive experience that cannot be different from reality.</p>
					<p>We are highly tech-savvy; therefore, we experimented and created result-driven VR apps since the technology showed up. Our years of hands-on experience developing VR apps have enabled us to be at the top. We strive to serve every industry with bespoke VR, AR, and AI solutions and witness how these impactful technologies save the business. Unleash the true potential by offering customers an immersive experience of your outstanding business to boost sales eventually.</p>
				</div>
			</div>
			<div class="col-lg-5 my-auto">
				<div class="image-block wow fadeIn">
					<img src="images/services/vr-app-development/vr-app-development.webp" alt="VR App Development" class="img-fluid no-shadow" />
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start Games-->
<section class="service-block py-5 vr-game-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-6 wow fadeIn">
				<img src="images/services/vr-app-development/vr-game-development.webp" alt="VR Game Development" class="img-fluid">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 mt-4 mt-sm-4 mt-md-4 mt-lg-0">
				<div class="row wow fadeIn">
					<div class="ptag common-heading">
						<div data-text="VR Games" class="dark-bg-text bg-text">
							<h2 class="text-white">Our <span>VR Games</span> Development Services</h2>
						</div>
					</div>
				</div>
				<div class="row mt80 wow fadeIn">
                    <div class="col-md-4 game-development-col">
                        <img src="images/services/vr-app-development/vr-action.webp" alt="VR Action" class="img-fluid">
                        <p class="center-text">VR Action<p>
                    </div>

                    <div class="col-md-4 mt-3 mt-md-0 game-development-col">
                        <img src="images/services/vr-app-development/vr-fps.webp" alt="VR FPS" class="img-fluid">
                        <p class="center-text">VR FPS<p>
                    </div>

                    <div class="col-md-4 mt-3 mt-md-0 game-development-col">
                        <img src="images/services/vr-app-development/vr-adventure.webp" alt="VR Adventure" class="img-fluid">
                        <p class="center-text">VR Adventure<p>
                    </div>

                    <div class="col-md-4 mt-3 game-development-col">
                        <img src="images/services/vr-app-development/puzzle-vr.webp" alt="Puzzle VR" class="img-fluid">
                        <p class="center-text">Puzzle VR<p>
                    </div>

                    <div class="col-md-4 mt-3 game-development-col">
                        <img src="images/services/vr-app-development/sports-vr.webp" alt="Sports VR" class="img-fluid">
                        <p class="center-text">Sports VR<p>
                    </div>

                    <div class="col-md-4 mt-3 game-development-col">
                        <img src="images/services/vr-app-development/vr-arcade.webp" alt="VR Arcade" class="img-fluid">
                        <p class="center-text">VR Arcade<p>
                    </div>

                    <div class="col-md-4 mt-3 game-development-col">
                        <img src="images/services/vr-app-development/vr-simulation.webp" alt="VR Simulation" class="img-fluid">
                        <p class="center-text">VR Simulation<p>
                    </div>

                    <div class="col-md-4 mt-3 game-development-col">
                        <img src="images/services/vr-app-development/vr-brain.webp" alt="VR Brain" class="img-fluid">
                        <p class="center-text">VR Brain<p>
                    </div>

                    <div class="col-md-4 mt-3 game-development-col">
                        <img src="images/services/vr-app-development/vr-combat.webp" alt="VR Combat" class="img-fluid">
                        <p class="center-text">VR Combat<p>
                    </div>
                </div>
			</div>
		</div>
	</div>
</section>
<!--End Games-->

<!--Start Service-->
<section class="service-block py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag">
					<div data-text="VR" class="light-bg-text bg-text">
						<h2>Inclusive <span>VR App</span> Development Company</h2>
					</div>
					<p>AppsNation is a famous VR app development company serving clients with custom VR apps that meet their expectations.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-5 vr-mobile-app-development">
		<div class="col-lg-6 wow fadeIn">
			<img src="images/services/vr-app-development/vr-mobile-app-development.webp" alt="VR Mobile App Development" class="img-fluid">
		</div>
		<div class="col-lg-6 block-1 wow fadeIn my-auto pe-5">
			<div class="common-heading text-l pl25">
				<h2>VR Mobile App Development</h2>
				<p>We create high performing VR mobile apps for various platforms such as iOS, Android, Windows, and others to offer consumers an incredibly engaging user experience.</p>
			</div>
		</div>
	</div>
	<div class="row mt-5 vr-game-app-development">
		<div class="col-lg-6 block-1 wow fadeIn my-auto ps-5">
			<div class="common-heading text-l pl25">
				<h2>VR Game App Development</h2>
				<p>Bring your fantastic VR concept to us to make it real with our exceptional VR game app development services. Leverage the power of VR to create games with intriguing experiences.</p>
			</div>
		</div>
		<div class="col-lg-6 wow fadeIn">
			<img src="images/services/vr-app-development/vr-game-app-development.webp" alt="VR Game App Development" class="img-fluid">
		</div>
	</div>
	<div class="row mt-5 vr-app-consultation">
		<div class="col-lg-6 wow fadeIn">
			<img src="images/services/vr-app-development/vr-app-consultation.webp" alt="VR App Consultation" class="img-fluid">
		</div>
		<div class="col-lg-6 block-1 wow fadeIn my-auto pe-5">
			<div class="common-heading text-l pl25">
				<h2>VR App Consultation</h2>
				<p>VR technology has yet more to explore. Be the first to initiate the new trend with our expert VR app consultation services and maximize your branding efforts.</p>
			</div>
		</div>
	</div>
	<div class="row mt-5 vr-software-development">
		<div class="col-lg-6 block-1 wow fadeIn my-auto ps-5">
			<div class="common-heading text-l pl25">
				<h2>VR Software Development</h2>
				<p>We create user-centric and client-focused VR software to meet integration requirements in order to streamline the workflow and operations.</p>
			</div>
		</div>
		<div class="col-lg-6 wow fadeIn">
			<img src="images/services/vr-app-development/vr-software-development.webp" alt="VR Software Development" class="img-fluid">
		</div>
	</div>
	<div class="row mt-5 visual-recognition-solutions">
		<div class="col-lg-6 wow fadeIn">
			<img src="images/services/vr-app-development/visual-recognition-solutions.webp" alt="Visual Recognition Solutions" class="img-fluid">
		</div>
		<div class="col-lg-6 block-1 wow fadeIn my-auto pe-5">
			<div class="common-heading text-l pl25">
				<h2>Visual Recognition Solutions</h2>
				<p>Our VR vision solutions assist in fault detection, operational asset inspection, and personnel safety while lowering operating costs and increasing employee safety.</p>
			</div>
		</div>
	</div>
	<div class="row mt-5 vr-app-support-and-maintenance">
		<div class="col-lg-6 block-1 wow fadeIn my-auto ps-5">
			<div class="common-heading text-l pl25">
				<h2>VR App Support and Maintenance</h2>
				<p>Our Virtual Reality developers team delivers timely support and maintenance services to ensure app integrity and optimize business operations.</p>
			</div>
		</div>
		<div class="col-lg-6 wow fadeIn">
			<img src="images/services/vr-app-development/vr-app-support-and-maintenance.webp" alt="VR App Support and Maintenance" class="img-fluid">
		</div>
	</div>
	<div class="row mt-5 iot-ar-vr">
		<div class="col-lg-6 wow fadeIn">
			<img src="images/services/vr-app-development/iot-ar-vr.webp" alt="IoT + AR/VR" class="img-fluid">
		</div>
		<div class="col-lg-6 block-1 wow fadeIn my-auto pe-5">
			<div class="common-heading text-l pl25">
				<h2>IoT + AR/VR</h2>
				<p>Harness the true power of your data by combining VR and AR with IoT and transform that data into meaningful rendering for users to view and engage</p>
			</div>
		</div>
	</div>
</section>
<!--End Service-->

<!--Start Features-->
<section class="features-section-app dark-bg2 py-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-5 wow fadeIn">
				<div class="tab-content" id="imagetab">
					@foreach($agencystack as $k=>$items)
					@if($k==0)

					<div class="tab-pane fade show active" id="panel_a_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
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
					<div data-text="Industries" class="light-bg-text bg-text">
						<h2>Creative <span>VR App</span> Development Agency</h2>
					</div>
					<p class="py-3">We help a diverse clientele build result-driven mobile apps for different industries.</p>
				</div>
				<ul class="nav nav-tabs features-tab mt50" id="headingtab" role="tablist">
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
					<div class="tab-pane fade show active" id="panel_b_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
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
<br>
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

<!--Start Why Choose-->
<section class="why-choose bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Choose Us" class="dark-bg-text bg-text">
						<h2 class="text-white">Why Choose <span>AppsNation</span></h2>
					</div>
					<p class="text-white">We help you overcome the most challenging difficulties in AR, such as object/scene identification, occlusion, and content production and management.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img src="images/why-choose/free-mobile-app-consultation.svg" alt="Free Mobile App Consultation" class="img-fluid">
					</div>
					<h3 class="title">Free AR App Consultation</h3>
					<p class="description">With AppsNation, you can consult your way to success for free.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img src="images/why-choose/50+-expert-android-developers.svg" alt="50+ VR App Developers" class="img-fluid">
					</div>
					<h3 class="title">50+ VR App Developers</h3>
					<p class="description">Unleash your true potential with best-in-class android developers across the globe.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img src="images/why-choose/flexible-hiring-models.svg" alt="Flexible Hiring Models" class="img-fluid">
					</div>
					<h3 class="title">Flexible Hiring Models</h3>
					<p class="description">AppsNation is accessible to everyone regardless of the business size and the industry with personalized pricing packages.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img src="images/why-choose/247-technical-support.svg" alt="24/7 Technical Support" class="img-fluid">
					</div>
					<h3 class="title">24/7 Technical Support</h3>
					<p class="description">Never feel overwhelmed; our technical staff is available 24/7 to resolve any issues with the application.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img src="images/why-choose/100-transparency.svg" alt="100% Transparency" class="img-fluid">
					</div>
					<h3 class="title">100% Transparency</h3>
					<p class="description">With customer satisfaction our utmost priority, we keep ourselves transparent to the client to trust us with the app.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img src="images/why-choose/3-months-free-delivery.svg" alt="3-Months Free Support After Delivery" class="img-fluid">
					</div>
					<h3 class="title">3-Months Free Support After Delivery</h3>
					<p class="description">We offer 3-months of free support after app launch to ensure the app's integrity.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Start Why Choose-->

<!--Start Process-->
<section class="process-block bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Process" class="light-bg-text bg-text mt-5">
						<h2>Our <span>AR App</span> Development Process</h2>
					</div>
					<p>AppsNation guarantees that our AR app development process is fluid, resulting in an application being developed and delivered on time.</p>
				</div>
				</div>
			</div>
			<div class="row upset justify-content-center mt30">
				<div class="col-12 col-md-6 col-lg-4">
					<div class="timeline wow fadeIn h-100">
						<p class="timeline-year">01</p>
						<h3 class="title">Project Analysis of Requirements</h3>
						<p class="description">We assist you in determining the correct VR application with relevant functions for your business by thoroughly researching your industry and competitors to present you with a result-driven solution. We provide you with a business document that includes all the project details.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
					<div class="timeline wow fadeIn h-100">
						<p class="timeline-year">02</p>
						<h3 class="title">Wireframing & Designing</h3>
						<p class="description">We understand the difficulties of virtual reality and have a track record of creating successful apps by combining fascinating experience design, high-quality 3D models, and smooth user interactions. Our skilled 3D artists and designers foster photorealistic and low-poly models and virtual environments.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
					<div class="timeline wow fadeIn h-100">
						<p class="timeline-year">03</p>
						<h3 class="title">App Development</h3>
						<p class="description">Our skilled team of VR app developers enables you in meeting your business objectives. With experienced VR apps developers across diverse industries, we develop highly scalable, functional, and optimized VR apps that perform exceptionally well on all devices and platforms.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3">
					<div class="timeline wow fadeIn h-100">
						<p class="timeline-year">04</p>
						<h3 class="title">App Testing</h3>
						<p class="description">We apply the latest trends and methodologies to test the VR app to ensure it is well-optimized and functions well across multiple platforms and devices. Our impeccable quality assurance team guarantees the integrity of the VR app, including its immersive experience with thorough app testing.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3">
					<div class="timeline wow fadeIn h-100">
						<p class="timeline-year">05</p>
						<h3 class="title">App Deployment</h3>
						<p class="description">Deploying your bespoke VR app on the appropriate platform while adhering to its rigorous criteria for a successful launch is an essential component of our premier VR app development services. Our team prepares the relevant documentation, descriptions, and screenshots for marketplace publishing.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3">
					<div class="timeline wow fadeIn h-100">
						<p class="timeline-year">06</p>
						<h3 class="title">Post-launch Support and Maintenance</h3>
						<p class="description">Our commitment extends beyond deployment as we provide ongoing support and maintenance services. We address any issues, implement updates, and enhance the app's performance based on user feedback and emerging technologies. You can rely on us to ensure the continued success and optimization of your AR application.</p>
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
        <div class="testimonial-card-a owl-carousel">
            <div class="row mt-3 px-3">
        	@foreach($testimonials as $item)
                <div class="col-lg-6 mt-3 wow fadeIn">
					<div class="tcd card h-100">
						<div class="testimonial-card card-body">
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
					</div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-8">
                <div class="row justify-content-center">
                    <div class="col-6 col-md-3">
                        <a href="#" target="blank" class="wow fadeIn review-div">
                            <img src="images/home/reviews-icon-1.webp" alt="review" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-6 col-md-3">
                        <a href="#" target="blank" class="wow fadeIn review-div">
                            <img src="images/home/reviews-icon-2.webp" alt="review" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-6 col-md-3 mt-3 mt-md-0">
                        <a href="#" target="blank" class="wow fadeIn review-div">
                            <img src="images/home/reviews-icon-3.webp" alt="review" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-6 col-md-3 mt-3 mt-md-0">
                        <a href="#" target="blank" class="wow fadeIn review-div">
                            <img src="images/home/reviews-icon-4.webp" alt="review" class="img-fluid">
                        </a>
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

<!-- Start FAQS-->
<section class="faq-section py-5" id="faqs">
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
            <div class="col-sm-12 wow fadeIn">
                <div class="accordion" id="accordionExample-a">
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-b">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1a" aria-expanded="true" aria-controls="collapseOne">
								What is the difference between AR and VR?
                            </button>
                        </h2>
                        <div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Virtual reality has the ability to transport the user. In other words, take us somewhere else. By using closed visors or goggles, VR shuts out the room and relocates our presence elsewhere.</p>
									<p class="pt-2">On the other hand, augmented reality augments our present reality by adding something to it. It doesn't take us anywhere else. It just "enhances" our existing state of presence, frequently with clear visors.</p>
									<p class="pt-2">Both augmented and virtual reality have in common: they are both immersive experiences. They both have the extraordinary capacity to change our vision of the world. However, the impression of our presence is where they vary.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								Which is better - AR or VR?
                            </button>
                        </h2>
                        <div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>AR augments reality via phones and tablets, whereas VR creates a new world via headgear. VR is better for detailed, soft-skill information, whereas AR is better for discrete, technical issues. Both AR training and VR training offer a long-term ROI that is valuable.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
								How much does a VR app Cost to Develop?
                            </button>
                        </h2>
                        <div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
									<p>The needs mainly determine the cost of developing a VR app; project complexity, modules, reporting, back-end system, hardware setup, integration, etc. The actual cost can be approximated after you know exactly what you want.</p>
									<p class="pt-2">For example, the cost of designing a smartphone VR game might range from $5,000 to $100K.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
								How much does it cost to build a custom VR app?
                            </button>
                        </h2>
                        <div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Custom VR development expenses vary depending on whether you are creating mobile VR applications or VR games. A standard VR software will cost between $5K to $50K, whereas a VR game will cost $10K to $100K. However, the following factors influence the cost of bespoke VR application development:</p>
									<ul class="ps-5">
										<li>Content creation and software development.</li>
										<li>Development and investigation</li>
										<li>Platforms for publishing </li>
										<li>The app's features and add-ons</li>
										<li>Also, third-party integrations</li>
									</ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
								How long does it take to make VR app?
                            </button>
                        </h2>
                        <div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Depending on the scale of the virtual world, features, models, purpose, the number of digital assets, and the number of interactions, VR creation and programming might take 1-8 weeks or more.</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
								What’s the latest tech you’re using?
                            </button>
                        </h2>
                        <div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>We use the following technology stack to foster your custom VR applications:</p>
									<p class="pt-2">VR Engine</p>
									<ul class="ps-5">
										<li>Unreal Engine</li>
										<li>Unity</li>
										<li>Cryengine</li>
										<li>Amazon Sumerian</li>
									</ul>
									<p class="pt-2">3D Modeling</p>
									<ul class="ps-5">
										<li>Maya</li>
										<li>Autodesk 3DS MAX</li>
										<li>Photoshop</li>
										<li>Substance Partner</li>
									</ul>
									<p class="pt-2">Simulation Modeling</p>
									<ul class="ps-5">
										<li>Nvidia Flex</li>
										<li>Havok</li>
										<li>Bullet Physics</li>
									</ul>
									<p class="pt-2">Programming Languages</p>
									<ul class="ps-5">
										<li>.Net</li>
										<li>Java</li>
										<li>Python</li>
										<li>Node.js</li>
										<li>PHP</li>
										<li>HTML</li>
										<li>Css</li>
										<li>JavaScript</li>
										<li>React</li>
										<li>Angular</li>
										<li>Meteor</li>
									</ul>
									<p class="pt-2">Database</p>
									<ul class="ps-5">
										<li>SQL</li>
										<li>Azure Data Lake</li>
										<li>AWS</li>
										<li>Google Cloud</li>
										<li>Rackspace</li>
									</ul>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7a" aria-expanded="true" aria-controls="collapseOne">
								What kind of testing will you do?
                            </button>
                        </h2>
                        <div id="collapse-7a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>We perform testing through the latest technologies, principles, standards, methodologies, and tools to create the state-of-the-art custom VR application that performs flawlessly on every device and platform.</p>
									<p class="pt-2">Testing Methods:</p>
									<ul class="ps-5">
										<li>Trial and Error Approach</li>
										<li>Recording Sessions</li>
										<li>Automated Testing Tools</li>
										<li>User Feedback</li>
										<li>Integration Test</li>
										<li>End-to-end Testing</li>
									</ul>
									<p class="pt-2">Tools:</p>
									<ul class="ps-5">
										<li>OVR Metric Tools</li>
										<li>Logcat</li>
										<li>Ovrgupprofiler</li>
										<li>GPUsystrace</li>
										<li>RenderDoc</li>
										<li>Unity Profiler</li>
									</ul>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8a" aria-expanded="true" aria-controls="collapseOne">
								Will we sign an NDA to keep my VR software/application idea confidential?
                            </button>
                        </h2>
                        <div id="collapse-8a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>A Non-Disclosure Agreement (NDA) is a legally binding contract that we use while working on different projects to ensure that your ideas are not copied or leaked to competitors. As a result, you should ease yourself from being concerned about the security of your VR app.</p>
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

<!--Start Blogs-->
<section class="blogs-section py-5">
@if(count($data['data']) > 0)
	<div class="container">
		<div class="row mb100">
			<div class="col-lg-6">
				<div data-text="Blogs" class="light-bg-text bg-text">
					<h2 class="mb0 common-heading">Latest Stories</h2>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($data['data'] as $post)
			<div class="col-12 col-md-6 col-lg-4 mt30 wow fadeIn">
				<div class="card h-100">
					<a href="{{ $post['guid'] }}">
						<img src="https://blog.appsnation.co/wp-content/uploads/{{$post['featured_image_url']}}" alt="{{$post['post_title']}}" class="img-fluid">
					</a>
					<div class="entry-blog-post dg-bg2">
						<span class="bypost-">
							<a href="{{ $post['guid'] }}">
								<i class="fas fa-tag"></i> Appsnation
							</a>
						</span>
						<span class="posted-on-">
							<a href="{{ $post['guid'] }}">
								<i class="fas fa-clock"></i> {{ date('M d, Y', strtotime($post['post_date'])) }}
							</a>
						</span>
					</div>
					<div class="card-body">
						<h4 class="mb-0">
							<a href="{{ $post['guid'] }}">{{$post['post_title']}}</a>
						</h4>
					</div>
				</div>
			</div>
			@endforeach
			@else
		</div>
	</div>
	@endif
</section>

<div class="container">
	<div class="row mb-4 text-center wow fadeIn">
		<div class="col-12">
			<a href="https://blog.appsnation.co/" class="btn-main button-arounder lnk">View More
				<i class="fas fa-chevron-right fa-icon"></i>
				<span class="circle"></span>
			</a>
		</div>
	</div>
</div>
<!--End Blogs-->

@endsection