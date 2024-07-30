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
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">2D & 3D FLOOR PLAN SERVICES</h1>
					<!-- <p class="mt20 text-white" data-wow-delay=".4s">Leverage the most used mobile platform – Android – to expand your business’s boundaries with our exceptional android app development services.</p> --> <br>
					 <a data-bs-toggle="modal" data-bs-target="#leadModal" class="niwax-btn wow fadeIn mt-3" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">Get Your Free Consultation <i class="fas fa-chevron-right fa-ani" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeInRight">
				<img src="images/services/2d&3d-floor-plan-services/twod-threed-floor-plan-banner-img.webp" class="img-fluid" alt="Android App Development">
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb-->

<!--Start About-->
<section class="service py-5">
	<div class=" container">
		<div class="row">
			<div class="col-lg-5">
				<div class="image-block wow fadeInLeft">
					<img src="images/android-app-development/android-app-development.webp" alt="Android App Development" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-7 block-1 wow fadeInRight my-auto">
				<div class="common-heading text-l pl25">
					<!-- <span>Overview</span> -->
					<h2>Enhance Your Space with Our<br> <span class="flup-theme">Custom 2D & 3D Floor Plan Services</span></h2>
					<p><strong>Get the floor plan you deserve—clear, precise, and tailored to your specific needs. Our designs are functional, aesthetically pleasing, and highly detailed.</strong></p>
					<p>Did you know? Accurate floor plans are essential for any successful architectural or interior design project. We leverage cutting-edge technology and top talent to deliver the best in 2D and 3D floor planning. Our team, akin to design wizards, strives to bring your vision to life with innovative and unique layouts.</p>
					<p>We are a data-driven design firm that uses analytics and insights to craft plans that perfectly align with your project goals. Whether for residential or commercial spaces, we help you optimize your environment. Our plans are visually compelling and ensure flawless execution in real life.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start Service-->
<section class="service-section-app py-5 dark-bg2">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 wow fadeInLeft">
				<div class="common-heading ptag">
					<h2 class="text-center" >Showcase <span> 2D & 3D </span> Floor Plan Services</h2>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeInLeft">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-text-div">
						<p>3D floor plans, 3D home designs, real estate floor plans, and rendering services go to the heart of architectural layouts. Horizontal and vertical spaces are precisely projected in 3D design for 360-degree development, leaving no crevice uncovered.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeInLeft">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-text-div">
						<p>Virtual Building Studio is an AEC outsourcing firm based in India that provides clients with high-quality 3D floor plan services. We have a track record of successfully completing large-scale architectural floor plan projects.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeInLeft">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-text-div">
						<p>Each 3D floor plan project benefits from our experienced team's combined skill set of software, creativity, and aesthetics understanding. Our success is based on "attention to detail."</p>
					</div>
				</div>
			</div>
			<div class="row mt-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <a href="https://futurealiti.com/uploads/pdf/Real-Estate-Profile-Futurealiti.pdf" target="_blank" class="niwax-btn wow fadeIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">Download Real Estate Profile <i class="fas fa-chevron-right fa-ani" aria-hidden="true"></i></a>
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
					<span>Professional Designer</span>
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
				<h2>Expert 2D & 3D Floor Plan Services</h2>
				<p class="py-3">We provide 2D and 3D floor plans to help visualize and optimize your space efficiently.</p>
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

<!--Start Why Choose-->
<section class="why-choose bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeInLeft">
					<h2 class="text-white">Benefits of <span> 2D & 3D Floor Plan </span> Services</span></h2>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeInRight">
					<p class="text-white">We offer 2D and 3D floor plans to help visualize and optimize your space, ensuring functionality and aesthetic appeal. Our plans provide clear project representations.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeInLeft h-100">
					<div class="timeline-year">
						<div class="free-mobile-app-consultation"></div>
					</div>
					<h3 class="title">ACHIEVE PERFECTION</h3>
					<p class="description">2D and 3D floor plan services help in achieving perfection in architectural and interior design projects by providing precise and detailed visual representations. These plans ensure that every aspect of the design is carefully considered and accurately depicted, allowing for precise measurements and clear communication of ideas.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeInLeft h-100">
					<div class="timeline-year">
						<div class="expert-android-developers"></div>
					</div>
					<h3 class="title">VERSATILITY</h3>
					<p class="description">2D and 3D floor plans offer versatility, allowing designers to experiment with different layouts and styles. This flexibility makes it easy to explore various design options, adapt to client preferences, and make changes without the need for physical alterations. It also helps in visualizing different configurations and optimizing space usage.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeInLeft h-100">
					<div class="timeline-year">
						<div class="flexible-hiring-models"></div>
					</div>
					<h3 class="title">BENEFICIAL SPACES</h3>
					<p class="description">Utilizing 2D and 3D floor plan services leads to the creation of beneficial spaces that are functional and aesthetically pleasing. These plans enable designers to plan layouts that maximize space efficiency and cater to the specific needs of the users, ultimately enhancing the overall quality and usability of the environment.</p>
				</div>
			</div>
			
		</div>
	</div>
</section>
<!--Start Why Choose-->

<!--Start New Project-->
<section class="service-block py-5">
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

<!--Start Process-->
<section class="process-block bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeInLeft">
					<h2>Our <span> 2D & 3D Floor Plan</span> Development Process</h2>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeInRight">
					<p>We offer a streamlined and efficient process for developing 2D and 3D floor plans, ensuring a result-driven approach that meets our clients' specific needs and preferences.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeInLeft h-100">
					<p class="timeline-year">01</p>
					<h3 class="title">Requirement Analysis</h3>
					<p class="description">Understanding your space and project goals is crucial. We begin by assessing your needs, including layout preferences, functional requirements, and aesthetic desires. This phase involves gathering detailed information to ensure we capture your vision accurately.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeInLeft h-100">
					<p class="timeline-year">02</p>
					<h3 class="title">Design Strategy</h3>
					<p class="description">Based on the analysis, we develop a design strategy tailored to your project. This includes selecting the appropriate tools and techniques for creating 2D and 3D floor plans. Our goal is to provide a comprehensive representation that meets your specifications.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeInLeft h-100">
					<p class="timeline-year">03</p>
					<h3 class="title">Conceptualization & Drafting</h3>
					<p class="description">Our design team creates initial drafts, showcasing different layout options and design elements. This stage allows for experimentation with space utilization and visual styles, ensuring all aspects align with your expectations.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeInRight h-100">
					<p class="timeline-year">04</p>
					<h3 class="title">Review & Feedback</h3>
					<p class="description">We present the draft designs to you for review. This collaborative phase involves discussing the proposed layouts, making adjustments based on your feedback, and refining the plans to better suit your needs.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeInRight h-100">
					<p class="timeline-year">05</p>
					<h3 class="title">Finalization</h3>
					<p class="description">After incorporating your input, we finalize the 2D and 3D floor plans. This includes detailing every aspect of the design, from room dimensions to interior elements, ensuring accuracy and completeness.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeInRight h-100">
					<p class="timeline-year">06</p>
					<h3 class="title">Delivery & Support</h3>
					<p class="description">The completed floor plans are delivered to you in your preferred format. We also provide ongoing support to address any questions or adjustments needed, ensuring the plans are ready for implementation.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Process-->

<section class="floor-plan py-3 py-md-4 pt-lg-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-12 wow fadeInLeft my-auto" style="visibility: visible; animation-name: fadeInLeft;">
				<p>One of the first tasks in the construction, remodeling, and interior design of a home is to create a rendered floor plan. A 3D graphic of the property layout gives a good idea of the area, convenience, and functionality. Another method of visualizing rooms and furniture, as well as the decor of any house, is to use 3D floor plan drawings.</p>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-12 wow fadeInRight v-center pt-3 pt-sm-3 pt-md-3 pt-lg-0" style="visibility: visible; animation-name: fadeInRight;">
				<img src="images/services/2d&3d-floor-plan-services/threed-floor-plan-drawing.webp" alt="" height="100%" width="100%">
			</div>
		</div>

		<div class="row pt-3">
			<div class="col-lg-6 col-md-6 col-sm-12 col-12 wow fadeInLeft v-center" style="visibility: visible; animation-name: fadeInLeft;">
				<img src="images/services/2d&3d-floor-plan-services/threed-floor-plan-layout.webp" alt="" height="100%" width="100%">
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-12 wow fadeInRight my-auto pt-3 pt-sm-3 pt-md-3 pt-lg-0" style="visibility: visible; animation-name: fadeInRight;">
				<p>Our business floor designs service covers 3D floor plans for restaurants, offices, mansions, cafes, and hospitals. Doors, stairwells, windows, walls, elevators, columns, and fittings are common features. By including furniture, you can demonstrate the magnitude of a room and how to correctly design it. While looking at the 3D floor plan layout, you or your customers can have a sense of being in that same room.</p>
			</div>
		</div>
	</div>
</section>

<section class="floor-plan-service service-section-app py-3 py-md-4 pt-lg-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10 col-md-10 col-sm-10 col-12 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
				<div class="common-heading">
					<h2 class="text-center"> Our <span>3D House Plans</span> Services</h2>
					<p class="mt10 py-3 py-md-4 pt-lg-5 text-center">People find it difficult to comprehend and imagine a location from sketches, thus floor plans with 3D effects are a solution to this problem, displaying the whole property layout in a simple and visually appealing manner. Applet 3D gives you a stunning overview of your requirements and a greater knowledge of the scale, texture, and color of a space, as well as its possibilities. It's a fantastic opportunity to get a true sense of the entire home or just the ground level 3D design.</p>
				</div>
			</div>

			<div class="col-lg-12 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
				<iframe width="100%" height="515" src="https://www.youtube.com/embed/_RSCkfc4g7E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
			</div>

			<div class="col-lg-10 col-md-10 col-sm-10 col-12 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
				<p class="mt10 py-3 py-md-4 pt-lg-5 text-center text-white">Before making large project investments, 3D floor plan design services can detect any design faults. Without an interactive 3D floor plan, clients and buyers will have a tough time determining the property's size and exact furniture and décor arrangement. Bring your client's vision to life with realistic and detailed 3D house plans that are tailored to their specific requirements and lifestyles. Use our 3D rendering services to create a floor plan. Get a quote for your project by filling out the form.</p>
			</div>
		</div>
	</div>
</section>
<section class="floor-plan-configuration py-3 py-md-4 pt-lg-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="common-heading ptag wow fadeInLeft">
                    <h2 class="text-center">Furniture Configuration</h2>
                </div>
                <div class="image-spliter wow fadeInRight">
                    <div class="mover"></div>
                    <img class="img-left" src="images/services/2d&3d-floor-plan-services/download.png" alt="3d Floor Plan Color">
                    <!-- <img class="img-right" src="images/services/2d&3d-floor-plan-services/3d-floor-plan-color-1.webp" alt="3d Floor Plan Color"> -->
                </div>
            </div>
        </div>
    </div>
</section>


<section>
	<img src="images/services/2d&3d-floor-plan-services/2d-3d-floor-plan-center-banner.webp" alt="2D 3D Floor Plan Center Image">
</section>

<!--Start Tech-->
<div class="techonology-used- py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeInLeft">
					<h2>Technology Stack</h2>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeInRight">
					<p class="mb30">We create mobile apps with scalable and tested technology stack to deliver apps par excellence.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-5 wow fadeInLeft">
				<ul class="nav nav-tabs android-tech-tabs mt-5">
					@foreach($techstack as $k=>$item)

					@if($k==0)
					<li class="active">
						<a data-bs-toggle="tab" href="#a{{$item['id']}}" class="boximageicon-seo zoomed  stack-hov">
							<img src="uploads/{{$item['image']}}" alt="">
						</a>
					</li>

					@else

					<li>
						<a data-bs-toggle="tab" href="#a{{$item['id']}}" class="boximageicon-seo zoomed stack-hov">
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
</div>
<!--End Tech-->

<!-- Start Technologies -->
<section class="technologies certificates py-5">
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
					<h2>Ranked as #1 <span>Android App</span> Development Company</h2>
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
<!-- <section class="faq-section py-3 py-md-4 pt-lg-5" id="faqs">
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
								Will we sign an NDA to keep my Android app idea confidential?
                            </button>
                        </h2>
                        <div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>A Non-Disclosure Agreement (NDA) is a legal document that we employ when working on various projects to ensure that your ideas are not duplicated or leaked to rivals.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								How do you allocate the resources for my app development in Android?
                            </button>
                        </h2>
                        <div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>For us, resource allocation is both an art and a science. Therefore, we thoroughly research your company and its competitors, including the target audience and their psychology, to provide an app that efficiently performs its objective.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
								Which tools and technologies do you use?
                            </button>
                        </h2>
                        <div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>AppsNation is equipped with developers that use the high-end latest technologies and tools to foster your ideal android application.</p>
									<p class="pt-2">Mobile Frontend</p>
									<ul class="ps-5">
										<li>Native (Java/Kotlin)</li>
										<li>Xamarin Native C</li>
										<li>Xamarin Forms for Android</li>
										<li>Cordova/PhoneGap</li>
										<li>Ionic</li>
										<li>React Native</li>
									</ul>
									<p class="pt-2">Operating System</p>
									<ul class="ps-5">
										<li>Android OS</li>
									</ul>
									<p class="pt-2">SDKs/Tools/Framework</p>
									<ul class="ps-5">
										<li>Android Studio</li>
										<li>Google Fit SDK</li>
										<li>Xamarin Forms for Android</li>
										<li>OpenGL</li>
										<li>ARCorec</li>
										<li>Android Auto</li>
									</ul>
									<p class="pt-2">Platforms</p>
									<ul class="ps-5">
										<li>Amazon Web</li>
										<li>Services (AWS)</li>
										<li>Microsoft Azure</li>
										<li>Google Cloud</li>
										<li>Platform (GCP)</li>
										<li>Firebase</li>
										<li>AppCenter for CI/CD</li>
										<li>Kubernetes</li>
									</ul>
									<p class="pt-2">Others</p>
									<ul class="ps-5">
										<li>Google Assistant</li>
										<li>Google VR</li>
										<li>Machine Language (ML Kit)</li>
										<li>Cordova/PhoneGap</li>
										<li>Google Cloud</li>
										<li>Google Analytics</li>
									</ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
								Will you assist me to upload my Android app on the Play Store?
                            </button>
                        </h2>
                        <div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Submitting your android app on Google Play Store is a vital part of our inclusive android app development services. AppsNation has years of experience launching android apps on the Play Store, sufficiently following the guidelines.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
								Will I be getting any support after project completion?
                            </button>
                        </h2>
                        <div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Our top-notch mobile app development services include a 3-months free support and maintenance program to guarantee a successful app journey by minimizing the glitches based on user feedback.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
								How much does it cost to make an Android App?
                            </button>
                        </h2>
                        <div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>The pricing is influenced by various factors, including the complexity of the android app development. Typically, firms estimate the number of APIs and screens in an application and price accordingly. On the other hand, a standard app would cost you $5,000 or more.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7a" aria-expanded="true" aria-controls="collapseOne">
								Why your company might need Android application services?
                            </button>
                        </h2>
                        <div id="collapse-7a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Most businesses like the Android app because it allows them to reach many customers by expanding dedicated applications and growing their business. Android app development may help a company reach out to more people, increase revenue, boost brand image, and build a loyal client base.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8a" aria-expanded="true" aria-controls="collapseOne">
								What should I pay attention to while looking for Android application developers?
                            </button>
                        </h2>
                        <div id="collapse-8a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Hiring top Android developers will assist you in developing a great app that will stand out from the crowd and earn a sizable profit. Here's how to find one for yourself.</p>
									<ul class="ps-5">
										<li>Developers must be conversant with fundamental programming languages such as syntax and basics, frameworks, multithreading and concurrency, functional programming, and generics.</li>
										<li>To accelerate development processes, your developers will need to employ an SDK. Ascertain that they are familiar with Android SDKs.</li>
										<li>Android Studio knowledge is required.</li>
										<li>The developer must be well-versed in all APIs because they link applications to third-party services or apps.</li>
										<li>Developers must be familiar with databases to manage significant volumes of data and interact with a database located outside of the smartphone.</li>
										<li>Developers must comprehend the reasoning behind your company's actions. It will assist them in identifying key features, planning the development process, and delivering a mobile app solution that completely fulfils business needs.</li>
									</ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9a" aria-expanded="true" aria-controls="collapseOne">
								Will you assist me to upload my Android app on the Play Store?
                            </button>
                        </h2>
                        <div id="collapse-9a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>We approach an agile android app development process to ease our clients for the smoothest interaction with us that includes;</p>
									<ul class="ps-5">
										<li>Analysis of Requirements.</li>
										<li>App Development Strategies.</li>
										<li>Wireframing & Designing.</li>
										<li>Development.</li>
										<li>Testing.</li>
										<li>Deployment.</li>
									</ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10a" aria-expanded="true" aria-controls="collapseOne">
								How AppsNation meet the current trends in native Android app development?
                            </button>
                        </h2>
                        <div id="collapse-10a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>AppsNation is equipped with a team of extremely tech-savvy individuals ready to learn and grow. As a result, self-study is what they do in their spare time. Furthermore, they are very engaged and driven in the subject; as a result, they crave evolution and keep up with the current developments in native Android app development.</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-11a" aria-expanded="true" aria-controls="collapseOne">
								Will you assist me to upload my Android app on the Play Store?
                            </button>
                        </h2>
                        <div id="collapse-11a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>AppsNation is equipped with top-rated android developers having years of experience in developing android developers for various industries. We have them on board to make the most out of them for your ideal android app. Besides, we offer our clients undeniable benefits such as;</p>
									<ul class="ps-5">
										<li>Free Consultation.</li>
										<li>50+ Expert Android Developers.</li>
										<li>Flexible Hiring Models.</li>
										<li>Technical Support.</li>
										<li>100% Transparency.</li>
										<li>3-Month Support After Delivery.</li>
									</ul>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-12a" aria-expanded="true" aria-controls="collapseOne">
								How can I hire Android app developers from AppsNation?
                            </button>
                        </h2>
                        <div id="collapse-12a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>We are easy to reach, just a click away. Tap on chat now or request a free quote by filling up the form mentioning your requirements for your bespoke Android app. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
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
							<a href="{{ $post['guid'] }}"><i class="fas fa-tag"></i> Appsnation</a>
						</span>
						<span class="posted-on-">
							<a href="{{ $post['guid'] }}"><i class="fas fa-clock"></i> {{ date('M d, Y', strtotime($post['post_date'])) }}</a>
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
			<a href="https://blog.appsnation.co/category/android-app/" class="btn-main button-arounder lnk">View More
				<i class="fas fa-chevron-right fa-icon"></i>
				<span class="circle"></span>
			</a>
		</div>
	</div>
</div>
<!--End Blogs-->

@endsection