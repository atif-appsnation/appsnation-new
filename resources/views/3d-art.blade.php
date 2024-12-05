@extends('app.main')
@section('content')
<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 threed-art-banner">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
				<div class="bread-titlev2 common-heading">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Mesmerizing 3D Art Design Development</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">Art is not limited to being a picture on a wall. It can be a symbol of your ideas, feelings, and emotions. At AppsNation, we are passionate about 3D Art Design and world-class 3D renderings. We put our heart and soul into providing high-quality designs for you.</p>
				</div>
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
					<img src="images/services/3d-art/3d-art-development.webp" alt="3D Art Development" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-7 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="3D Art" class="light-bg-text bg-text">
						<h2>Mesmerizing <br> <span class="flup-theme">3D Art Design Services</span></h2>
					</div>
					<!-- <p><strong>Get an android app that you deserve - appealing user interface, robust responsiveness and functionality, feature-rich, and highly scalable.</strong></p> -->
					<p>Transform your ideas into stunning 3D visuals with AppsNation. Our passion for 3D art brings high-quality renderings that capture the essence of your vision. We specialize in creating captivating designs that express your ideas and emotions.</p>
					<p>Experience world-class 3D art that elevates your project's visual appeal. Let AppsNation bring your concepts to life with exceptional craftsmanship and innovative techniques.</p>
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
					<div data-text="Our Services" class="light-bg-text bg-text">
						<h2>Our <span>3D Art</span> Services</h2>
					</div>
					<p>We promise you top-notch service as we have the best-in-class web and mobile app development team. With a grade of pure professionals, project delivery is always on schedule with strict adherence to coding standards.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-6 col-lg-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-designing-img"></div>
					</div>
					<div class="service-heading">
						<h4>3D Character Design Services</h4>
					</div>
					<div class="services-text-div">
						<p>Appsnation helps you to produce high-quality 3D characters for animation and video games. We have experienced experts in character design for the entertainment industry.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-web-img"></div>
					</div>
					<div class="service-heading">
						<h4>3D Game UI UX Design Services</h4>
					</div>
					<div class="services-text-div">
						<p>3D Game UI/UX Design Services are highly required of today's innovators. AppsNation is a solution to help you build and design great games for your users.</p>
					</div>
				</div>
			</div>
			
			<div class="col-sm-12 col-md-6 col-lg-3 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-app-testing-img"></div>
					</div>
					<div class="service-heading">
						<h4>3D Environment Design Services</h4>
					</div>
					<div class="services-text-div">
						<p>To meet the demand of high-end companies, AppsNation creates 3D environments organized by a clear and distinctive visual style, simple but exquisite features, and beautiful animations.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-app-consultation-img"></div>
					</div>
					<div class="service-heading">
						<h4>3D Concept Art Design Services</h4>
					</div>
					<div class="services-text-div">
						<p>3D concept art is an integral part of the design of a product and serves a vital role in the overall branding strategy of any organization. And we do it gracefully!</p>
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
				<h2>Innovative 3D Art Design Services</h2>
				<p class="py-3">We transform your ideas into stunning 3D art, catering to various industries with precision and creativity.</p>
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

<!-- Start 3D Character Design -->
<section class="threed-character-design py-3 py-md-3 py-lg-5">
    <div class="container">
        <div class="row justify-content-center common-heading wow fadeIn mt-3">
            <div class="col-lg-8">
				<div data-text="Character" class="dark-bg-text bg-text">
                	<h2 class=" text-center text-white"><span>3D Character</span> Design</h2>
				</div>
                <p class="text-center text-white">At AppsNation, we design 3D characters in various styles- cartoon, realistic, and photorealistic – to create a unique personality that tells your story.</p>
            </div>
        </div>
        <div class="row mt-4 wow fadeIn">
            <div class="col-12">
                <div class="card blue">
                    <div class="card-body">
                        <div class="row p-lg-4">
                            <div class="col-lg-6 my-auto mx-auto d-block">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link px-4 active" data-bs-toggle="tab" href="#c-game">
                                            <img src="images/services/3d-art/game-character-design.webp" alt="3D Game Character Design" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Game Character Design</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#c-cartoon">
                                            <img src="images/services/3d-art/cartoon-character-design.webp" alt="3D Cartoon Character Design" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Cartoon Character Design</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#photorealistic">
                                            <img src="images/services/3d-art/photorealistic-character-design.webp" alt="3D Photorealistic Character Design" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Photorealistic Character Design</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#character">
                                            <img src="images/services/3d-art/character-design.webp" alt="3D Character Design" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Character Design</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <div class="tab-content">
                                    <div class="tab-pane container active" id="c-game">
                                        <img src="images/services/3d-art/game-character-design.webp" alt="3D Game Character Design" class="img-fluid threed-character-design-img w-100">
                                        <div class="threed-art-bottom-center">
                                            <h3 class="text-uppercase text-white">Game Character Design</h3>
                                            <p class="text-white">Imagine your character in the next big hit game being anything you like with AppsNation. You can be a doctor, a student, or even a zombie!</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="c-cartoon">
                                        <img src="images/services/3d-art/cartoon-character-design.webp" alt="3D Cartoon Character Design" class="img-fluid threed-character-design-img w-100">
                                        <div class="threed-art-bottom-center">
                                            <h3 class="text-uppercase text-white">Cartoon Character Design</h3>
                                            <p class="text-white">The character designer and animator from AppsNation has a wealth of experience and knowledge in designing cartoons for movies, TV, web pages, and other visual elements.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="photorealistic">
                                        <img src="images/services/3d-art/photorealistic-character-design.webp" alt="3D Photorealistic Character Design" class="img-fluid threed-character-design-img w-100">
                                        <div class="threed-art-bottom-center">
                                            <h3 class="text-uppercase text-white">Photorealistic Character Design</h3>
                                            <p class="text-white">We create realistic characters with a photorealistic look thanks to scanned costumes and natural hair and body rendering.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="character">
                                        <img src="images/services/3d-art/character-design.webp" alt="3D Character Design" class="img-fluid threed-character-design-img w-100">
                                        <div class="threed-art-bottom-center">
                                            <h3 class="text-uppercase text-white">Character Design</h3>
                                            <p class="text-white">We create fully animated characters equipped with a wide range of tools, such as facial expressions, eye shading, and lip gloss.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<div class="row justify-content-center py-5 wow fadeIn">
			<div class="col-12">
				<div class="card blue threed-consultant-card">
					<div class="card-body">
						<div class="row py-4">
							<div class="col-md-6 my-auto text-xl-center">
								<p>Get Your Free Consultation</p>
							</div>
							<div class="col-md-6 my-auto text-xl-center">
                                <a data-bs-toggle="modal" data-bs-target="#leadModal" class="btn-main button-arounder lnk">Contact Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</section>	
<!-- End 3D Character Design -->

<!-- Start 3D Environment Design -->
<section class="threed-environment-design py-3 py-md-3 py-lg-5">
    <div class="container">
        <div class="row justify-content-center common-heading wow fadeIn mt-3">
            <div class="col-lg-8">
				<div data-text="Environment" class="dark-bg-text bg-text">
					<h2 class="text-center text-white"><span>3D Environment</span> Design</h2>
				</div>
                <p class="text-center text-white">AppsNation is a leading 3D environment design, visualization, and simulation services, provider. We have an experienced team of artists and engineers that can transform your business idea into a reality.</p>
            </div>
        </div>
        <div class="row mt-4 wow fadeIn">
            <div class="col-12">
                <div class="card blue">
                    <div class="card-body">
                        <div class="row p-lg-4">
                        <div class="col-lg-6">
                                <div class="tab-content">
                                    <div class="tab-pane container active" id="e-game">
                                        <img src="images/services/3d-art/game-environment.webp" alt="3D Game Environment Design" class="img-fluid threed-environment-design-img w-100">
                                        <div class="threed-art-bottom-center">
                                            <h3 class="text-uppercase text-white">Game Environment</h3>
                                            <p class="text-white">Our 3D artists can create realistic game environments and prototypes that capture your audience's attention. Build your worlds to engage and immerse players.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="e-cartoon">
                                        <img src="images/services/3d-art/cartoon-game-environment.webp" alt="3D Cartoon Game Environment Design" class="img-fluid threed-environment-design-img w-100">
                                        <div class="threed-art-bottom-center">
                                            <h3 class="text-uppercase text-white">Cartoon Game Environment</h3>
                                            <p class="text-white">One of our core competencies is to create cartoon-like environments for complex projects. The team will develop unique and flawless 3D cartoon environments into the game with crisp textures.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="argame">
                                        <img src="images/services/3d-art/ar-game-environment.webp" alt="3D AR Environment Design" class="img-fluid threed-environment-design-img w-100">
                                        <div class="threed-art-bottom-center">
                                            <h3 class="text-uppercase text-white">AR Game Environment</h3>
                                            <p class="text-white">We offer a full suite of 3D environment design services for AR games, from the highest quality mockups to in-game interactive environments.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="vrgame">
                                        <img src="images/services/3d-art/vr-game-environment.webp" alt="3D VR Environment Design" class="img-fluid threed-environment-design-img w-100">
                                        <div class="threed-art-bottom-center">
                                            <h3 class="text-uppercase text-white">VR Game Environment</h3>
                                            <p class="text-white">We use the latest 3D and VR technology to design a complete environment representing your game and world, offering players an immersive and interactive experience.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 my-auto">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link px-4 active" data-bs-toggle="tab" href="#e-game">
                                            <img src="images/services/3d-art/game-environment.webp" alt="3D Game Environment Design" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Game Environment</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#e-cartoon">
                                            <img src="images/services/3d-art/cartoon-game-environment.webp" alt="3D Cartoon Game Environment Design" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Cartoon Game Environment</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#argame">
                                            <img src="images/services/3d-art/ar-game-environment.webp" alt="3D AR Environment Design" class="img-fluid d-block mx-auto">
                                            <p class="text-center">AR Game Environment</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#vrgame">
                                            <img src="images/services/3d-art/vr-game-environment.webp" alt="3D VR Environment Design" class="img-fluid d-block mx-auto">
                                            <p class="text-center">VR Game Environment</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<div class="row justify-content-center py-5 wow fadeIn">
			<div class="col-12">
				<div class="card blue threed-consultant-card">
					<div class="card-body">
						<div class="row py-4">
							<div class="col-md-6 my-auto text-xl-center">
								<p>Get Your Free Consultation</p>
							</div>
							<div class="col-md-6 my-auto text-xl-center">
                                <a data-bs-toggle="modal" data-bs-target="#leadModal" class="btn-main button-arounder lnk">Contact Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</section>
<!-- End 3D Environment Design -->

<!-- Start 3D Game Assets Design -->
<section class="threed-game-assets-design py-3 py-md-3 py-lg-5">
    <div class="container">
        <div class="row justify-content-center wow common-heading fadeIn mt-3">
            <div class="col-lg-8">
				<div data-text="Game Assets" class="dark-bg-text bg-text">
					<h2 class="text-center text-white"><span>3D Game Assets</span> Design</h2>
				</div>
                <p class="text-center text-white">We have been creating 3D models for over a decade and have become the leading provider of professional 3D game assets to studios, clients, and creators worldwide.</p>
            </div>
        </div>
        <div class="row mt-4 wow fadeIn">
            <div class="col-12">
                <div class="card blue">
                    <div class="card-body">
                        <div class="row p-lg-4">
                            <div class="col-lg-6 my-auto">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link px-4 active" data-bs-toggle="tab" href="#ui-ux">
                                            <img src="images/services/3d-art/game-weapon-design.webp" alt="3D Game Weapon Design" class="img-fluid d-block mx-auto">
                                            <p class="text-center">3D Game Weapon Design</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#wireframing">
                                            <img src="images/services/3d-art/game-vehicle-design.webp" alt="3D Game Vehicle Design" class="img-fluid d-block mx-auto">
                                            <p class="text-center">3D Game Vehicle Design</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#ar-game">
                                            <img src="images/services/3d-art/product-modeling.webp" alt="Product Modeling" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Product Modeling</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#vr-game">
                                            <img src="images/services/3d-art/modeling-nft.webp" alt="3D Modeling for NFT" class="img-fluid d-block mx-auto">
                                            <p class="text-center">3D Modeling for NFT</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <div class="tab-content">
                                    <div class="tab-pane container active" id="ui-ux">
                                        <img src="images/services/3d-art/game-weapon-design.webp" alt="3D Game Weapon Design" class="img-fluid threed-game-assets-design-img w-100">
                                        <div class="threed-art-bottom-center">
                                            <h3 class="text-uppercase text-white">3D Game Weapon Design</h3>
                                            <p class="text-white">With years of experience, we are ready to design weapon models with the core of 3D game technology to bring them to life.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="wireframing">
                                        <img src="images/services/3d-art/game-vehicle-design.webp" alt="3D Game Vehicle Design" class="img-fluid threed-game-assets-design-img w-100">
                                        <div class="threed-art-bottom-center">
                                            <h3 class="text-uppercase text-white">3D Game Vehicle Design</h3>
                                            <p class="text-white">Our design team can take your concept or ideas and create realistic and stunning 3D car models with cutting-edge technology.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="ar-game">
                                        <img src="images/services/3d-art/product-modeling.webp" alt="Product Modeling" class="img-fluid threed-game-assets-design-img w-100">
                                        <div class="threed-art-bottom-center">
                                            <h3 class="text-uppercase text-white">Product Modeling</h3>
                                            <p class="text-white">We focus on smooth and high-resolution 3D modeling to give your product the best possible appearance.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="vr-game">
                                        <img src="images/services/3d-art/modeling-nft.webp" alt="3D Modeling for NFT" class="img-fluid threed-game-assets-design-img w-100">
                                        <div class="threed-art-bottom-center">
                                            <h3 class="text-uppercase text-white">3D Modeling for NFT</h3>
                                            <p class="text-white">With outstanding expertise in 3D modeling for NFT, we can design your models based on your pictures, ideas, or requirements.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<div class="row justify-content-center py-5 wow fadeIn">
			<div class="col-12">
				<div class="card blue threed-consultant-card">
					<div class="card-body">
						<div class="row py-4">
							<div class="col-md-6 my-auto text-xl-center">
								<p>Get Your Free Consultation</p>
							</div>
							<div class="col-md-6 my-auto text-xl-center">
                                <a data-bs-toggle="modal" data-bs-target="#leadModal" class="btn-main button-arounder lnk">Contact Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</section>
<!-- End 3D Game Assets Design -->

<!-- Start 3D Sculpting Design -->
<section class="threed-sculpting-service py-3 py-md-3 py-lg-5">
    <div class="container">
        <div class="row justify-content-center common-heading wow fadeIn mt-3">
            <div class="col-lg-8">
				<div data-text="Sculpting" class="dark-bg-text bg-text">
					<h2 class=" text-center text-white"><span>3D Sculpting</span> Services</h2>
				</div>
                <p class="text-center text-white">At AppsNation, we specialize in 3D sculpting services to make your dreams a reality. Our skilled artisans will sculpt your ideas and take them to the next level to make them look and feel better with our high-end services.</p>
            </div>
        </div>
        <div class="row mt-4 wow fadeIn">
            <div class="col-12">
                <div class="card blue">
                    <div class="card-body">
                        <div class="row p-lg-4">
                        <div class="col-lg-6">
                                <div class="tab-content">
                                    <div class="tab-pane container active" id="s-character">
                                        <img src="images/services/3d-art/character-sculpting.webp" alt="3D Character Sculpting" class="img-fluid threed-sculpting-service-img w-100">
                                        <div class="threed-art-bottom-center">
                                            <h3 class="text-uppercase text-white">Character Sculpting</h3>
                                            <p class="text-white">We are a top-of-the-line character sculpting company. Our highly trained sculptors can create and mold any 3D character model of your design.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="s-environment">
                                        <img src="images/services/3d-art/environment-sculpting.webp" alt="3D Environment Sculpting" class="img-fluid threed-sculpting-service-img w-100">
                                        <div class="threed-art-bottom-center">
                                            <h3 class="text-uppercase text-white">Environment Sculpting</h3>
                                            <p class="text-white">AppsNation is a pioneer of 3D sculpting services, specializing in delivering clients realistic environmental and building models that they can use to drive good design processes.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="props">
                                        <img src="images/services/3d-art/pros-sculpting.webp" alt="3D Pros Sculpting" class="img-fluid threed-sculpting-service-img w-100">
                                        <div class="threed-art-bottom-center">
                                            <h3 class="text-uppercase text-white">Pros Sculpting</h3>
                                            <p class="text-white">We are a professional 3D props sculpting service company that offers expertise in photographic sculpting and the ability to visualize your ideas with real-world accuracy.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 my-auto">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link px-4 active" data-bs-toggle="tab" href="#s-character">
                                            <img src="images/services/3d-art/character-sculpting.webp" alt="3D Character Sculpting" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Character Sculpting</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#s-environment">
                                            <img src="images/services/3d-art/environment-sculpting.webp" alt="3D Environment Sculpting" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Environment Sculpting</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#props">
                                            <img src="images/services/3d-art/pros-sculpting.webp" alt="3D Pros Sculpting" class="img-fluid d-block mx-auto">
                                            <p class="text-center">Pros Sculpting</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<div class="row justify-content-center py-5 wow fadeIn">
			<div class="col-12">
				<div class="card blue threed-consultant-card">
					<div class="card-body">
						<div class="row py-4">
							<div class="col-md-6 my-auto text-xl-center">
								<p>Get Your Free Consultation</p>
							</div>
							<div class="col-md-6 my-auto text-xl-center">
                                <a data-bs-toggle="modal" data-bs-target="#leadModal" class="btn-main button-arounder lnk">Contact Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</section>
<!-- End 3D Sculpting Design -->

<!--Start Why Choose-->
<!-- <section class="why-choose bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeIn">
					<h2 class="text-white">Why Choose <span>AppsNation</span></h2>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeIn">
					<p class="text-white">We assist you in using Android's distinct set of characteristics by merging it with cutting-edge technologies such as Augmented Reality, Virtual Reality, Mixed Reality, and Blockchain.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<div class="free-mobile-app-consultation"></div>
					</div>
					<h3 class="title">Free Mobile App Consultation</h3>
					<p class="description">With AppsNation, you can consult your way to success for free.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<div class="expert-android-developers"></div>
					</div>
					<h3 class="title">50+ Expert Android Developers</h3>
					<p class="description">Unleash your true potential with best-in-class android developers across the globe.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<div class="flexible-hiring-models"></div>
					</div>
					<h3 class="title">Flexible Hiring Models</h3>
					<p class="description">AppsNation is accessible to everyone regardless of the business size and the industry with personalized pricing packages.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<div class="technical-support"></div>
					</div>
					<h3 class="title">24/7 Technical Support</h3>
					<p class="description">Never feel overwhelmed; our technical staff is available 24/7 to resolve any issues with the application.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<div class="transparency"></div>
					</div>
					<h3 class="title">100% Transparency</h3>
					<p class="description">With customer satisfaction our utmost priority, we keep ourselves transparent to the client to trust us with the app.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<div class="free-delivery-support"></div>
					</div>
					<h3 class="title">3-Months Free Support After Delivery</h3>
					<p class="description">We offer 3-months of free support after app launch to ensure the app's integrity.</p>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!--Start Why Choose-->

<section class="threed-art-services py-3 py-md-3 py-lg-5">
    <div class="container">
        <div class="row justify-content-center common-heading wow fadeIn mt-3">
            <div class="col-lg-8">
				<div data-text="Our Services" class="light-bg-text bg-text">
					<h2 class=" text-center">Our Extra <span>3D Art</span> Services</h2>
				</div>
                <p class="text-center">We promise you top-notch service as we have the best-in-class web and mobile app development team. With a grade of pure professionals, project delivery is always on schedule with strict adherence to coding standards.</p>
            </div>
        </div>
        <div class="row wow fadeIn mt-3">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="threed-art-extra-services-heading text-center">3D Scan Cleanup Services</h4>
                                    <img src="images/services/3d-art/3d-scan-cleanup-services.webp" alt="3D Scan Cleanup Service" class="img-fluid my-2 d-block mx-auto">
                                    <p class="threed-art-extra-services-text">At AppsNation, our primary focus is helping you clean up your 3D scan data in the most effective way possible. We replace the need for remeshing entirely with more robust reconstruction techniques like inverse design matrices (IDMs), which produce more precise edges and fewer artifacts. As a result, we know the best way to help them get their 3D scans cleaned up and ready for use again.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 mt-4 mt-lg-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="threed-art-extra-services-heading text-center">Skinning 3D Model Services</h4>
                                    <img src="images/services/3d-art/3d-model-skinning-services.webp" alt="Skinning 3D Model Services" class="img-fluid my-2 d-block mx-auto">
                                    <p class="threed-art-extra-services-text">If you're looking for a skinning 3D model service provider, AppsNation has the experience and expertise to get the job done. We know how to work with complex digital designs and turn them into perfectly-styled skinned models that are easy to use in your projects. In addition, we can take any image or design and turn it into a beautiful, accurately-skinned model that you can use in any of your projects.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 mt-4 mt-lg-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="threed-art-extra-services-heading text-center">Rigging Services</h4>
                                    <img src="images/services/3d-art/3d-rigging-services.webp" alt="Rigging Service" class="img-fluid my-2 d-block mx-auto">
                                    <p class="threed-art-extra-services-text">AppsNation has generated hundreds of seamless animations for video games and other forms of media. You may notice how effortlessly the characters move due to our outstanding rigging talents. We spend a lot of effort ensuring that every bone and joint in a skeleton animation is in the right place for the body to move naturally.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="threed-art-extra-services-heading text-center">3D Model Texturing Services</h4>
                                    <img src="images/services/3d-art/3d-model-texturing-services.webp" alt="3D Model Texturing Services" class="img-fluid my-2 d-block mx-auto">
                                    <p class="threed-art-extra-services-text">We specialize in creating realistic renderings of your digital models ready to be used in various applications, including gaming, film and television, and even education. Our talented team has years of experience working with digital models created by our clients and other companies and custom projects.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="threed-art-extra-services-heading text-center">Lighting and Shading Services</h4>
                                    <img src="images/services/3d-art/3d-lighting-and-shading-services.webp" alt="Lighting and Shading Services" class="img-fluid my-2 d-block mx-auto">
                                    <p class="threed-art-extra-services-text">At AppsNation, lighting is essential to the success of any project. We specialize in 3D art design and have been using lighting to create unique environments and realities for our clients. We offer a wide range of services, from traditional lighting setups to photorealistic rendering. Our team has years of experience creating lighting, lighting design, and shading design.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="threed-art-extra-services-heading text-center">3D Retopology Services</h4>
                                    <img src="images/services/3d-art/3d-retopology-services.webp" alt="3D Retopology Services" class="img-fluid my-2 d-block mx-auto">
                                    <p class="threed-art-extra-services-text">3D Retopology allows you to create an accurate 3D model of anything and then use that model to create a replica. Our retopology services are designed to help you create beautiful, realistic models of you and other spaces. We will take your existing photos or drawings and use them to create a 3D model that is accurate to the scale of the real thing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</section>

<!--Start Process-->
<section class="process-block bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Benefits" class="light-bg-text bg-text">
						<h2>Benefits of Our <span> 3D Art Design </span> Services</h2>
					</div>
					<p>AppsNation offers clients an easy and agile android app development process with a result-driven ideology.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">01</p>
					<!-- <h4 class="title">Requirement Analysis</h3> -->
					<p class="description">Our team has years of a strong background in graphic design, which makes them able to work on multiple projects at once./p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">02</p>
					<!-- <h3 class="title">App Development Strategies</h3> -->
					<p class="description">Our designers are well-versed in the latest trends and designs, which helps us create unique designs that stand out from other methods.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">03</p>
					<!-- <h3 class="title">Wireframing And Designing</h3> -->
					<p class="description">We use the latest technologies to create our designs to be printed on various materials like paper, cardboard, and even plastic.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">04</p>
					<!-- <h3 class="title">Development Phase</h3> -->
					<p class="description">We offer free consultations so you can get to know our work before hiring us for your project.	</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">05</p>
					<!-- <h3 class="title">App Testing</h3> -->
					<p class="description">All our designs are fully customized to suit your needs, so there will be no compromise on quality when we create your designs for you!</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">06</p>
					<!-- <h3 class="title">App Deployment</h3> -->
					<p class="description">Our experienced designers are available 24/7, so you do not have to worry about service delays.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">07</p>
					<!-- <h3 class="title">App Testing</h3> -->
					<p class="description">All our designs are fully customized to suit your needs, so there will be no compromise on quality when we create your designs for you!</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">08</p>
					<!-- <h3 class="title">App Deployment</h3> -->
					<p class="description">Our experienced designers are available 24/7, so you do not have to worry about service delays.</p>
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
				<div data-text="FAQ" class="light-bg-text bg-text">
					<h2 class="mb0 common-heading">Frequently Asked Questions</h2>
				</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 mt100 wow fadeIn">
                <div class="accordion" id="accordionExample-a">
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-b">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1a" aria-expanded="true" aria-controls="collapseOne">
								What is 3D Art?
                            </button>
                        </h2>
                        <div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>3D art is a form of art which have 3 dimensions. It is used to create images or scenes; elements in these images and scenes can include texture, shapes, and lightning.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								How long does it take to complete 3D Art Design?
                            </button>
                        </h2>
                        <div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>It depends on the project's complexity. It may take weeks, or some projects take months to complete.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
								How much does a 3D Digital Art design cost?
                            </button>
                        </h2>
                        <div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Normally if you want experienced designers to complete your 3d digital art, they will charge you a minimum of $20 per hour. In some cases, the cost can be raised because of its complexity.</p>
									
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

<!-- Start Hire -->
<section class="hire-developers py-3 py-md-3 py-lg-5">
    <div class="container">
		<div class="row">
			<div class="col-xl-6 my-auto">
				<div class="common-heading">
					<div data-text="Hire" class="dark-bg-text bg-text">
						<h2 class="text-white">Hire Dedicated Designers For Your <span>3D Art</span> Project</h2>
					</div>
				</div>
				<p class="pt-2 text-white">If you are looking for a dedicated 3d designer for your 3d art, AppsNation can be your first choice. For our clients, we offer dedicated 3d designers at hourly charges. Our designers are capable of completing the complicated task in no time. Contact us today to get started!</p>
				<a data-bs-toggle="modal" data-bs-target="#leadModal" class="btn-main button-arounder lnk mt-5">Hire Developers Now <i class="fas fa-chevron-right fa-ani" aria-hidden="true"></i></a>
			</div>
			<div class="col-xl-6 mt-3">
				<div class="row scroller">
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/photoshop-logo.webp" class="img-fluid d-block mx-auto" alt="Photoshop">
								<p class="text-center pt-2">Photoshop</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 mt-3 mt-md-0">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/maya-logo.webp" class="img-fluid d-block mx-auto" alt="Maya">
								<p class="text-center pt-2">Maya</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 mt-3 mt-lg-0">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/3ds-max-logo.webp" class="img-fluid d-block mx-auto" alt="3DS Max">
								<p class="text-center pt-2">3DS Max</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/blender-logo.webp" class="img-fluid d-block mx-auto" alt="Blender">
								<p class="text-center pt-2">Blender</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/marmoset-toolbag-logo.webp" class="img-fluid d-block mx-auto" alt="Marmoset Toolbag">
								<p class="text-center pt-2">Marmoset Toolbag</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/modo-logo.webp" class="img-fluid d-block mx-auto" alt="Modo">
								<p class="text-center pt-2">Modo</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/v-ray-logo.webp" class="img-fluid d-block mx-auto" alt="V-Ray">
								<p class="text-center pt-2">V-Ray</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/chaos-corona-logo.webp" class="img-fluid d-block mx-auto" alt="Corona">
								<p class="text-center pt-2">Corona</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/zbrush-logo.webp" class="img-fluid d-block mx-auto" alt="ZBrush">
								<p class="text-center pt-2">ZBrush</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/marvelous-designer-logo.webp" class="img-fluid d-block mx-auto" alt="Marvelous Designer">
								<p class="text-center pt-2">Marvelous</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/unreal-engine-logo.webp" class="img-fluid d-block mx-auto" alt="Unreal Engine">
								<p class="text-center pt-2">Unreal Engine</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/substance-designer-logo.webp" class="img-fluid d-block mx-auto" alt="Substance Designer">
								<p class="text-center pt-2">Substance Designer</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/unity-logo.webp" class="img-fluid d-block mx-auto" alt="Unity Designer">
								<p class="text-center pt-2">Unity</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/substance-painter-logo.webp" class="img-fluid d-block mx-auto" alt="Substance Painter">
								<p class="text-center pt-2">Substance Painter</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/mari-logo.webp" class="img-fluid d-block mx-auto" alt="Mari">
								<p class="text-center pt-2">Mari</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</section>
<!-- End Hire -->


@endsection