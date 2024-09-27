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
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">BEST DIGITAL MARKETING COMPANY</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">To make money online, you need to know what kind of Digital marketing services you need. You may think you have all the tools you need but that isn't true. You need a digital marketing agency. To make money online, you need to know what kind of services you need. You may think you have all the tools you need but that isn't true. You need a digital marketing agency, Like AppsNation. AppsNation is one of the leading <b> digital marketing agencies in California. </b></p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeIn">
				<img src="images/services/digital-marketing/digital-marketing-banner-img.webp" class="img-fluid" alt="Android App Development">
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
				<div class="image-block wow fadeIn">
					<img src="images/services/digital-marketing/digital-marketing-services.webp" alt="Android App Development" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-7 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<!-- <span>Overview</span> -->
					<h2>Scale-Up With Our<br> <span class="flup-theme">Digital Marketing Services</span></h2>
					<p>Unlock the full potential of your online presence with our digital marketing services. Our experienced team specializes in SEO, PPC, content marketing, and social media strategy to drive targeted traffic and increase your brand's visibility. <br> <br> Whether you're looking to optimize your website, engage with your audience, or improve conversion rates, our experts are here to help. Don't miss the opportunity to grow your business in the digital space. </p> <br>
					<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Hire Now
						<i class="fas fa-chevron-right fa-icon"></i>
						<span class="circle"></span>
					</a>
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
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag">
					<h2>Our <span>Digital Marketing</span> Services</h2>
					<p>We promise you top-notch service as we have the best-in-class web and mobile app development team. With a grade of pure professionals, project delivery is always on schedule with strict adherence to coding standards.</p>
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
						<h4>Website Development</h4>
					</div>
					<div class="services-text-div">
						<p>Establish a strong online presence with professional website development. Our team creates visually appealing and user-friendly websites that reflect your brand identity and engage visitors, ensuring a seamless user experience.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-web-img"></div>
					</div>
					<div class="service-heading">
						<h4>Email Marketing</h4>
					</div>
					<div class="services-text-div">
						<p>Stay connected with your customers through email marketing. We design personalized email campaigns that engage your audience, promote your products or services, and encourage loyalty and repeat business.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-app-porting-img"></div>
					</div>
					<div class="service-heading">
						<h4>SEO (Search Engine Optimization)</h4>
					</div>
					<div class="services-text-div">
						<p>Enhance your visibility on search engines with SEO. By optimizing your website content and structure, we help you rank higher in search results, driving more organic traffic and increasing your online reach.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-app-testing-img"></div>
					</div>
					<div class="service-heading">
						<h4>Search Engine Marketing</h4>
					</div>
					<div class="services-text-div">
						<p>With the most experienced Quality Assurance experts in the industry, we test your android app thoroughly with manual and automated testing to ensure a seamless user experience.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-app-consultation-img"></div>
					</div>
					<div class="service-heading">
						<h4>SMM (Social Media Marketing)</h4>
					</div>
					<div class="services-text-div">
						<p>Connect with your audience through social media marketing. We create engaging content and strategic campaigns to build brand awareness, foster community engagement, and drive traffic to your website.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-app-dev-consultation-img"></div>
					</div>
					<div class="service-heading">
						<h4>CRO (Conversion Rate Optimization)</h4>
					</div>
					<div class="services-text-div">
						<p>Our android app development services are based primarily on research and data analysis. Therefore, we offer you result-driven strategies for a custom android application.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="custom-android-app-dev-img"></div>
					</div>
					<div class="service-heading">
						<h4>Content Writing</h4>
					</div>
					<div class="services-text-div">
						<p>High-quality content is key to communicating your brand message. Our skilled writers craft engaging and informative content that resonates with your audience, supports SEO, and establishes your authority in the industry.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-multi-platform-img"></div>
					</div>
					<div class="service-heading">
						<h4>Marketing Automation</h4>
					</div>
					<div class="services-text-div">
						<p>Simplify and streamline your marketing efforts with automation. We implement tools that automate repetitive tasks, allowing you to focus on strategy and delivering more personalized customer experiences.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-watch-img"></div>
					</div>
					<div class="service-heading">
						<h4>PPC (Pay Per Click)</h4>
					</div>
					<div class="services-text-div">
						<p>Quickly drive targeted traffic to your site with PPC advertising. Our campaigns are designed to reach your ideal customers, maximize conversions, and provide a measurable return on investment.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-watch-img"></div>
					</div>
					<div class="service-heading">
						<h4>Content Marketing</h4>
					</div>
					<div class="services-text-div">
						<p>Build trust and authority with content marketing. We develop and distribute valuable content that educates, entertains, and informs your audience, fostering engagement and driving profitable customer action.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-watch-img"></div>
					</div>
					<div class="service-heading">
						<h4>Copywriting</h4>
					</div>
					<div class="services-text-div">
						<p>Effective copywriting turns prospects into customers. We create persuasive and compelling copy for ads, websites, and other marketing materials, helping you communicate your value proposition clearly and effectively.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-watch-img"></div>
					</div>
					<div class="service-heading">
						<h4>Influencer Marketing</h4>
					</div>
					<div class="services-text-div">
						<p> Leverage the power of influencers to reach new audiences. We connect your brand with influencers who resonate with your target market, enhancing brand credibility and driving engagement.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-watch-img"></div>
					</div>
					<div class="service-heading">
						<h4>Affiliate Marketing</h4>
					</div>
					<div class="services-text-div">
						<p>Expand your reach and boost sales through affiliate marketing. We set up and manage partnerships with affiliates who promote your products or services, providing a cost-effective way to increase revenue.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Service-->

<!--Start Service-->
<section class="py-5 dark-bg2">
	<div class="container">
        <div class="card wow fadeIn">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="images/services/digital-marketing/seo-img.webp" alt="SEO" class="img-fluid">
                    </div>
                    <div class="col-lg-6 my-5">
                        <!-- <div class="common-heading text-l"> -->
                            <h3 class="common-heading">SEO (Search Engine Optimization)</h3>
                            <p class="pt-3">A good SEO strategy will make sure that your site is found by as many people as possible. By having a good SEO strategy, you will be able to generate leads and increase your sales. For Good SEO you need SEO experts who can brings your website on Google's top rankings like our Experts do.</p>
                            <div class="hire-button mt-3">
                                <a data-bs-toggle="modal" data-bs-target="#leadModal" class="btn-main button-arounder lnk" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">Get Your Free Consultation</a>
                            </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4 wow fadeIn">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-lg-6 my-auto px-4 ps-lg-5 py-3 py-md-3 py-lg-3 py-xl-0">
                        <h3 class="common-heading">Content Marketing</h3>
                        <p class="pt-3">Many companies are using content marketing to promote their products and services. Content marketing gives them the chance to tell their story and create a relationship with their audience. If you want to promote your business, you can use content marketing. Content marketing is a great strategy. Content marketing can help you to reach out to a wide audience.</p>
                        <div class="hire-button mt-3">
                            <a data-bs-toggle="modal" data-bs-target="#leadModal" class="btn-main button-arounder lnk" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">Get Your Free Consultation</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="images/services/digital-marketing/content-writing-img.webp" alt="Content Marketing" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4 wow fadeIn">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <img src="images/services/digital-marketing/smm-img.webp" alt="Social Media Marketing" class="img-fluid">
                    </div>
                    <div class="col-lg-6 my-auto px-4 ps-lg-5 py-3 py-md-3 py-lg-3 py-xl-0">
                        <h3 class="common-heading">SMM (Social Media Marketing)</h3>
                        <p class="pt-3">Social media marketing is a very popular form of marketing today. Using the Internet and social media is a great way to generate traffic to your website. It also allows you to interact directly with your customers. AppsNation has the best and most experienced Social media marketer who can help your brand in order to get awareness.</p>
                        <div class="hire-button mt-3">
                            <a data-bs-toggle="modal" data-bs-target="#leadModal" class="btn-main button-arounder lnk" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">Get Your Free Consultation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4 wow fadeIn">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-lg-6 my-auto px-4 ps-lg-5 py-3 py-md-3 py-lg-3 py-xl-0">
                        <h3 class="common-heading">Advertisement</h3>
                        <p class="pt-3">When we take about the advertisement in digital marketing so, first two names comes our mind google ads and fb ads.Both ads have their own value.Fb ads are best for branding and target base marketing while google ads is best for local base businesses or already existing services or products.We have FB &amp; Google ads experts who can give you unlimited leads and sales.</p>
                        <div class="hire-button mt-3">
                            <a data-bs-toggle="modal" data-bs-target="#leadModal" class="btn-main button-arounder lnk" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">Get Your Free Consultation</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="images/services/digital-marketing/advertisment-img.webp" alt="Advertisment" class="img-fluid">
                    </div>
                </div>
            </div>
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

<!--Start Why Choose-->
<section class="why-choose bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeIn">
					<h2 class="text-white">Why Choose <span>AppsNation</span></h2>
					<p class="text-white">We help a diverse clientele build result-driven web development products for different industries. </p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<div class="free-mobile-app-consultation"></div>
					</div>
					<h3 class="title">Certified Professionals</h3>
					<p class="description">We have certified digital marketing professionals who have years of experience in the industry.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<div class="expert-android-developers"></div>
					</div>
					<h3 class="title">Best Marketing Packages</h3>
					<p class="description">We provide affordable digital marketing packages for small and medium sized businesses.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<div class="flexible-hiring-models"></div>
					</div>
					<h3 class="title">24x7 Customer Support</h3>
					<p class="description">We work 24×7 to ensure that your business reaches the maximum possible audience.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<div class="technical-support"></div>
					</div>
					<h3 class="title">Free Consultation</h3>
					<p class="description">We help you to understand your customer requirements and provide a customized solution to your needs.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<div class="transparency"></div>
					</div>
					<h3 class="title">We Believe in Transparency</h3>
					<p class="description">We work with you throughout the project so that you can see the improvement of your business.</p>
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
					<h2>Our <span>Digital Marketing</span> Process</h2>
					<p>A good Digital marketing agency always has a proper digital marketing framework same as we have. We have a unique and proper digital marketing process, to make sure to give our clients the best results. We break our whole marketing process into a few steps:</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">01</p>
					<h3 class="title">RESARCH</h3>
					<p class="description">The first step is research. We need to know what is the market, what is the competition, what are the best strategies to use, and so on.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">02</p>
					<h3 class="title">MARKETING FRAMEWORK</h3>
					<p class="description">Once the research is done then, we start creating our marketing plan, and strategy. In this step, we create our entire marketing framework where we decide how will work on the marketing.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">03</p>
					<h3 class="title">EXECUTIONS</h3>
					<p class="description">After creating the marketing strategy now, we're going for implementations and executions.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">04</p>
					<h3 class="title">ANALYSE</h3>
					<p class="description">We strongly believe in A/B testing because marketing is about testing and testing.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">05</p>
					<h3 class="title">OPTIMIZE</h3>
					<p class="description">In the last Step, our senior marketing expert audit our whole marketing campaign or strategy in order to get more profit or ROI.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Process-->

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

			<div class="col-md-7 my-auto wow fadeIn">
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
            <div class="col-sm-12 mt20 wow fadeIn">
                <div class="accordion" id="accordionExample-a">
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-b">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1a" aria-expanded="true" aria-controls="collapseOne">
								What Does A Digital Marketer Do?
                            </button>
                        </h2>
                        <div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>A digital marketer is a person who is responsible for promoting your product or services on the internet by using various social media platforms. They are also responsible for driving traffic to your website.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								Would My Business Benefit From Digital Marketing Services?
                            </button>
                        </h2>
                        <div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>If you are a business owner then you know the importance of digital marketing and its various services. Digital marketing is the best way to reach to your target audience and to promote your business online. There are a lot of benefits associated with digital marketing. And it is also the best way to market your business in an efficient manner.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
								How Cost-Effective Is Digital Marketing Compared With Traditional Marketing?
                            </button>
                        </h2>
                        <div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Digital marketing has gained popularity in the past few years and it has become the most effective way to reach out to the target audience.</p>
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
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9a" aria-expanded="true" aria-controls="collapseOne">
								How Do You Identify A Successful Digital Marketing Company?
                            </button>
                        </h2>
                        <div id="collapse-9a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Here are the key factors that you should consider while selecting a good digital marketing company for your business:</p>
									<ul class="ps-5">
										<li>Does the company have a portfolio?</li>
										<li>Does the company have a team of experts?</li>
										<li>What is the duration of the contract?</li>
										<li>Is the company affordable?</li>
									</ul>
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