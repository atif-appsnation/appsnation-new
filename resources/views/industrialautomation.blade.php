@extends('app.main')
@section('content')
<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 industrial-automation">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Revolutionize Your Workflow With Our Automation Services</h1>
					<p class="mt20 my-5 text-white" data-wow-delay=".4s">Are you ready to streamline your business and unlock its full potential? Our automation solutions are here to help. Our expert technicians are dedicated to finding the right automation solutions for your unique business needs.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb-->

<!--Start About-->
<section class="automation-services service py-5">
	<div class=" container">
		<div class="row mb-3">
			<div class="col-lg-5">
				<div class="image-block wow fadeIn">
					<img src="images/services/industrial-automation/automation-service-img.webp" alt="Android App Development" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-7 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="Automation" class="light-bg-text bg-text">
						<h2>Scale-Up With Our<br> <span class="flup-theme">Industrial Automation</span> Development Services</h2>
					</div>
					<p>From automating mundane tasks to optimizing your workflow, we have the tools and experience to make it happen. Avoid letting manual labor hold you back any longer. Take the first step towards a more efficient, productive future with our automation services.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5  wow fadeIn">
			<div class="col-12 col-md-6 col-lg-3">
				<div class="card">
					<div class="card-body text-center mt-3 mt-md-0">
						<img src="images/services/industrial-automation/scada-hmi-icon.webp" alt="SCADA/HMI" class="img-fluid py-3 ind-auto-img">
						<h5>SCADA/HMI
					</h5></div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3 mt-md-0">
				<div class="card">
					<div class="card-body text-center">
						<img src="images/services/industrial-automation/industrial-controls-icon.webp" alt="Industrial Controls" class="img-fluid py-3 ind-auto-img">
						<h5>Industrial Controls
					</h5></div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3 mt-md-3 mt-lg-0">
				<div class="card">
					<div class="card-body text-center">
						<img src="images/services/industrial-automation/system-automation-icon.webp" alt="System Automation" class="img-fluid py-3 ind-auto-img">
						<h5>System Automation
					</h5></div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3 mt-md-3 mt-lg-0">
				<div class="card">
					<div class="card-body text-center">
						<img src="images/services/industrial-automation/upgrade-and-repair-icon.webp" alt="Upgrade and Repair" class="img-fluid py-3 ind-auto-img">
						<h5>Upgrade and Repair
					</h5></div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3">
				<div class="card">
					<div class="card-body text-center mt-3 mt-md-0">
						<img src="images/services/industrial-automation/machine-vision-icon.webp" alt="Machine Vision" class="img-fluid py-3 ind-auto-img">
						<h5>Machine Vision
					</h5></div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3">
				<div class="card">
					<div class="card-body text-center">
						<img src="images/services/industrial-automation/extended-reality-automatio-icon.webp" alt="Extended Reality Automation" class="img-fluid py-3 ind-auto-img">
						<h5>Extended Reality Automation
					</h5></div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3">
				<div class="card">
					<div class="card-body text-center">
						<img src="images/services/industrial-automation/embedded-systems-icon.webp" alt="Embedded Systems" class="img-fluid py-3 ind-auto-img">
						<h5>Embedded Systems
					</h5></div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3">
				<div class="card">
					<div class="card-body text-center">
						<img src="images/services/industrial-automation/industrial-40-icon.webp" alt="Industrial 4.0" class="img-fluid py-3 ind-auto-img">
						<h5>Industrial 4.0
					</h5></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!-- <section class="emergency-services py-5">
    <div class="container">
        <div class="row justify-content-center wow fadeIn">
            <div class="col-lg-8">
                <h2 class="common-heading text-white text-center">Our Emergency Service Capabilities</h2>
            </div>
        </div>
    	<div class="row wow fadeIn mt-3">
			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-4 my-auto">
								<img src="images/services/industrial-automation/trouble-shooting-icon.webp" alt="Enterprise App Development" class="d-block mx-auto">
							</div>
							<div class="col-md-8">
                                <h5 class="pb-3 pt-3 pt-md-0">Troubleshooting</h5>
								<p>PLCs, robots, HMIs, and more.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3 mt-md-0 mt-lg-0">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-4 my-auto">
								<img src="images/services/industrial-automation/production-emergency-icon.webp" alt="App Development For Startups" class="d-block mx-auto">
							</div>
							<div class="col-md-8">
                                <h5 class="pb-3 pt-3 pt-md-0">Production Startup Emergencies</h5>
								<p>We can assist you because startups are difficult and may need to be corrected.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3 mt-xl-0">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-4 my-auto">
								<img src="images/services/industrial-automation/hardware-replacement-icon.webp" alt="App Development For Kids" class="d-block mx-auto">
							</div>
							<div class="col-md-8">
                                <h5 class="pb-3 pt-3 pt-md-0">Hardware Replacements</h5>
								<p>We take pride in providing the proper hardware for your operations to run flawlessly.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-4 my-auto">
								<img src="images/services/industrial-automation/on-site-help-icon.webp" alt="On-Site Help" class="d-block mx-auto">
							</div>
							<div class="col-md-8">
                                <h5 class="pb-3 pt-3 pt-md-0">On-Site Help</h5>
								<p>We are available offline, too, with an engineer present on-site to assist you.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-4 my-auto">
								<img src="images/services/industrial-automation/debugging-icon.webp" alt="Debugging" class="d-block mx-auto">
							</div>
							<div class="col-md-8">
                                <h5 class="pb-3 pt-3 pt-md-0">Debugging</h5>
								<p>Standalone controllers, robots, PCLs, etc.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-4 my-auto">
								<img src="images/services/industrial-automation/downtime-icon.webp" alt="Unplanned Downtime Support" class="d-block mx-auto">
							</div>
							<div class="col-md-8">
                                <h5 class="pb-3 pt-3 pt-md-0">Unplanned Downtime Support</h5>
								<p>We get the engines running regardless of any urgency.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</section> -->

<!--Start Service-->
<section class="service-section-app py-5 dark-bg2">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag">
					<div data-text="Our Services" class="light-bg-text bg-text">
						<h2>Our <span>Emergency Service</span> </h2>
					</div>
					<p>AppsNation Industrial Automation development services are the light of hope for you to reshape your business with more digital traction.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-designing-img"></div>
					</div>
					<div class="service-heading">
						<h4>Troubleshooting</h4>
					</div>
					<div class="services-text-div">
						<p>PLCs, robots, HMIs, and more.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-web-img"></div>
					</div>
					<div class="service-heading">
						<h4>Production Startup Emergencies</h4>
					</div>
					<div class="services-text-div">
						<p>We can assist you because startups are difficult and may need to be corrected.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-app-porting-img"></div>
					</div>
					<div class="service-heading">
						<h4>Hardware Replacements</h4>
					</div>
					<div class="services-text-div">
						<p>We take pride in providing the proper hardware for your operations to run flawlessly.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-app-testing-img"></div>
					</div>
					<div class="service-heading">
						<h4>On-Site Help</h4>
					</div>
					<div class="services-text-div">
						<p>We are available offline, too, with an engineer present on-site to assist you.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-app-consultation-img"></div>
					</div>
					<div class="service-heading">
						<h4>Debugging</h4>
					</div>
					<div class="services-text-div">
						<p>Standalone controllers, robots, PCLs, etc.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-app-dev-consultation-img"></div>
					</div>
					<div class="service-heading">
						<h4>Unplanned Downtime Support</h4>
					</div>
					<div class="services-text-div">
						<p>We get the engines running regardless of any urgency.</p>
					</div>
				</div>
			</div>
			<!-- <div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="custom-android-app-dev-img"></div>
					</div>
					<div class="service-heading">
						<h4>Custom Android App Development</h4>
					</div>
					<div class="services-text-div">
						<p>Convert your brand into a tap with our outstanding custom android app development services that serves your purpose, solves your problem, and meet your needs.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-multi-platform-img"></div>
					</div>
					<div class="service-heading">
						<h4>Multi-Platform Deployment</h4>
					</div>
					<div class="services-text-div">
						<p>We help you deploy a mobile app project across different platforms with ease in the shortest time possible to make your app available to multiple devices.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-watch-img"></div>
					</div>
					<div class="service-heading">
						<h4>Android Watch App Deployment</h4>
					</div>
					<div class="services-text-div">
						<p>With best-in-Class watchOS expert developers, our Android Watch app development services enhance your business's accessibility and mobility.</p>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</section>
<!--End Service-->

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

<!--Start Features-->
<!-- <section class="features-section-app dark-bg2 py-5">
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
				<h2>Creative Industrial Automation Development Agency</h2>
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
</section> -->
<!--End Features-->

<!--Start Why Choose-->
<section class="why-choose bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Choose Us" class="dark-bg-text bg-text">
						<h2 class="text-white">Why Choose <span>AppsNation</span></h2>
					</div>
					<p class="text-white">We specialize in enhancing your production efficiency with advanced automation solutions, leveraging cutting-edge technologies such as IoT, AI, and Machine Learning.	</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img src="images/why-choose/free-mobile-app-consultation.svg" alt="Free Mobile App Consultation" class="img-fluid">
					</div>
					<h3 class="title">Free Consultation Services</h3>
					<p class="description">With Industrial Automation Experts, you can receive a complimentary consultation to identify the best automation solutions for your needs.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img src="images/why-choose/50+-expert-android-developers.svg" alt="50+ Expert Android Developers" class="img-fluid">
					</div>
					<h3 class="title">Experienced Automation Engineers</h3>
					<p class="description">Unlock your potential with our team of expert engineers skilled in the latest automation technologies.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img src="images/why-choose/flexible-hiring-models.svg" alt="Flexible Hiring Models" class="img-fluid">
					</div>
					<h3 class="title">Flexible Project Engagements</h3>
					<p class="description">We offer adaptable engagement models, catering to businesses of all sizes with customized pricing packages.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img src="images/why-choose/247-technical-support.svg" alt="24/7 Technical Support" class="img-fluid">
					</div>
					<h3 class="title">24/7 Technical Support</h3>
					<p class="description">Our dedicated support team is available around the clock to address any issues and ensure smooth operations.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img src="images/why-choose/100-transparency.svg" alt="100% Transparency" class="img-fluid">
					</div>
					<h3 class="title">Transparent Operations</h3>
					<p class="description">We prioritize transparency, keeping you informed at every step to build trust and ensure satisfaction.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img src="images/why-choose/3-months-free-delivery.svg" alt="3-Months Free Support After Delivery" class="img-fluid">
					</div>
					<h3 class="title">3-Months Free Maintenance Post-Delivery</h3>
					<p class="description">Enjoy peace of mind with three months of free maintenance after project completion, ensuring the sustained performance of our solutions.</p>
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
			<div class="col-126">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Process" class="light-bg-text bg-text mt-5">
						<h2>Our <span>Industrial Automation</span> Development Process</h2>
					</div>
					<p>AppsNation offers clients an easy and agile Industrial Automation development process with a result-driven ideology.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">01</p>
					<h3 class="title">Requirement Analysis</h3>
					<p class="description">We begin by understanding your industry-specific needs, identifying automation opportunities, and defining system requirements. This ensures a clear project scope and objective alignment.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">02</p>
					<h3 class="title">Solution Design and Strategy</h3>
					<p class="description">We create a tailored automation strategy, selecting technologies like PLCs, SCADA, and IoT devices. Our focus is on designing scalable and reliable systems that integrate smoothly with your existing setup.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">03</p>
					<h3 class="title">System Architecture and Development</h3>
					<p class="description">Our engineers develop the system architecture, ensuring flexibility and scalability. This includes programming and configuring hardware and software components for optimal performance.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">04</p>
					<h3 class="title">Testing and Quality Assurance</h3>
					<p class="description">Comprehensive testing ensures system reliability and performance. We conduct integration, functional, and performance tests to maintain high standards of quality and safety.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">05</p>
					<h3 class="title">Implementation and Deployment</h3>
					<p class="description">We oversee the installation and configuration of automation systems, ensuring minimal operational disruption. Our team provides training and support for a seamless transition.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">06</p>
					<h3 class="title">Support and Maintenance</h3>
					<p class="description">Post-deployment, we offer ongoing support, updates, and preventive maintenance, ensuring the long-term efficiency and reliability of your automation systems.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Process-->

<!--Start Our Work-->

<section class="our-work py-5">
   <div class="container">
       <div class="row">
           <div class="col-12 wow fadeIn">
               <div class="common-heading">
			   		<div data-text="Work" class="light-bg-text bg-text mt-5">
						<h2>Our Work</h2>
					</div>
                   <p>AppsNation resolves your tech problems through their huge channel of services and solutions with our extremely experienced and professional team. We are serving our valuable clients to see their concepts and assumptions. Our services are to produce you the best Web and App solutions in a very innovative and inventive manner.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--End Our Work-->

<!-- Start Works -->
<section class="our-works py-5">
   <div class="container">
       <div class="row">
           <div class="col-lg-12 wow fadeIn">
               <div class="card green-bg p-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="images/services/industrial-automation/industrial-automation-img-1.webp" alt="Unplanned Downtime Support" class="d-block mx-auto">
                            </div>
                            <div class="col-lg-6 mt-4 mt-lg-0">
                                <h2 class="common-heading">Delta Robot</h2>
                                <p>Futurerealiti’s industrial automation tech development team assures you to provide you with a complete solution to fully automate your industrial unit. AppsNation designed and developed a robot called Delta robot that not only automates the process of production but also saves your finance as it is a one-time investment. they are parallel robots used in industrial automation. They comprised of three joined arms to a moving platform controlled by motors and sensors. End effectors at Each arm's tip is utilised to quickly and precisely pick up and move items.</p>
                                <a data-bs-toggle="modal" data-bs-target="#leadModal" class="btn-main button-arounder lnk wow fadeIn mt-4" data-wow-delay="0.8s">View Case Study</a>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>

		<div class="row pt-5">
           <div class="col-lg-12 wow fadeIn">
               <div class="card green-bg p-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 my-auto">
                                <h2 class="common-heading">Cartesian Robot</h2>
                                <p>At Futurerealiti, we have a team of experts dedicated to developing industrial automation technologies that can help businesses fully automate their operations. We are pleased to present our newest invention, the Cartesian robot, which has been specifically designed to automate the production process while also minimizing costs by being a one-time investment. It works by Using the x, y, and z linear axes that move independently to manipulate objects in a straight line. It is commonly used in manufacturing and automation for tasks that require precise movements in a specific direction. The product uses its AI and assembles the product to a designated point or container for further processes.</p>
                                <a data-bs-toggle="modal" data-bs-target="#leadModal" class="btn-main button-arounder lnk wow fadeIn mt-4" data-wow-delay="0.8s">View Case Study</a>
                            </div>
                            <div class="col-lg-6 mt-4 mt-lg-0">
                                <img src="images/services/industrial-automation/industrial-automation-img-2.webp" alt="Unplanned Downtime Support" class="d-block mx-auto">
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>

		<div class="row pt-5">
           <div class="col-lg-12 wow fadeIn">
               <div class="card green-bg p-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="images/services/industrial-automation/industrial-automation-img-3.webp" alt="Unplanned Downtime Support" class="d-block mx-auto">
                            </div>
                            <div class="col-lg-6 mt-4 my-lg-auto">
                                <h2 class="common-heading">Automated Guided Vehicle</h2>
                                <p>Futurerealiti's industrial automation tech development team is constantly innovating to provide cutting-edge solutions for businesses seeking to optimize their operations. Our latest invention, the AGV is a prime example of our commitment to efficiency and cost savings. By automating the inventory process with a one-time investment, we can help businesses achieve their goals faster and more effectively. Automated Guided Vehicle, or AGV. It is a mobolize robot that has been designed to move supplies, products, or equipment around a building or warehouse. Sensors and cutting-edge control systems are used by AGVs to find their way around a pre-drawn route or map.</p>
                                <a data-bs-toggle="modal" data-bs-target="#leadModal" class="btn-main button-arounder lnk wow fadeIn mt-4" data-wow-delay="0.8s">View Case Study</a>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
</section>
<!-- End Works -->

<!--Start Tech-->
<!-- <div class="techonology-used- py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeIn">
					<h2>Technology Stack</h2>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeIn">
					<p class="mb30">We create mobile apps with scalable and tested technology stack to deliver apps par excellence.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-5 wow fadeIn">
				<ul class="nav nav-tabs android-tech-tabs mt-5">
					@foreach($techstack as $k=>$item)

					@if($k==0)
					<li class="active">
						<a data-bs-toggle="tab" href="#a{{$item['id']}}" class="boximageicon-seo zoomed  stack-hov">
							<img src="uploads/{{$item['image']}}" alt="Tech Stack">
						</a>
					</li>

					@else

					<li>
						<a data-bs-toggle="tab" href="#a{{$item['id']}}" class="boximageicon-seo zoomed stack-hov">
							<img src="uploads/{{$item['image']}}" alt="Tech Stack">
						</a>
					</li>
					@endif

					@if(($k+1)%3==0 )
					@if($k==0)

					@else
				</ul>
				<ul class="nav nav-tabs android-tech-tabs mt-5">
					@endif
					@endif
					@endforeach
				</ul>
			</div>

			<div class="col-md-7 mt-4 my-lg-auto wow fadeIn">
				<div class="tab-content tab-body">

					@foreach($techstack as $k=>$items)
					@if($k==0)
					<div id="a{{$items['id']}}" class="tab-pane fade in active">
						<div class="boxseo-data text-start">
							<img src="uploads/{{$items['image']}}" alt="{{$items['heading']}} Logo">
							<h3 class="font-size-24 mt-0 head-size">{{$items['heading']}}</h3>
							<p class="mt-4">{{$items['content']}}</p>
						</div>
					</div>

					@else
					<div id="a{{$items['id']}}" class="tab-pane fade">
						<div class="boxseo-data text-start">
							<img src="uploads/{{$items['image']}}" alt="{{$items['heading']}} Logo">
							<h3 class="font-size-24 mt-0 head-size">{{$items['heading']}}</h3>

							<p class="mt-4">{{$items['content']}}</p>
						</div>
					</div>

					@endif

					@endforeach
				</div>
			</div>
		</div>
	</div>
</div> -->
<!--End Tech-->

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
						<h2 class="text-white">Ranked as #1 <span>Industrial Automation</span> Development Company</h2>
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
		
		
        <div class="testimonial-card-a owl-carousel owl-theme">
            <!-- <div class="row mt-3 px-3"> -->
			@foreach($testimonials as $item)
                <!-- <div class="col-lg-6 mt-3 wow fadeIn"> -->
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
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
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
        <div class="row mt100">
            <div class="col-sm-12 wow fadeIn">
                <div class="accordion" id="accordionExample-a">
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-b">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1a" aria-expanded="true" aria-controls="collapseOne">
								What kind of industrial automation work can Appsation do?
                            </button>
                        </h2>
                        <div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Appsnation can provide a wide range of industrial automation services, including designing, developing, testing, and maintaining automation systems, as well as providing hardware and software integration, machine vision, and robotics solutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								How do Appsnation approach industrial automation projects?
                            </button>
                        </h2>
                        <div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Appsnation typically use a structured approach to industrial automation projects, starting with a detailed analysis of the client's needs and requirements. They then design and develop customized solutions, test them thoroughly, and implement them in the client's facility.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
								Can Appsnation provide customized solutions for specific industrial automation needs?
                            </button>
                        </h2>
                        <div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Yes, Appsnation can provide customized solutions tailored to the specific needs and requirements of the client. They work closely with the client to understand their needs and develop solutions that are effective, efficient, and cost-effective.</p>
									
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
								What are the benefits of outsourcing industrial automation work to Appsnation?
                            </button>
                        </h2>
                        <div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Outsourcing industrial automation work to Appsnation can offer several benefits, including access to specialized expertise, reduced costs, improved efficiency, and faster time-to-market.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
								How long does it typically take for Appsnation to complete an industrial automation project?
                            </button>
                        </h2>
                        <div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>The time it takes to complete an industrial automation project can vary depending on the complexity and scope of the project. However, Appsnation typically provide a detailed timeline and schedule upfront and work closely with the client to ensure that the project is completed on time and within budget.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
								Can Appsnation provide ongoing maintenance and support for industrial automation systems?
                            </button>
                        </h2>
                        <div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Yes, Appsnation can provide ongoing maintenance and support for industrial automation systems, including software updates, troubleshooting, and repairs. They work closely with the client to ensure that the system is running smoothly and efficiently at all times.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7a" aria-expanded="true" aria-controls="collapseOne">
								What kind of software and hardware expertise do Appsnation have in industrial automation?
                            </button>
                        </h2>
                        <div id="collapse-7a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Appsnation have expertise in a wide range of software and hardware technologies used in industrial automation, including PLC programming, SCADA systems, HMI design, machine vision, robotics, and artificial intelligence.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8a" aria-expanded="true" aria-controls="collapseOne">
								What are the costs associated with industrial automation work done by Appsnation?
                            </button>
                        </h2>
                        <div id="collapse-8a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>The costs associated with industrial automation work done by Appsnation can vary depending on the scope and complexity of the project, as well as the specific needs and requirements of the client. Software houses typically provide a detailed cost estimate upfront and work closely with the client to ensure that the project is completed within the agreed-upon budget.</p>
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