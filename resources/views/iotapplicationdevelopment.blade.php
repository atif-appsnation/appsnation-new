@extends('app.main')
@section('content')

<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 iot-app-banner">
@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">IoT App Development Company</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">Enrich your brand’s mobility with a wearable app running across various wearables and connectivity with multi-platform devices - responsive, fast, and visually appealing.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb Area-->

<!--Start About-->
<section class="service py-5">
	<div class=" container">
		<div class="row">
			<div class="col-lg-5">
				<div class="image-block wow fadeIn">
					<img src="images/services/iot-app-development/iot-app-development.webp" alt="image" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-7 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="IoT" class="light-bg-text bg-text">
						<h2>Scale-Up With Our<br> <span class="flup-theme">IoT App</span> Development Services</h2>
					</div>
					<p><strong>"They have a thorough understanding of IoT and are well-versed in the most up-to-date techniques and technologies."</strong></p>
					<p>We are fortunate that we were able to locate them. They've been fantastic partners in terms of supporting us and assisting us in locating exactly what we wanted. They created a great and well-researched strategy for app promotion.</p>
					<p>Working with them gives you access to a large team while still receiving customized attention. Anyone who has the chance should take advantage of it.</p>
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
					<div data-text="Our Services" class="light-bg-text bg-text">
						<h2>Our Unrivaled <span>IoT App</span> Services</h2>
					</div>
					<p>IoT software development company can help you start a revolution in the IoT arena and accelerate business growth and progress. Utilize the power of our IoT solutions to create a digital bridge between machines and people through the convergence of innovative technologies.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img src="images/services/iot-app-development/iot-consulting.svg" alt="IoT Consulting" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>IoT Consulting</h4>
					</div>
					<div class="services-text-div">
						<p>Plan your process with the support of the best IoT software development company, from linked devices and sensors through lifecycle management and connection.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img src="images/services/iot-app-development/poc-and-prototype-development.svg" alt="PoC & Prototype Development" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>PoC & Prototype Development</h4>
					</div>
					<div class="services-text-div">
						<p>IoT development company strives to provide products that complement your main functionality so you can get the most out of your IoT device. That is a promise!</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img src="images/services/iot-app-development/iot-firmware-development-and-integration.svg" alt="IoT Firmware Development & Integration" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>IoT Firmware Development & Integration</h4>
					</div>
					<div class="services-text-div">
						<p>Allow our IoT professionals to work with your hardware designers to develop IoT firmware and embedded apps for IoT devices. Whatever your needs are, we'll help you get your IoT project up and running faster.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img src="images/services/iot-app-development/iot-mobile-and-web-apps.svg" alt="IoT Mobile & Web Apps" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>IoT Mobile & Web Apps</h4>
					</div>
					<div class="services-text-div">
						<p>Our IoT application development services for mobile and web are designed to help you run your business more efficiently. We deliver timeless items by utilizing the most cutting-edge digital technologies.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img src="images/services/iot-app-development/ip-product-development-and-integration.svg" alt="IP Product Development & Integration" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>IP Product Development & Integration</h4>
					</div>
					<div class="services-text-div">
						<p>Use the Hot software interface architecture to strengthen connectivity between IoT sensors and components. Our IoT developers are an expert at bolstering IP strategies.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img src="images/services/iot-app-development/iot-wearable-apps.svg" alt="IoT Wearable Apps" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>IoT Wearable Apps</h4>
					</div>
					<div class="services-text-div">
						<p>With fantastic wearable gadget apps, you can jump on the health and fitness craze. Make getting in shape the ultimate goal for your customers. Create experiences that can be shared.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img src="images/services/iot-app-development/iot-architecture-development.svg" alt="IoT Architecture Development" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>IoT Architecture Development</h4>
					</div>
					<div class="services-text-div">
						<p>Managing all aspects of their device's connectivity, from UI/UX to Architecture Designing. IoT Application Development Solutions that are carefully tested and bug-free to offer a faultless experience.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img src="images/services/iot-app-development/backend-and-api-integration.svg" alt="Backend & API Development" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>Backend & API Development</h4>
					</div>
					<div class="services-text-div">
						<p>To our renowned customers, our team of skilled internet of things programmers and coders provides entire backend and API development solutions.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Service -->

<!--Start Service -->
<section class="service-section py-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
				<div class="service-card-app gradient-border">
					<div class="services-img-div">
						<img src="images/services/iot-app-development/iot-data-analytics-and-data-visualization.svg" alt="IoT Data Analytics & Data Visualization" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>IoT Data Analytics & Data Visualization</h4>
					</div>
					<div class="services-text-div">
						<p>At our company, data handling is a top priority. We specialise in creating business-friendly IoT data visualisation and analytics tools.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app gradient-border">
					<div class="services-img-div">
						<img src="images/services/iot-app-development/iot-module-development.svg" alt="IoT Module Development" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>IoT Module Development</h4>
					</div>
					<div class="services-text-div">
						<p>Because we are one-stop internet of things development firms for all of your IoT development needs, we design IoT gateways for your app.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app gradient-border">
					<div class="services-img-div">
						<img src="images/services/iot-app-development/iot-implementation-and-support.svg" alt="IoT Implementation & Support" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>IoT Implementation & Support</h4>
					</div>
					<div class="services-text-div">
						<p>Our famous customers benefit from not only our internet of things app creation services, but also our entire support and maintenance services.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app gradient-border">
					<div class="services-img-div">
						<img src="images/services/iot-app-development/iot-architecture-for-connected-ecosystems.svg" alt="Backend & API Development" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>IoT Architecture for Connected Ecosystems</h4>
					</div>
					<div class="services-text-div">
						<p>Managing all aspects of their device's connectivity, from UI/UX to Architecture Designing. Providing IoT Application Development Services that are rigorous and bug-free to ensure a faultless experience.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app gradient-border">
					<div class="services-img-div">
						<img src="images/services/iot-app-development/user-experience-for-iot.svg" alt="User Experience for IoT" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>User Experience for IoT</h4>
					</div>
					<div class="services-text-div">
						<p>We assist clients in configuring IoT devices, analysing sensor data using business intelligence tools, managing IoT systems remotely and locally, and displaying data via responsive dashboards thus enhancing user experience.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app gradient-border">
					<div class="services-img-div">
						<img src="images/services/iot-app-development/testing-and-maintenance.svg" alt="Testing & Maintenance" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>Testing & Maintenance</h4>
					</div>
					<div class="services-text-div">
						<p>To reach a final conclusion, our IoT experts put your app through a comprehensive testing process that includes usability, dependability, data integrity, security, performance, and network testing.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app gradient-border">
					<div class="services-img-div">
						<img src="images/services/iot-app-development/industrial-iot-solutions.svg" alt="Industrial IoT Solutions" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>Industrial IoT Solutions</h4>
					</div>
					<div class="services-text-div">
						<p>By installing IoTs, you may gain actionable information from your supply chain monitoring and manufacturing performance for increased efficiency.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app gradient-border">
					<div class="services-img-div">
						<img src="images/services/iot-app-development/iomt-solutions.svg" alt="IoMT Solutions" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>IoMT Solutions</h4>
					</div>
					<div class="services-text-div">
						<p>Is it your goal to boost patient care, employee productivity, and asset utilisation? IoT cloud platform will assist you in developing and integrating cutting-edge IoMT apps into your business processes.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app gradient-border">
					<div class="services-img-div">
						<img src="images/services/iot-app-development/iot-cloud-solutions.svg" alt="IoT Cloud Solutions" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>IoT Cloud Solutions</h4>
					</div>
					<div class="services-text-div">
						<p>Amazon AWS IoT services, Microsoft Azure, Google Cloud, and IBM Bluemix are just a few of the cloud computing platforms that our IoT Developers use.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app gradient-border">
					<div class="services-img-div">
						<img src="images/services/iot-app-development/voice-enabled-technology-solutions.svg" alt="Voice-Enabled Technology Solutions" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>Voice-Enabled Technology Solutions</h4>
					</div>
					<div class="services-text-div">
						<p>Our internet of things app development firm is constantly working to give cutting-edge IoT mobile app development solutions as well as Voice-Enabled Technology Solutions.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app gradient-border">
					<div class="services-img-div">
						<img src="images/services/iot-app-development/api-development-and-integration.svg" alt="API Development & Integration" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>API Development & Integration</h4>
					</div>
					<div class="services-text-div">
						<p>Join hands with us to recruit IoT developers who are skilled in creating IoT solutions that integrate smoothly with cloud, big data, and other technologies.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Service -->

<!--Start Features-->
<section class="features-section-app dark-bg2 py-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-5">
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

			<div class="col-sm-12 col-md-12 col-lg-7 my-auto pl-3 pl-sm-3 pl-md-5 pt-3 pt-sm-3 pt-md-3 pt-lg-0">
				<div class="common-heading ptag">
					<div data-text="Industries" class="light-bg-text bg-text">
						<h2>Creative <span>IoT App</span> Development Agency</h2>
					</div>
				</div>
				<p class="py-3">We help a diverse clientele build result-driven mobile apps for different industries.</p>
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
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Choose Us" class="dark-bg-text bg-text">
						<h2 class="text-white">Why Choose <span>AppsNation</span></h2>
					</div>
					<p class="text-white">By creating exceptional digital goods, platforms, and top-notch IoT-based services, we have changed the IoT sector. Trust us to create an IoT ecosystem for your company that links people, equipment, and processes to help you run your business more efficiently. Data will be turned into actionable insights by an IoT integrated system, which will empower your organization with automated tasks and real-time data.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="effect-cont-comm-img"></div>
					</div>
					<div class="service-heading">
						<h4>Effective & Continuous Communication</h4>
					</div>
					<div class="services-text-div">
						<p>We offer a wide range of IoT app development services.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="delivered-on-time-img"></div>
					</div>
					<div class="service-heading">
						<h4>Excellent Quality Delivered on Time</h4>
					</div>
					<div class="services-text-div">
						<p>We develop IoT app development services across every platform and device.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="experienced-team-img"></div>
					</div>
					<div class="service-heading">
						<h4>Experienced Team</h4>
					</div>
					<div class="services-text-div">
						<p>We create a single coded IoT app that works efficiently on multiple platforms.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="absolute-support-img"></div>
					</div>
					<div class="service-heading">
						<h4>Absolute Support</h4>
					</div>
					<div class="services-text-div">
						<p>We serve all the industries across the world to leverage innovative technology.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="complete-technical-img"></div>
					</div>
					<div class="service-heading">
						<h4>Complete Technical Competency</h4>
					</div>
					<div class="services-text-div">
						<p>We have made our services affordable with on-time delivery to achieve customer satisfaction.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="full-confidential-img"></div>
					</div>
					<div class="service-heading">
						<h4>Full Confidentiality</h4>
					</div>
					<div class="services-text-div">
						<p>Our impeccable testing services ensure the IoT app is error-free.</p>
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
					<div data-text="Process" class="light-bg-text bg-text mt-5">
						<h2>Our <span>iOT App</span> Development Process</h2>
					</div>
					<p>We offer a seamless wearable app development process to upscale your software abilities with our wearable devices app developers.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-3">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">01</p>
						<h3 class="title">Define and Research the problem</h3>
						<p class="description">We don't start anything until we've had a chance to meet down with you and learn about your business needs and current operation. Based on our conversation, we perform extensive research and propose various solutions to assist you achieve your goal.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3 mt-md-0">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">02</p>
						<h3 class="title">Devising A Smart Solution</h3>
						<p class="description">The next step in the hierarchy is the to think of solution to the problem we have analyzed in the first step. We plan meticulously and give the best smart solution to give it a spark.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3 mt-lg-0">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">03</p>
						<h3 class="title">Hardware Software Selection</h3>
						<p class="description">We'll create a solid app product strategy and shape the development process to optimize functionality, connection, budget, and data security.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3 mt-lg-0">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">04</p>
						<h3 class="title">User-Centric Design (PoC)</h3>
						<p class="description">Once you've agreed on a solution, we'll work directly with you to create interactive architecture prototypes that will wow all of your project's stakeholders. This step will assist us in refining your use case and constructing something tangible in the future.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">05</p>
						<h3 class="title">Development of Featured IoT Device</h3>
						<p class="description">Our IoT engineers will improve your product by refining core features, validating functionality, carrying out progressive development, and making continuous upgrades.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">06</p>
						<h3 class="title">Integration</h3>
						<p class="description">This is the most exciting stage of the process because it is at this point that our professional developers begin coding your solution. This could entail both a mobile app and a web interface. We can also help you with firmware and hardware integration.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">07</p>
						<h3 class="title">Deployment And Testing</h3>
						<p class="description">When the mobile app has been developed, the next step is to start fixing bugs and flaws that degrade the user experience. We hand it back to you for approval once we've finished with that. After you give us your green light, we'll deploy the solution.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">08</p>
						<h3 class="title">Maintenance Support and Enhancements</h3>
						<p class="description">Our commitment to quality service does not end with deployment. Instead, we provide maintenance assistance for a set length of time to ensure that the IoT solution runs like butter. We also make improvements to the app based on your feedback. Throughout, we work hard to delight you!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Process-->

<!--Start Tech-->
<section class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="common-heading">
					<div data-text="Technologies" class="light-bg-text bg-text mb-5">
						<h2>Technologies We Work With</h2>
					</div>
					<p>A solid and high-performance IoT application takes a significant amount of time and money with expertise to design. As a result, it's critical to check whether the app's features are compatible with your requirements. To apprehend and develop a connected and smart device, IoT developers only uses the most recent stack.</p>
				</div>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-lg-12">
				<ul class="nav nav-tabs justify-content-center wow fadeIn" role="tablist">
					<li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#connectivity">Connectivity</a> </li>
					<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#hardware">Hardware</a> </li>
					<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#protocols">Protocols And Standards</a> </li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content wow fadeIn">
					<div id="connectivity" class="container tab-pane active">
						<div class="row mt-3 d-flex justify-content-center">
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp">
								<img src="images/tech/4g-lte-logo.webp" alt="4G LTE Logo" class="tech-logo">
								<h6 class="pt-3">4G LTE</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp">
								<img src="images/tech/wifi-logo.webp" alt="WIFI Logo" class="tech-logo">
								<h6 class="pt-3">WI-FI</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp">
								<img src="images/tech/bluetooth-logo.webp" alt="Bluetooth Logo" class="tech-logo">
								<h6 class="pt-3">Bluetooth</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp">
								<img src="images/tech/nfc-logo.webp" alt="NFC Logo" class="tech-logo">
								<h6 class="pt-3">NFC</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-0 text-center fadeInUp">
								<img src="images/tech/gsm-logo.webp" alt="GSM Logo" class="tech-logo">
								<h6 class="pt-3">GSM</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-0 text-center fadeInUp">
								<img src="images/tech/ethernet-logo.webp" alt="Ethernet Logo" class="tech-logo">
								<h6 class="pt-3">Ethernet</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
								<img src="images/tech/iot-gateway.webp" alt="IoT Gateway Logo" class="tech-logo">
								<h6 class="pt-3">IoT Gateway</h6>
							</div>
						</div>
					</div>
					<div id="hardware" class="container tab-pane fade">
						<br>
						<div class="row mt-3 d-flex justify-content-center">
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp">
								<img src="images/tech/raspberry-pi-logo.webp" alt="angular-js-logo" class="tech-logo">
								<h6 class="pt-3">Raspberry PI</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp">
								<img src="images/tech/react-native-logo.webp" alt="react-js-logo" class="tech-logo">
								<h6 class="pt-3">Arduino</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp">
								<img src="images/tech/type-script-logo.webp" alt="type-script-logo" class="tech-logo">
								<h6 class="pt-3">Beacons</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp">
								<img src="images/tech/vue-js-logo.webp" alt="vue-js-logo" class="tech-logo">
								<h6 class="pt-3">NodeMCU</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-0 text-center fadeInUp">
								<img src="images/tech/html-logo.webp" alt="html5-logo" class="tech-logo">
								<h6 class="pt-3">KNX</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-0 text-center fadeInUp">
								<img src="images/tech/html-logo.webp" alt="html5-logo" class="tech-logo">
								<h6 class="pt-3">Crestron</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
								<img src="images/tech/ionic-logo.webp" alt="ionic-logo" class="tech-logo">
								<h6 class="pt-3">Microcontrollers</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
								<img src="images/tech/swift-logo.webp" alt="swift-logo" class="tech-logo">
								<h6 class="pt-3">Miniature Boards</h6>
							</div>
						</div>
					</div>
					<div id="protocols" class="container tab-pane fade">
						<br>
						<div class="row mt-3 justify-content-center">
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp">
								<img src="images/tech/mangodb-logo.webp" alt="mangodb-logo" class="tech-logo">
								<h6 class="pt-3">MQTT</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp">
								<img src="images/tech/mysql-logo.webp" alt="mysql-logo" class="tech-logo">
								<h6 class="pt-3">Modbus</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp">
								<img src="images/tech/mssql-logo.webp" alt="mssql-logo" class="tech-logo">
								<h6 class="pt-3">SNMP</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp">
								<img src="images/tech/firebase-logo.webp" alt="firebase-logo" class="tech-logo">
								<h6 class="pt-3">AMQP</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-0 text-center fadeInUp">
								<img src="images/tech/dynamodb-logo.webp" alt="dynamodb-logo" class="tech-logo">
								<h6 class="pt-3">HTTP,HTTPS</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-0 text-center fadeInUp">
								<img src="images/tech/redis-logo.webp" alt="redis-logo" class="tech-logo">
								<h6 class="pt-3">Z-Wave</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
								<img src="images/tech/ionic-logo.webp" alt="ionic-logo" class="tech-logo">
								<h6 class="pt-3">ZigBee</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
								<img src="images/tech/swift-logo.webp" alt="swift-logo" class="tech-logo">
								<h6 class="pt-3">LoRAWAN</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
								<img src="images/tech/ionic-logo.webp" alt="ionic-logo" class="tech-logo">
								<h6 class="pt-3">iBeacon</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
								<img src="images/tech/swift-logo.webp" alt="swift-logo" class="tech-logo">
								<h6 class="pt-3">TCP & UDP</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
								<img src="images/tech/ionic-logo.webp" alt="ionic-logo" class="tech-logo">
								<h6 class="pt-3">CoAp</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
								<img src="images/tech/swift-logo.webp" alt="swift-logo" class="tech-logo">
								<h6 class="pt-3">BLE</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
								<img src="images/tech/ionic-logo.webp" alt="ionic-logo" class="tech-logo">
								<h6 class="pt-3">Cellular 2G,3G,4G,5G</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
								<img src="images/tech/swift-logo.webp" alt="swift-logo" class="tech-logo">
								<h6 class="pt-3">UDS</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
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

<!--Start Badges-->
<section class="badges-section py-5">
	<div class="container">
		<div class="row fadeIn">
			<div class="col-12">
				<div class="common-heading w-tdxt text-center">
					<div data-text="Awards" class="dark-bg-text bg-text text-center">
						<h2 class="text-white">Ranked as #1 <span>IoT App</span> Development Company</h2>
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

<!--Start FAQS-->
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
								How much does it cost for IoT App Development?
                            </button>
                        </h2>
                        <div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>It can cost between $40K and $60K to design a basic IoT app with basic must-have functionality like device on/off, timer, schedule, OTA update, and so forth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								How much time it will take to build IoT Application?
                            </button>
                        </h2>
                        <div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>It will take roughly 12 weeks for a startup to develop an IoT app with basic capabilities and a standard user interface. With more modifications, it can take up to 16 weeks.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
								What is the general process for IoT Application Development?
                            </button>
                        </h2>
                        <div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
									<p>The process of developing an IoT app begins with selecting a platform, then selecting hardware and development boards. You must also consider scalability ahead of time and ensure that your app is quick and ready to launch.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
								Which factors to consider while choosing an IoT app development company?
                            </button>
                        </h2>
                        <div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Gather information about their staff's competence in several technologies, experience dealing with various business areas, and use cases before calling.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
								Do you provide flexible hiring models for IoT app development?
                            </button>
                        </h2>
                        <div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Yes, we provide a variety of recruiting alternatives, including hourly, fixed price, and dedicated teams, from which our clients can select the one that best suits their project needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
								How can I track the progress of the IoT project?
                            </button>
                        </h2>
                        <div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>We constantly share reports with our clients during the IoT app development process so that we may gain immediate feedback and make any repairs and upgrades.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7a" aria-expanded="true" aria-controls="collapseOne">
								What are the maintenance and support requirements for IoT Solution Development?
                            </button>
                        </h2>
                        <div id="collapse-7a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>A competent-driven software development environment and a system runtime environment for enabling the highly secure and robust modular software construction are among the maintenance and support needs for IoT solution development.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8a" aria-expanded="true" aria-controls="collapseOne">
								How do I begin my project with you?
                            </button>
                        </h2>
                        <div id="collapse-8a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>You can either call us or send an email to us. Our team will respond as quickly as possible.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9a" aria-expanded="true" aria-controls="collapseOne">
								Which IoT development platforms are used by AppsNation?
                            </button>
                        </h2>
                        <div id="collapse-9a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>For our clients, our usual agile methodology has always backed our services as open-ended. We've worked with a number of clients that already had an app or a website and needed us to integrate their existing tools, CRM, and systems into the project.</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10a" aria-expanded="true" aria-controls="collapseOne">
								Can I hire Your IoT app developers in less than 48 hours?
                            </button>
                        </h2>
                        <div id="collapse-10a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Yes, you can hire your IoT app developer in less than 48 hours.</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-11a" aria-expanded="true" aria-controls="collapseOne">
								What is the no-risk trial period for AppsNation IoT developers?
                            </button>
                        </h2>
                        <div id="collapse-11a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>The no-risk trial period duration is 2 weeks.</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-12a" aria-expanded="true" aria-controls="collapseOne">
								What other services does AppsNation provide?
                            </button>
                        </h2>
                        <div id="collapse-12a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>We use the Internet of Things to collect and process data at the network's edge, allowing us to make smarter and faster business choices across industries.</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-13a" aria-expanded="true" aria-controls="collapseOne">
								How are AppsNation IoT developers different from other companies?
                            </button>
                        </h2>
                        <div id="collapse-13a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>We're experts at creating custom IoT products and integrating them with your existing systems. We help organisations develop a plan for utilising and exploring the Internet of Things in order to stay competitive in their respective markets.</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-14a" aria-expanded="true" aria-controls="collapseOne">
								Will you develop my IoT app idea for profit share?
                            </button>
                        </h2>
                        <div id="collapse-14a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Yes. How about we meet for a cup of coffee and discuss it.</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-15a" aria-expanded="true" aria-controls="collapseOne">
								How is my IoT application idea protected?
                            </button>
                        </h2>
                        <div id="collapse-15a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Your IoT application idea is protect under our policy of full confidentiality.</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-16a" aria-expanded="true" aria-controls="collapseOne">
								Do you have examples you could show me of IoT app projects you’ve created?
                            </button>
                        </h2>
                        <div id="collapse-16a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Yes we have the client projects examples we’ve worked on.</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-17a" aria-expanded="true" aria-controls="collapseOne">
								Will we sign an NDA to keep my IoT application idea confidential?
                            </button>
                        </h2>
                        <div id="collapse-17a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Yes, we will sign the NDA to keep your idea protected.</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-18a" aria-expanded="true" aria-controls="collapseOne">
								What are the stages of IoT app creation, and how do they affect the costs?
                            </button>
                        </h2>
                        <div id="collapse-18a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Yes, we provide quality assurance with ongoing support, maintenance and updates.</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-19a" aria-expanded="true" aria-controls="collapseOne">
								What are the stages of IoT app creation, and how do they affect the costs?
                            </button>
                        </h2>
                        <div id="collapse-19a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Depending on the 4 stages, and the additional features, you app cost may vary than the average cost.</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-20a" aria-expanded="true" aria-controls="collapseOne">
								Do you have any online portfolio?
                            </button>
                        </h2>
                        <div id="collapse-20a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Yes, we do have online portfolio. You can view it on our website.</p>
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