@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2">

    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 my-auto wow fadeInLeft">
                <div class="bread-titlev2">
                    <h1 class="banner-heading pt-3" data-wow-delay=".2s">Top-Rated Mobile App Development Company</h1>
                    <p class="mt2 text-white" data-wow-delay=".4s">Leverage the most used mobile platform to expand your business’s boundaries with our exceptional mobile app development services.</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 mt-4 mt-md-auto wow fadeInRight">
				<img src="images/services/mobile-app-development/mobile-app-banner-img.webp" class="img-fluid" alt="Mobile App Development">
			</div>
        </div>
    </div>
</section>
<!--End Hero-->

<!--Start About-->
<section class="service py-5">
    <div class="">
        <div class="row">
            <div class="col-lg-6">
                <div class="wow fadeInLeft">
                    <img src="images/services/mobile-app-development/mobile-app-development.webp" alt="Mobile App Development" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-6 block-1 wow fadeInRight my-lg-auto">
                <div class="common-heading text-l px-3 px-lg-0 pr-lg-4">
                    <h2>Scale-Up With Our<br> <span class="flup-theme">Custom Mobile App Development Services</span></h2>
                    <p>Turning your cellphone application and software related development cost into a foreseen revenue with strategically designed and modified algorithms to let you stand out in the competition. Our app developers are well equipped with the most recent tech gadgets to fulfill any of your required finest application development services.</p>
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
            <div class="col-lg-6 wow fadeInLeft">
                <div class="common-heading ptag">
                    <h2>Our Unrivaled Mobile App Development Services</h2>
                </div>
            </div>
			<div class="col-lg-6 wow fadeInRight">
                <div class="common-heading ptag">
                    <p class="mb30">AppsNation mobile app development services are the light of hope for you to reshape your business with more digital traction.</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-3 wow fadeInDown">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-img"></div>
					</div>
					<div class="service-heading">
						<h4>Android App Development</h4>
					</div>
					<div class="services-text-div">
						<p>Our Android app developers use the most up-to-date technologies to produce native apps with strong and adaptive architecture.</p>
						<a href="{{url('/android-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 mt-lg-0 wow fadeInDown">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="ios-img"></div>
					</div>
					<div class="service-heading">
						<h4>iOS App Development</h4>
					</div>
					<div class="services-text-div">
						<p>We specialize in developing full-featured iOS mobile apps that are reliable, scalable, and compatible with iPhone, iPad, Apple TV, and Apple Watch.</p>
						<a href="{{url('/ios-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 mt-lg-0 wow fadeInDown">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="cross-platform-img"></div>
					</div>
					<div class="service-heading">
						<h4>Cross-Platform App Development</h4>
					</div>
					<div class="services-text-div">
						<p>We create cross-platform and hybrid apps that help you save money by using a single code base and reducing time to market.</p>
						<a href="{{url('/cross-platform-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 mt-lg-0 wow fadeInDown">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="game-app-img"></div>
					</div>
					<div class="service-heading">
						<h4>Game App Development</h4>
					</div>
					<div class="services-text-div">
						<p>We have the top mobile game app developers working for us, and they've created a wide range of highly entertaining games.</p>
						<a href="{{url('/game-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
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

			<!--<div class="col-12 text-center mt-3">-->
			<!--	<a class="btn mb-3 mr-1" href="#tech" role="button" data-bs-slide="prev">-->
			<!--		<i class="fa fa-arrow-left"></i>-->
			<!--	</a>-->
			<!--	<a class="btn mb-3" href="#tech" role="button" data-bs-slide="next">-->
			<!--		<i class="fa fa-arrow-right"></i>-->
			<!--	</a>-->
			<!--</div>-->
		</div>
	</div>
</section>
<!-- End Technologies -->

<!--Start Badges-->
<section class="badges-section py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading w-tdxt fadeInLeft">
					<h2>Ranked as #1 <span>Mobile App</span> Development Companies</h2>
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

<!--Start Blogs-->
<section class="blogs-section py-5">
@if($data['status'] && count($data['data']) > 0)
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading wow fadeInLeft">
					<h2 class="mb30">Latest Stories</h2>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($data['data'] as $post)
			<div class="col-lg-4 col-sm-6 mt30 wow fadeInRight">
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
			<a href="https://blog.appsnation.co/category/mobile-app/" class="btn-main button-arounder lnk">View More
				<i class="fas fa-chevron-right fa-icon"></i>
				<span class="circle"></span>
			</a>
		</div>
	</div>
</div>
<!--End Blogs-->

@endsection