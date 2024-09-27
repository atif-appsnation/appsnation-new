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
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 my-auto my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Augmented Reality App Development</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">Offer your consumers a real-time immersive user experience of your business via an augmented reality app developed by our expert AR app developers.</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeIn">
				<img src="images/ar-app-development/ar-app-banner-img.webp" class="img-fluid" alt="AR App Development">
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb Area-->

<!--Start About-->
<section class="service py-5 ar-intro-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 block-1 wow fadeIn">
				<div class="common-heading text-l pl25">
					<h2>Top-Notch <br><span>AR App Development Services </span></h2>
					<p><strong>Ignite your business reality with highly interactive AR apps to solve complex problems and enhance brand loyalty. </strong></p>
					<p>AppsNation is a famous company for producing best-in-industry custom Augmented Reality apps for various niches. We create AR apps across different platforms that convert and boost leads and sales with robust functionality and appealing designs. </p>
					<p>Being the AR app development industry pioneer, we have set a standard with our years of experienced and highly tech-savvy AR app developers. We strive to build the innovative dreams of others and make it possible for them to thrive among the best. We create AR apps that support every device, such as AR headsets, smart glasses, smart lenses, tablets, smartphones, and other augmented reality compatible devices to achieve customer satisfaction. Our primary focus is to flourish the AR technology into the businesses and among the audience.</p>
				</div>
			</div>
			<div class="col-lg-5 my-auto">
				<div class="image-block wow fadeIn">
					<img src="images/ar-app-development/ar-app-development.webp" alt="AR App Development" class="img-fluid no-shadow" />
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start Why Choose-->
<section class="service-block py-5 ar-choose-section">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag">
					<h2 class="text-white">Why Choose AppsNation</h2>
					<p class="text-white">We help you overcome the most challenging difficulties in AR, such as object/scene identification, occlusion, and content production and management.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-6 wow fadeIn">
				<div class="timeline-centered">
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<div class="timeline-icon">
								<img src="images/ar-app-development/free-vr-app-consultation.webp" alt="Free AR App Consultation" class="why-choose-img">
							</div>
							<div class="timeline-label">
								<h4 class="text-white">Free AR App Consultation</h4>
								<p class="text-white">With AppsNation, you can consult your way to success for free.</p>
								<br>
							</div>
						</div>
					</article>
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<div class="timeline-icon">
								<img src="images/ar-app-development/50+-vr-app-developers.webp" alt="50+ AR App Developers" class="why-choose-img">
							</div>
							<div class="timeline-label">
								<h4 class="text-white">50+ AR App Developers</h4>
								<p class="text-white">Unleash your true potential with best-in-class AR app developers across the globe.</p>
								<br>
							</div>
						</div>
					</article>
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<div class="timeline-icon">
								<img src="images/ar-app-development/flexible-hiring-models.webp" alt="Flexible Hiring Models" class="why-choose-img">
							</div>
							<div class="timeline-label">
								<h4 class="text-white">Flexible Hiring Models</h4>
								<p class="text-white">AppsNation is accessible to everyone regardless of the business size and the industry with personalized pricing packages.</p>
							</div>
						</div>
					</article>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeIn">
				<div class="timeline-centered">
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<div class="timeline-icon">
								<img src="images/ar-app-development/24-7-technical-support.webp" alt="24/7 Technical Support" class="why-choose-img">
							</div>
							<div class="timeline-label">
								<h4 class="text-white">24/7 Technical Support</h4>
								<p class="text-white">Never feel overwhelmed; our technical staff is available 24/7 to resolve any issues with the application.</p>
							</div>
						</div>
					</article>
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<div class="timeline-icon">
								<img src="images/ar-app-development/100-transparency.webp" alt="100% Transparency" class="why-choose-img">
							</div>
							<div class="timeline-label">
								<h4 class="text-white">100% Transparency</h4>
								<p class="text-white">With customer satisfaction our utmost priority, we keep ourselves transparent to the client to trust us with the app.</p>
							</div>
						</div>
					</article>
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<div class="timeline-icon">
								<img src="images/ar-app-development/3-months-free-support-after-delivery.webp" alt="3-Months Free Support After Delivery" class="why-choose-img">
							</div>
							<div class="timeline-label">
								<h4 class="text-white">3-Months Free Support After Delivery</h4>
								<p class="text-white">We offer 3-months of free support after app launch to ensure the app's integrity.</p>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Why Choose-->

<!--Start Service-->
<section class="service-block py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag">
					<h2>Custom AR App Development Company</h2>
					<p class="mb30">Own an interactive AR app for your consumers to have an interactive experience of your business and maximize customer engagement.</p>
				</div>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					<img src="images/ar-app-development/ar-apps-for-android-and-ios.webp" alt="AR Apps For Android & iOS" class="img-fluid no-shadow">
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<h4>AR Apps For Android & iOS</h4>
					<p>We are proficient in powering up Android and iOS with a stimulating technology of AR to empower businesses with a new trend of marketing and engagement.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<h4>Marker-based Augmented Reality Apps</h4>
					<p>Offer your users a simulating experience of your product/service with a marker-based AR app that transforms the 3D object into real-life material by pointing the camera to a QR code.</p>
				</div>
			</div>
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					<img src="images/ar-app-development/market-based-augumented-reality-apps.webp" alt="Marker-based Augmented Reality Apps" class="img-fluid no-shadow">
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					<img src="images/ar-app-development/markless-augmented-reality-apps.webp" alt="Markerless Augmented Reality Apps" class="img-fluid no-shadow">
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<h4>Markerless Augmented Reality Apps</h4>
					<p>Power up your user experience with a markerless AR app that works through a link or AR option within the app developed by our professional AR app developers.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<h4>E-Commerce AR Integration</h4>
					<p>Transform your e-commerce store by implementing AR technology for the consumers to experience shopping in an augmented environment.</p>
				</div>
			</div>
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					<img src="images/ar-app-development/e-commerce-ar-integration.webp" alt="E-Commerce AR Integration" class="img-fluid no-shadow">
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					<img src="images/ar-app-development/ar-game-app-development.webp" alt="AR Game App Development" class="img-fluid no-shadow">
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<h4>AR Game App Development</h4>
					<p>Be the trend like Pokémon GO did with our outstanding AR game app development services for the simplest and even the most complex game stories.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<h4>AR Support & Maintenance</h4>
					<p>We offer reliable and sustainable AR app support and maintenance services to ensure the app flawlessly delivers its purpose and functionality.</p>
				</div>
			</div>
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					<img src="images/ar-app-development/ar-support-and-maintenance.webp" alt="AR Support & Maintenance" class="img-fluid no-shadow">
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					<img src="images/ar-app-development/super-imposition-based-ar.webp" alt="Superimposition-based AR" class="img-fluid no-shadow">
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<h4>Superimposition-based AR</h4>
					<p>Leverage the object recognition in superimposition-based AR app to replace the source picture with an augmented view to help consumers make the right choice of the product.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<h4>Recognition-based AR</h4>
					<p>We create highly responsive recognition-based AR apps with faultless functionality to deliver a seamless user experience of Augmented Reality to the audience.</p>
				</div>
			</div>
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					<img src="images/ar-app-development/recognition-based-ar.webp" alt="Recognition-based AR" class="img-fluid no-shadow">
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					<img src="images/ar-app-development/projection-based-ar.webp" alt="Projection-based AR" class="img-fluid no-shadow">
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<h4>Projection-based AR</h4>
					<p>We design and build intuitive projection-based AR apps for industries to leverage and make learning, analyzing, and other processes simpler and smoother.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<h4>Location-based AR</h4>
					<p>We develop the most precise location-based AR apps to enable your business to track consumers accurately to deliver them the right offers.</p>
				</div>
			</div>
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					<img src="images/ar-app-development/location-based-ar.webp" alt="image" class="img-fluid no-shadow">
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Service-->

<!--Start Let's Work Together-->
<div class="row py-5 justify-content-center hire-developer">
	<div class="col-lg-6">
		<div class="free-cta-title v-center wow fadeIn">
			<div class="row justify-content-center">
				<div class="col-lg-8 my-auto">
					<p class="text-center text-lg-start">Hire a <span>Dedicated Developer.</span> </p>
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

<!--Start Games-->
<section class="service-block py-5 ar-game-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-6 wow fadeIn my-auto">
				<img src="images/ar-app-development/ar-game-development.webp" alt="AR Game Development" class="img-fluid">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 mt-4 mt-sm-4 mt-md-4 mt-lg-0">
				<div class="row wow fadeIn">
					<div class="ptag text-center">
					    <h2 class="text-white pt-3">AR Games Development Services</h2>
					</div>
				</div>
				<div class="row mt-3 wow fadeIn">
                    <div class="col-md-4 game-development-col">
                        <img src="images/ar-app-development/ar-action.webp" alt="AR Action" class="img-fluid">
                        <p class="center-text">AR Action<p>
                    </div>

                    <div class="col-md-4 mt-3 mt-md-0 game-development-col">
                        <img src="images/ar-app-development/ar-fps.webp" alt="AR FPS" class="img-fluid">
                        <p class="center-text">AR FPS<p>
                    </div>

                    <div class="col-md-4 mt-3 mt-md-0 game-development-col">
                        <img src="images/ar-app-development/ar-adventure.webp" alt="AR Adventure" class="img-fluid">
                        <p class="center-text">AR Adventure<p>
                    </div>

                    <div class="col-md-4 mt-3 game-development-col">
                        <img src="images/ar-app-development/ar-puzzle.webp" alt="AR Puzzle" class="img-fluid">
                        <p class="center-text">AR Puzzle<p>
                    </div>

                    <div class="col-md-4 mt-3 game-development-col">
                        <img src="images/ar-app-development/ar-sports.webp" alt="AR Sports" class="img-fluid">
                        <p class="center-text">AR Sports<p>
                    </div>

                    <div class="col-md-4 mt-3 game-development-col">
                        <img src="images/ar-app-development/ar-arcade.webp" alt="AR Arcade" class="img-fluid">
                        <p class="center-text">AR Arcade<p>
                    </div>

                    <div class="col-md-4 mt-3 game-development-col">
                        <img src="images/ar-app-development/ar-simulation.webp" alt="AR Simulation" class="img-fluid">
                        <p class="center-text">AR Simulation<p>
                    </div>

                    <div class="col-md-4 mt-3 game-development-col">
                        <img src="images/ar-app-development/ar-brain.webp" alt="AR Brain" class="img-fluid">
                        <p class="center-text">AR Brain<p>
                    </div>

                    <div class="col-md-4 mt-3 game-development-col">
                        <img src="images/ar-app-development/ar-combat.webp" alt="AR Combat" class="img-fluid">
                        <p class="center-text">AR Combat<p>
                    </div>
                </div>
			</div>
		</div>
	</div>
</section>
<!--End Games-->

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
				<h2>Creative AR App Development Agency</h2>
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

<!--Start Process-->
<section class="service-block py-5 ar-process-section">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag">
					<h2 class="text-white">Our VR App Development Process</h2>
					<p class="text-white">AppsNation guarantees that our AR app development process is fluid, resulting in an application being developed and delivered on time.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-6 wow fadeIn">
				<div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
					<div class="vertical-timeline-item vertical-timeline-element">
						<div>
							<span class="vertical-timeline-element-icon bounce-in">
								<div class="numbers">
									<p class="number text-white">1</p>
								</div>
							</span>
							<div class="vertical-timeline-element-content bounce-in">
								<h4 class="title text-white">Project Analysis of Requirements</h4>
								<p class="description text-white">We assist you in choosing the most appropriate AR application with pertinent functionalities for your business by extensively studying your industry and rivals to give you a result-driven approach. Finally, we present you with a business document containing all the project information.</p>
							</div>
						</div>
					</div>
					<div class="vertical-timeline-item vertical-timeline-element">
						<div>
							<span class="vertical-timeline-element-icon bounce-in">
								<div class="numbers">
									<p class="number text-white">2</p>
								</div>
							</span>
							<div class="vertical-timeline-element-content bounce-in">
								<h4 class="title text-white">Wireframing & Designing</h4>
								<p class="description text-white">We understand the art of augmented reality and have a track record of developing successful apps that combine realistic experience design, high-quality 3D presentation, and fluid user interactions. Our UI/UX designers can create high-quality AR apps that accurately portray virtual components in a real-world setting.</p>
							</div>
						</div>
					</div>
					<div class="vertical-timeline-item vertical-timeline-element">
						<div>
							<span class="vertical-timeline-element-icon bounce-in">
								<div class="numbers">
									<p class="number text-white">3</p>
								</div>
							</span>
							<div class="vertical-timeline-element-content bounce-in">
								<h4 class="title text-white">App Development</h4>
								<p class="description text-white">Our expert team of AR app developers can help you achieve your business goals. We create highly scalable, functional, and well-optimized AR apps with experienced AR app developers from many sectors that operate remarkably well on all devices and platforms.=</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 wow fadeIn">
				<div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
					<div class="vertical-timeline-item vertical-timeline-element">
						<div>
							<span class="vertical-timeline-element-icon bounce-in">
								<div class="numbers">
									<p class="number text-white">4</p>
								</div>
							</span>
							<div class="vertical-timeline-element-content bounce-in">
								<h4 class="title text-white">App Testing</h4>
								<p class="description text-white">We test the AR app using the most recent trends and methodology to verify that it is well-optimized and performs adequately across many platforms and devices. With extensive app testing, our superior quality assurance team ensures the integrity of the AR app, including its augmented environment.</p>
							</div>
						</div>
					</div>
					<div class="vertical-timeline-item vertical-timeline-element">
						<div>
							<span class="vertical-timeline-element-icon bounce-in">
								<div class="numbers">
									<p class="number text-white">5</p>
								</div>
							</span>
							<div class="vertical-timeline-element-content bounce-in">
								<h4 class="title text-white">App Deployment</h4>
								<p class="description text-white">Deploying your custom AR app on the right platform while adhering to the platform's stringent requirements for a successful launch is a critical component of our premium AR app development services. For marketplace publishing, our team creates the necessary paperwork, descriptions, and screenshots.</p>
							</div>
						</div>
					</div>
					<div class="vertical-timeline-item vertical-timeline-element">
						<div>
							<span class="vertical-timeline-element-icon bounce-in">
								<div class="numbers">
									<p class="number text-white">6</p>
								</div>
							</span>
							<div class="vertical-timeline-element-content bounce-in">
								<h4 class="title text-white">Post-launch Support and Maintenance</h4>
								<p class="description text-white">Our commitment extends beyond deployment as we provide ongoing support and maintenance services. We address any issues, implement updates, and enhance the app's performance based on user feedback and emerging technologies. You can rely on us to ensure the continued success and optimization of your AR application.</p>
							</div>
						</div>
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
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag">
					<h2>Technology Stack</h2>
					<p>With great technology comes a great tool stack. Therefore, we serve you with the most advanced technology and tools for VR app development.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-5 wow fadeIn">
				<ul class="nav nav-tabs android-tech-tabs">
					@foreach($techstack as $k=>$item)

					@if($k==0)
					<li class="active">
						<a data-bs-toggle="tab" href="#a{{$item['id']}}" class="boximageicon-seo zoomed active">
							<img src="uploads/{{$item['image']}}" alt="">
						</a>
					</li>

					@else

					<li>
						<a data-bs-toggle="tab" href="#a{{$item['id']}}" class="boximageicon-seo zoomed">
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

			<div class="col-md-7 my-auto mt-5 mt-md-auto wow fadeIn">
				<div class="tab-content tab-body">
					@foreach($techstack as $k=>$items)
					@if($k==0)
					<div id="a{{$items['id']}}" class="tab-pane active">
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
<section class="technologies certificates py-5">
	<div class="container">
		<div class="row fadeIn">
			<div class="col-12">
				<div class="common-heading text-center">
					<h2 class="text-white">We Partner with the <span>World's technology</span> leaders</h2>
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
					<h2 class="text-white">Ranked as #1 <span>AR App</span> Development Company</h2>
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

<!--Start Testinomial-->
<section class="testinomial-section-app py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading text-center">
					<span>What our clients say about AppsNation.</span>
					<h2 class="text-white">Over 1200+ Satisfied Clients and Growing</h2>
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

<!--Start Let's Work Together-->
<div class="row py-5 justify-content-center hire-developer">
	<div class="col-lg-6">
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

<!-- Start FAQS-->
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
								What is the difference between AR and VR?
                            </button>
                        </h2>
                        <div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>The user can be transported into another reality using virtual reality. Take us somewhere else, in other words. VR closes out the area and relocates our presence elsewhere by employing closed visors or goggles.</p>
									<p class="pt-2">On the other hand, augmented reality enhances our current reality by adding something to it. It does not lead us anyplace. It simply "enhances" our current state of presence, often with clear visors.</p>
									<p class="pt-2">The same thing unites augmented and virtual reality: they are both immersive experiences. They both have the incredible ability to alter our perception of the world. The sense of our presence, on the other hand, varies.</p>
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
                                    <p>AR uses phones and tablets to supplement reality, whereas VR uses headgear to create a new universe. AR is better for discrete, technical concerns, but VR is better for comprehensive, soft-skill information. Both AR training and VR training provide an excellent long-term ROI.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
								How much does a AR app Cost to Develop?
                            </button>
                        </h2>
                        <div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
									<p>The cost of developing an AR app is mostly determined by the demands; project complexity, modules, reporting, back-end system, hardware setup, integration, etc. After you know precisely what you want, you can estimate how much it will cost.</p>
									<p class="pt-2">The cost of developing a smartphone AR application, for example, might range from $5,000 to $100,000.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
								How much does it cost to build a custom AR app?
                            </button>
                        </h2>
                        <div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>The cost of developing an augmented reality application will be determined by your business concept and the technology, talents, and time required to make it a reality.</p>
									<p class="pt-2">These considerations have a significant influence on the expenses of developing an AR app:</p>
									<ul class="ps-5">
										<li>The nature of your augmented reality app: Marker-based or Markerless</li>
										<li>AR app complexity </li>
										<li>Software permits</li>
									</ul>
									<p class="pt-2">The development cost might range from a few thousand dollars for a simple AR software to $300,000 or more for a feature-rich, tailored AR solution.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
								How long does it take to make AR app?
                            </button>
                        </h2>
                        <div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>AR app designing and programming can take 1-8 weeks or more depending on the scope of the virtual environment, features, models, purpose, amount of digital assets, and the number of interactions.</p>
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
                                    <p>To develop your unique AR apps, we employ the following technological stack:</p>
									<p class="pt-2">Framework</p>
									<ul class="ps-5">
										<li>Vuforia</li>
										<li>Android Studio</li>
										<li>Unity 3D</li>
										<li>ARKit</li>
										<li>ARCore</li>
									</ul>
									<p class="pt-2">Language</p>
									<ul class="ps-5">
										<li>Java</li>
										<li>JavaScript</li>
										<li>C+</li>
									</ul>
									<p class="pt-2">Database</p>
									<ul class="ps-5">
										<li>SQLite</li>
										<li>MySQL</li>
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
                                    <p>When it comes to mobile AR apps, we constantly consider special checklists for testing, such as the appropriate operation of multiple screen orientations, Internet connection and interruptions, and varying degrees of memory and battery consumption. Let us go through the critical features of AR app testing:</p>
									<ul class="ps-5">
										<li>A great deal of try and error</li>
										<li>Session recording - UI and other automation testing tools</li>
										<li>Putting the app through its paces in various situations</li>
										<li>Put a variety of devices through their paces.</li>
										<li>Tools for gathering user feedback</li>
									</ul>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8a" aria-expanded="true" aria-controls="collapseOne">
								Will we sign an NDA to keep my AR software/application idea confidential?
                            </button>
                        </h2>
                        <div id="collapse-8a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>A Non-Disclosure Agreement (NDA) is a legally enforceable document that we utilize to ensure that your ideas are not duplicated or leaked to rivals while working on various projects. As a result, you should be less concerned about the security of your AR app.</p>
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