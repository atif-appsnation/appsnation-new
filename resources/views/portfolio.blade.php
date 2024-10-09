@extends('app.main')
@section('content')

<!-- Start Breadcrumb -->
<section class="breadcrumb-areav2 portfolio">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container">
		<div class="row">
			<div class="col-lg-6 wow fadeInLeft">
				<div class="bread-titlev2">
					<h1 class="text-white">Portfolio</h1>
					<p class="banner-para mt20 w-100 pt-3">We create IoT Apps and help you connect with people, systems, and other applications to collect or share data.</p>
					<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk mt20">Discuss Your Project With Us
						<i class="fas fa-chevron-right fa-icon"></i>
						<span class="circle"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Breadcrumb -->

<!-- Start Portoflio -->

<!-- <section class="portfolio-page pad-tb">
	<div class="container">
		<div class="row justify-content-left">
			<div class="col-lg-5 my-auto">
				<div class="common-heading pp">
					<h2>Portfolio</h2>
				</div>
			</div>
			<div class="col-lg-7 v-center text-end">
				<div class="filters">
					<ul class="filter-menu1 mt-3">
						<a href="?a=Mobile">
							<li data-filter=".Mobile" class="is-checked">Mobile Apps</li>
						</a>
					
						<a href="?a=Web">
							<li data-filter=".Web" class="mt-2 mt-md-0">Web Apps</li>
						</a>
						
					</ul>
				</div>
			</div>
		</div>
		<div class="row card-list">
			<div class="col-lg-12 col-md-12 grid-sizer"></div>
			@foreach($portfolio as $items)
			<div class="col-lg-12 col-sm-12 single-card-item {!!$items['type']!!}">
				<div class="portfolio-block bg-gradient6">
					<div class="portfolio-item-info">

						<div class="mb20">
							<img src="uploads/{!!$items['icon']!!}" alt="logo" class="img-fluid">
						

						</div>

						<h3 class="mt30 mb30">
							{{$items['title']}}
						</h3>
						<h4><b>Project Description</b></h4>

						<br>
						<p>
							{{$items['content']}}
						</p>
						<br>
						<h5><b>Key Features</b></h5>

						<br>
						<ul class="info-list-ul">
							<li>{{$items['bullet_1']}}</li>
							<li>{{$items['bullet_2']}}</li>
							<li>{{$items['bullet_3']}}</li>
							<li>{{$items['bullet_4']}}</li>
						</ul>
						@if(isset($items['comments']))
						<div class="row">
							<div class="col-12 pt-4">
								<a href="{{url('/').'/'.$items['comments']}}" class="btn-main button-arounder lnk ">View Casestudy
									<i class="fas fa-chevron-right fa-icon"></i>
									<span class="circle"></span>
								</a>
							</div>
						</div>
						@endif
					</div>
					<div class="portfolio-item-image">
						<img src="uploads/{!!$items['image']!!}" alt="portfolio" class="img-fluid">
					</div>
				</div>
			</div>
			@endforeach
		</div>
		{!! $portfolio->links() !!}

		<div class="isotope-pager" style="padding-top: 15px; text-align:center;">

		</div>
	</div>

</section> -->


<!-- End Portfolio -->

<!--Start Portfolio-->
<section class="portfolio-section py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 fadeIn">
				<div class="common-heading">
					<div data-text="Our Portfolio" class="light-bg-text bg-text text-center">
						<h2 class="mb20 text-center">Our Latest Creative Work</h2>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="container py-lg-5 mt-3">
		<ul class="nav nav-pills justify-content-center fadeIn" role="tablist">
			<li class="nav-item ms-2">
				<a class="nav-link active" data-bs-toggle="-" href="?a=Mobile">App</a>
			</li>
			<li class="nav-item ms-2">
				<a class="nav-link active" data-bs-toggle="-" href="?a=Web">Web</a>
			</li>
		</ul>
		<div class="tab-content mt-5 wow fadeIn">

			@foreach($portfolio as $items)
			<div id="{!!$items['type']!!}" class="tab-pane active">
				<div class="row mt60">
					<div class="col-lg-12 col-sm-12 wptbb">
						<div class="pbwide shadow bg-gradient1">

							<div class="portfolio-item-info-tt">
								<div class="logowide mb20">
									<img src="uploads/{!!$items['icon']!!}" alt="{{$items['title']}}" class="img-fluid">
								</div>
								<div class="widebloktag">
									<span class="text-white">UI/UX Design</span>
								</div>
								<div class="widebloktag mt-4">
									<span class="text-white">Mobile App Development</span>
								</div>
								<h3 class="mt30 mb30">{{$items['title']}}</h3>
								<p class="mb30">{{$items['content']}}</p>
								<ul class="info-list-ul">
									<li>{{$items['bullet_1']}}</li>
									<li>{{$items['bullet_2']}}</li>
									<li>{{$items['bullet_3']}}</li>
									<li>{{$items['bullet_4']}}</li>
								</ul>
								<a href="{{url('/').'/'.$items['comments']}}" class="btn-outline lnk mt30">View Case Study
									<i class="fas fa-chevron-right fa-icon"></i>
									<span class="circle"></span>
								</a>
							</div>
							<div class="portfolio-wide-image">
								<div class="img-wide-blocktt tilt-outer">
									<div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
										<div>
											<img src="uploads/{!!$items['image']!!}" alt="{{$items['title']}}" class="img-fluid">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach


			<!-- <div id="web" class="tab-pane fade">
				<div class="row mt60">
					<div class="col-lg-12 col-sm-12 wptbb">
						<div class="pbwide shadow bg-gradient1">
							<div class="portfolio-item-info-tt">
								<div class="logowide mb20">
									<img src="images/case-studies/gym-logo.webp" alt="Gym App" class="img-fluid">
								</div>
								<div class="widebloktag">
									<span class="text-white">UI/UX Design</span>
								</div>
								<div class="widebloktag mt-4">
									<span class="text-white">Website Development</span>
								</div>
								<h3 class="mt30 mb30">Gym Web</h3>
								<p class="mb30">More than just a fitness app, Gymnasium acts as your personal trainer, nutritionist, and motivational coach—all conveniently housed within a user-friendly interface.</p>
								<ul class="info-list-ul">
									<li>Content Management</li>
									<li>User Management</li>
									<li>Bookings Management</li>
									<li>Promotions</li>
								</ul>
								<a href="{{url('/').'/'.$items['comments']}}" class="btn-outline lnk mt30">View Case Study
									<i class="fas fa-chevron-right fa-icon"></i>
									<span class="circle"></span>
								</a>
							</div>
							<div class="portfolio-wide-image">
								<div class="img-wide-blocktt tilt-outer">
									<div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
										<div>
											<img src="images/home/gym-web.webp" alt="Gym Web" class="img-fluid">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-sm-12 wptbb">
						<div class="pbwide shadow bg-gradient1">
							<div class="portfolio-item-info-tt">
								<div class="logowide mb20">
									<img src="images/case-studies/real-estate-logo.webp" alt="Real Estate Web" class="img-fluid">
								</div>
								<div class="widebloktag">
									<span class="text-white">UI/UX Design</span>
								</div>
								<div class="widebloktag mt-4">
									<span class="text-white">Website Development</span>
								</div>
								<h3 class="mt30 mb30">Real Estate Web</h3>
								<p class="mb30">Discover Avenue, the ultimate app for all your property buying and selling needs.</p>
								<ul class="info-list-ul">
									<li>Dashboard</li>
									<li>Properties Management</li>
									<li>Mortgage</li>
									<li>User Management</li>
								</ul>
								<a href="{{url('/case-studies/real-estate-web')}}" class="btn-outline lnk mt30">View Case Study
									<i class="fas fa-chevron-right fa-icon"></i>
									<span class="circle"></span>
								</a>
							</div>
							<div class="portfolio-wide-image">
								<div class="img-wide-blocktt tilt-outer">
									<div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
										<div>
											<img src="images/home/real-estate-web.webp" alt="Real Estate Web" class="img-fluid">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>
		<div class="mt-5">
			<center>
				{!! $portfolio->links() !!}
			</center>
		</div>
	</section>
</section>
<!--End Portfolio-->
@endsection