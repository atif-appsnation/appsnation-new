@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2 game-app-banner">
@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 my-auto wow fadeInLeft">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Professional Game Development Company</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">Be the top trend among the gamers and streamers with an ultimate game developed by our most reliable game developers.</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeInRight">
				<img src="images/services/game-app-development/game-app-banner-img.webp" class="img-fluid" alt="Game App Development">
			</div>
		</div>
	</div>
</section>
<!--End Hero-->

<!--Start About-->
<section class="service py-5 game-intro-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12 block-1 wow fadeInLeft">
				<div class="common-heading text-l pl25">
					<h2>Grab The Gamers With Our <br> <span class="flup-theme">Ultimate Game Development Services</span></h2>
					<p><strong>Announce your crazy and game-changing idea of a game among the gamers and the industry with our stellar game development services.</strong></p>
					<p>AppsNation is a renowned and reliable team of game developers, offering a wide range of game development services. Our mission is to turn those out-of-the-box ideas into reality with a highly functional and robust game developed by our exceptional game development services.</p>
					<p>We are on the verge of converting unique gaming ideas into reality to make it the next viral thing among gamers and the gaming industry. Our game developers are ingenious and go beyond conventional creativity to design your game with alluring aesthetics, perfect animation, and character design. The graphics depend on your requirements, yet we give it a realistic look to impress players.</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 my-auto">
				<div class="image-block wow fadeInRight">
					<img src="images/service/2.webp" alt="image" class="img-fluid no-shadow" />
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start Why Choose-->
<section class="service-block py-5 game-choose-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 wow fadeInLeft">
				<div class="common-heading ptag">
					<h2 class="text-white">Why Choose AppsNation</h2>
				</div>
			</div>
			<div class="col-lg-6 wow fadeInRight">
				<div class="common-heading ptag">
					<p class="text-white">We provide high-quality game development to clients all around the world. To produce excellent tales and exceptional gaming experiences, our team of tech-savvy game developers goes beyond the frontier of imagination.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-6 wow fadeInLeft">
				<div class="timeline-centered">
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<div class="timeline-icon">
								<img src="images/services/game-app-development/cross-icon.webp" alt="App Consultation" class="why-choose-img">
							</div>
							<div class="timeline-label">
								<h4 class="text-white">Cross Platform Support</h4>
								<p class="text-white">We are famous for developing games across different platforms using a single code-base for iOS, Android, Windows, and Blackberry.</p>
							</div>
						</div>
					</article>
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<div class="timeline-icon">
								<img src="images/services/game-app-development/design-icon.webp" alt="App Consultation" class="why-choose-img">
							</div>
							<div class="timeline-label">
								<h4 class="text-white">Design And Animation</h4>
								<p class="text-white">Our designers and animators create user-friendly top-class graphics of a game to impress players with the game design and animation.</p>
							</div>
						</div>
					</article>
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<div class="timeline-icon">
								<img src="images/services/game-app-development/ui-ux-icon.webp" alt="App Consultation" class="why-choose-img">
							</div>
							<div class="timeline-label">
								<h4 class="text-white">UI/UX Integration</h4>
								<p class="text-white">We power up the gaming experience with great UI/UX integration into the game and ensure no glitches while playing the game.</p>
							</div>
						</div>
					</article>
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<div class="timeline-icon">
								<img src="images/services/game-app-development/visuals-icon.webp" alt="App Consultation" class="why-choose-img">
							</div>
							<div class="timeline-label">
								<h4 class="text-white">Visuals And Graphics</h4>
								<p class="text-white">Our visual artists and graphics designers follow the latest graphics demand of players to ensure their addictiveness towards the game.</p>
							</div>
						</div>
					</article>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeInRight">
				<div class="timeline-centered">
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<div class="timeline-icon">
								<img src="images/services/game-app-development/robust-icon.webp" alt="App Consultation" class="why-choose-img">
							</div>
							<div class="timeline-label">
								<h4 class="text-white">Robust Game Development</h4>
								<p class="text-white">We are top-rated for developing bug-free, highly functional, and responsive games to offer players a flawless and amazing gaming experience.</p>
							</div>
						</div>
					</article>
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<div class="timeline-icon">
								<img src="images/services/game-app-development/push-icon.webp" alt="App Consultation" class="why-choose-img">
							</div>
							<div class="timeline-label">
								<h4 class="text-white">Push Notification Support</h4>
								<p class="text-white">We leverage the push notification feature with exciting alerts to preserve players' interest and engagement.</p>
							</div>
						</div>
					</article>
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<div class="timeline-icon">
								<img src="images/services/game-app-development/social-icon.webp" alt="App Consultation" class="why-choose-img">
							</div>
							<div class="timeline-label">
								<h4 class="text-white">Social Media Integration</h4>
								<p class="text-white">Itis essential to connect gamers to increase users, and we do it the right way with seamless social media integration.</p>
							</div>
						</div>
					</article>
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<div class="timeline-icon">
								<img src="images/services/game-app-development/monitization-icon.webp" alt="App Consultation" class="why-choose-img">
							</div>
							<div class="timeline-label">
								<h4 class="text-white">Monetization Of The Game</h4>
								<p class="text-white">We create result-driven monetization strategies for the game, including in-app purchases and ads.</p>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Why Choose-->

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
				<h2>Creative mobile app development agency</h2>
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

<!--Start Games-->
<section class="service-block py-5 game-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-12 col-lg-6"></div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 mt-4 mt-sm-4 mt-md-4 mt-lg-0 ">
				<div class="row wow fadeInRight">
					<div class="ptag text-center">
					    <h2 class="text-white pt-3">Our Game Development Services</h2>
					</div>
				</div>
				<div class="row mt-3 wow fadeInRight">
                    <div class="col-md-4 game-development-col">
                        <img src="images/services/game-app-development/casual.webp" alt="Causal Game" class="img-fluid">
                        <p class="center-text">Causal<p>
                    </div>

                    <div class="col-md-4 mt-3 mt-md-0 game-development-col">
                        <img src="images/services/game-app-development/action.webp" alt="Action Game" class="img-fluid">
                        <p class="center-text">Action<p>
                    </div>

                    <div class="col-md-4 mt-3 mt-md-0 game-development-col">
                        <img src="images/services/game-app-development/arcade.webp" alt="Arcade Game" class="img-fluid">
                        <p class="center-text">Arcade<p>
                    </div>

                    <div class="col-md-4 mt-3 game-development-col">
                        <img src="images/services/game-app-development/adventure.webp" alt="Adventure Game" class="img-fluid">
                        <p class="center-text">Adventure<p>
                    </div>

                    <div class="col-md-4 mt-3 game-development-col">
                        <img src="images/services/game-app-development/puzzle.webp" alt="Puzzle Game" class="img-fluid">
                        <p class="center-text">Puzzle<p>
                    </div>

                    <div class="col-md-4 mt-3 game-development-col">
                        <img src="images/services/game-app-development/multiplayer.webp" alt="Multiplayer Game" class="img-fluid">
                        <p class="center-text">Multiplayer<p>
                    </div>

                    <div class="col-md-4 mt-3 game-development-col">
                        <img src="images/services/game-app-development/racing.webp" alt="Racing Game" class="img-fluid">
                        <p class="center-text">Racing<p>
                    </div>

                    <div class="col-md-4 mt-3 game-development-col">
                        <img src="images/services/game-app-development/sports.webp" alt="Sports Game" class="img-fluid">
                        <p class="center-text">Sports<p>
                    </div>

                    <div class="col-md-4 mt-3 game-development-col">
                        <img src="images/services/game-app-development/combat.webp" alt="Combat Game" class="img-fluid">
                        <p class="center-text">Combact<p>
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
<!--End Service-->

<!--Start Process-->
<section class="service-block py-5 game-process-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="ptag wow fadeInLeft">
					<h2 class="text-white">Our Game Development Process</h2>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="ptag wow fadeInRight">
					<p class="text-white">AppsNation offers clients an easy and smooth game development process with a result-driven ideology.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="ptag wow fadeInLeft">
					<div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column mt-4">
						<div class="vertical-timeline-item vertical-timeline-element">
							<div>
								<span class="vertical-timeline-element-icon bounce-in">
									<div class="numbers">
										<p class="number text-white">1</p>
									</div>
								</span>
								<div class="vertical-timeline-element-content bounce-in">
									<h4 class="title text-white">Requirement Analysis</h4>
									<p class="description text-white">Bring your unique gaming idea to AppsNation. Our expert game analysts will analyze your game development requirements based on your target audience, type of game, platform choice, competition, and budget.</p>
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
									<h4 class="title text-white">Technical Requirements Analysis</h4>
									<p class="description text-white">Once you define your budget and goal, we now analyze your technical requirements such as the character design, technology to implement, level of graphics, features to include, and many other aspects based on your budget and targeted audience.</p>
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
									<h4 class="title text-white">Game Development Strategies</h4>
									<p class="description text-white">When every requirement is finalized, our game development expert analysts offer you a promising and result-driven plan to capture a remarkable share of the gaming industry. We help you become the new trend among gamers and streamers.</p>
								</div>
							</div>
						</div>
						<div class="vertical-timeline-item vertical-timeline-element">
							<div>
								<span class="vertical-timeline-element-icon bounce-in">
									<div class="numbers">
										<p class="number text-white">4</p>
									</div>
								</span>
								<div class="vertical-timeline-element-content bounce-in">
									<h4 class="title text-white">Game Designing</h4>
									<p class="description text-white">Our creative designers foster user-centric and client-focused game designs with the most preferable and recommended design studios and software. We provide games and gamers with a realistic feel for graphics and game design.</p>
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
									<h4 class="title text-white">Concept Art</h4>
									<p class="description text-white">Concept art is the drawing that gives an idea of the game environment, characters, surroundings, and overall map or world. We have highly ingenious individuals born as concept artists to sketch out your game.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="ptag wow fadeInRight">
					<div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column mt-4">
						<div class="vertical-timeline-item vertical-timeline-element">
							<div>
								<span class="vertical-timeline-element-icon bounce-in">
									<div class="numbers">
										<p class="number text-white">6</p>
									</div>
								</span>
								<div class="vertical-timeline-element-content bounce-in">
									<h4 class="title text-white">Art Asset Creation</h4>
									<p class="description text-white">Most games need a large number of creative materials. Artists, music composers, and voice actors must collaborate with designers and developers to ensure that all parts fit together. We have got you covered with the best of the bests.</p>
								</div>
							</div>
						</div>
						<div class="vertical-timeline-item vertical-timeline-element">
							<div>
								<span class="vertical-timeline-element-icon bounce-in">
									<div class="numbers">
										<p class="number text-white">7</p>
									</div>
								</span>
								<div class="vertical-timeline-element-content bounce-in">
									<h4 class="title text-white">Game Development</h4>
									<p class="description text-white">The programmers will be busy developing ideas, implementing new features, and addressing issues discovered along the way. We make sure to apply cutting-edge and customized technologies to build your perfect game.</p>
								</div>
							</div>
						</div>
						<div class="vertical-timeline-item vertical-timeline-element">
							<div>
								<span class="vertical-timeline-element-icon bounce-in">
									<div class="numbers">
										<p class="number text-white">8</p>
									</div>
								</span>
								<div class="vertical-timeline-element-content bounce-in">
									<h4 class="title text-white">Quality Assurance Testing</h4>
									<p class="description text-white">It is vital to ensure that the game operates as planned. Therefore, our quality assurance team never waits until the game is done; instead, testers begin their work as soon as anything is playable to save time and make the entire process go smoothly.</p>
								</div>
							</div>
						</div>
						<div class="vertical-timeline-item vertical-timeline-element">
							<div>
								<span class="vertical-timeline-element-icon bounce-in">
									<div class="numbers">
										<p class="number text-white">9</p>
									</div>
								</span>
								<div class="vertical-timeline-element-content bounce-in">
									<h4 class="title text-white">Final Delivery</h4>
									<p class="description text-white">Once the entire game is thoroughly tested on multiple devices and platforms with different settings, it is set to launch in the stores on the client's approval. Again, we follow all the guidelines and have years of experience launching games on various platforms.</p>
								</div>
							</div>
						</div>
						<div class="vertical-timeline-item vertical-timeline-element">
							<div>
								<span class="vertical-timeline-element-icon bounce-in">
									<div class="numbers">
										<p class="number text-white">10</p>
									</div>
								</span>
								<div class="vertical-timeline-element-content bounce-in">
									<h4 class="title text-white">Support & Maintenance</h4>
									<p class="description text-white">Following the release of the game's final version, it enters the last step of the game development process – post-production – which includes discovering and squashing defects and frequent software or content upgrades.</p>
								</div>
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
					<p class="mb30">We use a variety of technologies to create the perfect game based on your specifications.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5 wow fadeInLeft">
				<ul class="nav nav-tabs android-tech-tabs mt-5">
					@foreach($techstack as $k=>$item)

					@if($k==0)
					<li class="active">
						<a data-bs-toggle="tab" href="#a{{$item['id']}}" class="boximageicon-seo zoomed">
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

<!--Start Badges-->
<section class="badges-section py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading w-tdxt fadeInLeft">
					<h2>Ranked as #1 <span>Game App</span> Development Company</h2>
				</div>
			</div>
		</div>
		<!-- dynamic awards -->
		<div class="container">
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
            <div class="col-sm-12 mt30 wow fadeInRight">
                <div class="accordion" id="accordionExample-a">
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-b">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1a" aria-expanded="true" aria-controls="collapseOne">
								How is my game application idea protected?
                            </button>
                        </h2>
                        <div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>A Non-Disclosure Agreement (NDA) is a legally binding document that we use to ensure that your ideas are not copied or leaked to competitors when working on other projects. As a result, you should be less worried about the safety of your game concept.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								How long does it take to develop a game?
                            </button>
                        </h2>
                        <div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Most current PC or console games take three to five years to build, but a mobile game may be created in months. Various factors impact the duration of game development, such as; production time, including genre, scope, development platform, and asset count.</p>
									<p class="pt-2">The scale primarily determines the number of features, levels, visual assets, and technological sophistication of the game and the team's size, talent, and stability. For example, the average casual game usually takes 2–6 months to create, but the average AAA game takes 18–36 months to develop.</p>
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
									<p>We use various technologies to create the perfect game based on your specifications.</p>
									<p class="pt-2">Technologies We Used For Game Development:</p>
									<ul class="ps-5">
										<li>Unity</li>
										<li>Unreal Engine</li>
										<li>HTML5</li>
										<li>Java/J2EE</li>
										<li>Swift</li>
										<li>Photon</li>
										<li>WebRTC</li>
										<li>Ejjaberd</li>
										<li>AWS</li>
										<li>Google App Engine</li>
										<li>Azure</li>
										<li>Python</li>
										<li>Node.js</li>
										<li>Lens Studio</li>
										<li>Amazon Sumerian</li>
										<li>Vuforia</li>
										<li>ARToolkit</li>
										<li>Spark AR</li>
									</ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
								Do you provide ongoing support, maintenance, and updates?
                            </button>
                        </h2>
                        <div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>AppsNation is here to help businesses grow and thrive. As a result, we provide three months of free support and maintenance to keep your game updated and bug-free. Furthermore, the assistance term can be extended or modified based on the customer's needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
								How Much Does It Really Cost to Create a Mobile Game?
                            </button>
                        </h2>
                        <div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Mobile games are often developed for the iOS and Android platforms, with expenses ranging from $ 3,000 for basic mini-games to $ 150,000 for more complicated, multi-player games. Prices can also vary based on the features you wish to include, payment methods, administrative functions, game kind and complexity, marketing, and the development studio.</p>
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
			<a href="https://blog.appsnation.co/category/game-app/" class="btn-main button-arounder lnk">View More
				<i class="fas fa-chevron-right fa-icon"></i>
				<span class="circle"></span>
			</a>
		</div>
	</div>
</div>
<!--End Blogs-->

@endsection