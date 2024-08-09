@extends('app.main')
@section('content')
<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav twod-art-page ">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 my-auto wow fadeInLeft">
				<div class="bread-titlev2 common-heading">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Finest <span> 2D Art Design </span>Development</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">Futurealiti brings together the best of traditional design and contemporary software to create unique designs. Our goal is to help you visualize your ideas in the most beautiful way possible through our exceptional 2D art design services.</p>
					<br><br>
					<a data-bs-toggle="modal" data-bs-target="#leadModal" class="btn-main button-arounder lnk wow fadeIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">Get Your Free Consultation <i class="fas fa-chevron-right fa-ani" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeInRight">
				<img src="images/services/2d-art/2d-art-banner-img.webp" class="img-fluid" alt="2D Android App Development">
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
					<img src="images/services/android-app-development/android-app-development.webp" alt="2D Android App Development" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-7 block-1 wow fadeInRight my-auto">
				<div class="common-heading text-l pl25">
					<!-- <span>Overview</span> -->
					<h2>Elevate Your Brand with Our <br> <span class="flup-theme">Custom 2D Art Design Services</span></h2>
					<p><strong>Craft Your Visual Story with Exquisite 2D Art</strong></p>
					<p>Futurealiti combines traditional artistry with modern techniques to bring your vision to life. Our 2D art design services are crafted to enhance your brand's visual appeal, helping you stand out in a crowded market.</p>
					<p>Transform your ideas into beautiful, functional art with Futurealiti. Let us help you create a lasting impression through exceptional 2D design.</p>
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
			<div class="col-lg-6 wow fadeInLeft">
				<div class="common-heading ptag">
					<h2>Our <span> 2D Art </span> Services</h2>
				</div>
			</div>
			<div class="col-lg-6 mt-3 wow fadeInRight">
				<div class="common-heading ptag">
					<p>We promise you top-notch service as we have the best-in-class web and mobile app development team. With a grade of pure professionals, project delivery is always on schedule with strict adherence to coding standards.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-6 wow fadeInLeft">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-designing-img"></div>
					</div>
					<div class="service-heading">
						<h4>2D Character Design Services</h4>
					</div>
					<div class="services-text-div">
						<p>A professional 2D character design service offers a wide range of different styles and crafts, allowing you to create a unique character design.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-6 mt-3 mt-lg-0 wow fadeInLeft">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-web-img"></div>
					</div>
					<div class="service-heading">
						<h4>2D Game UI UX Design Services</h4>
					</div>
					<div class="services-text-div">
						<p>2D UI/UX design services from a team of professionals with expertise in creating interactive designs that look good and find the right balance between functionality and aesthetics.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-6 mt-3 wow fadeInRight">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-app-porting-img"></div>
					</div>
					<div class="service-heading">
						<h4>2D Environment Design Services</h4>
					</div>
					<div class="services-text-div">
						<p>We help clients envision, plan and execute practical and dynamic immersive 2D environment experiences built to exceed users' expectations.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-6 mt-3 wow fadeInRight">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-app-testing-img"></div>
					</div>
					<div class="service-heading">
						<h4>2D Concept Art Design Services</h4>
					</div>
					<div class="services-text-div">
						<p>We provide clients with a broad spectrum of 2D concept art design services, including character development, storyboarding, 3D modeling, animation, and sound design</p>
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
				<p>Hire Expert
					<span>2D Artists</span>
				</p>
				<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Hire Now
					<i class="fas fa-chevron-right fa"></i>
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
						<img src="uploads/{!!$items['image']!!}" alt="2D img" class="img-fluid">
					</div>
					@else
					<div class="tab-pane fade" id="panel_a_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						<img src="uploads/{!!$items['image']!!}" alt="2D img" class="img-fluid">
					</div>
					@endif

					@endforeach

				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-7 my-auto pl-3 pl-sm-3 pl-md-5 pt-3 pt-sm-3 pt-md-3 pt-lg-0 wow fadeInRight">
				<h2>Finest 2D Art Design Development</h2>
				<p class="py-3">We bring together traditional art techniques and modern tools to create stunning 2D designs for your projects.</p>
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

<!--Start 2D Character Design -->
<section class="twod-character-design py-3 py-md-3 py-lg-5" id="services">
    <div class="container">
        <div class="row justify-content-center wow common-heading fadeInDown mt-3" style="visibility: visible; animation-name: fadeInDown;">
            <div class="col-lg-8">
                <h2 class=" text-center text-white"><span>2D Character</span> Design</h2>
                <p class="text-center text-white">Create high-quality 2D character designs in a snap with Futurealiti. Ideal for game development, graphic artists, and animators, we let you add variety to your illustrations right away.</p>
            </div>
        </div>
        <div class="row mt-4 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row p-lg-4">
                            <div class="col-lg-6 my-auto mx-auto d-block">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active px-4" data-bs-toggle="tab" href="#realistic">
                                            <img src="images/services/2d-art/realistic-character-design.webp" alt="2D 2D Realistic Character Design" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Realistic Character Design</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#causal">
                                            <img src="images/services/2d-art/casual-character-design.webp" alt="2D 2D Causal Character Design" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Causal Character Design</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#cartoon">
                                            <img src="images/services/2d-art/cartoon-character-design.webp" alt="2D 2D Cartoon Character Design" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Cartoon Character Design</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#stylized">
                                            <img src="images/services/2d-art/stylized-character-design.webp" alt="2D 2D Stylized Character Design" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Stylized Character Design</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <div class="tab-content">
                                    <div class="tab-pane container active" id="realistic">
                                        <img src="images/services/2d-art/realistic-character-design.webp" alt="2D 2D Realistic Character Design" class="img-fluid twod-character-design-img">
                                        <div class="twod-art-bottom-center">
                                            <h4 class="text-uppercase text-white">Realistic Character Design</h4>
                                            <p class="text-white">Designed from the ground up to be realistic and lifelike, Futurealiti will offer you that detail that makes your character stand out.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="causal">
                                        <img src="images/services/2d-art/casual-character-design.webp" alt="2D 2D Causal Character Design" class="img-fluid twod-character-design-img">
                                        <div class="twod-art-bottom-center">
                                            <h4 class="text-uppercase text-white">Casual Character Design</h4>
                                            <p class="text-white">Futurealiti creates elegant, informal illustrations that you can use for your next casual project. We are very excited to be able to create outstanding characters for you!</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="cartoon">
                                        <img src="images/services/2d-art/cartoon-character-design.webp" alt="2D 2D Cartoon Character Design" class="img-fluid twod-character-design-img">
                                        <div class="twod-art-bottom-center">
                                            <h4 class="text-uppercase text-white">Cartoon Character Design</h4>
                                            <p class="text-white">Futurealiti is a cartoon character design studio that can bring your imagination to life. From a simple idea, every character has its design and personality.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="stylized">
                                        <img src="images/services/2d-art/stylized-character-design.webp" alt="2D 2D Stylized Character Design" class="img-fluid twod-character-design-img">
                                        <div class="twod-art-bottom-center">
                                            <h4 class="text-uppercase text-white">Stylized Character Design</h4>
                                            <p class="text-white">Our characters are not just highly stylized but also full of personality. If you want to make sure that your characters are memorable and stand out, use a stylized design.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<div class="row justify-content-center py-5 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
			<div class="col-12">
				<div class="card twod-consultant-card">
					<div class="card-body">
						<div class="row py-4">
							<div class="col-md-6 my-auto text-xl-center">
								<p>Get Your Free Consultation</p>
							</div>
							<div class="col-md-6 my-auto text-xl-center">
                                <a data-bs-toggle="modal" data-bs-target="#leadModal" class="btn-main button-arounder lnk wow fadeIn" style="visibility: visible; animation-name: fadeIn;">Contact Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</section>
<!--End 2D Character Design -->

<!--Start 2D Environment Design -->
<section class="twod-environment-design py-3 py-md-3 py-lg-5" id="services">
    <div class="container">
        <div class="row justify-content-center common-heading wow fadeInDown mt-3" style="visibility: visible; animation-name: fadeInDown;">
            <div class="col-lg-8">
                <h2 class=" text-center text-white"><span>2D Environment</span> Design</h2>
                <p class="text-center text-white">We create exceptional 2D environments for your next business campaign, ad campaign, or product video. Our services are about creating environments that match your business needs!</p>
            </div>
        </div>
        <div class="row mt-4 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="col-12">
                <div class="card blue">
                    <div class="card-body">
                        <div class="row p-lg-4">
                        <div class="col-lg-6">
                                <div class="tab-content">
                                    <div class="tab-pane container active" id="game">
                                        <img src="images/services/2d-art/game-environments.webp" alt="2D 2D Game Environment Design" class="img-fluid twod-environment-design-img">
                                        <div class="twod-art-bottom-center">
                                            <H4 class="text-uppercase text-white">Game Environments</H4>
                                            <p class="text-white">With our expertise in 3D modeling and texturing, we create environment maps quickly, efficiently, and with high quality, creating an accurate representation of your game world.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="map-levels">
                                        <img src="images/services/2d-art/map-levels.webp" class="img-fluid twod-environment-design-img">
                                        <div class="twod-art-bottom-center">
                                            <H4 class="text-uppercase text-white">Maps &amp; Levels</H4>
                                            <p class="text-white">Our custom maps and levels focus on visual impact, flexibility, adaptability, and consistency within the virtual experience.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="biomes">
                                        <img src="images/services/2d-art/biomes.webp" alt="2D 2D Biomes Environment Design" class="img-fluid twod-environment-design-img">
                                        <div class="twod-art-bottom-center">
                                            <H4 class="text-uppercase text-white">Biomes</H4>
                                            <p class="text-white">Biomes give you a sense of realism by adding colorful, living plants, wandering creatures, plants, and water reflections to your 2D environment.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="urban">
                                        <img src="images/services/2d-art/urban-environments.webp" alt="2D 2D Urban Environment Design" class="img-fluid twod-environment-design-img">
                                        <div class="twod-art-bottom-center">
                                            <H4 class="text-uppercase text-white">Urban Environments</H4>
                                            <p class="text-white">Our experienced team has years of experience in architectural drawings, 3D Rendering, Animation, Revit Architecture, Autodesk Revit &amp; AutoCAD.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 my-auto">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link  active px-4" data-bs-toggle="tab" href="#game">
                                            <img src="images/services/2d-art/game-environments.webp" alt="2D Game Environment Design" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Game Environments </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  px-4" data-bs-toggle="tab" href="#map-levels">
                                            <img src="images/services/2d-art/map-levels.webp" alt="2D Map Environment Design" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Maps &amp; Levels</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  px-4" data-bs-toggle="tab" href="#biomes">
                                            <img src="images/services/2d-art/biomes-environment.webp" alt="2D Biomes Environment Design" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Biomes</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  px-4" data-bs-toggle="tab" href="#urban">
                                            <img src="images/services/2d-art/urban-environments.webp" alt="2D Urban Environment Design" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Urban Environments</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<div class="row justify-content-center py-5 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
			<div class="col-12">
				<div class="card twod-consultant-card">
					<div class="card-body">
						<div class="row py-4">
							<div class="col-md-6 my-auto text-xl-center">
								<p>Get Your Free Consultation</p>
							</div>
							<div class="col-md-6 my-auto text-xl-center">
                                <a data-bs-toggle="modal" data-bs-target="#leadModal" class="btn-main button-arounder lnk wow fadeIn" style="visibility: visible; animation-name: fadeIn;">Contact Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</section> 
<!--End 2D Environment Design -->

<!--Start 2D UI UX Design -->
<section class="twod-game-ui-ux-design py-3 py-md-3 py-lg-5" id="services">
    <div class="container">
        <div class="row justify-content-center common-heading wow fadeInDown mt-3" style="visibility: visible; animation-name: fadeInDown;">
            <div class="col-lg-8">
                <h2 class=" text-center text-white"><span>2D Game UI/UX</span> Design</h2>
                <p class="text-center text-white">Appsnation is a 2D game UI/UX design agency focused on creating great interfaces for games and apps. We can work with you to define a strategy that fits your business needs.</p>
            </div>
        </div>
        <div class="row mt-4 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="col-12">
                <div class="card blue">
                    <div class="card-body">
                        <div class="row  p-lg-4">
                            <div class="col-lg-6 my-auto">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active px-4" data-bs-toggle="tab" href="#ui-ux">
                                            <img src="images/services/2d-art/mobile-game-ui-ux.webp" alt="2D Mobile Game App UI/UX Design" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Mobile Game App UI/UX Design</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#wireframing">
                                            <img src="images/services/2d-art/mobile-game-wireframes.webp" alt="2D Mobile Game App Wireframing" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Mobile Game App Wireframing</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#ar-game">
                                            <img src="images/services/2d-art/ar-mobile-games.webp" alt="2D Mobile AR Game App" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Mobile AR Game App</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#vr-game">
                                            <img src="images/services/2d-art/vr-mobile-games.webp" alt="2D Mobile VR Game App" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Mobile VR Game App</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <div class="tab-content">
                                    <div class="tab-pane container active" id="ui-ux">
                                        <img src="images/services/2d-art/mobile-game-ui-ux.webp" alt="2D Mobile Game App UI/UX Design" class="img-fluid twod-game-ui-ux-design-img">
                                        <div class="twod-art-bottom-center">
                                            <H4 class="text-uppercase text-white">Mobile Game App UI/UX Design</H4>
                                            <p class="text-white">We specialize in developing mobile app UI/UX for iPhone and iPad, Android phones and Google tablets, Windows Phones, and Xbox 360.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="wireframing">
                                        <img src="images/services/2d-art/mobile-game-wireframes.webp" class="img-fluid twod-game-ui-ux-design-img">
                                        <div class="twod-art-bottom-center">
                                            <H4 class="text-uppercase text-white">Mobile Game App Wireframing</H4>
                                            <p class="text-white">Futurealiti offers the best 2D Game UI/UX designers who can help you design your gaming app wireframe as per the user requirement using the latest technology and design tools.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="ar-game">
                                        <img src="images/services/2d-art/ar-mobile-games.webp" alt="2D Mobile AR Game App" class="img-fluid twod-game-ui-ux-design-img">
                                        <div class="twod-art-bottom-center">
                                            <H4 class="text-uppercase text-white">Mobile AR Game App</H4>
                                            <p class="text-white">We provide outstanding game UI/UX and app design services for businesses looking to push themselves forward with AR technology.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="vr-game">
                                        <img src="images/services/2d-art/vr-mobile-games.webp" alt="2D Mobile VR Game App" class="img-fluid twod-game-ui-ux-design-img">
                                        <div class="twod-art-bottom-center">
                                            <H4 class="text-uppercase text-white">Mobile VR Game App</H4>
                                            <p class="text-white">With more than 8 years of experience in the field of VR, we offer excellent UI/UX design services for mobile apps, such as Google Cardboard, Hololens, etc.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<div class="row justify-content-center py-5 wow fadeInDown" style="visibility: hidden; animation-name: none;">
			<div class="col-12">
				<div class="card twod-consultant-card">
					<div class="card-body">
						<div class="row py-4">
							<div class="col-md-6 my-auto text-xl-center">
								<p>Get Your Free Consultation</p>
							</div>
							<div class="col-md-6 my-auto text-xl-center">
                                <a data-bs-toggle="modal" data-bs-target="#leadModal" class="btn-main button-arounder lnk wow fadeIn" style="visibility: hidden; animation-name: none;">Contact Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</section>
<!--End 2D UI UX Design -->

<!--Start 2D Concept Design -->
<section class="twod-concept-art py-3 py-md-3 py-lg-5" id="services">
    <div class="container">
        <div class="row justify-content-center common-heading wow fadeInDown mt-3" style="visibility: visible; animation-name: fadeInDown;">
            <div class="col-lg-8">
                <h2 class=" text-center text-white"><span>2D Concept Art</span> Design</h2>
                <p class="text-center text-white">Futurealiti is an innovative concept art design company looking to add a new layer of artistry and creativity to their client's project.</p>
            </div>
        </div>
        <div class="row mt-4 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="col-12">
                <div class="card blue">
                    <div class="card-body">
                        <div class="row p-lg-4">
                        <div class="col-lg-6">
                                <div class="tab-content">
                                    <div class="tab-pane container active" id="character">
                                        <img src="images/services/2d-art/character-concept-art.webp" alt="2D Character Concept Art" class="img-fluid twod-concept-art-img">
                                        <div class="twod-art-bottom-center">
                                            <H4 class="text-uppercase text-white">Character Concept Art</H4>
                                            <p class="text-white">Futurealiti provides 2D character concept art to design your next character as a part of your production by creating the best possible blueprint for your character.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="environment">
                                        <img src="images/services/2d-art/environment-concept-art.webp" alt="2D Environment Concept Art" class="img-fluid twod-concept-art-img">
                                        <div class="twod-art-bottom-center">
                                            <H4 class="text-uppercase text-white">Environment Concept Art</H4>
                                            <p class="text-white">We provide creative and professional 2D environmental concept art services to help bring your story to life with a richly detailed CG environment.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="level">
                                        <img src="images/services/2d-art/level-design-concept-art.webp" alt="2D Level Design Concept" class="img-fluid twod-concept-art-img">
                                        <div class="twod-art-bottom-center">
                                            <H4 class="text-uppercase text-white">Level Design Concept</H4>
                                            <p class="text-white">With our unique style and best 2D artwork, we can create, from inception to completion, a perfect level for your game.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="concept">
                                        <img src="images/services/2d-art/vehicles-and-guns-concept-art.webp" alt="2D Concepts of Vehicles, Weapons, and Props" class="img-fluid twod-concept-art-img">
                                        <div class="twod-art-bottom-center">
                                            <H4 class="text-uppercase text-white">Concepts of Vehicles, Weapons, and Props</H4>
                                            <p class="text-white">Our skilled art teams can also help create and produce drawings for developing renders, lighting, materials, and animation.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 my-auto">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active px-4" data-bs-toggle="tab" href="#character">
                                            <img src="images/services/2d-art/character-concept-art.webp" alt="2D Character Concept Art" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Character Concept Art</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#environment">
                                            <img src="images/services/2d-art/environment-concept-art.webp" alt="2D Environment Concept Art" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Environment Concept Art</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#level">
                                            <img src="images/services/2d-art/level-design-concept-art.webp" alt="2D Level Design Concept" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Level Design Concept</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#concept">
                                            <img src="images/services/2d-art/vehicles-and-guns-concept-art.webp" alt="2D Concepts of Vehicles, Weapons, and Props" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Concepts of Vehicles, Weapons, and Props</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<div class="row justify-content-center py-5 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
			<div class="col-12">
				<div class="card twod-consultant-card">
					<div class="card-body">
						<div class="row py-4">
							<div class="col-md-6 my-auto text-xl-center">
								<p>Get Your Free Consultation</p>
							</div>
							<div class="col-md-6 my-auto text-xl-center">
                                <a data-bs-toggle="modal" data-bs-target="#leadModal" class="btn-main button-arounder lnk wow fadeIn" style="visibility: visible; animation-name: fadeIn;">Contact Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</section>

<section class="service-block">
	<div class="container">
		<div class="-cta-btn mt50 mb50">
			<div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.1s" style="visibility: visible; animation-delay: 1.1s; animation-name: zoomInDown;">
				<p>Let's Discuss
					<span>Your Project</span>
				</p>
				<a data-bs-toggle="modal" data-bs-target="#leadModal"  class="btn-main button-arounder lnk">Get Free Consultation
					<i class="fas fa-chevron-right fa"></i>
					<span class="circle"></span>
				</a>
			</div>
		</div>
	</div>
</section>
<!--End 2D Concept Design -->

<!--Start Process-->
<section class="process-block bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeInLeft">
					<h2>Benefits of Our <span>2D Art Design</span> Services</h2>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeInRight">
					<!-- <p>AppsNation offers clients an easy and agile android app development process with a result-driven ideology.</p> -->
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeInLeft h-100">
					<p class="timeline-year">01</p>
					<!-- <h3 class="title">Requirement Analysis</h3> -->
					<p class="description">Our team has years of a strong background in graphic design, which makes them able to work on multiple projects at once.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeInLeft h-100">
					<p class="timeline-year">02</p>
					<!-- <h3 class="title">App Development Strategies</h3> -->
					<p class="description">Our designers are well-versed in the latest trends and designs, which helps us create unique designs that stand out from others.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeInLeft h-100">
					<p class="timeline-year">03</p>
					<!-- <h3 class="title">Wireframing And Designing</h3> -->
					<p class="description">We use the latest technologies to create our designs to be printed on various materials like paper, cardboard, and even plastic.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeInRight h-100">
					<p class="timeline-year">04</p>
					<!-- <h3 class="title">Development Phase</h3> -->
					<p class="description">We offer free consultations so you can get to know our work before hiring us for your project.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeInRight h-100">
					<p class="timeline-year">05</p>
					<!-- <h3 class="title">App Testing</h3> -->
					<p class="description">All our designs are fully customized to suit your needs, so there will be no compromise on quality when we create your designs for you!</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeInRight h-100">
					<p class="timeline-year">06</p>
					<!-- <h3 class="title">Ap Deployment</h3> -->
					<p class="description">Our experienced designers are available 24/7, so you do not have to worry about service delays.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeInRight h-100">
					<p class="timeline-year">07</p>
					<!-- <h3 class="title">Development Phase</h3> -->
					<p class="description">We offer affordable rates when compared to other companies within the industry.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeInRight h-100">
					<p class="timeline-year">08</p>
					<!-- <h3 class="title">App Testing</h3> -->
					<p class="description">At last, we are passionate about what we do!</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Process-->

<!--Start New Project-->
<section class="service-block py-5">
	<div class="container">
		<div class="-cta-btn">
			<div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.8s">
				<p>Let's Start a <span>New Project</span> Together</p>
				<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Inquire Now
					<i class="fas fa-chevron-right fa"></i>
					<span class="circle"></span>
				</a>
			</div>
		</div>
	</div>
</section>
<!--End New Project-->

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
							<img src="uploads/{{$item['image']}}" alt="2D ">
						</a>
					</li>

					@else

					<li>
						<a data-bs-toggle="tab" href="#a{{$item['id']}}" class="boximageicon-seo zoomed stack-hov">
							<img src="uploads/{{$item['image']}}" alt="2D ">
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
							<img src="uploads/{{$items['image']}}" alt="2D {{$items['heading']}} Logo">
							<h3 class="font-size-24 mt-0 head-size">{{$items['heading']}}</h3>
							<p class="mt-4">{{$items['content']}}</p>
						</div>
					</div>

					@else
					<div id="a{{$items['id']}}" class="tab-pane fade">
						<div class="boxseo-data text-start">
							<img src="uploads/{{$items['image']}}" alt="2D {{$items['heading']}} Logo">
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
									<img src="images/home/google-certifie-agency.webp" alt="2D Google Developers">
									<h6 class="pt-3">Google Developer<br>Certified Agency</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img src="images/home/adobe-logos.webp" alt="2D Adobe Solution Partner">
									<h6 class="pt-3">Adobe Solution<br>Partner Program</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img src="images/home/microsoft-certified-partner.webp" alt="2D Microsoft Certified Consulting">
									<h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img src="images/home/amazon-web-services.webp" alt="2D Amazon Web Service">
									<h6 class="pt-3">Amazon Web<br>Service Partner</h6>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-3 mt-3 text-center">
									<img src="images/home/google-certifie-agency.webp" alt="2D Google Developers">
									<h6 class="pt-3">Google Developer<br>Certified Agency</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img src="images/home/adobe-logos.webp" alt="2D Adobe Solution Partner">
									<h6 class="pt-3">Adobe Solution<br>Partner Program</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img src="images/home/microsoft-certified-partner.webp" alt="2D Microsoft Certified Consulting">
									<h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img src="images/home/amazon-web-services.webp" alt="2D Amazon Web Service">
									<h6 class="pt-3">Amazon Web<br>Service Partner</h6>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-3 mt-3 text-center">
									<img src="images/home/google-certifie-agency.webp" alt="2D Google Developers">
									<h6 class="pt-3">Google Developer<br>Certified Agency</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img src="images/home/adobe-logos.webp" alt="2D Adobe Solution Partner">
									<h6 class="pt-3">Adobe Solution<br>Partner Program</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img src="images/home/microsoft-certified-partner.webp" alt="2D Microsoft Certified Consulting">
									<h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img src="images/home/amazon-web-services.webp" alt="2D Amazon Web Service">
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
					<h2>Ranked as #1 <span>2D Art</span> Development Company</h2>
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
					<i class="fas fa-chevron-right fa"></i>
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
						<img src="images/about/reviews-icon-1.webp" alt="2D review" class="img-fluid">
					</a>
					<a href="#" target="blank" class="wow fadeIn col-lg-4 col-4" data-wow-delay=".4s">
						<img src="images/about/reviews-icon-2.webp" alt="2D review" class="img-fluid">
					</a>
					<a href="#" target="blank" class="wow fadeIn col-lg-4 col-4" data-wow-delay=".6s">
						<img src="images/about/reviews-icon-3.webp" alt="2D review" class="img-fluid">
					</a>
				</div>
			</div>
			<div class="col-lg-7 wow fadeInRight">
				<div class="pl50">
					<div class="shape shape-a1"><img src="images/shape/shape-3.svg" alt="2D shape"></div>
					<div class="testimonial-card-a tcd owl-carousel">

						@foreach($testimonials as $item)
						<div class="testimonial-card">
							<div class="tt-text">
								<p>{{$item['title']}}</p>
							</div>
							<div class="client-thumbs mt30">
								<div class="media v-center upset">
									<!-- <div class="user-image bdr-radius"> <img src="images/user-thumb/girl.webp" alt="2D girl" class="img-fluid rounded-circle" /> </div> -->
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
								What is 2D art?
                            </button>
                        </h2>
                        <div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>2D art refers to artwork created in two dimensions, typically on a flat surface like paper or a digital screen. This can include drawing, painting, printmaking, and digital art. 2D art typically only has width and height but no depth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								How long does it take to complete 2D Art Design?
                            </button>
                        </h2>
                        <div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>The timeline depends on the complexity of the project. A simple design may take a few hours. But some complex designs take weeks to complete.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
								How much does a 2D Digital Art Design cost?
                            </button>
                        </h2>
                        <div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>The cost of 2d digital art depends on different factors. It depends on your idea how much time it takes to complete. Cost also depends on the artist's experience and skill level. It is important to discuss all of these details with your chosen 2d digital art company before beginning any project so that both parties can agree on a fair price.</p>
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
						<img src="https://blog.appsnation.co/wp-content/uploads/{{$post['featured_image_url']}}" alt="2D {{$post['post_title']}}" class="img-fluid">
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
				<i class="fas fa-chevron-right fa"></i>
				<span class="circle"></span>
			</a>
		</div>
	</div>
</div>
<!--End Blogs-->

<section class="hire-developers py-3 py-md-3 py-lg-5">
    <div class="container">
        <div class="row justify-content-center wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
            <div class="col-12">
                <div class="card py-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <h2>Hire Dedicated <span>2D</span> Designer</h2>
                                <p class="pt-2">Looking for a dedicated 2D Art Designer having a good experience? You are at the right place for our clients Futurealiti also provides dedicated design resources. Our designers are capable of completing the complicated task in no time. Contact us today to get started!</p>
                                <a data-bs-toggle="modal" data-bs-target="#leadModal" class="btn-main button-arounder lnk wow fadeIn mt-3" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">Hire Developers Now <i class="fas fa-chevron-right fa-ani" aria-hidden="true"></i></a>
                            </div>
                            <div class="col-xl-6 mt-3">
                                <div class="row scroller">
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="card stack-hov">
                                            <div class="card-body">
                                                <img src="images/tech/photoshop-logo.webp" class="img-fluid d-block mx-auto" alt="2D Photoshop">
                                                <p class="text-center pt-2">Photoshop</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 mt-3 mt-md-0">
                                        <div class="card stack-hov">
                                            <div class="card-body">
                                                <img src="images/tech/illustrator-logo.webp" class="img-fluid d-block mx-auto" alt="2D Illustrator">
                                                <p class="text-center pt-2">Illustrator</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 mt-3 mt-lg-0">
                                        <div class="card stack-hov">
                                            <div class="card-body">
                                                <img src="images/tech/after-effects-logo.webp" class="img-fluid d-block mx-auto" alt="2D After Effects">
                                                <p class="text-center pt-2">After Effects</p>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 mt-3">
                                        <div class="card stack-hov">
                                            <div class="card-body">
                                                <img src="images/tech/xd-logo.webp" class="img-fluid d-block mx-auto" alt="2D XD">
                                                <p class="text-center pt-2">XD</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 mt-3">
                                        <div class="card stack-hov">
                                            <div class="card-body">
                                                <img src="images/tech/figma-logo.webp" class="img-fluid d-block mx-auto" alt="2D Figma">
                                                <p class="text-center pt-2">Figma</p>
                                            </div>
                                        </div>
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



@endsection