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
			<div class="col-sm-12 col-md-6 my-auto wow fadeInLeft">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Web App Development Company </h1>
					<p class="mt20 text-white" data-wow-delay=".4s">Expand your customer base with less expense and cross-platform apps that offer users an actual experience of a native application.</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeInRight">
				<img src="images/web-app-development/web-app-banner-img.webp" class="img-fluid" alt="Web App Development">
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
				<div class="image-block wow fadeInLeft">
					<img src="images/web-app-development/web-app-development.webp" alt="Web App Development" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-7 block-1 wow fadeInRight my-auto">
				<div class="common-heading text-l pl25">
					<h2>Why You Must Have A <span class="flup-theme">Web App</span></h2>
					<p><strong>Trying to find the best web app development company? </strong></p>
					<p>Apps Nation is a custom web application development company that provides unique web applications for a variety of businesses. </p>
					<p>We provide technological consultancy, customized web apps, eCommerce solutions, CMS web apps, and web portal creation as well as end-to-end custom web development and app development services.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start Service-->
<section class="service-section-app py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading ptag">
					<h2>Our custom web application development services</h2>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="common-heading ptag">
					<p class="mb30">Our custom web application developers have extensive expertise in creating cross-platform apps utilizing cutting-edge technology.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeInLeft">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="custom-web-app-img"></div>
					</div>
					<div class="service-heading">
						<h4>Custom Web App Development</h4>
					</div>
					<div class="services-text-div">
						<p>Our custom web application development services solutions that tackle business difficulties in healthcare, finance, retail, and manufacturing are developed by us, a top web app development company. We make certain that the web solution meets your company's needs. Your business operations will be streamlined using custom web apps.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeInLeft">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="cross-platform-app-img"></div>
					</div>
					<div class="service-heading">
						<h4>Cross-platform Apps</h4>
					</div>
					<div class="services-text-div">
						<p>Apps Nation creates web and mobile applications that are compatible with all operating systems, including Android, iOS, and Windows, and provide the greatest possible user experience. These apps work across all platforms, allowing you to expand your brand's reach and engagement.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeInLeft">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="e-commerce-solutions-img"></div>
					</div>
					<div class="service-heading">
						<h4>E-commerce Solutions</h4>
					</div>
					<div class="services-text-div">
						<p>We've created eCommerce company solutions that include a complete portal, shopping cart, and product solutions, as well as the integration of a secure payment gateway. We make certain that each feature we integrate facilitates the seamless operation of your eCommerce business.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeInRight">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="web-portal-dev-img"></div>
					</div>
					<div class="service-heading">
						<h4>Web Portal Development</h4>
					</div>
					<div class="services-text-div">
						<p>We create platforms for easy communication with clients to help you grow your business. We create business-to-business (B2B), business-to-consumer (B2C), vendor portals, as well as job, matrimony, dating, mailing, and other sorts of web platforms</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeInRight">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="custom-cms-web-dev-img"></div>
					</div>
					<div class="service-heading">
						<h4>Custom CMS Web Development</h4>
					</div>
					<div class="services-text-div">
						<p>For the customer, we create a unique content management system from the scratch for the client to facilitate them to the fullest. We create a CMS framework that is tailored to your specific business needs and that you own completely.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeInRight">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="technology-consulting-img"></div>
					</div>
					<div class="service-heading">
						<h4>Technology Consulting</h4>
					</div>
					<div class="services-text-div">
						<p>We have worked with many clients globally as one of the leading bespoke web application development experts. We have gathered expertise of these industries' operational and functional know-how. We want to be your trusted IT partner when it comes to OS, server, platform, and technology consultancy.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Service-->

<!--Start Hire Dedicated Developer -->
<section class="service-block">
	<div class="container">
		<div class="-cta-btn mt50 mb50">
			<div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.1s">
				<p>Hire a
					<span>Dedicated Developer</span>
				</p>
				<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Hire Now
					<i class="fas fa-chevron-right fa-icon"></i>
					<span class="circle"></span>
				</a>
			</div>
		</div>
	</div>
</section>
<!--End Hire Dedicated Developer -->

<!--Start Why Choose-->
<section class="why-choose bg-gradient3 py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeInLeft">
				<h2 class="text-white">Why Choose <span>AppsNation</span></h2>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeInRight">
					<p class="text-white">You receive a state-of-the-art solution with a cutting-edge appeal that engages more people online when you work with professional web developers and digital artists. Under packaged web app development services, take advantage of powerful technologies and a solid architecture to create a web solution that meets your needs.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeInLeft h-100">
					<div class="timeline-year">
						<div class="experience"></div>
					</div>
					<h3 class="title">Experience</h3>
					<p class="description">When you hire us, you receive access to our extensive experience developing sophisticated custom apps.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeInLeft h-100">
					<div class="timeline-year">
						<div class="focus-on-experties"></div>
					</div>
					<h3 class="title">Focus on Expertise</h3>
					<p class="description">We cultivate a mobile expert culture that maintains a great commitment to stay at the forefront of our business through specialization.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeInLeft h-100">
					<div class="timeline-year">
						<div class="cost-reduction"></div>
					</div>
					<h3 class="title">Cost Reduction</h3>
					<p class="description">We offer a cost-effective way to develop excellent mobile apps thanks to our time-tested development competence and large code repository.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeInRight h-100">
					<div class="timeline-year">
						<div class="lower-the-risk"></div>
					</div>
					<h3 class="title">Lower The Risk</h3>
					<p class="description">We eliminate risk and give quick time-to-value to step-out into the continually shifting market by delivering quickly and efficiently.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeInRight h-100">
					<div class="timeline-year">
						<div class="reliable-and-flexile"></div>
					</div>
					<h3 class="title">Reliable and Flexile</h3>
					<p class="description">We avoid difficulties and are adaptive to client needs by using the most up-to-date practises and technological skills.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeInRight h-100">
					<div class="timeline-year">
						<div class="one-partner-for-everyone"></div>
					</div>
					<h3 class="title">One Partner For Everyone</h3>
					<p class="description">Avoid costly resource onboarding and inefficiencies caused by many vendors. Our team is ready to help you with end-to-end business solutions.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Why Choose-->

<!--Start New Project-->
<section class="service-block">
	<div class="container">
		<div class="-cta-btn">
			<div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.8s">
				<p>Let's Start a <span>New Project</span> Together</p>
				<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Inquire Now
					<i class="fas fa-chevron-right fa-icon"></i>
					<span class="circle"></span>
				</a>
			</div>
		</div>
	</div>
</section>
<!--End New Project-->

<!--Start Features-->
<section class="features-section-app dark-bg2 py-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-5 wow fadeInLeft">
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

			<div class="col-sm-12 col-md-12 col-lg-7 my-auto pl-3 pl-sm-3 pl-md-5 pt-3 pt-sm-3 pt-md-3 pt-lg-0 wow fadeInRight">
				<h2>Creative Web App Development Agency</h2>
				<p class="py-3">We help a diverse clientele build result-driven web apps for different industries.</p>
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

<!--Start Process-->
<section class="process-block dark-bg2">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeInLeft">
					<h2>Our <span>Web App</span> Development Process</h2>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeInRight">
					<p>AppsNation offers clients an easy and agile web app development process with a result-driven ideology.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="card timeline wow fadeInUp h-100">
					<div class="card-body">
						<p class="timeline-year">01</p>
						<h3 class="title">Research and development</h3>
						<p class="description">Apps Nation has a proper step by step procedure for research and development. Have a look:</p>
						<ul class="order-list pt-2">
							<strong>
								<li>Assessing your requirements</li>
							</strong>
							<strong>
								<li>Validation of the concept</li>
							</strong>
							<strong>
								<li>Developing a strategy for execution</li>
							</strong>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="card timeline wow fadeInUp h-100">
					<div class="card-body">
						<p class="timeline-year">02</p>
						<h3 class="title">Front-end Development</h3>
						<p class="description">With proper thorough assessment, we move on to the next step:</p>
						<ul class="order-list pt-2">
							<strong>
								<li>The user's journey is being charted.</li>
							</strong>
							<strong>
								<li>Front-end architecture setup.</li>
							</strong>
							<strong>
								<li>UI/UX design</li>
							</strong>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="card timeline wow fadeInUp h-100">
					<div class="card-body">
						<p class="timeline-year">03</p>
						<h3 class="title">Back-end Development</h3>
						<p class="description">With front-end architecture being setup, next step is the execution of back-end development:</p>
						<ul class="order-list pt-2">
							<strong>
								<li>Integration of third-party plugins in the backend setup and configuration</li>
							</strong>
							<strong>
								<li>Effortless implementation</li>
							</strong>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="card timeline wow fadeInUp h-100">
					<div class="card-body">
						<p class="timeline-year">04</p>
						<h3 class="title">Manual and automated QA</h3>
						<p class="description">We keep QA professionals in the loop so you can swiftly roll out new features and ensure that your app functions smoothly across all browsers and screens.</p>
						<ul class="order-list pt-2">
							<strong>
								<li>Testing of Functionality</li>
							</strong>
							<strong>
								<li>Evaluation of the code</li>
							</strong>
							<strong>
								<li>Error correction</li>
							</strong>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="card timeline wow fadeInUp h-100">
					<div class="card-body">
						<p class="timeline-year">05</p>
						<h3 class="title">Web App Development</h3>
						<p class="description">We produce a proof-of-concept best web app development framework to examine the long-term potential of the web application in development and to assess the viability of your idea for genuine execution.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="card timeline wow fadeInUp h-100">
					<div class="card-body">
						<p class="timeline-year">06</p>
						<h3 class="title">Maintenance and Support</h3>
						<p class="description">Our web application development professionals thoroughly assess your company requirements and accessible technologies to assist you in selecting the most appropriate web stack.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Process-->

<!--Start Tech-->
<div class="techonology-used py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 wow fadeInLeft">
				<div class="common-heading ptag">
					<h2>Technology Stack</h2>
				</div>
			</div>
			<div class="col-lg-6 wow fadeInRight">
				<div class="common-heading ptag">
					<p>Apps Nation Technology Stack is divided into three main categories. Let’s take a look:</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5 wow fadeInLeft">
				<ul class="nav nav-tabs android-tech-tabs mt-5">
					@foreach($techstack as $k=>$item)

					@if($k==0)
					<li class="active">
						<a data-bs-toogle="tab" href="#a{{$item['id']}}" class="boximageicon-seo zoomed">
							<img src="uploads/{{$item['image']}}" alt="">
						</a>
					</li>

					@else

					<li>
						<a data-bs-toogle="tab" href="#a{{$item['id']}}" class="boximageicon-seo zoomed">
							<img src="uploads/{{$item['image']}}" alt="">
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

			<div class="col-md-7 my-auto wow fadeInRight">
				<div class="tab-content tab-body">
					@foreach($techstack as $k=>$items)
					@if($k==0)
					<div id="a{{$items['id']}}" class="tab-pane fade in active">
						<div class="boxseo-data text-start">
							<img src="uploads/{{$items['image']}}" alt="{{$items['heading']}} Logo">
							<h3 class="font-size-24 mt-0">{{$items['heading']}}</h3>
							<p class="mt-4">{{$items['content']}}</p>
						</div>
					</div>

					@else
					<div id="a{{$items['id']}}" class="tab-pane fade">
						<div class="boxseo-data text-start">
							<img src="uploads/{{$items['image']}}" alt="{{$items['heading']}} Logo">
							<h3 class="font-size-24 mt-0">{{$items['heading']}}</h3>

							<p class="mt-4">{{$items['content']}}</p>
						</div>
					</div>
					@endif

					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
<!--End Tech-->

<!-- Start Technologies -->
<section class="technologies certificates py-3 py-md-3 py-lg-5">
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
								<div class="col-md-3 mt-3 text-center">
									<img src="images/home/google-certifie-agency.webp" alt="Google Developers">
									<h6 class="pt-3">Google Developer<br>Certified Agency</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img src="images/home/adobe-logos.webp" alt="Adobe Solution Partner">
									<h6 class="pt-3">Adobe Solution<br>Partner Program</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img src="images/home/microsoft-certified-partner.webp" alt="Microsoft Certified Consulting">
									<h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img src="images/home/amazon-web-services.webp" alt="Amazon Web Service">
									<h6 class="pt-3">Amazon Web<br>Service Partner</h6>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-3 mt-3 text-center">
									<img src="images/home/google-certifie-agency.webp" alt="Google Developers">
									<h6 class="pt-3">Google Developer<br>Certified Agency</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img src="images/home/adobe-logos.webp" alt="Adobe Solution Partner">
									<h6 class="pt-3">Adobe Solution<br>Partner Program</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img src="images/home/microsoft-certified-partner.webp" alt="Microsoft Certified Consulting">
									<h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img src="images/home/amazon-web-services.webp" alt="Amazon Web Service">
									<h6 class="pt-3">Amazon Web<br>Service Partner</h6>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-3 mt-3 text-center">
									<img src="images/home/google-certifie-agency.webp" alt="Google Developers">
									<h6 class="pt-3">Google Developer<br>Certified Agency</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img src="images/home/adobe-logos.webp" alt="Adobe Solution Partner">
									<h6 class="pt-3">Adobe Solution<br>Partner Program</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img src="images/home/microsoft-certified-partner.webp" alt="Microsoft Certified Consulting">
									<h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img src="images/home/amazon-web-services.webp" alt="Amazon Web Service">
									<h6 class="pt-3">Amazon Web<br>Service Partner</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Technologies -->

<!--Start Badges-->
<section class="badges-section py-5">
	<div class="container">
		<div class="row wow fadeInLeft">
			<div class="col-lg-6">
				<div class="common-heading w-tdxt">
					<h2>Ranked as #1 <span>Web App</span> Development Company</h2>
				</div>
			</div>
		</div>
		<div class="row mt-5 wow fadeInRight">
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


		<div class="-cta-btn mt70">
			<div class="free-cta-title v-center wow fadeInUp" data-wow-delay="1s">
				<p>We <span>Promise.</span> We <span>Deliver.</span> </p>
				<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Let's Work Together
					<i class="fas fa-chevron-right fa-icon"></i>
					<span class="circle"></span>
				</a>
			</div>
		</div>
	</div>
</section>
<!--End Badges-->

<!--Start Testinomial-->
<section class="testinomial-section-app bg-none py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 wow fadeInLeft">
				<div class="common-heading text-l">
					<span>What our clients say about AppsNation.</span>
					<h2>Over 1200+ Satisfied Clients and Growing</h2>
				</div>
				<div class="review-title-ref mt40">
					<h4>Read More Reviews</h4>
				</div>
				<div class="row mt30 justify-content-center">
					<a href="#" target="blank" class="wow fadeIn col-lg-4 col-4" data-wow-delay=".2s">
						<img src="images/about/reviews-icon-1.webp" alt="review" class="img-fluid">
					</a>
					<a href="#" target="blank" class="wow fadeIn col-lg-4 col-4" data-wow-delay=".4s">
						<img src="images/about/reviews-icon-2.webp" alt="review" class="img-fluid">
					</a>
					<a href="#" target="blank" class="wow fadeIn col-lg-4 col-4" data-wow-delay=".6s">
						<img src="images/about/reviews-icon-3.webp" alt="review" class="img-fluid">
					</a>
				</div>
			</div>
			<div class="col-lg-7 wow fadeInRight">
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

<!-- Start FAQS-->
<section class="faq-section py-3 py-md-4 pt-lg-5" id="faqs">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="common-heading">
                    <h2 class="mb0 common-heading">Frequently Asked Questions</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 mt20 wow fadeInRight">
                <div class="accordion" id="accordionExample-a">
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-b">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1a" aria-expanded="true" aria-controls="collapseOne">
								How much do you charge for custom web app development services?
                            </button>
                        </h2>
                        <div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Web development, design, QA, and product deployment to your servers are all included in the cost estimate. You can reach out to us to learn more about the cost of developing a custom web application. development of web applications.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								Will you sign an NDA with me?
                            </button>
                        </h2>
                        <div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Yes. As a leading web app development firm, we place a high priority on protecting your intellectual property, which is included in our services.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
								Do I get to be a part of the web application development process?
                            </button>
                        </h2>
                        <div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Yes, you certainly can. Our web application development company, in fact, encourages it to the benefit of our customers. On our server, we create web apps and supply you with authorization codes and credentials. As a result, you'll be able to log in and see the progress of your website's continuing development.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
								What if I need some changes in the web-app after the development process is complete?
                            </button>
                        </h2>
                        <div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Our professional team members respond to your questions and provide assistance based on the modifications you want to make to your app and the services you choose.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
								I Have Only a Partial App Idea. Can You Help Me with That?
                            </button>
                        </h2>
                        <div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>We've assisted a number of people who had no idea how to establish a business. It's much better to collaborate with someone who has only a sliver of an idea. This way, we can work together to fill in the gaps in your idea and create an app.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
								Do I have to pay 3rd party cost?
                            </button>
                        </h2>
                        <div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>When it comes to web app development, don't be afraid to ask for a precise estimate. This tiny action could help you save a lot of time, money, and worries.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7a" aria-expanded="true" aria-controls="collapseOne">
								Which Industries Have You Served to Date?
                            </button>
                        </h2>
                        <div id="collapse-7a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>We served the happy clients in the following industries:</p>
									<ul class="ps-5">
										<li>Food</li>
										<li>E-Commerce</li>
										<li>Marketplace</li>
										<li>Education</li>
										<li>Healtcare</li>
										<li>Transport & Logistic</li>
										<li>Travel & Tourism</li>
										<li>Banking & Finance</li>
										<li>Real Estate</li>
										<li>On-Demand Delivery</li>
									</ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8a" aria-expanded="true" aria-controls="collapseOne">
								How Will I Be Paying You for the Services?
                            </button>
                        </h2>
                        <div id="collapse-8a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>We accept payments from our clients in these ways: PayPal, Stripe, and direct bank transfer. However, depending on the client's preferences, we can be flexible with different payment methods.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9a" aria-expanded="true" aria-controls="collapseOne">
								What Is the Payment Procedure?
                            </button>
                        </h2>
                        <div id="collapse-9a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>We follow milestones for project completion, thus the client must pay 30% upfront when the project begins, 40% when the first milestone is completed, and the final 30% at the time of delivery.</p>
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
@if($data['status'] && count($data['data']) > 0)
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading wow fadeInDown">
					<h2 class="mb30">Latest Stories</h2>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($data['data'] as $post)
			<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp">
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
	<div class="row mb-4 text-center wow fadeInLeft">
		<div class="col-12">
			<a href="https://blog.appsnation.co/category/web-portal/web-app/" class="btn-main button-arounder lnk">View More
				<i class="fas fa-chevron-right fa-icon"></i>
				<span class="circle"></span>
			</a>
		</div>
	</div>
</div>
<!--End Blogs-->

@endsection