<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-5ZVNH97');
	</script>
	<!-- End Google Tag Manager -->

	<meta charset="utf-8" />
	<!-- <title>AppsNation | Top Rated Mobile App Development Company</title> -->
	<!-- <meta name="description" content="Top Rated Mobile App Development Company"> -->
	<!-- <meta name="keywords" content="AppsNation, Mobile App Development Company"> -->
	<!-- <meta name="author" content="rajesh-doot"> -->
	<meta name="viewport" content="width=device-width,initial-scale=1">
	@foreach($metatitle as $item)
	<title>{{ $item['title'] }}</title>
	@endforeach
	@foreach($metatag as $item)

	{!! htmlspecialchars_decode($item['tags']) !!}
	@endforeach
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- <meta name="theme-color" content="#4302b2"> -->
	<link href="images/logo/favicon.webp" rel="icon">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/plugin.min.css" rel="stylesheet">
	<link href="css/swiper.min.css" rel="stylesheet">
	<link href="css/all.min.css" rel="stylesheet">
	<link href="css/proximanova.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/darkmode.css" rel="stylesheet">
	<link rel="canonical" href="{{url()->current()}}" />

</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ZVNH97"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


	<!--Start Preloader -->
	<!-- <div class="onloadpage" id="page_loader">
		<div class="container loader-container">
			<div class="yellow"></div>
			<div class="red"></div>
			<div class="blue"></div>
			<div class="violet"></div>
		</div>
	</div> -->
	<!--End Preloader -->

	<!-- Start Sidemenu -->
	<div class="side-menu -medium -right -space --center">
		<ul class="sm-list">
			<li class="sm-item">
				<a href="{{url('/contact-us')}}" class="white black">
					<span class="sm-icon">
						<i class="fas fa-comment"></i>
					</span>
					<span class="sm-label">Chat with us</span>
				</a>
			</li>
			<li class="sm-item">
				<a href="tel:+12535284174" class="white black">
					<span class="sm-icon">
						<i class="fas fa-phone-alt"></i>
					</span>
					<span class="sm-label"> +1 (253) 528-4174</span>
				</a>
			</li>
			<li class="sm-item">
				<a href="{{url('/contact-us')}}" class="white black">
					<span class="sm-icon">
						<i class="fas fa-paper-plane"></i>
					</span>
					<span class="sm-label">Get a Quote</span>
				</a>
			</li>
		</ul>
	</div>
	<!-- End Sidemenu -->

	<!--Start Header -->
	<header class="nav-bg-b main-header navfix fixed-top menu-white">
		<div class="container m-pad">
			<div class="menu-header">
				<div class="dsk-logo">
					<a class="nav-brand" href="{{url('/')}}">
						<img src="images/logo/appsnation-white-logo.webp" alt="Logo" class="mega-white-logo" />
						<img src="images/logo/appsnation-logo.webp" alt="Logo" class="mega-darks-logo" />
					</a>
				</div>
				<div class="custom-nav d-block ml-auto" role="navigation">
					<ul class="nav-list">
						<li class=""> <a href="{{url('/')}}" class="menu-links">Home</a> </li>
						<li class="sbmenu"> <a href="{{url('/about-us')}}" class="menu-links">About Us</a>
							<div class="nx-dropdown">
								<div class="sub-menu-section">
									<div class="container">
										<div class="row">
											<div class="col-md-3 megamenu">
												<h5 class="megamenu-heading">About Us</h5>
												<div class="menu-item-description">A full-cycle software and mobile app development company with a world-class team of innovators.</div>
												<div class="row mt-3">
													<div class="col-md-6">
														<div class="companydetailmenu">
															<h4>8+</h4>
															<h5>Years</h5>
														</div>
													</div>
													<div class="col-md-6">
														<div class="companydetailmenu">
															<h4>200+</h4>
															<h5>Employees</h5>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-3 megamenu">
												<h5 class="megamenu-heading">Explore</h5>
												<ul>
													<li>
														<a href="{{url('/our-process')}}">
															<div class="menu-item-title">Our Process</div>
															<div class="menu-item-description">Mobile App Development</div>
														</a>
													</li>
													<li class="pt-4">
														<a href="{{url('/clients')}}">
															<div class="menu-item-title">Clients</div>
															<div class="menu-item-description">Our Global Clients</div>
														</a>
													</li>
												</ul>
											</div>
											<div class="col-md-3 megamenu">
												<h5 class="megamenu-heading">&nbsp;</h5>
												<ul>
													<li>
														<a href="{{url('/testimonials')}}">
															<div class="menu-item-title">Testimonials</div>
															<div class="menu-item-description">What our clients have to say</div>
														</a>
													</li>
													<li class="pt-4">
														<a href="{{url('/career')}}">
															<div class="menu-item-title">Careers</div>
															<div class="menu-item-description">Build your careers with us</div>
														</a>
													</li>
												</ul>
											</div>
											<div class="col-md-3 megamenu">
												<h5 class="megamenu-heading">&nbsp;</h5>
												<ul>
													<li>
														<a href="{{url('/tech-stack')}}">
															<div class="menu-item-title">Tech Stack</div>
															<div class="menu-item-description">Technologies we work with</div>
														</a>
													</li>
													<li class="pt-4">
														<a href="https://blog.appsnation.co/">
															<div class="menu-item-title">Blogs</div>
															<div class="menu-item-description">Stuff that Matters</div>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="sbmenu"> <a href="#" class="menu-links">Services</a>
							<div class="nx-dropdown">
								<div class="sub-menu-section">
									<div class="container">
										<div class="row">
											<div class="col-md-6 megamenu">
												<ul class="main-menu">
													<li>
														<a href="{{url('/mobile-app-development')}}">
															<div class="menu-item-img"> <img src="images/menu/mobile-app-development.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">Mobile App Development</div>
														</a>
														<ul class="main-submenu">
															<li> <a href="{{url('/android-app-development')}}">Android App Development</a> </li>
															<li> <a href="{{url('/ios-app-development')}}">iOS App Development</a> </li>
															<li> <a href="{{url('/game-app-development')}}">Game App Development</a> </li>
															<li> <a href="{{url('/cross-platform-app-development')}}">Cross Platform App Development</a> </li>
														</ul>
													</li>
													<li class="pt-4">
														<a href="{{url('/web-portal-app-development')}}">
															<div class="menu-item-img"> <img src="images/menu/web-portal-development.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">Web Portal Development</div>
														</a>
														<ul class="main-submenu">
															<li> <a href="{{url('/e-commerce-app-development')}}">E-Commerce App Development</a> </li>
															<li> <a href="{{url('/web-app-development')}}">Web App Development</a> </li>
														</ul>
													</li>
												</ul>
											</div>
											<div class="col-md-6 megamenu">
												<ul class="main-menu">
													<li>
														<a href="{{url('/ar-vr-app-development')}}">
															<div class="menu-item-img"> <img src="images/menu/ar-and-vr-app-development.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">AR & VR App Development</div>
														</a>
														<ul class="main-submenu">
															<li> <a href="{{url('/ar-app-development')}}">AR App Development</a> </li>
															<li> <a href="{{url('/vr-app-development')}}">VR App Development</a> </li>
														</ul>
													</li>
													<li class="pt-4">
														<a href="{{url('/connected-devices')}}">
															<div class="menu-item-img"> <img src="images/menu/connected-devices.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">Connected Devices</div>
														</a>
														<ul class="main-submenu">
															<li> <a href="{{url('/iot-app-development')}}">IoT App Development</a> </li>
															<li> <a href="{{url('/wearable-app-development')}}">Wearables App Development</a> </li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="sbmenu"> <a href="#" class="menu-links">Industries</a>
							<div class="nx-dropdown">
								<div class="sub-menu-section">
									<div class="container">
										<div class="row">
											<div class="col-md-4 megamenu">
												<ul class="main-menu">
													<li>
														<a href="{{url('/advertising')}}">
															<div class="menu-item-img"> <img src="images/menu/advertising.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">Advertising</div>
														</a>
													</li>
													<li class="pt-4">
														<a href="{{url('/healthcare-and-life-science')}}">
															<div class="menu-item-img"> <img src="images/menu/healthcare.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">Healthcare and Life Science</div>
														</a>
													</li>
													<li class="pt-4">
														<a href="{{url('/ecommerce-and-retail')}}">
															<div class="menu-item-img"> <img src="images/menu/e-commerce.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">E-commerce and Retail</div>
														</a>
													</li>
													<li class="pt-4">
														<a href="{{url('/education-and-human-resource')}}">
															<div class="menu-item-img"> <img src="images/menu/education.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">Education and Human Resource</div>
														</a>
													</li>
												</ul>
											</div>
											<div class="col-md-4 megamenu">
												<ul class="main-menu">
													<li>
														<a href="{{url('/software-and-high-tech')}}">
															<div class="menu-item-img"> <img src="images/menu/software-application.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">Software and High-Tech</div>
														</a>
													</li>
													<li class="pt-4">
														<a href="{{url('/automative-and-transport')}}">
															<div class="menu-item-img"> <img src="images/menu/transportation.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">Automative and Transport</div>
														</a>
													</li>
													<li class="pt-4">
														<a href="{{url('/gaming-and-leisure')}}">
															<div class="menu-item-img"> <img src="images/menu/gaming.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">Gaming and Leisure</div>
														</a>
													</li>
													<li class="pt-4">
														<a href="{{url('/financial-software-development')}}">
															<div class="menu-item-img"> <img src="images/menu/software-development.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">Financial Software Development</div>
														</a>
													</li>
												</ul>
											</div>
											<div class="col-md-4 megamenu">
												<ul class="main-menu">
													<li>
														<a href="{{url('/media-and-entertainment')}}">
															<div class="menu-item-img"> <img src="images/menu/entertaining.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">Media and Entertainment</div>
														</a>
													</li>
													<li class="pt-4">
														<a href="{{url('/travel-and-hospitality')}}">
															<div class="menu-item-img"> <img src="images/menu/travel.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">Travel & Hospitality</div>
														</a>
													</li>
													<li class="pt-4">
														<a href="{{url('/real-estate-and-property')}}">
															<div class="menu-item-img"> <img src="images/menu/real-state.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">Real Estate and Property</div>
														</a>
													</li>
													<li class="pt-4">
														<a href="{{url('/sports-teams-and-leagues')}}">
															<div class="menu-item-img"> <img src="images/menu/sports.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">Sports Teams and Leagues</div>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="sbmenu"> <a href="#" class="menu-links">Solutions</a>
							<div class="nx-dropdown">
								<div class="sub-menu-section">
									<div class="container">
										<div class="row">
											<div class="col-md-4 megamenu">
												<ul class="main-menu">
													<li class="pt-4">
														<a href="{{url('/booking-app')}}">
															<div class="menu-item-img"> <img src="images/menu/booking-app.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">Booking App</div>
														</a>
													</li>
													<li class="pt-4">
														<a href="{{url('/loyaltyapp')}}">
															<div class="menu-item-img"> <img src="images/menu/loyalty-app.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">Loyalty App</div>
														</a>
													</li>
													<li class="pt-4">
														<a href="{{url('/restaurant-app')}}">
															<div class="menu-item-img"> <img src="images/menu/restaurant-app.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">Restaurant App</div>
														</a>
													</li>
												</ul>
											</div>
											<div class="col-md-4 megamenu">
												<ul class="main-menu">
													<li class="pt-4">
														<a href="{{url('/fitness-app')}}">
															<div class="menu-item-img"> <img src="images/menu/fitness-app.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">Fitness App</div>
														</a>
													</li>
													
													<li class="pt-4">
														<a href="{{url('/mover-app')}}">
															<div class="menu-item-img"> <img src="images/menu/mover-app.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">Mover App</div>
														</a>
													</li>
													<li class="pt-4">
														<a href="{{url('/shopping-express-app')}}">
															<div class="menu-item-img"> <img src="images/menu/shopping-app.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">Shopping Express App</div>
														</a>
													</li>
												</ul>
											</div>
											<div class="col-md-4 megamenu">
												<ul class="main-menu">
													<li class="pt-4">
														<a href="{{url('/fleet-app')}}">
															<div class="menu-item-img"> <img src="images/menu/fleet-app.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">Fleet App</div>
														</a>
													</li>
													<li class="pt-4">
														<a href="{{url('/realestate-app')}}">
															<div class="menu-item-img"> <img src="images/menu/real-estate-app.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">Real Estate App</div>
														</a>
													</li>
													<li class="pt-4">
														<a href="{{url('/sport-app')}}">
															<div class="menu-item-img"> <img src="images/menu/sports-app.webp" class="services-icons"> </div>
															<div class="menu-item-title align-middle">Sport App</div>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class=""> <a href="{{url('/portfolio')}}" class="menu-links">Portfolio</a> </li>
						<li class=""> <a href="{{url('/contact-us')}}" class="menu-links">Contact Us</a> </li>
						<li>
							<!--<a href="#" class="menu-links right-bddr">&nbsp;</a>-->
							<!--menu right border-->
						<li class="contact-show">
							<a href="#" class="btn-round-  btn-br bg-btn"> <i class="fas fa-phone-alt"></i> </a>
							<div class="contact-inquiry">
								<div class="contact-info-">
									<div class="contct-heading">Contact Us</div>
									<div class="inquiry-card-nn">
										<ul>
											<li><a href="tel:+12535284174"><img src="images/flags/us.svg" alt="USA office" class="flags-size"> +1 (253) 528-4174 </a></li>
											<li><a href="tel:+966507438993"><img src="images/flags/sa.svg" alt="Saudi Arabia office" class="flags-size"> +966 507438993 </a> </li>
											<!-- <li><a href="tel:+922134388738"><img src="images/flags/pk.svg" alt="Pakistan office" class="flags-size"> +92 (21) 34388738 </a></li> -->
											<li><i class="fas fa-envelope"></i> <a href="mailto:info@appsnation.co">info@appsnation.co</a> </li>
											<li><i class="fas fa-envelope"></i> <a href="mailto:sales@appsnation.co">sales@appsnation.co</a> </li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li>
						    <a data-bs-toggle="modal" data-bs-target="#myModal" class="btn-br bg-btn3 btshad-b2 lnk">Request A Quote
						        <span class="circle"></span>
						    </a>
						</li>
					</ul>
				</div>
				<div class="mobile-menu2">
					<ul class="mob-nav2">
						<li>
							<a href="#" class="btn-round- btn-br bg-btn btshad-b1" data-bs-toggle="modal" data-bs-target="#menu-popup"> <i class="fas fa-envelope-open-text"></i> </a>
						</li>
						<li class="navm-">
							<a class="toggle" href="#"> <span></span> </a>
						</li>
					</ul>
				</div>
			</div>
			<!--Mobile Menu-->
			<nav id="main-nav">
				<ul class="first-nav">
					<li><a href="{{url('/')}}">Home</a></li>
					<li><a href="{{url('/about-us')}}">About Us</a>
						<ul>
							<li><a href="{{url('/our-process')}}">Our Process</a></li>
							<li><a href="{{url('/clients')}}">Clients</a></li>
							<li><a href="{{url('/testimonials')}}">Testimonials</a></li>
							<li><a href="{{url('/career')}}">Careers</a></li>
						</ul>
					</li>
					<li><a href="#">Services</a>
						<ul>
							<li><a href="{{url('/mobile-app-development')}}">Mobile App Development</a>
								<ul>
									<li><a href="{{url('/android-app-development')}}">Android App Development</a></li>
									<li><a href="{{url('/ios-app-development')}}">iOS App Development</a></li>
									<li><a href="{{url('/game-app-development')}}">Game App Development</a></li>
									<li><a href="{{url('/cross-platform-app-development')}}">Cross Platform App Development</a></li>
								</ul>
							</li>
							<li><a href="{{url('/ar-vr-app-development')}}">AR & VR App Development</a>
								<ul>
									<li><a href="{{url('/ar-app-development')}}">AR App Development</a></li>
									<li><a href="{{url('/vr-app-development')}}">VR Ap Development</a></li>
								</ul>
							</li>
							<li><a href="{{url('/web-portal-app-development')}}">Web Portal Development</a>
								<ul>
									<li><a href="{{url('/e-commerce-app-development')}}">E-Commerce App Development</a></li>
									<li><a href="{{url('/web-app-development')}}">Web App Development</a></li>
								</ul>
							</li>
							<li><a href="{{url('/connected-devices')}}">Connected Devices</a>
								<ul>
									<li><a href="{{url('/iot-app-development')}}">IoT App Development</a></li>
									<li><a href="{{url('/wearable-app-development')}}">Wearable App Development</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li> <a href="#">Industries</a>
						<ul>
							<li><a href="{{url('/advertising')}}">Advertising App Development</a> </li>
							<li><a href="{{url('/software-and-high-tech')}}">Software and High Tech</a> </li>
							<li><a href="{{url('/media-and-entertainment')}}">Media and Entertainment</a> </li>
							<li><a href="{{url('/healthcare-and-life-science')}}">Healthcare and Life Science</a> </li>
							<li><a href="{{url('/automative-and-transport')}}">Automative and Transport</a> </li>
							<li><a href="{{url('/travel-and-hospitality')}}">Travel & Hospitality</a> </li>
							<li><a href="{{url('/ecommerce-and-retail')}}">E-commerce and Retail</a> </li>
							<li><a href="{{url('/gaming-and-leisure')}}">Gaming and Leisure</a> </li>
							<li><a href="{{url('/real-estate-and-property')}}">Real Estate and Property</a> </li>
							<li><a href="{{url('/education-and-human-resource')}}">Education and Human Resource</a> </li>
							<li><a href="{{url('/financial-software-development')}}">Financial Software Development</a> </li>
							<li><a href="{{url('/sports-teams-and-leagues')}}">Sports Teams and Leagues</a> </li>
						</ul>
					</li>
					<li> <a href="#">Solutions</a>
						<ul>
							<li><a href="{{url('/booking-app')}}">Booking App</a></li>
							<li><a href="{{url('/fitness-app')}}">Fitness App</a></li>
							<li><a href="{{url('/fleet-app')}}">Fleet App</a></li>
							<li><a href="{{url('/loyaltyapp')}}">Loyalty App</a></li>
							<li><a href="{{url('/mover-app')}}">Mover App</a></li>
							<li><a href="{{url('/realestate-app')}}">Real Estate App</a></li>
							<li><a href="{{url('/restaurant-app')}}">Restaurant App</a></li>
							<li><a href="{{url('/shopping-express-app')}}">Shopping Express App</a></li>
							<li><a href="{{url('/sport-app')}}">Sport App</a></li>
						</ul>
					</li>
					<li> <a href="{{url('/portfolio')}}">Portfolio</a> </li>
					<li> <a href="{{url('/tech-stack')}}">Tech Stack</a> </li>
					<li> <a href="{{url('/contact-us')}}">Contact Us</a> </li>
				</ul>
				<ul class="bottom-nav">
					<li><a href="tel:+12535284174"><img src="images/flags/us.svg" alt="USA office" class="flags-size"> +1 (253) 528-4174 </a></li>
					<li><a href="tel:+966507438993"><img src="images/flags/sa.svg" alt="Saudi Arabia office" class="flags-size"> +966 507438993 </a> </li>
					<!-- <li><a href="tel:+922134388738"><img src="images/flags/pk.svg" alt="Pakistan office" class="flags-size"> +92 (21) 34388738 </a></li> -->
					<li><a href="mailto:info@appsnation.com"><i class="fas fa-envelope"></i> info@appsnation.com</a></li>
					<li><a href="mailto:sales@appsnation.com"><i class="fas fa-envelope"></i> sales@appsnation.com</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- Mobile Contact -->
	<div class="popup-modal">
		<div class="modal" id="menu-popup">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<div class="common-heading">
							<h4 class="mt0 mb0">Write a Message</h4>
						</div>
						<button type="button" class="closes" data-dismiss="modal">&times;</button>
					</div>
					<!-- Modal body -->
					<div class="modal-body">
						<div class="form-block fdgn2 mt10 mb10 mobile-contact-form">
							<form method="post" name="form" action="{{route('leadsmobile')}}">
								@csrf

								<div class="fieldsets row">
									<div class="col-md-12">
										<input type="text" placeholder="Full Name" name="name">
									</div>
									<div class="col-md-12">
										<input type="email" placeholder="Email Address" name="email">
									</div>
									<div class="col-md-12">
										<input type="number" placeholder="Contact Number" name="mobile">
									</div>
									<div class="col-md-12">
										<input type="text" placeholder="Subject" name="subject">
									</div>
									<div class="col-md-12">
										<textarea placeholder="Message" name="message"></textarea>
									</div>
								</div>
								<div class="fieldsets mt20 pb20 d-flex justify-content-center">
									<button type="submit" name="submit" class="lnk btn-main bg-btn">Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Mobile Contact -->
	
	<!--End Header -->